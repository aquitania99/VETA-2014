<?
session_start();
if (session_is_registered('login')) {
//////////////////////////////////////////////////////
	require_once("../Connections/config.inc.php");
	require_once("../Connections/mysql.class.php");
/// Create New DB Object
	$db = new MySQL();
/// Open Connection
	$db->open();
//////////////////////////////////
	$id = $_POST['clientID'];
	$sessionID = $_POST['session'];
//echo "<br /><font style='color:#000; font-size:1.1em;'>".$id."</font><br />";
///
	$selectID = $db->dbQuery("SELECT * FROM persons WHERE personID = '$id' LIMIT 1");
	$rowSelectID = $db->fetch_array($selectID);
	$name = $rowSelectID[4];
//echo "<font style='color:#777; font-size:1.1em;'>".$name."<br/></font>";
	$lastName = $rowSelectID[5];
//echo "<font style='color:#777; font-size:1.1em;'>".$lastName."<br/></font>";
	$email = $rowSelectID[7];
//echo "<font style='color:#777; font-size:1.1em;'>".$email."<br/></font>";
	$nationality = $rowSelectID[11];
//
//echo "<font style='color:#777; font-size:1.1em;'>".$nationality."<br/></font>";
	$deletedBy = $_SESSION['login'];
//echo "<font style='color:#777; font-size:1.1em;'>".$deletedBy."<br/></font>";
//echo "Is there anything!? ".$_SESSION['login'];
///  
	$dude = $_SESSION['login'];
///
	if ($rowSelectID[0] != '' && $deletedBy != '') {
		$insertRecord = $db->dbQuery("INSERT INTO del_users_log
    (del_log_id, name, lastName, email, nationality, deletedBy, dateDeleted)
    VALUES (NULL, '$name', '$lastName', '$email', '$nationality', '$deletedBy', NOW())");
		echo "<font style='color:#777; font-size:1.1em;'>" . $_SESSION['login'] . " Eliminando records the usuario....<br />";
		echo "<script type='text/javascript'>alert('HOORRAY!!\\n\\n\\r The records for: " . $rowSelectID['firstName'] . " " . $rowSelectID['lastName'] . "\\n\\r with Email Address: " . $rowSelectID['emailAddress'] . " \\n\\n have been successfully deleted!!');</script>";
		$queryDelete = $db->dbQuery("DELETE FROM persons WHERE personID = '$id' LIMIT 1");
		//
		//echo "<script type='text/javascript'>alert('Alright!! \n This record has been successfully deleted!');</script>";
		echo "<script type='text/javascript'>window.location='" . $_SERVER[PHP_SELF] . "'</script>";
		$exist = true;
	}
}
?>