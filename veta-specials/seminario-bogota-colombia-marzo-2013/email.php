<?php 
require_once('class.phpmailer.php');
//Thursday 12th of May 2011
//echo "The emails?".$pieces[0]."<br />";
//$date = date('l dS \of F Y');
//May, 12 / 2011
$sendDate = date('F \,d \/ Y');
//////////////////////////////////////////////////////////
	$emailtext = $email;
	//$emailtext = $clientEmail;
	$mail = new phpmailer();
	$mail->IsSMTP();                             // tell the class to use SMTP
	//$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       	= 25;                    // set the SMTP server port
	$mail->Host       	= "admissions@australiaveta.com.au"; // SMTP server
	$mail->Username   	= "admissions@australiaveta.com.au"; // SMTP server username
	//$mail->Password   = "password";            // SMTP server password
	$mail->Mailer 	 = "Mail";  // tell the class to use Sendmail
	$mail->From     	= "admissions@australiaveta.com.au";
	$mail->FromName 	= "Seminarios - VETA";
	$mail->IsHTML(true); // send as HTML
	$messageHtml = "<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
</head>
<body style='    font-family: Arial, Helvetica, sans-serif; font-size: 12px; bgcolor='#FFF'>
<div>
			<div>
			<table width='800' border='0' align='center' cellpadding='0' cellspacing='0'>
			    <tr>
	            	<td height='25' align='center' valign='middle' >Problemas para visualizar el email?
						<a href='http://www.australiaveta.com.au/veta-specials/seminario-bogota-colombia-marzo-2013/online.html'> abrelo en tu navegador</a>.
					</td>
       			</tr>
			</table>        
			<table width='800' border='0' align='center' cellpadding='0' cellspacing='0' style='border: 1px solid #CCC;'>
			    <tr>
			      <td valign='top'><table width='781' cellspacing='10'>
			        <tr>
			          <td valign='top'>
			          <img src='http://www.australiaveta.com.au/veta-specials/seminario-bogota-colombia-marzo-2013/images/cover-face-0010.gif' width='769' height='294' alt='Primer Seminario Viva, Estudie y Trabaje en Australia - Marzo 2013 - Bogota, Colombia'>
			          </td>
			          </tr>
			        <tr>
			          <td width='757' valign='top'><table width='100%' border='0' cellpadding='10' cellspacing='0'>
			            <tr>
			              	<td height='140' align='center' valign='top' bgcolor='#B4A594'>
			              		<h1 style='font-size: 54px; color: #FFFFFF; font-weight: normal; margin: 0px;'>
			              			GRACIAS POR REGISTRARTE!
		              			</h1>
	              			</td>
			              </tr>
			            <tr>
			              <td align='center' valign='top'><table width='100%' border='0' cellpadding='5' cellspacing='0'>
			                <tr>
			                  <td height='25' align='left' valign='top'><p>Evento: <strong>Primer Seminario Visas Australia - Bogotá, Colombia</strong></p>
			                    <p>Lugar: <strong>Apart  Hotel Lancaster House Autopista Norte No 106B-28<br>
			                      </strong><br>
			                      Día: <strong>02  Marzo 2013</strong><br>
			                      <br>
			                      Hora: <strong>11:00  am</strong><br>
			                      <br>
		                        Tema: <strong>Las mejores  opciones y oportunidades para Vivir, Trabajar y Estudiar en Australia.</strong></p>
			                    <p><strong>Teléfonos: </strong>Rosabel Cruz : 3005792688 y Patricia Florez: 3202912808<br>
			                      <br>
		                        <h5 style='font-size: 20px; color: #CC0001; font-weight: normal; margin: 0px;'>&quot;Adquiere la información correcta en el momento correcto y mira como tus sueños se hacen realidad&quot;</h5>
		                        </p>
<p>&nbsp;</p></td>
		                    </tr>
			                <tr>
			                  <td height='25' align='left' valign='middle'>
			                  	<h4 style='font-size: 25px; color: #333; font-weight: bold; margin: 0px;'>Te esperamos all<strong>á</strong>!.<br>
			                  	  <br>
                                </h4></td>
			                  </tr>
			                <tr>
			                  <td height='25' align='left' valign='middle'>
			                  	<h5 style='font-size: 25px; color: #CC0001; font-weight: normal; margin: 0px;'>Cuentale a tus amigos y familiares acerca de esta gran oportunidad!</h5></td>
			                  </tr>
			                <tr>
			                  <td height='74' align='left' valign='middle'>
			                  	<h6 style='font-size: 18px; color: #1F1D5E; font-weight: normal; margin: 0px;'>Visitanos en:       <br>
			                    <a href='http://www.australiaveta.com.au/' target='_new' style='font-size: 16px; font-weight: normal; color: #1F1D5E;'>www.australiaveta.com.au </a><br>
			                    <br>
			                    Siguenos en: <br>
			                    <a href='https://www.facebook.com/australiaveta' target='_new' style='font-size: 16px; font-weight: normal; color: #1F1D5E;'>www.facebook.com/australiaveta </a><br>
			                    <a href='www.youtube.com/user/VETAEDUCATION' target='_new' style='font-size: 16px; font-weight: normal; color: #1F1D5E;'>www.youtube.com/user/VETAEDUCATION</a></h6></td>
			                  </tr>
			                <tr>
			                  <td>
			                    <div class='fb-like' data-href='http://www.australiaveta.com.au/veta-specials/campaign-iPad-SurfBoard/spanish/index.php' data-send='false' data-width='450' data-show-faces='false' data-action='recommend' data-font='arial'></div>
			                    </td>
			                  </tr>   
			                </table></td>
			            </tr>
			            </table></td>
			        </tr>
			      </table></td>
			    </tr>
			    <tr>
			      <td height='50' valign='middle' bgcolor='#1F1D5D' >
			      	<table width='95%' align='center'>
				        <tr>
				          <td width='61%' height='25' align='left' valign='middle'>
				          	<h3 style='font-size: 11px; color: #FFF; margin: 0px; font-weight: normal;'>
				          		Web Design by <a href='http://www.sevenstudio.com.au/' target='_blank' style='color:#FFFFFF;'>Seven Studio</a></h3></td>
				          <td width='9%' height='25' align='center' valign='middle' class='bordeCopy'><a style='color:#FFFFFF;' href='index.php'>Home</a></td>
				          <td width='20%' height='25' align='center' valign='middle' class='bordeCopy'><a style='color:#FFFFFF;' href='terms-and-conditions.html'>Terms &amp; Conditions</a></td>
				          <td width='10%' height='25' align='center' valign='middle'><a style='color:#FFFFFF;' href='http://www.australiaveta.com.au/espanol/contactenos.php' target='_blank'>Contact</a></td>
				        </tr>
			      	</table>
			      </td>
			    </tr>
			  </table>
			</div>	
		</div>
</body>
</html>";
////////////////////////////////////////////////
    $mail->Subject = "Primer Seminario Viva, Estudie y Trabaje en Australia";
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
