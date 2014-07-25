<?php
	session_start();
	if (isset($_SESSION['login'])) {
	//////////////////////////////////
	require'inc/engPreviewPayment.php';
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>VETA - ENGLISH</title>
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
							<td align="center" valign="middle"><h2>PREVIEW - ENGLISH COURSE QUOTE </h2></td>
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

										<dt><strong>Profession</strong></dt>
										<dd>
											<?php if ($profession == '') {
												echo "&nbsp;";
											} else echo $profession; ?>
										</dd>

										<dt><strong>Email</strong></dt>
										<dd><?php echo $keyVal; ?></dd>

									</dl>
								</div>
							</td>
							<td align="left" valign="top">
								<div class="pull-right span6">
									<dl class="dl-horizontal">
										<dt><strong>Student Name</strong></dt>
										<dd><?php echo $fullName; ?></dd>
										<dt><strong>Mobile Phone</strong></dt>
										<dd>
											<?php if ($mobilePhone == '') {
												echo "&nbsp;";
											} else echo $mobilePhone; ?>
										</dd>
										<dt><strong>Visa Expiry Date</strong></dt>
										<dd>
											<?php if (empty($expiryDate)) {
												echo "&nbsp;";
											} else echo $expiryDate; ?>
										</dd>
									</dl>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="courseNo" id="courseNo" value="<?php echo $courseNo; ?>"/>
					<input type="hidden" name="today" id="today" value="<?php echo date('l jS \of F Y h:i:s A'); ?>"/>
					<input type="hidden" name="studentName" id="studentName"
					       value="<?php echo $personResults['firstName'] . '&nbsp;' . $personResults['lastName']; ?>"/>
					<input type="hidden" name="profession" id="profession"
					       value="<?php echo $personResults['profession']; ?>"/>
					<input type="hidden" name="mobilePhone" id="mobilePhone"
					       value="<?php echo $personResults['mobilePhone']; ?>"/>
					<input type="hidden" name="email" id="email" value="<?php echo $keyVal; ?>"/>
					<input type="hidden" name="expiryDate" id="expiryDate" value="<?php echo $expiryDate; ?>"/>
					<!-- -->
					<input type="hidden" name="email" id="email" value="<?php echo $keyVal; ?>"/>
				</td>
			</tr>

			<tr>
				<td>
					<?php
						if ($courseNo == 1 /*&& $paymentResult['college'] > 0*/) {
							include_once 'eng-course-one.php';
						} elseif ($courseNo > 1 /*&& $paymentResult['college'] > 0*/) {
							include_once 'eng-course-rest.php';
						} else {
							echo "<code>Sorry!! Something isn't working properly...</code>" . $paymentResult['college'] . "<br>";
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
						<tr>
							<td colspan="3">
								<?php if ($courseNo == 1) {
									echo "<strong>Notes</strong><br>";
									echo "<div style=\"width:450px; height:120px; display:block;\">";
									echo $paymentNotes;
									echo "</div>";
								} ?>
							</td>
						</tr>
						<tr style="display:none;">
							<td height="50" align="left" valign="middle" bgcolor="#E2E2E2">
								<strong class="style5">Total Study Weeks</strong><br>
								<strong class="style5"># </strong><?php echo $totalStudyWeeks; ?>
							</td>
							<td height="50" align="left" valign="middle" bgcolor="#E2E2E2">
								<strong class="style5">Total Instalment(s)</strong><br>
								<strong class="style5">$</strong><?php echo $totalInstalmentsVal; ?>
							</td>
							<td height="50" align="left" valign="middle" bgcolor="#E2E2E2">
								<strong class="style5">Total Course(s) Fee</strong><br>
								<strong class="style5">$</strong><?php echo $totalCoursesFee; ?>
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
	<!-- <script src="../js/livevalidation_standalone.js" type="text/javascript"></script> -->
	<!-- <link href="../css/validateForm.css" rel="stylesheet" type="text/css" /> -->
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	<script src="js/payments.js" type="text/javascript"></script>
	<!-- <script src="js/quotesOps.js" type="text/javascript"></script> -->
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";

