<?php 
session_start();
//////////////////////////////////////////////////////
	$logout = $_GET['out']; 
	if (isset($logout)){
	$old_user = $valid_user;
	$result_unreg = session_unregister("valid_user");
	$result_dest = session_destroy();
	}
//////////////////////////////////////////////////////
	include("../Connections/config.inc.php");
	include("../Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();	
$sent = $_POST['submit'];
//echo "Something there?? ". $sent ."<br />";
/////////////////////////////////////////////////////
if(isset($sent)){
			//echo "are we inside the isset!!?<br /> YES WE ARE!!";
			$username = $_POST['login']; //name of the text field for usernames
			//echo "The Username...".$username."<br />";
			$password = $_POST['password']; //likewise here just for the password
			//echo "The Password...".$password."<br />";
			//run the query to search for the username and password the match
			$queryUsrs = $db->dbQuery("SELECT * FROM administrators WHERE login = '$username' AND password = MD5('$password')");
			$rowUsrs = $db->fetch_array($queryUsrs);
			$usrRows = mysql_num_rows($queryUsrs);
			///
			if ($usrRows !=0)
			{
			$loginUsr = $rowUsrs['user_name'];
			$loginPswd = $rowUsrs['password'];
			$valid_user = $loginUsr;
			session_register("valid_user");

			header('Location: admin.php');
				}
			else
		{
			//unsuccessful login
			$err = '<br \>Incorrect username / password.<br \><br \>
			Sorry You could not be logged in.<br \>
			In order to access the Admin Section, You must be logged.<br \>' ;
			//exit;
			}	
		}
?>