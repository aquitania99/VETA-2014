<?php	
/////// Database Connection ///////
include("Connections/config.inc.php");
include("Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
////////////// Send Email ///////////////
	$name = $_POST['fullName'];
	$splitdata = explode(' ', $name);
	//echo "$splitdata[0], $splitdata[1]";
	$name = strtolower($splitdata[0]);
	//
	$lastName = strtolower($splitdata[1]);
	//
	$email = strtolower($_POST['email']);	
	//
	$enquiry = $_POST["enquiry"];	
	//
	if ($getDetails = 'on')
	{
		$getDetails = 'yes';
	}
////////////////////////////	
	$send = $_POST['sendbutton'];	
/////////////// Insert Data to Contact Form Table in the Database ///////////////
if (isset ($send)){
//echo "<br \>Email Bottom Input Text....".$email_me."<br />";	
//echo "<br \>Email Top Input Text....".$email."<br />";	
//////////////////////////////////////////////////////////
// Insert DB
	$insertQry = $db->dbQuery("INSERT INTO firstcontact
	(contactID, fname, lname, email, enquiry, wantsMoreInfo, dateAdded)
	VALUES ('','$name','$lastName','$email', '$enquiry','', NOW())");				
		//echo "<br />The email-me address where the message goes...".$email."<br />";
//////////////////////////////////////////////////////////		
	
require_once('inc/class.phpmailer.php');				
//////////////////////////////////////////////////////////
	//$emailtext = $email;
	$emailtext = "smedina@sevenstudio.com.au";
	$mail = new phpmailer();
	$mail->IsSMTP();                             // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       	= 587;                    // set the SMTP server port
	$mail->Host       	= "smtp.gmail.com"; // SMTP server
	$mail->Username   	= "info@sevenstudio.com.au"; // SMTP server username
	$mail->Password     = "@!nf0+2011";            // SMTP server password
	$mail->Mailer 	 = "Mail";  // tell the class to use Sendmail
	$mail->AddReplyTo('info@sevenstudio.com.au', 'Contact Form 7 Studio');
  	$mail->SetFrom('info@sevenstudio.com.au', 'Contact Form 7 Studio');
  	$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
	$mail->IsHTML(true); // send as HTML
	$messageHtml = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Seven Studio Contact Form</title>
</head>

<body>
<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tr style='color:#666; font-family:Arial;'>
		<td>Full Name</td>
		<td>$name $lastName</td>
	</tr>
	<tr style='color:#666; font-family:Arial;'>
		<td>Email</td>
		<td>$email</td>
	</tr>
	<tr style='color:#666; font-family:Arial;'>
		<td colspan=2>Full Name</td>
	</tr>
	<tr style='color:#666; font-family:Arial;'>
		<td colspan=2 style='display:block;'><br />$enquiry</td>
</table>
</body>
</html>";
////////////////////////////////////////////////
    $mail->Subject = "Someone wants to contact you";
    $mail->Body    = $messageHtml;
    //$mail->AltBody = $messageText;
    $mail->AddAddress($emailtext);
	//se envia el mensaje, si no ha habido problemas 
	//la variable $exito tendra el valor true
	$exit = $mail->Send();
  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho 
  //para intentar enviar el mensaje, cada intento se hara 5 segundos despues 
  //del anterior, para ello se usa la funcion sleep
  $tries=1; 
  while ((!$exit) && ($tries < 5)) {
	sleep(5);
     	//echo $mail->ErrorInfo;
     	$exit = $mail->Send();
     	$tries=$tries+1;
 
   }
   if(!$exit)
   {
	echo "There's a problem sending the email ".$valor;
	echo "<br/>".$mail->ErrorInfo;
   }
    // clear all addresses and attachments for next loop
    $mail->clearaddresses();
    //$mail->clearattachments();

//echo "The Contact Form has been Sent to: ".count($sendTo)."!! Inside...<br />";
//////////////////////////////////////////////////////////			
//header('Location: thank-you.html');	
?>
<script type="text/javascript">
<!--
/*window.location = "http://www.bigbookofdeals.com.au/thank-you.php"*/
alert('Thank you for being in contact!! We will get back to you as soon as possible!');
//-->
</script>
<?php 
}
?>