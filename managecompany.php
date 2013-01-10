<?php
require("init.php");
if (!isset($_SESSION['userid']))
{
    $template->assign("loginerror", 0);
    $template->display("login.tpl");
    die();
}


$company = (object) new company();

$action = getArrayVal($_GET, "action");
$redir = getArrayVal($_GET, "redir");
$id = getArrayVal($_GET, "id");
$usr = getArrayVal($_GET, "user");

$name = getArrayVal($_POST, "name");
$realname = getArrayVal($_POST, "realname");
$email = getArrayVal($_POST, "email");
$phone = getArrayVal($_POST, "phone");
$phone2 = getArrayVal($_POST, "phone2");
$website = getArrayVal($_POST, "website");
$address1 = getArrayVal($_POST, "address1");
$address2 = getArrayVal($_POST, "address2");
$logo = getArrayVal($_POST, "companylogo");
$country = getArrayVal($_POST, "country");
$state = getArrayVal($_POST, "state");
$rcnumber = getArrayVal($_POST, "rcnumber");
$shortname = getArrayVal($_POST, "shortname");

$projectid = array();
$projectid['ID'] = $id;
$template->assign("project", $projectid);

$strproj = utf8_decode($langfile["project"]);
$struser = utf8_decode($langfile["user"]);
$activity = $langfile["activity"];
$straction = utf8_decode($langfile["action"]);
$strtext = utf8_decode($langfile["text"]);
$strdate = utf8_decode($langfile["day"]);
$strstarted = utf8_decode($langfile["started"]);
$strdays = utf8_decode($langfile["daysleft"]);
$strdue = utf8_decode($langfile["due"]);
$stropen = utf8_decode($langfile["openprogress"]);
$strdone = utf8_decode($langfile["done"]);
$strdesc = utf8_decode($langfile["description"]);
$strrcnumber = utf8_decode($langfile["rcnumber"]);
$strshortname = utf8_decode($langfile["shortname"]);

$l = Array();
$l['a_meta_charset'] = 'UTF-8';
$l['a_meta_dir'] = 'ltr';
$l['a_meta_language'] = 'en';
$l['w_page'] = 'page';

$mode = getArrayVal($_GET, "mode");
$template->assign("mode", $mode);
// define the active tab in the project navigation
$classes = array("overview" => "overview_active", "msgs" => "msgs", "tasks" => "tasks", "miles" => "miles", "files" => "files", "users" => "users", "tracker" => "tracking");
$template->assign("classes", $classes);

if ($action == "editform")
{
    if (!$userpermissions["admin"])
    {
        $errtxt = $langfile["nopermission"];
        $noperm = $langfile["accessdenied"];
        $template->assign("errortext", "$errtxt<br>$noperm");
        $template->assign("mode", "error");
        $template->display("error.tpl");
        die();
    }
    $thiscompany = $company->getCompany($id);
    $title = $langfile["editcompany"];

    $template->assign("title", $title);
    $template->assign("company", $thiscompany);
    $template->display("editcompanyform.tpl");
} elseif ($action == "edit")
{
    if (!$userpermissions["admin"])
    {
        $errtxt = $langfile["nopermission"];
        $noperm = $langfile["accessdenied"];
        $template->assign("errortext", "$errtxt<br>$noperm");
        $template->assign("mode", "error");
        $template->display("error.tpl");
        die();
    }

    if(!$end)
	{
		$end = 0;
	}
	
	if (!empty($_FILES['userfile']['name']))
    {
        $fname = $_FILES['userfile']['name'];
        $typ = $_FILES['userfile']['type'];
        $size = $_FILES['userfile']['size'];
        $tmp_name = $_FILES['userfile']['tmp_name'];
        $error = $_FILES['userfile']['error'];
        $root = "./";

        $desc = $_POST['desc'];
        $teilnamen = explode(".", $fname);
        $teile = count($teilnamen);
        $workteile = $teile - 1;
        $erweiterung = $teilnamen[$workteile];

        $subname = "";
        if ($typ != "image/jpeg" and $typ != "image/png" and $typ != "image/gif")
        {
            $loc = $url . "managecompany.php?action=editform&id=$id";
            header("Location: $loc");
            die();
        }

        for ($i = 0; $i < $workteile; $i++)
        {
            $subname .= $teilnamen[$i];
        }
        list($usec, $sec) = explode(' ', microtime());
        $seed = (float) $sec + ((float) $usec * 100000);
        srand($seed);
        $randval = rand(1, 999999);

        $subname = preg_replace("/[^-_0-9a-zA-Z]/", "_", $subname);
        $subname = preg_replace("/\W/", "", $subname);

        if (strlen($subname) > 200)
        {
            $subname = substr($subname, 0, 200);
        }

        $fname = $subname . "_" . $randval . "." . $erweiterung;

        $datei_final = CL_ROOT . "/files/" . CL_CONFIG . "/avatar/" . $fname;

        if (move_uploaded_file($tmp_name, $datei_final))
        {
            $logo = $fname;
        }

        if ($company->edit($id, $name, $email, $phone, $phone2,  $address1, $address2, $state, $country, $website, $logo, $shortname, $rcnumber))
        {
            header("Location: managecompany.php?action=addform&id=$id&mode=edited");
        }
    }
	else{
		if ($company->edit($id, $name, $email, $phone, $phone2,  $address1, $address2, $state, $country, $website, $logo, $shortname, $rcnumber))
		{
			header("Location: managecompany.php?action=addform&id=$id&mode=edited");
		}
		else
		{
			$template->assign("editproject", 0);
		}
	}
} elseif ($action == "del")
{
    if (!$userpermissions["admin"]["del"])
    {
        $errtxt = $langfile["nopermission"];
        $noperm = $langfile["accessdenied"];
        $template->assign("errortext", "$errtxt<br>$noperm");
        $template->assign("mode", "error");
        $template->display("error.tpl");
        die();
    }
    if ($company->del($id))
    {
        if ($redir)
        {
            $redir = $url . $redir;
            header("Location: $redir");
        }
        else
        {
            header("Location: managecompany.php?addform&mode=deleted");
            echo "ok";
        }
    }
    else
    {
        $template->assign("delproject", 0);
    }
} 
elseif ($action == "addform")
{
    $classes = array("overview" => "active",
        "system" => "system",
        "users" => "users"
        );
    $title = $langfile['companymanagement'];
    $template->assign("title", $title);
    $template->assign("classes", $classes);
    $opros = $company->getAllCompanies();
    $clopros = $project->getProjects(0, 10000);
    $i = 0;
    $users = $company->getAllCompanies();
    if (!empty($opros))
    {
        foreach($opros as $opro)
        {
            $membs = $project->getProjectMembers($opro["ID"], 1000);
            $opros[$i]['members'] = $membs;
            $i = $i + 1;
        }
        $template->assign("opros", $opros);
    }

    $template->assign("users", $users);
    $template->assign("clopros", $clopros);
    $template->display("admincompany.tpl");
} elseif ($action == "addcompany")
{
    if (!$userpermissions["admin"])
    {
        $errtxt = $langfile["nopermission"];
        $noperm = $langfile["accessdenied"];
        $template->assign("errortext", "$errtxt<br>$noperm");
        $template->assign("mode", "error");
        $template->display("error.tpl");
        die();
    }
	
	if (!empty($_FILES['userfile']['name']))
    {
        $fname = $_FILES['userfile']['name'];
        $typ = $_FILES['userfile']['type'];
        $size = $_FILES['userfile']['size'];
        $tmp_name = $_FILES['userfile']['tmp_name'];
        $error = $_FILES['userfile']['error'];
        $root = "./";

        $desc = $_POST['desc'];
        $teilnamen = explode(".", $fname);
        $teile = count($teilnamen);
        $workteile = $teile - 1;
        $erweiterung = $teilnamen[$workteile];

        $subname = "";
        if ($typ != "image/jpeg" and $typ != "image/png" and $typ != "image/gif")
        {
            $loc = $url . "managecompany.php?action=editform&id=$id";
            header("Location: $loc");
            die();
        }

        for ($i = 0; $i < $workteile; $i++)
        {
            $subname .= $teilnamen[$i];
        }
        list($usec, $sec) = explode(' ', microtime());
        $seed = (float) $sec + ((float) $usec * 100000);
        srand($seed);
        $randval = rand(1, 999999);

        $subname = preg_replace("/[^-_0-9a-zA-Z]/", "_", $subname);
        $subname = preg_replace("/\W/", "", $subname);

        if (strlen($subname) > 200)
        {
            $subname = substr($subname, 0, 200);
        }

        $fname = $subname . "_" . $randval . "." . $erweiterung;

        $datei_final = CL_ROOT . "/files/" . CL_CONFIG . "/avatar/" . $fname;

        if (move_uploaded_file($tmp_name, $datei_final))
        {
            $logo = $fname;
        }

        if ($company->add($name, $email, $phone, $phone2,  $address1, $address2, $state, $country, $website, $logo))
        {
            header("Location: managecompany.php?action=addform&id=$id&mode=added");
        }
		else
		{
			$template->assign("addcompanyform", 0);
		}
    }
	else{

		$logo = 'default_logo.png';
		if ($company->add($name, $email, $phone, $phone2,  $address1, $address2, $state, $country, $website, $logo))
		{
			header("Location: managecompany.php?action=addform&mode=added");
		}
		else
		{
			$template->assign("addcompanyform", 0);
		}
	}
}

