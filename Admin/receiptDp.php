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
		$inst = $_GET['inst'];
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
		$searchQuote = new QuoteDp();
		//
		$searchQuote->personID = $_POST['email']; //$_GET['keyVal'];//
		//////////////////////////////////
		$searchQuote->searchQuote();
		//
		$result = json_decode($searchQuote->results, TRUE);
		//
		if (!is_null($result)) {
			//echo 'the jSon array is NOT empty<br>';
			echo $test['instalmentFee'] . "<br>";
			//print_r($result);
		} else echo 'the jSon array IS empty<br>';
//
		//
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		switch ($inst) {
			case 1:
				$searchAfterIns = 'SELECT quoteType, quoteTitle, personID, courseName, college, collegeLocation, currentCourseEndDate, newCourseStartDate, newCourseEndDate, courseDuration,
                                instalmentsNo, courseTimeTable, weeklyCost, materialsCost, courseEnrolmentFee, courseInstalment, deposit, bond, holidaysDuration, instalmentFee, totalCourseFees, 
                                instOne, healthFund, mediBankMonths, mediBankCost, healthCoverType, visaFees, totalCost, quoteNotes, quoteCreated ';
				$searchAfterIns .= 'FROM quotations ';
				$searchAfterIns .= 'WHERE personID = "' . $keyVal . '" ';
				$searchAfterIns .= 'ORDER BY quoteNo DESC LIMIT 1';
				//print_r($searchAfterIns);die();
				//
				$searchColleges = 'SELECT entity_name ';
				$searchColleges .= 'FROM education_provider ';
				$searchColleges .= 'WHERE edu_providerID IN (1)';
				//print_r($searchColleges);die();
				//
				$rsColleges = $mysqli->query($searchColleges);
				$resultColleges = $rsColleges->fetch_array();
				//
				$colleges = array();

				do {
					$colleges[] = $resultColleges['entity_name'];
				} while ($resultColleges = $rsColleges->fetch_array());
				//
				$instalment = 1;
				break;

			case 2:
				$searchAfterIns = 'SELECT quoteType, quoteTitle, personID, courseName2, college2, collegeLocation2, newCourseStartDate2, newCourseEndDate2, courseDuration2,
                                instalmentsNo, courseTimeTable2, weeklyCost2, materialsCost2, courseEnrolmentFee2, courseInstalment2, holidaysDuration2, instalmentFee2, totalCourseFees, 
                                instTwo, healthFund, mediBankMonths, mediBankCost, healthCoverType, visaFees, totalCost, quoteNotes, quoteCreated ';
				$searchAfterIns .= 'FROM quotations ';
				$searchAfterIns .= 'WHERE personID = "' . $keyVal . '" ';
				$searchAfterIns .= 'ORDER BY quoteNo DESC LIMIT 1';
				//print_r($searchAfterIns);die();
				//
				$searchColleges = 'SELECT entity_name ';
				$searchColleges .= 'FROM education_provider ';
				$searchColleges .= 'WHERE edu_providerID IN (2)';
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
				$instalment = 2;
				break;
		}
		//var_dump($searchAfterIns);die;
		//
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
	<form id="createPaymentReceipt" name="createPaymentReceipt" method="post" action="createPayReceipt.php">
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
					<td align="center" valign="middle"><h2>STUDENT RECEIPT VETA</h2></td>
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
								<dt><strong>Mobile Phone</strong></dt>
								<dd><?php if ($personalDetails->mobilePhone == '') {
										echo "&nbsp;";
									} else echo $personalDetails->mobilePhone; ?></dd>
								<dt><strong>Email</strong></dt>
								<dd><?php echo $keyVal; ?></dd>
								<dt>&nbsp;</dt>
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
			<input type="hidden" name="email" id="email" value="<?php echo $keyVal; ?>"/>
			<input type="hidden" name="stCounsellor" id="stCounsellor"
			       value="<?php echo $personalDetails->stCounsellor; ?>"/>
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
			<input type="hidden" name="totalAmountDue" id="totalAmountDue"
			       value="<?php $totalDue = $result['instOne'] + $result['mediBankCost'] + $result['visaFees'] + $result['deposit'] - $result['bond'];
			       echo $totalDue; ?>"/>
			<input type="hidden" name="instTwo" id="instTwo" value="<?php echo $result['instTwo']; ?>"/>
			<input type="hidden" name="instThree" id="instThree" value="<?php echo $result['instThree']; ?>"/>
			<input type="hidden" name="instFour" id="instFour" value="<?php echo $result['instFour']; ?>"/>
			<input type="hidden" name="quoteNotes" id="quoteNotes" value="<?php echo $result['quoteNotes']; ?>"/>
			<!-- -->
		</td>
	</tr>
	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Instalment No. <?php echo $instalment; ?></legend>
				<table border="0" cellspacing="1" cellpadding="4" class="table table-condensed">

					<tr>
						<td colspan="6">
							<div name="quotation">
								<table border="0" cellspacing="1" cellpadding="4" class="table table-hover">
									<tr>
										<td height="0" colspan="4" align="left" valign="middle" bgcolor="#F2F2F2">
											<strong>Receipt Number:</strong></td>
									</tr>
									<tr>
										<td height="0" colspan="4" align="left" valign="middle" bgcolor="#DFEBF4">
											<div class="input-prepend">
												<span class="add-on"><strong>Payment
														Fees:</strong> <?php echo $result['quoteTitle']; ?></span>
												<!-- <input name="quoteTitle" type="text" class="span9" id="prependedInput" placeholder="What are the Courses on this Quote..." maxlength="100"> -->
											</div>
										</td>
									</tr>
									<tr>
										<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>Course
												Name</strong><br>
											<?php echo $result['courseName']; ?>
											<!-- <input type="text" name="courseName" id="courseName" class="span2"  /></td> -->
										<td height="0" colspan="2" align="left" valign="middle" bgcolor="#F2F2F2">
											<strong>Education Cen</strong><br>
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
										<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>Time
												Table</strong><br>
											<?php echo $result['courseTimeTable']; ?>
										</td>
									</tr>
									<tr>
										<td width="0" height="0" bgcolor="#DFEBF4"><strong>Current Course End
												Date</strong><br>
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
										<td width="0" height="0" bgcolor="#DFEBF4"><strong>Holidays Duration
												(Weeks)</strong><br>
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
										<td width="0" height="0" bgcolor="#F2F2F2"><strong>Cost per Week</strong><br>
											<strong>$</strong><?php echo $result['weeklyCost']; ?>

										</td>
										<td height="0" bgcolor="#F2F2F2"><strong>Duration (Weeks)</strong><br>
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
										<td width="0" height="0" bgcolor="#F2F2F2"><strong>Instalment
												No. <?php echo $instalment; ?></strong><br>
											<strong>$</strong><?php echo $result['instOne']; ?></td>
										<td height="0" colspan="2" bgcolor="#F2F2F2"><strong>Total Instalment
												No. <?php echo $instalment; ?></strong><br>
											<strong>$</strong><?php echo $result['totalInstOne']; ?></td>
										<td width="0" height="0" bgcolor="#F2F2F2"></td>
									</tr>

								</table>
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="6" bgcolor="#F2F2F2">
							<table class="table table-condensed">

								<tr>
									<td align="left" valign="middle"><strong>Health Fund</strong><br>
										<?php echo $result['healthFund']; ?>
									</td>
									<td align="left" valign="middle"><span class="add-on"><strong>Cost
												AU$</strong></span><br>
										<strong>$</strong><?php echo $result['mediBankCost']; ?>
									</td>
									<td align="left" valign="middle">
										<div class="pull-left span2">
											<strong>Months</strong><br>
											<?php echo $result['mediBankMonths']; ?>
									</td>
									<td align="left" valign="middle"><span class="add-on"><strong>Health Cover
												Type</strong></span><br>
										<?php echo $result['healthCoverType']; ?>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="left" valign="middle"><strong>Visas Fees AU$</strong><br>
										<strong>$</strong><?php echo $result['visaFees']; ?>
									</td>
									<td colspan="2" align="left" valign="middle" bgcolor="#CCCCCC"><strong
											class="style5">Total Amount Due<br>
											$</strong>                        <?php $totalDue = $result['instOne'] + $result['mediBankCost'] + $result['visaFees'] + $result['deposit'] - $result['bond'];
										echo $totalDue; ?>
										<input type="hidden" name="totalAmount" id="totalAmount"
										       value="<?php echo $totalDue; ?>"/>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="left" valign="middle"><strong>Amount Paid AU$</strong><br>

										<div class="input-prepend pull-left"><span class="add-on">$</span>
											<input type="text" class="span2 inst1" name="amountPay" id="amountPay"
											       placeholder="Amount Paid AU$"/>
										</div>
									</td>
									<td colspan="2" align="left" valign="middle" bgcolor="#FFCCCC"><strong>Amount
											Outstanding AU$</strong><br>

										<div class="input-prepend pull-left"><span class="add-on">$</span>
											<input type="text" class="span2 inst1" name="amountOustanding"
											       id="amountOustanding" placeholder="Amount Outstanding AU$"/>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="4" align="left" valign="middle"><strong>Comments:</strong>
										<textarea name="receiptNotes" id="receiptNotes" rows="4"
										          class="span6"></textarea> <br></td>
								</tr>
								<tr>
									<td colspan="4" align="left" valign="middle"><strong>Received By:</strong>
										<input type="text" class="span2 inst1" name="receivedBy" id="receivedBy"
										       placeholder="in VETA Received By: "/><br></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="6">
							<div class="form-actions pull-right">
								<button type="submit" class="btn btn-warning btn-large" name="submit" id="submit">Create
									Pay Receipt
								</button>
							</div>
						</td>
					</tr>
					<tr>
						<td style="line-height: 2em;" colspan="6"></td>
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
