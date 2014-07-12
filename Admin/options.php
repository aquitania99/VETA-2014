<?php
session_start();
//if(session_is_registered('login')){
if (isset($_SESSION['login'])) {
	?>
	<!DOCTYPE HTML>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="robots" content="none"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
	</head>

	<body>
	<form id="form1" name="form1" method="post" action="">
		<br/>
		<br/>
		<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
			<tr>
				<td valign="top">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
							                                 align="absmiddle"/></td>
							<td align="right" valign="middle"><a href="logout.php"><img src="images/logoutp.png"
							                                                            width="104" height="44"
							                                                            border="0"/></a></td>
						</tr>
						<tr>
							<td align="center" valign="middle"><h2>online VETA</h2></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="middle">
					<fieldset>
						<legend>OPTIONS</legend>

						<?php
						//echo "Getting value...".$_SESSION['login']."<br>";
						if (($_SESSION['login']) === "accountsVeta") {
							//echo "Accounts mode!! ".$_SESSION['login']."<br>";
							?>
							<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
								<tr>
									<td width="0" height="100" align="center" valign="middle">
										<a href="find-person.php"><img src="images/payments.png" alt="" width="69"
										                               height="87" border="0"
										                               align="absmiddle"/></a><br>
										<a href="paymentMod.php">Payments + Invoices </a>
									</td>
									<td width="0" height="100" align="center">
										<a href="mainAdmin.php"><img src="images/clients.png" width="69" height="87"
										                             border="0" align="absmiddle"/></a>
										<a href="modulo_newsletter.html"></a>
										<a href="mainAdmin.php"><br>
											Clients - Quotes</a>
									</td>
								</tr>
							</table>

						<?php
						}
						if (($_SESSION['login']) !== "accountsVeta" && ($_SESSION['login']) !== "superadmin" && ($_SESSION['login']) !== "vetadmin" && ($_SESSION['login']) !== "vetassistant") {
							//echo "No accounts? ".$_SESSION['login']."<br>";
							?>
							<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
								<tr>
									<td width="0" height="100" align="center">
										<a href="mainAdmin.php"><img src="images/clients.png" width="69" height="87"
										                             border="0" align="absmiddle"/><br>
										</a>
										<a href="modulo_newsletter.html"></a>
										<a href="mainAdmin.php">Clients - Quotes</a>
									</td>
									<td width="0" height="100" align="center">
										<a href="newsletter/visa_expiry.php"><img src="images/expiring.png" width="69"
										                                          height="87" border="0"
										                                          align="absmiddle"/></a><a
											href="menu.php"></a>
										<a href="modulo_classifieds.html"></a>
										<a href="menu.php">
                    <span id="result_box3" lang="en" xml:lang="en">
                    <span title="Online Marketing Tools"><br>
                    </span></span></a><a href="newsletter/visa_expiry.php">Email - Expiring Visas</a>
									</td>
								</tr>
							</table>

						<?php
						}
						if (($_SESSION['login']) === "superadmin" || ($_SESSION['login']) === "vetadmin" || ($_SESSION['login']) === "vetassistant") {
							//echo "No accounts? ".$_SESSION['login']."<br>";
							?>
							<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
								<tr>
									<td width="0" height="100" align="center">
										<a href="find-person.php">
											<img src="images/payments.png" alt="" width="69" height="87" border="0"
											     align="absmiddle"/></a>
										<br>
										<a href="find-person.php">Payments + Invoices </a>
									</td>
									<td width="0" height="100" align="center">
										<a href="mainAdmin.php">
											<img src="images/clients.png" width="69" height="87" border="0"
											     align="absmiddle"/>
										</a>
										<a href="modulo_newsletter.html"></a>
										<a href="mainAdmin.php"><br>
											Clients - Quotes</a>
									</td>
									<td width="0" height="100" align="center">
										<a href="newsletter/visa_expiry.php"><img src="images/expiring.png" width="69"
										                                          height="87" border="0"
										                                          align="absmiddle"/></a><a
											href="newsletter/visa_expiry.php"></a><a href="menu.php"></a>
										<a href="modulo_classifieds.html"></a>
										<a href="menu.php">
                    <span id="result_box3" lang="en" xml:lang="en">
                        <span title="Click for alternate translations"><br></span></span></a><a
											href="newsletter/visa_expiry.php">Email - Expiring Visas</a>
									</td>
									<td width="0" align="center"><a href="otherTasks.php"><img src="images/other.png"
									                                                           width="69"
									                                                           height="87"></a><br>
										<a href="paymentMod.php">Other Tasks</a><br></td>
								</tr>
							</table>
						<?php } ?>
					</fieldset>
				</td>
			</tr>
			<tr>
				<td align="center" valign="middle">&nbsp;</td>
			</tr>
		</table>
	</form>
	</body>
	</html>
<?php
} else {
	echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
}
?>