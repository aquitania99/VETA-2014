<?php
session_start();
if (isset($_SESSION['login'])) {
//if(session_is_registered('login')){
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
		      rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			<!--
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}

			.i {
				font-size: 42px;
				font-weight: normal;
				color: #CCC;
			}

			.borde {
				border: 1px solid #CCC;
			}

			-->
		</style>
	</head>

	<body>
	<form id="form1" name="form1" method="post" action="">
		<br/>
		<br/>
		<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
			<tr>
				<td valign="top" bgcolor="#FFFFFF">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
							                                 align="absmiddle"/></td>
							<td align="right" valign="middle"><a href="options.php"><img
										src="newsletter/images/back.png" border="0"/></a><a href="logout.php"><img
										src="images/logoutp.png" width="104" height="44" border="0"/></a></td>
						</tr>
						<tr>
							<td align="center" valign="middle"><h2>CLIENTS - QUOTES</h2></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="middle" bgcolor="#FFFFFF">
					<fieldset>
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
							<tr>
								<td width="0" height="100">
									<div>
										<table width="100%" border="0" cellspacing="4" cellpadding="4">
											<tr>
												<td colspan="2">
													<div align="center">
														<a href='find-person.php?qt=1' style="font-size:1.1em;">
															<i class="i icon-search"></i>
															<br/>
															Search Client
														</a>
													</div>
												</td>
												<td colspan="2">
													<div align="center">
														<a href='insert-form.php' style="font-size:1.1em;">
															<i class="i icon-plus-sign"></i>
															<br/>
															Insert New Client
														</a>
													</div>
												</td>
												<!--
												  <td>
													<div align="center">
													  <a href='update-form.php' style="font-size:1.1em;">
														<i class="i icon-user"></i>
														  <br />
															Update/Modify Client
													  </a>
													</div>
												  </td>
												  <td>
													<div align="center">
													  <a href='delete-form.php' style="font-size:1.1em;">
														<i class="i icon-remove-circle"></i>
														  <br />
														  Delete Client
													  </a>
													</div>
												  </td>
												-->
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table>
					</fieldset>
				</td>
			</tr>
			<tr>
				<td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
			</tr>
		</table>
	</form>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>