<?php

$emailAddress = $sendEmails;
	//echo "<span style='color:#FF0; font-size:14px;'>Send to this email....".$emailAddress." - ".$date." </span><br />";
//////////////////////////////////////////////////////////
	$emailtext = $emailAddress;
	$mail = new phpmailer();
	$mail->IsSMTP();                             // tell the class to use SMTP
	$mail->SMTPAuth   = false;                  // enable SMTP authentication
	$mail->Port       	= 587;                    // set the SMTP server port
	$mail->Host       	= "smtp.gmail.com"; // SMTP server
	$mail->Username   	= "veta@sevenstudio.com.au"; // SMTP server username
	$mail->Password   = "vet@!emails01";            // SMTP server password
	$mail->Mailer 	 = "Mail";  // tell the class to use Sendmail
	$mail->From     	= "info@australiaveta.com.au";
	$mail->FromName 	= "Australia VETA - Classifieds";
	$mail->IsHTML(true); // send as HTML
	$messageHtml = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN''http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Australia VETA - Classifieds</title>
<style type='text/css'>
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}

h1 {
	font-size: 35px;
	color: #FFF;
	font-weight: normal;
	margin: 0px;
}
h2 {
	font-size: 16px;
	color: #FFF;
	font-weight: normal;
	margin: 0px;
}
h3 {
	font-size: 25px;
	color: #333;
	font-weight: normal;
	margin: 0px;
}
h4 {
	font-size: 20px;
	color: #333;
	font-weight: normal;
	margin: 0px;
}
h5 {
	font-size: 11px;
	color: #FFF;
	font-weight: normal;
	margin: 0px;
}
h6 {
	font-weight: normal;
	margin: 0px;
	color: #403B62;
	border-top-width: 1px;
	border-top-style: dotted;
	border-top-color: #CCC;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
  <tr>
    <td align='center' valign='top' bgcolor='#E5E0D9'><table width='600' border='0' cellpadding='0' cellspacing='0'>
      <tr>
        <td align='left' valign='top' bgcolor='#FFFFFF'><table width='600' border='0' cellpadding='0' cellspacing='0'>
          <tr>
            <td height='25' align='center' valign='middle' bgcolor='#E5E0D9'>Is this email not displaying correctly?  <a href='http://www.australiaveta.com.au/classifieds/vetaClassifieds-$afterID-$usr.php'>View it in your browser</a>.</td>
          </tr>
          <tr>
            <td height='30' align='center' valign='middle' bgcolor='#EB0310'><h2 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 16px; font-weight: normal;'>Hi!,$name $lastName</h2></td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='560' border='0' cellpadding='0' cellspacing='0'>
              <tr>
                <td height='130' align='left' valign='top'><table width='100%' border='0' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td width='72%' height='130' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/logo-viva-estudie-y-trabaje-en-australia.gif' width='197' height='117' /></td>
                    <td width='28%' align='right' valign='middle'><table width='155' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td height='25' align='left' valign='middle'><strong>Keep Up With Us</strong></td>
                      </tr>
                      <tr>
                        <td height='24' align='left' valign='middle'><h6 style='font-weight: normal; margin: 0px; color: #403B62; border-top-width: 1px; border-top-style: dotted; border-top-color: #CCCCCC; font-size: 12px;'><a href='https://www.facebook.com/australiaveta' target='_blank'>Facebook</a></h6></td>
                      </tr>
                      <tr>
                        <td height='24' align='left' valign='middle'><h6 style='font-weight: normal; margin: 0px; color: #403B62; border-top-width: 1px; border-top-style: dotted; border-top-color: #CCCCCC; font-size: 12px;'><a href='https://twitter.com/veta_education' target='_blank'>Twitter</a></h6></td>
                      </tr>
                      <tr>
                        <td height='24' align='left' valign='middle'><h6 style='font-weight: normal; margin: 0px; color: #403B62; border-top-width: 1px; border-top-style: dotted; border-top-color: #CCCCCC; font-size: 12px;'><a href='http://www.youtube.com/user/VETAEDUCATION/feed' target='_blank'>Youtube</a></h6></td>
                      </tr>
                      <tr>
                        <td height='24' align='left' valign='middle'><h6 style='font-weight: normal; margin: 0px; color: #403B62; border-top-width: 1px; border-top-style: dotted; border-top-color: #CCCCCC; font-size: 12px;'><a href='http://www.australiaveta.com.au/' target='_blank'>www.australiaveta.com.au</a></h6></td>
                      </tr>
                    </table></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height='214' align='left' valign='top'><a href='http://www.australiaveta.com.au/veta-specials/campaign-iPad-SurfBoard/spanish/' target='_blank'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/banner-viva-estudie-y-trabaje-en-australia.jpg' width='560' height='214' border='0' /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align='left' valign='top'><table width='100%' border='0' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td width='410' align='left' valign='top'><table width='410' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td height='42' align='left' valign='middle' bgcolor='#1F1D5D'><h1 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 35px; font-weight: normal;'>&nbsp;Jobs</h1></td>
                      </tr>
                      <tr>
                        <td height='15' align='left' valign='top' bgcolor='#EFEFEF'><table width='98%' border='0' align='center' cellpadding='0' cellspacing='5'>
                          <tr>
                            <td align='left' valign='top'><p><br />
$textOne</p></td>
                          </tr>
                        </table></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td height='42' align='left' valign='middle' bgcolor='#CC0000'><h1 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 35px; font-weight: normal;'>&nbsp;Accommodation</h1></td>
                        </tr>
                      <tr>
                        <td bgcolor='#EFEFEF'><table width='98%' border='0' align='center' cellpadding='0' cellspacing='5'>
                          <tr>
                            <td align='left' valign='top'><p><br />$textThree
                              </p></td>
                          </tr>
                        </table></td>
                      </tr>
                      </table></td>
                    <td width='19'>&nbsp;</td>
                    <td width='128' align='left' valign='top'><table width='128' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td height='113' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/banne3-viva-estudie-y-trabaje-en-australia.jpg' width='128' height='113' /></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td height='600' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/banne4-viva-estudie-y-trabaje-en-australia.jpg' width='128' height='600' /></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height='150' align='center' valign='top' bgcolor='#1F1D5D'><table width='560' border='0' cellpadding='0' cellspacing='0'>
              <tr>
                <td width='185' height='20'>&nbsp;</td>
                <td width='211' height='20'>&nbsp;</td>
                <td width='164' height='20'>&nbsp;</td>
              </tr>
              <tr>
                <td height='20' align='left' valign='middle'><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'><strong>APPLICATION FOR</strong></h5></td>
                <td height='20' align='left' valign='middle'><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'><strong>INFORMATION</strong></h5></td>
                <td height='20'><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'><strong>OTHERS</strong></h5></td>
              </tr>
              <tr>
                <td><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'>&nbsp;</h5></td>
                <td><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'>&nbsp;</h5></td>
                <td><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'>&nbsp;</h5></td>
              </tr>
              <tr>
                <td height='80' align='left' valign='top'><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'>Student Visas<br />
                  English Courses<br />
                  Vocational Courses<br />
                  Universities Pre and <br />
                  Post Graduate</h5></td>
                <td height='80' align='left' valign='top'><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'>Permanent Residency<br />
                  Company Sponsorships<br />
                  Partner Visas<br />
                  University Scholarship<br />
                  Engineers Migration Options</h5></td>
                <td height='80' align='left' valign='top'><h5 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 11px; font-weight: normal;'>Accommodation<br />
                  Tax File Number<br />
                  Jobs Option<br />
                  Proof Of Age Card<br />
                  Booking for &quot; White Card,<br />
                  RSA, RCG and RFH Courses</h5></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td bgcolor='#E5E0D9'><br />
              T+61 2 9299 14 58 |  F+61 2 9299 92 14 | Suite 102, Level 1, 22 Market St. Sydney, NSW 2000, Australia<br />
              <a href='http://www.australiaveta.com.au' target='_blank'>www.australiaveta.com.au</a> |  <a href='mailto:admissions@australiaveta.com.au'>admissions@australiaveta.com.au</a><br />
              Copyright © *|2012| VIVA Y ESTUDIE EN AUSTRALIA, Rights Reserved. <br />
              <a href='http://www.australiaveta.com.au/Admin/newsletter/unsubscribe.php?usr=$usr'>Unsubscribe</a> from this list<br />
              <br /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>"; 
////////////////////////////////////////////////
    $mail->Subject = "Australia VETA - Classifieds";
    $mail->Body    = $messageHtml;
    //$mail->AltBody = $messageText;
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
	echo "There's a problem sending the email ".$valor;
	echo "<br/>".$mail->ErrorInfo;
   }
    // clear all addresses and attachments for next loop
    $mail->clearaddresses();
    //$mail->clearattachments();

?>
