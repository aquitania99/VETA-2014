<?php
session_start();
//ob_start();
//////////////////////////////////////////////////////
require_once("../Connections/config.inc.php");
require_once("../Connections/mysql.class.php");
//////////////////////////////////////////////////////
$login = $_POST['LoginName'];
//
$passwd = $_POST['Password'];
//
$submit = $_POST['login']; 
//
if (isset($submit)) {
// To protect MySQL injection (more detail about MySQL injection)
$login = stripslashes($login);
$passwd = stripslashes($passwd);
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
///
$queryLogin = $db->dbQuery("SELECT * FROM adminusers where userKey = MD5('$login') AND password = PASSWORD('$passwd')");
	$rowLogin = $db->fetch_array($queryLogin);
	$userID = $rowLogin['login'];
	$dateAdded = $rowLogin['dateAdded'];
	//echo "<font style='font-size:1.2em; font-family:arial; color:#555;'>Welcome <b>".$userID."</b></font><br />";
	//echo "<br />El Usuario fue creado el: ".$dateAdded."<br />";
	if(isset($userID))
	{
		echo "<script type='text/javascript'>alert('Hi! Just a moment, you're being redirected...');</script>";
		$_SESSION['login'] = $userID;
		echo "<script type='text/javascript'> window.location='../Admin/options.php'; </script>";
	}
	else{
		echo "<script type='text/javascript'> alert ('Sorry!!\\nBut you MUST be a valid user to access this section.'); window.close();  </script>";
	}
}
exit;	
?>