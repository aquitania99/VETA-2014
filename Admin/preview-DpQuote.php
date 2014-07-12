<?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
//
require('classes/quoteDp.php');
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
		$estimateOne = $_GET['estimateOne'];
		$yourself = $_GET['yourself'];
		$partner = $_GET['partner'];
		$firstChild = $_GET['firstChild'];
		$eachOtherChild = $_GET['eachOtherChild'];
		$totalCourseCostInfo = $_GET['totalCourseCostInfo'];
		$childresStudyFees = $_GET['childresStudyFees'];
		$ticketFees = $_GET['ticketFees'];
		$grandSum = $_GET['grandSum'];
		//
		$estimateTwo = $_GET['estimateTwo'];
		$yourself2 = $_GET['yourself2'];
		$partner2 = $_GET['partner2'];
		$firstChild2 = $_GET['firstChild2'];
		$eachOtherChild2 = $_GET['eachOtherChild2'];
		$totalCourseCostInfo2 = $_GET['totalCourseCostInfo2'];
		$childresStudyFees2 = $_GET['childresStudyFees2'];
		$ticketFees2 = $_GET['ticketFees2'];
		$grandSum2 = $_GET['grandSum2'];
////
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		//echo 'Checking Quote for... '.$keyVal.'<br>';exit;

		//
		$searchAfterIns = 'SELECT * ';
		$searchAfterIns .= 'FROM quotations ';
		$searchAfterIns .= 'WHERE personID = "' . $keyVal . '" ';
		$searchAfterIns .= 'ORDER BY quoteNo DESC LIMIT 1';
		//
		//print_r($searchAfterIns);die;
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
		//
		$totalInstOne = $result['weeklyCost'] + $result['courseEnrolmentFee'] + $result['materialsCost'] + $result['instalmentFee'];
		$totalInstTwo = $result['weeklyCost2'] + $result['courseEnrolmentFee2'] + $result['materialsCost2'] + $result['instalmentFee2'];
		$totalInstThree = $result['weeklyCost3'] + $result['courseEnrolmentFee3'] + $result['materialsCost3'] + $result['instalmentFee3'];
		$totalInstFour = $result['weeklyCost'] + $result['courseEnrolmentFee4'] + $result['materialsCost4'] + $result['instalmentFee4'];
		//
		$totalStudyWeeks = $result['courseDuration'] + $result['courseDuration2'] + $result['courseDuration3'] + $result['courseDuration4'];
		//
		//$totalInstalmentsVal = $result['instOne'] + $result['instTwo'] + $result['instThree'] + $result['instFour'];
		//
		$totalCoursesFee = $totalInstOne + $totalInstTwo + $totalInstThree + $totalInstFour;
		//
		$totalDue = $result['instOne'] + $result['mediBankCost'] + $result['visaFees'] + $result['courseEnrolmentFee'] + $result['materialsCost'] + $result['instalmentFee'] + $result['deposit'] - $result['bond'];
		//
		$searchColleges = 'SELECT entity_name ';
		$searchColleges .= 'FROM education_provider ';
		$searchColleges .= 'WHERE edu_providerID IN (' . $result['college'] . ',' . $result['college2'] . ')';
		//print_r($searchColleges);die();
		//
		$rsColleges = $mysqli->query($searchColleges);
		//
		$resultColleges = $rsColleges->fetch_array();
		//
		$colleges = array();
		//
		do {
			$colleges[] = $resultColleges['entity_name'];
		} while ($resultColleges = $rsColleges->fetch_array());
		//
		$sql_GetDiploma = 'SELECT * ';
		$sql_GetDiploma .= 'FROM diplomaInstalments ';
		$sql_GetDiploma .= 'WHERE quoteNo = ' . $result['quoteNo'] . ' AND personID = \'' . $keyVal . '\' ';
		$sql_GetDiploma .= ' ORDER BY quoteNo DESC LIMIT 1';
		//print_r($sql_GetDiploma);exit;
		$rsGetDiploma = $mysqli->query($sql_GetDiploma);
		//
		$row = $rsGetDiploma->fetch_assoc();
		//
		$sum1 = ($row['instal1'] + $row['instal2'] + $row['instal3'] + $row['instal4'] + $row['instal5'] + $row['instal6'] + $row['instal7'] + $row['instal8'] + $row['instal9'] + $row['instal10'] + $row['instal11'] + $row['instal12']);
		$sum2 = ($row['instal13'] + $row['instal14'] + $row['instal15'] + $row['instal16'] + $row['instal17'] + $row['instal18'] + $row['instal19'] + $row['instal20'] + $row['instal21'] + $row['instal22'] + $row['instal23'] + $row['instal24']);
		$totalSum = ($sum1 + $sum2);
		//echo 'THE RESULT OF MY SUM... '.$totalSum.'<br>';
	}
//
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>VETA - PREVIEW QUOTE</title>
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
	<?php $diploma = $result['quoteType'];
	if (!empty($diploma)) { ?>
	<form id="createQuoteDiploma" name="createQuoteDiploma" method="post" action="createQuoteDiploma.php">
	<?php } else { ?>
	<form id="createQuote" name="createQuote" method="post" action="createQuote.php">
	<?php } ?>
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
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle"><h2>PREVIEW DIPLOMA COURSE QUOTE</h2></td>
				</tr>
			</table>

		</td>
	</tr>
	<!-- -->
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="left" valign="top">
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
					</td>
					<td align="left" valign="top">
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
					</td>
				</tr>
			</table>
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
			<!-- -->
			<input type="hidden" name="quoteTitle" id="quoteTitle" value="<?php echo $result['quoteTitle']; ?>"/>
			<input type="hidden" name="college" id="college" value="<?php echo $colleges[0]; ?>"/>
			<input type="hidden" name="courseName" id="courseName" value="<?php echo $result['courseName']; ?>"/>
			<input type="hidden" name="newCourseStartDate" id="newCourseStartDate"
			       value="<?php echo $result['newCourseStartDate']; ?>"/>
			<input type="hidden" name="newCourseEndDate" id="newCourseEndDate"
			       value="<?php echo $result['newCourseEndDate']; ?>"/>
			<input type="hidden" name="holidaysDuration" id="holidaysDuration"
			       value="<?php echo $result['holidaysDuration']; ?>"/>
			<input type="hidden" name="courseTimeTable" id="courseTimeTable"
			       value="<?php echo $result['courseTimeTable']; ?>"/>
			<input type="hidden" name="weeklyCost" id="weeklyCost" value="<?php echo $result['weeklyCost']; ?>"/>
			<input type="hidden" name="courseDuration" id="courseDuration"
			       value="<?php echo $result['courseDuration']; ?>"/>
			<input type="hidden" name="courseInstalment" id="courseInstalment"
			       value="<?php echo $result['courseInstalment']; ?>"/>
			<input type="hidden" name="courseEnrolmentFee" id="courseEnrolmentFee"
			       value="<?php echo $result['courseEnrolmentFee']; ?>"/>
			<input type="hidden" name="materialsCost" id="materialsCost"
			       value="<?php echo $result['materialsCost']; ?>"/>
			<input type="hidden" name="totalCourseFees" id="totalCourseFees"
			       value="<?php echo $result['totalCourseFees']; ?>"/>
			<!-- -->
			<input type="hidden" name="college2" id="college2" value="<?php echo $colleges[1]; ?>"/>
			<input type="hidden" name="courseName2" id="courseName2" value="<?php echo $result['courseName2']; ?>"/>
			<input type="hidden" name="courseTimeTable2" id="courseTimeTable2"
			       value="<?php echo $result['courseTimeTable2']; ?>"/>
			<input type="hidden" name="newCourseStartDate2" id="newCourseStartDate2"
			       value="<?php echo $result['newCourseStartDate2']; ?>"/>
			<input type="hidden" name="newCourseEndDate2" id="newCourseEndDate2"
			       value="<?php echo $result['newCourseEndDate2']; ?>"/>
			<input type="hidden" name="weeklyCost2" id="weeklyCost2" value="<?php echo $result['weeklyCost2']; ?>"/>
			<input type="hidden" name="holidaysDuration2" id="holidaysDuration2"
			       value="<?php echo $result['holidaysDuration2']; ?>"/>
			<input type="hidden" name="weeklyCost2" id="weeklyCost2" value="<?php echo $result['weeklyCost2']; ?>"/>
			<input type="hidden" name="courseDuration2" id="courseDuration2"
			       value="<?php echo $result['courseDuration2']; ?>"/>
			<input type="hidden" name="courseInstalment2" id="courseInstalment2"
			       value="<?php echo $result['courseInstalment2']; ?>"/>
			<input type="hidden" name="courseEnrolmentFee2" id="courseEnrolmentFee2"
			       value="<?php echo $result['courseEnrolmentFee2']; ?>"/>
			<input type="hidden" name="materialsCost2" id="materialsCost2"
			       value="<?php echo $result['materialsCost2']; ?>"/>
			<input type="hidden" name="instalmentFee2" id="instalmentFee2"
			       value="<?php echo $result['instalmentFee2']; ?>"/>
			<!-- -->
			<input type="hidden" name="college3" id="college3" value="<?php echo $colleges[2]; ?>"/>
			<input type="hidden" name="courseName3" id="courseName3" value="<?php echo $result['courseName3']; ?>"/>
			<input type="hidden" name="courseTimeTable3" id="courseTimeTable3"
			       value="<?php echo $result['courseTimeTable3']; ?>"/>
			<input type="hidden" name="newCourseStartDate3" id="newCourseStartDate3"
			       value="<?php echo $result['newCourseStartDate3']; ?>"/>
			<input type="hidden" name="newCourseEndDate3" id="newCourseEndDate3"
			       value="<?php echo $result['newCourseEndDate3']; ?>"/>
			<input type="hidden" name="weeklyCost3" id="weeklyCost3" value="<?php echo $result['weeklyCost3']; ?>"/>
			<input type="hidden" name="holidaysDuration3" id="holidaysDuration3"
			       value="<?php echo $result['holidaysDuration3']; ?>"/>
			<input type="hidden" name="weeklyCost3" id="weeklyCost3" value="<?php echo $result['weeklyCost3']; ?>"/>
			<input type="hidden" name="courseDuration3" id="courseDuration3"
			       value="<?php echo $result['courseDuration3']; ?>"/>
			<input type="hidden" name="courseInstalment3" id="courseInstalment3"
			       value="<?php echo $result['courseInstalment3']; ?>"/>
			<input type="hidden" name="courseEnrolmentFee3" id="courseEnrolmentFee3"
			       value="<?php echo $result['courseEnrolmentFee3']; ?>"/>
			<input type="hidden" name="materialsCost3" id="materialsCost3"
			       value="<?php echo $result['materialsCost3']; ?>"/>
			<input type="hidden" name="instalmentFee3" id="instalmentFee3"
			       value="<?php echo $result['instalmentFee3']; ?>"/>
			<!-- -->
			<input type="hidden" name="college4" id="college4" value="<?php echo $colleges[3]; ?>"/>
			<input type="hidden" name="courseName4" id="courseName4" value="<?php echo $result['courseName4']; ?>"/>
			<input type="hidden" name="courseTimeTable4" id="courseTimeTable4"
			       value="<?php echo $result['courseTimeTable4']; ?>"/>
			<input type="hidden" name="newCourseStartDate4" id="newCourseStartDate4"
			       value="<?php echo $result['newCourseStartDate4']; ?>"/>
			<input type="hidden" name="newCourseEndDate4" id="newCourseEndDate4"
			       value="<?php echo $result['newCourseEndDate4']; ?>"/>
			<input type="hidden" name="weeklyCost4" id="weeklyCost4" value="<?php echo $result['weeklyCost4']; ?>"/>
			<input type="hidden" name="holidaysDuration4" id="holidaysDuration4"
			       value="<?php echo $result['holidaysDuration4']; ?>"/>
			<input type="hidden" name="weeklyCost4" id="weeklyCost4" value="<?php echo $result['weeklyCost4']; ?>"/>
			<input type="hidden" name="courseDuration4" id="courseDuration4"
			       value="<?php echo $result['courseDuration4']; ?>"/>
			<input type="hidden" name="courseInstalment4" id="courseInstalment4"
			       value="<?php echo $result['courseInstalment4']; ?>"/>
			<input type="hidden" name="courseEnrolmentFee4" id="courseEnrolmentFee4"
			       value="<?php echo $result['courseEnrolmentFee4']; ?>"/>
			<input type="hidden" name="materialsCost4" id="materialsCost4"
			       value="<?php echo $result['materialsCost4']; ?>"/>
			<input type="hidden" name="instalmentFee4" id="instalmentFee4"
			       value="<?php echo $result['instalmentFee4']; ?>"/>
			<!-- -->
			<input type="hidden" name="instOne" id="instOne" value="<?php echo $result['instOne']; ?>"/>
			<input type="hidden" name="instalmentFee" id="instalmentFee"
			       value="<?php echo $result['instalmentFee']; ?>"/>
			<input type="hidden" name="deposit" id="deposit" value="<?php echo $result['deposit']; ?>"/>
			<input type="hidden" name="bond" id="bond" value="<?php echo $result['bond']; ?>"/>
			<input type="hidden" name="healthFund" id="healthFund" value="<?php echo $result['healthFund']; ?>"/>
			<input type="hidden" name="mediBankMonths" id="mediBankMonths"
			       value="<?php echo $result['mediBankMonths']; ?>"/>
			<input type="hidden" name="healthCost" id="healthCost" value="<?php echo $result['mediBankCost']; ?>"/>
			<input type="hidden" name="visaFees" id="visaFees" value="<?php echo $result['visaFees']; ?>"/>
			<input type="hidden" name="totalAmountDue" id="totalAmountDue" value="<?php echo $totalDue; ?>"/>
			<input type="hidden" name="instTwo" id="instTwo" value="<?php echo $result['instTwo']; ?>"/>
			<input type="hidden" name="instThree" id="instThree" value="<?php echo $result['instThree']; ?>"/>
			<input type="hidden" name="instFour" id="instFour" value="<?php echo $result['instFour']; ?>"/>
			<input type="hidden" name="quoteNotes" id="quoteNotes" value="<?php echo $result['quoteNotes']; ?>"/>
			<!-- -->
			<input type="hidden" name="totalStudyWeeks" id="totalStudyWeeks" value="<?php echo $totalStudyWeeks; ?>"/>
			<input type="hidden" name="totalInstalmentsVal" id="totalInstalmentsVal"
			       value="<?php echo $totalInstalmentsVal; ?>"/>
			<input type="hidden" name="totalCoursesFee" id="totalCoursesFee" value="<?php echo $totalCoursesFee; ?>"/>
			<!-- -->
			<input type="hidden" name="estimateOne" id="estimateOne" value="<?php echo $estimateOne; ?>"/>
			<input type="hidden" name="yourself" id="yourself" value="<?php echo $yourself; ?>"/>
			<input type="hidden" name="partner" id="partner" value="<?php echo $partner; ?>"/>
			<input type="hidden" name="firstChild" id="firstChild" value="<?php echo $firstChild; ?>"/>
			<input type="hidden" name="eachOtherChild" id="eachOtherChild" value="<?php echo $eachOtherChild; ?>"/>
			<input type="hidden" name="totalCourseCostInfo" id="totalCourseCostInfo"
			       value="<?php echo $totalCourseCostInfo; ?>"/>
			<input type="hidden" name="childresStudyFees" id="childresStudyFees"
			       value="<?php echo $childresStudyFees; ?>"/>
			<input type="hidden" name="ticketFees" id="ticketFees" value="<?php echo $ticketFees; ?>"/>
			<input type="hidden" name="grandSum" id="grandSum" value="<?php echo $grandSum; ?>"/>
			<!-- -->
			<input type="hidden" name="estimateTwo" id="estimateTwo" value="<?php echo $estimateTwo; ?>"/>
			<input type="hidden" name="yourself2" id="yourself2" value="<?php echo $yourself2; ?>"/>
			<input type="hidden" name="partner2" id="partner2" value="<?php echo $partner2; ?>"/>
			<input type="hidden" name="firstChild2" id="firstChild2" value="<?php echo $firstChild2; ?>"/>
			<input type="hidden" name="eachOtherChild2" id="eachOtherChild2" value="<?php echo $eachOtherChild2; ?>"/>
			<input type="hidden" name="totalCourseCostInfo2" id="totalCourseCostInfo2"
			       value="<?php echo $totalCourseCostInfo2; ?>"/>
			<input type="hidden" name="childresStudyFees2" id="childresStudyFees2"
			       value="<?php echo $childresStudyFees2; ?>"/>
			<input type="hidden" name="ticketFees2" id="ticketFees2" value="<?php echo $ticketFees2; ?>"/>
			<input type="hidden" name="grandSum2" id="grandSum2" value="<?php echo $grandSum2; ?>"/>
			<!-- -->
		</td>
	</tr>
	<tr>
	<td align="left" valign="top">
	<fieldset>
	<legend> Diploma Course No. 1
		<input type="hidden" name="quoteNo" value="1" id="quoteNo1"/>
	</legend>
	<table border="0" cellspacing="1" cellpadding="4" class="table table-condensed">

	<tr>
	<td colspan="6">
	<div name="quotation">
		<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-hover">
			<tr>
				<td height="0" colspan="4" align="left" valign="middle" bgcolor="#DFEBF4">
					<div class="input-prepend">
						<span class="add-on"><strong>Quote Title:</strong> <?php echo $result['quoteTitle']; ?></span>
						<!-- <input name="quoteTitle" type="text" class="span9" id="prependedInput" placeholder="What are the Courses on this Quote..." maxlength="100"> -->
					</div>
				</td>
			</tr>
			<tr>
				<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>Course Name</strong><br>
					<?php echo $result['courseName']; ?>
					<!-- <input type="text" name="courseName" id="courseName" class="span2"  /></td> -->
				<td height="0" colspan="2" align="left" valign="middle" bgcolor="#F2F2F2"><strong>College
						Name</strong><br>
					<?php echo $colleges[0]; ?>
					<!--
            <select  class="span2" name="college" id="college">
              <?php
					print($colList);
					//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
					?>
            </select> 
            -->
				</td>
				<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>Time Table</strong><br>
					<?php echo $result['courseTimeTable']; ?>
					<!--
					   <select name="courseTimeTable" class="span2" id="courseTimeTable">
						 <option value="NaN">Choose a Time</option>
						 <option value="morning">Morning</option>
						 <option value="afternoon">Afternoon</option>
						 <option value="evening">Evening</option>
					   </select>
					   -->
				</td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4"><strong>Current Course End Date</strong><br>
					<?php echo $result['currentCourseEndDate']; ?>
					<!-- <input type="text" name="currentCourseEndDate" id="currentCourseEndDate"  class="datePicker span2" title="yyyy/mm/dd" /> -->
				</td>
				<td height="0" bgcolor="#DFEBF4"><strong>New Course Start Date</strong><br>
					<?php echo $result['newCourseStartDate']; ?>
					<!-- <input type="text" name="newCourseStartDate" id="newCourseStartDate"  class="datePicker span2" title="yyyy/mm/dd" /> -->
				</td>
				<td height="0" bgcolor="#DFEBF4"><strong>New Course End Date </strong><br>
					<?php echo $result['newCourseEndDate']; ?>
					<!-- <input type="text" name="newCourseEndDate" id="newCourseEndDate"  class="datePicker span2" title="yyyy/mm/dd" /> -->
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4"><strong>Holidays Duration (Weeks)</strong><br>
					<?php echo $result['holidaysDuration']; ?>
					<!--
               <select name="holidaysDuration" id="holidaysDuration" class="input-mini" >
                 <?php for ($j = 1; $j <= 8; $j++) {
						echo '<option value="' . $j . '">' . $j . '</option>';
					}
					?>
               </select>
                -->
				</td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#F2F2F2"><strong>Cost per Term</strong><br>
					<strong>$</strong><?php echo $result['weeklyCost']; ?>

				</td>
				<td height="0" bgcolor="#F2F2F2"><strong>Duration (Terms)</strong><br>
					<?php echo $result['courseDuration']; ?>

				</td>
				<td height="0" bgcolor="#F2F2F2"><strong>Number of Instalments</strong><br>
					<?php echo $result['instalmentsNo']; ?>

				</td>
				<td width="0" height="0" bgcolor="#F2F2F2"><strong>Enrolment Fee</strong><br>
					<strong>$</strong><?php echo $result['courseEnrolmentFee']; ?>
				</td>
			</tr>
			<tr>
				<td width="0" height="0" bgcolor="#DFEBF4"><strong>Materials (AU$)</strong><br>
					<strong>$</strong><?php echo $result['materialsCost']; ?>
				</td>
				<td height="0" bgcolor="#DFEBF4"><strong>Deposit</strong><br>
					<strong>$</strong><?php echo $result['deposit']; ?>
				</td>
				<td height="0" bgcolor="#DFEBF4"><strong>Bond</strong><br>
					<strong>$</strong><?php echo $result['bond']; ?>
				</td>
				<td height="0" colspan="3" bgcolor="#DFEBF4"><strong>Instalment Fee</strong><br>
					<strong>$</strong><?php echo $result['instalmentFee']; ?>
				</td>
			</tr>

			<tr>
				<td width="0" height="0" bgcolor="#FFFFFF"><strong class="style5">Instalment No. 1</strong><br>
					<strong class="style5">$</strong><?php echo $result['instOne']; ?>
				</td>
				<td width="0" height="0" bgcolor="#FFFFFF"><strong class="style5">Total Instalment No. 1</strong><br>
					<strong class="style5">$</strong><?php echo $totalInstOne; ?>
				</td>
				<td width="0" height="0" bgcolor="#FFFFFF">
				</td>
				<td height="0" colspan="3" bgcolor="#FFFFFF">

				</td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 2</strong><br>
					<strong class="style5">$<?php echo $row['instal2']; ?></strong></td>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 3</strong><br>
					<strong class="style5">$<?php echo $row['instal3']; ?></strong></td>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 4</strong><br>
					<strong class="style5">$<?php echo $row['instal4']; ?></strong></td>
				<td height="0" colspan="3" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 5</strong><br>
					<strong class="style5">$<?php echo $row['instal5']; ?></strong></td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 6</strong><br>
					<strong class="style5">$<?php echo $row['instal6']; ?></strong></td>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 7</strong><br>
					<strong class="style5">$<?php echo $row['instal7']; ?></strong></td>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 8</strong><br>
					<strong class="style5">$<?php echo $row['instal8']; ?></strong></td>
				<td height="0" colspan="3" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 9</strong><br>
					<strong class="style5">$<?php echo $row['instal9']; ?></strong></td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 10</strong><br>
					<strong class="style5">$<?php echo $row['instal10']; ?></strong></td>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 11</strong><br>
					<strong class="style5">$<?php echo $row['instal11']; ?></strong></td>
				<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. .12</strong><br>
					<strong class="style5">$<?php echo $row['instal12']; ?></strong></td>
				<td height="0" colspan="3" bgcolor="#DFEBF4"></td>
			</tr>
		</table>
	</div>
	<!-- Additional Instalments -->
	<?php if ($result['college2'] > 0) { ?>
		<div class="moreInstalments" id="moreInstalments2">
			<!-- -->
			<legend>Diploma Course No. 2</legend>
			<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-hover table-condensed">
				<tr>
					<td height="0" bgcolor="#DFEBF4"><strong>Course Name</strong><br>
						<?php echo $result['courseName2']; ?>
						<!-- <input type="text" name="courseName2" id="courseName2" class="span2 inst2"  /> -->
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong>College Name</strong><br>
						<?php echo $colleges[1]; ?>
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong>Time Table</strong><br>
						<?php echo $result['courseTimeTable2']; ?>
					</td>
				</tr>
				<tr>
					<td height="0" bgcolor="#F2F2F2"><strong>Holidays Duration (Weeks)</strong><br>
						<?php echo $result['holidaysDuration2']; ?>
						<!--
                          <select name="holidaysDuration2" id="holidaysDuration2" class="input-mini inst2" >
                          <?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
                        </select> -->
					</td>
					<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course Start Date
						</strong><br>
						<?php echo $result['newCourseStartDate2']; ?>
						<!-- <input type="text" name="newCourseStartDate2" id="newCourseStartDate2"  class="datePicker span2" title="yyyy/mm/dd" /> -->
					</td>
					<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course End Date</strong><br>
						<?php echo $result['newCourseEndDate2']; ?>
						<!-- <input type="text" name="newCourseEndDate2" id="newCourseEndDate2"  class="datePicker span2" title="yyyy/mm/dd" /> -->
					</td>
				</tr>
				<tr>
					<td height="0" bgcolor="#DFEBF4"><strong>Cost per Term</strong><br>
						<strong>$</strong><?php echo $result['weeklyCost2']; ?>
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong>Duration (Terms)</strong><br>
						<?php echo $result['courseDuration2']; ?>
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong>Number of Instalments</strong><br>
						<?php echo $result['instalmentsNo']; ?>
					</td>
				</tr>
				<tr>
					<td height="0" bgcolor="#F2F2F2"><strong>Enrolment Fee</strong><br>
						<strong>$</strong><?php echo $result['courseEnrolmentFee2']; ?>
					</td>
					<td width="0" height="0" bgcolor="#F2F2F2"><strong>Materials (AU$)</strong><br>
						<strong>$</strong><?php echo $result['materialsCost2']; ?>
					</td>
					<td height="0" colspan="3" bgcolor="#F2F2F2"><strong>Instalment Fee</strong><br>
						<strong>$</strong><?php echo $result['instalmentFee2']; ?></td>
				</tr>
				<tr>
					<td height="0" bgcolor="#FFFFFF"><strong class="style5">Instalment No. 1</strong><br>
						<strong class="style5">$</strong><?php echo $row['instal13']; ?>
					</td>
					<td width="0" height="0" bgcolor="#FFFFFF"><strong class="style5">Total Instalment No.
							1</strong><br>
						<strong class="style5">$</strong><?php echo $totalInstTwo; ?></td>
					<td height="0" colspan="3" bgcolor="#FFFFFF">
						<!-- <a style="cursor:pointer; font-size:11px" onclick="addNewInst(3);" title="You can add UP to 4 Instalments" id="addMoreInst2">+ Add more instalments</a> -->
					</td>
				</tr>
				<tr>
					<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 2</strong><br>
						<strong class="style5">$<?php echo $row['instal14']; ?></strong></td>
					<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 3</strong><br>
						<strong class="style5">$<?php echo $row['instal15']; ?></strong></td>
					<td height="0" colspan="3" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 4</strong><br>
						<strong class="style5">$<?php echo $row['instal16']; ?></strong></td>
				</tr>
				<tr>
					<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 5</strong><br>
						<strong class="style5">$<?php echo $row['instal17']; ?></strong></td>
					<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 6</strong><br>
						<strong class="style5">$<?php echo $row['instal18']; ?></strong></td>
					<td height="0" colspan="3" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 7</strong><br>
						<strong class="style5">$<?php echo $row['instal19']; ?></strong></td>
				</tr>
				<tr>
					<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 8</strong><br>
						<strong class="style5">$<?php echo $row['instal20']; ?></strong></td>
					<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 9</strong><br>
						<strong class="style5">$<?php echo $row['instal21']; ?></strong></td>
					<td height="0" colspan="3" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 10</strong><br>
						<strong class="style5">$<?php echo $row['instal22']; ?></strong></td>
				</tr>
				<tr>
					<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 11</strong><br>
						<strong class="style5">$<?php echo $row['instal23']; ?></strong></td>
					<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 12</strong><br>
						<strong class="style5">$<?php echo $row['instal24']; ?></strong></td>
					<td height="0" colspan="3" bgcolor="#DFEBF4">&nbsp;</td>
				</tr>
			</table>

		</div>
		<!-- -->
	<?php }
	if ($result['college3'] > 0) { ?>

		<!-- -->

	<?php }
	if ($result['college4'] > 0) { ?>

		<!-- -->

	<?php } ?>
	<!-- Aditional Instalments END -->
	</td>
	</tr>

	<tr>
		<td colspan="6" bgcolor="#F2F2F2">
			<table width="100%" class="table table-condensed">

				<tr>
					<td align="left" valign="middle"><strong>Health Fund</strong><br>
						<?php echo $result['healthFund']; ?>
					</td>
					<td align="left" valign="middle"><span class="add-on"><strong>Cost AU$</strong></span><br>
						<strong>$</strong><?php echo $result['mediBankCost']; ?>
					</td>
					<td align="left" valign="middle">
						<div class="pull-left span2">
							<strong>Months</strong><br>
							<?php echo $result['mediBankMonths']; ?>
					</td>
					<td align="left" valign="middle"><span class="add-on"><strong>Health Cover Type</strong></span><br>
						<?php echo $result['healthCoverType']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left" valign="middle"><strong>Visas Fees AU$</strong><br>
						<strong>$</strong><?php echo $result['visaFees']; ?>
					</td>
					<td colspan="2" align="left" valign="middle" bgcolor="#CCCCCC"><strong class="style5">Total Amount
							Due<br>
							$</strong>
						<?php echo $totalDue; ?>
					</td>
				</tr>
				<tr>
					<td align="left" valign="middle"><strong class="style5">Total Study Terms</strong><br>
						<strong class="style5"># </strong><?php echo $totalStudyWeeks; ?></td>
					<td colspan="2" align="left" valign="middle"><strong class="style5">Total Instalment(s)</strong><br>
						<strong class="style5">$</strong><?php echo $totalSum; ?></td>
					<td align="left" valign="middle"><strong class="style5">Total Course(s) Fee</strong><br>
						<strong class="style5">$</strong><?php echo $row['totalCourseFee']; ?></td>
				</tr>
				<tr>
					<td colspan="4" align="left" valign="middle"><strong>Notes</strong><br>

						<div style="width:450px; height:120px; display:block;">
							<?php echo $result['quoteNotes']; ?>
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
						<td height="0" colspan="4" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							<legend>Financial requirements for your stay in Australia</legend>
						</td>
					</tr>
					<tr>
						<td width="0" height="0" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							Expenses
						</td>
						<td width="0" height="0" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">Per
							Person
						</td>
						<td width="0" height="0" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							Amount Required in AUD<br><?php echo $estimateOne; ?></td>
						<td width="0" height="0" align="center" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							Amount Required in AUD<br><?php echo $estimateTwo; ?></td>
					</tr>
					<tr>
						<td width="0" height="0" rowspan="4" align="left" valign="middle" bgcolor="#FFFFFF"
						    class="tex-white"><strong>Living</strong></td>
						<td width="0" height="0" bgcolor="#FFFFFF" class="tex">Yourself (18.610 AUD /Year)</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<?php echo $yourself; ?></td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF"
						    class="tex"><?php echo $yourself2; ?></td>
					</tr>
					<tr>
						<td width="0" height="0" bgcolor="#FFFFFF" class="tex">Partner (6.300 AUD/Year)</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<?php echo $partner; ?></td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<?php echo $partner2; ?></td>
					</tr>
					<tr>
						<td width="0" height="0" bgcolor="#FFFFFF" class="tex">First Child (3.600 AUD/Year)</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<?php echo $firstChild; ?></td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF"
						    class="tex"><?php echo $firstChild2; ?></td>
					</tr>
					<tr>
						<td width="0" height="0" bgcolor="#FFFFFF" class="tex">Each Other Child (2.7000 AUD/Year)</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<?php echo $eachOtherChild; ?>
						</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF"
						    class="tex"><?php echo $eachOtherChild2; ?></td>
					</tr>
					<tr>
						<td width="0" height="0" rowspan="2" align="left" valign="middle" bgcolor="#FFFFFF"
						    class="tex-white"><strong>Tuition</strong></td>
						<td width="0" height="0" bgcolor="#FFFFFF" class="tex">Study Fees</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<?php echo $totalCourseCostInfo; ?>
						</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF"
						    class="tex"><?php echo $totalCourseCostInfo2; ?></td>
					</tr>
					<tr>
						<td width="0" height="0" bgcolor="#FFFFFF" class="tex">Children Study Fees</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<?php echo $childresStudyFees; ?></td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF"
						    class="tex"><?php echo $childresStudyFees2; ?></td>
					</tr>
					<tr>
						<td width="0" height="0" align="left" valign="middle" bgcolor="#FFFFFF" class="tex-white">
							<strong>Travel Return Air fare</strong></td>
						<td width="0" height="0" bgcolor="#FFFFFF" class="tex">Ticket Fees</td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF" class="tex">
							<?php echo $ticketFees; ?></td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#FFFFFF"
						    class="tex"><?php echo $ticketFees2; ?></td>
					</tr>
					<tr>
						<td height="0" colspan="2" align="right" valign="middle" bgcolor="#CCCCCC" class="tex-white">
							<strong class="style5">Total Fees <span class="tex">AUD</span>$</strong></td>
						<td width="0" height="0" align="right" valign="middle" bgcolor="#CCCCCC">
							<?php echo $grandSum; ?>
						</td>
						<td width="0" height="0" align="right" valign="middle"
						    bgcolor="#CCCCCC"><?php echo $grandSum2; ?></td>
					</tr>
				</table>

			</div>
		</td>
	</tr>
	<tr>
		<td colspan="6">
			<div class="form-actions pull-right">
				<button type="submit" class="btn btn-success btn-large" name="submit" id="submit">Create Quotation
				</button>
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
	<!-- <script src="js/quotesOps.js" type="text/javascript"></script> -->
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
