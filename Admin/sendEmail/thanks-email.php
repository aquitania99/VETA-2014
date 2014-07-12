<?php 
require_once('class.phpmailer.php');
//Thursday 12th of May 2011
//echo "The emails?".$pieces[0]."<br />";
//$date = date('l dS \of F Y');
//May, 12 / 2011
$sendDate = date('F \,d \/ Y');
//////////////////////////////////////////////////////////
	$emailtext = $pieces[0];
	$mail = new phpmailer();
	$mail->IsSMTP();                             // tell the class to use SMTP
	//$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       	= 25;                    // set the SMTP server port
	$mail->Host       	= "info@australiaveta.com.au"; // SMTP server
	$mail->Username   	= "info@australiaveta.com.au"; // SMTP server username
	//$mail->Password   = "password";            // SMTP server password
	$mail->Mailer 	 = "Mail";  // tell the class to use Sendmail
	$mail->From     	= "info@australiaveta.com.au";
	$mail->FromName 	= "info@australiaveta.com.au";
	$mail->IsHTML(true); // send as HTML
	$messageHtml = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Tu Visa esta a punto de vencer</title>
<style type='text/css'>
<!--
.fondo_principal {
	background-image: url(http://www.australiaveta.com.au/Admin/newsletter/images/fondo.jpg);
	background-repeat: no-repeat;
	background-position: center top;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
h1,h2,h3,h4,h5,h6 {
	font-family: Arial, Helvetica, sans-serif;
}
h1 {
	font-size: 24px;
	color: #FFFFFF;
	font-weight: bold;
	margin: 0px;
}
h3 {
	font-size: 12px;
	color: #1F1D5D;
	margin: 0px;
}
p {
	font-size: 12px;
	color: #1F1D5D;
	text-decoration: none;
	margin: 0px;
}
h4 {
	font-size: 18px;
	color: #FFFFFF;
	font-family: Impact, 'Arial Black';
	text-decoration: none;
	font-weight: normal;
	margin: 0px;
}
h5 {
	color: #CCCCCC;
	margin: 0px;
	font-size: 12px;
	font-weight: normal;
}
.lineh {
	border-bottom-width: 1px;
	border-bottom-style: dotted;
	border-bottom-color: #CCCCCC;
}
.linev {
	border-right-width: 1px;
	border-right-style: dotted;
	border-right-color: #CCCCCC;
}
a {
	font-size: 12px;
	color: #0099FF;
}
.fondo_fle {
	background-image: url(http://www.australiaveta.com.au/Admin/newsletter/images/fle.gif);
	background-repeat: no-repeat;
	background-position: right top;
}
li {
	margin-left: -15px;
}
.texpromo {
	font-family: Impact, 'Arial Black';
	font-size: 14px;
	font-weight: normal;
	color: #FF9900;
	text-decoration: none;
}
a:hover {
	color: #CC0000;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}

-->
</style>
</head>

<body style='margin-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333;' bgcolor='#FFF'>
<table width='810' border='0' align='center' cellpadding='0' cellspacing='0' background='http://www.australiaveta.com.au/newsletter/images/fondototal.jpg' bgcolor='#F4F7FB'>
  <tr>
    <td align='left' valign='top'><table width='810' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td valign='top' background='http://www.australiaveta.com.au/Admin/newsletter/images/fondo.jpg' style='background-repeat: no-repeat; background-position: center top;'><table width='810' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td width='28' align='center' valign='top'><table width='24' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td height='177'>&nbsp;</td>
              </tr>
              <tr>
                <td height='290' align='center' valign='middle'><a href='http://www.australiaveta.com.au/' target='_blank'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/www.gif' width='21' height='246' border='0' /></a></td>
              </tr>
            </table></td>
            <td width='779' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td height='30' align='center' valign='middle' bgcolor='#FFFFFF'>Is this email not displaying correctly? <a href='http://www.australiaveta.com.au/visa-notice/veta-visa-expiry-$pieces[3].php'>View it in your browser.</a></td>
              </tr>
              <tr>
                <td height='128' align='left' valign='top'><table width='756' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td width='50%'>&nbsp;</td>
                    <td width='50%' height='26' align='left' valign='middle'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td height='25' align='left' valign='middle'><h3 style='font-size: 12px; color: #1F1D5D; margin: 0px; font-family: Arial, Helvetica, sans-serif;'><strong>Hi!, $pieces[1]</strong></h3></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td height='30' align='right' valign='middle'><h3 style='font-size: 12px; color: #1F1D5D; margin: 0px; font-family: Arial, Helvetica, sans-serif;'>$sendDate</h3></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height='55' align='center' valign='middle'><h1 style='font-family: Arial, Helvetica, sans-serif; font-size: 26px; color: #DAE0F0; font-weight: bold; margin: 0px;'>Gracias / Thanks</h1></td>
              </tr>
              <tr>
                <td align='left' valign='top'><table width='775' border='0' cellspacing='6' cellpadding='0'>
                  <tr>
                    <td width='52' align='left' valign='top'>&nbsp;</td>
                    <td width='520' align='left' valign='top'><p align='center'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/home1_esp.jpg' width='500' height='94' /></p>
                      <p>&nbsp;</p>
                      <p><strong>VETA “Viva, Estudie y Trabaje en Australia ”</strong> es una agencia de educacion e inmigracion</p>
                      <p>donde te vamos a dar una asesoria completa y personalizada para renovar tu visa</p>
                      <p>las opciones que tienes para aplicar a residencia permanente Te invitamos a que conozcas</p>
                      <p>nuestra oficina donde vas a encontrar gente amable y dispuesta a prestarte la mejor</p>
                      <p>asesoria.</p>
                      <p>&nbsp;</p>
                      <p>Adicionalmente, podemos brindaerte informacion para aplicar a visa de pareja,</p>
                      <p>sponsorships e informarcion sobre los cambios de immigracion, a traves de nuestros</p>
                      <p>seminarios informativos que son completamente GRATIS.</p>
                      <p>&nbsp;</p>
                      <p><strong><img src='http://www.australiaveta.com.au/Admin/newsletter/images/marcasello.png' width='157' height='157' align='right' /></strong>Esperando verte pronto en VETA! Suite 506, Level 5, 22 Market St. Sydney NSW 2000</p>
                      <p>O Contactanos al 0292991458 o responde a este mail<a href="mailto:info@australiaveta.com.au"> info@australiaveta.com.au</a></p>
                      <p>&nbsp;</p>
                      <p align="center"><strong>PREGUNTA POR LA PROMOCION DEL MES!</strong></p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p align="left">Atentamente,</p>
                      <p><strong>VETA “Viva, Estudie y Trabaje en Australia ”</strong></p>
                      <p>&nbsp;</p>
                      <p align="center">&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p align='center'>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>                      </td>
                    <td width='183' align='left' valign='top'><table width='183' border='0' cellspacing='0' cellpadding='5'>
                      <tr>
                        <td><img src='http://www.australiaveta.com.au/Admin/newsletter/images/facebook.gif' width='16' height='16' hspace='6' vspace='6' align='absmiddle' /><a href='http://www.facebook.com/group.php?gid=83106243722&amp;ref=search&amp;sid=676263145.1918115937..1#!/group.php?gid=83106243722&amp;v=wall' target='_blank'>Friend on Facebook</a><br />
                          <img src='http://www.australiaveta.com.au/Admin/newsletter/images/mail.gif' width='16' height='16' hspace='6' vspace='6' align='absmiddle' /><a href='#'>Unsubscribe</a></td>
                      </tr>
                      <tr>
                       <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'>
						<span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'>MIGRATIONS</span></td>
                      </tr>
                      <tr>
                        <td align='left' valign='top'><img src='http://www.australiaveta.com.au/newsletter/images/foto3.gif' width='165' height='94' />
                          <ul>
                            <li style='margin-left: -15px;'><span style='color: #D30D44'>If you are and Engineer such as Civil, Electronic, Electrical, Chemical, Mechanical, Mining, and Industrial. </span></li>
                            <li style='margin-left: -15px;'><span style='color: #D30D44'>Or an Accountant, Business Administrator and financial manager.</span></li>
                            <li style='margin-left: -15px;'><span style='color: #D30D44'>Have 1 year work experience after graduation</span></li>
                            <li style='margin-left: -15px;'><span style='color: #D30D44'>General IELTS 6.0 no band under 6.0</span></li>
                            <li style='margin-left: -15px;'><span style='color: #D30D44'>It means you have a good chance to apply for a permanent resident.</span></li>
                            <li style='margin-left: -15px;'><span style='color: #D30D44'>Or if you don't satisfy the above criteria we can show you the right pathway to follow </span></li>
                          </ul>
                          <p align='center'>FOR FUTHER INFROMATION <br />
                            CONTACT US:<br />
                            Suite 506, 22 Market St,<br />
                            Sydney NSW 2000 Australia<br />
                            T /9299 0203<br />
                            F + 02 9299 9214<br />
                             Info@mmmigration.com.au  <a style='font-size: 12px; color: #0099FF;' href='http://www.mmmigration.com.au' target='_blank'>www.mmmigration.com.au</a><br>
                             <br>
                          </p>                          </td>
                      </tr>

                    </table></td>
                  </tr>
                  
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table>          </td>
      </tr>
    </table>      </td>
  </tr>
  <tr>
   <td height='179' align='left' valign='top' background='http://www.australiaveta.com.au/newsletter/images/imagen-footer.jpg' style='background-repeat: no-repeat;' bgcolor='#1D1A51'><table width='100%' border='0' cellspacing='0' cellpadding='5'>
      <tr>
        <td width='158' rowspan='3'></td>
        <td height='29' colspan='3' align='right' valign='middle' style='border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: #CCCCCC;'><h5 style='font-family: Arial, Helvetica, sans-serif; color: #CCCCCC; margin: 0px; font-size: 12px; font-weight: normal;'><strong>SERVICES OFFERED</strong></h5></td>
        <td align='left' valign='middle'></td>
        <td align='left' valign='middle'>&nbsp;</td>
      </tr>
      <tr>
        <td width='119' align='left' valign='middle' style='border-right-width: 1px; border-right-style: dotted; border-right-color: #CCCCCC;'><span style='color: #CC0000; font-weight: bold;'>APPLICATION FOR</span></td>
        <td width='156' align='left' valign='middle' style='border-right-width: 1px; border-right-style: dotted; border-right-color: #CCCCCC;'><span style='color: #CC0000; font-weight: bold;'>INFORMATION</span></td>
        <td width='136' align='left' valign='middle'><span style='color: #CC0000; font-weight: bold;'>OTHERS</span></td>
        <td width='2' rowspan='2' align='left' valign='top'></td>
        <td rowspan='2' align='left' valign='top'><span style='color: #8CA3D1'><a style='font-size: 12px; color: #0099FF;' href='http://www.australiaveta.com.au' target='_blank'>www.australiaveta.com.au<br>
                <br>
          </a><a mailto:'info@australiaveta.com.au'>info@australiaveta.com.au</a><br />
          Suite 506, Level 5, 22 Market St<br />
          Sydney, NSW 2000, Australia<br />
          T+ 61 2 9299 14 58<br />
          F+ 61 2 9299 92 14</span></td>
      </tr>
      <tr>
        <td align='left' valign='top' style='border-right-width: 1px; border-right-style: dotted; border-right-color: #CCCCCC;'><h5 style='font-family: Arial, Helvetica, sans-serif; color: #CCCCCC; margin: 0px; font-size: 12px; font-weight: normal;'>Student Visas<br>
          English Courses<br>
          Vocational Courses<br>
          Universities Pre and <br>
          Post Graduate</h5></td>
        <td align='left' valign='top' style='border-right-width: 1px; border-right-style: dotted; border-right-color: #CCCCCC;'><h5 style='font-family: Arial, Helvetica, sans-serif; color: #CCCCCC; margin: 0px; font-size: 12px; font-weight: normal;'>Permanent Residency<br>
          Company Sponsorships<br>
          Partner Visas<br>
          University Scholarship<br>
          Engineers Migration Options</h5></td>
        <td align='left' valign='top'><h5 style='font-family: Arial, Helvetica, sans-serif; color: #CCCCCC; margin: 0px; font-size: 12px; font-weight: normal;'>Accommodation<br>
          Tax File Number<br>
          Jobs Option<br>
          Proof Of Age Card<br>
          Booking  for “ White Card, RSA, RCG and RFH Courses</h5></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>";
////////////////////////////////////////////////
    $mail->Subject = "Australia VETA - Visa Expiry Notice";
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

echo "The Visa Expiry Notice has been Sent to: ".count($test)."!!";
//////////////////////////////////////////////////////////
?>

