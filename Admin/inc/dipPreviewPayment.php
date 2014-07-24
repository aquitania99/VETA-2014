<?php
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
//
require('classes/PaymentEntry.php');
require('classes/person.php');
//
//require('classes/ReceiptNumbers.php');
//////////////////////////////////
$modifBy = $_SESSION['login'];
//var_dump($modifBy);
if (!isset($_POST['submit'])) {
	$keyVal = $_GET['keyVal'];
	$courseNo = $_GET['courseNo'];
	$pID = $_GET['prevID'];
	$choice = 1;
//
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$searchPayments = 'SELECT * ';
	$searchPayments .= 'FROM payment_received ';
	$searchPayments .= 'WHERE person_ID = \'' . $keyVal . '\' ';
	$searchPayments .= 'AND courseEntry = \'' . $courseNo . '\' ';
	$searchPayments .= 'AND courseType = "diploma" ';
	$searchPayments .= 'AND prevID = \'' . $pID . '\' ';
	$searchPayments .= 'ORDER BY paid_on DESC';
	//print_r($searchPayments);die;
	$rsSearchQry = $mysqli->query($searchPayments);
//
	$encodeResults = json_encode($rsSearchQry->fetch_array());
	$result = json_decode($encodeResults, true);
	//echo "extracting results... ".$result['amount_paid']." ".$result['courseEntry']."<br>";
	//var_dump($result);die;
	//
	//echo 'Checking Quote for... '.$keyVal.'<br>';exit;
	$personalDetails = new Person();
	//$choice = 1;
	$choice = 5;
	$personalDetails->search($choice, $keyVal);
	$personalDetails->results;
	$personResults = json_decode($personalDetails->results, true);
	$fullName = $personResults['firstName'] . ' ' . $personResults['lastName'];
	//
	$profession = $personResults['profession'];
	$mobilePhone = $personResults['mobilePhone'];
//	$counsellor = $personResults['cfName'] . ' ' . $personResults['clName'];
//	$expDate = explode('-', $personResults['visaExpDate']);
	//
//	$year = $expDate[0];
//	$month = $expDate[1];
//	$day = $expDate[2];
//	$expiryDate = $day . "-" . $month . "-" . $year;
//	if ($expiryDate === '00-00-0000') {
//		$expiryDate = 'Not defined yet.';
//	}
	//
//	$cMobile = $personResults['cMobile'];
//	$cEmail = $personResults['cEmail'];
	//
	$paymentDetails = new PaymentEntry();
	$paymentDetails->searchDiploma($keyVal, $courseNo, $pID);
	//
	$paymentResult = json_decode($paymentDetails->results, true);
	var_dump($paymentResult);
	$totalStudyWeeks = $paymentResult['courseDuration'];
	//
	////
	$dateExp = explode('-', $paymentResult['dueDate']);
	$day = $dateExp[2];
	$month = $dateExp[1];
	$year = $dateExp[0];
	$dueDate = $day." / ".$month." / ".$year;
	var_dump($dueDate,'The Date we\'re looking for...<br>');
	$totalInstalmentsVal = $paymentResult['totalInstalmentsVal'];

	$totalCoursesFee = $paymentResult['totalCoursesFee'];

	$totalDue = $paymentResult['totalAmountDue'];

//	var_dump($paymentResult['college']);die;

	//$totalInstOne = $result['weeklyCost'] + $result['courseEnrolmentFee'] + $result['materialsCost'] + $result['instalmentFee'];
	//var_dump($totalInstOne);die;
	//
	if (!empty($paymentResult['college'])) {
		//
		$collegeId = $paymentResult['college'];
		//
		$searchColleges = 'SELECT entity_name ';
		$searchColleges .= 'FROM education_provider ';
		//$searchColleges .= 'WHERE edu_providerID IN ('.$paymentResult['college'].','.$paymentResult['college2'].','.$paymentResult['college3'].','.$paymentResult['college4'].')';
		//$collegeId = (($courseNo == 1) ? $paymentResult['college'] : $paymentResult['college'.$courseNo]);
		//var_dump($collegeId);die;
		$searchColleges .= 'WHERE edu_providerID IN (' . $collegeId . ')';
		//
		//print_r($searchColleges);die;
		$rsColleges = $mysqli->query($searchColleges);
		//
		$paymentResultColleges = $rsColleges->fetch_array();
		//
		$colleges = $paymentResultColleges['entity_name'];

	}
	//checkPayments();
	//
} else {
	echo "NOTHING YET!!!??? DAMN!<br>";
}
//