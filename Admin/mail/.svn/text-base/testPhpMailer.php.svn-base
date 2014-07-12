<?php 
require('class.phpmailer.php');

$mail = new phpmailer();
$mail->IsSMTP();                           // tell the class to use SMTP
	//$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 25;                    // set the SMTP server port
	$mail->Host       = "mail.greenlightmemorabilia.com"; // SMTP server
	$mail->Username   = "info@greenlightmemorabilia.com";     // SMTP server username
	//$mail->Password   = "pinkrose";            // SMTP server password
	$mail->Mailer = "Mail";  // tell the class to use Sendmail
	$mail->From     = "info@greenlightmemorabilia.com";
	$mail->FromName = "greenlight memorabilia newsletter";
    // html body
    $body  = "<strong>FUUUUUCCCCKKKKIIIIIINNNNGGGGGGG SSSHHHHHHHIIIIIITTTTT!!!!!!!!!!!!</strong>";
    echo $body."<br>";
    // plain text body (for mail clients that cannot read html)
    $text_body  = "HOLA CAREBOLA\n\n";
/*
	$text_body  = "dear $admin $admin_lastname welcome /n/n
    greenlight memorabilia manufactures and distributes premium quality film, television and celebrity products /n
    for the many thousands of fans and collectors worldwide. 
	/n/n
	www.greenlightmemorabilia.com
	date:  $date   edition:  $voledit /n/n/n/n 
	 $title /n  
	 $detail /n/n/n 
	 $title2 /n 
	 $detai2 /n/n/n 
	 $title3 /n 
	 $detai3 /n/n/n  
	 $title4 /n 
	 $detai4 /n/n/n ";
*/
    $mail->Body    = $text_body;
    $mail->AltBody = $body;
    $mail->AddAddress('webmaster@greenlightpopculture.com');
    //$mail->addstringattachment($row['apellidopaterno'], 'yourphoto.jpg');
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
	echo "Mensaje enviado correctamente";
   } 

    // clear all addresses and attachments for next loop
    $mail->clearaddresses();
    //$mail->clearattachments();

?>
