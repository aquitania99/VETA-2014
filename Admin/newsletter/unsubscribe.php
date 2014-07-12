<?php
session_start();
//////////////////////////////////////////////////////
if(!session_is_registered('login')){
header("location:../index.php");
}
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////
$usrID = $_GET['usr'];
//echo "El ID del usuario...!".$usrID."<br />";
	/// Create New DB Object
	$db = new MySQL();
	/// Open Connection
	$db->open();
/////////////////////////////////////////////////////	
	$queryUnsubscribe = $db->dbQuery("SELECT personID, firstName, lastName, emailAddress FROM persons WHERE personID=$usrID");
	$rowUnsubscribe = $db->fetch_array($queryUnsubscribe);
	////
	$row_Count = mysql_num_rows($queryUnsubscribe);
	$total = $row_Count;	//Count	Records Fetched
	//echo "Total records fetched...!".$total."<br />";
/// Newsletter Details
	$Name = $rowUnsubscribe['firstName'];
	//echo "Name...".$Name."<br />";
	$LastName = $rowUnsubscribe['lastName'];
	$fullName = $Name." ".$LastName;
	$emailAddress = $rowUnsubscribe['emailAddress'];
///////////////////////
$unsubs = $_POST['unsubs'];
if (isset($unsubs))
{
/////////////////////////////////////////////////////	
	$updateUnsubscribe = $db->dbQuery("UPDATE persons SET getVetaInfo = 0 WHERE personID='$usrID'");
	///$rowUnsubscribe = $db->fetch_array($queryUnsubscribe);
/////////////////////////////////////////////////////
//$mesg = "Thank You for your time!! <br /> Remember that you can subscribe again at any time at <br /> <a href='http://www.australiaveta.com'>http://www.australiaveta.com</a><br />";
//echo $mesg;
/////////////////////////////////////////////////////
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Australia VETA Unsubscribe</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26926972-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<form id="unsubscribe" name="form1" method="post" action="">
  <br />
  <br />
  <table width="800" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
    <tr>
      <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="211"><img src="images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
          <td><h2 align="center"><span id="result_box" lang="en" xml:lang="en">unsubscribe</span></h2></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="middle"><fieldset>
	  <?php if (!isset($unsubs)) 
	  {
	  ?>
        <legend>Unsubscribe from Mailing List: VETA</legend>
        <table align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top"><h4>&nbsp;</h4>
              Remove the email address below from mailing list <strong>Veta</strong>:
              <center>
                
                Email:
                <input name="email_address" value="<?php echo $emailAddress;?>" size="40" type="text" />
                <p>
                  <input name="unsubs" id="unsubs" value="Unsubscribe" type="submit" />
                </p>
              </center></td>
          </tr>
          <tr>
            <td align="left" valign="middle"></td>
          </tr>
        </table>
		<?php }
		else {
		echo "<p align='center'>Thank You for your time ".$fullName."<br /><br />
		Remember that you can subscribe again at any time at <br />
		<a href='http://www.australiaveta.com,au'>http://www.australiaveta.com.au</a><br /><br /></p>";
		}
		?>
        <p>&nbsp;</p>
      </fieldset></td>
    </tr>
  </table>
</form>
</body>
</html>
