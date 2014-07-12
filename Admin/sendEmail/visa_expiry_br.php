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
	$mail->FromName 	= "VETA - Seu Visto está para vencer ";
	$mail->IsHTML(true); // send as HTML
	$messageHtml = "<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Seu Visto está por vencer</title>
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

<body style='    font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333;' bgcolor='#FFF'>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
  <tr>
    <td align='center' valign='top' bgcolor='#E5E0D9'><table width='600' border='0' cellpadding='0' cellspacing='0'>
      <tr>
        <td align='left' valign='top' bgcolor='#FFFFFF'><table width='600' border='0' cellpadding='0' cellspacing='0'>
          <tr>
            <td height='30' align='center' valign='middle' bgcolor='#EB0310'><h2 style='font-family: Arial, sans-serif; color: #ffffff; margin: 0px; font-size: 16px; font-weight: normal;'>Olá!, $pieces[1]</h2></td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='560' border='0' cellpadding='0' cellspacing='0'>
              <tr>
                <td height='130' align='left' valign='top'><table width='100%' border='0' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td width='63%' height='130' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/logo-viva-estudie-y-trabaje-en-australia.gif' width='197' height='117' /></td>
                    <td width='37%' align='right' valign='middle'><table width='200' border='0' cellpadding='0' cellspacing='0'>
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
                    <td width='63%' valign='top'><h1 style='font-family: Arial, sans-serif; color: #333333; margin: 0px; font-size: 35px; font-weight: normal;'>Seu VISTO esta
<br />
                      EXPIRANDO</h1>
                      <p>De acordo com a informa&ccedil;ao que nos passou,<strong> sabemos que seu visto est&aacute; para vencer.</strong><br />
Desta forma, queremos oferecer nossos servi&ccedil;os para o processo de  renova&ccedil;&atilde;o do seu visto.<br />
<strong>Estas  sao algumas das raz&otilde;es para você renovar a VETA:</strong><br />
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
                    <td width='410' align='left' valign='top'><h3 style='font-family: Arial, sans-serif; color: #333333; margin: 0px; font-size: 25px; font-weight: normal; text-align: left;'>SEMPRE  PERGUNTE PELA PROMO&Ccedil;&Atilde;O DO MES! </h3>
                      <ol>
                        <li>Assessoria e aplica&ccedil;&atilde;o totalmente gr&aacute;tis.<br />
                          <br />
                        </li>
                        <li>Recebera uma completa assessoria em rela&ccedil;&atilde;o as escolas e preços que se ajustem ao seu orçamento.<br />
                          <br />
                        </li>
                        <li>Se voce já tem um &quot;sponsor&quot; e esta pensando em aplicar para um &quot;sponsor-visa&quot;, nosso pessoal de imigra&ccedil;&atilde;o podem te ajudar neste processo.<br />
                          <br />
                        </li>
                        <li>Utilize nossos serviços da BOLSA DE EMPREGOS e tenha em considera&ccedil;&atilde;o que n&atilde;o é necessário que sua profissao esteja homologada na Austrália para aproveitar esta oportunidade. <br />
                          <br />
                        </li>
                        <li>Com a VETA, você pode conseguir BOLSAS com universidades facilmente.</li>
                      </ol>
                      <h6 style='font-weight: normal; margin: 0px; color: #403B62; border-top-width: 1px; border-top-style: dotted; border-top-color: #CCCCCC; font-size: 12px;'align='center'>
					  <strong>
					  <br /><br />
                        RENOVE SEU VISTO COM A VETA E RECEBA UMA MEM&Oacute;RIA USB 4 GB
					  </strong>
					  <br /><br />
					  </h6>
                      <p align='center'>&nbsp;</p>
                      <p><span class='span'><strong>LEMBRE-SE </strong> que seu visto esta quase vencendo. &Eacute; importante que iniciemos o processo de renova&ccedil;&atilde;o com um mes de antecedencia. <em>Nao esque&ccedil;a de perguntar as op&ccedil;oes para aplicar para uma residencia permanente.</em></span></p>
                      <p>&nbsp;</p>
                      <p><strong>Esperamos te ver logo na VETA!</strong></p>
                      <p>Office 102, Level 1, 22 Market St. Sydney NSW 2000 <br />
                        Ou contate-nos <a href='tel:0292991458' value='+61292991458' target='_blank'>0292991458</a><br /> 
                        ou envie-nos um email a :<a href='mailto:admissions@australiaveta.com.au' target='_blank'> admissions@australiaveta.com.au</a> </p>
						<table width='100%' border='0' cellpadding='2' cellspacing='4' bordercolor='#9E9EB8'>
                        <tr>
                          <td bgcolor='#CC0000'><span style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #ffffff; font-weight: bold;'>NOTA / NOTICE</span></td>
                        </tr>
                        <tr>
                          <td bgcolor='#EFEFEF'><p>$visaExpNote</p></td>
                        </tr>
                    </table>
					<p>&nbsp;</p>
						</td>
                    <td width='19'>&nbsp;</td>
                    <td width='128' align='left' valign='top'><table width='128' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td height='113' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/banner3-portu.jpg' width='128' height='105' /></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td height='600' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/banner4-portu.jpg' width='128' height='600' /></td>
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
