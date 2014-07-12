<?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
//
require('classes/quote.php');
require('classes/person.php');
//
//////////////////////////////////
if (isset($_SESSION['login'])) {
//////////////////////////////////
	$modifBy = $_SESSION['login'];
//var_dump($modifBy);
//
	$db = Database::getInstance();
	$mysqli = $db->getConnection();

//
	if (!isset($_POST['submit'])) {
		$keyVal = $_GET['keyVal'];
		////
		$yourself = $_GET['yourself'];
		$partner = $_GET['partner'];
		$firstChild = $_GET['firstChild'];
		$eachOtherChild = $_GET['eachOtherChild'];
		$totalCourseCostInfo = $_GET['totalCourseCostInfo'];
		$childresStudyFees = $_GET['childresStudyFees'];
		$ticketFees = $_GET['ticketFees'];
		$grandSum = $_GET['grandSum'];
		//
////
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		//echo 'Checking Quote for... '.$keyVal.'<br>';exit;
		//
		$searchAfterIns = 'SELECT * ';
		$searchAfterIns .= 'FROM quotations ';
		$searchAfterIns .= 'WHERE personID = "' . $keyVal . '"';
		$searchAfterIns .= 'ORDER BY quoteNo DESC LIMIT 1';
		//
		//print_r($searchAfterIns);
		$rsAfterIns = $mysqli->query($searchAfterIns);
		//
		$result = $rsAfterIns->fetch_array();
		//
		$personalDetails = new Person();
		$personalDetails->search($keyVal);
		//
		$expDate = explode('-', $personalDetails->visaExpDate);
		//
		$year = $expDate[0];
		$month = $expDate[1];
		$day = $expDate[2];
		$expiryDate = $day . "/" . $month . "/" . $year;
////

//
		//
		$searchColleges = 'SELECT entity_name as college ';
		$searchColleges .= 'FROM education_provider ';
		$searchColleges .= 'WHERE edu_providerID IN (' . $result['college'] . ',' . $result['college2'] . ',' . $result['college3'] . ',' . $result['college4'] . ')';
		//
		$rsColleges = $mysqli->query($searchColleges);
		//
		$resultColleges = $rsColleges->fetch_array();
		//

		/*
		$resultColleges = $rsColleges->fetch_array();
		//
		//print_r(count($resultColleges));
		for($i;$i < count($resultColleges);$i++){
		//var_dump($resultColleges);
		}
		*/
	}
//
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
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
	<form id="createQuote" name="createQuote" method="post" action="createQuote.php">
	<br/>
	<input type="hidden" value="<?php echo $keyVal; ?>" name="eaddress" id="eaddress"/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="211" rowspan="2"><img src="images/logomodulo.gif" alt="" width="194" height="106"
					                                 align="absmiddle"/></td>
					<td align="right" valign="middle">
						<!--
						<a href="mainAdmin.php"><img src="newsletter/images/back.png" alt="" border="0" /></a>
						<a href="logout.php"><img src="images/logoutp.png" alt="" width="104" height="44" border="0" /></a>
						-->
						<!-- <a class="btn btn-inverse" href="" onclick="close(); return false;"><i class="icon-remove-circle icon-white"></i></a>
						<script type="text/javascript">
						function close(){
					//		window.close();
							window.history.go(-1);
						}
						</script> -->
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle"><h2>QUOTE VETA / COTIZACION VETA</h2></td>
				</tr>
			</table>

		</td>
	</tr>
	<tr>
		<td>
			<div class="pull-left span5">
				<dl class="dl-horizontal">
					<dt><strong>Today's Date</strong></dt>
					<dd><?php echo date('l jS \of F Y h:i:s A'); ?></dd>
					<dt><strong>Student Name</strong></dt>
					<dd><?php echo $personalDetails->firstName . " " . $personalDetails->lastName; ?></dd>
					<dt><strong>Profession</strong></dt>
					<dd><?php if ($personalDetails->profession == '') {
							echo "&nbsp;";
						} else echo $personalDetails->profession; ?></dd>
					<dt><strong>Mobile Phone</strong></dt>
					<dd><?php if ($personalDetails->mobilePhone == '') {
							echo "&nbsp;";
						} else echo $personalDetails->mobilePhone; ?></dd>
					<dt><strong>Email</strong></dt>
					<dd><?php echo $keyVal; ?></dd>
					<dt><strong>Visa Expiry Date</strong></dt>
					<dd><?php if ($expiryDate == '') {
							echo "&nbsp;";
						} else echo $expiryDate; ?></dd>
				</dl>
			</div>
			<div class="pull-right span5">
				<dl class="dl-horizontal">
					<dt><strong>Counsellor</strong></dt>
					<dd><?php echo $personalDetails->stCounsellor; ?></dd>
					<dt><strong>Counsellor Mobile</strong></dt>
					<dd><?php echo "Mobile..."; ?></dd>
					<dt><strong>Counsellor Email</strong></dt>
					<dd><?php echo "Email..."; ?></dd>
				</dl>
			</div>
			<input type="hidden" name="today" id="today" value="<?php echo date('l jS \of F Y h:i:s A'); ?>"/>
			<input type="hidden" name="studentName" id="studentName"
			       value="<?php echo $personalDetails->firstName . '&nbsp;' . $personalDetails->lastName; ?>"/>
			<input type="hidden" name="profession" id="profession" value="<?php echo $personalDetails->profession; ?>"/>
			<input type="hidden" name="mobilePhone" id="mobilePhone"
			       value="<?php echo $personalDetails->mobilePhone; ?>"/>
			<input type="hidden" name="email" id="email" value="<?php echo $keyVal; ?>"/>
			<input type="hidden" name="expiryDate" id="expiryDate" value="<?php echo $expiryDate; ?>"/>
			<!-- -->
			<input type="hidden" name="stCounsellor" id="stCounsellor"
			       value="<?php echo $personalDetails->stCounsellor; ?>"/>
			<input type="hidden" name="cMobile" id="cMobile" value="<?php echo "Mobile"; ?>"/>
			<input type="hidden" name="cEmail" id="cEmail" value="<?php echo "Email"; ?>"/>
		</td>
	</tr>
	<tr>
	<td align="left" valign="top">
	<fieldset>
	<legend>Quotation</legend>
	<input type="hidden" name="quoteNo" value="1" id="quoteNo1"/>
	<table border="0" cellspacing="1" cellpadding="4" class="table table-condensed">

	<tr>
	<td colspan="6">
	<div name="quotation">
		<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
			<tr>
				<td width="102" bgcolor="#DFEBF4">Course Name</td>
				<td width="190" bgcolor="#DFEBF4">
					<input type="text" name="courseName" id="courseName" class="uneditable-input span2"
					       value="<?php echo $result['courseName']; ?>"/></td>
				<td width="109" bgcolor="#DFEBF4">College Name</td>
				<td width="172" bgcolor="#DFEBF4">
					<input type="text" class="uneditable-input span2" name="college" id="college"
					       value="<?php echo $resultColleges[0]; ?>"/>
				</td>
				<td width="89" bgcolor="#DFEBF4">Location</td>
				<td width="160" bgcolor="#DFEBF4">
					<input type="text" class="uneditable-input span2" name="collegeLocation" id="collegeLocation"
					       value="<?php echo $result['collegeLocation']; ?>"/>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Current Course End Date</td>
				<td bgcolor="#F2F2F2">
					<input type="text" name="currentCourseEndDate" id="currentCourseEndDate"
					       class="datePicker uneditable-input span2" placeholder="yyyy/mm/dd"
					       value="<?php echo $result['currentCourseEndDate']; ?>"/>
				</td>
				<td bgcolor="#F2F2F2">New Course Start Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseStartDate" id="newCourseStartDate"
				                             class="datePicker uneditable-input span2" placeholder="yyyy/mm/dd"
				                             value="<?php echo $result['newCourseStartDate']; ?>"/></td>
				<td bgcolor="#F2F2F2">New Course End Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseEndDate" id="newCourseEndDate"
				                             class="datePicker uneditable-input span2" placeholder="yyyy/mm/dd"
				                             value="<?php echo $result['newCourseEndDate']; ?>"/></td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Cost per Week</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="weeklyCost" id="weeklyCost" class="uneditable-input span2"
						       placeholder="Cost AU$ per Week" value="<?php echo $result['weeklyCost']; ?>"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Materials (AU$)
				</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="materialsCost" id="materialsCost" class="uneditable-input span2"
						       placeholder="Materials Cost AU$" value="<?php echo $result['materialsCost']; ?>"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Duration (Weeks)</td>
				<td bgcolor="#F2F2F2">
					<input type="text" name="courseDuration" id="courseDuration" class="input-mini uneditable-input"
					       value="<?php echo $result['courseDuration']; ?>"/>
				</td>
			</tr>
			<tr>
				<td bgcolor="#DFEBF4">Time Table</td>
				<td bgcolor="#DFEBF4">
					<input type="text" name="courseTimeTable" class="uneditable-input span2" id="courseTimeTable"
					       value="<?php echo $result['courseTimeTable']; ?>"/>
				</td>
				<td bgcolor="#DFEBF4">Enrolment Fee</td>
				<td bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" class="uneditable-input span2" name="courseEnrolmentFee"
						       id="courseEnrolmentFee" placeholder="Enrolment Fee AU$"
						       value="<?php echo $result['courseEnrolmentFee']; ?>"/>
					</div>
				</td>
				<td bgcolor="#DFEBF4">Instalment Fee</td>
				<td colspan="3" bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="instalmentFee" id="instalmentFee" class="uneditable-input input-mini"
						       placeholder="Instalment Fee AU$" value="<?php echo $result['instalmentFee']; ?>"/>
					</div>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Deposit</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="deposit" id="deposit" class="uneditable-input span2"
						       placeholder="Deposit AU$" value="<?php echo $result['deposit']; ?>"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Bond</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="bond" id="bond" class="uneditable-input span2"
						       placeholder="If eligible AU$" value="<?php echo $result['bond']; ?>"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Holidays Duration (Weeks)</td>
				<td bgcolor="#F2F2F2">
					<input type="text" name="holidaysDuration" id="holidaysDuration" class="uneditable-input input-mini"
					       value="<?php echo $result['holidaysDuration']; ?>"/>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Qoute Details</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="courseInstalment" id="courseInstalment" class="uneditable-input span2"
						       value="<?php echo $result['courseInstalment']; ?>"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">&nbsp;</td>
				<td bgcolor="#F2F2F2">
					<!--
					 <a style="cursor:pointer; font-size:11px" onclick="addNewInst(2);" title="You can add UP to 4 Instalments" id="addMoreInst2">+ Add more instalments</a>
					 -->
				</td>
				<td colspan="4" bgcolor="#F2F2F2">&nbsp;

				</td>
			</tr>
		</table>
	</div>
	<!-- Additional Instalments -->
	<?php if ($result['college2'] > 0) { ?>
		<div class="moreInstalments" id="moreInstalments2">
			<!-- -->
			<legend>Instalment / Course 2</legend>
			<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
				<tr>
					<td width="102" bgcolor="#DFEBF4">Course Name</td>
					<td width="190" bgcolor="#DFEBF4">
						<input type="text" name="courseName2" id="courseName2" class="uneditable-input span2"
						       value="<?php echo $result['courseName2']; ?>"/></td>
					<td width="109" bgcolor="#DFEBF4">College Name</td>
					<td width="172" bgcolor="#DFEBF4">
						<input type="text" class="uneditable-input span2" name="college2" id="college2"
						       value="<?php echo $result['college2']; ?>"/>
					</td>
					<td width="89" bgcolor="#DFEBF4">Location</td>
					<td width="160" bgcolor="#DFEBF4">
						<input type="text" class="uneditable-input span2" name="collegeLocation2" id="collegeLocation2"
						       value="<?php echo $result['collegeLocation2']; ?>"/>
					</td>
				</tr>
				<tr>
					<td bgcolor="#F2F2F2">&nbsp;</td>
					<td bgcolor="#F2F2F2">&nbsp;</td>
					<td bgcolor="#F2F2F2">New Course Start Date</td>
					<td bgcolor="#F2F2F2"><input type="text" name="newCourseStartDate2" id="newCourseStartDate2"
					                             class="datePicker uneditable-input span2" placeholder="yyyy/mm/dd"
					                             value="<?php echo $result['newCourseStartDate2']; ?>"/></td>
					<td bgcolor="#F2F2F2">New Course End Date</td>
					<td bgcolor="#F2F2F2"><input type="text" name="newCourseEndDate2" id="newCourseEndDate2"
					                             class="datePicker uneditable-input span2" placeholder="yyyy/mm/dd"
					                             value="<?php echo $result['newCourseEndDate2']; ?>"/></td>
				</tr>
				<tr>
					<td bgcolor="#F2F2F2">Cost per Week</td>
					<td bgcolor="#F2F2F2">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="weeklyCost2" id="weeklyCost2" class="uneditable-input span2"
							       placeholder="Cost AU$ per Week" value="<?php echo $result['weeklyCost2']; ?>"/>
						</div>
					</td>
					<td bgcolor="#F2F2F2">Materials (AU$)
					</td>
					<td bgcolor="#F2F2F2">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="materialsCost2" id="materialsCost2" class="uneditable-input span2"
							       placeholder="Materials Cost AU$" value="<?php echo $result['materialsCost2']; ?>"/>
						</div>
					</td>
					<td bgcolor="#F2F2F2">Duration (Weeks)</td>
					<td bgcolor="#F2F2F2">
						<input type="text" name="courseDuration2" id="courseDuration2"
						       class="uneditable-input input-mini" value="<?php echo $result['courseDuration2']; ?>"/>
					</td>
				</tr>
				<tr>
					<td bgcolor="#DFEBF4">Time Table</td>
					<td bgcolor="#DFEBF4">
						<input type="text" name="courseTimeTable2" id="courseTimeTable2"
						       class="uneditable-input input-mini" value="<?php echo $result['courseTimeTable2']; ?>"/>
					</td>
					<td bgcolor="#DFEBF4">Enrolment Fee</td>
					<td bgcolor="#DFEBF4">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" class="uneditable-input span2" name="courseEnrolmentFee2"
							       id="courseEnrolmentFee2" placeholder="Enrolment Fee AU$"
							       value="<?php echo $result['courseEnrolmentFee2']; ?>"/>
						</div>
					</td>
					<td bgcolor="#DFEBF4">Instalment Fee</td>
					<td colspan="3" bgcolor="#DFEBF4">
						<div class="input-prepend pull-left">
							<span class="add-on">$</span>
							<input type="text" name="instalmentFee2" id="instalmentFee2"
							       class="uneditable-input input-mini" placeholder="Instalment Fee AU$"
							       value="<?php echo $result['instalmentFee2']; ?>"/>
						</div>
					</td>
				</tr>
				<tr>
					<td bgcolor="#F2F2F2">Holidays Duration (Weeks)</td>
					<td bgcolor="#F2F2F2">
						<input type="text" name="holidaysDuration2" id="holidaysDuration2"
						       class="uneditable-input input-mini" value="<?php echo $result['holidaysDuration2']; ?>"/>
					</td>
					<td bgcolor="#F2F2F2">Instalment / Course No. 2</td>
					<td bgcolor="#F2F2F2">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="courseInstalment2" id="courseInstalment2"
							       class="uneditable-input span2" value="<?php echo $result['courseInstalment2']; ?>"/>
						</div>
					</td>
					<td colspan="4" bgcolor="#F2F2F2">
						<!--
							 <a style="cursor:pointer; font-size:11px" onclick="addNewInst(3);" title="You can add UP to 4 Instalments" id="addMoreInst3">+ Add more instalments</a>
						 -->
					</td>
				</tr>
			</table>
		</div>
	<?php } ?>
	<!-- -->
	<?php if ($result['college3'] > 0) { ?>
		<div class="moreInstalments" id="moreInstalments3">
			<!-- -->
			<legend>Instalment / Course 3</legend>
			<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
				<tr>
					<td width="102" bgcolor="#DFEBF4">Course Name</td>
					<td width="190" bgcolor="#DFEBF4">
						<input type="text" name="courseName3" id="courseName3" class="span2"/></td>
					<td width="109" bgcolor="#DFEBF4">College Name</td>
					<td width="172" bgcolor="#DFEBF4">
						<input type="text" class="uneditable-input span2" name="college3" id="college3"
						       value="<?php echo $result['college3']; ?>"/>
					</td>
					<td width="89" bgcolor="#DFEBF4">Location</td>
					<td width="160" bgcolor="#DFEBF4">
						<input type="text" class="uneditable-input span2" name="collegeLocation3"
						       id="collegeLocation3"/>
					</td>
				</tr>
				<tr>
					<td bgcolor="#F2F2F2">&nbsp;</td>
					<td bgcolor="#F2F2F2">&nbsp;</td>
					<td bgcolor="#F2F2F2">New Course Start Date</td>
					<td bgcolor="#F2F2F2"><input type="text" name="newCourseStartDate3" id="newCourseStartDate3"
					                             class="datePicker uneditable-input span2" title="yyyy/mm/dd"/></td>
					<td bgcolor="#F2F2F2">New Course End Date</td>
					<td bgcolor="#F2F2F2"><input type="text" name="newCourseEndDate3" id="newCourseEndDate3"
					                             class="datePicker uneditable-input span2" title="yyyy/mm/dd"/></td>
				</tr>
				<tr>
					<td bgcolor="#F2F2F2">Cost per Week</td>
					<td bgcolor="#F2F2F2">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="weeklyCost3" id="weeklyCost3" class="uneditable-input span2"
							       placeholder="Cost AU$ per Week" value="<?php echo $result['weeklyCost3']; ?>"/>
						</div>
					</td>
					<td bgcolor="#F2F2F2">Materials (AU$)
					</td>
					<td bgcolor="#F2F2F2">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="materialsCost3" id="materialsCost3" class="uneditable-input span2"
							       placeholder="Materials Cost AU$"/>
						</div>
					</td>
					<td bgcolor="#F2F2F2">Duration (Weeks)</td>
					<td bgcolor="#F2F2F2">
						<input type="text" name="courseDuration3" id="courseDuration3"
						       class="uneditable-input input-mini" value="<?php echo $result['courseDuration3']; ?>"/>
					</td>
				</tr>
				<tr>
					<td bgcolor="#DFEBF4">Time Table</td>
					<td bgcolor="#DFEBF4">
						<input type="text" name="courseTimeTable3" class="uneditable-input span2" id="courseTimeTable3"
						       value="<?php echo $result['courseTimeTable3']; ?>"/>
					</td>
					<td bgcolor="#DFEBF4">Enrolment Fee</td>
					<td bgcolor="#DFEBF4">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" class="uneditable-input span2" name="courseEnrolmentFee3"
							       id="courseEnrolmentFee3"/>
						</div>
					</td>
					<td bgcolor="#DFEBF4">Instalment Fee</td>
					<td colspan="3" bgcolor="#DFEBF4">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="instalmentFee3" id="instalmentFee3"
							       class="uneditable-input input-mini"/>
						</div>
					</td>
				</tr>
				<tr>
					<td bgcolor="#F2F2F2">Holidays Duration (Weeks)</td>
					<td bgcolor="#F2F2F2">
						<input type="text" name="holidaysDuration3" id="holidaysDuration3"
						       class="uneditable-input input-mini" value="<?php echo $result['holidaysDuration3']; ?>"/>
					</td>
					<td bgcolor="#F2F2F2">Instalment No. 3</td>
					<td bgcolor="#F2F2F2">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="courseInstalment3" id="courseInstalment3"
							       class="uneditable-input span2"/>
						</div>
					</td>
					<td colspan="4" bgcolor="#F2F2F2">
						<a style="cursor:pointer; font-size:11px" onclick="addNewInst(4);"
						   title="You can add UP to 4 Instalments" id="addMoreInst4">+ Add more instalments</a>
					</td>
				</tr>
			</table>
		</div>
	<?php }
	if ($result['college4'] > 0) { ?>
		<!-- -->
		<div class="moreInstalments" id="moreInstalments4">
			<!-- -->
			<legend>Instalment / Course 4</legend>
			<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
				<tr>
					<td width="102" bgcolor="#DFEBF4">Course Name</td>
					<td width="190" bgcolor="#DFEBF4">
						<input type="text" name="courseName4" id="courseName4" class="uneditable-input span2"/></td>
					<td width="109" bgcolor="#DFEBF4">College Name</td>
					<td width="172" bgcolor="#DFEBF4">
						<input type="text" class="uneditable-input span2" name="college4" id="college4"
						       value="<?php echo $result['college4']; ?>"/>
					</td>
					<td width="89" bgcolor="#DFEBF4">Location</td>
					<td width="160" bgcolor="#DFEBF4">
						<input type="text" class="uneditable-input span2" name="collegeLocation4"
						       id="collegeLocation4"/>
					</td>
				</tr>
				<tr>
					<td bgcolor="#F2F2F2">&nbsp;</td>
					<td bgcolor="#F2F2F2">&nbsp;</td>
					<td bgcolor="#F2F2F2">New Course Start Date</td>
					<td bgcolor="#F2F2F2"><input type="text" name="newCourseStartDate4" id="newCourseStartDate4"
					                             class="datePicker uneditable-input span2" title="yyyy/mm/dd"/></td>
					<td bgcolor="#F2F2F2">New Course End Date</td>
					<td bgcolor="#F2F2F2"><input type="text" name="newCourseEndDate4" id="newCourseEndDate4"
					                             class="datePicker uneditable-input span2" title="yyyy/mm/dd"/></td>
				</tr>
				<tr>
					<td bgcolor="#DFEBF4">Cost per Week</td>
					<td bgcolor="#DFEBF4">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="weeklyCost4" id="weeklyCost4" class="uneditable-input span2"
							       placeholder="Cost AU$ per Week" value="<?php echo $result['weeklyCost4']; ?>"/>
						</div>
					</td>
					<td bgcolor="#DFEBF4">Materials (AU$)
					</td>
					<td bgcolor="#DFEBF4">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="materialsCost4" id="materialsCost4" class="uneditable-input span2"
							       placeholder="Materials Cost AU$"/>
						</div>
					</td>
					<td bgcolor="#DFEBF4">Duration (Weeks)</td>
					<td bgcolor="#DFEBF4">
						<input type="text" name="courseDuration4" id="courseDuration4"
						       class="uneditable-input input-mini" value="<?php echo $result['courseDuration4']; ?>"/>
					</td>
				</tr>
				<tr>
					<td bgcolor="#F2F2F2">Time Table</td>
					<td bgcolor="#F2F2F2">
						<input type="text" name="courseTimeTable4" class="uneditable-input span2" id="courseTimeTable4"
						       value="<?php echo $result['courseTimeTable4']; ?>"/>
					</td>
					<td bgcolor="#F2F2F2">Enrolment Fee</td>
					<td bgcolor="#F2F2F2">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" class="uneditable-input span2" name="courseEnrolmentFee4"
							       id="courseEnrolmentFee4"/>
						</div>
					</td>
					<td bgcolor="#F2F2F2">Instalment Fee</td>
					<td colspan="3" bgcolor="#F2F2F2">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="instalmentFee4" id="instalmentFee4"
							       class="uneditable-input input-mini"/>
						</div>
					</td>
				</tr>
				<tr>
					<td bgcolor="#DFEBF4">Holidays Duration (Weeks)</td>
					<td bgcolor="#DFEBF4">
						<input class="uneditable-input input-mini" type="text" name="holidaysDuration4"
						       id="holidaysDuration4" value=" <?php echo $result['holidaysDuration']; ?>"/>
					</td>
					<td bgcolor="#DFEBF4">Instalment No. 4</td>
					<td bgcolor="#DFEBF4">
						<div class="input-prepend pull-left" style="margin-right:2em;">
							<span class="add-on">$</span>
							<input type="text" name="courseInstalment4" id="courseInstalment4"
							       class="uneditable-input span2"/>
						</div>
					</td>
					<td colspan="4" bgcolor="#DFEBF4">&nbsp;

					</td>
				</tr>
			</table>
		</div>
	<?php } ?>
	<!-- -->
	<!-- Aditional Instalments END -->
	</td>

	</tr>

	<tr>
		<td colspan="6" bgcolor="#F2F2F2">
			<table class="table table-condensed">

				<tr>
					<td width="23%">
						<p class="span4"><strong>Medibank Health Cover</strong></p>

						<div class="span2">
							<p class="pull-left"><strong>Health Cover
									Type:</strong> <?php echo $result['healthCoverType']; ?></p>
						</div>
						<div class="pull-left span2">
							<strong>Months of coverage:</strong> <input class="uneditable-input input-mini"
							                                            id="prependedInput" placeholder="Cost AU$"
							                                            type="text" name="mediBankCost"
							                                            value=" <?php echo $result['mediBankMonths']; ?>"/>
						</div>
						<p class="span4"><strong>Cost AU$ :</strong></p>

						<div class="input-prepend pull-left span2">
							<span class="add-on">$</span>
							<input class="uneditable-input span2" id="prependedInput" placeholder="Cost AU$" type="text"
							       name="mediBankCost" value=" <?php echo $result['mediBankCost']; ?>"/>
						</div>
					</td>
					<td width="44%">

					</td>
					<td width="33%">
						<p><strong>Visa Fees</strong></p>

						<div class="input-prepend pull-left span2">
							<span class="add-on">$</span>
							<input type="text" class="uneditable-input input-mini" name="visaFees" id="visaFees"
							       placeholder="Visa Fees AU$" value="<?php echo $result['visaFees']; ?>"/>
						</div>
						<p>Medical Exams Cost</p>

						<div class="input-prepend pull-left span2">
							<span class="add-on">$</span>
							<input type="text" name="medicalExams" id="medicalExams" class="uneditable-input input-mini"
							       placeholder="Medical Exams AU$" value="<?php echo $result['medicalExams']; ?>"/>
						</div>
					</td>
					<td width="33%">
						<p><strong>Total Course Cost</strong></p>

						<div class="input-prepend pull-left span2">
							<span class="add-on">$</span>
							<input type="text" class="uneditable-input input-mini" name="totalCourseCost"
							       id="totalCourseCost" placeholder="Total Course Cost AU$"
							       value="<?php echo $result['totalCost']; ?>"/></div>
					</td>
					<td width="33%">
						<p><strong>Total Amount Payable</strong></p>

						<div class="input-prepend pull-left span2">
							<span class="add-on">$</span>
							<?php $deposit = $result['deposit'];
							if ($deposit != 0) {
								$grandTotal = ($result['courseInstalment'] + $result['deposit'] + +$result['medicalExams'] + $result['visaFees'] + $result['mediBankCost']);
							} else {
								$grandTotal = ($result['totalCost'] + $result['medicalExams'] + $result['visaFees'] + $result['mediBankCost']);
							}
							?>
							<input type="text" class="uneditable-input input-mini" name="totalAmountPayable"
							       id="totalAmountPayable" placeholder="AU$" value="<?php echo $grandTotal; ?>"/></div>
					</td>
				</tr>
			</table>
		</td>
		<!-- <td bgcolor="#F2F2F2">&nbsp;</td> -->
	</tr>
	<tr>
		<td colspan="6">
			<div id="moreQuotes" name="moreQuotes">
				<table border="0" cellspacing="1" cellpadding="2" style="width:100%;"
				       class="table table-hover table-condensed">
					<tr style="line-height:10px;">
						<td colspan="3" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							<legend>Financial requirements for your stay in Australia</legend>
						</td>
					</tr>
					<tr>
						<td width="27%" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">Expenses</td>
						<td width="38%" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">Per Person
						</td>
						<td width="35%" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">Amount
							Required in AUD
						</td>
					</tr>
					<tr>
						<td rowspan="4" align="left" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							<strong>Living</strong></td>
						<td bgcolor="#FFFFFF" class="tex">Yourself (18.610 AUD /Year)</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 test1" id="yourself" placeholder="Cost AU$"
								       value="<?php echo $yourself; ?>"/>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" class="tex">Partner (6.300 AUD/Year)</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 test1" id="partner" placeholder="Cost AU$"
								       value="<?php echo $partner; ?>"/>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" class="tex">First Child (3.600 AUD/Year)</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 test1" id="firstChild" placeholder="Cost AU$"
								       value="<?php echo $firstChild; ?>"/>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" class="tex">Each Other Child (2.7000 AUD/Year)</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 test1" id="eachOtherChild" placeholder="Cost AU$"
								       value="<?php echo $eachOtherChild; ?>"/>
							</div>
						</td>
					</tr>
					<tr>
						<td rowspan="2" align="left" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							<strong>Tuition</strong></td>
						<td bgcolor="#FFFFFF" class="tex">Study Fees</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 test1" id="totalCourseCostInfo" placeholder="Cost AU$"
								       value="<?php echo $totalCourseCostInfo; ?>"/>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" class="tex">Children Study Fees</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 test1" id="childresStudyFees" placeholder="Cost AU$"
								       value="<?php echo $childresStudyFees; ?>"/>
							</div>
						</td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#FFFFFF" class="tex-white"><strong>Travel Return Air
								fare</strong></td>
						<td bgcolor="#FFFFFF" class="tex">Ticket Fees</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 test1" id="ticketFees" placeholder="Cost AU$"
								       value="<?php echo $ticketFees; ?>"/>
							</div>
						</td>
					</tr>
					<tr>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex-white"><strong>Total
								Fees</strong></td>
						<td bgcolor="#FFFFFF">&nbsp;</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 test1" id="totalFees" placeholder="Cost AU$"
								       value="<?php echo $grandTotal; ?>"/>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="6">
			<div class="form-actions">
				<button type="button" class="btn btn-warning pull-right" name="generatePdf" id="generatePdf"
				        onclick="createPDF()">Create Quote PDF
				</button>
				<script type="text/javascript">
					function createPDF() {
						//alert('Generate - PDF!!\n');
						//
						document.getElementById('createQuote').submit();

					}
				</script>
				<!-- <button type="reset" class="btn">Cancel</button> -->
			</div>
		</td>
	</tr>
	<tr>
		<td style="line-height: 2em;" colspan="6">
			<!--<div class="addProds" id="addMore" onclick="addNew();"> </div>
			 <a style="cursor:pointer;" onclick="addNew();" title="You can add UP to 3 Quotations" id="addMore">+ Add Quote</a>-->

		</td>
	</tr>
	</table>
	</fieldset>
	</td>
	</tr>
	</table>
	</form>
	<!-- SCRIPTS BEGIN -->
	<!-- -->
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<!-- -->
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<!--
		<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
	-->

	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";