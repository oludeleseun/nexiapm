<?php
/**
 * class datei (file) provides methods to handle files and folders
 *
 * @author Open Dynamics / Philipp Kiszka <info@o-dyn.de>
 * @name datei
 * @version 0.7
 * @package Collabtive
 * @link http://www.o-dyn.de
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License v3 or later
 */
class datei
{
    /**
     * Constructor
     * Initialize the event log
     */
    function __construct()
    {
        $this->mylog = new mylog;
    }
    
    // FOLDER METHODS
    /**
     * Create a new folder
     *
     * @param int $project Project ID the folder belongs to
     * @param string $folder Name of the new folder
     * @param string $desc Description of the folder
     * @return bool
     */
    function addFolder($parent, $project, $folder, $desc, $visible = "")
    {
        $project = (int) $project;
        $folder = mysql_real_escape_string($folder);
        $folderOrig = $folder;
        $desc = mysql_real_escape_string($desc);
        if(!empty($visible))
        {
			$visstr = serialize($visible);
		}
		else
		{
			$visstr = "";
		}

        $folder = str_replace("ä", "ae" , $folder);
        $folder = str_replace("ö", "oe" , $folder);
        $folder = str_replace("ü", "ue" , $folder);
        $folder = str_replace("ß", "ss" , $folder);
        // remove whitespace
        $folder = preg_replace("/\W/", "", $folder);
        $folder = preg_replace("/[^-_0-9a-zA-Z]/", "_", $folder);
        // insert the folder into the db
        $ins = mysql_query("INSERT INTO projectfolders (parent,project,name,description,visible) VALUES ($parent,$project,'$folder','$desc','$visstr')");
        if ($ins)
        {
            // create the folder
            $makefolder = CL_ROOT . "/files/" . CL_CONFIG . "/$project/$folder/";
            if (!file_exists($makefolder))
            {
                if (mkdir($makefolder, 0777, true))
                {
                    // folder created
					$this->mylog->add($folderOrig, 'folder', 1, $project);
                    return true;
                }
            }
            else
            {
                // folder already existed, return false
                return false;
            }
        }
        else
        {
            // folder wasnt created , return false
            return false;
        }
    }

    /**
     * Delete a folder
     * Deletes the given folder with all files in it and all of its subfolders.
     *
     * @param int $id folder id
     * @param int $id project id
     * @return bool
     */
    function deleteFolder($id, $project)
    {
        $id = (int) $id;
        $folder = $this->getFolder($id);
        $files = $this->getProjectFiles($project, 10000, $id);
        // delete all the files in the folder from the database (and filesystem as well)
        foreach($files as $file)
        {
            $this->loeschen($file["ID"]);
        }
        if (!empty($folder["subfolders"]))
        {
            foreach($folder["subfolders"] as $sub)
            {
                $this->deleteFolder($sub["ID"], $sub["project"]);
            }
        }
        $del = mysql_query("DELETE FROM projectfolders WHERE ID = $id");
        if ($del)
		{
			// remove directory
			$foldstr = CL_ROOT . "/files/" . CL_CONFIG . "/$project/" . $folder["name"] . "/";
			delete_directory($foldstr);
			$this->mylog->add($folder["name"], 'folder', 3, $project);
			return true;
		}
    }

    /**
     * Get directory
     *
     * @param string $id Directory
     * @return array $files Found files and directories
     */
    function getFolder($id)
    {
        $id = (int) $id;
        $sel = mysql_query("SELECT * FROM projectfolders WHERE ID = $id LIMIT 1");
        $folder = mysql_fetch_array($sel);
        $folder["subfolders"] = $this->getSubFolders($folder["ID"]);

        return $folder;
    }

    /**
     * Recursively get subdirectories of a given directory
     *
     * @param int $id Directory
     * @return array $files Found files and directories
     */
    function getSubFolders($parent)
    {
        $parent = (int) $parent;
        $sel = mysql_query("SELECT * FROM projectfolders WHERE parent = $parent");

        $folders = array();

        while ($folder = mysql_fetch_array($sel))
        {
            $folder["subfolders"] = $this->getSubFolders($folder["ID"]);
            array_push($folders, $folder);
        }

        if (!empty($folders))
        {
            return $folders;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get all the directories in a project
     *
     * @param string $id project Project ID
     * @return array $files Found files and directories
     */
    function getProjectFolders($project, $parent = 0)
    {
        $project = (int) $project;

        $sel = mysql_query("SELECT * FROM projectfolders WHERE project = $project AND parent = $parent");
        $folders = array();

        while ($folder = mysql_fetch_array($sel))
        {
            $folder["subfolders"] = $this->getSubFolders($folder["ID"]);
            array_push($folders, $folder);
        }

        if (!empty($folders))
        {
            return $folders;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get all the directories in a project
     *
     * @param string $id project Project ID
     * @return array $files Found files and directories
     */
    function getAllProjectFolders($project)
    {
        $project = (int) $project;

        $sel = mysql_query("SELECT * FROM projectfolders WHERE project = $project");
        $folders = array();

        while ($folder = mysql_fetch_array($sel))
        {
            $folder["subfolders"] = $this->getSubFolders($folder["ID"]);
            array_push($folders, $folder);
        }

        if (!empty($folders))
        {
            return $folders;
        }
        else
        {
            return false;
        }
    }
    
    // FILE METHODS
    /**
     * Upload a file
     * Does filename sanitizing as well as MIME-type determination
     * Also adds the file to the database using add_file()
     *
     * @param string $fname Name of the HTML form field POSTed from
     * @param string $ziel Destination directory
     * @param int $project Project ID of the associated project
     * @return bool
     */
    function upload($fname, $ziel, $project, $folder = 0)
    {
        $name = $_FILES[$fname]['name'];
        $typ = $_FILES[$fname]['type'];
        $size = $_FILES[$fname]['size'];
        $tmp_name = $_FILES[$fname]['tmp_name'];
        $tstr = $fname . "-title";
        $tastr = $fname . "-tags";
        $visible = $_POST["visible"];

        if (!empty($visible[0]))
        {
            $visstr = serialize($visible);
        }
        else
        {
            $visstr = "";
        }

        $title = $_POST[$tstr];
        $tags = $_POST[$tastr];
        $error = $_FILES[$fname]['error'];
        $root = CL_ROOT;

        if (empty($name))
        {
            return false;
        }

        $desc = $_POST['desc'];

        $tagobj = new tags();
        $tags = $tagobj->formatInputTags($tags);
        // find the extension
        $teilnamen = explode(".", $name);
        $teile = count($teilnamen);
        $workteile = $teile - 1;
        $erweiterung = $teilnamen[$workteile];
        $subname = "";
        // if its a php file, treat it as plaintext so its not executed when opened in the browser.
        if (stristr($erweiterung, "php"))
        {
            $erweiterung = "txt";
            $typ = "text/plain";
        }

        for ($i = 0; $i < $workteile; $i++)
        {
            $subname .= $teilnamen[$i];
        }

        $randval = mt_rand(1, 99999);
        // only allow a-z , 0-9 in filenames, substitute other chars with _
        $subname = str_replace("ä", "ae" , $subname);
        $subname = str_replace("ö", "oe" , $subname);
        $subname = str_replace("ü", "ue" , $subname);
        $subname = str_replace("ß", "ss" , $subname);
        $subname = preg_replace("/[^-_0-9a-zA-Z]/", "_", $subname);
        // remove whitespace
        $subname = preg_replace("/\W/", "", $subname);
        // if filename is longer than 200 chars, cut it.
        if (strlen($subname) > 200)
        {
            $subname = substr($subname, 0, 200);
        }

        $name = $subname . "_" . $randval . "." . $erweiterung;
        $datei_final = $root . "/" . $ziel . "/" . $name;
        $datei_final2 = $ziel . "/" . $name;

        if (!file_exists($datei_final))
        {
            if (move_uploaded_file($tmp_name, $datei_final))
            {
               // $filesize = filesize($datei_final);

                if ($project > 0)
                {
                    /**
                     * file did not already exist, was uploaded, and a project is set
                     * add the file to the database, add the upload event to the log and return the file ID.
                     */
                    chmod($datei_final, 0755);
                    $fid = $this->add_file($name, $desc, $project, 0, "$tags", $datei_final2, "$typ", $title, $folder, $visstr);
					if(!empty($title))
					{
						$this->mylog->add($title, 'file', 1, $project);
                    }
					else
					{
						$this->mylog->add($name, 'file', 1, $project);
					}
					return $fid;
                }
                else
                {
                    // no project means the file is not added to the database wilfully. return file name.
                    return $name;
                }
            }
            else
            {
                // file was not uploaded / error occured. return false
                return false;
            }
        }
        else
        {
            // file already exists. return false
            return false;
        }
    }

    /**
     * Edit a file
     *
     * @param int $id File ID
     * @param string $title Title of the file
     * @param string $desc Description text
     * @param string $tags Associated tags (not yet implemented)
     * @return bool
     */
    function edit($id, $title, $desc, $tags)
    {
        $id = (int) $id;
        $title = mysql_real_escape_string($title);
        $desc = mysql_real_escape_string($desc);
        $tags = mysql_real_escape_string($tags);
        // get project for logging
        $sel = mysql_query("SELECT project FROM files WHERE ID = $id");
        $proj = mysql_fetch_row($sel);
        $project = $proj[0];

        $sql = mysql_query("UPDATE files SET `title` = '$title', `desc` = '$desc', `tags` = '$tags' WHERE id = $id");
        if ($sql)
        {
            $this->mylog->add($title, 'file' , 2, $project);
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Delete a file
     *
     * @param int $datei File ID
     * @return bool
     */
    function loeschen($datei)
    {
        $datei = (int) $datei;

        $sel1 = mysql_query("SELECT datei,name,project,title FROM files WHERE ID = $datei");
        $thisfile = mysql_fetch_row($sel1);
        if (!empty($thisfile))
        {
            $fname = $thisfile[1];
            $project = $thisfile[2];
            $ftitle = $thisfile[3];
            $thisfile = $thisfile[0];

            $delfile = "./" . $thisfile;

            if (!file_exists($delfile))
            {
                return false;
            }
            $del = mysql_query("DELETE FROM files WHERE ID = $datei");
            $del2 = mysql_query("DELETE FROM files_attached WHERE file = $datei");
            if ($del)
            {
                if (unlink($delfile))
                {
					if ($ftitle != "") {
						$this->mylog->add($ftitle, 'file', 3, $project);
					} else {
						$this->mylog->add($fname, 'file', 3, $project);
					}
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }

    /**
     * Return a file
     *
     * @param string $id File ID
     * @return array $file File details
     */

    function getFile($id)
    {
        $id = (int) $id;
        // get the file from MySQL
        $sel = mysql_query("SELECT * FROM files WHERE ID=$id");
        $file = mysql_fetch_array($sel);

        if (!empty($file))
        {
            // determine if there is an mimetype icon corresponding to the files mimetype. If not set 'none'
            $file['type'] = str_replace("/", "-", $file["type"]);
            $set = new settings();
            $settings = $set->getSettings();
            $myfile = "./templates/" . $settings["template"] . "/images/files/" . $file['type'] . ".png";
            if (!file_exists($myfile))
            {
                $file['type'] = "none";
            }
            // determine if its an image or textfile or some other file. this is needed for lightboxes
            if (stristr($file['type'], "image"))
            {
                $file['imgfile'] = 1;
            } elseif (stristr($file['type'], "text"))
            {
                $file['imgfile'] = 2;
            }
            else
            {
                $file['imgfile'] = 0;
            }
            // split the tags string into an array, and also count how many tags the file has
            $tagobj = new tags();
            $thetags = $tagobj->splitTagStr($file["tags"]);;
            $file["tagsarr"] = $thetags;
            $file["tagnum"] = count($file["tagsarr"]);
            // strip slashes from titles , desc and tags
            $file["title"] = stripslashes($file["title"]);
            $file["desc"] = stripslashes($file["desc"]);
            $file["tags"] = stripslashes($file["tags"]);
            $file["size"] = filesize(realpath($file["datei"])) / 1024;
            $file["size"] = round($file["size"]);
            $file["addedstr"] = date("d.m.y",$file["added"]);
            $userobj = new user();
            $file["userdata"] = $userobj->getProfile($file["user"]);



            return $file;
        }
        else
        {
            return false;
        }
    }

    /**
     * Move a file to another folder
     *
     * @param int $file File ID
     * @param int $folder Folder ID
     * @return bool
     */
    function moveFile($file, $target)
    {
        $file = (int) $file;
        $target = (int)$target;
        // Get the file
        $thefile = $this->getFile($file);
        // Get the target folder
        $thefolder = $this->getFolder($target);
        // Build filesystem paths
        $targetstr = "files/" . CL_CONFIG . "/" . $thefile["project"] . "/" . $thefolder["name"] . "/" . $thefile["name"];
        $rootstr = CL_ROOT . "/" . $thefile["datei"];
        // update database
        $upd = mysql_query("UPDATE files SET datei = '$targetstr', folder = '$thefolder[ID]' WHERE ID = $thefile[ID]");
        // move the file physically
        return rename($rootstr, $targetstr);
    }

    /**
     * List all files associated to a given project
     *
     * @param string $id Project ID
     * @param int $lim Limit
     * @param int $folder Folder
     * @return array $files Found files
     */
    function getProjectFiles($id, $lim = 25, $folder = "")
    {
        $id = (int) $id;
        $lim = (int) $lim;
        $folder = (int) $folder;

        if ($folder > 0)
        {
            $fold = "files/" . CL_CONFIG . "/$id/$folder/";
            $sel = mysql_query("SELECT COUNT(*) FROM files WHERE project = $id AND folder = $folder ORDER BY ID DESC");
        }
        else
        {
            $sel = mysql_query("SELECT COUNT(*) FROM files WHERE project = $id AND folder = 0 ORDER BY ID DESC");
        }
        $num = mysql_fetch_row($sel);
        $num = $num[0];
        SmartyPaginate::connect();
        // set items per page
        SmartyPaginate::setLimit($lim);
        SmartyPaginate::setTotal($num);

        $start = SmartyPaginate::getCurrentIndex();
        $lim = SmartyPaginate::getLimit();

        $files = array();

        if ($folder > 0)
        {
            $sql = "SELECT ID FROM files WHERE project = $id AND folder = $folder ORDER BY  ID DESC LIMIT $start,$lim";
            $sel2 = mysql_query($sql);
        }
        else
        {
            $sel2 = mysql_query("SELECT ID FROM files WHERE project = $id AND folder = 0 ORDER BY  ID DESC LIMIT $start,$lim");
        }
        while ($file = mysql_fetch_array($sel2))
        {
            if (!empty($file))
            {
                array_push($files, $this->GetFile($file["ID"]));
            }
        }

        if (!empty($files))
        {
            return $files;
        }
        else
        {
            return false;
        }
    }

    /**
     * List all files associated to a given project
     *
     * @param string $id Project ID
     * @param int $lim Limit
     * @param int $folder Folder
     * @return array $files Found files
     */
    function getAllProjectFiles($id)
    {
        $id = (int) $id;
        $lim = (int) $lim;
        $folder = (int) $folder;

        $files = array();

        $sel2 = mysql_query("SELECT ID FROM files WHERE project = $id  ORDER BY  ID DESC");

        while ($file = mysql_fetch_array($sel2))
        {
            if (!empty($file))
            {
                array_push($files, $this->getFile($file["ID"]));
            }
        }

        if (!empty($files))
        {
            return $files;
        }
        else
        {
            return false;
        }
    }

    /**
     * Seed the random number generator
     *
     * @return float $value Initial value
     */
    private function make_seed()
    {
        list($usec, $sec) = explode(' ', microtime());
        $value = (float) $sec + ((float) $usec * 100000);
        return $value;
    }

    /**
     * Add a file to the database
     *
     * @param string $name Filename
     * @param string $desc Description
     * @param int $project ID of the associated project
     * @param int $milestone ID of the associated milestone
     * @param string $tags Tags for the file (not yet implemented)
     * @param string $datei File path
     * @param string $type MIME Type
     * @param string $title Title of the file
     * @param int $ folder Optional parameter. It holds the ID of the subfolder the file is uploaded to (0 = root directory)
     * @return bool $insid
     */
    private function add_file($name, $desc, $project, $milestone, $tags, $datei, $type, $title, $folder = 0, $visstr = "")
    {
        $name = mysql_real_escape_string($name);
        $desc = mysql_real_escape_string($desc);
        $tags = mysql_real_escape_string($tags);
        $datei = mysql_real_escape_string($datei);
        $project = (int) $project;
        $milestone = (int) $milestone;
        $folder = (int) $folder;
        $userid = $_SESSION["userid"];
        $type = mysql_real_escape_string($type);
        $title = mysql_real_escape_string($title);
        $now = time();

        $ins = mysql_query("INSERT INTO files (`name`,`desc`,`project`,`milestone`,`user`,`tags`,`added`,`datei`,`type`,`title`,`folder`,`visible`) VALUES ('$name','$desc',$project,$milestone,$userid,'$tags','$now','$datei','$type','$title','$folder','$visstr')");

        if ($ins)
        {
            $insid = mysql_insert_id();
            return $insid;
        }
        else
        {
            return false;
        }
    }
}

?>