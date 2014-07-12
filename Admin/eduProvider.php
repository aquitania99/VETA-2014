<?php
session_start();
//if(isset($_SESSION['login'])){
//////////////////////////////////////////////////////
require_once("../Connections/config.inc.php");
require_once("../Connections/mysql.class.php");
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
//////////////////////////////////
$schoolsCheck = $db->dbQuery("SELECT * FROM `education_provider` ORDER BY entity_name ASC");
$resSchoolCheck = $db->fetch_array($schoolsCheck);
$rowTotal = $db->num_rows($schoolsCheck);
//////////////////////////////////
//Initialise Variables
$updID = '';
$delID = '';
//////////////////////////////////
$updID = $_GET['updID'];
$delID = $_GET['delID'];
if (isset($updID)) {
	echo "<script type='text/javascript'>window.location='eduProvider-Update.php?id=$updID';</script>";
}
if (isset($delID)) {
	echo "<script type='text/javascript'>window.location='eduProvider-Delete.php?id=$delID';</script>";
}
//
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<style type="text/css">
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}

			/* Back Button */
			#back {
				background-color: #FFFFFF;
				border: 1px solid #BEBEBE;
				border-radius: 10px 10px 10px 10px;
				cursor: pointer;
				float: left;
				height: 25px;
				line-height: 2.1em;
				margin-left: 55px;
				position: relative;
				text-align: center;
				width: 75px;
				display: block;
				z-index: 5;
				/* */
				-moz-box-shadow: 3px 3px 6px #BEBEBE;
				-webkit-box-shadow: 3px 3px 6px #BEBEBE;
				box-shadow: 3px 3px 6px #BEBEBE;
			}

			#back:hover {
				text-decoration: underline;
				-moz-box-shadow: 1px 1px 3px #BEBEBE;
				-webkit-box-shadow: 1px 1px 3px #BEBEBE;
				box-shadow: 1px 1px 3px #BEBEBE;
			}

			/* // */
			/* Back to Top Start */
			#to_top {
				display: block;
				display: none;
				z-index: 999;
				position: fixed;
				bottom: 50px;
				right: 50px;
				background: url('images/going_up.png') center center no-repeat;
				width: 68px;
				height: 61px;
			}

			/* Back to Top End */
		</style>
	</head>

	<body>
	<br/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
		<tr>
			<td valign="top">
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
						                                 align="absmiddle"/></td>
						<td align="right" valign="middle"><a href="otherTasks.php"><img src="newsletter/images/back.png"
						                                                                border="0"/></a><a
								href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0"/></a>
						</td>
					</tr>
					<tr>
						<td align="center" valign="middle"><h2>List - Education Providers</h2></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top">
				<div id="box1" style="">
					<table width="100%" border="0" cellspacing="1" cellpadding="4"
					       style="border:1px solid #FFF; font-size:.8em;">
						<tr>
							<td width="20%" align="center" valign="middle" bgcolor="#92D051"><label style="color:#FFF;">Entity
									Name</label></td>
							<td width="38%" align="center" valign="middle" bgcolor="#92D051"><label style="color:#FFF;">Address
									- Location</label></td>
							<td width="19%" align="center" valign="middle" bgcolor="#92D051"><label style="color:#FFF;">Phone</label>
							</td>
							<td width="23%" align="center" valign="middle" bgcolor="#92D051"><label style="color:#FFF;">Action</label>
							</td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#BEBEBE" colspan="4">
								<div style="float:left; width:100%;  height:35px;">
									<p style="text-align:left; margin-top:5px; margin-left:5px; color:#FFF; font-width:bold;">
										<!-- Show Results Start -->
										<?php echo "Records found... " . $rowTotal; ?>
										<!-- Records Table Start -->
                           <span style="cursor:pointer; margin-left:555px;"
                                 onclick="window.location='eduProvider-Insert.php';" title="Click to Add Provider">
                         	<img src="images/add-new-education-provider-icon.png" alt="" width="25" height="25"
                                 border="0" align="absmiddle"/>
                            Add New Provider
                            </span>
									</p>
								</div>
							</td>
						</tr>
						<?php
						//echo "<br />Top1 Products on this Industry : ".$rowTotal."<br /><br />";
						$rc = 0;
						do {
							$rc++;
							//
							if ($rc % 2 == 1) {
								$tr = '#A6D4E3';
							} else {
								$tr = '#D2EBF2';
							}
							?>
							<tr style="background-color:<?php echo $tr; ?>">
								<td align="left" valign="middle">
									<p style="text-align:left; margin:5px;">
										<b><?php echo ucwords(strtolower($resSchoolCheck['entity_name'])); ?></b>
									</p>
								</td>
								<td align="center" valign="middle">
									<!-- <p style="text-align:left; margin:5px; font-size:.95em; display:compact;"> -->
									<p style="text-align:left; margin-left:45px; display:block; width:150px; float:left;">
										<?php echo ucwords(strtolower($resSchoolCheck['location'])); ?>
									</p>
								</td>
								<td align="center" valign="middle">
									<p style="text-align:left; margin:5px; display:block; width:150px; float:left;">
										<?php echo $resSchoolCheck['phone']; ?>
									</p>
								</td>
								<td>
									<p style="text-align:left; margin:5px; display:block;">
										<label>
											<input type="radio" style="cursor:pointer;" name="eduAction"
											       value="upd_<?php echo $resSchoolCheck['edu_providerID']; ?>"
											       class="upd"
											       id="eduAction_<?php echo $resSchoolCheck['edu_providerID']; ?>"
											       onClick="window.location='<?php echo $_SERVER['PHP_SELF'] . '?updID=' . $resSchoolCheck['edu_providerID']; ?>';">
											Update</label>
										<br/>
										<label>
											<input type="radio" style="cursor:pointer;" name="eduAction"
											       value="del__<?php echo $resSchoolCheck['edu_providerID']; ?>"
											       class="del"
											       id="eduAction__<?php echo $resSchoolCheck['edu_providerID']; ?>"
											       onClick="window.location='<?php echo $_SERVER['PHP_SELF'] . '?delID=' . $resSchoolCheck['edu_providerID']; ?>';">
											Delete</label>
									</p>
								</td>
							</tr>
						<?php } while ($resSchoolCheck = $db->fetch_array($schoolsCheck)) ?>
					</table>
					<script type="text/javascript">
					</script>
					<!-- <div id="back" onclick="javascript:history.go(-1)"> Back </div> -->
					<div id="back" onclick="javascript:window.location='paymentMod.php';"> Back</div>
				</div>
				<!-- Records Table End-->
			</td>
		</tr>
		<!-- -->  <!-- -->
	</table>
	<br/>
	<br/>

	<div>
		<a id="to_top" href="#" title="Back to Top" style="display:inline;"></a>
	</div>
	<script type="text/javascript">
		function showDiv() {
			if ($(window).scrollTop() > 300) {
				$("#to_top").show();
			} else {
				$("#to_top").hide();
			}
		}
		$(window).scroll(showDiv);
		showDiv();
	</script>
	</body>
	</html>
<?php
//}
//else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>