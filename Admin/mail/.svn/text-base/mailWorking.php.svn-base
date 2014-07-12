<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "../index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?><?php 
session_start();
require('Connections/greenNewsletter.php');
require('newsletter.php');
require('events.php');
require('class.phpmailer.php');
//////////////////////////////////////////////////////////
$email = $_SESSION['MM_Username'];
//echo $email."<br>";
mysql_select_db($database_greenlight, $greenlight);
$query_AdminInf = "SELECT au_name, au_lastname FROM adminusers where au_id = '$email' ";
$AdminInf = mysql_query($query_AdminInf, $greenlight) or die(mysql_error());
$row_AdminInf = mysql_fetch_assoc($AdminInf);
$admin = $row_AdminInf['au_name'];
$admin_lastname = $row_AdminInf['au_lastname'];
//echo $admin."<br>";
//////////////////////////////////////////////////////////
$sent = $_POST['Send'];
if (isset($sent)) 
{
///////// Contacts Details //////////
mysql_select_db($database_greenlight, $greenlight);
$query_contactsInf = "SELECT name, last_name, email FROM contacts where flag = '1' and id in (2979,30,33,3179) ";
$contactsInf = mysql_query($query_contactsInf, $greenlight) or die(mysql_error());
//$row_contactsInf = mysql_fetch_assoc($contactsInf);
$row_contsInfCount = mysql_num_rows($contactsInf);
  $sent='The Newsletter is GONE!!!<br />';
////////////////////////////////////////////////////////////////////////////////////
while ($row = mysql_fetch_assoc($contactsInf)) {
////////////////////////
  $emailtext = $row['email'];
  $usrname = $row['name'];
  $lastname = $row['last_name'];
  //echo "Email Sent to: ".$usrname." ".$lastname." ".$emailtext."<br>";
////////////////////////////////////////////////////////////////////////////////////
    /*
	// Para enviar correo HTML, la cabecera Content-type debe definirse
	//$sendTo = $emailtext.", ";
	$sendTo = "aquitania99@gmail.com";
	$subject = "Greenlight Memorabilia Newsletter";
	$headers = "From: info@greenlightmemorabilia.com";
	$headers .= "<info@greenlightmemorabilia.com>\r\n";
	//$headers .= "Reply-To: aquitania99@gmail.com"; 
	// Para enviar correo HTML, la cabecera Content-type debe definirse
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	*/
	//require('class.phpmailer.php');
	$mail = new phpmailer();
	$mail->IsSMTP();                           // tell the class to use SMTP
	//$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       	= 25;                    // set the SMTP server port
	$mail->Host       	= "mail.greenlightmemorabilia.com"; // SMTP server
	$mail->Username   	= "info@greenlightmemorabilia.com";     // SMTP server username
	//$mail->Password   = "pinkrose";            // SMTP server password
	$mail->Mailer 		= "Mail";  // tell the class to use Sendmail
	$mail->From     	= "info@greenlightmemorabilia.com";
	$mail->FromName 	= "greenlight memorabilia newsletter";
	$messageText  = "Dear $admin $admin_lastname Welcome!!
Greenlight Memorabilia manufactures and distributes premium quality film, television and celebrity products
for the many thousands of fans and collectors worldwide. 

www.greenlightmemorabilia.com Newsletter...

Date:  $date   		Edition:  $volEdit

 Autograph News -- Latest Arrivals And Arriving in October
 
 $detail
 
 News & Events Section of Greenlight Memorabilia
 
 $detail2
 
 Greenlight Investment Collectors Club
 
 $detail3 
 
 Greenlight Fundraising Program
 
 $detail4
 
 To Stop receiving this Newsletter: http://www.greenlightmemorabilia.com/Greenlight_Admin/mail/unsubscribe.php
 ";
	$messageHtml = "
	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	<html xmlns='http://http://www.w3.org/1999/xhtml'>
	<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Green Light Memorabilia - Newsletter</title>
</head>
<body>
<table width='760' border='0' align='center' cellpadding='0' cellspacing='0' background='http://www.greenlightmemorabilia.com/mail/images/fondo.jpg'>
  <tr>
    <td valign='top'><table width='760' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td valign='top'><table width='760' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td height='30' colspan='4'><img src='http://www.greenlightmemorabilia.com/mail/images/cabeza.jpg' width='760' height='100' /></td>
            </tr>
          <tr>
            <td width='348' rowspan='2' valign='top'><img src='http://www.greenlightmemorabilia.com/mail/images/banner.jpg' width='348' height='154' /></td>
            <td width='194' height='27'><div align='right' style = 'font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #CCCCCC; text-decoration: none;'><span id='nl_date'>$date</span></div></td>
            <td width='195'><div align='right'><span style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #CCCCCC; text-decoration: none; font-weight: bold;'><span id='nl_VolEdit'>$volEdit</span></span></div></td>
            <td width='26'><div align='right' style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #CCCCCC; text-decoration: none; font-weight: bold;'></div></td>
          </tr>
          <tr>
            <td width='389' height='124' colspan='2' bgcolor='#FFFFFF'><span style='font-family: Arial, Helvetica, sans-serif; font-size: 21px; font-weight: bold; color: #000000; text-decoration: none;'>Dear $usrname $lastname, <span style='color: #666666'>Welcome</span></span><br />
              <span style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #666666; text-decoration: none;'>Greenlight Memorabilia manufactures and distributes premium quality film, television and celebrity products for the many thousands of fans and collectors worldwide.</span><br />
              <br />
              <a href='#' style='font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #99CC00;'>http://www.greenlightmemorabilia.com</a></td>
            <td><img src='http://www.greenlightmemorabilia.com/mail/images/punta5.gif' width='12' height='126' /></td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td valign='top'><table width='723' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td><div align='center'><img src='http://www.greenlightmemorabilia.com/mail/images/punta1.gif' width='723' height='27'></div></td>
          </tr>
          <tr>
            <td valign='top' bgcolor='#FFFFFF'><table width='715' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td width='507' valign='top' bgcolor='#E7F3C4'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td width='40' height='160' valign='top' bgcolor='#FFFFFF'><img src='http://www.greenlightmemorabilia.com/mail/images/fle_ver.gif' width='40' height='53'></td>
                    <td width='467' valign='top' bgcolor='#FFFFFF'><table width='98%' border='0' cellspacing='3' cellpadding='3'>
                      <tr>
                        <td height='40' valign='bottom' style='border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; border-right-style: none; border-bottom-style: solid; border-left-style: none; border-top-color: #CCCCCC; border-right-color: #CCCCCC; border-bottom-color: #CCCCCC; border-left-color: #CCCCCC;' id='nl_title'>$title</td>
                      </tr>
                      <tr>
                        <td valign='top'><p style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333; text-decoration: none;'><img src='http://www.greenlightmemorabilia.com/mail/images/foto1.jpg' width='80' height='80' hspace='8' vspace='8' align='left'><span id='1' title='Latest Autograph NEWS'>$detail</span><br><br>
                            <a href='$link' style='color: #999900;'>Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height='160' valign='top' bgcolor='#E7F3C4'><img src='http://www.greenlightmemorabilia.com/mail/images/fle_ver_ver.gif' width='40' height='53'></td>
                    <td valign='top' bgcolor='#E7F3C4'><table width='98%' border='0' cellspacing='3' cellpadding='3'>
                      <tr>
                        <td height='40' valign='bottom' style='border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; border-right-style: none; border-bottom-style: solid; border-left-style: none; border-top-color: #CCCCCC; border-right-color: #CCCCCC; border-bottom-color: #CCCCCC; border-left-color: #CCCCCC;'>$title2</td>
                      </tr>
                      <tr>
                        <td valign='top'><p style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333; text-decoration: none;'><img src='http://www.greenlightmemorabilia.com/mail/images/foto2.jpg' width='80' height='80' hspace='8' vspace='8' align='left'><span id='2'>$detail2</span><br><br>
                            <a href='$link2' style='color: #999900;'>Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height='160' valign='top' bgcolor='#FFFFFF'><img src='http://www.greenlightmemorabilia.com/mail/images/fle_ver.gif' width='40' height='53'></td>
                    <td valign='top' bgcolor='#FFFFFF'><table width='98%' border='0' cellspacing='3' cellpadding='3'>
                      <tr>
                        <td height='40' valign='bottom' style='border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; border-right-style: none; border-bottom-style: solid; border-left-style: none; border-top-color: #CCCCCC; border-right-color: #CCCCCC; border-bottom-color: #CCCCCC; border-left-color: #CCCCCC;'>$title3</td>
                      </tr>
                      <tr>
                        <td valign='top'><p style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333; text-decoration: none;'><img src='http://www.greenlightmemorabilia.com/mail/images/foto3.jpg' width='80' height='80' hspace='8' vspace='8' align='left'><span id='3'>$detail3</span><br><br>
                            <a href='$link3' style='color: #999900;'>Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height='160' valign='top' bgcolor='#E7F3C4'><img src='http://www.greenlightmemorabilia.com/mail/images/fle_ver_ver.gif' width='40' height='53'></td>
                    <td valign='top' bgcolor='#E7F3C4'><table width='98%' border='0' cellspacing='3' cellpadding='3'>
                      <tr>
                        <td height='40' valign='bottom' style='border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; border-right-style: none; border-bottom-style: solid; border-left-style: none; border-top-color: #CCCCCC; border-right-color: #CCCCCC; border-bottom-color: #CCCCCC; border-left-color: #CCCCCC;'>$title4</td>
                      </tr>
                      <tr>
                        <td valign='top'><p style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333; text-decoration: none;'><img src='http://www.greenlightmemorabilia.com/mail/images/foto4.jpg' width='80' height='80' hspace='8' vspace='8' align='left'><span id='4'>$detail4</span><br><br>
                            <a href='$link4' style='color: #999900;'>Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
                <td width='208' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td><table width='194' border='0' align='center' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td><div align='center'><img src='http://www.greenlightmemorabilia.com/mail/images/punta3.gif' width='194' height='11'></div></td>
                      </tr>
                      <tr>
                        <td bgcolor='#99CC00'><div align='center' style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #FFFFFF; text-decoration: none;'>$ne_title</div></td>
                      </tr>
                      <tr>
                        <td valign='top' bgcolor='#EBEBEB'><table width='95%' border='0' align='center' cellpadding='0' cellspacing='0'>
                          <tr>
                            <td style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #828200;'>$ne_date<br>
                              <em> echo substr($ne_detail,0,1100) ...</em></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src='http://www.greenlightmemorabilia.com/mail/images/punta4.gif' width='194' height='21'></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table width='194' border='0' align='center' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td><div align='center'><img src='http://www.greenlightmemorabilia.com/mail/images/punta3.gif' width='194' height='11'></div></td>
                      </tr>
                      <tr>
                        <td bgcolor='#99CC00'><div align='center' style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #FFFFFF; text-decoration: none;'>$ne_title2</div></td>
                      </tr>
                      <tr>
                        <td bgcolor='#EBEBEB'><div align='center'>
                          <table width='95%' border='0' cellspacing='0' cellpadding='0'>
                            <tr>
                              <td style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #828200;'><p><br>
                                  $ne_date2<br>
                                substr($ne_detail2,0,1138) ...</p>
                              </td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td><img src='http://www.greenlightmemorabilia.com/mail/images/punta4.gif' width='194' height='21'></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td bgcolor='#EDEDED'><img src='http://www.greenlightmemorabilia.com/mail/images/punta2.gif' width='723' height='29'></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height='110' bgcolor='#EFEFEF'><table width='723' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td width='507' height='77' bgcolor='#FFFFFF'><div align='center'><img src='http://www.greenlightmemorabilia.com/mail/images/botones.jpg' width='435' height='60' border='0' usemap='#Map'></div></td>
            <td width='216' bgcolor='#FFFFFF' style='font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; color: #666666; text-decoration: none;'>PO BOX 452<br>
Darlinghurst NSW 2010<br>
Sydney, NSW Australia<br>
AUS Tel:                     +61 2 8005 7374<br>
USA Tel: (310) 7348 833<br>
Email: info@greenlightmemorabilia.com<br>
ABN: 68 450 154 725</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<map name='Map'><area shape='rect' coords='2,4,78,59' href='http://www.greenlightmemorabilia.com/contacts.php'><area shape='rect' coords='140,4,220,61' href='http://www.greenlightmemorabilia.com/Greenlight_Admin/mail/unsubscribe.php'>
<SCRIPT TYPE='text/javascript'><!--

var SubjectLine='Take a look at this web page I found, '+top.document.title; 
var BodyText='You can see this page at: '+top.location.href;

var Message='<area shape='rect' coords='286,4,434,61' CLASS=contact href='mailto:?SUBJECT='+escape(SubjectLine)+'&BODY='+escape(BodyText)+'' OnMouseOver='status=\'Envoyer cette page à vos amis\'; return true;' TITLE='Send your friends e-mail about this page' alt='Send 2 Friends' />';

var MessageIE='<area shape='rect' coords='286,4,434,61' CLASS=contact href='mailto:?SUBJECT='+escape(SubjectLine)+'&BODY='+escape(BodyText)+'' OnMouseOver='status=\'Envoyer cette page à vos amis\'; return true;' TITLE='Send your friends e-mail about this page' alt='Send 2 Friends' />';

if(document.all) { document.write(MessageIE); }

else { document.write(Message); }

//--></SCRIPT>
</map>
<br />
</body>
</html>"; 
////////////////////////////////////////////////
    $mail->Body    = $messageHtml;
    $mail->AltBody = $messageText;
    $mail->AddAddress($emailtext);
	//se envia el mensaje, si no ha habido problemas 
	//la variable $exito tendra el valor true
	$exito = $mail->Send();
  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho 
  //para intentar enviar el mensaje, cada intento se hara 5 segundos despues 
  //del anterior, para ello se usa la funcion sleep	
  $intentos=1; 
  while ((!$exito) && ($intentos < 5)) {
	sleep(5);
     	//echo $mail->ErrorInfo;
     	$exito = $mail->Send();
     	$intentos=$intentos+1;	
	
   }
 
		
   if(!$exito)
   {
	echo "Problemas enviando correo electrónico a ".$valor;
	echo "<br/>".$mail->ErrorInfo;	
   }
   else
   {
	echo $sent."Newsletter is Gone!!";
   } 

    // clear all addresses and attachments for next loop
    $mail->clearaddresses();
    //$mail->clearattachments();
}
}
//////////////////////////////////////////////////////////
?>
<script type="text/javascript" src="instantedit.js"></script>
<style type="text/css">
<!--
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
.fondo_logo {
	background-image: url(images/fondo_logo.jpg);
	background-repeat: no-repeat;
	background-position: center top;
}
.fondo_logoCopy {
	background-image: url(images/fondo_logo.jpg);
	background-repeat: no-repeat;
	background-position: center bottom;
}
.tex {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	text-decoration: none;
}
.titu_dear {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 21px;
	font-weight: bold;
	color: #000000;
	text-decoration: none;
}
.texww {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #99CC00;
}
.texfe {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #CCCCCC;
	text-decoration: none;
}
.lin {
	color: #999900;
}
.titu {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #999999;
}
.line {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #CCCCCC;
	border-right-color: #CCCCCC;
	border-bottom-color: #CCCCCC;
	border-left-color: #CCCCCC;
}
.texverde {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #828200;
}
.titu2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	text-decoration: none;
}
.fir {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: normal;
	color: #666666;
	text-decoration: none;
}
.style1 {color: #000000}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #666666; text-decoration: none; }
.style4 {color: #666666}
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #CCCCCC; text-decoration: none; font-weight: bold; }
-->
</style>
<form id="form2" name="newsletter" method="post" action="">
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0" background="images/fondo.jpg">
  <tr>
    <td valign="top"><table width="760" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" colspan="4"><img src="images/cabeza.jpg" width="760" height="100" /></td>
            </tr>
          <tr>
            <td width="348" rowspan="2" valign="top"><img src="images/banner.jpg" width="348" height="154" /></td>
            <td width="194" height="27"><div align="right" class="texfe"><span id="nl_date" class="editText"><?php echo $date; ?></span></div></td>
            <td width="195"><div align="right"><span class="style5"><span id="nl_VolEdit" class="editText"><?php echo $volEdit; ?></span></span></div></td>
            <td width="26"><div align="right" class="style5"></div></td>
          </tr>
          <tr>
            <td width="389" height="124" colspan="2" bgcolor="#FFFFFF"><span class="titu_dear">Dear <?php echo $admin;?> <?php echo $admin_lastname;?>, <span class="style4">Welcome</span></span><br />
              <span class="style3">Greenlight Memorabilia manufactures and distributes premium quality film, television and celebrity products for the many thousands of fans and collectors worldwide.</span><br />
              <br />
              <a href="#" class="texww">http://www.greenlightmemorabilia.com</a></td>
            <td><img src="images/punta5.gif" width="12" height="126" /></td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td valign="top"><table width="723" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><div align="center"><img src="images/punta1.gif" width="723" height="27"></div></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#FFFFFF"><table width="715" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="507" valign="top" bgcolor="#E7F3C4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="40" height="160" valign="top" bgcolor="#FFFFFF"><img src="images/fle_ver.gif" width="40" height="53"></td>
                    <td width="467" valign="top" bgcolor="#FFFFFF"><table width="98%" border="0" cellspacing="3" cellpadding="3">
                      <tr>
                        <td height="40" valign="bottom" class="line" id='nl_title'>
						<p style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #999999;'>
						<?php echo $title; ?>
						</p>
						</td>
                      </tr>
                      <tr>
                        <td valign="top">
                        <p class="tex">
                        <img src="<?php echo $image; ?>" width="80" height="80" hspace="8" vspace="8" align="left">
                        <span id="1" title="Latest Autograph NEWS" class="editText"><?php echo $detail; ?></span><br /><br />
                        <a href="<?php echo $link; ?>" class="lin">Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="160" valign="top" bgcolor="#E7F3C4"><img src="images/fle_ver_ver.gif" width="40" height="53"></td>
                    <td valign="top" bgcolor="#E7F3C4"><table width="98%" border="0" cellspacing="3" cellpadding="3">
                      <tr>
                        <td height="40" valign="bottom" class="line">
						<p style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #999999;'>
						<span style='color: #000000'>
						<?php echo $title2; ?>
						</span>
						</p>
						</td>
                      </tr>
                      <tr>
                        <td valign="top"><p class="tex"><img src="<?php echo $image2; ?>" width="80" height="80" hspace="8" vspace="8" align="left"><span id="2" class="editText"><?php echo $detail2; ?></span><br><br />
                            <a href="<?php echo $link2; ?>" class="lin">Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="160" valign="top" bgcolor="#FFFFFF"><img src="images/fle_ver.gif" width="40" height="53"></td>
                    <td valign="top" bgcolor="#FFFFFF"><table width="98%" border="0" cellspacing="3" cellpadding="3">
                      <tr>
                        <td height="40" valign="bottom" class="line">
						<p style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #999999;'>
						<?php echo $title3; ?>
						</p>
						</td>
                      </tr>
                      <tr>
                        <td valign="top"><p class="tex"><img src="<?php echo $image3; ?>" width="80" height="80" hspace="8" vspace="8" align="left"><span id="3" class="editText"><?php echo $detail3; ?></span><br><br />
                            <a href="<?php echo $link3; ?>" class="lin">Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <?php 
				  if ($title4 != ''){
				  ?>
                  <tr>
                    <td height="160" valign="top" bgcolor="#E7F3C4"><img src="images/fle_ver_ver.gif" width="40" height="53"></td>
                    <td valign="top" bgcolor="#E7F3C4"><table width="98%" border="0" cellspacing="3" cellpadding="3">
                      <tr>
                        <td height="40" valign="bottom" class="line">
						<p style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #999999;'>
						<span style='color: #000000'>
						<?php echo $title4; ?>
						</span>
						</p
						</td>
                      </tr>
                      <tr>
                        <td valign="top"><p class="tex"><img src="<?php echo $image4; ?>" width="80" height="80" hspace="8" vspace="8" align="left"><span id="4" class="editText"><?php echo $detail4; ?></span><br><br />
                            <a href="<?php echo $link4; ?>" class="lin">Read more...</a></p></td>
                      </tr>
                      <?php 
				  }
				  ?>
                    </table></td>
                  </tr>
                </table></td>
                <td width="208" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="194" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><div align="center"><img src="images/punta3.gif" width="194" height="11"></div></td>
                      </tr>
                      <tr>
                        <td bgcolor="#99CC00"><div align="center" class="titu2"><?php echo $ne_title; ?></div></td>
                      </tr>
                      <tr>
                        <td valign="top" bgcolor="#EBEBEB"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td class="texverde"><?php echo $ne_date; ?><br>
                              <em><?php echo substr($ne_detail,0,1100)."..."; ?></em></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="images/punta4.gif" width="194" height="21"></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table width="194" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><div align="center"><img src="images/punta3.gif" width="194" height="11"></div></td>
                      </tr>
                      <tr>
                        <td bgcolor="#99CC00"><div align="center" class="titu2"><?php echo $ne_title2; ?></div></td>
                      </tr>
                      <tr>
                        <td bgcolor="#EBEBEB"><div align="center">
                          <table width="95%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="texverde"><p><br>
                                  <?php echo $ne_date2; ?><br>
                                <?php echo substr($ne_detail2,0,1138)."...."; ?></p>
                              </td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td><img src="images/punta4.gif" width="194" height="21"></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="29" bgcolor="#EDEDED"><img src="images/punta2.gif" width="723" height="29"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="110" bgcolor="#EFEFEF"><table width="723" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="507" height="77" bgcolor="#FFFFFF"><div align="center"><img src="images/botones.jpg" width="435" height="60" border="0" usemap="#Map"></div></td>
            <td width="216" bgcolor="#FFFFFF" class="fir">PO BOX 452<br>
Darlinghurst NSW 2010<br>
Sydney, NSW Australia<br>
AUS Tel: +61 2 80657495<br>
USA Tel: (310) 7348 833<br>
Email: info@greenlightmemorabilia.com<br>
ABN: 68 450 154 725</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<map name="Map"><area shape="rect" coords="2,4,78,59" href="http://www.greenlightmemorabilia.com/contacts.php"><area shape="rect" coords="140,4,220,61" href="http://www.greenlightmemorabilia.com/Greenlight_Admin/mail/unsubscribe.php">
<SCRIPT TYPE="text/javascript"><!--

var SubjectLine='Take a look at this web page I found, '+top.document.title; 
var BodyText='You can see this page at: '+top.location.href;

var Message='<area shape="rect" coords="286,4,434,61" CLASS=contact href="mailto:?SUBJECT='+escape(SubjectLine)+'&BODY='+escape(BodyText)+'" OnMouseOver="status=\'Envoyer cette page à vos amis\'; return true;" TITLE="Send your friends e-mail about this page" alt="Send 2 Friends" />';

var MessageIE='<area shape="rect" coords="286,4,434,61" CLASS=contact href="mailto:?SUBJECT='+escape(SubjectLine)+'&BODY='+escape(BodyText)+'" OnMouseOver="status=\'Envoyer cette page à vos amis\'; return true;" TITLE="Send your friends e-mail about this page" alt="Send 2 Friends" />';

if(document.all) { document.write(MessageIE); }

else { document.write(Message); }

//--></SCRIPT>
</map>
<br />
<table width="350" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td>&nbsp;</td>
    <td align="center" valign="middle">
        <input type="submit" name="Send" id="Send" value="Send" />
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
