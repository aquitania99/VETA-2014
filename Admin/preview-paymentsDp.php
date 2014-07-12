<?php
	session_start();
	if (isset($_SESSION['login'])) {
	//////////////////////////////////
	require'inc/dipPreviewPayment.php';
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>VETA - DIPLOMA(S)</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
		<!-- // -->
		<style type="text/css">

			.moreInstalments {
				margin-top: 1.5em;
				margin-bottom: 1.5em;
			}

			.field {
				width: 100px;
				line-height: 1.1em;
				font-family: Verdana, Geneva, sans-serif;
				font-size: small;
				color: #333;
			}

			body {
				background-color: #FFFFFF;
			}
		</style>
	</head>

	<body>
	<form id="createPaymentReceipt" name="createPaymentReceipt" method="post" action="createStudentReceipt.php">
		<br/>
		<input type="hidden" value="<?php echo $keyVal; ?>" name="eaddress" id="eaddress"/>
		<input type="hidden" name="courseType" id="courseType" value="diploma"/>
		<br/>
		<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" class="bordes">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="211" rowspan="2"><img src="images/logomodulo.gif" alt="" width="194" height="106"
							                                 align="absmiddle"/></td>
							<td align="right" valign="middle"></td>
						</tr>
						<tr>
							<td align="center" valign="middle"><h2>PREVIEW - DIPLOMA </h2></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td align="left" valign="top">
								<div class="pull-left span5">
									<dl class="dl-horizontal">
										<dt><strong>Today's Date</strong></dt>
										<dd><?php echo date('l jS \of F Y h:i A'); ?></dd>
										<dt><strong>Student Name</strong></dt>
										<dd><?php echo $fullName; ?></dd>
										<dt><strong>Profession</strong></dt>
										<dd>
											<?php if ($profession == '') {
												echo "&nbsp;";
											} else echo $profession; ?>
										</dd>
										<dt><strong>Mobile Phone</strong></dt>
										<dd>
											<?php if ($mobilePhone == '') {
												echo "&nbsp;";
											} else echo $mobilePhone; ?>
										</dd>
										<dt><strong>Email</strong></dt>
										<dd><?php echo $keyVal; ?></dd>
										<dt><strong>Visa Expiry Date</strong></dt>
										<dd>
											<?php if ($expiryDate == '') {
												echo "&nbsp;";
											} else echo $expiryDate; ?>
										</dd>
									</dl>
								</div>
							</td>
							<td align="left" valign="top">
								<div class="pull-right span6">
									<dl class="dl-horizontal">
										<dt><strong>Counsellor</strong></dt>
										<dd><?php echo $counsellor; ?></dd>
										<dt><strong>Counsellor Mobile</strong></dt>
										<dd><?php echo $cMobile; ?></dd>
										<dt><strong>Counsellor Email</strong></dt>
										<dd><?php echo $cEmail; ?></dd>
									</dl>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="today" id="today" value="<?php echo date('l jS \of F Y h:i:s A'); ?>"/>
					<input type="hidden" name="courseType" id="courseType" value="diploma"/>
					<input type="hidden" name="studentName" id="studentName"
					       value="<?php echo $personalDetails->firstName . '&nbsp;' . $personalDetails->lastName; ?>"/>
					<input type="hidden" name="profession" id="profession"
					       value="<?php echo $personalDetails->profession; ?>"/>
					<input type="hidden" name="mobilePhone" id="mobilePhone"
					       value="<?php echo $personalDetails->mobilePhone; ?>"/>
					<input type="hidden" name="email" id="email" value="<?php echo $keyVal; ?>"/>
					<input type="hidden" name="expiryDate" id="expiryDate" value="<?php echo $expiryDate; ?>"/>
					<!-- -->
					<input type="hidden" name="email" id="email" value="<?php echo $keyVal; ?>"/>
					<input type="hidden" name="stCounsellor" id="stCounsellor"
					       value="<?php echo $personalDetails->stCounsellor; ?>"/>
					<input type="hidden" name="cMobile" id="cMobile" value="<?php echo "Mobile"; ?>"/>
					<input type="hidden" name="cEmail" id="cEmail" value="<?php echo "Email"; ?>"/>
					<!--
                    <input type="hidden" name="payReceipt" id="payReceipt" value="<?php echo "veta-002-2013"; //$paymentResult['receiptOne']; ?>" />
					<input type="hidden" name="paymentTitle" id="paymentTitle" value="<?php echo $paymentResult['paymentTitle']; ?>" />
					<input type="hidden" name="college" id="college" value="<?php echo $colleges; ?>" />
					<input type="hidden" name="courseName" id="courseName" value="<?php echo $paymentResult['courseName']; ?>" />
					<input type="hidden" name="newCourseStartDate" id="newCourseStartDate" value="<?php echo $paymentResult['newCourseStartDate']; ?>" />
					<input type="hidden" name="newCourseEndDate" id="newCourseEndDate" value="<?php echo $paymentResult['newCourseEndDate']; ?>" />
					<input type="hidden" name="holidaysDuration" id="holidaysDuration" value="<?php echo $paymentResult['holidaysDuration']; ?>" />
					<input type="hidden" name="courseTimeTable" id="courseTimeTable" value="<?php echo $paymentResult['courseTimeTable']; ?>" />
					<input type="hidden" name="weeklyCost" id="weeklyCost" value="<?php echo $paymentResult['weeklyCost']; ?>" />
					<input type="hidden" name="courseDuration" id="courseDuration" value="<?php echo $paymentResult['courseDuration']; ?>" />
					<input type="hidden" name="courseInstalment" id="courseInstalment" value="<?php echo $paymentResult['courseInstalment']; ?>" />
					<input type="hidden" name="courseEnrolmentFee" id="courseEnrolmentFee" value="<?php echo $paymentResult['courseEnrolmentFee']; ?>" />
					<input type="hidden" name="materialsCost" id="materialsCost" value="<?php echo $paymentResult['materialsCost']; ?>" />
					<input type="hidden" name="totalCourseFees" id="totalCourseFees" value="<?php echo $paymentResult['totalCourseFees']; ?>" />
					<!-- -->
					<?php if ($courseNo == 1) { ?>
					<input type="hidden" name="courseEnrolmentFee" id="courseEnrolmentFee" value="<?php echo $paymentResult['courseEnrolmentFee']; ?>" />
					<input type="hidden" name="materialsCost" id="materialsCost" value="<?php echo $paymentResult['materialsCost']; ?>" />
					<input type="hidden" name="instOne" id="instOne"
					       value="<?php echo $paymentResult['instalment']; ?>"/>
					<input type="hidden" name="instalmentFee" id="instalmentFee"
					       value="<?php echo $paymentResult['instalmentFee']; ?>"/>
					<input type="hidden" name="deposit" id="deposit" value="<?php echo $paymentResult['deposit']; ?>"/>
					<input type="hidden" name="bond" id="bond" value="<?php echo $paymentResult['bond']; ?>"/>
					<input type="hidden" name="healthFund" id="healthFund"
					       value="<?php echo $paymentResult['healthFund']; ?>"/>
					<input type="hidden" name="mediBankMonths" id="mediBankMonths"
					       value="<?php echo $paymentResult['healthCoverMonths']; ?>"/>
					<input type="hidden" name="healthCost" id="healthCost"
					       value="<?php echo $paymentResult['healthCost']; ?>"/>
					<input type="hidden" name="visaFees" id="visaFees"
					       value="<?php echo $paymentResult['visaFees']; ?>"/>
					<input type="hidden" name="totalAmountDue" id="totalAmountDue" value="<?php echo $paymentResult['totalAmountDue'];//$totalDue; ?>"/>
					<!-- -->
					<input type="hidden" name="instalments" id="instalments"
					       value="<?php echo $paymentResult['instalment']; ?>"/>

					<input type="hidden" name="quoteNotes" id="quoteNotes"
					       value="<?php echo $paymentResult['quoteNotes']; ?>"/>
					<!-- -->
					<input type="hidden" name="totalStudyWeeks" id="totalStudyWeeks"
					       value="<?php echo $totalStudyWeeks; ?>"/>
					<input type="hidden" name="totalInstalmentsVal" id="totalInstalmentsVal"
					       value="<?php echo $paymentResult['totalInstalmentsVal'];//$totalInstalmentsVal; ?>"/>
					<input type="hidden" name="totalCoursesFee" id="totalCoursesFee"
					       value="<?php echo $paymentResult['totalCoursesFee'];//$totalCoursesFee; ?>"/></td>
		<?php } ?>
			</tr>

			<tr>
				<td>
					<!-- -->
					<?php
					if ($courseNo == 1 && $paymentResult['college'] > 0) {
						include_once 'diploma-inst-one.php';
					} elseif ($courseNo > 1 && $paymentResult['college'] > 0) {
						include_once 'diploma-rest-insts.php';
						//echo "<code><pre>REQUIRE DIPLOMA-REST-INST.php</pre></code><br>";
					}
					?>
					<!-- -->
				</td>
			</tr>
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
						<?php if(!empty($paymentResult['quoteNotes'])){ ?>
						<tr>
							<td colspan="3">
								<strong>Notes</strong><br>

								<div style="width:450px; height:120px; display:block;">
									<?php echo $paymentResult['quoteNotes']; ?>
								</div>
							</td>
						</tr>
						<?php } ?>
						<tr style="display:none;">
							<td height="50" align="left" valign="middle" bgcolor="#E2E2E2">
								<strong class="style5">Total Study Terms</strong><br>
								<strong class="style5"># </strong><?php echo $totalStudyWeeks; ?>
							</td>
							<td height="50" align="left" valign="middle" bgcolor="#E2E2E2">
								<strong class="style5">Total Instalment(s)</strong><br>
								<strong class="style5">$</strong><?php echo $paymentResult['totalInstalmentsVal'];//$totalInstalmentsVal; ?>
							</td>
							<td height="50" align="left" valign="middle" bgcolor="#E2E2E2">
								<strong class="style5">Total Course(s) Fee</strong><br>
								<strong class="style5">$</strong><?php echo $paymentResult['totalCoursesFee'];//$totalCoursesFee; ?>
							</td>
						</tr>
					</table>
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
	<!-- <link href="../css/validateForm.css" rel="stylesheet" type="text/css" /> -->
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	<script src="js/paymentsDp.js" type="text/javascript"></script>
	<!-- <script src="js/quotesOps.js" type="text/javascript"></script> -->
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";