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
		$linkedTo = $GET_['linkedTo'];
		$docType = 'Diploma';
	}
//
	if (isset($_POST['submit'])) {
		//
		require('classes/quoteDp.php');
		//
		$newDiplomaQuote = new quoteDp();
		//
		//
		$newDiplomaQuote->personID = $_POST['eaddress'];
		//////////////////////////////////
		$newDiplomaQuote->linkedTo = $_POST['linkedTo'];
		$newDiplomaQuote->quoteType = $_POST['quoteType'];
		//
		$newDiplomaQuote->quoteTitle = $_POST['quoteTitle'];
		//
		$newDiplomaQuote->courseName = $_POST['courseName'];
		$newDiplomaQuote->college = $_POST['college'];
		$newDiplomaQuote->collegeLocation = $_POST['collegeLocation'];
		//
		if ($_POST['currentCourseEndDate'] == "yyyy/mm/dd") {
			$_POST['currentCourseEndDate'] = '0000-00-00';
		}
		$newDiplomaQuote->currentCourseEndDate = $_POST['currentCourseEndDate'];
		//
		if ($_POST['newCourseStartDate'] == "yyyy/mm/dd") {
			$_POST['newCourseStartDate'] = '0000-00-00';
		}
		$newDiplomaQuote->newCourseStartDate = $_POST['newCourseStartDate'];
		//
		if ($_POST['newCourseEndDate'] == "yyyy/mm/dd") {
			$_POST['newCourseEndDate'] = '0000-00-00';
		}
		$newDiplomaQuote->newCourseEndDate = $_POST['newCourseEndDate'];
		$newDiplomaQuote->courseDuration = $_POST['courseDuration'];
		$newDiplomaQuote->courseTimeTable = $_POST['courseTimeTable'];
		//
		$newDiplomaQuote->holidaysDuration = $_POST['holidaysDuration'];
		//
		$newDiplomaQuote->weeklyCost = $_POST['weeklyCost'];
		//
		$newDiplomaQuote->instalmentsNo = $_POST['instalmentsNo'];
		$newDiplomaQuote->totalCourseFees = $_POST['totalCourseFees'];
		//
		$newDiplomaQuote->materialsCost = $_POST['materialsCost'];
		$newDiplomaQuote->courseEnrolmentFee = $_POST['courseEnrolmentFee'];
		$newDiplomaQuote->courseInstalment = $_POST['courseInstalment'];
		$newDiplomaQuote->deposit = $_POST['deposit'];
		$newDiplomaQuote->bond = $_POST['bond'];
		$newDiplomaQuote->instalmentFee = $_POST['instalmentFee'];
		$newDiplomaQuote->instOne = $_POST['instOne'];
		$newDiplomaQuote->remainingCost = $_POST['remainingCost'];
		//
		$newDiplomaQuote->courseName2 = $_POST['courseName2'];
		$newDiplomaQuote->college2 = $_POST['college2'];
		$newDiplomaQuote->collegeLocation2 = $_POST['collegeLocation2'];
		//
		if ($_POST['newCourseStartDate2'] == "yyyy/mm/dd") {
			$_POST['newCourseStartDate2'] = '0000-00-00';
		}
		$newDiplomaQuote->newCourseStartDate2 = $_POST['newCourseStartDate2'];
		//
		if ($_POST['newCourseEndDate2'] == "yyyy/mm/dd") {
			$_POST['newCourseEndDate2'] = '0000-00-00';
		}
		$newDiplomaQuote->newCourseEndDate2 = $_POST['newCourseEndDate2'];
		$newDiplomaQuote->courseDuration2 = $_POST['courseDuration2'];
		$newDiplomaQuote->courseTimeTable2 = $_POST['courseTimeTable2'];
		//
		$newDiplomaQuote->holidaysDuration2 = $_POST['holidaysDuration2'];
		//
		$newDiplomaQuote->weeklyCost2 = $_POST['weeklyCost2'];
		$newDiplomaQuote->materialsCost2 = $_POST['materialsCost2'];
		$newDiplomaQuote->courseEnrolmentFee2 = $_POST['courseEnrolmentFee2'];
		$newDiplomaQuote->courseInstalment2 = $_POST['courseInstalment2'];
		$newDiplomaQuote->instalmentFee2 = $_POST['instalmentFee2'];
		$newDiplomaQuote->instTwo = $_POST['instTwo'];
		$newDiplomaQuote->remainingCost2 = $_POST['remainingCost2'];
		//
		$newDiplomaQuote->courseName3 = $_POST['courseName3'];
		$newDiplomaQuote->college3 = $_POST['college3'];
		$newDiplomaQuote->collegeLocation3 = $_POST['collegeLocation3'];
		//
		if ($_POST['newCourseStartDate3'] == "yyyy/mm/dd") {
			$_POST['newCourseStartDate3'] = '0000-00-00';
		}
		$newDiplomaQuote->newCourseStartDate3 = $_POST['newCourseStartDate3'];
		//
		if ($_POST['newCourseEndDate3'] == "yyyy/mm/dd") {
			$_POST['newCourseEndDate3'] = '0000-00-00';
		}
		$newDiplomaQuote->newCourseEndDate3 = $_POST['newCourseEndDate3'];
		$newDiplomaQuote->courseDuration3 = $_POST['courseDuration3'];
		$newDiplomaQuote->courseTimeTable3 = $_POST['courseTimeTable3'];
		//
		$newDiplomaQuote->holidaysDuration3 = $_POST['holidaysDuration3'];
		//
		$newDiplomaQuote->weeklyCost3 = $_POST['weeklyCost3'];
		$newDiplomaQuote->materialsCost3 = $_POST['materialsCost3'];
		$newDiplomaQuote->courseEnrolmentFee3 = $_POST['courseEnrolmentFee3'];
		$newDiplomaQuote->courseInstalment3 = $_POST['courseInstalment3'];
		$newDiplomaQuote->instalmentFee3 = $_POST['instalmentFee3'];
		$newDiplomaQuote->instThree = $_POST['instThree'];
		$newDiplomaQuote->remainingCost3 = $_POST['remainingCost3'];
		//
		$newDiplomaQuote->courseName4 = $_POST['courseName4'];
		$newDiplomaQuote->college4 = $_POST['college4'];
		$newDiplomaQuote->collegeLocation4 = $_POST['collegeLocation4'];
		//
		if ($_POST['newCourseStartDate4'] == "yyyy/mm/dd") {
			$_POST['newCourseStartDate4'] = '0000-00-00';
		}
		$newDiplomaQuote->newCourseStartDate4 = $_POST['newCourseStartDate4'];
		//
		if ($_POST['newCourseEndDate4'] == "yyyy/mm/dd") {
			$_POST['newCourseEndDate4'] = '0000-00-00';
		}
		$newDiplomaQuote->newCourseEndDate4 = $_POST['newCourseEndDate4'];
		$newDiplomaQuote->courseDuration4 = $_POST['courseDuration4'];
		$newDiplomaQuote->courseTimeTable4 = $_POST['courseTimeTable4'];
		$newDiplomaQuote->holidaysDuration4 = $_POST['holidaysDuration4'];
		$newDiplomaQuote->weeklyCost4 = $_POST['weeklyCost4'];
		$newDiplomaQuote->materialsCost4 = $_POST['materialsCost4'];
		$newDiplomaQuote->courseEnrolmentFee4 = $_POST['courseEnrolmentFee4'];
		$newDiplomaQuote->courseInstalment4 = $_POST['courseInstalment4'];
		$newDiplomaQuote->instalmentFee4 = $_POST['instalmentFee4'];
		$newDiplomaQuote->instFour = $_POST['instFour'];
		$newDiplomaQuote->remainingCost4 = $_POST['remainingCost4'];
		//
		$newDiplomaQuote->healthFund = $_POST['healthFund'];
		$newDiplomaQuote->mediBankMonths = $_POST['mediBankMonths'];
		$newDiplomaQuote->mediBankCost = $_POST['healthCost'];
		$newDiplomaQuote->healthCoverType = $_POST['healthCoverType'];
		$newDiplomaQuote->visaFees = $_POST['visaFees'];
		$newDiplomaQuote->medicalExams = $_POST['medicalExams'];
		$newDiplomaQuote->totalCost = $_POST['totalCourseCost'];
		$newDiplomaQuote->quoteNotes = $_POST['quoteNotes'];
		////
		$newDiplomaQuote->estimateOne = $_POST['estimateOne'];
		$newDiplomaQuote->yourself = $_POST['yourself'];
		$newDiplomaQuote->partner = $_POST['partner'];
		$newDiplomaQuote->firstChild = $_POST['firstChild'];
		$newDiplomaQuote->eachOtherChild = $_POST['eachOtherChild'];
		$newDiplomaQuote->totalCourseCostInfo = $_POST['totalCourseCostInfo'];
		$newDiplomaQuote->childresStudyFees = $_POST['childrenStudyFees'];
		$newDiplomaQuote->ticketFees = $_POST['ticketFees'];
		$newDiplomaQuote->grandSum = $_POST['totalFees'];
		////
		$newDiplomaQuote->estimateTwo = $_POST['estimateTwo'];
		$newDiplomaQuote->yourself2 = $_POST['yourself2'];
		$newDiplomaQuote->partner2 = $_POST['partner2'];
		$newDiplomaQuote->firstChild2 = $_POST['firstChild2'];
		$newDiplomaQuote->eachOtherChild2 = $_POST['eachOtherChild2'];
		$newDiplomaQuote->totalCourseCostInfo2 = $_POST['totalCourseCostInfo2'];
		$newDiplomaQuote->childresStudyFees2 = $_POST['childrenStudyFees2'];
		$newDiplomaQuote->ticketFees2 = $_POST['ticketFees2'];
		$newDiplomaQuote->grandSum2 = $_POST['totalFees2'];
		//
		$newDiplomaQuote->linkedTo = $_POST['linkedTo'];
		$newDiplomaQuote->diploma1 = $_POST['courseName'];
		$newDiplomaQuote->instal1 = $_POST['instOne'];
		$newDiplomaQuote->instal2 = $_POST['inst2'];
		$newDiplomaQuote->instal3 = $_POST['inst3'];
		$newDiplomaQuote->instal4 = $_POST['inst4'];
		$newDiplomaQuote->instal5 = $_POST['inst5'];
		$newDiplomaQuote->instal6 = $_POST['inst6'];
		$newDiplomaQuote->instal7 = $_POST['inst7'];
		$newDiplomaQuote->instal8 = $_POST['inst8'];
		$newDiplomaQuote->instal9 = $_POST['inst9'];
		$newDiplomaQuote->instal10 = $_POST['inst10'];
		$newDiplomaQuote->instal11 = $_POST['inst11'];
		$newDiplomaQuote->instal12 = $_POST['inst12'];
		//
		$newDiplomaQuote->diploma2 = $_POST['courseName2'];
		$newDiplomaQuote->instal13 = $_POST['instTwo'];
		$newDiplomaQuote->instal14 = $_POST['instTwo2'];
		$newDiplomaQuote->instal15 = $_POST['instTwo3'];
		$newDiplomaQuote->instal16 = $_POST['instTwo4'];
		$newDiplomaQuote->instal17 = $_POST['instTwo5'];
		$newDiplomaQuote->instal18 = $_POST['instTwo6'];
		$newDiplomaQuote->instal19 = $_POST['instTwo7'];
		$newDiplomaQuote->instal20 = $_POST['instTwo8'];
		$newDiplomaQuote->instal21 = $_POST['instTwo9'];
		$newDiplomaQuote->instal10 = $_POST['instTwo10'];
		$newDiplomaQuote->instal11 = $_POST['instTwo11'];
		$newDiplomaQuote->instal12 = $_POST['instTwo12'];
		$newDiplomaQuote->totalCourseFee = $_POST['totalCoursesFee'];
		//var_export($newDiplomaQuote);exit;
		//
		//var_dump($_POST);exit;
		$newDiplomaQuote->createQuote();
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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
	<input type="hidden" value="<?php echo $linkedTo; ?>" name="linkedTo" id="linkedTo"/>
	<input type="hidden" value="<?php echo $docType; ?>" name="quoteType" id="quoteType"/>
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
					<td align="center" valign="middle"><h2>DIPLOMA COURSE QUOTE </h2></td>
				</tr>
			</table>

		</td>
	</tr>

	<tr>
	<td align="left" valign="top">
	<fieldset>
	<legend>Diploma Course No. 1
		<input type="hidden" name="quoteNo" value="1" id="quoteNo1"/>
	</legend>
	<table border="0" cellspacing="1" cellpadding="4" class="table table-condensed">

	<tr>
	<td colspan="6">
	<div name="quotation">
	<table border="0" cellspacing="1" cellpadding="4" class="table table-hover">
	<tr>
		<td height="0" colspan="4" align="left" valign="middle" bgcolor="#DFEBF4">
			<div class="input-prepend"><span class="add-on">Quote Title</span>
				<input name="quoteTitle" type="text" class="span9" id="prependedInput"
				       placeholder="What are the Courses on this Quote..." maxlength="100">
			</div>
		</td>
	</tr>
	<tr>
		<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2">Course Name<br>
			<input type="text" name="courseName" id="courseName" class="span2"/></td>
		<td height="0" colspan="2" align="left" valign="middle" bgcolor="#F2F2F2">College Name<br>
			<select class="span2" name="college" id="college">
				<?php
				print($colList);
				//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
				?>
			</select>
			<input type="text" class="span2" name="collegeLocation" id="collegeLocation"
			       placeholder="College Location"/></td>
		<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2">Time Table<br>
			<select name="courseTimeTable" class="span2" id="courseTimeTable">
				<option value="NaN">Choose a Time</option>
				<option value="morning">Morning</option>
				<option value="afternoon">Afternoon</option>
				<option value="evening">Evening</option>
			</select></td>
	</tr>
	<tr>
		<td width="0" height="0" bgcolor="#DFEBF4">Current Course End Date<br>
			<input type="text" name="currentCourseEndDate" id="currentCourseEndDate" class="datePicker span2"
			       title="yyyy/mm/dd"/></td>
		<td height="0" bgcolor="#DFEBF4">New Course Start Date<br>
			<input type="text" name="newCourseStartDate" id="newCourseStartDate" class="datePicker span2"
			       title="yyyy/mm/dd"/></td>
		<td height="0" bgcolor="#DFEBF4">New Course End Date <br>
			<input type="text" name="newCourseEndDate" id="newCourseEndDate" class="datePicker span2"
			       title="yyyy/mm/dd"/></td>
		<td width="0" height="0" bgcolor="#DFEBF4">Holidays Duration (Weeks)<br>
			<select name="holidaysDuration" id="holidaysDuration" class="input-mini">
				<option>0</option>
				<?php for ($j = 1; $j <= 8; $j++) {
					echo '<option value="' . $j . '">' . $j . '</option>';
				}
				?>
			</select></td>
	</tr>
	<tr>
		<td width="0" height="0" bgcolor="#F2F2F2">Cost per Term<br>

			<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
				<input type="text" name="weeklyCost" id="weeklyCost" class="span2 inst1"
				       placeholder="Cost AU$ per Term"/>
			</div>
		</td>
		<td height="0" bgcolor="#F2F2F2">Duration (Terms)<br>
			<select name="courseDuration" id="courseDuration" class="input-mini inst1 wk">
				<option>0</option>
				<?php for ($j = 1; $j <= 20; $j++) {
					echo '<option value="' . $j . '">' . $j . '</option>';
				}
				?>
			</select></td>
		<td height="0" bgcolor="#F2F2F2">Number of Instalment<br>
			<input type="text" name="dpInstalmentsNo" id="dpInstalmentsNo" class="input-mini"/>
			<!--
                     <select name="instalmentsNo" id="instalmentsNo" class="input-mini instDip1" >
                       <option >0</option>
                       <?php for ($j = 1; $j <= 20; $j++) {
				echo '<option value="' . $j . '">' . $j . '</option>';
			}
			?>
                     </select>
                    -->
		</td>
		<td width="0" height="0" bgcolor="#F2F2F2"></td>
	</tr>
	<tr>
		<td width="0" height="0" bgcolor="#DFEBF4">Enrolment Fee<br>

			<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
				<input type="text" class="span2 inst1" name="courseEnrolmentFee" id="courseEnrolmentFee"
				       placeholder="Enrolment Fee AU$"/>
			</div>
		</td>
		<td height="0" bgcolor="#DFEBF4">Materials (AU$)<br>

			<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
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
			<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
				<input type="text" name="instOne" id="instOne" class="span2 inst1 instclass"/>
			</div>
		</td>
		<td width="0" height="0" bgcolor="#F2F2F2">Total Instalment No. 1
			<div class="input-prepend pull-left"><span class="add-on">$</span>
				<input name="totalInstOne" type="text" class="span2 totalInstVal" id="totalInstOne" placeholder=" "/>
			</div>
		</td>
		<td width="0" height="0" bgcolor="#F2F2F2"><!-- SubTotal Course -->
			<div class="input-prepend pull-left" style="margin-right:2em; display:none"><span class="add-on">$</span>
				<input type="text" name="courseInstalment" id="courseInstalment" class="span2"/>
			</div>
		</td>
		<td height="0" colspan="3" bgcolor="#F2F2F2"><a class="btn btn-success pull-right" onclick="addNewInst(2);"
		                                                title="" id="addMoreInst">+ Add more DIPLOMA</a></td>
	</tr>
	<tr>
		<td height="0" colspan="4" bgcolor="#FFFFFF">
			<div id="addInsts1">
				<table width="100%" class="table table-condensed">
					<tr>
						<td align="left" valign="middle">Health Cover<br>
							<input type="text" name="healthFund" id="healthFund" class="span2"/></td>
						<td align="left" valign="middle"><span class="add-on">Cost AU$</span><br>

							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2" name="healthCost" id="healthCost"
								       placeholder="Cost AU$"/>
							</div>
						</td>
						<td align="left" valign="middle">
							<div class="pull-left span2"> Months<br>
								<select name="mediBankMonths" id="mediBankMonths" class="input-mini"
								        placeholder="Months">
									<option value=0>0</option>
									<?php for ($j = 1; $j <= 60; $j++) {
										echo '<option value="' . $j . '">' . $j . '</option>';
									}
									?>
								</select>
							</div>
						</td>
						<td align="left" valign="middle">
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
						<td align="left" valign="middle">Visas Fees AU$<br>

							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input type="text" class="span2" name="visaFees" id="visaFees"
								       placeholder="Visa Fees AU$"/>
							</div>
						</td>
						<td height="0" class="table table-hover"> Deposit<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="deposit" id="deposit" class="span2 inst1"
								       placeholder="Deposit AU$"/>
							</div>
						</td>
						<td height="0" class="table table-hover">Bond<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="bond" id="bond" class="span2 inst1"
								       placeholder="If eligible AU$"/>
							</div>
						</td>
						<td align="left" valign="middle" bgcolor="#CCCCCC">Total Amount Due<br>

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
						<td colspan="4" align="left" valign="middle">Notes
							<textarea name="quoteNotes" id="textarea" rows="4" class="span6"></textarea></td>
					</tr>
				</table>
				<table width="100%">
					<tr>
						<td height="0">Instalment No. 2<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst2" id="inst2" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0">Instalment No. 3<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst3" id="inst3" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0">Instalment No. 4<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst4" id="inst4" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0" colspan="3">Instalment No. 5<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst5" id="inst5" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
					</tr>
					<tr>
						<td height="0">Instalment No. 6<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst6" id="inst6" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0">Instalment No. 7<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst7" id="inst7" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0">Instalment No. 8<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst8" id="inst8" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0" colspan="3">Instalment No. 9<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst9" id="inst9" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
					</tr>
					<tr>
						<td height="0">Instalment No. 10<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst10" id="inst10" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0">Instalment No. 11<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst11" id="inst11" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0">Instalment No. 12<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="inst12" id="inst12" class="span2 inst1 instclass"
								       placeholder="0"/>
							</div>
						</td>
						<td height="0" colspan="3"></td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	</table>
	</div>
	<!-- Additional Instalments -->
	<div class="moreInstalments" id="moreInstalments2">
		<!-- -->
		<legend>Diploma Course No. 2 <a class="btn btn-small pull-right" onclick="removeInst(2)"><i
					class="icon-remove-sign"></i> Remove</a></legend>
		<table border="0" cellspacing="1" cellpadding="4" class="table table-hover">
			<tr>
				<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2">Course Name<br>
					<input type="text" name="courseName2" id="courseName2" class="span2"/></td>
				<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">College Name<br>
					<select class="span2" name="college2" id="college2">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select>
					<input type="text" class="span2" name="collegeLocation2" id="collegeLocation2"
					       placeholder="College Location"/></td>
				<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">Time Table<br>
					<select name="courseTimeTable2" class="span2" id="courseTimeTable2">
						<option value="NaN">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select></td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4">New Course Start Date<br>
					<input type="text" name="newCourseStartDate2" id="newCourseStartDate2" class="datePicker span2"
					       title="yyyy/mm/dd"/></td>
				<td height="0" bgcolor="#DFEBF4">New Course End Date <br>
					<input type="text" name="newCourseEndDate2" id="newCourseEndDate2" class="datePicker span2"
					       title="yyyy/mm/dd"/></td>
				<td height="0" bgcolor="#DFEBF4">Holidays Duration (Weeks)<br>
					<select name="holidaysDuration2" id="holidaysDuration2" class="input-mini">
						<option>0</option>
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2">Cost per Term<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="weeklyCost2" id="weeklyCost2" class="span2 inst2"
						       placeholder="Cost AU$ per Term"/>
					</div>
				</td>
				<td height="0" bgcolor="#F2F2F2">Duration (Terms)<br>
					<select name="courseDuration2" id="courseDuration2" class="input-mini inst2 wk">
						<option>0</option>
						<?php for ($j = 1; $j <= 20; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td height="0" bgcolor="#F2F2F2">Number of Terms<br>
					<input type="text" name="dpInstalmentsNo2" id="dpInstalmentsNo2" class="input-mini"/>
					<!--
                     <select name="instalmentsNo" id="instalmentsNo" class="input-mini instDip1" >
                       <option >0</option>
                       <?php for ($j = 1; $j <= 20; $j++) {
						echo '<option value="' . $j . '">' . $j . '</option>';
					}
					?>
                     </select>
                    -->
				</td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4">Enrolment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" class="span2 inst2" name="courseEnrolmentFee2" id="courseEnrolmentFee2"
						       placeholder="Enrolment Fee AU$"/>
					</div>
				</td>
				<td height="0" bgcolor="#DFEBF4">Materials (AU$)<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="materialsCost2" id="materialsCost2" class="span2 inst2"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td height="0" bgcolor="#DFEBF4">Term Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="instalmentFee2" id="instalmentFee2" class="input-mini inst2"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2">Instalment No. 1<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="instTwo" id="instTwo" class="span2 inst2 instclass" placeholder="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2">Total Instalment No. 1<br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input name="totalInstTwo" type="text" class="span2 totalInstVal" id="totalInstTwo"
						       placeholder="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#F2F2F2"><!-- SubTotal Course -->
					<div class="input-prepend pull-left" style="margin-right:2em; display:none"><span
							class="add-on">$</span>
						<input type="text" name="courseInstalment2" id="courseInstalment2" class="span2"/>
					</div>
				</td>
			</tr>
			<tr>
				<td height="0" colspan="3" bgcolor="#FFFFFF">
					<div id="addInsts2">
						<table width="100%">
							<tr>
								<td height="0">Instalment No. 2<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo2" id="instTwo2" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0">Instalment No. 3<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo3" id="instTwo3" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0">Instalment No. 4<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo4" id="instTwo4" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0" colspan="3">Instalment No. 5<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo5" id="instTwo5" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
							</tr>
							<tr>
								<td height="0">Instalment No. 6<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo6" id="instTwo6" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0">Instalment No. 7<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo7" id="instTwo7" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0">Instalment No. 8<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo8" id="instTwo8" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0" colspan="3">Instalment No. 9<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo9" id="instTwo9" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
							</tr>
							<tr>
								<td height="0">Instalment No. 10<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo10" id="instTwo10" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0">Instalment No. 11<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo11" id="instTwo11" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0">Instalment No. 12<br>

									<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
										<input type="text" name="instTwo12" id="instTwo12" class="span2 inst2 instclass"
										       placeholder="0"/>
									</div>
								</td>
								<td height="0" colspan="3"></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<!-- Additional Instalments -->
	</td>
	</tr>

	<tr>
		<td colspan="6" bgcolor="#CCCCCC">
			<table width="100%" border="0">
				<tr>
					<td>Total Study Terms<br>

						<div class="input-prepend pull-left"><span class="add-on">#</span>
							<input type="text" class="span2 inst1" name="totalStudyWeeks" id="totalStudyWeeks"
							       placeholder="0"/>
						</div>
					</td>
					<td>Total Instalment(s)<br>

						<div class="input-prepend pull-left"><span class="add-on">$</span>
							<input name="totalInstalmentsVal" type="text" class="span2 inst1" id="totalInstalmentsVal"
							       placeholder="0"/>
						</div>
						<script type="text/javascript">
							$(document).on("change", "input[class *= 'instclass']", function () {
								var sum = 0;
								$("input[class *= 'instclass']").each(function () {
									sum += +$(this).val();
								});
								$("#totalInstalmentsVal").val(sum);
								////
								var courseEnrolmentFee = $('#courseEnrolmentFee').val() * 1;
								var materialsCost = $('#materialsCost').val() * 1;
								var instalmentFee = $('#instalmentFee').val() * 1;
								//
								var courseEnrolmentFee2 = $('#courseEnrolmentFee2').val() * 1;
								var materialsCost2 = $('#materialsCost2').val() * 1;
								var instalmentFee2 = $('#instalmentFee2').val() * 1;
								//
								var totalInstalments = $('#totalInstalmentsVal').val() * 1;
								//
								$('#totalCoursesFee').val(courseEnrolmentFee + materialsCost + instalmentFee + courseEnrolmentFee2 + materialsCost2 + instalmentFee2 + totalInstalments) * 1;
							});
						</script>
					</td>
					<td>Total Course(s) Fee<br>

						<div class="input-prepend pull-left"><span class="add-on">$</span>
							<input name="totalCoursesFee" type="text" class="span2" id="totalCoursesFee"
							       placeholder="0"/>
							<script type="text/javascript">

							</script>
						</div>
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
	<!-- <script src="../js/livevalidation_standalone.js" type="text/javascript"></script> -->
	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	<script src="js/quotesOps.js" type="text/javascript"></script>
	<!-- -->

	<!-- -->
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
