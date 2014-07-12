<?php 
session_start();
$afterID = $_GET['ID'];
//////////////////////////////////////////////////////
//	include("../../Connections/config.inc.php");
//	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();	
//////////////////////////////////
	$queryNLEmails = $db->dbQuery("SELECT * FROM persons");
	$rowNLEmails = $db->fetch_array($queryNLEmails);
/// Newsletter Details
	$emails = $rowNLEmails['emailAddress'];
	$countEmails = count($emails);
	echo "<br /><span style='color:#FF0; font-size:14px;'>Total number of Email Addresses found...".$countEmails."</span><br />";
?>