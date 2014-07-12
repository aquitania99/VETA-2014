<?php
session_start();
if (isset($_SESSION['login'])) {
//////////////////////////////////////////////////////
	require_once("../Connections/config.inc.php");
	require_once("../Connections/mysql.class.php");
//////////////////////////////////

//Initialise Variables
	$insert = '';
//////////////////////////////////
	$insert = $_POST['insert'];
	$entity = $_POST['entityName'];
	$location = $_POST['location'];
	$phone = $_POST['phone'];
	if (isset($insert)) {
		//////////////////////////////////

		//$entity = mysql_real_escape_string($_POST['entityName']);
		//$location = mysql_real_escape_string($_POST['location']);

		/// Create New DB Object
		$db = new MySQL();
		/// Open Connection
		$db->open();
		//////////////////////////////////
		$schoolsCheck = $db->dbQuery("SELECT max(edu_providerID) as maxIdBefore FROM `education_provider`");
		$resSchoolCheck = $db->fetch_array($schoolsCheck);
		$maxIdBefore = $resSchoolCheck['maxIdBefore'];
		echo "Max ID Before adding new Entity... " . $maxIdBefore . "<br />";
		//////////////////////////////////
		$schoolsAdd = $db->dbQuery("INSERT INTO `education_provider` (entity_name, location, phone) VALUES ('$entity', '$location', '$phone')");
		//$resSchoolAdd = $db->fetch_array($schoolsCheck);
		//////////////////////////////////
		$schoolsCheck = $db->dbQuery("SELECT max(edu_providerID) as maxIdAfter FROM `education_provider`");
		$resSchoolCheck = $db->fetch_array($schoolsCheck);
		$maxIdAfter = $resSchoolCheck['maxIdAfter'];
		echo "Max ID Before adding new Entity... " . $maxIdAfter . "<br />";
		//////////////////////////////////
		if ($maxIdAfter > $maxIdBefore) {
			echo "<script type='text/javascript'>alert('New Provider Added Successfully!!!');</script>";
			echo "<script type='text/javascript'>window.location='eduProvider.php';</script>";
			//////////////////////////////////
		} else {
			echo "<script type='text/javascript'>alert('Sorry!!\nSomething went wrong\r Please try again');</script>";
		}
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
			#toUpdate {
				background-color: #FFFFFF;
				border: 1px solid #BEBEBE;
				border-radius: 10px 10px 10px 10px;
				cursor: pointer;
				float: right;
				height: 25px;
				line-height: 1.5em;
				margin-right: 225px;
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

			#toUpdate:hover {
				text-decoration: underline;
				-moz-box-shadow: 1px 1px 3px #BEBEBE;
				-webkit-box-shadow: 1px 1px 3px #BEBEBE;
				box-shadow: 1px 1px 3px #BEBEBE;
			}
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
								href="options.php"></a><a href="logout.php"><img src="images/logoutp.png" width="104"
						                                                         height="44" border="0"/></a></td>
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
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<table width="100%" border="0" cellspacing="1" cellpadding="4"
						       style="border:1px solid #FFF; font-size:.8em;">
							<tr>
								<td width="20%" align="center" valign="middle" bgcolor="#92D051"><label
										style="color:#FFF;">Entity Name</label></td>
								<td width="38%" align="center" valign="middle" bgcolor="#92D051"><label
										style="color:#FFF;">Address - Location</label></td>
								<td width="19%" align="center" valign="middle" bgcolor="#92D051"><label
										style="color:#FFF;">Phone</label></td>
								<td width="23%" align="center" valign="middle" bgcolor="#92D051"><label
										style="color:#FFF;">Action</label></td>
							</tr>
							<tr>
								<td align="left" valign="middle" height=".5em" bgcolor="#BEBEBE" colspan="4">
									<p style="text-align:left; margin:5px;">&nbsp;</p>
								</td>
							</tr>
							<tr style="background-color:#A6D4E3">
								<td align="left" valign="middle">
									<p style="text-align:left; margin:5px;">
										<input type="text" name="entityName" style="width:250px;" id="entityName"/>
									</p>
								</td>
								<td align="center" valign="middle">
									<!-- <p style="text-align:left; margin:5px; font-size:.95em; display:compact;"> -->
									<p style="text-align:left; margin-left:5px; display:block; float:left;">
										<input type="text" name="location" style="width:330px;" id="location"/>
									</p>
								</td>
								<td align="center" valign="middle">
									<p style="text-align:left; margin:5px; display:block; width:150px; float:left;">
										<input type="text" name="phone" id="phone"/>
									</p>
								</td>
								<td>
									<p style="text-align:left; margin:5px; display:block;">
										<input name="insert" type="submit" style="cursor:pointer;" value="Add">
									</p>
								</td>
							</tr>
						</table>
					</form>
					<script type="text/javascript"></script>
					<!-- <div id="back" onclick="javascript:history.go(-1)"> Back </div> -->
					<div id="back" onclick="javascript:window.location='eduProvider.php';"> Back</div>
				</div>
				<!-- Records Table End-->
			</td>
		</tr>
		<!-- -->  <!-- -->
	</table>
	<br/>
	<br/>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>