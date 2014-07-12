<?
session_start();
if (session_is_registered('login')) {
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Menu :: Online Marketing VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			.item {
				color: #CC0000;
				font-size: 14px;
				font-weight: bold;
				text-decoration: none;
				/*text-transform:uppercase;*/
			}

			.sub-classified {
				font-size: .8em;
				font-weight: normal;
				color: #363636;

			}

			.sub-classified a {
				text-decoration: underline;
				cursor: pointer;
			}

			.sub-classified a:hover {
				color: #0055BB;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
	<form id="form1" name="form1" method="post" action="">
		<br/>
		<br/>
		<table width="700" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="211" rowspan="2"><img src="newsletter/images/logomodulo.gif" width="194"
							                                 height="106" align="absmiddle"/></td>
							<td align="right" valign="middle"><a href="options.php"><img
										src="newsletter/images/back.png" border="0"/></a><a href="logout.php"><img
										src="newsletter/images/logoutp.png" width="104" height="44" border="0"/></a>
							</td>
						</tr>
						<tr>
							<td align="center" valign="middle"><h2><span
										title="Click for alternate translations">online</span> marketing </h2></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="middle">
					<fieldset>
						<legend>MENU</legend>
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
							<tr>
								<td width="0" valign="top">
									<div align="left"><img src="newsletter/images/m1.png" width="69" height="87"
									                       border="0" alt=""/>
										<br/>
										<br/>
									</div>
									<div align="left"><font class="item">NEWSLETTER</font> <br/>
										<br/>
									</div>
									<div>
										<a class="sub-classified" href="newsletter/create_newsletter.php">New Newsletter
											Email</a>
										<br/>
										<br/>
										<a class="sub-classified" href="prev-newsletter-list.php">View Previously
											Created</a>
									</div>
								</td>
								<td width="0" valign="top">
									<div align="left"><img src="newsletter/images/m2.png" width="69" height="87"
									                       border="0" alt=""/><br/>
										<br/>
									</div>
									<font class="item">CLASSIFIEDS</font><br/>
									<br/>

									<div>
										<div align="left"><a class="sub-classified"
										                     href="newsletter/create-classifieds.php">New Classifieds
												Email</a><br/>
											<br/>
											<a class="sub-classified" href="prev-classifieds-list.php">View Previously
												Created</a>
										</div>
									</div>
								</td>
								<td width="0" valign="top">

									<div align="left">
										<!-- <a href="newsletter/create-Seminar.php"> -->
										<img src="newsletter/images/m3.png" width="69" height="87" border="0"
										     align="absmiddle"/><br/>
										<br/>
									</div>
									<font class="item">INVITATIONS</font>
									<br/>
									<br/>

									<div>
										<div align="left"><a class="sub-classified"
										                     href="newsletter/create-Seminar.php">New Invitation
												Email</a>
											<br/>
											<br/>
											<a class="sub-classified" href="prev-invitation-list.php">View Previously
												Created</a>
										</div>
									</div>
								</td>
								<td width="0" valign="top">
									<div align="left"><a href="newsletter/visa_expiry.php"><img
												src="newsletter/images/m4.png" width="69" height="87" border="0"
												align="absmiddle"/></a><a href="newsletter/visa_expiry.php"><br/>
											<br/>
										</a></div>
									<a href="newsletter/visa_expiry.php">Expiring Visas</a></td>
							</tr>
						</table>
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
} else echo "<h1>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!</h1><br />";
?>