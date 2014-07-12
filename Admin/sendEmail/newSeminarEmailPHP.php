<?php

$emailAddress = $sendEmails;
echo "<span style='color:#FF0; font-size:14px;'>Send to this email....".$emailAddress." - ".$date." </span><br />";
//////////////////////////////////////////////////////////
	$emailtext = $emailAddress;
	$mail = new phpmailer();
	$mail->IsSMTP();                             // tell the class to use SMTP
	//$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       	= 25;                    // set the SMTP server port
	$mail->Host       	= "mail.australiaveta.com.au"; // SMTP server
	$mail->Username   	= "emails+australiaveta.com.au"; // SMTP server username
	$mail->Password   = "pass@word01";            // SMTP server password
	$mail->Mailer 	 = "Mail";  // tell the class to use Sendmail
	$mail->From     	= "info@australiaveta.com.au";
	$mail->FromName 	= "Australia VETA - Seminars";
	$mail->IsHTML(true); // send as HTML
	$messageHtml = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN''http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Australia VETA - Seminar</title>
<style type='text/css'>
<!--
.tituclasificados {	font-family: Arial, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	background-image: url(images/fondocla.gif);
	background-repeat: no-repeat;
	background-position: center center;
	font-weight: bold;
	height: 39px;
}
-->
</style>
</head>
<body style='margin-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; font-family: Arial, sans-serif; font-size: 12px; color: #333333;' bgcolor='#FFFFFF'>
<table width='810' border='0' align='center' cellpadding='0' cellspacing='0' background='http://www.australiaveta.com.au/Admin/newsletter/images/fondototal.jpg' bgcolor='#F4F7FB'>
  <tr>
    <td align='left' valign='top'><table width='810' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td valign='top' background='http://www.australiaveta.com.au/Admin/newsletter/images/fondoinvita.png' style='background-repeat: no-repeat; background-position: center top;'>
        <table width='810' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td width='28' align='center' valign='top'><table width='24' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td height='177'>&nbsp;</td>
              </tr>
              <tr>
                <td height='290' align='center' valign='middle'><a style='font-size: 12px; color: #0099FF;' href='http://www.australiaveta.com.au' target='_blank'><br />
                  <br />
                  <img src='http://www.australiaveta.com.au/Admin/newsletter/images/www.gif' width='21' height='246' border='0' /></a></td>
              </tr>
            </table></td>
            <td width='779' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td height='30' align='center' valign='middle' bgcolor='#FFFFFF'>Is this email not displaying correctly? <a style='font-size: 12px; color: #0099FF;' href='http://www.australiaveta.com.au/seminars/vetaSeminars-$afterID-$usr.php' target='_blank'>View it in your browser.</a></td>
              </tr>
              <tr>
                <td height='154' align='left' valign='top'>
                <table width='756' border='0' cellspacing='0' cellpadding='0' align='left' valign='top'>
                  <tr>
                    <td width='6%'>&nbsp;</td>
                    <td width='44%' align='center' valign='middle'>
                    <h4 style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; text-transform: uppercase; font-weight: normal; margin: 0px;'>$date</h4></td>
                    <td height='26' colspan='2' align='left' valign='middle'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan='2'>&nbsp;</td>
                    <td height='25' colspan='2' align='left' valign='middle'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan='2'>&nbsp;</td>
                    <td height='25' colspan='2' align='left' valign='middle'><h3 style='font-size: 12px; color: #1F1D5D; margin: 0px;'>Hi!, $name $lastName</h3></td>
                  </tr>
                  <tr>
                    <td colspan='2'>&nbsp;</td>
                    <td width='30%' height='30' align='right' valign='middle'><h3 style='font-size: 12px; color: #1F1D5D; margin: 0px;'>&nbsp;</h3></td>
                    <td width='20%' align='right' valign='middle'><h3 style='font-size: 12px; color: #1F1D5D; margin: 0px; font-family: Arial, Helvetica, sans-serif;'>
					$sendDate
					</h3></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height='55' align='center' valign='middle'><h1 style='font-size: 26px; color: #FFFFFF; margin: 0px;'>$titleOne</h1></td>
              </tr>
              <tr>
                <td align='left' valign='top'><br />
				<table width='775' border='0' cellspacing='6' cellpadding='0'>
                  <tr>
                    <td width='52' align='left' valign='top'>&nbsp;</td>
                    <td width='520' align='left' valign='top'><div align='center'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/home7_esp.jpg' width='500' height='94' />
                    </div>
<br />
<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td><p style='font-size: 12px; color: #1F1D5D; text-decoration: none; margin: 0px;'><strong><img src='http://www.australiaveta.com.au/Admin/newsletter/images/marcasello.png' alt='' width='157' height='157' hspace='7' vspace='7' align='right' /></strong></p>
      $textOne<br />
      <br /></td>
  </tr>
  <tr>
    <td style='border-top-width:2px; border-top-style:solid; border-top-color:#000033;'><br />
      <strong><em><img src='http://www.australiaveta.com.au/Admin/newsletter/images/marcasello1.png' width='157' height='157' hspace='7' vspace='7' align='right' /></em></strong>$textTwo<br />
<p style='font-size: 12px; color: #1F1D5D; text-decoration: none; margin: 0px;'>&nbsp;</p></td>
  </tr>
  <tr>
    <td style='border-top-width:2px; border-top-style:solid; border-top-color:#000033;'><br />
      <strong><em><img src='http://www.australiaveta.com.au/Admin/newsletter/images/marcasello2.png' width='157' height='157' hspace='7' vspace='7' align='right' /></em></strong>$text_br<br />
<p style='font-size: 12px; color: #1F1D5D; text-decoration: none; margin: 0px;'>&nbsp;</p></td>
  </tr>
</table></td>
                    <td width='180' align='left' valign='top' bgcolor='#FFFFFF'><table width='180' border='0' cellspacing='0' cellpadding='4'>
                      <tr>
                        <td><img src='http://www.australiaveta.com.au/Admin/newsletter/images/facebook.gif' width='16' height='16' hspace='6' vspace='6' align='absmiddle' /><a style='font-size: 12px; color: #0099FF;' href='http://www.facebook.com/group.php?gid=83106243722&amp;ref=search&amp;sid=676263145.1918115937..1#!/group.php?gid=83106243722&amp;v=wall' target='_blank'>Friend on Facebook</a><br />
                          <img src='http://www.australiaveta.com.au/Admin/newsletter/images/mail.gif' width='16' height='16' hspace='6' vspace='6' align='absmiddle' /><a style='font-size: 12px; color: #0099FF;' href='http://www.australiaveta.com.au/Admin/newsletter/unsubscribe.php?usr=$usr'>Unsubscribe</a></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'>
						<span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'>$titleThree</span></td>
                      </tr>
                      <tr>
                        <td align='left' valign='top'><p style='font-size: 12px; color: #1F1D5D; text-decoration: none; margin: 0px;'><img src='http://www.australiaveta.com.au/$imageThree' width='160' hspace='4' vspace='4' /><br>
                        </p>
                          $textThree<br>
                          <br></td>
                      </tr>
                      <tr>
                      <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'>
						<span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'>$titleFour</span></td>
                      </tr>
                      <tr>
                        <td align='left' valign='top'><img src='http://www.australiaveta.com.au/$imageFour' width='160' hspace='4' vspace='4' /><br>
                          <span style='font-family: Impact !important; font-size: 14px; font-weight: normal; color: #FF9900 !important; text-decoration: none;'>$textFour<br>
                            <br>
                          </span></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'>
						<span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'>MIGRATIONS</span></td>
                      </tr>
                      <tr>
                        <td align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/foto3.gif' width='165' height='94' />
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
                            Suite 102, Level 1, 22 Market St.<br />
							Sydney, NSW 2000, Australia<br />
							T+61 2 9299 14 58<br />
							F+61 2 9299 92 14<br />
							Info@mmmigration.com.au  <a style='font-size: 12px; color: #0099FF;' href='http://www.mmmigration.com.au' target='_blank'>www.mmmigration.com.au</a><br>
                             <br>
                          </p>                          </td>
                      </tr>
                      <tr>
                        <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'><span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'>WEB VETA</span></td>
                      </tr>
                      <tr>
                        <td valign='top'><ul>
                            <li><a title='index.php' href='http://www.australiaveta.com.au/index.php' target='_blank'>HOME </a> <br>
                                <br>
                            </li>
                          <li>EDUCATION </li>
                          <li><a title='Education-English.html' href='http://www.australiaveta.com.au/Education-English.html' target='_blank'>English</a></li>
                          <li><a title='Education-Technical.html' href='http://www.australiaveta.com.au/Technical.html' target='_blank'>Technical </a></li>
                          <li><a title='Education-University.html' href='http://www.australiaveta.com.au/Education-University.html' target='_blank'>University</a><br>
                                <br>
                            </li>
                          <li>VISAS </li>
                          <li><a title='Visas-Study.html' href='http://www.australiaveta.com.au/Visas-Study.html' target='_blank'>Study</a></li>
                          <li><a title='Visas-Work.html' href='http://www.australiaveta.com.au/Visas-Work.html' target='_blank'>Work</a></li>
                          <li><a title='About-Australia.html' href='http://www.australiaveta.com.au/About-Australia.html' target='_blank'>About Australia</a><br>
                                <br>
                            </li>
                          <li>CONTACT US </li>
                          <li><a title='ContactForm.php' href='http://www.australiaveta.com.au/Contact-Form.php' target='_blank'>Contact Form</a></li>
                          <li><a title='Contact.html' href='http://www.australiaveta.com.au/Contact.html' target='_blank'>Staff</a></li>
                          <li><a title='testimonials.html' href='http://www.australiaveta.com.au/testimonials.html' target='_blank'>Testimonials</a><br>
                                <br>
                            </li>
                        </ul></td>


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
    <td height='179' align='left' valign='top' background='http://www.australiaveta.com.au/Admin/newsletter/images/imagen-footer.jpg' style='background-repeat: no-repeat;' bgcolor='#1D1A51'><table width='100%' border='0' cellspacing='0' cellpadding='5'>
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
          Suite 102, Level 1, 22 Market St.<br />
		  Sydney, NSW 2000, Australia<br />
		  T+61 2 9299 14 58<br />
		  F+61 2 9299 92 14</span></td>
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
    $mail->Subject = "Australia VETA - Seminars";
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
