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
		//
		$newQuote->personID = $_POST['eaddress'];
		//////////////////////////////////
		$newDiplomaQuote->quoteType = $_POST['quoteType'];
		//
		$newQuote->quoteTitle = $_POST['quoteTitle'];
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
		//
		$newQuote->holidaysDuration = $_POST['holidaysDuration'];
		//
		$newQuote->weeklyCost = $_POST['weeklyCost'];
		//
		$newQuote->instalmentsNo = $_POST['instalmentsNo'];
		$newQuote->totalCourseFees = $_POST['totalCourseFees'];
		//
		$newQuote->materialsCost = $_POST['materialsCost'];
		$newQuote->courseEnrolmentFee = $_POST['courseEnrolmentFee'];
		$newQuote->courseInstalment = $_POST['courseInstalment'];
		$newQuote->deposit = $_POST['deposit'];
		$newQuote->bond = $_POST['bond'];
		$newQuote->instalmentFee = $_POST['instalmentFee'];
		$newQuote->instOne = $_POST['instOne'];
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
		//
		$newQuote->holidaysDuration2 = $_POST['holidaysDuration2'];
		//
		$newQuote->weeklyCost2 = $_POST['weeklyCost2'];
		$newQuote->materialsCost2 = $_POST['materialsCost2'];
		$newQuote->courseEnrolmentFee2 = $_POST['courseEnrolmentFee2'];
		$newQuote->courseInstalment2 = $_POST['courseInstalment2'];
		$newQuote->instalmentFee2 = $_POST['instalmentFee2'];
		$newQuote->instTwo = $_POST['instTwo'];
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
		//
		$newQuote->holidaysDuration3 = $_POST['holidaysDuration3'];
		//
		$newQuote->weeklyCost3 = $_POST['weeklyCost3'];
		$newQuote->materialsCost3 = $_POST['materialsCost3'];
		$newQuote->courseEnrolmentFee3 = $_POST['courseEnrolmentFee3'];
		$newQuote->courseInstalment3 = $_POST['courseInstalment3'];
		$newQuote->instalmentFee3 = $_POST['instalmentFee3'];
		$newQuote->instThree = $_POST['instThree'];
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
		$newQuote->holidaysDuration4 = $_POST['holidaysDuration4'];
		$newQuote->weeklyCost4 = $_POST['weeklyCost4'];
		$newQuote->materialsCost4 = $_POST['materialsCost4'];
		$newQuote->courseEnrolmentFee4 = $_POST['courseEnrolmentFee4'];
		$newQuote->courseInstalment4 = $_POST['courseInstalment4'];
		$newQuote->instalmentFee4 = $_POST['instalmentFee4'];
		$newQuote->instFour = $_POST['instFour'];
		//
		$newQuote->healthFund = $_POST['healthFund'];
		$newQuote->mediBankMonths = $_POST['mediBankMonths'];
		$newQuote->mediBankCost = $_POST['healthCost'];
		$newQuote->healthCoverType = $_POST['healthCoverType'];
		$newQuote->visaFees = $_POST['visaFees'];
		$newQuote->medicalExams = $_POST['medicalExams'];
		$newQuote->totalCost = $_POST['totalCourseCost'];
		$newQuote->quoteNotes = $_POST['quoteNotes'];
		////
		$newQuote->estimateOne = $_POST['estimateOne'];
		$newQuote->yourself = $_POST['yourself'];
		$newQuote->partner = $_POST['partner'];
		$newQuote->firstChild = $_POST['firstChild'];
		$newQuote->eachOtherChild = $_POST['eachOtherChild'];
		$newQuote->totalCourseCostInfo = $_POST['totalCourseCostInfo'];
		$newQuote->childresStudyFees = $_POST['childrenStudyFees'];
		$newQuote->ticketFees = $_POST['ticketFees'];
		$newQuote->grandSum = $_POST['totalFees'];
		////
		$newQuote->estimateTwo = $_POST['estimateTwo'];
		$newQuote->yourself2 = $_POST['yourself2'];
		$newQuote->partner2 = $_POST['partner2'];
		$newQuote->firstChild2 = $_POST['firstChild2'];
		$newQuote->eachOtherChild2 = $_POST['eachOtherChild2'];
		$newQuote->totalCourseCostInfo2 = $_POST['totalCourseCostInfo2'];
		$newQuote->childresStudyFees2 = $_POST['childrenStudyFees2'];
		$newQuote->ticketFees2 = $_POST['ticketFees2'];
		$newQuote->grandSum2 = $_POST['totalFees2'];
		//var_export($newQuote);exit;
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

			. {
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
	<input type="hidden" value="english" name="quoteType" id="quoteType"/>
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
					<td align="center" valign="middle"><h2>ENGLISH COURSE QUOTE </h2></td>
				</tr>
			</table>

		</td>
	</tr>

	<tr>
	<td align="left" valign="top">
	<fieldset>
	<legend>English Course Instalment No.1</legend>
	<input type="hidden" name="quoteNo" value="1" id="quoteNo1"/>
	<table border="0" cellspacing="1" cellpadding="4" class="table table-condensed">

	<tr>
	<td colspan="6">
	<div name="quotation">
		<table border="0" cellspacing="1" cellpadding="4" class="table table-hover">
			<tr>
				<td height="0" colspan="4" align="left" valign="middle" bgcolor="#DFEBF4">
					<div class="input-prepend">
						<span class="add-on">Quote Title</span>
						<input name="quoteTitle" type="text" class="span9" id="prependedInput"
						       placeholder="What are the Courses on this Quote..." maxlength="100">
					</div>
				</td>
			</tr>
			<tr>
				<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2">Course Name<br>
					<input type="text" name="courseName" id="courseName" class="span2"/></td>
				<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">College Name<br>
					<select class="span2" name="college" id="college">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select></td>
				<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">Time Table<br>
					<select name="courseTimeTable" class="span2" id="courseTimeTable">
						<option value="NaN">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select></td>
				<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2"></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Current Course End Date<br>
					<input type="text" name="currentCourseEndDate" id="currentCourseEndDate" class="datePicker span2"
					       title="yyyy/mm/dd"/></td>
				<td height="0" bgcolor="#DFEBF4">New Course Start Date<br> <input type="text" name="newCourseStartDate"
				                                                                  id="newCourseStartDate"
				                                                                  class="datePicker span2"
				                                                                  title="yyyy/mm/dd"/></td>
				<td height="0" bgcolor="#DFEBF4">New Course End Date <br>
					<input type="text" name="newCourseEndDate" id="newCourseEndDate" class="datePicker span2"
					       title="yyyy/mm/dd"/></td>
				<td width="0" height="0" bgcolor="#DFEBF4">Holidays Duration (Weeks)<br>
					<select name="holidaysDuration" id="holidaysDuration" class="input-mini">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2">Cost per Week<br>

					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="weeklyCost" id="weeklyCost" class="span2 inst1"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td height="0" bgcolor="#F2F2F2">Duration (Weeks)<br>
					<select name="courseDuration" id="courseDuration" class="input-mini inst1 wk">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select>
				</td>
				<td height="0" bgcolor="#F2F2F2">Number of Instalments<br>
					<select name="instalmentsNo" id="instalmentsNo" class="input-mini inst1">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 4; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#F2F2F2"></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Enrolment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" class="span2 inst1" name="courseEnrolmentFee" id="courseEnrolmentFee"
						       placeholder="Enrolment Fee AU$"/>
					</div>
				</td>
				<td height="0" bgcolor="#DFEBF4">Materials (AU$)<br>

					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="materialsCost" id="materialsCost" class="span2 inst1"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td height="0" bgcolor="#DFEBF4">Instalment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="instalmentFee" id="instalmentFee" class="input-mini inst1"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
				<td height="0" colspan="3" bgcolor="#DFEBF4"></td>
			</tr>

			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2">Instalment No. 1
					<div class="input-prepend pull-left" style="margin-right:2em;">
						<span class="add-on">$</span>
						<input type="text" name="instOne" id="instOne" class="span2 inst1" value="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2">Total Instalment No. 1<br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input name="totalInstOne" type="text" class="span2 totalInstVal" id="totalInstOne"
						       placeholder=" " value="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2">
					<!-- SubTotal Course -->
					<div class="input-prepend pull-left" style="margin-right:2em; display:none">
						<span class="add-on">$</span>
						<input type="text" name="courseInstalment" id="courseInstalment" class="span2"/>
					</div>
				</td>
				<td height="0" colspan="3" bgcolor="#F2F2F2">

				</td>
			</tr>
		</table>
		<table width="100%" class="table table-condensed">
			<tr>
				<td width="0" height="0" align="left" valign="middle">Health Cover<br>
					<input type="text" name="healthFund" id="healthFund" class="span2" placeholder="Name"/></td>
				<td width="0" height="0" align="left" valign="middle"><span class="add-on">Cost AU$</span><br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input type="text" class="span2 inst1" name="healthCost" id="healthCost"
						       placeholder="Cost AU$"/>
					</div>
				</td>
				<td width="0" height="0" align="left" valign="middle">
					<div class="pull-left span2"> Months<br>
						<select name="mediBankMonths" id="mediBankMonths" class="input-mini" placeholder="Months">
							<option value="0">0</option>
							<?php for ($j = 1; $j <= 60; $j++) {
								echo '<option value="' . $j . '">' . $j . '</option>';
							}
							?>
						</select>
					</div>
				</td>
				<td width="0" height="0" align="left" valign="middle">
					<div class="control-group span2">
						<div class="span2">
							<input type="radio" name="healthCoverType" value="single"/>
							Single
						</div>
						<div class="span2">
							<input type="radio" name="healthCoverType" value="couple"/>
							Couple
						</div>
						<div class="span2">
							<input type="radio" name="healthCoverType" value="family"/>
							Family
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td width="0" height="0" align="left" valign="middle">Visas Fees AU$<br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input type="text" class="span2 inst1" name="visaFees" id="visaFees"
						       placeholder="Visa Fees AU$"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2" class="table table-hover"> Deposit<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="deposit" id="deposit" class="span2 inst1" placeholder="Deposit AU$"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2" class="table table-hover">(-) Bond<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="bond" id="bond" class="span2 inst1" placeholder="If eligible AU$"/>
					</div>
				</td>
				<td width="0" height="0" align="left" valign="middle" bgcolor="#CCCCCC"><strong>Total Amount Due
						Instalment No.1</strong><br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input type="text" class="span2 inst1" name="totalAmountDue" id="totalAmountDue"
						       placeholder="Total Amount Due AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="4" align="left" valign="middle">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3" align="left" valign="middle">Notes
					<textarea name="quoteNotes" id="textarea" rows="4" class="span9"></textarea></td>
				<td align="left" valign="middle"><a class="btn btn-success pull-right" onclick="addNewInst(2);"
				                                    title="You can add UP to 4 Instalments" id="addMoreInst">+ Add
						Instalment No.2</a></td>
			</tr>
		</table>
	</div>
	<!-- Additional Instalments -->
	<div class="moreInstalments" id="moreInstalments2">
		<!-- -->
		<legend>English Course Instalment No. 2 <a class="btn btn-small pull-right" onclick="removeInst(2)"><i
					class="icon-remove-sign"></i> Remove</a></legend>
		<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-hover table-condensed">
			<tr>
				<td height="0" bgcolor="#DFEBF4">Course Name<br> <input type="text" name="courseName2" id="courseName2"
				                                                        class="span2 inst2"/></td>
				<td width="0" height="0" bgcolor="#DFEBF4">College Name<br>
					<select class="span2 inst2" name="college2" id="college2">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#DFEBF4">Time Table<br>
					<select name="courseTimeTable2" class="span2 inst2" id="courseTimeTable2">
						<option value="NaN">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select></td>
			</tr>
			<tr>
				<td height="0" bgcolor="#F2F2F2">Holidays Duration (Weeks)<br>
					<select name="holidaysDuration2" id="holidaysDuration2" class="input-mini inst2">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#F2F2F2">New Course Start Date
					<br> <input type="text" name="newCourseStartDate2" id="newCourseStartDate2" class="datePicker span2"
					            title="yyyy/mm/dd"/></td>
				<td width="0" height="0" bgcolor="#F2F2F2">New Course End Date
					<br> <input type="text" name="newCourseEndDate2" id="newCourseEndDate2" class="datePicker span2"
					            title="yyyy/mm/dd"/></td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4">Cost per Week<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="weeklyCost2" id="weeklyCost2" class="span2 inst2"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Duration (Weeks)<br>
					<select name="courseDuration2" id="courseDuration2" class="input-mini inst2 wk">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#DFEBF4"></td>
			</tr>
			<tr>
				<td height="0" bgcolor="#F2F2F2">Enrolment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" class="span2 inst2" name="courseEnrolmentFee2" id="courseEnrolmentFee2"
						       placeholder="Enrolment Fee AU$"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2">Materials (AU$)<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="materialsCost2" id="materialsCost2" class="span2 inst2"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td height="0" colspan="3" bgcolor="#F2F2F2">Instalment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="instalmentFee2" id="instalmentFee2" class="input-mini inst2"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4">Instalment No. 2<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input name="instTwo" type="text" class="span2 inst2 totalInst" id="instTwo" value="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Total Instalment No. 2<br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input name="totalInstTwo" type="text" class="span2 totalInstVal" id="totalInstTwo"
						       placeholder="" value="0"/>
					</div>
				</td>
				<td height="0" colspan="3" bgcolor="#DFEBF4"><a class="btn btn-success pull-right"
				                                                onclick="addNewInst(3);"
				                                                title="You can add UP to 4 Instalments"
				                                                id="addMoreInst2">+ Add Instalment No.3</a></td>
			</tr>
		</table>
	</div>
	<!-- -->
	<div class="moreInstalments" id="moreInstalments3">
		<!-- -->
		<legend>English Course Instalment No. 3 <a class="btn btn-small pull-right" onclick="removeInst(3)"><i
					class="icon-remove-sign"></i> Remove</a></legend>

		<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-hover">
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Course Name<br> <input type="text" name="courseName3"
				                                                                  id="courseName3" class="span2 inst3"/>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">College Name<br>
					<select class="span2 inst3" name="college3" id="college3">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#DFEBF4">Time Table<br>
					<select name="courseTimeTable3" class="span2 inst3" id="courseTimeTable3">
						<option value="NaN">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2">Holidays Duration (Weeks)<br>
					<select name="holidaysDuration3" id="holidaysDuration3" class="input-mini inst3">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#F2F2F2">New Course Start Date<br> <input type="text"
				                                                                            name="newCourseStartDate3"
				                                                                            id="newCourseStartDate3"
				                                                                            class="datePicker span2"
				                                                                            title="yyyy/mm/dd"/></td>
				<td width="0" height="0" bgcolor="#F2F2F2">New Course End Date<br> <input type="text"
				                                                                          name="newCourseEndDate3"
				                                                                          id="newCourseEndDate3"
				                                                                          class="datePicker span2"
				                                                                          title="yyyy/mm/dd"/></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Cost per Week<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="weeklyCost3" id="weeklyCost3" class="span2 inst3"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Duration (Weeks)<br>
					<select name="courseDuration3" id="courseDuration3" class="input-mini inst3 wk">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#DFEBF4"></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2">Enrolment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" class="span2 inst3" name="courseEnrolmentFee3" id="courseEnrolmentFee3"
						       placeholder="Enrolment Fee AU$"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2">Materials (AU$)<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="materialsCost3" id="materialsCost3" class="span2 inst3"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td height="0" colspan="3" bgcolor="#F2F2F2">Instalment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="instalmentFee3" id="instalmentFee3" class="input-mini inst3"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Instalment No. 3<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input name="instThree" type="text" class="span2 inst3 totalInst" id="instThree" value="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Total Instalment No. 3<br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input name="totalInstThree" type="text" class="span2 totalInstVal" id="totalInstThree"
						       placeholder="" value="0"/>
					</div>
				</td>
				<td height="0" colspan="3" bgcolor="#DFEBF4"><a class="btn btn-success pull-right"
				                                                onclick="addNewInst(4);"
				                                                title="You can add UP to 4 Instalments"
				                                                id="addMoreInst3">+ Add Instalment No.4</a></td>
			</tr>
		</table>
	</div>
	<!-- -->
	<div class="moreInstalments" id="moreInstalments4">
		<!-- -->
		<legend>English Course Instalment No. 4 <a class="btn btn-small pull-right" onclick="removeInst(4)"><i
					class="icon-remove-sign"></i> Remove</a></legend>
		<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-hover">
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Course Name<br> <input type="text" name="courseName4"
				                                                                  id="courseName4" class="span2 inst4"
				                                                                  placeholder="Course Name"/></td>
				<td width="0" height="0" bgcolor="#DFEBF4">College Name<br>
					<select class="span2 inst4" name="college4" id="college4">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#DFEBF4">Time Table<br>
					<select name="courseTimeTable4" class="span2 inst4" id="courseTimeTable4">
						<option value="NaN">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2">Holidays Duration (Weeks)<br>
					<select name="holidaysDuration4" id="holidaysDuration4" class="input-mini inst4">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#F2F2F2">New Course Start Date<br> <input type="text"
				                                                                            name="newCourseStartDate4"
				                                                                            id="newCourseStartDate4"
				                                                                            class="datePicker span2"
				                                                                            title="yyyy/mm/dd"/></td>
				<td width="0" height="0" bgcolor="#F2F2F2">New Course End Date<br> <input type="text"
				                                                                          name="newCourseEndDate4"
				                                                                          id="newCourseEndDate4"
				                                                                          class="datePicker span2"
				                                                                          title="yyyy/mm/dd"/></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Cost per Week<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="weeklyCost4" id="weeklyCost4" class="span2 inst4"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Duration (Weeks)<br>
					<select name="courseDuration4" id="courseDuration4" class="input-mini inst4 wk">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" bgcolor="#DFEBF4"></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2">Enrolment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" class="span2 inst4" name="courseEnrolmentFee4" id="courseEnrolmentFee4"
						       placeholder="Enrolment Fee AU$"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2">Materials (AU$)<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="materialsCost4" id="materialsCost4" class="span2 inst4"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td height="0" colspan="3" bgcolor="#F2F2F2">Instalment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="instalmentFee4" id="instalmentFee4" class="input-mini inst4"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Instalment No. 4<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input name="instFour" type="text" class="span2 totalInst" id="instFour" value="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Total Instalment No. 4<br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input name="totalInstFour" type="text" class="span2 totalInstVal" id="totalInstFour"
						       placeholder="" value="0"/>
					</div>
				</td>
				<td height="0" colspan="3" bgcolor="#DFEBF4">
					<!-- <a style="cursor:pointer; font-size:11px" onclick="addNewInst(4);" title="You can add UP to 4 Instalments" id="addMoreInst4">+ Add more instalments</a> -->
				</td>
			</tr>
		</table>
	</div>
	<!-- -->
	<!-- Aditional Instalments END -->
	</td>
	</tr>

	<tr>
		<td colspan="6">
			<div id="moreQuotes" name="moreQuotes">

				<table width="100%" border="0">
					<tr>
						<td bgcolor="#CCCCCC"><strong>Total Study Weeks</strong><br>

							<div class="input-prepend pull-left"><span class="add-on">#</span>
								<input type="text" class="span2 inst1" name="totalStudyWeeks" id="totalStudyWeeks"
								       placeholder=""/>
							</div>
						</td>
						<td bgcolor="#CCCCCC"><strong>Total Instalment(s)</strong><br>

							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input name="totalInstalmentsVal" type="text" class="span2 inst1"
								       id="totalInstalmentsVal" value="0"/>
							</div>
						</td>
						<td bgcolor="#CCCCCC"><strong>Total Course(s) Fee</strong><br>

							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input name="totalCoursesFee" type="text" class="span2 inst1" id="totalCoursesFee"
								       placeholder="" value="0"/>
							</div>
						</td>
					</tr>
				</table>
				<br>
				<table border="0" cellspacing="1" cellpadding="2" style="width:100%;"
				       class="table table-hover table-condensed">
					<tr style="line-height:10px;">
						<td colspan="4" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							<legend>Financial requirements for your stay in Australia</legend>
						</td>
					</tr>
					<tr>
						<td width="27%" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">Expenses</td>
						<td width="38%" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">Per Person
						</td>
						<td width="35%" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">Amount
							Required in AUD<br><input type="text" class="input-small span2" name="estimateOne"
							                          id="estimateOne" placeholder="x Duration"></td>
						<td width="35%" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">Amount
							Required in AUD<br><input type="text" class="input-small span2" name="estimateTwo"
							                          id="estimateTwo" placeholder="x Duration"></td>
					</tr>
					<tr>
						<td rowspan="4" align="left" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							<strong>Living</strong></td>
						<td bgcolor="#FFFFFF" class="tex">Yourself (18.610 AUD /Year)</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left">
								<span class="add-on">$</span><input type="text" class="span2 genInfo" id="yourself"
								                                    name="yourself" placeholder="Cost AU$"/></div>
						</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 genInfo2" id="yourself2" name="yourself2"
								       placeholder="Cost AU$"/>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" class="tex">Partner (6.300 AUD/Year)</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left">
								<span class="add-on">$</span><input type="text" class="span2 genInfo" id="partner"
								                                    name="partner" placeholder="Cost AU$"/></div>
						</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 genInfo2" id="partner2" name="partner2"
								       placeholder="Cost AU$"/>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" class="tex">First Child (3.600 AUD/Year)</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left">
								<span class="add-on">$</span><input type="text" class="span2 genInfo" id="firstChild"
								                                    name="firstChild" placeholder="Cost AU$"/></div>
						</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 genInfo2" id="firstChild2" name="firstChild2"
								       placeholder="Cost AU$"/>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" class="tex">Each Other Child (2.7000 AUD/Year)</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left">
								<span class="add-on">$</span><input type="text" class="span2 genInfo"
								                                    id="eachOtherChild" name="eachOtherChild"
								                                    placeholder="Cost AU$"/></div>
						</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 genInfo2" id="eachOtherChild2" name="eachOtherChild2"
								       placeholder="Cost AU$"/>
							</div>
						</td>
					</tr>
					<tr>
						<td rowspan="2" align="left" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							<strong>Tuition</strong></td>
						<td bgcolor="#FFFFFF" class="tex">Study Fees</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left">
								<span class="add-on">$</span><input type="text" class="span2 genInfo"
								                                    id="totalCourseCostInfo" name="totalCourseCostInfo"
								                                    placeholder="Cost AU$"/></div>
						</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 genInfo2" id="totalCourseCostInfo2"
								       name="totalCourseCostInfo2" placeholder="Cost AU$"/>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" class="tex">Children Study Fees</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left">
								<span class="add-on">$</span><input type="text" class="span2 genInfo"
								                                    id="childrenStudyFees" name="childrenStudyFees"
								                                    placeholder="Cost AU$"/></div>
						</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 genInfo2" id="childrenStudyFees2"
								       name="childrenStudyFees2" placeholder="Cost AU$"/>
							</div>
						</td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#FFFFFF" class="tex-white"><strong>Travel Return Air
								fare</strong></td>
						<td bgcolor="#FFFFFF" class="tex">Ticket Fees</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left">
								<span class="add-on">$</span><input type="text" class="span2 genInfo" id="ticketFees"
								                                    name="ticketFees" placeholder="Cost AU$"/></div>
						</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 genInfo2" id="ticketFees2" name="ticketFees2"
								       placeholder="Cost AU$"/>
							</div>
						</td>
					</tr>
					<tr>
						<td align="right" valign="middle" bgcolor="#FFFFFF" class="tex-white"><strong>Total
								Fees</strong></td>
						<td bgcolor="#FFFFFF">&nbsp;</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF">
							<div class="input-prepend pull-left">
								<span class="add-on">$</span><input type="text" class="span2 genInfo" id="totalFees"
								                                    name="totalFees" placeholder="Cost AU$"/></div>
						</td>
						<td align="right" valign="middle" bgcolor="#FFFFFF">
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2 genInfo2" id="totalFees2" name="totalFees2"
								       placeholder="Cost AU$"/>
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
				<button type="submit" class="btn btn-primary pull-right" name="submit" id="submit">Save changes</button>
				<button type="reset" class="btn btn-warning pull-left">Reset</button>
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
	<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	<script src="js/quotesOps.js" type="text/javascript"></script>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
