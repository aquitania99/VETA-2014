<?php require_once('../../Connections/greenlight.php'); ?>
<?php
$_SESSION['userName'] = $email;  
session_start();
/////////////////////////////////////////////////////////////////
$Unsus = $_POST['unsuscribe'];
echo $Unsus."<br>";
$enter = $_POST['enter'];
if (isset($enter)){
$email = $_POST['login'];
$pwd = $_POST['password'];
/////////////////////////////////////////////////////////////////
mysql_select_db($database_greenlight, $greenlight);
$test = "select * from contacts where email='$email' and password=MD5('$pwd')";
$trial = mysql_query($test, $greenlight) or die(mysql_error());
$row_trial = mysql_fetch_array($trial);
$totalRows_trial = mysql_num_rows($trial);
/////////////////////////////////////////////////////
//Hacemos la Validación
if ($totalRows_trial == 1) 
{
		//El usuario está registrado en la BD
		$userName = $email;
		session_register("userName");
}
	if (session_is_registered("userName"))
  {
		mysql_select_db($database_greenlight, $greenlight);
		$unsus_update = "UPDATE contacts SET flag = '0' WHERE email = '$userName'";
		$checkUpdate = mysql_query($unsus_update, $greenlight) or die(mysql_error());
		//echo $UserName."<br>";
}
/////////////////////////////////////////////////////////////////
mysql_select_db($database_greenlight, $greenlight);
$check = "select * from contacts where email='$userName'";
$checkSQL = mysql_query($test, $greenlight) or die(mysql_error());
$row_check = mysql_fetch_array($checkSQL);
$totalRows_check = mysql_num_rows($checkSQL);
/////////////////////////////////////////////////////////////////
echo $row_check['name']."<br />";
echo $row_check['last_name']."<br />"; 
echo $row_check['email']."<br />";
echo $row_check['flag']."<br />";
/*   if (!isset($email1))
    {
	 echo "<script language='javascript'>
	<!--
	alert('Login Error!!! Please check your login details and login again.');
	//-->
	</script>";
	}
if ($totalRows_trial == 0) {
echo "<script language='javascript'>
<!--
alert('Login Error!!! Please check your login details and login again.');
//-->
</script>";
 }
*/
}
////////////////////////////////////////////////////////////////////////
// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../../index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.gif">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Greenlight Memorabilia</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="../../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.titles {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #000000;
}
.BottomText1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
	text-align: center;
	vertical-align: middle;
}
.LittleUpLineBkgnd {	background-image: url(../../images/UpShadow.gif);
	background-repeat: repeat-x;
	background-position: center top;
}
.SquareLines {	background-color: #FFFFFF;
	border: 1px solid #999999;
}
.DownLine {border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #666666;
}
.style6 {color: #999999}
.style7 {color: #333333}
.style8 {color: #4D4D4D}
.style9 {color: #99CC00}
-->
.LV_validation_message{
	font-weight:bold;
	margin:0 0 0 5px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: inherit;
}

.LV_valid {
    color:#00CC00;
}
	
.LV_invalid {
    color:#CC0000;
}
    
.LV_valid_field,
input.LV_valid_field:hover, 
input.LV_valid_field:active,
textarea.LV_valid_field:hover, 
textarea.LV_valid_field:active {
    border: 1px solid #00CC00;
}
    
.LV_invalid_field, 
input.LV_invalid_field:hover, 
input.LV_invalid_field:active,
textarea.LV_invalid_field:hover, 
textarea.LV_invalid_field:active {
    border: 1px solid #CC0000;
}
</style>
  <!-- yahoo user interface css 
      (reset - resets all defaults to be pretty much identical cross browser)
      (fonts - standardises default fonts styles crosss browser)
      (grids - provides cross browser positional styles for creating layouts) 
      see http://developer.yahoo.com/yui/grids/ -->
  <link rel="stylesheet" type="text/css" href="../../JavaScripts/ValidationForms/reset-fonts-grids.css">
  <!--[if IE]>
    <style type="text/css">
	  
	  #main li {
        width:auto;
      }
      
	  /* fix for fieldset background spill bug in all flavours of IE */
	  fieldset {
        position: relative;
        margin: 2em 0 1em 0;
      }
      legend {
        position: absolute;
        top: -0.5em;
        left: 0.2em;
      }
	  
    </style>
  <![endif]-->
  
  <!--[if IE 6]>
    <style type="text/css">
      #doc {
		 width:58em;
	  }
		
		#main .supportBox {
			margin-left:40px;
		}
	</style>
  <![endif]-->
<script type="text/javascript" src="../../JavaScripts/ValidationForms/livevalidation_standalone.js"></script>
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
</style>
<script type="text/javascript" src="../JavaScripts/ValidationForms/livevalidation_standalone.js"></script>
</head>

<body class="fondofondo">

  <table width="1010" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
    <tr>
      <td width="798" valign="top"><img src="../../images/logo.gif" width="690" height="116" /></td>
      <td width="212" align="right" valign="top"><table width="212" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="22" bgcolor="#99CC00"><table width="212" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="52"><div align="center"><a href="../../index.php" class="texsuper">home</a></div></td>
              <td width="10"><div align="center"><img src="../../images/raya.gif" width="1" height="22" /></div></td>
                <?php 
				if (session_is_registered("userName")) {
				echo "<td width='52' class='texsuper'><div align='center'><a href='$logoutAction'>logout</a></div></td>
                	  <td width=10><div align=center><img src=images/raya.gif width=1 height=22 /></div></td>";						
					  }
				?>
              <td width="119"><div align="right" class="style6">
                <div align="center"><font color="#000000" size="1" face="Arial, Helvetica, sans-serif"><span class="tex1"> &nbsp;&nbsp;
                        <script language="JavaScript" type="text/javascript">
var months=new Array(13);
months[1]="January";
months[2]="February";
months[3]="March";
months[4]="April";
months[5]="May";
months[6]="June";
months[7]="July";
months[8]="August";
months[9]="September";
months[10]="October";
months[11]="November";
months[12]="December";
var time=new Date();
var lmonth=months[time.getMonth() + 1];
var date=time.getDate();
var year=time.getYear();
if (year < 2000)    // Y2K Fix, Isaac Powell
year = year + 1900; // http://onyx.idbsu.edu/~ipowell
document.write("<left>" + lmonth + " ");
document.write(date + ", " + year + "</left>");
                                                  </script>
                </span></font></div>
              </div>
                <div align="center"></div></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="30" colspan="2" valign="middle" class="fondomenu"><table width="1010" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="80"><div align="center"></div></td>
            <td width="104"><div align="center"><a href="../../latesArrivals_2.php" class="LinksText">latest arrivals</a></div></td>
            <td width="25"><div align="center"><img src="../../images/pun.jpg" width="9" height="30" /></div></td>
            <?php if (session_is_registered("userName")) { 
            echo "<td width=90><div align=center><a href=members.php class=LinksText>members</a></div></td>"; 
			echo "<td width=23><div align=center><img src=images/pun.jpg alt=point4 width=9 height=30 /></div></td>";} 
            ?>
            <td width="46"><div align="center"><a href="../../charity.php" class="LinksText">charity</a></div></td>
            <td width="23"><div align="center"><img src="../../images/pun.jpg" width="9" height="30" /></div></td>
            <td width="118"><div align="center"><a href="../../NewsEvents/news_vents.php" class="LinksText">news &amp; events</a></div></td>
            <td width="22"><div align="center"><img src="../../images/pun.jpg" width="9" height="30" /></div></td>
            <td width="107"><div align="center"><a href="../../authenticity.php" class="LinksText">authenticity</a></div></td>
            <td width="24"><div align="center"><img src="../../images/pun.jpg" width="9" height="30" /></div></td>
            <td width="80"><div align="center"><a href="../../contacts.php" class="LinksText">contacts</a></div></td>
            <td width="28">&nbsp;</td>
            <td width="224"><label>
              <div align="right">
                <input name="textfield" type="text" class="texsuper" id="textfield" size="22" />
                <input name="button" type="submit" class="titles" id="button" value="Search" />
                </div>
            </label></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="22" colspan="2" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top"><table width="776" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#999999">
        <tr>
          <td width="27%" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="25">&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center"><img src="../../images/Banner1.jpg" width="173" height="195" /></div></td>
              </tr>
              <tr>
                <td height="20"><div align="center"></div></td>
              </tr>
              <tr>
                <td><div align="center"><img src="../../images/Banner2.jpg" width="173" height="195" /></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
          </table></td>
          <td width="73%"><table width="525" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="25" valign="middle" bgcolor="#999999" class="tex_titulo">&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td height="445" valign="top"><table width="100%" height="84%"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id="MainInfo">
                    <tr>
                      <th rowspan="3" align="left" valign="top" scope="col"><p>&nbsp;</p></th>
                      <td height="35" colspan="2" valign="middle" bgcolor="#FFFFFF" scope="col"><span class="tex_titulo style9">Unsuscribe Area!!</span></td>
                    </tr>
                    <tr>
                      <td width="90%" height="179" align="center" valign="top" class="SquareLines"><script type="text/javascript">
						var email = new LiveValidation('email', {onlyOnSubmit: true } );
						email.add( Validate.Presence );
						
						var password = new LiveValidation( 'password', {onlyOnSubmit: true } );
						password.add( Validate.Presence );

						var automaticOnSubmit = name.login.onsubmit;
						name.login.onsubmit = function(){
						var valid = automaticOnSubmit();
						//if(valid)alert('The form is valid!');
						if(valid) {
						  function submitform()
							{
							 if(document.login.onsubmit())
							 {
							 document.login.submit();
							 }
						}
						return false;
						}
					</script>
					  <form ACTION="<?php echo $loginFormAction; ?>" id="loginAdmin" name="loginAdmin" method="POST">
					    <table width="99%" border="0" cellspacing="1" cellpadding="1">
                          <tr>
                            <td colspan="4" class="BodyText"><div align="left">1. To Unsuscribe please check the box below. 
                                <br />
                                (If you came for error here please click cancel to close this page.</div></td>
                          </tr>

                          <tr>
                            <td width="37%" align="left"><span class="LinkingWords">&lt;&lt; Cancel &gt;&gt;</span></td>
                            <td width="41%"><div align="right"><span class="titles">Unsuscribe</span></div></td>
                            <td width="10%" align="right" class="titles"><input type="checkbox" name="unsuscribe" id="unsuscribe" />
                              <script language="JavaScript" type="text/javascript">
                              var unsuscribe = new LiveValidation('unsuscribe');
							  unsuscribe.add( Validate.Acceptance );
							  </script>                            </td>
                            <td width="12%" align="right" class="BottomText1">&nbsp;</td>
                          </tr>
                        </table>
                        <br />
					    <table width="99%" border="0" cellspacing="1" cellpadding="1">
                          <tr>
                            <td colspan="2"><div align="center" class="BodyText">2. Please type your Login and Password, thank you.</div></td>
                            </tr>
                          <tr>
                            <td>Login:</td>
                            <td><label>
                              <input type="text" name="login" id="login" />
                              <script type="text/javascript">
							  var login = new LiveValidation('login');
						      login.add( Validate.Email );
							  login.add( Validate.Presence );
                            </script>
                            </label></td>
                          </tr>
                          <tr>
                            <td>Password</td>
                            <td><label>
                              <input type="password" name="password" id="password" />
                            </label></td>
                          </tr>
                          <tr>
                            <td colspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="2"><div align="center">
                              <label>
                              <input type="submit" name="enter" id="enter" value="enter" />
                              </label>
                            </div></td>
                            </tr>
                        </table>
                        <br />
					    <br />
					  </form>					  </td>
                      <td rowspan="2" align="right" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="141" align="center" valign="top" class="SquareLines">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="19" colspan="3" valign="bottom" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
          </table>
          <br />
          <br />
          <br />
          <br />
          <br /></td>
        </tr>
      </table></td>
      <td height="568" valign="top" class="fondo_menu2"><table width="212" height="568" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="18" height="25">&nbsp;</td>
          <td width="194" class="tex_menu">&nbsp;</td>
        </tr>
        <tr>
          <td height="165">&nbsp;</td>
          <td height="165" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="269" colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="12%" height="25" bgcolor="#99CC00">&nbsp;</td>
              <td colspan="2" bgcolor="#99CC00" class="tex_menu style7"><span class="tex_menu style8">Administration Area</span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td width="79%" bgcolor="#EFEFEF" class="cuadro"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="5">
                  <tr>
                    <td>                                                <div class="link1Copy"> 
                      <marquee  align="center" scrollamount="2" direction="up" onMouseOut="this.start();" onMouseOver="this.stop();" height="100"/>
                      <span class="texsuper"><span class="BodyText"><img src='../../images/myspace.jpeg' /><br />On MySpace? ...<br />
<a href='http://www.myspace.com/greenlightfoundation' target="_blank">become our friend today!</a></span><br />
<a href='http://www.myspace.com/greenlightgroup' target="_blank">Greenlight Group on MySpace</a>
                      </marquee>
                      </span></div></td>
                  </tr>
                </table></td>
              <td width="9%">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td colspan="2" valign="bottom" class="BottomTextCopy style6"><span class="BottomTextCopy"><br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            PO BOX 452<br />
Darlinghurst NSW 2010<br />
Sydney, NSW Australia<br />
AUS Tel:                     +61 2 8005 7374<br />
USA Tel: (310) 7348 833<br />
Email: info@greenlightmemorabilia.com<br />
ABN: 68 450 154 725</span><br />
            <br /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="25" colspan="2" class="linea_verde"><p class="BottomText">Greenlight Memorabilia - Website &reg; Copyright 2009</p></td>
    </tr>
  </table>

<map name="Map" id="Map"><area shape="rect" coords="27,41,253,55" href="#" /><area shape="rect" coords="28,59,451,75" href="#" /><area shape="rect" coords="26,77,567,94" href="#" /></map>
</body>
</html>
