<?php
session_start();
//ob_start();
//////////////////////////////////////////////////////
require_once("../Connections/config.inc.php");
require_once("../Connections/mysql.class.php");
//include("../Connections/connectionsVeta.php");
/////////////////////////////////////////////////////
$login = $_POST['login'];
//echo "Login before query...".$Login."<br />";
$passwd = $_POST['password'];
//echo "Password before query...".$passwd."<br />";
$access = $_POST['login-btn'];
//echo "Access granted?...".$access."<br />";
/////////////////////////////////////////////////////
// To protect MySQL injection (more detail about MySQL injection)
$login = stripslashes($login);
//$passwd = stripslashes($passwd);
//$login =  mysql_real_escape_string($Login);
//echo "Login before query...".$login."<br />";
//$passwd = mysql_real_escape_string($passwd);
//echo "Password before query...".$passwd."<br />";
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();	
if (isset($access)){
//////////////////////////////////
	$queryLogin = $db->dbQuery("SELECT * FROM adminusers where userKey = MD5('$login') AND password = PASSWORD('$passwd')");
	$rowLogin = $db->fetch_array($queryLogin);
	$userID = $rowLogin['login'];
	$dateAdded = $rowLogin['dateAdded'];
	echo "<font style='font-size:1.2em; font-family:arial; color:#555;'>Welcome <b>".$userID."</b></font><br />";
	//echo "<br />El Usuario fue creado el: ".$dateAdded."<br />";
	if(isset($userID))
	{
		$updateLogin = $db->dbQuery("UPDATE adminusers SET lastLogin = NOW() WHERE login = '$userID'");
		///
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		session_register("login");
		session_register("password");
		///
		echo "<script>  
			window.location = 'options.php';  
			</script>";
	}
	else echo "<p>Debe estar registrado para acceder...</p><br />";
}
ob_end_flush();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login :: Online Marketing VETA</title>
<link href="newsletter/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="loginForm" name="loginForm" method="post" action="">
<br />
<br />
<table width="600" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
    <tr>
      <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="211"><img src="newsletter/images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
            <td><h2 align="center"><span id="result_box" lang="en" xml:lang="en"><span title="Click for alternate translations">online</span> <span title="Click for alternate translations">marketing</span></span> VETA</h2></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="middle"><fieldset>
        <legend>Login</legend>
        <table width="400" border="0" align="center" cellpadding="4" cellspacing="4">
          <tr>
            <td>User</td>
            <td><input type="text" name="login" id="login" /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password" /></td>
          </tr>
        </table>
        <p><input type="hidden" name="login-btn" id="login-btn" value="login-btn" /></p>
      </fieldset></td>
    </tr>
    <tr>
      <td align="center" valign="middle">

      
      <input type="image" src="newsletter/images/login.jpg" width="204" height="64" border="0" name="login-btn" id="login-btn" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>
