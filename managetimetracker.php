<?php
require("init.php");
// check if the user is logged in
if (!isset($_SESSION["userid"]))
{
    $template->assign("loginerror", 0);
    $template->display("login.tpl");
    die();
}
$l = Array();
$l['a_meta_charset'] = 'UTF-8';
$l['a_meta_dir'] = 'ltr';
$l['a_meta_language'] = 'en';
// TRANSLATIONS --------------------------------------
$l['w_page'] = 'page';
// create timetracker instance
$tracker = new timetracker();
$projectObj = new project();

$action = getArrayVal($_GET, "action");
$day = getArrayVal($_POST, "day");
$started = getArrayVal($_POST, "started");
$ended = getArrayVal($_POST, "ended");
$estimatedHours = getArrayVal($_POST, "estimatedHours");
$tproject = getArrayVal($_POST, "project");
$task = getArrayVal($_POST, "ttask");
$logdate = getArrayVal($_POST, "ttday");
$comment = getArrayVal($_POST, "comment");
$redir = getArrayVal($_GET, "redir");
$mode = getArrayVal($_GET, "mode");
$id = getArrayVal($_GET, "id");
$tid = getArrayVal($_GET, "tid");
$user = getArrayVal($_GET, "user");
$start = getArrayVal($_GET, "start");
$end = getArrayVal($_GET, "end");
$usr = getArrayVal($_GET, "usr");
$taski = getArrayVal($_GET, "task");
$fproject = getArrayVal($_GET, "project");

/**
 * Get strings from the langfile and decode them to ASCII/ANSI
 * Needed for PDF
 */
$strproj = utf8_decode($langfile["project"]);
$strtimetrack = utf8_decode($langfile["timetracker"]);
$struser = utf8_decode($langfile["user"]);
$strstarted = utf8_decode($langfile["started"]);
$strday = utf8_decode($langfile["day"]);
$strended = utf8_decode($langfile["ended"]);
$strhours = utf8_decode($langfile["hours"]);
$strtask = utf8_decode($langfile["task"]);
$strestimatedHours = utf8_decode($langfile["estimatedHours"]);
$strestimatedCost = utf8_decode($langfile["estimatedCost"]);
$stractualCost = utf8_decode($langfile["actualCost"]);
$strhourlyrate = utf8_decode($langfile["rate"]);
// $strtimetable = utf8_decode($langfile["timetable"]);
$strcomment = utf8_decode($langfile["comment"]);

if (empty($usr))
{
    $usr = 0;
}
if (empty($taski))
{
    $taski = 0;
}

$template->assign("mode", $mode);
if (isset($id))
{
    $project = array('ID' => $id);
    $template->assign("project", $project);
}

$classes = array("overview" => "overview", "msgs" => "msgs", "tasks" => "tasks", "miles" => "miles", "files" => "files", "users" => "users", "tracker" => "tracking_active");
$template->assign("classes", $classes);

if ($action == "add")
{
	$worked = $_POST["worked"];
    $ajaxreq = $_GET["ajaxreq"];

	//$estimatedHours = mysql_escape_string($_POST['estimatedHours']);
	if ($tracker->add($userid, $tproject, $task, $comment , $started, $ended, $logdate, $estimatedHours))
    {
        $redir = urldecode($redir);
        if ($redir)
        {
            $redir = $url . $redir;
            header("Location: $redir");
        } elseif ($ajaxreq == 1)
        {
            echo "ok";
        }
        else
        {
            $loc = $url . "manageproject.php?action=showproject&id=$tproject&mode=timeadded";
            header("Location: $loc");
        }
    }
    else
    {
        $goback = $langfile["goback"];
        $endafterstart = $langfile["endafterstart"];
        $template->assign("mode", "error");
        $template->assign("errortext", "$endafterstart<br>$goback");
        $template->display("error.tpl");
    }
} elseif ($action == "editform")
{
    // create task and user instance
    $task = new task();
    $user = new user();
    // get track to edit
    $track = $tracker->getTrack($tid);
    // get username
    $member = $user->getProfile($track["user"]);
    $track["username"] = $member["name"];
    if ($track["task"] != 0)
    {
        // get task
        $thetask = $task->getTask($track["task"]);
        if (empty($thetask["title"]))
        {
            $taskname = substr($thetask["text"], 0, 30);
        }
        else
        {
            $taskname = substr($thetask["title"], 0, 30);
        }
        $track["taskname"] = $taskname;
    }
    $template->assign("track", $track);

    $tasks = $task->getProjectTasks($id);
    for ($i = 0; $i < count($tasks); $i++)
    {
        if (empty($tasks[$i]["title"]))
        {
            $name = substr($tasks[$i]["text"], 0, 30);
        }
        else
        {
            $name = substr($tasks[$i]["title"], 0, 30);
        }
        $tasks[$i]["name"] = $name;
    }
    $template->assign("tasks", $tasks);

    $title = $langfile['edittimetracker'];
    $template->assign("title", $title);

    $template->display("edittrackform.tpl");
} elseif ($action == "edit")
{
    $started = $day . " " . $started;
    $started = strtotime($started);
    $ended = $day . " " . $ended;
    $ended = strtotime($ended);
    if ($tracker->edit($tid, $task, $comment, $started, $ended, $estimatedHours))
    {
        if ($redir)
        {
            $redir = $url . $redir;
            header("Location: $redir");
        }
        else
        {
            $loc = $url . "managetimetracker.php?action=showproject&id=$id&mode=edited";
            header("Location: $loc");
        }
    }
} elseif ($action == "del")
{
    /*
    if (!$userpermissions["timetracker"]["del"])
    {
        $template->assign("errortext", "Permission denied.");
        $template->assign("mode", "error");
        $template->display("error.tpl");
        die();
    }
    */

    if ($tracker->del($tid))
    {
        $redir = urldecode($redir);
        if ($redir)
        {
            $loc = $url . $redir;
            header("Location: $loc");
        }
        else
        {
            // $loc = $url . "managetimetracker.php?action=showproject&id=$id&mode=deleted";
            echo "ok";
        }
    }
} elseif ($action == "projectxls")
{
    if (!chkproject($userid, $id))
    {
        $errtxt = $langfile["notyourproject"];
        $noperm = $langfile["accessdenied"];
        $template->assign("errortext", "$errtxt<br>$noperm");
        $template->assign("mode", "error");
        $template->display("error.tpl");
        die();
    }
    $excel = new xls(CL_ROOT . "/files/" . CL_CONFIG . "/ics/timetrack-$id.xls");

	/*$line = array('Client', 'Service', 'Date', 'Partner');
	$excel->writeLine($line);
	
	//$line = array("Client", "", "", "", $totaltime);
        $excel->writeRow();
        $excel->writeColspan("<b>Client:</b> Client Name", 2);
		$excel->writeColspan("<b>Service:</b>           ", 2);
		$excel->writeColspan("<b>Partner:</b>           ", 2);
        //$excel->writeCol("<b>$totaltime</b>");*/
	$projectData = $projectObj->getProject($id);
	
	$excel->writeRow();
		
		
    $line = array('Project', $strtask, $struser, $strhourlyrate, $strcomment, $strday, $strstarted, $strended, $strestimatedHours, $strestimatedCost, $strhours, $stractualCost, 'Hour Variance', 'Cost Variance');
    $excel->writeHeadLine($line, "128");
    if (!empty($start) and !empty($end))
    {
        $track = $tracker->getProjectTrack($id, $usr, $taski, $start, $end, 1000);
    }
    else
    {
        $track = $tracker->getProjectTrack($id, $usr , $taski, 0, 0, 1000);
    }

    if (!empty($track))
    {
		$totalEstimatedCost = 0; $totalActualCost = 0; $totalEstimatedHours = 0; $totalHrVariance = 0; $totalRateVariance = 0;
		$trv=0; $thv=0;
        foreach($track as $tra)
        {
            $hrs = round($tra["hours"], 2);
            $hrs = str_replace(".", ",", $hrs);
			//Extra calculations
			$estimatedCost = $tra['urate'] * $tra['estimatedHours'];
			$actualCost = $tra['urate'] * $hrs;
			
			$totalRateVariance = $estimatedCost - $actualCost;
			$totalHrVariance = $tra['estimatedHours'] - $hrs;
			$trv += $totalRateVariance;
			$thv += $totalHrVariance;
			
            $myArr = array($tra['pname'], $tra["tname"], $tra["uname"], $tra['urate'], $tra["comment"], $tra["daystring"], $tra["startstring"], $tra["endstring"], $tra['estimatedHours'], number_format($estimatedCost), $hrs, number_format($actualCost), $totalHrVariance, number_format($totalRateVariance));
            $excel->writeLine($myArr);
			$totalEstimatedCost += $estimatedCost;
			$totalActualCost += $actualCost;
			$totalEstimatedHours += $tra['estimatedHours'];
        }

        $totaltime = $tracker->getTotalTrackTime($track);
        $totaltime = str_replace(".", ",", $totaltime);
        $line = array("Total:", "", "", "", $totaltime);
        $excel->writeRow();
        $excel->writeColspan("<b>Total:</b>", 8);
        $excel->writeCol("<b>$totalEstimatedHours</b>");
		$excel->writeCol("<b>".number_format($totalEstimatedCost, 2)."</b>");
		$excel->writeCol("<b>$totaltime</b>");
		$excel->writeCol("<b>".number_format($totalActualCost, 2)."</b>");
		$excel->writeCol("<b>".$thv."</b>");
		$excel->writeCol("<b>".number_format($trv, 2)."</b>");
		
    }

    $excel->close();
    $loc = $url . "files/" . CL_CONFIG . "/ics/timetrack-$id.xls";
    header("Location: $loc");
} elseif ($action == "projectpdf")
{
    if (!chkproject($userid, $id))
    {
        $errtxt = $langfile["notyourproject"];
        $noperm = $langfile["accessdenied"];
        $template->assign("errortext", "$errtxt<br>$noperm");
        $template->display("error.tpl");
        die();
    }
    $sel = mysql_query("SELECT name FROM projekte WHERE ID = $id");
    $pname = mysql_fetch_row($sel);
    $pname = $pname[0];

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true);
    $pdf->SetHeaderData("", 0, "" , $langfile["timetable"] . " " . $pname);

    $pdf->setHeaderFont(Array(PDF_FONT_NAME_DATA, '', 20));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', 8));
    $pdf->SetHeaderMargin(0);
    $pdf->SetFont(PDF_FONT_NAME_DATA, "", 11);

    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
    $pdf->setLanguageArray($l);

    $pdf->AliasNbPages();
    $pdf->AddPage();
	
	$projectData = $projectObj->getProject($id);

    $htmltable = "
	<table border=\"1\" bordercolor = \"#d9dee8\" width=\"530\">
		<tr style=\"font-weight:bold;\">
		<th>CLIENT: $projectData[companyname]</th>
	    <th>SERVICE: $projectData[service]</th>
		<th>DATE: ".date('d/m/Y')."</th>
		<th style=\"color:#006600;\">PROJECT BUDGET:$projectData[budget]</th>
		</tr>
	</table>
	<br/><br/>
	<table border=\"1\" bordercolor = \"#d9dee8\" width=\"740\">
	<tr style=\"font-weight:bold;\">
	<th align=\"center\" width=\"80\">Task Performed</th>
    <th align=\"center\" width=\"80\">Performer</th>
    <th align=\"center\" width=\"90\" colspan=\"2\">Budget</th>
    <th align=\"center\" width=\"90\" colspan=\"2\">Actual</th>
    <th align=\"center\" width=\"90\" colspan=\"2\">Variance</th>
	<th align=\"center\" width=\"100\">Remarks</th>
	</tr>
	<tr bgcolor=\"#d9dee8\" style=\"font-weight:bold;font-size:25px;margin:5px;\">
	<th align=\"center\" width=\"80\"></th>
    <th align=\"center\" width=\"80\"></th>
    <th align=\"center\" width=\"30\">$langfile[hours]</th>
    <th align=\"center\" width=\"60\">$langfile[estimatedCost]</th>
    <th align=\"center\" width=\"30\">$langfile[hours]</th>
	<th align=\"center\" width=\"60\">$langfile[actualCost]</th>
	<th align=\"center\" width=\"30\">$langfile[hours]</th>
	<th align=\"center\" width=\"60\">Cost</th>
	<th align=\"center\" width=\"100\"></th>
	</tr>";
    if (!empty($start) and !empty($end))
    {
        $track = $tracker->getProjectTrack($id, $usr, $taski, $start, $end, 1000);
    }
    else
    {
        $track = $tracker->getProjectTrack($id, $usr , $taski, 0, 0, 1000);
    }
    $thetrack = array();
    if (!empty($track))
    {
		$totalEstimatedCost = 0; $totalActualCost = 0; $totalEstimatedHours = 0; $totalHrVariance = 0; $totalRateVariance = 0;
		$trv=0; $thv=0;
        $i = 0;
        foreach($track as $tra)
        {
            if (empty($tra["tname"]))
            {
                $tra["tname"] = "";
            }
            $hrs = round($tra["hours"], 2);
            $hrs = number_format($hrs, 2, ",", ".");

            $tra["comment"] = strip_tags($tra["comment"]);

            if ($i % 2 == 0)
            {
                $fill = "#ffffff";
            }
            else
            {
                $fill = "#d9dee8";
            }
            $i = $i + 1;
			
			//Extra calculations
			$estimatedCost = $tra['urate'] * $tra['estimatedHours'];
			$actualCost = $tra['urate'] * $hrs;
			
			$totalRateVariance = $estimatedCost - $actualCost;
			$totalHrVariance = $tra['estimatedHours'] - $hrs;
			$trv += $totalRateVariance;
			$thv += $totalHrVariance;

            $htmltable .= "<tr bgcolor=\"$fill\" style=\"font-size:25px;margin:5px;\">
			<td>$tra[tname]</td>
			<td>$tra[uname]</td>
			<td>$tra[estimatedHours]</td>
			<td>".number_format($estimatedCost,2)."</td>
			<td>$hrs</td>
			<td>".number_format($actualCost)."</td>
			<td>$totalHrVariance</td>
			<td>".number_format($totalRateVariance)."</td>
			<td>$tra[comment]</td>
			</tr>";
			$totalEstimatedCost += $estimatedCost;
			$totalActualCost += $actualCost;
			$totalEstimatedHours += $tra['estimatedHours'];
        }

        $totaltime = $tracker->getTotalTrackTime($track);
        $totaltime = str_replace(".", ",", $totaltime);

        $htmltable .= "<tr style=\"font-weight:bold;\">
		<td colspan=\"2\"></td>
		<td>".$totalEstimatedHours."</td>
		<td>".number_format($totalEstimatedCost, 2)."</td>
		<td>$totaltime</td>
		<td>".number_format($totalActualCost,2)."</td>
		<td>$thv</td>
		<td>".number_format($trv)."</td>
		<td></td>
		</tr></table>";

        $pdf->writeHTML($htmltable, true, 0, true, 0);
        $pdf->Output("project-$id-timetable.pdf", "D");
    }
} elseif ($action == "userxls")
{
    $excel = new xls(CL_ROOT . "/files/" . CL_CONFIG . "/ics/user-$id-timetrack.xls");

    $excel->writeRow();
    $line = array('Project', $strtask, $struser, $strhourlyrate, $strcomment, $strday, $strstarted, $strended, $strestimatedHours, $strestimatedCost, $strhours, $stractualCost, 'Hour Variance', 'Cost Variance');
    $excel->writeHeadLine($line, "128");
    if (!empty($start) and !empty($end))
    {
        $track = $tracker->getUserTrack($id, $fproject, $taski, $start, $end);
    }
    else
    {
        $track = $tracker->getUserTrack($id, $fproject, $taski, 0, 0 , 1000);
    }
    if (!empty($track))
    {
        $totalEstimatedCost = 0; $totalActualCost = 0; $totalEstimatedHours = 0; $totalHrVariance = 0; $totalRateVariance = 0;
		$trv=0; $thv=0;
        foreach($track as $tra)
        {
            $hrs = round($tra["hours"], 2);
            $hrs = str_replace(".", ",", $hrs);
			//Extra calculations
			$estimatedCost = $tra['urate'] * $tra['estimatedHours'];
			$actualCost = $tra['urate'] * $hrs;
			
			$totalRateVariance = $estimatedCost - $actualCost;
			$totalHrVariance = $tra['estimatedHours'] - $hrs;
			$trv += $totalRateVariance;
			$thv += $totalHrVariance;
			
            $myArr = array($tra['pname'], $tra["tname"], $tra["uname"], $tra['urate'], $tra["comment"], $tra["daystring"], $tra["startstring"], $tra["endstring"], $tra['estimatedHours'], number_format($estimatedCost,2), $hrs, number_format($actualCost,2), $totalHrVariance, number_format($totalRateVariance,2));
            $excel->writeLine($myArr);
			$totalEstimatedCost += $estimatedCost;
			$totalActualCost += $actualCost;
			$totalEstimatedHours += $tra['estimatedHours'];
        }

        $totaltime = $tracker->getTotalTrackTime($track);
        $totaltime = str_replace(".", ",", $totaltime);
        $line = array("Total:", "", "", "", $totaltime);
        $excel->writeRow();
        $excel->writeColspan("<b>Total:</b>", 8);
        $excel->writeCol("<b>$totalEstimatedHours</b>");
		$excel->writeCol("<b>".number_format($totalEstimatedCost,2)."</b>");
		$excel->writeCol("<b>$totaltime</b>");
		$excel->writeCol("<b>".number_format($totalActualCost,2)."</b>");
		$excel->writeCol("<b>".$thv."</b>");
		$excel->writeCol("<b>".number_format($trv,2)."</b>");
    }

    $excel->close();
    $loc = $url . "files/" . CL_CONFIG . "/ics/user-$id-timetrack.xls";
    header("Location: $loc");
} elseif ($action == "userpdf")
{
    if (!empty($start) and !empty($end))
    {
        $track = $tracker->getUserTrack($id, $fproject, $taski, $start, $end);
    }
    else
    {
        $track = $tracker->getUserTrack($id, $fproject, $taski, 0, 0, 1000);
    }
    $thetrack = array();

    $totaltime = $tracker->getTotalTrackTime($track);
    $totaltime = str_replace(".", ",", $totaltime);
    $id = mysql_real_escape_string($id);
    $sel = mysql_query("SELECT name FROM user WHERE ID = $id");
    $uname = mysql_fetch_array($sel);
    $uname = $uname[0];

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true);
    $pdf->SetHeaderData("", 0, "", $langfile["timetable"] . " " . $uname);
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_DATA, '', 20));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', 8));
    $pdf->SetHeaderMargin(0);
    $pdf->SetFont(PDF_FONT_NAME_DATA, "", 11);
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
    $pdf->setLanguageArray($l);
    $pdf->AliasNbPages();
    $pdf->AddPage();
	
	$projectData = $projectObj->getProject($id);

    $projectData = $projectObj->getProject($id);

    $htmltable = "
	<table border=\"1\" bordercolor = \"#d9dee8\" width=\"530\">
		<tr style=\"font-weight:bold;\">
		<th>CLIENT: $projectData[companyname]</th>
	    <th>SERVICE: $projectData[service]</th>
		<th>DATE: ".date('d/m/Y')."</th>
		<th>PARTNER:</th>
		</tr>
	</table>
	<br/><br/>
	<table border=\"1\" bordercolor = \"#d9dee8\" width=\"740\">
	<tr style=\"font-weight:bold;\">
	<th align=\"center\" width=\"80\">Task Performed</th>
    <th align=\"center\" width=\"80\">Performer</th>
    <th align=\"center\" width=\"90\" colspan=\"2\">Budget</th>
    <th align=\"center\" width=\"90\" colspan=\"2\">Actual</th>
    <th align=\"center\" width=\"90\" colspan=\"2\">Variance</th>
	<th align=\"center\" width=\"100\">Remarks</th>
	</tr>
	<tr bgcolor=\"#d9dee8\" style=\"font-weight:bold;font-size:25px;margin:5px;\">
	<th align=\"center\" width=\"80\"></th>
    <th align=\"center\" width=\"80\"></th>
    <th align=\"center\" width=\"30\">$langfile[hours]</th>
    <th align=\"center\" width=\"60\">$langfile[estimatedCost]</th>
    <th align=\"center\" width=\"30\">$langfile[hours]</th>
	<th align=\"center\" width=\"60\">$langfile[actualCost]</th>
	<th align=\"center\" width=\"30\">$langfile[hours]</th>
	<th align=\"center\" width=\"60\">Cost</th>
	<th align=\"center\" width=\"100\"></th>
	</tr>";

    if (!empty($track))
    {
		$totalEstimatedCost = 0; $totalActualCost = 0; $totalEstimatedHours = 0; $totalHrVariance = 0; $totalRateVariance = 0;
		$trv=0; $thv=0;
        $i = 0;
        foreach($track as $tra)
        {
            if (empty($tra["tname"]))
            {
                $tra["tname"] = "";
            }
            $hrs = round($tra["hours"], 2);
            $hrs = number_format($hrs, 2, ",", ".");

            $tra["comment"] = strip_tags($tra["comment"]);
            if ($i % 2 == 0)
            {
                $fill = "#ffffff";
            }
            else
            {
                $fill = "#d9dee8";
            }
            $i = $i + 1;
			
			//Extra calculations
			$estimatedCost = $tra['urate'] * $tra['estimatedHours'];
			$actualCost = $tra['urate'] * $hrs;
			
			$totalRateVariance = $estimatedCost - $actualCost;
			$totalHrVariance = $tra['estimatedHours'] - $hrs;
			$trv += $totalRateVariance;
			$thv += $totalHrVariance;
			//End of my extra calculations...SEUN

            $htmltable .= "<tr bgcolor=\"$fill\" style=\"font-size:25px;margin:5px;\">
			<td>$tra[tname]</td>
			<td>$tra[uname]</td>
			<td>$tra[estimatedHours]</td>
			<td>".number_format($estimatedCost,2)."</td>
			<td>$hrs</td>
			<td>".number_format($actualCost,2)."</td>
			<td>$totalHrVariance</td>
			<td>".number_format($totalRateVariance,2)."</td>
			<td>$tra[comment]</td>
			</tr>";
			$totalEstimatedCost += $estimatedCost;
			$totalActualCost += $actualCost;
			$totalEstimatedHours += $tra['estimatedHours'];
        }

        $totaltime = $tracker->getTotalTrackTime($track);
        $totaltime = str_replace(".", ",", $totaltime);

        $htmltable .= "<tr style=\"font-weight:bold;\">
		<td colspan=\"3\">$totalEstimatedHours</td>
		<td>".number_format($totalEstimatedCost,2)."</td>
		<td>$totaltime</td>
		<td>".number_format($totalActualCost,2)."</td>
		<td>$thv</td>
		<td colspan=\"2\">".number_format($trv)."</td>
		</tr></table>";

        $pdf->writeHTML($htmltable, true, 0, true, 0);
        $pdf->Output("user-$uname-timetable.pdf", "D");
    }
} elseif ($action == "showproject")
{
    if (!chkproject($userid, $id))
    {
        $errtxt = $langfile["notyourproject"];
        $noperm = $langfile["accessdenied"];
        $template->assign("errortext", "$errtxt<br>$noperm");
        $template->display("error.tpl");
        die();
    }
    $start = getArrayVal($_POST, "start");
    $end = getArrayVal($_POST, "end");
    $usr = getArrayVal($_POST, "usr");
    $taski = getArrayVal($_POST, "task");

    $task = new task();
    $ptasks = $task->getProjectTasks($id, 1);
    $tracker = (object) new timetracker();
    if (!$usr)
    {
        if (!$userpermissions["timetracker"]["read"])
        {
            $usr = $userid;
        }
        else
        {
            $usr = 0;
        }
    }
    if (!empty($start) and !empty($end))
    {
        $track = $tracker->getProjectTrack($id, $usr, $taski[0], $start, $end);
    }
    else
    {
        $track = $tracker->getProjectTrack($id, $usr, $taski[0]);
    }
    if (!empty($track))
    {
        $totaltime = $tracker->getTotalTrackTime($track);
        $template->assign("totaltime", $totaltime);
        $template->assign("fproject", $fproject);
        $template->assign("start", $start);
        $template->assign("end", $end);
    }
    $pro = new project();
    $usrs = $pro->getProjectMembers($id, 1000, false);
    $proj = $pro->getProject($id);
    $projectname = $proj["name"];
    $template->assign("projectname", $projectname);
    $template->assign("users", $usrs);
    $title = $langfile["timetracker"];
    $template->assign("title", $title);
    $template->assign("ptasks", $ptasks);
    $template->assign("start", $start);
    $template->assign("end", $end);
    $template->assign("usr", $usr);
    $template->assign("task", $taski);
    $template->assign("tracker", $track);
    SmartyPaginate::assign($template);
    $template->display("tracker_project.tpl");
}

?>