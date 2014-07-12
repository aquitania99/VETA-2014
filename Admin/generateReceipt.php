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
					<td align="center" valign="middle"><h2>STUDENT RECEIPT VETA </h2></td>
				</tr>
			</table>

		</td>
	</tr>

	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend> Instalment No.
					<input type="hidden" name="quoteNo" value="1" id="quoteNo1"/>
				</legend>
				<table border="0" cellspacing="1" cellpadding="4" class="table table-condensed">

					<tr>
						<td colspan="6">
							<div name="quotation">
								<table border="0" cellspacing="1" cellpadding="4" class="table table-hover">
									<tr>
										<td height="0" colspan="4" align="left" valign="middle" bgcolor="#DFEBF4">
											<div class="input-prepend">
												<span class="add-on">Payment Fees</span>
												<input name="quoteTitle" type="text" class="span9" id="prependedInput"
												       placeholder="What are the Courses on this Quote..."
												       maxlength="100">
											</div>
										</td>
									</tr>
									<tr>
										<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2">Course
											Name<br>
											<input type="text" name="courseName" id="courseName" class="span2"/></td>
										<td height="0" colspan="2" align="left" valign="middle" bgcolor="#F2F2F2">
											College Name<br>
											<select class="span2" name="college" id="college">
												<?php
												print($colList);
												//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
												?>
											</select></td>
										<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2">Time
											Table<br>
											<select name="courseTimeTable" class="span2" id="courseTimeTable">
												<option value="NaN">Choose a Time</option>
												<option value="morning">Morning</option>
												<option value="afternoon">Afternoon</option>
												<option value="evening">Evening</option>
											</select></td>
									</tr>
									<tr>
										<td width="0" height="0" bgcolor="#DFEBF4">Current Course End Date<br>
											<input type="text" name="currentCourseEndDate" id="currentCourseEndDate"
											       class="datePicker span2" title="yyyy/mm/dd"/></td>
										<td height="0" bgcolor="#DFEBF4">New Course Start Date<br> <input type="text"
										                                                                  name="newCourseStartDate"
										                                                                  id="newCourseStartDate"
										                                                                  class="datePicker span2"
										                                                                  title="yyyy/mm/dd"/>
										</td>
										<td height="0" bgcolor="#DFEBF4">New Course End Date <br>
											<input type="text" name="newCourseEndDate" id="newCourseEndDate"
											       class="datePicker span2" title="yyyy/mm/dd"/></td>
										<td width="0" height="0" bgcolor="#DFEBF4">Holidays Duration (Weeks)<br>
											<select name="holidaysDuration" id="holidaysDuration" class="input-mini">
												<?php for ($j = 1; $j <= 8; $j++) {
													echo '<option value="' . $j . '">' . $j . '</option>';
												}
												?>
											</select></td>
									</tr>
									<tr>
										<td height="0" colspan="4" bgcolor="#F2F2F2">&nbsp;</td>
									</tr>
									<tr>
										<td width="0" height="0" bgcolor="#DFEBF4">Cost per Week<br>

											<div class="input-prepend pull-left" style="margin-right:2em;">
												<span class="add-on">$</span>
												<input type="text" name="weeklyCost" id="weeklyCost" class="span2 inst1"
												       placeholder="Cost AU$ per Week"/>
											</div>
										</td>
										<td height="0" bgcolor="#DFEBF4">Duration (Weeks)<br>
											<select name="courseDuration" id="courseDuration" class="input-mini inst1">
												<?php for ($j = 1; $j <= 250; $j++) {
													echo '<option value="' . $j . '">' . $j . '</option>';
												}
												?>
											</select>
										</td>
										<td height="0" bgcolor="#DFEBF4">Number of Instalments<br>
											<select name="instalmentsNo" id="instalmentsNo" class="input-mini inst1">
												<?php for ($j = 1; $j <= 4; $j++) {
													echo '<option value="' . $j . '">' . $j . '</option>';
												}
												?>
											</select></td>
										<td width="0" height="0" bgcolor="#DFEBF4">Enrolment Fee<br>

											<div class="input-prepend pull-left" style="margin-right:2em;">
												<span class="add-on">$</span>
												<input type="text" class="span2 inst1" name="courseEnrolmentFee"
												       id="courseEnrolmentFee" placeholder="Enrolment Fee AU$"/>
											</div>
										</td>
									</tr>
									<tr>
										<td width="0" height="0" bgcolor="#F2F2F2">Materials (AU$)<br>

											<div class="input-prepend pull-left" style="margin-right:2em;">
												<span class="add-on">$</span>
												<input type="text" name="materialsCost" id="materialsCost"
												       class="span2 inst1" placeholder="Materials Cost AU$"/>
											</div>
										</td>
										<td height="0" bgcolor="#F2F2F2"> Deposit<br>

											<div class="input-prepend pull-left" style="margin-right:2em;">
												<span class="add-on">$</span>
												<input type="text" name="deposit" id="deposit" class="span2 inst1"
												       placeholder="Deposit AU$"/>
											</div>
										</td>
										<td height="0" bgcolor="#F2F2F2">Bond<br>

											<div class="input-prepend pull-left" style="margin-right:2em;">
												<span class="add-on">$</span>
												<input type="text" name="bond" id="bond" class="span2 inst1"
												       placeholder="If eligible AU$"/>
											</div>
										</td>
										<td height="0" colspan="3" bgcolor="#F2F2F2">Instalment Fee<br>

											<div class="input-prepend pull-left" style="margin-right:2em;"><span
													class="add-on">$</span>
												<input type="text" name="instalmentFee" id="instalmentFee"
												       class="input-mini inst1" placeholder="Instalment Fee AU$"/>
											</div>
										</td>
									</tr>
									<tr>
										<td width="0" height="0" bgcolor="#DFEBF4"></td>
										<td height="0" colspan="2" bgcolor="#DFEBF4"></td>
										<td width="0" height="0" bgcolor="#DFEBF4"></td>
									</tr>
								</table>
							</div>
							<!-- Additional Instalments --><!-- --><!-- --><!-- -->
							<!-- Aditional Instalments END -->
						</td>
					</tr>

					<tr>
						<td colspan="6" bgcolor="#F2F2F2">
							<table class="table table-condensed">

								<tr>
									<td align="left" valign="middle">Health Cover<br>
										<input type="text" name="healthFund" id="healthFund" class="span2"/>
									</td>
									<td align="left" valign="middle"><span class="add-on">Cost AU$</span><br>

										<div class="input-prepend pull-left"><span class="add-on">$</span>
											<input type="text" class="span2 inst1" name="healthCost" id="healthCost"
											       placeholder="Cost AU$"/>
										</div>
									</td>
									<td align="left" valign="middle">
										<div class="pull-left span2"> Months<br>
											<select name="mediBankMonths" id="mediBankMonths" class="input-mini"
											        placeholder="Months">
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
									<td colspan="2" align="left" valign="middle">Visas Fees AU$<br>

										<div class="input-prepend pull-left"><span class="add-on">$</span>
											<input type="text" class="span2 inst1" name="visaFees" id="visaFees"
											       placeholder="Visa Fees AU$"/>
										</div>
									</td>
									<td colspan="2" align="left" valign="middle" bgcolor="#CCCCCC">Total Amount Due<br>

										<div class="input-prepend pull-left"><span class="add-on">$</span>
											<input type="text" class="span2 inst1" name="totalAmountDue"
											       id="totalAmountDue" placeholder="Total Amount Due AU$"/>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="left" valign="middle">Amount Paid AU$<br>

										<div class="input-prepend pull-left"><span class="add-on">$</span>
											<input type="text" class="span2 inst1" name="visaFees" id="visaFees"
											       placeholder="Visa Fees AU$"/>
										</div>
									</td>
									<td colspan="2" align="left" valign="middle" bgcolor="#FF9999">Amount Outstanding
										AU$<br>

										<div class="input-prepend pull-left"><span class="add-on">$</span>
											<input type="text" class="span2 inst1" name="visaFees" id="visaFees"
											       placeholder="Visa Fees AU$"/>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="4" align="left" valign="middle">Comments:
										<textarea name="quoteNotes" id="textarea" rows="4" class="span6"></textarea>
									</td>
								</tr>
							</table>
						</td>
						<!-- <td bgcolor="#F2F2F2">&nbsp;</td> -->
					</tr>
					<tr>
						<td colspan="6">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="6">
							<div class="form-actions">
								<button type="submit" class="btn btn-primary pull-right" name="submit" id="submit">Save
									changes
								</button>
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
