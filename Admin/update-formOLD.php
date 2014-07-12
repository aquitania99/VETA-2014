<?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/person.php');
require('classes/college.php');
require('classes/counsellors.php');
//////////////////////////////////
if (isset($_SESSION['login'])) {
//////////////////////////////////
	$modifBy = $_SESSION['login'];
//
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	//
	$col = new College();
	$col->getCollege();
	$colList = $col->getCollege();
//
	$counsellor = $_SESSION['login'];
	$cID = strtoupper($counsellor[0]) . '-' . ucwords(substr($counsellor, 1));
	//var_dump($cID);
	if (!empty($cID)) {
		$counsellor = new counsellors();
		$counsellor->check($cID);
	}
	$keyVal = $_GET['keyVal'];
	$personalDetails = new Person();
	//$choice = 1;
	$choice = 6;
	$personalDetails->search($choice, $keyVal);
	$personalDetails->results;
	$personResults = json_decode($personalDetails->results, true);
	if (isset($_POST['submit'])) {
//////////////////////////////////
		//require("classes/person.php");
//
		$person = new Person();
		$person->_date = date('Y/m/d');
		$person->stCounsellor = $cID;
		$person->personStatus = $_POST['personStatus'];
		$person->firstName = ucwords(strtolower($_POST['firstName']));
		$person->lastName = ucwords(strtolower($_POST['lastName']));
		$person->emailAddress = strtolower($_POST['emailAddress']);
		//
		$person->mobilePhone = $_POST['mobilePhone'];
		$person->language = $_POST['language'];

		//
		if (empty($_POST['visaExpDate'])) {
			$person->visaExpDate = '0000-00-00';
		}
		else {
			$person->visaExpDate = $_POST['visaExpDate'];
			//$expDate = explode('-', $_POST['visaExpDate']);
			//$person->visaExpDate = $expDate[2] . '-' . $expDate[1] . '-' . $expDate[0];
		}
		//var_dump($_POST['visaExpDate']);die;
		//
		$person->visaType = $_POST['visaType'];
		$person->genComments = strtolower($_POST['genComments']);
		$person->nationality = ucwords(strtolower($_POST['nationality']));
		$person->profession = ucwords(strtolower($_POST['profession']));
		//var_dump($_POST['workExperience']);
		if (empty($_POST['workExperience'])) {
			$person->workExperience = '0';
		} else $person->workExperience = $_POST['workExperience'];
		//
		$person->collegeName = $_POST['collegeName'];
		//

		if (empty($_POST['DOB'])) {
			$person->DOB = '0000-00-00';
		} else {
			$personDob = explode('-', $_POST['DOB']);
			$person->DOB = $personDob[2] . '-' . $personDob[1] . '-' . $personDob[0];
		}
		//
		$person->passNumber = $_POST['passNumber'];
		//
		if (empty($_POST['passExpDate'])) {
			$person->passExpDate = '0000-00-00';
		} else {
			$passExpDate = explode('-', $_POST['passExpDate']);
			$person->passExpDate = $passExpDate[2] . '-' . $passExpDate[1] . '-' . $passExpDate[0];
		}
		//
		if (!empty($_POST['seminarAttendance'])) {
			$person->seminarAttendance = $_POST['seminarAttendance'];
		} else $person->seminarAttendance = 'NULL';
		//
		if (empty($_POST['seminarDate'])) {
			$person->seminarDate = '0000-00-00';
		} else {
			$seminarDate = explode('-', $_POST['seminarDate']);
			$person->seminarDate = $seminarDate[2] . '-' . $seminarDate[1] . '-' . $seminarDate[0];
		}
		//
		$person->getVetaInfo = $_POST['getVetaInfo'];
		//
		if (empty($_POST['degreeDate'])) {
			$person->degreeDate = '0000-00-00';
		}
		else {
			//$person->degreeDate = $_POST['degreeDate'];
			$degreeDate = explode('-', $_POST['degreeDate']);
			$person->degreeDate = $degreeDate[2] . '-' . $degreeDate[1] . '-' . $degreeDate[0];
		}
		//
		$person->degreeUni = ucwords(strtolower($_POST['degreeUni']));
		$person->residencyCountry = ucwords(strtolower($_POST['residencyCountry']));
		$person->originCountry = ucwords(strtolower($_POST['originCountry']));
		$person->homePhone = $_POST['homePhone'];
		$person->skype = strtolower($_POST['skype']);

		if (!empty($_POST['engTest'])) {
			$person->engTest = $_POST['engTest'];
		} else $person->engTest = '0';

		$person->engTestName = $_POST['engTestName'];
		$person->engTestType = $_POST['engTestType'];
		//
		if (empty($_POST['engTestDate'])) {
			$person->engTestDate = '0000-00-00';
		} else {
			$testDate = explode('-', $_POST['engTestDate']);
			$person->engTestDate = $testDate[2] . '-' . $testDate[1] . '-' . $testDate[0];
		}
		//
		$person->overallScore = $_POST['overallScore'];
		$person->reptFormNo = $_POST['reptFormNo'];
		$person->modifBy = $_POST['modifBy'];
		$person->referredBy = $_POST['referredBy'];
		//
		// var_export($person,true);
		//
		//$person->check($person->emailAddress);
		//
		//$result = $person->results;
		$person->update();
		//
		//var_dump($personResults['$residencyCountry']);die;
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
		<!-- -->
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
		<!-- -->
		<style type="text/css">
			<!--
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}

			.auto-hint {
				color: #999;
			}

			.hide {
				display: none;
			}

			-->
			.moreInstalments {
				margin-top: 1.5em;
				margin-bottom: 1.5em;
			}
		</style>
	</head>

	<body>
	<!-- /// /// -->
	<form id="insertClient" name="insertClient" method="post" action="">
	<br/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
	<tr>
		<td valign="top">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
					                                 align="absmiddle"/></td>
					<td align="right" valign="middle"><a href="mainAdmin.php"><img src="newsletter/images/back.png"
					                                                               border="0"/></a><a href="logout.php"><img
								src="images/logoutp.png" width="104" height="44" border="0"/></a></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><h2>Update Client VETA</h2></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<table width="100%" border="0" cellpadding="4" cellspacing="1">
				<tr>
					<!--
					  <td align="left" valign="middle" bgcolor="#DFEBF4">Start Year</td>
					  <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startYear" id="startYear"  /></td>
					  <td align="left" valign="middle" bgcolor="#DFEBF4">Start Month</td>
					  <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startMonth" id="startMonth"  /></td>
					-->
					<td align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
					<td align="left" valign="middle" bgcolor="#DFEBF4">Counsellor</td>
					<td align="left" valign="middle" bgcolor="#DFEBF4">
						<?php echo '<strong>'.ucfirst($personResults['cfName']) . ' ' . ucfirst($personResults['clName']).'</strong>'; ?>
						<input type="text" style="visibility:hidden;" class="input-xlarge uneditable-input"
						       id="stCounsellor" value="<?php echo $personResults['cfName'] . ' ' . $personResults['clName']; ?>"/>
					</td>
					<td align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
					<td align="left" valign="middle" bgcolor="#DFEBF4">Client Status</td>
					<td align="left" valign="middle" bgcolor="#DFEBF4">
						<select name="personStatus" id="personStatus" class="span2">
							<option value="::Choose Status::">::Choose Status::</option>
							<option value="1">New</option>
							<option value="2">Renovation</option>
							<option value="3">Other Agency</option>
							<option value="4">Return</option>
						</select>
						<!-- <input type="text" name="stCounsellor" id="stCounsellor"  /> -->
					</td>
					<td align="left" valign="middle" bgcolor="#DFEBF4">
						<select name="referredBy" id="referredBy" class="span2">
							<option value="" selected="selected">::Referred By::</option>
							<option value="Google Search">Google Search</option>
							<option value="Facebook Ad">Facebook Ad</option>
							<option value="Google Ad">Google Ad</option>
							<option value="MMMIgration">MMMIgration</option>
							<option value="A Friend">A Friend</option>
						</select>
						<!-- <input type="text" name="stCounsellor" id="stCounsellor"  /> -->
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<fieldset>
				<legend>First Stage</legend>
				<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table table-hover">
					<tr>
						<td align="left" valign="middle" bgcolor="#F2F2F2">
							First Name<br>
							<input type="text" name="firstName" id="firstName" class="auto-hint span2" value="<?php echo $personResults['firstName'];?>" placeholder="Enter Name"/>
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Last Name<br>
							<input type="text" name="lastName" id="lastName" class="auto-hint span2"  value="<?php echo $personResults['lastName'];?>" placeholder="Enter Last Name"/>
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Mobile<br>
							<input type="text" name="mobilePhone" id="mobilePhone" class="span2" value="<?php echo $personResults['mobilePhone'];?>" placeholder="Enter Mobile"/>
						</td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Email Address<br>
							<input type="text" name="emailAddress" id="emailAddress" class="auto-hint span2" value="<?php echo $personResults['emailAddress'];?>" placeholder="Email Address"/>
						</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Visa ExpDate<br>
							<input type="text" name="visaExpDate" id="visaExpDate" class="datePicker auto-hint span2" value="<?php echo $personResults['visaExpDate'];?>" placeholder='dd-mm-yyyy'/>
						</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Visa Type<br>
							<select name="visaType" id="visaType" class="span2">
								<option value="">::Select Visa::</option>
								<option value="570">English(ELICOS)</option>
								<option value="572">Vocational Education</option>
								<option value="573">Higher Education Visa</option>
								<option value="0">Other</option>
							</select>
						</td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Origin Country<br>
							<input type="text" name="originCountry" id="originCountry" class="span2" value="<?php echo $personResults['originCountry'];?>" placeholder="Origin Country"/>
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Residency Country<br>
							<input type="text" name="residencyCountry" id="residencyCountry" class="span2" value="<?php echo $personResults['residencyCountry'];?>" placeholder="Residency Country"/>
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Nationality<br>
							<input type="text" name="nationality" id="nationality" class="span2" value="<?php echo $personResults['nacionality'];?>" placeholder="Nationality"/>
						</td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Passport Number<br>
							<input type="text" name="passNumber" id="passNumber" value="<?php echo $personResults['passNumber'];?>" class="span2" placeholder="Passport Number"/>
						</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Passport Expiry Date<br>
							<input type="text" name="passExpDate" id="passExpDate" value="<?php echo $personResults['passExpDate'];?>" class="datePicker auto-hint" placeholder='dd-mm-yyyy'/>
						</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Date Of Birth<br>
							<input type="text" name="DOB" id="DOB" value="<?php echo $personResults['DOB'];?>" class="datePicker auto-hint" placeholder='dd-mm-yyyy'/>
						</td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Language<br>
							<select name="language" id="language">
								<option value="">::Select Language::</option>
								<option value="1">Spanish</option>
								<option value="2">Portuguese</option>
								<option value="3">English</option>
								<option value="0">Other</option>
							</select>
							<!-- <input type="text" name="homePhone" id="homePhone"  /> -->
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Skype<br>
							<input type="text" name="skype" id="skype" value="<?php echo $personResults['skype'];?>" class="span2" placeholder="User Skype"/>
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Home Phone<br>
							<input type="text" name="homePhone" id="homePhone" value="<?php echo $personResults['homePhone'];?>" class="span2"/></td>
					</tr>
				</table>
			</fieldset>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Second Stage</legend>
				<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table table-hover">
					<tr>
						<td bgcolor="#DFEBF4">Profession<br>
							<input type="text" name="profession" id="profession" value="<?php echo $personResults['profession'];?>" class="span2"/></td>
						<td bgcolor="#DFEBF4">Work Experience<br>
							<input type="text" name="workExperience" id="workExperience" value="<?php echo $personResults['workExperience'];?>" class="auto-hint span2" placeholder="Number of years of work experience"/>
						</td>
						<td bgcolor="#DFEBF4">University<br>
							<input type="text" name="collegeName" id="collegeName" value="<?php echo $personResults['collegeName'];?>" class="span2"/></td>
					</tr>
					<tr>
						<td bgcolor="#F2F2F2">Degree Date<br>
							<input type="text" name="degreeDate" id="degreeDate" value="<?php echo $personResults['degreeDate'];?>" class="datePicker auto-hint span2" placeholder='dd-mm-yyyy'/></td>
						<td bgcolor="#F2F2F2">Title<br>
							<input type="text" name="degreeUni" id="degreeUni" value="<?php echo $personResults['degreeUni'];?>" class="span2"/></td>
						<td colspan="3" bgcolor="#F2F2F2"></td>
					</tr>
					<tr>
						<td bgcolor="#DFEBF4">Seminar Attendance<br>
							<input type="radio" value="1" name="seminarAttendance"/>YES &nbsp;
							<input type="radio" value="0" name="seminarAttendance"/>NO
						</td>
						<td bgcolor="#DFEBF4">Seminar Date<br>
							<input type="text" name="seminarDate" id="seminarDate" value="<?php echo $personResults['seminarDate'];?>" class="datePicker auto-hint" placeholder='dd-mm-yyyy'/></td>
						<td bgcolor="#DFEBF4">Agreed to Receive Info<br>
							<select name="getVetaInfo" id="getVetaInfo" class="span2">
								<option selected="selected" value="1">YES</option>
								<option value="0">NO</option>
							</select>
							<!-- <input type="text" name="getVetaInfo" id="getVetaInfo"  /> -->
						</td>
					</tr>
				</table>
			</fieldset>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Third Stage</legend>
				<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table table-hover">
					<tr>
						<td bgcolor="#F2F2F2">English Test<br>
							<input type="radio" value="1" name="engTest" /> YES &nbsp; <input type="radio" value="0" name="engTest"/>NO
						</td>
						<td bgcolor="#F2F2F2">English Test Name<br>
							<select name="engTestName" id="engTestName" class="span2">
								<option value="">::Select English Test::</option>
								<option value="IELTS">IELTS</option>
								<option value="TOEFL">TOEFL</option>
								<option value="Other">Other</option>
							</select>
							<!-- <input type="text" name="engTestName" id="engTestName"  /> -->            </td>
						<td bgcolor="#F2F2F2">English Test Version<br>
							<select name="engTestType" id="engTestType" class="span2">
								<option value="">::Select Test Version::</option>
								<option value="General">General Training</option>
								<option value="Academic">Academic</option>
								<option value="Other">Other</option>
							</select>
							<!-- <input type="text" name="engTestType" id="engTestType"  /> -->            </td>
					</tr>
					<tr>
						<td bgcolor="#DFEBF4">Eng. Test Date<br>
							<input type="text" name="engTestDate" id="engTestDate" value="<?php echo $personResults['engTestDate'];?>" class="datePicker auto-hint span2" placeholder='dd-mm-yyyy'/>
						</td>
						<td bgcolor="#DFEBF4">Overall Score<br>
							<input type="text" name="overallScore" value="<?php echo $personResults['overallScore'];?>" id="overallScore"/>
						</td>
						<td bgcolor="#DFEBF4">Report Form Number<br>
							<input type="text" class="auto-hint span2" value="<?php echo $personResults['reportFormNo'];?>" placeholder="Test Report Form Number" name="reptFormNo" id="reptFormNo"/>
						</td>
					</tr>
				</table>
			</fieldset>
		</td>
	</tr>
	<br/>
	<tr>
		<td>
			<!-- <a id="addQuote" href="quotes.php?eaddre" target="_blank" class="btn btn btn-success">Create Quote</a> -->
		</td>
	</tr>
	<br/>

	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Notes</legend>
				<table width="100%" border="0" cellspacing="1" cellpadding="4">
					<tr>
						<td colspan="2" bgcolor="#DFEBF4">
							<label class="control-label" for="genComments">General Comments</label>
							<textarea name="genComments" id="genComments" class="span5" rows="4"><?php echo $personResults['genComments'];?></textarea></td>
					</tr>
					<tr>
						<td bgcolor="#DFEBF4"><strong>Modified By</strong><br>
							<?php echo $_SESSION['login']; ?><input type="hidden" name="modifBy" id="modifBy"
							                                        value="<?php echo $_SESSION['login']; ?>"/></td>
						<td bgcolor="#DFEBF4"><strong>Modified on</strong><br>
							<?php echo date('l jS \of F Y h:i:s A'); ?>
							<input type="hidden" name="<?php echo date('l jS \of F Y h:i:s A'); ?>" id="textfield31"/></td>
					</tr>
				</table>
			</fieldset>
		</td>
	</tr>
	<tr>
		<td height="40" align="left" valign="top">
			<div class="span8" id="test">
				<!--   <input type="button" name="goBack" id="goBack" value="< Search Again" onclick="javascript:history.back(-1);" /> -->
				<input type="submit" name="submit" id="submit" class="btn btn-large btn-primary pull-right"
				       style="cursor:pointer" value="Update"/>
			</div>
		</td>
	</tr>
	</table>
	</form>
	<!-- SCRIPTS BEGIN -->
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>
	<!-- SCRIPTS END -->

	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";