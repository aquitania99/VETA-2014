<?php
/////// Database Connection ///////
include("../Connections/connectionsVeta.php");
/////////////////////////////////////////////////////
$sent = $_POST['save'];
//echo "El boton magico....".$sent."<br />";
if (isset($sent)) {
///////// Contacts Details //////////
	mysql_select_db($database_veta, $vetaDB);
	$query_contactsInf = "SELECT firstName, lastName, custEmail, NOW() as Date FROM customervisarenewal";
	$contactsInf = mysql_query($query_contactsInf, $vetaDB) or die(mysql_error());
//$row_contactsInf = mysql_fetch_assoc($contactsInf);
	$row_contsInfCount = mysql_num_rows($contactsInf);
	$sent = 'The Newsletter is GONE!!!<br />';
	echo $sent . "<br /> Has gone to :" . $row_contsInfCount . "members!<br />";
	$newsContent = $_POST['elm1'];
////////////////////////////////////////////////////////////////////////////////////
	while ($row = mysql_fetch_assoc($contactsInf)) {
////////////////////////
		$emailtext = $row['custEmail'];
		$usrname = $row['firstName'];
		$lastname = $row['lastName'];
		$date = $row['Date'];
		//echo "Email Sent to: ".$usrname." ".$lastname." ".$emailtext."<br>";
////////////////////////////////////////////////////////////////////////////////////
//echo "Inside the while chunk of code.....!<br />";
////////////////////////
//echo "el Emilio...".$emailtext."<br />";
		//$emailtext = 'aquitania99@gmail.com';
		//$usrname = $row['name'];
		//$lastname = $row['last_name'];
		//echo "Email Sent to: ".$usrname." ".$lastname." ".$emailtext."<br>";
////////////////////////////////////////////////////////////////////////////////////
// Para enviar correo HTML, la cabecera Content-type debe definirse
		$sendTo = $emailtext;
		//$sendTo .= "aquitania99@gmail.com";
		$subject = "::: Australia Veta Test Newsletter :::";
		$headers = "From: info@australiaveta.com";
		$headers .= "<info@australiaveta.com>\r\n";
		//$headers .= "Reply-To: info@australiaveta.com";
		// Para enviar correo HTML, la cabecera Content-type debe definirse
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		//$mail->Password   = "pinkrose";            // SMTP server password
		$message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	<html xmlns='http://http://www.w3.org/1999/xhtml'>
	<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Australia Veta - Newsletter</title>
</head>
<body>
<table width='650px' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='200px'><a href='http://www.australiaveta.com'><img src='http://www.australiaveta.com/images/logo.gif' alt='Logo VETA' width='193' height='112' border='0' /></a></td>
    <td width='200px'><div align='center' style='font:arial; font-size:12px; color:#333;'>Dear $usrname $lastname<br />Welcome to <span style='color: #CC0000;'>VETA</span> Newsletter</div></td>
    <td width='200px'><img src='http://www.australiaveta.com/Admin/images/call.gif' alt='Call Us' width='211' height='49' border='0'/></td>
  </tr>
  <tr>
    <td colspan='3'>
	<img src='http://www.australiaveta.com/images/newsletter1.gif'/></td>
  </tr>
  <tr>
    <td colspan='3'>
	Sydney, NSW, Australia - $date <br />
    </td>
  </tr>
  <tr>
    <td  colspan='3'>$newsContent</td>
  </tr>
</table>
</body>
</html>";
////////////////////////////////////////////////
//echo "Newsletter sent to: ".$sendTo."<br />";
///
		mail($sendTo, $subject, $message, $headers);
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google-site-verification" content="apxkxPEENCX3ulsgrVHiN9rdPZfHU3zJMISU8HJw4dk"/>
	<link rel="shortcut icon" href="../images/favicon.ico">

	<title>Australia Veta - Newsletter Section</title>
	<!-- tinyMCE Editor Start -->
	<script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
			mode: "textareas",
			theme: "advanced",
			plugins: "spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

			// Theme options
			theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
			theme_advanced_toolbar_location: "top",
			theme_advanced_toolbar_align: "left",
			theme_advanced_statusbar_location: "bottom",
			theme_advanced_resizing: true,

			// Skin options
			skin: "o2k7",
			skin_variant: "silver",

			// Example content CSS (should be your site CSS)
			content_css: "css/example.css",

			// Drop lists for link/image/media/template dialogs
			template_external_list_url: "js/template_list.js",
			external_link_list_url: "js/link_list.js",
			external_image_list_url: "js/image_list.js",
			media_external_list_url: "js/media_list.js",

			// Replace values for the template plugin
			template_replace_values: {
				username: "Some User",
				staffid: "991234"
			}
		});
	</script>

	<!-- tinyMCE Editor Finish -->
	<!-- Upload Image Start -->
	<script type="text/javascript">
		var GB_ROOT_DIR = "../GreyBox_v5_54/greybox/";
	</script>
	<script type="text/javascript" src="../GreyBox_v5_54/greybox/AJS.js"></script>
	<script type="text/javascript" src="../GreyBox_v5_54/greybox/AJS_fx.js"></script>
	<script type="text/javascript" src="../GreyBox_v5_54/greybox/gb_scripts.js"></script>
	<link href="../GreyBox_v5_54/greybox/gb_styles.css" rel="stylesheet" type="text/css"/>
	<!-- Upload Image End -->
	<style type="text/css">
		<!--
		.Estilo5 {
			color: #00CC00
		}

		-->
	</style>
	<!-- Upload Image End -->

	<link href="../style.css" rel="stylesheet" type="text/css"/>
	<style type="text/css">
		<!--
		body {
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
			background-color: #94A9D4;
		}

		.style1 {
			color: #CC0000
		}

		.style3 {
			color: #1F1D5D
		}

		.style4 {
			color: #8CA3D1
		}

		.style5 {
			color: #000000
		}

		-->
	</style>

	<style type="text/css">
		<!--
		.ref {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			color: #333333;
			text-decoration: none;
			border-top-width: 1px;
			border-right-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: solid;
			border-left-style: none;
			border-top-color: #FFFFFF;
			border-right-color: #FFFFFF;
			border-bottom-color: #FFFFFF;
			border-left-color: #FFFFFF;
		}

		.style14 {
			color: #FF17A5
		}

		.style15 {
			color: #CCCCCC
		}

		.val {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			color: #F91FA1;
			text-decoration: none;
			border-top-width: 1px;
			border-right-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: solid;
			border-left-style: none;
			border-top-color: #FFFFFF;
			border-right-color: #FFFFFF;
			border-bottom-color: #FFFFFF;
			border-left-color: #FFFFFF;
		}

		-->
	</style>

</head>

<body>
<div id="box-2">
	<div id="bgi-2">
		<div id="centroNewsletter">
			<div id="call-2">
				<img src="images/call.gif" alt="Call" width="211" height="49" border="0"/></div>
			<div id="logo-2">
				<a href="../index.php"><img src="../images/logo.gif" alt="Logo VETA" width="193" height="112"
				                            border="0"/></a></div>
			<div id="boxinter-2">

				<br/>
				<table width="97%" align="center" cellpadding="5" cellspacing="0">
					<tr>
						<td class="ttitupun">
							<div align="center">Dear <?php if ($name = "") {
									echo "- User Name Goes Here -";
								} else {
									echo $name . " ";
								} ?> Welcome to <span class="style1">VETA</span> Newsletter
							</div>
						</td>
					</tr>
					<tr>
						<td align="left" valign="top">

						</td>
					</tr>
					<tr>
						<td>
							<table width="90%" border="0" align="center" cellpadding="0" cellspacing="9">
								<tr>
									<td valign="top">
										<form method="post" action="" class="texsuper style5">
											<textarea name="elm1" cols="60" rows="15" class="BodyText" id="elm1"
											          style="texsuper style5">

											</textarea>
											<br/>
											<br/>
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td width="33%">
														<div align="left">
															<input name="save" id="Submit" type="submit" class="boton"
															       value="Submit"/>
														</div>
													</td>
													<td width="33%">&nbsp;</td>
													<td width="33%">
														<div align="right">
															<input name="reset" type="reset" class="boton"
															       value="Reset"/>
														</div>
													</td>
												</tr>
											</table>
											<br/>
										</form>
									</td>
								</tr>


							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>

	</div>
</div>
</body>
</html>
