<?php 
session_start();
require('Connections/greenNewsletter.php');
require('newsletter.php');
require('events.php');
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
/////////////////////
$plain_text ="
Dear $admin $admin_lastname Welcome /n/n
Greenlight Memorabilia manufactures and distributes premium quality film, television and celebrity products /n
for the many thousands of fans and collectors worldwide. 
/n/n
www.greenlightmemorabilia.com
Date:  $date   Edition:  $volEdit /n/n/n/n 
 $title /n  
 $detail /n/n/n 
 $title2 /n 
 $detai2 /n/n/n 
 $title3 /n 
 $detai3 /n/n/n  
 $title4 /n 
 $detai4 /n/n/n ";
$html_text = "
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
				  if ($title4 != ''){
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
 }
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
                              <em>$ne_detail</em></td>
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
                                $ne_detail2</p>
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
<map name='Map'><area shape='rect' coords='2,4,78,59' href='../../contacts.php'><area shape='rect' coords='140,4,220,61' href='unsubscribe.php'>
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
    // Para enviar correo HTML, la cabecera Content-type debe definirse
	///$sendTo = $emailtext.", ";
	$sendTo = "webmaster@greenlightpopculture.com";
	$subject = "Greenlight Memorabilia Newsletter";
	$headers = "From: info@greenlightmemorabilia.com";
	$headers .= "<info@greenlightmemorabilia.com>\r\n";
	//$headers .= "Reply-To: aquitania99@gmail.com"; 
	// Para enviar correo HTML, la cabecera Content-type debe definirse
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$message = "--$mime_boundary
	Content-Type: text/plain; charset=us-ascii
	Content-Transfer-Encoding: 7bit

	$plain_text

	--$mime_boundary
	Content-Type: text/html; charset=us-ascii
	Content-Transfer-Encoding: 7bit

	$html_text

	";
///
echo "Newsletter sent to: ".$sendTo."<br />";
///
mail($sendTo, $subject, $message, $headers);
?>
