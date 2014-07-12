<em></em><?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
//require('classes/college.php'); 
require('classes/person.php');
//require('classes/quote.php');
//require('classes/payReceipt.php');
//////////////////////////////////
if (isset($_SESSION['login'])) {
//////////////////////////////////
	$modifBy = $_SESSION['login'];
//$db = Database::getInstance();
//$mysqli = $db->getConnection();
	$search = $_POST['search'];
//
//var_dump($search);
	if (isset($_POST['search'])) {
		//$keyVal = $_GET['keyVal'];
		$keyVal = $_POST['email'];
		//$keyVal = 'lala@something.com';
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
		//$searchQuote = new PayReceipt();
		//
		//$searchQuote->personID =  $_POST['email']; //$_GET['keyVal'];//
		//////////////////////////////////
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		/*echo "<script type='text/javascript'>alert('inside the thingy...');</script>";*/
		$searchQuotes = 'SELECT * ';
		$searchQuotes .= 'FROM quotations ';
		$searchQuotes .= 'WHERE personID = \'' . $_POST['email'] . '\' AND quoteType = \'English\' AND instalmentsNo != 0 ';
		$searchQuotes .= 'ORDER BY quoteNo';
		//
		//print_r($searchQuotes); echo "<br>";
		$rsSearchQry = $mysqli->query($searchQuotes);
		//
		$resultQuote = $rsSearchQry->fetch_array();
		//
		/*echo "<script type='text/javascript'>alert('inside the thingy...');</script>";*/
		$searchDiplomas = 'SELECT * ';
		$searchDiplomas .= 'FROM quotations ';
		$searchDiplomas .= 'WHERE personID = \'' . $_POST['email'] . '\' AND quoteType = \'Diploma\' AND instalmentsNo = 0 ';
		$searchDiplomas .= 'ORDER BY quoteNo';
		//
		//print_r($searchDiplomas);die;
		$rsSearchDp = $mysqli->query($searchDiplomas);
		//
		$resultQuoteDp = $rsSearchDp->fetch_array();
		//

		$searchColleges = 'SELECT entity_name ';
		$searchColleges .= 'FROM education_provider ';
		$searchColleges .= 'WHERE edu_providerID IN (' . $resultQuote['college'] . ',' . $resultQuote['college2'] . ',' . $resultQuote['college3'] . ',' . $resultQuote['college4'] . ', ';
		$searchColleges .= $resultQuoteDp['college'] . ', ' . $resultQuoteDp['college2'] . ')';
		//print_r($searchColleges);die();
		//
		$rsColleges = $mysqli->query($searchColleges);
		//
		$resultColleges = $rsColleges->fetch_array();
		//var_dump($resultColleges);die;
		//
		$colleges = array();
		//
		do {
			$colleges[] = $resultColleges['entity_name'];
		} while ($resultColleges = $rsColleges->fetch_array());
	}
//
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>VETA - PAYMENT RECEIPT PREVIEW DATA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
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
	<!-- -->
	<?php if (isset($search)){ ?>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
		<tr>
			<td valign="top">
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
						                                 align="absmiddle"/></td>
						<td align="right" valign="middle">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" valign="middle"><h2>PAYMENT RECEIPT</h2></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="middle">
				<fieldset>
					<legend></legend>
					<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
						<tr>
							<td width="0" height="100">
								<div class="span7 table-hover">
									<table width="900" class="table table-condensed">
										<tr>
											<th>Student Name</th>
											<th>Email Address</th>
											<th>Phone Number</th>
											<th>VETA Counsellor</th>
											<th></th>
										</tr>

										<tbody>
										<tr>
											<td> <?php echo $personalDetails->firstName . " " . $personalDetails->lastName; ?> </td>
											<td> <?php echo $result['personID']; ?> </td>
											<td> <?php echo $personalDetails->mobilePhone; ?> </td>
											<td> <?php echo $personalDetails->stCounsellor; ?> </td>
											<td></td>
										</tr>
										</tbody>
									</table>
								</div>
								<div class="clearfix"></div>
								<div class="span7 table-hover">
									<?php
									if ($resultQuote['quoteType'] == 'English') {
									?>
									<table width="900" class="table table-condensed">
										<tr>
											<th></th>
											<th>Studies Ref.</th>
											<th>College</th>
											<th>Course Name</th>
											<th>Instalment No.</th>
											<th>Amount Payable</th>
											<th>Amount Outstanding</th>
											<th>Status</th>
											<th>Receipt Created On</th>
										</tr>

										<tbody>
										<?php
										if ($resultQuote['college'] != '') {
											?>
											<tr>
												<td>
													<a class="btn btn-mini  btn-info"
													   href="receipt2.php?keyVal=<?php echo $resultQuote['personID']; ?>&inst=1"
													   name="paymentReceipt1" target="_blank" id="paymentReceipt1"><i
															class="icon-zoom-in"></i>View</a>
												</td>
												<td> <?php echo $resultQuote['quoteType']; ?> </td>
												<td> <?php echo $colleges[0]; ?> </td>
												<td><?php echo $resultQuote['courseName']; ?></td>
												<td><?php echo "<span class=\"badge badge-info\">" . $resultQuote['instOne'] . "</span>"; ?></td>
												<td><?php echo $i; ?></td>
												<td><?php echo $i; ?></td>
												<td> <?php if ($amountOut = 0) {
														echo "<span class=\"label\">Inactive</span>";
													}
													if ($amountOut > 0) {
														echo "<span class=\"label label-warning\">Active</span>";
													}
													if ($amountOut < 0) {
														echo "<span class=\"label label-success\">Fully Paid</span>";
													} ?> </td>
												<td> <?php echo $colleges['receiptDate']; ?> </td>
											</tr>
										<?php
										}
										if ($resultQuote['college2'] != '') {
											?>
											<tr>
												<td>
													<a class="btn btn-mini  btn-info"
													   href="receipt2.php?keyVal=<?php echo $resultQuote['personID']; ?>&inst=2"
													   name="paymentReceipt2" target="_blank" id="paymentReceipt2"><i
															class="icon-zoom-in"></i>View</a>
												</td>
												<td> <?php echo $resultQuote['quoteType']; ?> </td>
												<td> <?php echo $colleges[1]; ?> </td>
												<td><?php echo $resultQuote['courseName2']; ?></td>
												<td><?php echo "<span class=\"badge badge-info\">" . $resultQuote['instTwo'] . "</span>"; ?></td>
												<td><?php echo $i; ?></td>
												<td><?php echo $i; ?></td>
												<td> <?php if ($amountOut = 0) {
														echo "<span class=\"label\">Inactive</span>";
													}
													if ($amountOut > 0) {
														echo "<span class=\"label label-warning\">Active</span>";
													}
													if ($amountOut < 0) {
														echo "<span class=\"label label-success\">Fully Paid</span>";
													} ?> </td>
												<td> <?php echo $colleges['receiptDate']; ?> </td>
											</tr>
										<?php }
										if ($resultQuote['college3'] != 0) { ?>
											<tr>
												<td>
													<a class="btn btn-mini  btn-info"
													   href="receipt2.php?keyVal=<?php echo $resultQuote['personID']; ?>&inst=3"
													   name="paymentReceipt3" target="_blank" id="paymentReceipt3"><i
															class="icon-zoom-in"></i>View</a>
												</td>
												<td> <?php echo $resultQuote['quoteType']; ?> </td>
												<td> <?php echo $colleges[2]; ?> </td>
												<td><?php echo $resultQuote['courseName' . ($i - 1)]; ?></td>
												<td><?php echo "<span class=\"badge badge-info\">" . $resultQuote['instThree'] . "</span>"; ?></td>
												<td><?php echo $i; ?></td>
												<td><?php echo $i; ?></td>
												<td> <?php if ($amountOut = 0) {
														echo "<span class=\"label\">Inactive</span>";
													}
													if ($amountOut > 0) {
														echo "<span class=\"label label-warning\">Active</span>";
													}
													if ($amountOut < 0) {
														echo "<span class=\"label label-success\">Fully Paid</span>";
													} ?> </td>
												<td> <?php echo $colleges['receiptDate']; ?> </td>
											</tr>
										<?php }
										if ($resultQuote['college4'] != 0) { ?>
											<tr>
												<td>
													<a class="btn btn-mini  btn-info"
													   href="receipt2.php?keyVal=<?php echo $resultQuote['personID']; ?>&inst=4"
													   name="paymentReceipt4" target="_blank" id="paymentReceipt4"><i
															class="icon-zoom-in"></i>View</a>
												</td>
												<td> <?php echo $resultQuote['quoteType']; ?> </td>
												<td> <?php echo $colleges[3]; ?> </td>
												<td><?php echo $resultQuote['courseName' . ($i - 1)]; ?></td>
												<td><?php echo "<span class=\"badge badge-info\">" . $resultQuote['instFour'] . "</span>"; ?></td>
												<td><?php echo $i; ?></td>
												<td><?php echo $i; ?></td>
												<td> <?php if ($amountOut = 0) {
														echo "<span class=\"label\">Inactive</span>";
													}
													if ($amountOut > 0) {
														echo "<span class=\"label label-warning\">Active</span>";
													}
													if ($amountOut < 0) {
														echo "<span class=\"label label-success\">Fully Paid</span>";
													} ?> </td>
												<td> <?php echo $colleges['receiptDate']; ?> </td>
											</tr>
										<?php } ?>
										</tbody>
									</table>
								</div>
								<?php }
								if ($resultQuoteDp['quoteType'] == 'Diploma') { ?>
									<div class="clearfix"></div>
									<div class="span7 table-hover">
										<table width="900" class="table table-condensed">
											<tr>
												<th></th>
												<th>Studies Ref.</th>
												<th>College</th>
												<th>Instalment No.</th>
												<th>Amount Payable</th>
												<th>Amount Outstanding</th>
												<th>Status</th>
												<th>Receipt Created On</th>
											</tr>
											<tbody>
											<?php
											$i = 1;
											for ($i; $i <= 2; $i++) {
												?>
												<tr>
													<td><a class="btn btn-mini  btn-info"
													       href="receipt2.php?keyVal=<?php echo $resultQuoteDp['personID']; ?>&inst=<?php echo $i; ?>"
													       name="paymentReceipt<?php echo $i; ?>"
													       id="paymentReceipt<?php echo $i; ?>2"><i
																class="icon-zoom-in"></i>View</a></td>
													<td><?php echo $resultQuoteDp['quoteType']; ?></td>
													<td><?php echo $colleges[$i - 1]; ?></td>
													<td><?php echo "<span class=\"badge badge-info\">" . $i . "</span>"; ?></td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td><?php if ($amountOut > 0) {
															echo "<span class=\"label label-warning\">Active</span>";
														}
														if ($amountOut < 0) {
															echo "<span class=\"label label-success\">Fully Paid</span>";
														} ?></td>
													<td><?php echo $colleges['receiptDate']; ?></td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
									</div>
									<div id="createReceipt"></div>
								<?php }
								} ?>
								<!-- -->
								<?php if (!isset($search)) { ?>
								<form class="form-search" action="" method="post">
									<div class="control-group">
										<label class="control-label" for="inputIcon">Email address</label>

										<div class="controls">
											<div class="input-append">
												<span class="add-on"><i class="icon-envelope"></i></span>
												<input class="span2" name="email" id="email" type="text"/>
												<button type="submit" id="search" name="search" class="btn">Search
												</button>
											</div>
										</div>
									</div>
								</form>
							</td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td align="center" valign="middle">&nbsp;</td>
		</tr>
	</table>
	<?php } ?>
	<!-- SCRIPTS BEGIN -->
	<!-- -->
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<!-- -->
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<!-- <script src="../js/livevalidation_standalone.js" type="text/javascript"></script> -->
	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	<script src="js/quotesOps.js" type="text/javascript"></script>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>
