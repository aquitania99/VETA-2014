<?php 
require_once('class.phpmailer.php');
//Thursday 12th of May 2011
//echo "The emails?".$pieces[0]."<br />";
//$date = date('l dS \of F Y');
//May, 12 / 2011
$sendDate = date('F \,d \/ Y');
//////////////////////////////////////////////////////////
	$emailtext = $pieces[0];
	//$emailtext = $clientEmail;
	$mail = new phpmailer();
	$mail->IsSMTP();                             // tell the class to use SMTP
	//$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       	= 25;                    // set the SMTP server port
	$mail->Host       	= "info@australiaveta.com.au"; // SMTP server
	$mail->Username   	= "info@australiaveta.com.au"; // SMTP server username
	//$mail->Password   = "password";            // SMTP server password
	$mail->Mailer 	 = "Mail";  // tell the class to use Sendmail
	$mail->From     	= "info@australiaveta.com.au";
	$mail->FromName 	= "VETA - Your Visa is About to Expire ";
	$mail->IsHTML(true); // send as HTML
	$messageHtml = "<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Your Visa is About to Expire</title>
<style type='text/css'>
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
	text-align: left;
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
.span {
	color: #C00;
}
.spangris {
	color: #333;
}
.spanblanco {
	color: #FFF;
}
.image {
	background-image: url(images/visa-date.gif);
	background-repeat: no-repeat;
	background-position: center center;
}
.number {
	font-size: 80px;
	font-weight: bold;
	color: #333;
}
</style>
</head>

<body>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
  <tr>
    <td align='center' valign='top' bgcolor='#E5E0D9'><table width='600' border='0' cellpadding='0' cellspacing='0'>
      <tr>
        <td align='left' valign='top' bgcolor='#FFFFFF'><table width='600' border='0' cellpadding='0' cellspacing='0'>
          <tr>
            <td height='25' align='center' valign='middle' bgcolor='#E5E0D9'>Is this email not displaying correctly?  <a href='http://www.australiaveta.com.au/visa-notice/veta-visa-expiry-eng-$pieces[3].php'>View it in your browser</a>.</td>
          </tr>
          <tr>
            <td height='30' align='center' valign='middle' bgcolor='#EB0310'><h2 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 16px; font-weight: normal;'>Hi!, $pieces[1]</h2></td>
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
                        <td height='24' align='left' valign='middle'><h6 style='font-weight: normal; margin: 0px; color: #403B62; border-top-width: 1px; border-top-style: dotted; border-top-color: #CCCCCC; font-size: 12px;'><a href='www.facebook.com/australiaveta' target='_blank'>Facebook</a></h6></td>
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
                <td align='left' valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
              </tr>
              <tr>
                <td height='214' align='left' valign='top' bgcolor='#EFEFEF'><br />
                  <table width='95%' border='0' align='center' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td width='63%' valign='top'><h1 style='font-family: Arial, sans-serif; color: #333333; margin: 0px; font-size: 35px; font-weight: normal;'>Your VISA is going to<br />
                      EXPIRE</h1>
                      <p><strong>We know your visa is going to expire soon</strong> and we would like to help you with the process.</p>
                      <p><strong>Here are some reasons to renew your visa with VETA.</strong></p>
                      <p><br />
                  </p></td>
                    <td width='37%' align='center' valign='top' class='image'><table width='170' border='0' cellspacing='0' cellpadding='0'>
                      <tr>
                        <td height='22'>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height='35' align='center' valign='middle' bgcolor='#ED010F'><h4 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 20px; font-weight: normal;'><strong>$month</strong></h4></td>
                      </tr>
                      <tr>
                        <td height='114' align='center' valign='middle' bgcolor='#FFFFFF'><span style='font-family: Arial, Helvetica, sans-serif; font-size: 80px; color: #333333; font-weight: bold; margin: 0px;'>$dayExp</span></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align='left' valign='top'><table width='100%' border='0' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td width='410' align='left' valign='top'><h3 style='font-family: Arial, sans-serif; color: #333333; margin: 0px; font-size: 25px; font-weight: normal; text-align: left;'>ALWAYS ASK ABOUT THE PROMOTION OF THE MONTH!
                      </h3>
                      <ol>
                        <li>You will recive completely free advice.<br />
                          <br />
                        </li>
                        <li>We are an education company that uses a migration agent to assist your visa application.<br />
                          <br />
                        </li>
                        <li>If you need to apply for a Sponsorship via, our migration agent can help you with you application process.<br />
                          <br />
                        </li>
                        <li>We also offer a free<strong> JOB ASSISTANCE</strong> service.<br />
                          <br />
                        </li>
                        <li>VETA can assist you to get a <strong>SCHOLARSHIP</strong> with an Australian University.</li>
                  </ol>
                      <h6 style='font-weight: normal; margin: 0px; color: #403B62; border-top-width: 1px; border-top-style: dotted; border-top-color: #CCCCCC; font-size: 12px;'align='center'><strong><br />
                        <br />
                        RENEW YOUR VISA WITH VETA AND RECEIVE A USB MEMORY 4GB</h6>
						</strong>
                      <p align='center'>&nbsp;</p>
                      <p><span class='span'><strong>REMENBER</strong> If your visa is about to expire<strong>,</strong></span> <span class='span'>it is important to begin the process of renewal one month in advance. <em>Do not forget to ask what options you have to apply for permanent residence.</em></span></p>
                      <p>&nbsp;                      </p>
                      <p><strong>We hope to see soon in  VETA! </strong></p>
                      <p>Suite 102, Level 1, 22 Market St. Sydney NSW 2000 <br />
                        Or Contact us at  <a href='tel:0292991458' value='+61292991458' target='_blank'>0292991458</a><br /> 
                        Or by e-mail <a href='mailto:admissions@australiaveta.com.au' target='_blank'> admissions@australiaveta.com.au</a> </p>
                      <p>&nbsp;</p>
					  <table width='100%' border='0' cellpadding='2' cellspacing='4' bordercolor='#9E9EB8'>
                        <tr>
                          <td bgcolor='#CC0000'><span style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #ffffff; font-weight: bold;'>NOTE</span></td>
                        </tr>
                        <tr>
                          <td bgcolor='#EFEFEF'><p>$visaExpNote</p></td>
                        </tr>
                    </table>
					  </td>
                    <td width='19'>&nbsp;</td>
                    <td width='128' align='left' valign='top'><table width='128' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td height='113' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/banner3-english.jpg' width='128' height='113' /></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td height='600' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/banner4-english.jpg' width='128' height='600' /></td>
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
<td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
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
              <a href='http://www.australiaveta.com.a' target='_blank'>www.australiaveta.com.a</a>u |  <a href='mailto:info@australiaveta.com.au'>info@australiaveta.com.au </a><br />
              Copyright © *|2012| VIVA Y ESTUDIE EN AUSTRALIA, Rights Reserved. <br />
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
//////////////////////////////////////////////////////////
?>
