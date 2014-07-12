<?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');

//////////////////////////////////
if (isset($_SESSION['login'])) {
//////////////////////////////////
	$modifBy = $_SESSION['login'];
//var_dump($modifBy);
//
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
//
	$col = new College();
	$col->getCollege();
	$colList = $col->getCollege();
//
	if (!isset($_POST['submit'])) {
		$keyVal = $_GET['eaddress'];
	}
//
	if (isset($_POST['submit'])) {
		//
		require('classes/quote.php');
		//
		$newQuote = new Quote();
		//
		$newQuote->personID = $_POST['eaddress'];
		//////////////////////////////////
		//$newQuote->quoteNo = $_POST['quoteNo'];
		//
		$newQuote->courseName = $_POST['courseName'];
		$newQuote->college = $_POST['college'];
		$newQuote->collegeLocation = $_POST['collegeLocation'];
		//
		if ($_POST['currentCourseEndDate'] == "yyyy/mm/dd") {
			$_POST['currentCourseEndDate'] = '0000-00-00';
		}
		$newQuote->currentCourseEndDate = $_POST['currentCourseEndDate'];
		//
		if ($_POST['newCourseStartDate'] == "yyyy/mm/dd") {
			$_POST['newCourseStartDate'] = '0000-00-00';
		}
		$newQuote->newCourseStartDate = $_POST['newCourseStartDate'];
		//
		if ($_POST['newCourseEndDate'] == "yyyy/mm/dd") {
			$_POST['newCourseEndDate'] = '0000-00-00';
		}
		$newQuote->newCourseEndDate = $_POST['newCourseEndDate'];
		$newQuote->courseDuration = $_POST['courseDuration'];
		$newQuote->courseTimeTable = $_POST['courseTimeTable'];
		$newQuote->weeklyCost = $_POST['weeklyCost'];
		$newQuote->materialsCost = $_POST['materialsCost'];
		$newQuote->courseEnrolmentFee = $_POST['courseEnrolmentFee'];
		$newQuote->courseInstalment = $_POST['courseInstalment'];
		$newQuote->deposit = $_POST['deposit'];
		$newQuote->bond = $_POST['bond'];
		$newQuote->instalmentFee = $_POST['instalmentFee'];
		//
		$newQuote->courseName2 = $_POST['courseName2'];
		$newQuote->college2 = $_POST['college2'];
		$newQuote->collegeLocation2 = $_POST['collegeLocation2'];
		//
		if ($_POST['newCourseStartDate2'] == "yyyy/mm/dd") {
			$_POST['newCourseStartDate2'] = '0000-00-00';
		}
		$newQuote->newCourseStartDate2 = $_POST['newCourseStartDate2'];
		//
		if ($_POST['newCourseEndDate2'] == "yyyy/mm/dd") {
			$_POST['newCourseEndDate2'] = '0000-00-00';
		}
		$newQuote->newCourseEndDate2 = $_POST['newCourseEndDate2'];
		$newQuote->courseDuration2 = $_POST['courseDuration2'];
		$newQuote->courseTimeTable2 = $_POST['courseTimeTable2'];
		$newQuote->weeklyCost2 = $_POST['weeklyCost2'];
		$newQuote->materialsCost2 = $_POST['materialsCost2'];
		$newQuote->courseEnrolmentFee2 = $_POST['courseEnrolmentFee2'];
		$newQuote->courseInstalment2 = $_POST['courseInstalment2'];
		$newQuote->instalmentFee2 = $_POST['instalmentFee2'];
		//
		$newQuote->courseName3 = $_POST['courseName3'];
		$newQuote->college3 = $_POST['college3'];
		$newQuote->collegeLocation3 = $_POST['collegeLocation3'];
		//
		if ($_POST['newCourseStartDate3'] == "yyyy/mm/dd") {
			$_POST['newCourseStartDate3'] = '0000-00-00';
		}
		$newQuote->newCourseStartDate3 = $_POST['newCourseStartDate3'];
		//
		if ($_POST['newCourseEndDate3'] == "yyyy/mm/dd") {
			$_POST['newCourseEndDate3'] = '0000-00-00';
		}
		$newQuote->newCourseEndDate3 = $_POST['newCourseEndDate3'];
		$newQuote->courseDuration3 = $_POST['courseDuration3'];
		$newQuote->courseTimeTable3 = $_POST['courseTimeTable3'];
		$newQuote->weeklyCost3 = $_POST['weeklyCost3'];
		$newQuote->materialsCost3 = $_POST['materialsCost3'];
		$newQuote->courseEnrolmentFee3 = $_POST['courseEnrolmentFee3'];
		$newQuote->courseInstalment3 = $_POST['courseInstalment3'];
		$newQuote->instalmentFee3 = $_POST['instalmentFee3'];
		//
		$newQuote->courseName4 = $_POST['courseName4'];
		$newQuote->college4 = $_POST['college4'];
		$newQuote->collegeLocation4 = $_POST['collegeLocation4'];
		//
		if ($_POST['newCourseStartDate4'] == "yyyy/mm/dd") {
			$_POST['newCourseStartDate4'] = '0000-00-00';
		}
		$newQuote->newCourseStartDate4 = $_POST['newCourseStartDate4'];
		//
		if ($_POST['newCourseEndDate4'] == "yyyy/mm/dd") {
			$_POST['newCourseEndDate4'] = '0000-00-00';
		}
		$newQuote->newCourseEndDate4 = $_POST['newCourseEndDate4'];
		$newQuote->courseDuration4 = $_POST['courseDuration4'];
		$newQuote->courseTimeTable4 = $_POST['courseTimeTable4'];
		$newQuote->weeklyCost4 = $_POST['weeklyCost4'];
		$newQuote->materialsCost4 = $_POST['materialsCost4'];
		$newQuote->courseEnrolmentFee4 = $_POST['courseEnrolmentFee4'];
		$newQuote->courseInstalment4 = $_POST['courseInstalment4'];
		$newQuote->instalmentFee4 = $_POST['instalmentFee4'];
		//
		$newQuote->mediBankMonths = $_POST['mediBankMonths'];
		$newQuote->mediBankCost = $_POST['mediBankCost'];
		$newQuote->healthCoverType = $_POST['healthCoverType'];
		$newQuote->visaFees = $_POST['visaFees'];
		$newQuote->medicalExams = $_POST['medicalExams'];
		$newQuote->totalCost = $_POST['totalCourseCost'];
		////
		//
		//var_dump($newQuote);
		//
		$newQuote->createQuote();
		//
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
	<form id="insertClient" name="insertClient" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
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
					<input type="text" name="courseName" id="courseName" class="span2"/></td>
				<td width="109" bgcolor="#DFEBF4">College Name</td>
				<td width="172" bgcolor="#DFEBF4">
					<select class="span2" name="college" id="college">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select>
				</td>
				<td width="89" bgcolor="#DFEBF4">Location</td>
				<td width="160" bgcolor="#DFEBF4">
					<input type="text" class="span2" name="collegeLocation" id="collegeLocation"/>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Current Course End Date</td>
				<td bgcolor="#F2F2F2">
					<input type="text" name="currentCourseEndDate" id="currentCourseEndDate"
					       class="datePicker auto-hint span2" title="yyyy/mm/dd"/>
				</td>
				<td bgcolor="#F2F2F2">New Course Start Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseStartDate" id="newCourseStartDate"
				                             class="datePicker auto-hint span2" title="yyyy/mm/dd"/></td>
				<td bgcolor="#F2F2F2">New Course End Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseEndDate" id="newCourseEndDate"
				                             class="datePicker auto-hint span2" title="yyyy/mm/dd"/></td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Cost per Week</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="weeklyCost" id="weeklyCost" class="auto-hint span2"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Materials (AU$)
				</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="materialsCost" id="materialsCost" class="auto-hint span2"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Duration (Weeks)</td>
				<td bgcolor="#F2F2F2">
					<select name="courseDuration" id="courseDuration" class="input-mini">
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td bgcolor="#DFEBF4">Time Table</td>
				<td bgcolor="#DFEBF4">
					<select name="courseTimeTable" class="span2" id="courseTimeTable">
						<option value="NaN">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select>
				</td>
				<td bgcolor="#DFEBF4">Enrolment Fee</td>
				<td bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" class="span2" name="courseEnrolmentFee" id="courseEnrolmentFee"
						       placeholder="Enroolment Fee AU$"/>
					</div>
				</td>
				<td bgcolor="#DFEBF4">Instalment Fee</td>
				<td colspan="3" bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="instalmentFee" id="instalmentFee" class="input-mini"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Deposit</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="deposit" id="deposit" class="auto-hint span2"
						       placeholder="Deposit AU$"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Bond</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="bond" id="bond" class="auto-hint span2" placeholder="If eligible AU$"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Holidays Duration (Weeks)</td>
				<td bgcolor="#F2F2F2">
					<select name="holidaysDuration" id="holidaysDuration" class="input-mini">
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Instalment No. 1</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="courseInstalment" id="courseInstalment" class="span2"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">&nbsp;</td>
				<td bgcolor="#F2F2F2">
					<a style="cursor:pointer; font-size:11px" onclick="addNewInst(2);"
					   title="You can add UP to 4 Instalments" id="addMoreInst2">+ Add more instalments</a>
				</td>
				<td colspan="4" bgcolor="#F2F2F2">&nbsp;

				</td>
			</tr>
		</table>
	</div>
	<!-- Additional Instalments -->
	<div class="moreInstalments" id="moreInstalments2">
		<!-- -->
		<legend>Instalment 2</legend>
		<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
			<tr>
				<td width="102" bgcolor="#DFEBF4">Course Name</td>
				<td width="190" bgcolor="#DFEBF4">
					<input type="text" name="courseName2" id="courseName2" class="span2"/></td>
				<td width="109" bgcolor="#DFEBF4">College Name</td>
				<td width="172" bgcolor="#DFEBF4">
					<select class="span2" name="college2" id="college2">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select>
				</td>
				<td width="89" bgcolor="#DFEBF4">Location</td>
				<td width="160" bgcolor="#DFEBF4">
					<input type="text" class="span2" name="collegeLocation2" id="collegeLocation2"/>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">&nbsp;</td>
				<td bgcolor="#F2F2F2">&nbsp;</td>
				<td bgcolor="#F2F2F2">New Course Start Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseStartDate2" id="newCourseStartDate2"
				                             class="datePicker auto-hint span2" title="yyyy/mm/dd"/></td>
				<td bgcolor="#F2F2F2">New Course End Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseEndDate2" id="newCourseEndDate2"
				                             class="datePicker auto-hint span2" title="yyyy/mm/dd"/></td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Cost per Week</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="weeklyCost2" id="weeklyCost2" class="auto-hint span2"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Materials (AU$)
				</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="materialsCost2" id="materialsCost2" class="auto-hint span2"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Duration (Weeks)</td>
				<td bgcolor="#F2F2F2">
					<select name="courseDuration2" id="courseDuration2" class="input-mini">
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td bgcolor="#DFEBF4">Time Table</td>
				<td bgcolor="#DFEBF4">
					<select name="courseTimeTable2" class="span2" id="courseTimeTable2">
						<option value="">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select>
				</td>
				<td bgcolor="#DFEBF4">Enrolment Fee</td>
				<td bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" class="span2" name="courseEnrolmentFee2" id="courseEnrolmentFee2"
						       placeholder="Enrolment Fee AU$"/>
					</div>
				</td>
				<td bgcolor="#DFEBF4">Instalment Fee</td>
				<td colspan="3" bgcolor="#DFEBF4">
					<div class="input-prepend pull-left">
						<span class="add-on">$</span>
						<input type="text" name="instalmentFee2" id="instalmentFee2" class="input-mini"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Holidays Duration (Weeks)</td>
				<td bgcolor="#F2F2F2">
					<select name="holidaysDuration" id="holidaysDuration" class="input-mini">
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
				<td bgcolor="#F2F2F2">Instalment No. 2</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="courseInstalment2" id="courseInstalment2" class="span2"/>
					</div>
				</td>
				<td colspan="4" bgcolor="#F2F2F2">
					<a style="cursor:pointer; font-size:11px" onclick="addNewInst(3);"
					   title="You can add UP to 4 Instalments" id="addMoreInst3">+ Add more instalments</a>
				</td>
			</tr>
		</table>
	</div>
	<!-- -->
	<div class="moreInstalments" id="moreInstalments3">
		<!-- -->
		<legend>Instalment 3</legend>
		<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
			<tr>
				<td width="102" bgcolor="#DFEBF4">Course Name</td>
				<td width="190" bgcolor="#DFEBF4">
					<input type="text" name="courseName3" id="courseName3" class="span2"/></td>
				<td width="109" bgcolor="#DFEBF4">College Name</td>
				<td width="172" bgcolor="#DFEBF4">
					<select class="span2" name="college3" id="college3">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select>
				</td>
				<td width="89" bgcolor="#DFEBF4">Location</td>
				<td width="160" bgcolor="#DFEBF4">
					<input type="text" class="span2" name="collegeLocation3" id="collegeLocation3"/>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">&nbsp;</td>
				<td bgcolor="#F2F2F2">&nbsp;</td>
				<td bgcolor="#F2F2F2">New Course Start Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseStartDate3" id="newCourseStartDate3"
				                             class="datePicker auto-hint span2" title="yyyy/mm/dd"/></td>
				<td bgcolor="#F2F2F2">New Course End Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseEndDate3" id="newCourseEndDate3"
				                             class="datePicker auto-hint span2" title="yyyy/mm/dd"/></td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Cost per Week</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="weeklyCost3" id="weeklyCost3" class="auto-hint span2"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Materials (AU$)
				</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="materialsCost3" id="materialsCost3" class="auto-hint span2"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Duration (Weeks)</td>
				<td bgcolor="#F2F2F2">
					<select name="courseDuration3" id="courseDuration3" class="input-mini">
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td bgcolor="#DFEBF4">Time Table</td>
				<td bgcolor="#DFEBF4">
					<select name="courseTimeTable3" class="span2" id="courseTimeTable3">
						<option value="">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select>
				</td>
				<td bgcolor="#DFEBF4">Enrolment Fee</td>
				<td bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" class="span2" name="courseEnrolmentFee3" id="courseEnrolmentFee3"/>
					</div>
				</td>
				<td bgcolor="#DFEBF4">Instalment Fee</td>
				<td colspan="3" bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="instalmentFee3" id="instalmentFee3" class="input-mini"/>
					</div>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Holidays Duration (Weeks)</td>
				<td bgcolor="#F2F2F2">
					<select name="holidaysDuration3" id="holidaysDuration3" class="input-mini">
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
				<td bgcolor="#F2F2F2">Instalment No. 3</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="courseInstalment3" id="courseInstalment3" class="span2"/>
					</div>
				</td>
				<td colspan="4" bgcolor="#F2F2F2">
					<a style="cursor:pointer; font-size:11px" onclick="addNewInst(4);"
					   title="You can add UP to 4 Instalments" id="addMoreInst4">+ Add more instalments</a>
				</td>
			</tr>
		</table>
	</div>
	<!-- -->
	<div class="moreInstalments" id="moreInstalments4">
		<!-- -->
		<legend>Instalment 4</legend>
		<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
			<tr>
				<td width="102" bgcolor="#DFEBF4">Course Name</td>
				<td width="190" bgcolor="#DFEBF4">
					<input type="text" name="courseName4" id="courseName4" class="span2"/></td>
				<td width="109" bgcolor="#DFEBF4">College Name</td>
				<td width="172" bgcolor="#DFEBF4">
					<select class="span2" name="college4" id="college4">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select>
				</td>
				<td width="89" bgcolor="#DFEBF4">Location</td>
				<td width="160" bgcolor="#DFEBF4">
					<input type="text" class="span2" name="collegeLocation4" id="collegeLocation4"/>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">&nbsp;</td>
				<td bgcolor="#F2F2F2">&nbsp;</td>
				<td bgcolor="#F2F2F2">New Course Start Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseStartDate4" id="newCourseStartDate4"
				                             class="datePicker auto-hint span2" title="yyyy/mm/dd"/></td>
				<td bgcolor="#F2F2F2">New Course End Date</td>
				<td bgcolor="#F2F2F2"><input type="text" name="newCourseEndDate4" id="newCourseEndDate4"
				                             class="datePicker auto-hint span2" title="yyyy/mm/dd"/></td>
			</tr>
			<tr>
				<td bgcolor="#DFEBF4">Cost per Week</td>
				<td bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="weeklyCost4" id="weeklyCost4" class="auto-hint span2"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td bgcolor="#DFEBF4">Materials (AU$)
				</td>
				<td bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="materialsCost4" id="materialsCost4" class="auto-hint span2"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td bgcolor="#DFEBF4">Duration (Weeks)</td>
				<td bgcolor="#DFEBF4">
					<select name="courseDuration4" id="courseDuration4" class="input-mini">
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td bgcolor="#F2F2F2">Time Table</td>
				<td bgcolor="#F2F2F2">
					<select name="courseTimeTable4" class="span2" id="courseTimeTable4">
						<option value="">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select>
				</td>
				<td bgcolor="#F2F2F2">Enrolment Fee</td>
				<td bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" class="span2" name="courseEnrolmentFee4" id="courseEnrolmentFee4"/>
					</div>
				</td>
				<td bgcolor="#F2F2F2">Instalment Fee</td>
				<td colspan="3" bgcolor="#F2F2F2">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="instalmentFee4" id="instalmentFee4" class="input-mini"/>
					</div>
				</td>
			</tr>
			<tr>
				<td bgcolor="#DFEBF4">Holidays Duration (Weeks)</td>
				<td bgcolor="#DFEBF4">
					<select name="holidaysDuration4" id="holidaysDuration4" class="input-mini">
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
				<td bgcolor="#DFEBF4">Instalment No. 4</td>
				<td bgcolor="#DFEBF4">
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="courseInstalment4" id="courseInstalment4" class="span2"/>
					</div>
				</td>
				<td colspan="4" bgcolor="#DFEBF4">&nbsp;

				</td>
			</tr>
		</table>
	</div>
	<!-- -->
	<!-- Aditional Instalments END -->
	</td>
	<script type="text/javascript">
	/**/
	var weeklyCost;
	var courseDuration;
	var materiales;
	var enrolmentFee;
	var instalmentFee;
	var instalmentOne;
	var courseInstalment;
	var bond;
	var totalCourseCost;
	//
	var materiales;
	var enrolmentFee;
	var instalmentFee;
	//
	var courseInstalment = $("#courseInstalment").val() * 1;
	var courseInstalment2 = $("#courseInstalment2").val() * 1;
	var courseInstalment3 = $("#courseInstalment3").val() * 1;
	var courseInstalment4 = $("#courseInstalment4").val() * 1;
	//
	var totalInstCost;
	//alert (courseInstalment+' '+courseInstalment2+' '+courseInstalment3+' '+courseInstalment4);
	//
	$('.moreInstalments').hide();

	// Instalment 1

	//
	$("#instalmentFee").change(function () {
		weeklyCost = $("#weeklyCost").val() * 1;
		courseDuration = $("#courseDuration").val() * 1;
		materialsCost = $("#materialsCost").val() * 1;
		courseEnrolmentFee = $("#courseEnrolmentFee").val() * 1;
		instalmentFee = $("#instalmentFee").val() * 1;
		//
		instalmentOne = weeklyCost * courseDuration + materialsCost + courseEnrolmentFee + instalmentFee;
		//
		alert('Weekly Cost $' + weeklyCost + ' Materials Cost $' + materialsCost + ' Course duration (Wks) ' + courseDuration + ' Enrolment Fee $' + courseEnrolmentFee + ' Instalment Fee $' + instalmentFee + '\n' + 'Total :' + instalmentOne + '\n');
		//
		$('#courseInstalment').val(instalmentOne) * 1;
	})
	// Rest Bond to Total Course Cost
	$("#bond").change(function () {
		instalmentVal = $('#courseInstalment').val() * 1;
		bond = $('#bond').val() * 1;
		//
		totalInstCost = instalmentVal - bond;
		//
		$('#courseInstalment').val(totalInstCost) * 1;
		//
		if ($('#courseInstalment').change()) {
			alert('NEW VALUE! ' + $('#courseInstalment').val() + '\n');
		}
	});
	$("#courseInstalment").change(function () {
		totalInstCost = $('#courseInstalment').val();
		//alert('SOMETHING'+totalInstCost+'\n\n');
		$('#totalCourseCost').val(totalInstCost);
	});
	//
	$("#deposit").change(function () {
		var deposit = $('#deposit').val() * 1;
		var instalment = $('#courseInstalment').val() * 1;
		if (deposit > 0) {
			totalInstCost = instalment + deposit;
			alert('The value to pay... ' + totalInstCost + '\n\n');
			$('#courseInstalment').val(totalInstCost);
			$('#totalCourseCost').val(totalInstCost);
		}
	});
	//
	/*
	 if ($('#courseInstalment').val() != 0){
	 $("#courseDuration").change( function() {
	 weeklyCost = $("#weeklyCost").val()*1;
	 courseDuration = $("#courseDuration").val()*1;
	 materialsCost = $("#materialsCost").val()*1;
	 courseEnrolmentFee = $("#courseEnrolmentFee").val()*1;
	 instalmentFee  = $("#instalmentFee").val()*1;
	 //
	 alert(weeklyCost+' '+courseDuration+' '+materialsCost+' '+courseEnrolmentFee)
	 //var temp = instalmentOne*1;
	 //
	 instalmentOne = weeklyCost*courseDuration+materialsCost+courseEnrolmentFee;
	 $('#courseInstalment').val(instalmentOne)*1;
	 });
	 //
	 //
	 $("#instalmentFee").change(function() {
	 instalmentFee = $("#instalmentFee").val()*1;
	 if (instalmentFee !=''){
	 //
	 materiales = $("#materialsCost").val()*1;
	 enrolmentFee = $("#courseEnrolmentFee").val()*1;
	 test = (temp+materiales+enrolmentFee);
	 alert(test+'\n');
	 instalmentOne = (temp + materiales + enrolmentFee + instalmentFee);
	 $('#courseInstalment').val(instalmentOne);
	 }
	 });
	 }

	 /**/
	function addNewInst(instalment) {

		switch (instalment) {
			case 2:
				$('#moreInstalments2').show('slow');
				$('#addMoreInst2').remove();
				break;

			case 3:
				$('#moreInstalments3').show('slow');
				$('#addMoreInst3').remove();
				break;

			case 4:
				$('#moreInstalments4').show('slow');
				$('#addMoreInst4').remove();
				break;
		}
	}
	/**/
	/*
	 if ($('#weeklyCost').change( function() {
	 if ($('#courseInstalment').val() !=0){
	 weeklyCost = $("#weeklyCost").val();
	 courseDuration = $("#courseDuration").val();
	 instalmentOne = (weeklyCost * courseDuration) + materials + enrolmentFee + instalmentFee;
	 $('#courseInstalment').val(0);
	 //
	 $('#courseInstalment').val(instalmentOne);
	 //alert('NEW Instalment Value $: '+instalmentOne+'\n')
	 }
	 })
	 );
	 */
	// Instalment 2

	//
	$("#instalmentFee2").change(function () {
		weeklyCost = $("#weeklyCost2").val() * 1;
		courseDuration = $("#courseDuration2").val() * 1;
		materialsCost = $("#materialsCost2").val() * 1;
		courseEnrolmentFee = $("#courseEnrolmentFee2").val() * 1;
		instalmentFee = $("#instalmentFee2").val() * 1;
		//
		instalmentTwo = weeklyCost * courseDuration + materialsCost + courseEnrolmentFee + instalmentFee;
		$('#courseInstalment2').val(instalmentTwo) * 1;
		//
		alert('Weekly Cost $' + weeklyCost + ' Materials Cost $' + materialsCost + ' Course duration (Wks) ' + courseDuration + ' Enrolment Fee $' + courseEnrolmentFee + ' Instalment Fee $' + instalmentFee + '\n' + 'Total :' + instalmentTwo + '\n');
		//var temp = instalmentOne*1;
	});
	//
	// Instalment 3

	//
	$("#instalmentFee3").change(function () {
		weeklyCost = $("#weeklyCost3").val() * 1;
		courseDuration = $("#courseDuration3").val() * 1;
		materialsCost = $("#materialsCost3").val() * 1;
		courseEnrolmentFee = $("#courseEnrolmentFee3").val() * 1;
		instalmentFee = $("#instalmentFee3").val() * 1;
		//
		instalmentThree = weeklyCost * courseDuration + materialsCost + courseEnrolmentFee + instalmentFee;
		$('#courseInstalment3').val(instalmentThree) * 1;
		//
		alert('Weekly Cost $' + weeklyCost + ' Materials Cost $' + materialsCost + ' Course duration (Wks) ' + courseDuration + ' Enrolment Fee $' + courseEnrolmentFee + ' Instalment Fee $' + instalmentFee + '\n' + 'Total :' + instalmentThree + '\n');
		//var temp = instalmentOne*1;
	});
	//

	// Instalment 4
	//
	$("#instalmentFee4").change(function () {
		weeklyCost = $("#weeklyCost4").val() * 1;
		courseDuration = $("#courseDuration4").val() * 1;
		materialsCost = $("#materialsCost4").val() * 1;
		courseEnrolmentFee = $("#courseEnrolmentFee4").val() * 1;
		instalmentFee = $("#instalmentFee4").val() * 1;
		bond = $("#bond").val() * 1;
		//
		instalmentFour = weeklyCost * courseDuration + materialsCost + courseEnrolmentFee + instalmentFee;
		$('#courseInstalment4').val(instalmentFour) * 1;
		//
		alert('Weekly Cost $' + weeklyCost + ' Materials Cost $' + materialsCost + ' Course duration (Wks) ' + courseDuration + ' Enrolment Fee $' + courseEnrolmentFee + ' Instalment Fee $' + instalmentFee + '\n' + 'Total :' + instalmentFour + '\n');
		//var temp = instalmentOne*1;
	});
	// Total Course Cost
	$("#instalmentFee").change(function () {

		totalCourseCost = $('#courseInstalment').val() - $("#bond").val() * 1;
		$('#totalCourseCost').val(totalCourseCost) * 1;
		alert('Total course AU$: ' + totalCourseCost + '\n');
	});
	//
	$("#instalmentFee2").change(function () {
		totalCourseCost = $('#courseInstalment').val() * 1 + $('#courseInstalment2').val() * 1;
		$('#totalCourseCost').val(totalCourseCost) * 1;
		alert('Total course AU$: ' + totalCourseCost + '\n');
	});
	//
	$("#instalmentFee3").change(function () {
		totalCourseCost = $('#courseInstalment').val() * 1 + $('#courseInstalment2').val() * 1 + $('#courseInstalment3').val() * 1;
		$('#totalCourseCost').val(totalCourseCost) * 1;
		alert('Total course AU$: ' + totalCourseCost + '\n');
	});
	//
	$("#instalmentFee4").change(function () {
		totalCourseCost = $('#courseInstalment').val() * 1 + $('#courseInstalment2').val() * 1 + $('#courseInstalment3').val() * 1 + $('#courseInstalment4').val() * 1;
		$('#totalCourseCost').val(totalCourseCost) * 1;
		alert('Total course AU$: ' + totalCourseCost + '\n');
	});
	//
	/*
	 $("#courseDuration4").change( function() {
	 weeklyCost = $("#weeklyCost4").val();
	 courseDuration = $("#courseDuration4").val();
	 instalmentOne = (weeklyCost * courseDuration/2);
	 $('#courseInstalment4').val(instalmentOne);
	 //alert(instalmentOne+'\n');
	 });
	 /*
	 if ($('#weeklyCost4').change( function() {
	 if ($('#courseInstalment4').val() !=0){
	 weeklyCost = $("#weeklyCost4").val();
	 courseDuration = $("#courseDuration4").val();
	 instalmentOne = (weeklyCost * courseDuration/2);
	 $('#courseInstalment4').val(0);
	 //
	 $('#courseInstalment4').val(instalmentOne);
	 //alert('NEW Instalment Value $: '+instalmentOne+'\n')
	 }
	 })
	 );

	 //if (courseInstalment != '' || courseInstalment2 != '' || courseInstalment3 != '' || courseInstalment4 != ''){
	 if (courseInstalment >0 || courseInstalment2 > 0 || courseInstalment3 > 0 || courseInstalment4 > 0);
	 alert (courseInstalment+' '+courseInstalment2+' '+courseInstalment3+' '+courseInstalment4+'\n');
	 if ( $('#courseInstalment').change(function() {
	 if ($('#courseInstalment').val() !=0){
	 totalCourseCost = (courseInstalment + courseInstalment2 + courseInstalment3 + courseInstalment4);
	 $('#totalCourseCost').val(totalCourseCost);
	 alert('TOTAL '+totalCourseCost+'\n');
	 }
	 })
	 );
	 */
	</script>
	</tr>

	<tr>
		<td colspan="6" bgcolor="#F2F2F2">
			<table class="table table-condensed">

				<tr>
					<td width="23%">
						<p class="span4">Medibank Health Cover</p>

						<div class="pull-left span2">
							Months: <select name="mediBankMonths" id="mediBankMonths" class="input-mini"
							                placeholder="Months">
								<?php for ($j = 1; $j <= 60; $j++) {
									echo '<option value="' . $j . '">' . $j . '</option>';
								}
								?>
							</select>
						</div>
						<div class="input-prepend pull-left span2">
							<span class="add-on">$</span>
							Cost AU$ :
							<input class="span2" id="prependedInput" placeholder="Cost AU$" type="text"
							       name="mediBankCost"/>
						</div>
					</td>
					<td width="44%">
						<div class="control-group span2">
							<div class="span2">
								<input type="radio" name="healthCoverType" value="single"/>Single
							</div>
							<div class="span2">
								<input type="radio" name="healthCoverType" value="couple"/>Couple
							</div>
							<div class="span2">
								<input type="radio" name="healthCoverType" value="family"/>Family
							</div>
						</div>
					</td>
					<td width="33%">
						<div class="input-prepend pull-left">
							<span class="add-on">$</span>
							<input type="text" class="span2" name="visaFees" id="visaFees" placeholder="Visa Fees AU$"/>
						</div>
						<div class="input-prepend pull-left">
							<span class="add-on">$</span>
							<input type="text" name="medicalExams" id="medicalExams" class="span2"
							       placeholder="Medical Exams AU$"/>
						</div>
					</td>
					<td width="33%">
						<p>Total Course Cost</p>

						<div class="input-prepend pull-left">
							<span class="add-on">$</span>
							<input type="text" class="span2" name="totalCourseCost" id="totalCourseCost"
							       placeholder="Total Course Cost AU$"/>
						</div>
					</td>
					<td width="33%">&nbsp;</td>
				</tr>
			</table>
		</td>
		<!-- <td bgcolor="#F2F2F2">&nbsp;</td> -->
	</tr>
	<tr>
		<td colspan="6">
			<div id="moreQuotes" name="moreQuotes"></div>
		</td>
	</tr>
	<tr>
		<td colspan="6">
			<div class="form-actions">
				<button type="submit" class="btn btn-primary" name="submit" id="submit">Save changes</button>
				<button type="reset" class="btn">Cancel</button>
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
