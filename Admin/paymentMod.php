<?php
session_start();
if (isset($_SESSION['login'])) {
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			<!--
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}

			-->
		</style>
	</head>

	<body>
	<form id="form1" name="form1" method="post" action="">
		<br/>
		<br/>
		<table width="700" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
			<tr>
				<td valign="top">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
							                                 align="absmiddle"/></td>
							<td align="right" valign="middle"><a href="options.php"><img
										src="newsletter/images/back.png" border="0"/></a><a href="logout.php"><img
										src="images/logoutp.png" width="104" height="44" border="0"/></a></td>
						</tr>
						<tr>
							<td align="center" valign="middle"><h2>PAYMENTS + INVOICES MODULE</h2></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="middle">
					<fieldset>
						<legend><span class="style17">Clients Database</span></legend>
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
							<tr>
								<td width="0" height="100">
									<div>
										<table width="100%" border="0" cellspacing="4" cellpadding="4">

											<tr>
												<?php if ($_SESSION['login'] == 'superadmin' || $_SESSION['login'] == 'vetadmin') { ?>
													<!--
													  <td>
														<div align="center">
															<a href='upload-csv.php' style="font-size:.95em;"><img src="images/update1.jpg" alt="" width="78" height="84" border="0" /><br />
														  <br />
															Upload Clients .csv file</a>
														</div>
													</td>
													-->
													<td>
														<div align="center">
															<a href='xlsDownload.php' style="font-size:.95em;"><img
																	src="images/Export-Excel.jpg" width="78" height="84"
																	border="0"/><br/>
																<br/>
																Download Clients DB to Excel</a>
														</div>
													</td>
												<?php } ?>
												<td>
													<div align="center">
														<a href='accounts-1Test.php' style="font-size:.95em;"><img
																src="images/Search.jpg" width="78" height="84"
																border="0"/><br/>
															<br/>
															Search Client</a>
													</div>
												</td>
												<td>
													<div align="center"><a href='accounts-insert-TEST.php'
													                       style="font-size:.95em;"><img
																src="images/Upload.jpg" width="78" height="84"
																border="0"/><br/>
															<br/>
															Insert New Client</a></div>
												</td>
												<td>
													<div align="center"><a href='accounts-update-Test.php'
													                       style="font-size:.95em;"><img
																src="images/UPDATE.jpg" width="78" height="84"
																border="0"/><br/>
															<br/>
															Update/Modify Client</a></div>
												</td>
												<td>
													<div align="center" style="visibility:visible;"><a
															href='delete-account.php' style="font-size:.95em;"><img
																src="images/Delete.jpg" width="78" height="84"
																border="0"/><br/>
															<br/>
															Delete Client</a></div>
												</td>
											</tr>
										</table>

									</div>
								</td>
							</tr>
						</table>
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
							<tr>
								<td width="0" height="100">
									<div>
										<?php if ($_SESSION['login'] == 'superadmin' || $_SESSION['login'] == 'vetadmin' || $_SESSION['login'] == 'vetassistant') { ?>
											<table width="100%" border="0" cellspacing="4" cellpadding="4">
												<tr>
													<!--
												  <td>
													<div align="center">
														<a href='upload-csv.php' style="font-size:.95em;"><img src="images/update1.jpg" alt="" width="78" height="84" border="0" /><br />
													  <br />
														Upload Clients .csv file</a>
													</div>
												</td>
												-->
													<td>
														<div align="center"><a href='eduProvider.php'
														                       style="font-size:.95em;"><img
																	src="images/Upload.jpg" alt="" width="78"
																	height="84" border="0"/><br/>
																<br/>
																Add New Education Provider</a></div>
													</td>
													<td>
														<div align="center" style="visibility:hidden;"><a
																href='accounts-1Test.php' style="font-size:.95em;"><img
																	src="images/Search.jpg" alt="" width="78"
																	height="84" border="0"/><br/>
																<br/>
																Search Client</a></div>
													</td>
													<td>
														<div align="center" style="visibility:hidden;"><a
																href='accounts-insert-TEST.php'
																style="font-size:.95em;"><img src="images/Upload.jpg"
														                                      alt="" width="78"
														                                      height="84"
														                                      border="0"/><br/>
																<br/>
																Insert New Client</a></div>
													</td>
													<td>
														<div align="center" style="visibility:hidden;"><a
																href='accounts-update-Test.php'
																style="font-size:.95em;"><img src="images/UPDATE.jpg"
														                                      alt="" width="78"
														                                      height="84"
														                                      border="0"/><br/>
																<br/>
																Update/Modify Client</a></div>
													</td>
													<td>
														<div align="center" style="visibility:hidden;"><a
																href='delete-account.php' style="font-size:.95em;"><img
																	src="images/Delete.jpg" alt="" width="78"
																	height="84" border="0"/><br/>
																<br/>
																Delete Client</a></div>
													</td>
												</tr>
											</table>
										<?php } ?>
									</div>
								</td>
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
}
//else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>