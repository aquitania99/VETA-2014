<?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
require('classes/person.php');
//require('classes/quote.php');
require('classes/quoteDp.php');
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
		$personalDetails->search(5, $keyVal);
		//
		$expDate = explode('-', $personalDetails->visaExpDate);
		//
		$year = $expDate[0];
		$month = $expDate[1];
		$day = $expDate[2];
		$expiryDate = $day . "/" . $month . "/" . $year;
		////
		//
		$searchQuote = new Quote();
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
			print_r($result);
		} else echo 'the jSon array IS empty<br>';
//
		if (!is_null($result)) {
			//
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			//
			$searchColleges = 'SELECT entity_name ';
			$searchColleges .= 'FROM education_provider ';
			$searchColleges .= 'WHERE edu_providerID IN (' . $result['college'] . ',' . $result['college2'] . ',' . $result['college3'] . ',' . $result['college4'] . ')';
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
			//
		}
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
	<?php if (isset($search)) { ?>
		<div class="span7 table-hover">
			<table class="table table-condensed">
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
			<table class="table table-condensed">
				<tr>
					<th></th>
					<th>Studies Ref.</th>
					<th>College</th>
					<th>Instalment No.</th>
					<th>Status</th>
					<th>Receipt Created On</th>
				</tr>

				<tbody>
				<?php
				$i = 1;
				for ($i; $i <= $result['instalmentsNo']; $i++) {
					?>
					<tr>
						<td>
							<a class="btn btn-mini  btn-info"
							   href="receipt2.php?keyVal=<?php echo $result['personID']; ?>&inst=<?php echo $i; ?>"
							   name="paymentReceipt<?php echo $i; ?>" id="paymentReceipt<?php echo $i; ?>"><i
									class="icon-zoom-in"></i>View</a>
						</td>
						<td> <?php echo $result['quoteType']; ?> </td>
						<td> <?php echo $colleges[$i - 1]; ?> </td>
						<td> <?php echo $i; ?> </td>
						<td> Active</td>
						<td> <?php echo $colleges['receiptDate']; ?> </td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div id="createReceipt"></div>
	<?php } ?>
	<!-- -->
	<?php if (!isset($search)) { ?>
		<form class="form-search" action="" method="post">
			<div class="control-group">
				<label class="control-label" for="inputIcon">Email address</label>

				<div class="controls">
					<div class="input-append">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input class="span2" id="inputIcon" name="email" id="email" type="text">
						<button type="submit" id="search" name="search" class="btn">Search</button>
					</div>
				</div>
			</div>
		</form>
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
