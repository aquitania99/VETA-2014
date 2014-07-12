<?php
//initialize the session
if (!isset($_SESSION)) {
	session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF'] . "?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")) {
	$logoutAction .= "&" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) && ($_GET['doLogout'] == "true")) {
	//to fully log out a visitor we need to clear the session varialbles
	$_SESSION['MM_Username'] = NULL;
	$_SESSION['MM_UserGroup'] = NULL;
	$_SESSION['PrevUrl'] = NULL;
	unset($_SESSION['MM_Username']);
	unset($_SESSION['MM_UserGroup']);
	unset($_SESSION['PrevUrl']);

	$logoutGoTo = "index.php";
	if ($logoutGoTo) {
		header("Location: $logoutGoTo");
		exit;
	}
}
?>
<?php
if (!isset($_SESSION)) {
	session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup)
{
	// For security, start by assuming the visitor is NOT authorized.
	$isValid = False;

	// When a visitor has logged into this site, the Session variable MM_Username set equal to their username.
	// Therefore, we know that a user is NOT logged in if that Session variable is blank.
	if (!empty($UserName)) {
		// Besides being logged in, you may restrict access to only certain users based on an ID established when they login.
		// Parse the strings into arrays.
		$arrUsers = Explode(",", $strUsers);
		$arrGroups = Explode(",", $strGroups);
		if (in_array($UserName, $arrUsers)) {
			$isValid = true;
		}
		// Or, you may restrict access to only certain users based on their username.
		if (in_array($UserGroup, $arrGroups)) {
			$isValid = true;
		}
		if (($strUsers == "") && true) {
			$isValid = true;
		}
	}
	return $isValid;
}

$MM_restrictGoTo = "../index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("", $MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {
	$MM_qsChar = "?";
	$MM_referrer = $_SERVER['PHP_SELF'];
	if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
	if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0)
		$MM_referrer .= "?" . $QUERY_STRING;
	$MM_restrictGoTo = $MM_restrictGoTo . $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
	header("Location: " . $MM_restrictGoTo);
	exit;
}
?>
<?php
require_once('../Connections/greenlight.php');
//////////////////////////////////////////////////////
mysql_select_db($database_greenlight, $greenlight);
$Contacts = "select count(1) from contacts";
$contactsSQL = mysql_query($Contacts, $greenlight) or die(mysql_error());
$row_contacts = mysql_fetch_array($contactsSQL);
$totalRows_contacts = mysql_num_rows($contactsSQL);
//////////////////////////////////////////////////////
mysql_select_db($database_greenlight, $greenlight);
$Usage = "select c.name, c.last_name, c.email, c.dataAdded, mu.mu_logins, mu.mu_date 
from contacts c, members_usage mu where c.id = mu.mu_id order by mu.mu_date desc";
$usageSQL = mysql_query($Usage, $greenlight) or die(mysql_error());
$row_usage = mysql_fetch_assoc($usageSQL);
$totalRows_usage = mysql_num_rows($usageSQL);
//////////////////////////////////////////////////////
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.gif">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Greenlight Memorabilia</title>
		<style type="text/css">
			<!--
			body {
				margin-left: 0px;
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 0px;
			}

			-->
		</style>
		<link href="../style.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			<!--
			.titles {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 11px;
				font-weight: bold;
				color: #000000;
			}

			.BottomText1 {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 10px;
				color: #666666;
				text-align: center;
				vertical-align: middle;
			}

			.LittleUpLineBkgnd {
				background-image: url(../images/UpShadow.gif);
				background-repeat: repeat-x;
				background-position: center top;
			}

			.SquareLines {
				background-color: #FFFFFF;
				border: 1px solid #999999;
			}

			.DownLine {
				border-bottom-width: 1px;
				border-bottom-style: solid;
				border-bottom-color: #666666;
			}

			.style6 {
				color: #999999
			}

			.style7 {
				color: #333333
			}

			.style8 {
				color: #4D4D4D
			}

			.style9 {
				color: #99CC00
			}

			-->
			.LV_validation_message {
				font-weight: bold;
				margin: 0 0 0 5px;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 9px;
				font-style: inherit;
			}

			.LV_valid {
				color: #00CC00;
			}

			.LV_invalid {
				color: #CC0000;
			}

			.LV_valid_field,
			input.LV_valid_field:hover,
			input.LV_valid_field:active,
			textarea.LV_valid_field:hover,
			textarea.LV_valid_field:active {
				border: 1px solid #00CC00;
			}

			.LV_invalid_field,
			input.LV_invalid_field:hover,
			input.LV_invalid_field:active,
			textarea.LV_invalid_field:hover,
			textarea.LV_invalid_field:active {
				border: 1px solid #CC0000;
			}
		</style>
		<!-- yahoo user interface css
			  (reset - resets all defaults to be pretty much identical cross browser)
			  (fonts - standardises default fonts styles crosss browser)
			  (grids - provides cross browser positional styles for creating layouts)
			  see http://developer.yahoo.com/yui/grids/ -->
		<link rel="stylesheet" type="text/css" href="../JavaScripts/ValidationForms/reset-fonts-grids.css">
		<!--[if IE]>
		<style type="text/css">

			#main li {
				width: auto;
			}

			/* fix for fieldset background spill bug in all flavours of IE */
			fieldset {
				position: relative;
				margin: 2em 0 1em 0;
			}

			legend {
				position: absolute;
				top: -0.5em;
				left: 0.2em;
			}

		</style>
		<![endif]-->

		<!--[if IE 6]>
		<style type="text/css">
			#doc {
				width: 58em;
			}

			#main .supportBox {
				margin-left: 40px;
			}
		</style>
		<![endif]-->
		<script type="text/javascript" src="../JavaScripts/ValidationForms/livevalidation_standalone.js"></script>
		<style type="text/css">
			<!--
			.adminLink {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 11px;
				font-weight: bold;
				color: #333333;
				text-decoration: none;
			}

			-->
		</style>
		<link href="adminStyles.css" rel="stylesheet" type="text/css"/>
	</head>

	<body class="fondofondo">

	<table width="1010" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
		<tr>
			<td width="798" valign="top"><img src="../images/logo.gif" width="690" height="116"/></td>
			<td width="212" align="right" valign="top">
				<table width="212" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td height="22" bgcolor="#99CC00">
							<table width="212" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="52">
										<div align="center"><a href="../index.php" class="texsuper">home</a></div>
									</td>
									<td width="10">
										<div align="center"><img src="../images/raya.gif" width="1" height="22"/></div>
									</td>
									<?php
									if (session_is_registered("userName")) {
										echo "<td width='52' class='texsuper'><div align='center'><a href='$logoutAction'>logout</a></div></td>
                	  <td width=10><div align=center><img src=images/raya.gif width=1 height=22 /></div></td>";
									}
									?>
									<td width="119">
										<div align="right" class="style6">
											<div align="center"><font color="#000000" size="1"
											                          face="Arial, Helvetica, sans-serif"><span
														class="tex1"> &nbsp;&nbsp;
                        <script language="JavaScript" type="text/javascript">
	                        var months = new Array(13);
	                        months[1] = "January";
	                        months[2] = "February";
	                        months[3] = "March";
	                        months[4] = "April";
	                        months[5] = "May";
	                        months[6] = "June";
	                        months[7] = "July";
	                        months[8] = "August";
	                        months[9] = "September";
	                        months[10] = "October";
	                        months[11] = "November";
	                        months[12] = "December";
	                        var time = new Date();
	                        var lmonth = months[time.getMonth() + 1];
	                        var date = time.getDate();
	                        var year = time.getYear();
	                        if (year < 2000)    // Y2K Fix, Isaac Powell
		                        year = year + 1900; // http://onyx.idbsu.edu/~ipowell
	                        document.write("<left>" + lmonth + " ");
	                        document.write(date + ", " + year + "</left>");
                        </script>
                </span></font></div>
										</div>
										<div align="center"></div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="30" colspan="2" valign="middle" class="fondomenu">
				<table width="1010" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="80">
							<div align="center"></div>
						</td>
						<td width="104">
							<div align="center"><a href="../latesArrivals_2.php" class="LinksText">latest arrivals</a>
							</div>
						</td>
						<td width="25">
							<div align="center"><img src="../images/pun.jpg" width="9" height="30"/></div>
						</td>
						<?php if (session_is_registered("userName")) {
							echo "<td width=90><div align=center><a href=members.php class=LinksText>members</a></div></td>";
							echo "<td width=23><div align=center><img src=images/pun.jpg alt=point4 width=9 height=30 /></div></td>";
						}
						?>
						<td width="46">
							<div align="center"><a href="../charity.php" class="LinksText">charity</a></div>
						</td>
						<td width="23">
							<div align="center"><img src="../images/pun.jpg" width="9" height="30"/></div>
						</td>
						<td width="118">
							<div align="center"><a href="../NewsEvents/news_vents.php" class="LinksText">news &amp;
									events</a></div>
						</td>
						<td width="22">
							<div align="center"><img src="../images/pun.jpg" width="9" height="30"/></div>
						</td>
						<td width="107">
							<div align="center"><a href="../authenticity.php" class="LinksText">authenticity</a></div>
						</td>
						<td width="24">
							<div align="center"><img src="../images/pun.jpg" width="9" height="30"/></div>
						</td>
						<td width="80">
							<div align="center"><a href="../contacts.php" class="LinksText">contacts</a></div>
						</td>
						<td width="28">&nbsp;</td>
						<td width="224"><label>
								<div align="right">
									<input name="textfield" type="text" class="texsuper" id="textfield" size="22"/>
									<input name="button" type="submit" class="titles" id="button" value="Search"/>
								</div>
							</label></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="22" colspan="2" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td height="568" colspan="2" valign="top">
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#999999">
					<tr>
						<td width="22%" valign="top">
							<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td height="46">&nbsp;</td>
								</tr>
								<tr class="dottedLine">
									<td nowrap="nowrap" class="menuLineTop"><a href="queryTools.php" target="_self"
									                                           class="LinkingWords">&lt;&lt;&lt;
											Back</a></td>
								</tr>
								<tr class="dottedLine">
									<td height="20" bgcolor="#FFFFFF" class="menuLineSides"><a href="contactsSQL.php"
									                                                           class="LinkingWords"
									                                                           target="_self">.::
											Members Queries ::.</a></td>
								</tr>
								<tr class="dottedLine">
									<td bgcolor="#FFFFFF" class="menuLineSides"><a href="contactsSQL.php"
									                                               class="LinkingWords"
									                                               target="_self"><strong>.::
												Alphabetical Search ::.</strong></a></td>
								</tr>
								<tr>
									<td bgcolor="#FFFFFF" class="menuLineBottom"><span class="style9"><strong>.:: Member
												Logins ::.</strong></span></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
								</tr>
							</table>
						</td>
						<td width="78%" bgcolor="#000000">
							<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
							       bgcolor="#FFFFFF">
								<tr>
									<td height="25" valign="middle" bgcolor="#999999" class="tex_titulo">&nbsp;&nbsp;&nbsp;&nbsp;</td>
								</tr>
								<tr>
									<td height="445" valign="top">
										<table width="95%" height="84%" border="0" align="center" cellpadding="0"
										       cellspacing="0" bgcolor="#FFFFFF" id="MainInfo">
											<tr>
												<th rowspan="2" align="left" valign="top" scope="col"><p>&nbsp;</p></th>
												<td height="35" valign="middle" bgcolor="#FFFFFF" scope="col">
													<div align="center" class="tex_titulo style9">Administration
														Area!!
													</div>
												</td>
											</tr>
											<tr>
												<td height="360" align="center" valign="top" class="SquareLines"><br/>
													<br/>

													<form id="contacts" name="contacts" method="post" action="">
														<table width="90%" border="0" cellspacing="2" cellpadding="1">
															<tr>
																<td width="4%" align="left" valign="middle">&nbsp;</td>
																<td colspan="2" align="left" valign="middle"
																    class="titles">Total Registered Members :
																</td>
																<td colspan="2" align="left" valign="middle"
																    class="adminLink"><?php echo $row_contacts[0] . "<br />"; ?></td>
																<td colspan="2" align="right" valign="middle"><a
																		href="<?php echo $logoutAction ?>"
																		class="LinkingWords"><strong>logout</strong></a>
																</td>
															</tr>
															<tr>
																<td align="center" valign="middle">&nbsp;</td>
																<td colspan="6" align="center" valign="middle"
																    class="downLine">&nbsp;</td>
															</tr>
															<tr>
																<td align="center" valign="middle">&nbsp;</td>
																<td width="12%" align="center" bgcolor="#E7F3C4"
																    class="dottedLeftTop"><img
																		src="mail/images/fle_ver_ver.gif" alt="4"
																		width="40" height="53"/>

																	<div align="center"></div>
																</td>
																<td colspan="5" align="left" valign="middle"
																    bgcolor="#E7F3C4" class="dottedRightTop">
																	<div class="titunoti">How many times a member has
																		been logged in...
																	</div>
																</td>
															</tr>
															<tr>
																<td align="center" valign="middle">&nbsp;</td>
																<td bgcolor="#E7F3C4" class="dottedLeftTop">
																	<div align="center"><span class="titles">Name</span>
																	</div>
																</td>
																<td width="20%" bgcolor="#E7F3C4" class="dottedLeftTop">
																	<div align="center"><span
																			class="titles">Last Name</span></div>
																</td>
																<td width="11%" bgcolor="#E7F3C4" class="dottedLeftTop"
																">
																<div align="center"><span class="titles">Email</span>
																</div>
																</td>
																<td width="15%" bgcolor="#E7F3C4" class="dottedLeftTop"
																">
																<div align="center"><span
																		class="titles"># Logged In</span></div>
																</td>
																<td width="17%" bgcolor="#E7F3C4" class="dottedLeftTop"
																">
																<div align="center"><span
																		class="titles">Member since</span></div>
																</td>
																<td width="21%" bgcolor="#E7F3C4" class="dottedBottom"
																">
																<div align="center"><span
																		class="titles">Last Login</span></div>
																</td>
															</tr>
															<?php do { ?>
																<tr>
																	<td align="center" valign="middle">&nbsp;</td>
																	<td class="dottedLeftTop">
																		<div align="left"><span
																				class="BottomText"><strong>
																					&nbsp;</strong></span><span
																				class="BodyText"><strong>
																					&nbsp;<?php echo $row_usage['name']; ?></strong></span>
																		</div>
																	</td>
																	<td class="dottedLeftTop">
																		<div align="left"><span class="BottomText">&nbsp;<strong
																					class="BodyText"><?php echo $row_usage['last_name']; ?></strong></span>
																		</div>
																	</td>
																	<td class="dottedLeftTop">
																		<div align="left"><span
																				class="BottomText"><strong>
																					&nbsp;</strong></span><span
																				class="BodyText"><strong><?php echo $row_usage['email']; ?></strong></span>
																		</div>
																	</td>
																	<td class="dottedLeftTop">
																		<div align="center"><span
																				class="BottomText"><strong>
																					&nbsp;</strong></span><span
																				class="BodyText"><strong><?php echo $row_usage['mu_logins']; ?></strong></span>
																		</div>
																	</td>
																	<td class="dottedLeftTop">
																		<div align="center"><span
																				class="BottomText"><strong>
																					&nbsp;</strong></span><span
																				class="BodyText"><strong><?php echo $row_usage['dataAdded']; ?></strong></span>
																		</div>
																	</td>
																	<td class="dottedBottom">
																		<div align="left"><span
																				class="BottomText"><strong>
																					&nbsp;</strong></span><span
																				class="BodyText"><strong><?php echo $row_usage['mu_date']; ?></strong></span>
																		</div>
																	</td>
																</tr>
															<?php } while ($row_usage = mysql_fetch_assoc($usageSQL)); ?>
															<tr>
																<td align="center" valign="middle">&nbsp;</td>
																<td colspan="6">&nbsp;</td>
															</tr>
														</table>
													</form>
													<br/>
													<table width="100%" border="0" cellspacing="1" cellpadding="1">
														<tr>
															<td>&nbsp;</td>
														</tr>
													</table>
													<br/>
												</td>
											</tr>
											<tr>
												<td height="19" colspan="2" valign="bottom" bgcolor="#FFFFFF">
													&nbsp;</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="25" colspan="2" class="linea_verde"><p class="BottomText">Greenlight Memorabilia - Website &reg;
					Copyright 2009</p></td>
		</tr>
	</table>

	<map name="Map" id="Map">
		<area shape="rect" coords="27,41,253,55" href="#"/>
		<area shape="rect" coords="28,59,451,75" href="#"/>
		<area shape="rect" coords="26,77,567,94" href="#"/>
	</map>
	</body>
	</html>
<?php
mysql_free_result($contactsSQL1);
mysql_free_result($alphabetSQL);
?>