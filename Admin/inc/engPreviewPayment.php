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
	$searchPayments .= 'AND courseType = "english" ';
	$searchPayments .= 'AND prevID = \'' . $pID . '\' ';
	$searchPayments .= 'ORDER BY paid_on DESC';
	//print_r($searchPayments);die;
	$rsSearchQry = $mysqli->query($searchPayments);
//
	$encodeResults = json_encode($rsSearchQry->fetch_array());
	$result = json_decode($encodeResults, true);
	//echo "extracting results... ".$result['amount_paid']." ".$result['courseEntry']."<br>";
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
	$counsellor = $personResults['cfName'] . ' ' . $personResults['clName'];
	$expDate = explode('-', $personResults['visaExpDate']);
	//
	$year = $expDate[0];
	$month = $expDate[1];
	$day = $expDate[2];
	$expiryDate = $day . "-" . $month . "-" . $year;
	if ($expiryDate === '00-00-0000') {
		$expiryDate = 'Not defined yet.';
	}
	//
	$cMobile = $personResults['cMobile'];
	$cEmail = $personResults['cEmail'];
	//echo "<pre>Alguna cosa... </pre><code>".$personalDetails->results['firstName']." ".$personalDetails->results['lastName']."</code><br>";
	//
	$paymentDetails = new PaymentEntry();
	//$paymentDetails->personID = $keyVal;
	//$paymentDetails->searchCourse($courseNo, $keyVal, $pID);
	$paymentDetails->searchCourse($courseNo, $keyVal, $pID);
	//
	$paymentResult = json_decode($paymentDetails->results, true);
	//echo "Instalment One value...".$paymentResult['instOne']."<br>";
	switch ($courseNo) {
		case 1:
			$totalInstOne = $paymentResult['totalInstOne'];
			$totalStudyWeeks = $paymentResult['totalStudyWeeks'];
			$totalInstalmentsVal = $paymentResult['totalInstalmentsVal'];
			$totalCoursesFee = $paymentResult['totalCoursesFee'];
			$totalDue = $paymentResult['totalAmountDue'];
			$paymentNotes = $paymentResult['quoteNotes'];
			////
			$dateExp = explode('-', $paymentResult['dueDate']);
			$day = $dateExp[2];
			$month = $dateExp[1];
			$year = $dateExp[0];
			$dueDate = $day." / ".$month." / ".$year;
			break;

		case 2:
			$totalInstTwo = $paymentResult['totalInstTwo'];
			$receipt = $paymentResult['receiptTwo'];
			$instNo = $paymentResult['instTwo'];
			$totalInst = $totalInstTwo;
			////
			$dateExp = explode('-', $paymentResult['dueDate2']);
			$day = $dateExp[2];
			$month = $dateExp[1];
			$year = $dateExp[0];
			$dueDate = $day." / ".$month." / ".$year;
			break;

		case 3:
			$totalInstThree = $paymentResult['totalInstThree'];
			$receipt = $paymentResult['receiptThree'];
			$instNo = $paymentResult['instThree'];
			$totalInst = $totalInstThree;
			////
			$dateExp = explode('-', $paymentResult['dueDate3']);
			$day = $dateExp[2];
			$month = $dateExp[1];
			$year = $dateExp[0];
			$dueDate = $day." / ".$month." / ".$year;
			break;

		case 4:
			$totalInstFour = $paymentResult['totalInstFour'];
			$receipt = $paymentResult['receiptFour'];
			$instNo = $paymentResult['instFour'];
			$totalInst = $totalInstFour;
			////
			$dateExp = explode('-', $paymentResult['dueDate4']);
			$day = $dateExp[2];
			$month = $dateExp[1];
			$year = $dateExp[0];
			$dueDate = $day." / ".$month." / ".$year;
			break;
	}

	$collegeId = (($courseNo == 1) ? $paymentResult['college'] : $paymentResult['college' . $courseNo]);

	if (!empty($collegeId)) {
		//
		$searchColleges = 'SELECT entity_name ';
		$searchColleges .= 'FROM education_provider ';
		//echo "colegio...".$collegeId."<br>";
		//$searchColleges .= 'WHERE edu_providerID IN ('.$paymentResult['college'].','.$paymentResult['college2'].','.$paymentResult['college3'].','.$paymentResult['college4'].')';
		//var_dump($collegeId);die;
		$searchColleges .= 'WHERE edu_providerID IN (' . $collegeId . ')';
		//
		$rsColleges = $mysqli->query($searchColleges);
		//
		$paymentResultColleges = $rsColleges->fetch_array();
		//
		$colleges = $paymentResultColleges['entity_name'];
		//
	}
	//checkPayments();
	//
} else {
	echo "NOTHING YET!!!??? DAMN!<br>";
}
//