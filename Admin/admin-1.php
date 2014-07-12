<?php
session_start();
global $valid_user;
if (session_is_registered("valid_user")) {
//////////////////////////////////////////////////////
	require_once("inc/login.php");
	$singleTask = $_GET['task'];
	echo "Task To Do :" . $singleTask . "<br \>";
/////////////////////////////////////////////////////
/// Create New DB Object
	$db = new MySQL();
/// Open Connection
	$db->open();
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- InstanceBegin template="/Templates/Template_new_VETA.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="google-site-verification" content="apxkxPEENCX3ulsgrVHiN9rdPZfHU3zJMISU8HJw4dk"/>
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link type="text/css" href="../js/themes/base/ui.all.css" rel="stylesheet"/>
		<script type="text/javascript" src="../js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="../js/ui/ui.core.js"></script>
		<script type="text/javascript" src="../js/ui/ui.draggable.js"></script>
		<script type="text/javascript" src="../js/ui/ui.resizable.js"></script>
		<script type="text/javascript" src="../js/ui/ui.dialog.js"></script>
		<script type="text/javascript" src="../js/external/bgiframe/jquery.bgiframe.js"></script>
		<link type="text/css" href="../js/demos.css" rel="stylesheet"/>
		<script type="text/javascript">
			jQuery.noConflict();
			jQuery(function () {
				$("a[href*=#]").click(function () {

					jQuery("#dialog").dialog({
						bgiframe: false,
						modal: true,
						autoOpen: false,
						buttons: {
							Ok: function () {
								jQuery(this).dialog('close');
							}
						}
					});
				});
			});
		</script>
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>Untitled Document</title>
		<!-- InstanceEndEditable -->
		<link href="../style.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			<!--
			body {
				margin-left: 0px;
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 0px;
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
		<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
	</head>

	<body class="bg">
	<div id="box">
	<div id="logo"><a href="../index.php"><img src="../images/logo.gif" alt="Logo VETA" width="193" height="112"
	                                           border="0"/></a></div>
	<div id="call"><img src="../images/call.gif" alt="Call" width="211" height="72" border="0" usemap="#Map"/>
		<map name="Map" id="Map">
			<area shape="rect" coords="174,49,203,72" href="../index.php"/>
			<area shape="rect" coords="142,50,170,70" href="../index_espanol.php"/>
		</map>
	</div>
	<div id="menu">
		<script type="text/javascript" src="../stmenu.js"></script>
		<a href="http://www.dhtml-menu-builder.com" style="display:none;visibility:hidden;">Javascript DHTML Drop Down
			Menu Powered by dhtml-menu-builder.com</a>
		<script type="text/javascript">
			<!--
			stm_bm(["menu3715", 900, "", "blank.gif", 0, "", "", 0, 0, 250, 0, 1000, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", "", 1, 25], this);
			stm_bp("p0", [0, 4, 0, 0, 0, 3, 0, 0, 100, "", -2, "", -2, 50, 0, 0, "#999999", "", "", 3, 0, 0, "#000000"]);
			stm_ai("p0i0", [0, "HOME ", "", "", -1, -1, 0, "index.php", "_self", "", "", "", "", 0, 0, 0, "", "", 0, 0, 0, 1, 1, "#CC0000", 0, "#CC0000", 0, "home%20menu.gif", "home%20menu.gif", 3, 3, 0, 0, "#E6EFF9", "#000000", "#FFFFFF", "#1F1D5D", "bold 9pt 'Arial','Verdana'", "bold 9pt 'Arial','Verdana'", 0, 0, "", "", "", "", 0, 0, 0], 78, 36);
			stm_ai("p0i1", [6, 1, "#51588F", "", -1, -1, 0]);
			stm_aix("p0i2", "p0i0", [0, "EDUCATION", "", "", -1, -1, 0, "", "_self", "", "", "", "", 0, 0, 0, "", "", 0, 0, 0, 1, 1, "#1F1D5D", 0, "#CC0000", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#FFFFFF", "#FFFFFF", "9pt 'Arial','Verdana'"], 100, 36);
			stm_bpx("p1", "p0", []);
			stm_aix("p1i0", "p0i2", [0, "English", "", "", -1, -1, 0, "Education-English.html", "_self", "", "English", "", "", 0, 0, 0, "", "", 0, 0, 0, 1, 1, "#990000", 0, "#990000"], 100, 25);
			stm_aix("p1i1", "p0i1", []);
			stm_aix("p1i2", "p1i0", [0, "Technical ", "", "", -1, -1, 0, "Education-Technical.html", "_self", "", "Technical "], 80, 25);
			stm_aix("p1i3", "p0i1", []);
			stm_aix("p1i4", "p1i0", [0, "University", "", "", -1, -1, 0, "Education-University.html", "_self", "", "University"], 80, 25);
			stm_ep();
			stm_aix("p0i3", "p0i1", []);
			stm_aix("p0i4", "p0i2", [0, "VISAS", "", "", -1, -1, 0, "", "_self", "", "VISAS"], 80, 36);
			stm_bpx("p2", "p0", []);
			stm_aix("p2i0", "p1i0", [0, "Study", "", "", -1, -1, 0, "Visas-Study.html", "_self", "", "Student Visa"], 80, 25);
			stm_aix("p2i1", "p0i1", []);
			stm_aix("p2i2", "p1i0", [0, "Work", "", "", -1, -1, 0, "Visas-Work.html", "_self", "", "Work"], 100, 25);
			stm_ep();
			stm_aix("p0i5", "p0i1", []);
			stm_aix("p0i6", "p0i2", [0, "ABOUT AUSTRALIA", "", "", -1, -1, 0, "About-Australia.html", "_self", "", "ABOUT AUSTRALIA", "", "", 0, 0, 0, "", "", 0, 0, 0, 1, 1, "#1F1D5D", 0, "#1F1D5D", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#FFFFFF", "#6699CC"], 140, 36);
			stm_aix("p0i7", "p0i1", []);
			stm_aix("p0i8", "p0i6", [0, "CONTACT US", "", "", -1, -1, 0, "", "_self", "", "CONTACT US"], 100, 36);
			stm_bpx("p3", "p0", []);
			stm_aix("p3i0", "p1i0", [0, "Online", "", "", -1, -1, 0, "Contact-Form.php", "_self", "", "Contact Form"], 100, 25);
			stm_aix("p3i1", "p0i1", []);
			stm_aix("p3i2", "p1i0", [0, "Staff", "", "", -1, -1, 0, "Contact.html", "_self", "", "Staff"], 100, 25);
			stm_ep();
			stm_aix("p0i9", "p0i1", []);
			stm_aix("p0i10", "p0i6", [0, "TESTIMONIALS", "", "", -1, -1, 0, "testimonials.html", "_self", "", "TESTIMONIALS", "", "", 0, 0, 0, "", "", 0, 0, 0, 1, 1, "#1F1D5D", 0, "#1F1D5D", 0, "home%20menu1.gif", "home%20menu1.gif"], 135, 36);
			stm_ep();
			stm_em();
			//-->
		</script>
	</div>
	<div id="flashhome">
		<script language="JavaScript">
			enlace = new Array()
			enlace[0] = '<img src="images/home7.jpg"'
			enlace[1] = '<img src="images/home1.jpg"'
			enlace[2] = '<img src="images/home2.jpg"'
			enlace[3] = '<img src="images/home3.jpg"'
			enlace[4] = '<img src="images/home4.jpg"'
			enlace[5] = '<img src="images/home5.jpg"'
			enlace[6] = '<img src="images/home6.jpg"'
			aleatorio = Math.random() * (enlace.length)
			aleatorio = Math.floor(aleatorio)
			document.write(enlace[aleatorio])
		</script>
	</div>
	<div id="bgi">
		<div id="centro"><!-- InstanceBeginEditable name="conte" -->
			<div id="boxinter"><br/>
				<table width="97%" align="center" cellpadding="5" cellspacing="0">
					<tr>
						<td class="ttitupun">
							<div align="left">Admin section - <span class="style1">australiaVETA.com</span></div>
						</td>
					</tr>
					<tr>
						<td align="left" valign="top"><p><strong>Viva Estudie Y Trabaje en Australia</strong>
							<table width="100%" height="84%" border="0" align="center" cellpadding="0" cellspacing="0"
							       bgcolor="#FFFFFF" id="MainInfo">
								<tr>
									<th rowspan="2" align="left" valign="top" scope="col"><p>&nbsp;</p></th>
									<td height="35" colspan="2" valign="middle" bgcolor="#FFFFFF" scope="col">
										<?php
										switch ($singleTask) {
											//// SALES
											case '1':
												include_once('insertSales.php');
												break;

											case '2':
												include_once('updateSales.php');
												break;

											case '3':
												include_once('deleteSales.php');
												break;
											//// RENTALS
											case '1b':
												include_once('insertRentals.php');
												break;

											case '2b':
												include_once('updateRental.php');
												break;

											case '3b':
												include_once('deleteRental.php');
												break;
											////INVESTMENTS
											case '1c':
												include_once('insertInvestment.php');
												break;

											case '2c':
												include_once('updateInvestment.php');
												break;

											case '3c':
												include_once('deleteInvestment.php');
												break;

											default:
												include_once('mainAdmin.php');
												break;

										}
										?>
									</td>
								</tr>
								<tr>
									<td width="90%" height="360" align="center" valign="top" class="SquareLines"></td>
									<td align="right" bgcolor="#FFFFFF">&nbsp;</td>
								</tr>
								<tr>
									<td height="19" colspan="3" valign="bottom" bgcolor="#FFFFFF">&nbsp;</td>
								</tr>
							</table>
							</p>
							<p>&nbsp;</p></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
			<!-- InstanceEndEditable --></div>
		<script type="text/javascript" src="http://settings.messenger.live.com/controls/1.0/PresenceButton.js"></script>
		<div id="get"><img src="../images/get.gif" width="51" height="44" align="absmiddle"/>MSN Online VETA
			<div id="gets">I speak</div>
		</div>
		<div class="boxsr">
			<table width="220" align="center" cellpadding="3" cellspacing="0">
				<tr>
					<td width="46" align="center" valign="middle"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=591a4343c03e6b38@apps.messenger.live.com&amp;mkt=es')"><img
								src="http://messenger.services.live.com/users/591a4343c03e6b38@apps.messenger.live.com/presenceimage?mkt=es"
								style="border-style: none;" width="16" height="16"/></a></td>
					<td width="112" align="left" valign="middle" class="fl style5"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=591a4343c03e6b38@apps.messenger.live.com&amp;mkt=es')">VETA.CarlosU</a>
					</td>
					<td width="18" align="center" valign="middle"><img src="../images/be.jpg" width="18" height="12"/>
					</td>
					<td width="18" align="center" valign="middle"><img src="../images/bi.jpg" width="18" height="12"/>
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=ef150cf203ddd857@apps.messenger.live.com&amp;mkt=es')"><img
								src="http://messenger.services.live.com/users/ef150cf203ddd857@apps.messenger.live.com/presenceimage?mkt=es"
								style="border-style: none;" width="16" height="16"/></a></td>
					<td align="left" valign="middle" class="fl style5"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=ef150cf203ddd857@apps.messenger.live.com&amp;mkt=es')">VETA.GeydiP</a>
					</td>
					<td align="center" valign="middle"><img src="../images/be.jpg" width="18" height="12"/></td>
					<td align="center" valign="middle"><img src="../images/bi.jpg" width="18" height="12"/></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=438588a39dbdbf@apps.messenger.live.com&amp;mkt=es')"><img
								src="http://messenger.services.live.com/users/438588a39dbdbf@apps.messenger.live.com/presenceimage?mkt=es"
								style="border-style: none;" width="16" height="16"/></a></td>
					<td align="left" valign="middle" class="fl style5"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=438588a39dbdbf@apps.messenger.live.com&amp;mkt=es')">VETA.YovannyU</a>
					</td>
					<td align="center" valign="middle"><img src="../images/be.jpg" width="18" height="12"/></td>
					<td align="center" valign="middle"><img src="../images/bi.jpg" width="18" height="12"/></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=28b0a8ffd509388f@apps.messenger.live.com&amp;mkt=es')"><img
								src="http://messenger.services.live.com/users/28b0a8ffd509388f@apps.messenger.live.com/presenceimage?mkt=es"
								style="border-style: none;" width="16" height="16"/></a></td>
					<td align="left" valign="middle" class="fl style5"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=28b0a8ffd509388f@apps.messenger.live.com&amp;mkt=es')">VETA.DorisS</a>
					</td>
					<td align="center" valign="middle"><img src="../images/be.jpg" width="18" height="12"/></td>
					<td align="center" valign="middle"><img src="../images/bi.jpg" width="18" height="12"/></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=f6b078a5dd12edc9@apps.messenger.live.com&amp;mkt=es')"><img
								src="http://messenger.services.live.com/users/f6b078a5dd12edc9@apps.messenger.live.com/presenceimage?mkt=es"
								style="border-style: none;" width="16" height="16"/></a></td>
					<td align="left" valign="middle" class="fl style5"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=f6b078a5dd12edc9@apps.messenger.live.com&amp;mkt=es')">VETA.DiegoB</a>
					</td>
					<td align="center" valign="middle"><img src="../images/be.jpg" width="18" height="12"/></td>
					<td align="center" valign="middle"><img src="../images/bi.jpg" width="18" height="12"/></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=d39556fbaf5f9be6@apps.messenger.live.com&amp;mkt=en')"><img
								src="http://messenger.services.live.com/users/d39556fbaf5f9be6@apps.messenger.live.com/presenceimage?mkt=en"
								style="border-style: none;" width="16" height="16"/></a></td>
					<td align="left" valign="middle" class="fl style5"><a
							href="javascript:Microsoft_Live_Messenger_PresenceButton_startConversation('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=d39556fbaf5f9be6@apps.messenger.live.com&amp;mkt=en')">VETA.MartinR</a>
					</td>
					<td align="center" valign="middle"><img src="../images/bo.gif" width="17" height="12"/></td>
					<td align="center" valign="middle"><img src="../images/bi.jpg" width="18" height="12"/></td>
				</tr>
			</table>
		</div>
		<div id="Join"><img src="../images/join.gif" width="54" height="47" align="absmiddle"/>Join Us VETA</div>
		<div class="boxsr">
			<table width="220" align="center" cellpadding="5" cellspacing="0">
				<tr>
					<td>
						<div align="right"><a href="skype:carlosalbertouseche?call"><img src="../images/skype.jpg"
						                                                                 width="29" height="28"
						                                                                 border="0"/></a><a
								href="http://www.facebook.com/group.php?gid=83106243722&amp;ref=search&amp;sid=676263145.1918115937..1"
								target="_blank"><img src="../images/facebook.jpg" alt="Facebook" width="29" height="28"
						                             border="0"/></a></div>
						<div>
							<br/>
							<label>
								<input type="submit" name="button" id="add-contact"
								       class="ui-button ui-state-default ui-corner-all" value="Submit"/>
							</label>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div id="firma">
		<table width="1000" align="center" cellpadding="2" cellspacing="0">
			<tr>
				<td width="182" height="95" rowspan="5" align="left" valign="middle"><a href="../index.html"><img
							src="../images/logof.gif" width="124" height="70" border="0"/></a></td>
				<td height="2" align="left" valign="middle" class="pu">.</td>
				<td width="12" rowspan="5" align="left" valign="middle">&nbsp;</td>
				<td height="2" align="left" valign="middle" class="pu">.</td>
				<td width="311" height="95" rowspan="5" align="left" valign="middle">&nbsp;</td>
				<td width="216" height="95" rowspan="5" align="left" valign="middle" class="texservices style4">Suite
					506, Level 5, 22 Market St<br/>
					Sydney, NSW 2000, Australia<br/>
					T+ 61 2 9299 14 58<br/>
					F+ 61 2 9299 92 14
				</td>
			</tr>
			<tr>
				<td width="99" height="0" align="left" valign="middle" class="titufi"><a href="../index.php" class="fl">HOME</a>
				</td>
				<td width="118" align="left" valign="middle" class="titufi"><a href="../About-Australia.html"
				                                                               class="fl">ABOUT AUSTRALIA </a></td>
			</tr>
			<tr>
				<td width="99" height="0" align="left" valign="middle" class="titufi"><a
						href="../Education-English.html" class="fl">EDUCATION </a></td>
				<td width="118" align="left" valign="middle" class="titufi"><a href="../Contact-Form.php" class="fl">CONTACT
						US </a></td>
			</tr>
			<tr>
				<td height="0" align="left" valign="middle" class="titufi"><a href="../Visas-Work.html"
				                                                              class="fl">VISAS </a></td>
				<td align="left" valign="middle" class="titufi"><a href="../testimonials.html"
				                                                   class="fl">TESTIMONIALS</a></td>
			</tr>
			<tr>
				<td width="99" height="12" align="left" valign="middle" class="pu">.</td>
				<td width="118" align="left" valign="middle" class="pu">.</td>
			</tr>

		</table>
	</div>
	</div>
	</body>
	<!-- InstanceEnd --></html>
<?php
} else {
	//echo "You Are not Properly Logged in<br \>";
	//echo "BBUUUUUUUUUUAAAAAAAAAAAA!!!!!<br /><br />";
	header('Location: index-1.php');
}
?>
