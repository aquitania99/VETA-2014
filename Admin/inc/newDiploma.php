<?php
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
require('classes/person.php');
//
$year = getdate();
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
		//
		$personalDetails = new Person();
		//$personalDetails->search('',$keyVal);
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
		$expiryDate = $day . "/" . $month . "/" . $year;
		if ($expiryDate === '00/00/0000') {
			$expiryDate = 'Not defined yet.';
		}
		$cMobile = $personResults['cMobile'];
		$cEmail = $personResults['cEmail'];
	}
//
	if (isset($_POST['submit'])) {
		$keyVal = $_GET['eaddress'];
		//
		$personalDetails = new Person();
		//$personalDetails->search('',$keyVal);
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
		$cMobile = $personResults['cMobile'];
		$cEmail = $personResults['cEmail'];
		//}
//
//
		//if (isset($_POST['submit'])) {
		require_once 'classes/PaymentEntry.php';
		//
		$payment = new PaymentEntry();
		//
		$payment->coursesNum = $_POST['coursesNum'];
		//
		$payment->personID = $_POST['eaddress'];
		//////////////////////////////////
		$payment->quoteType = $_POST['quoteType'];
		//
		$payment->receiptOne = $_POST['receiptOne'];
		$payment->paymentTitle = $_POST['paymentTitle'];
		//
		$payment->courseName = $_POST['courseName'];
		$payment->college = $_POST['college'];
		//
		if (empty($_POST['newCourseStartDate'])) {
			$payment->newCourseStartDate = '0000-00-00';
		} else {
			$explodeCourseStart = explode('-', $_POST['newCourseStartDate']);
			//
			$day = $explodeCourseStart[0];
			$month = $explodeCourseStart[1];
			$year = $explodeCourseStart[2];
			$payment->newCourseStartDate = $year . '-' . $month . '-' . $day; //$_POST['newCourseStartDate'];
		}

		//
		if (empty($_POST['newCourseEndDate'])) {
			$payment->newCourseEndDate = '0000-00-00';
		} else {
			$explodeCourseEnd = explode('-', $_POST['newCourseEndDate']);
			//
			$day = $explodeCourseEnd[0];
			$month = $explodeCourseEnd[1];
			$year = $explodeCourseEnd[2];
			$payment->newCourseEndDate = $year . '-' . $month . '-' . $day; //$_POST['newCourseEndDate'];
		}
		$payment->courseDuration = $_POST['courseDuration'];
		$payment->courseTimeTable = $_POST['courseTimeTable'];
		//
		$payment->holidaysDuration = $_POST['holidaysDuration'];
		//
		$payment->weeklyCost = $_POST['weeklyCost'];
		//
		$payment->instalmentsNo = $_POST['instalmentsNo'];
		$payment->totalCourseFees = $_POST['totalCourseFees'];
		//
		if (empty($_POST['materialsCost'])) {
			$payment->materialsCost = '0.00';
		} else {
			$payment->materialsCost = $_POST['materialsCost'];
		}
		//
		if (empty($_POST['courseEnrolmentFee'])) {
			$payment->courseEnrolmentFee = '0.00';
		} else {
			$payment->courseEnrolmentFee = $_POST['courseEnrolmentFee'];
		}
		//
		if (empty($_POST['courseInstalment'])) {
			$payment->courseInstalment = '0.00';
		} else {
			$payment->courseInstalment = $_POST['courseInstalment'];
		}
		//
		if (empty($_POST['deposit'])) {
			$payment->deposit = '0';
		} else {
			$payment->deposit = $_POST['deposit'];
		}
		//
		if (empty($_POST['bond'])) {
			$payment->bond = '0.00';
		} else {
			$payment->bond = $_POST['bond'];
		}
		//
		if (empty($_POST['instalmentFee'])) {
			$payment->instalmentFee = '0.00';
		} else {
			$payment->instalmentFee = $_POST['instalmentFee'];
		}
		//
		$payment->instOne = $_POST['instOne'];
		$payment->totalInstOne = $_POST['totalInstOne'];
		//
		if (empty($_POST['totalAmountDue'])) {
			$payment->totalAmountDue = '0';
		} else {
			$payment->totalAmountDue = $_POST['totalAmountDue'];
		}
		//
		if (empty($_POST['dueDate1'])) {
			$_POST['dueDate1'] = '0000-00-00';
			$payment->dueDate = $_POST['dueDate1'];
		} else {
			$explodeDueDate = explode('-', $_POST['dueDate1']);
			//
			$day = $explodeDueDate[0];
			$month = $explodeDueDate[1];
			$year = $explodeDueDate[2];
			$payment->dueDate = $year . '-' . $month . '-' . $day;
		}

		$payment->instalmentsNo = $_POST['instalmentsNo'];
		$payment->healthFund = $_POST['healthFund'];
		$payment->healthCoverMonths = $_POST['healthCoverMonths'];
		//
		if (empty($_POST['healthCost'])) {
			$payment->healthCost = '0.00';
		} else {
			$payment->healthCost = $_POST['healthCost'];
		}
		//
		if (empty($_POST['healthCoverType'])) {
			$payment->healthCoverType = '0.00';
		} else {
			$payment->healthCoverType = $_POST['healthCoverType'];
		}
		//
		if (empty($_POST['visaFees'])) {
			$payment->visaFees = '0.00';
		} else {
			$payment->visaFees = $_POST['visaFees'];
		}
		//
		$payment->medicalExams = $_POST['medicalExams'];
		$payment->totalCost = $_POST['totalCourseCost'];
		$payment->quoteNotes = $_POST['quoteNotes'];
		//
		$payment->totalStudyWeeks = $_POST['totalStudyWeeks'];
		$payment->totalStudyDuration = $_POST['courseDuration'];
		$payment->totalInstalmentsVal = $_POST['totalInstalmentsVal'];
		$payment->totalCoursesFee = $_POST['totalCoursesFee'];
		$payment->createPaymentEntry($_POST['quoteType']);
		//
	}