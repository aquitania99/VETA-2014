<?php
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
require('classes/person.php');
//
$year = getdate();
//////////////////////////////////
//if (isset($_SESSION['login'])) {
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
echo "<code> Tenemos algo?? ".$_POST['submit']."... </code>";
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
		$keyVal = $personResults['emailAddress'];
		//
		$profession = $personResults['profession'];
		$mobilePhone = $personResults['mobilePhone'];
//		$counsellor = $personResults['cfName'] . ' ' . $personResults['clName'];
		if(!empty($personResults['visaExpDate'])) {
		$expDate = explode('-', $personResults['visaExpDate']);
		//
		$year = $expDate[0];
		$month = $expDate[1];
		$day = $expDate[2];
		$expiryDate = $day . "/" . $month . "/" . $year;
		if ($expiryDate === '00/00/0000') {
			$expiryDate = 'Not defined yet.';
		}
//		$cMobile = $personResults['cMobile'];
//		$cEmail = $personResults['cEmail'];
	}
//
	if (isset($_POST['submit'])) {
		$test = json_encode($_REQUEST);
		var_dump($_REQUEST);
		require('classes/PaymentEntry.php');
		//
		$payment = new PaymentEntry();
		//
		$payment->coursesNum = $_POST['coursesNum'];
		//
//		$payment->personID = $_POST['eaddress'];
//		//////////////////////////////////
//		$payment->quoteType = $_POST['quoteType'];
//		//
//		$payment->receiptOne = $_POST['receiptOne'];
//		$payment->paymentTitle = $_POST['paymentTitle'];
//		//
//		$payment->courseName = $_POST['courseName'];
//		$payment->college = $_POST['college'];
//		//
//		if (empty($_POST['newCourseStartDate'])) {
//			$payment->newCourseStartDate = '0000-00-00';
//		} else {
//			$explodeCourseStart = explode('-', $_POST['newCourseStartDate']);
//			//
//			$day = $explodeCourseStart[0];
//			$month = $explodeCourseStart[1];
//			$year = $explodeCourseStart[2];
//			$payment->newCourseStartDate = $year . '-' . $month . '-' . $day; //$_POST['newCourseStartDate'];
//		}
//
//		//
//		if (empty($_POST['newCourseEndDate'])) {
//			$_POST['newCourseEndDate'] = '0000-00-00';
//		} else {
//			$explodeCourseEnd = explode('-', $_POST['newCourseEndDate']);
//			//
//			$day = $explodeCourseEnd[0];
//			$month = $explodeCourseEnd[1];
//			$year = $explodeCourseEnd[2];
//			$payment->newCourseEndDate = $year . '-' . $month . '-' . $day; //$_POST['newCourseEndDate'];
//		}
//		$payment->courseDuration = $_POST['courseDuration'];
//		$payment->courseTimeTable = $_POST['courseTimeTable'];
//		//
//		$payment->holidaysDuration = $_POST['holidaysDuration'];
//		//
//		$payment->weeklyCost = $_POST['weeklyCost'];
//		//
//		$payment->instalmentsNo = $_POST['instalmentsNo'];
//		$payment->totalCourseFees = $_POST['totalCourseFees'];
//		//
//		$payment->materialsCost = $_POST['materialsCost'];
//		$payment->courseEnrolmentFee = $_POST['courseEnrolmentFee'];
//		$payment->courseInstalment = $_POST['courseInstalment'];
//		if (empty($_POST['deposit'])) {
//			$payment->deposit = '0';
//		} else {
//			$payment->deposit = $_POST['deposit'];
//		}
//		$payment->bond = $_POST['bond'];
//		$payment->instalmentFee = $_POST['instalmentFee'];
//		$payment->instOne = $_POST['instOne'];
//		$payment->totalInstOne = $_POST['totalInstOne'];
//		//
//		if (empty($_POST['totalAmountDue'])) {
//			$payment->totalAmountDue = '0';
//		} else {
//			$payment->totalAmountDue = $_POST['totalAmountDue'];
//		}
//		//
//		if (empty($_POST['dueDate1'])) {
//			$_POST['dueDate1'] = '0000-00-00';
//			$payment->dueDate = $_POST['dueDate1'];
//		} else {
//			$explodeDueDate = explode('-', $_POST['dueDate1']);
//			//
//			$day = $explodeDueDate[0];
//			$month = $explodeDueDate[1];
//			$year = $explodeDueDate[2];
//			$payment->dueDate = $year . '-' . $month . '-' . $day;
//		}

//		//
//		$payment->receiptTwo = $_POST['receiptTwo'];
//		//
//		$payment->courseName2 = $_POST['courseName2'];
//		$payment->college2 = $_POST['college2'];
//		//
//		if (empty($_POST['newCourseStartDate2'])) {
//			$_POST['newCourseStartDate2'] = '0000-00-00';
//			$payment->newCourseStartDate2 = '0000-00-00';
//		} else {
//			$explodeCourseStart2 = explode('-', $_POST['newCourseStartDate2']);
//			//
//			$day2 = $explodeCourseStart2[0];
//			$month2 = $explodeCourseStart2[1];
//			$year2 = $explodeCourseStart2[2];
//			$payment->newCourseStartDate2 = $year2 . '-' . $month2 . '-' . $day2; //$_POST['newCourseStartDate2'];
//		}
//		//
//		if (empty($_POST['newCourseEndDate2'])) {
//			$payment->newCourseEndDate2 = '0000-00-00';
//		} else {
//			$explodeCourseEnd2 = explode('-', $_POST['newCourseEndDate2']);
//			//
//			$day2 = $explodeCourseEnd2[0];
//			$month2 = $explodeCourseEnd2[1];
//			$year2 = $explodeCourseEnd2[2];
//			$payment->newCourseEndDate2 = $year2 . '-' . $month2 . '-' . $day2; //$_POST['newCourseEndDate2'];
//		}
//		//
//		$payment->courseDuration2 = $_POST['courseDuration2'];
//		$payment->courseTimeTable2 = $_POST['courseTimeTable2'];
//		//
//		$payment->holidaysDuration2 = $_POST['holidaysDuration2'];
//		//
//		if (empty($_POST['weeklyCost2'])) {
//			$_POST['weeklyCost2'] = '0.00';
//		}
//		$payment->weeklyCost2 = $_POST['weeklyCost2'];
//		if (empty($_POST['materialsCost2'])) {
//			$_POST['materialsCost2'] = '0.00';
//		}
//		$payment->materialsCost2 = $_POST['materialsCost2'];
//		if (empty($_POST['courseEnrolmentFee2'])) {
//			$_POST['courseEnrolmentFee2'] = '0.00';
//		}
//		$payment->courseEnrolmentFee2 = $_POST['courseEnrolmentFee2'];
//		if (empty($_POST['instalmentFee2'])) {
//			$_POST['instalmentFee2'] = '0.00';
//		}
//		$payment->instalmentFee2 = $_POST['instalmentFee2'];
//
//		if (empty($_POST['instTwo'])) {
//			$_POST['instTwo'] = '0.00';
//		}
//		$payment->instTwo = $_POST['instTwo'];
//
//		if (empty($_POST['totalInstTwo'])) {
//			$_POST['totalInstTwo'] = '0.00';
//		}
//		$payment->totalInstTwo = $_POST['totalInstTwo'];
//		//
//		if (empty($_POST['dueDate2'])) {
//			$_POST['dueDate2'] = '0000-00-00';
//			$payment->dueDate2 = $_POST['dueDate2'];
//		} else {
//			$explodeDueDate = explode('-', $_POST['dueDate2']);
//			//
//			$day = $explodeDueDate[0];
//			$month = $explodeDueDate[1];
//			$year = $explodeDueDate[2];
//			$payment->dueDate2 = $year . '-' . $month . '-' . $day;
//		}
//		//
//		$payment->receiptThree = $_POST['receiptThree'];
//		//
//		$payment->courseName3 = $_POST['courseName3'];
//		$payment->college3 = $_POST['college3'];
//		//
//		if (empty($_POST['newCourseStartDate3'])) {
//			$_POST['newCourseStartDate3'] = '0000-00-00';
//			$payment->newCourseStartDate3 = '0000-00-00';
//		} else {
//			$explodeCourseStart3 = explode('-', $_POST['newCourseStartDate3']);
//			//
//			$day3 = $explodeCourseStart3[0];
//			$month3 = $explodeCourseStart3[1];
//			$year3 = $explodeCourseStart3[2];
//			$payment->newCourseStartDate3 = $year3 . '-' . $month3 . '-' . $day3; //$_POST['newCourseStartDate2'];
//		}
//		//
//		if (empty($_POST['newCourseEndDate3'])) {
//			$payment->newCourseEndDate3 = '0000-00-00';
//		} else {
//			$explodeCourseEnd3 = explode('-', $_POST['newCourseEndDate3']);
//			//
//			$day3 = $explodeCourseEnd3[0];
//			$month3 = $explodeCourseEnd3[1];
//			$year3 = $explodeCourseEnd3[2];
//			$payment->newCourseEndDate3 = $year3 . '-' . $month3 . '-' . $day3; //$_POST['newCourseEndDate2'];
//		}
//		//
//		$payment->courseDuration3 = $_POST['courseDuration3'];
//		$payment->courseTimeTable3 = $_POST['courseTimeTable3'];
//		//
//		$payment->holidaysDuration3 = $_POST['holidaysDuration3'];
//		//
//		if (empty($_POST['weeklyCost3'])) {
//			$_POST['weeklyCost3'] = '0.00';
//		}
//		$payment->weeklyCost3 = $_POST['weeklyCost3'];
//		if (empty($_POST['materialsCost3'])) {
//			$_POST['materialsCost3'] = '0.00';
//		}
//		$payment->materialsCost3 = $_POST['materialsCost3'];
//		if (empty($_POST['courseEnrolmentFee3'])) {
//			$_POST['courseEnrolmentFee3'] = '0.00';
//		}
//		$payment->courseEnrolmentFee3 = $_POST['courseEnrolmentFee3'];
//		if (empty($_POST['instalmentFee3'])) {
//			$_POST['instalmentFee3'] = '0.00';
//		}
//		$payment->instalmentFee3 = $_POST['instalmentFee3'];
//		if (empty($_POST['instThree'])) {
//			$_POST['instThree'] = '0.00';
//		}
//		$payment->instThree = $_POST['instThree'];
//		if (empty($_POST['totalInstThree'])) {
//			$_POST['totalInstThree'] = '0.00';
//		}
//		$payment->totalInstThree = $_POST['totalInstThree'];
//		//
//		if (empty($_POST['dueDate3'])) {
//			$_POST['dueDate3'] = '0000-00-00';
//			$payment->dueDate3 = $_POST['dueDate3'];
//		} else {
//			$explodeDueDate = explode('-', $_POST['dueDate3']);
//			//
//			$day = $explodeDueDate[0];
//			$month = $explodeDueDate[1];
//			$year = $explodeDueDate[2];
//			$payment->dueDate3 = $year . '-' . $month . '-' . $day;
//		}
//		//
//		$payment->receiptFour = $_POST['receiptFour'];
//		//
//		$payment->courseName4 = $_POST['courseName4'];
//		$payment->college4 = $_POST['college4'];
//		//
//		if (empty($_POST['newCourseStartDate4'])) {
//			$_POST['newCourseStartDate4'] = '0000-00-00';
//			$payment->newCourseStartDate4 = '0000-00-00';
//		} else {
//			$explodeCourseStart4 = explode('-', $_POST['newCourseStartDate4']);
//			//
//			$day4 = $explodeCourseStart4[0];
//			$month4 = $explodeCourseStart4[1];
//			$year4 = $explodeCourseStart4[2];
//			$payment->newCourseStartDate4 = $year4 . '-' . $month4 . '-' . $day4; //$_POST['newCourseStartDate2'];
//		}
//		//
//		if (empty($_POST['newCourseEndDate4'])) {
//			$payment->newCourseEndDate4 = '0000-00-00';
//		} else {
//			$explodeCourseEnd4 = explode('-', $_POST['newCourseEndDate4']);
//			//
//			$day4 = $explodeCourseEnd4[0];
//			$month4 = $explodeCourseEnd4[1];
//			$year4 = $explodeCourseEnd4[2];
//			$payment->newCourseEndDate4 = $year4 . '-' . $month4 . '-' . $day4; //$_POST['newCourseEndDate2'];
//		}
//		//
//		$payment->courseDuration4 = $_POST['courseDuration4'];
//		$payment->courseTimeTable4 = $_POST['courseTimeTable4'];
//		$payment->holidaysDuration4 = $_POST['holidaysDuration4'];
//		//
//		if (empty($_POST['weeklyCost4'])) {
//			$_POST['weeklyCost4'] = '0.00';
//		}
//		$payment->weeklyCost4 = $_POST['weeklyCost4'];
//
//		if (empty($_POST['materialsCost4'])) {
//			$_POST['materialsCost4'] = '0.00';
//		}
//		$payment->materialsCost4 = $_POST['materialsCost4'];
//
//		if (empty($_POST['courseEnrolmentFee4'])) {
//			$_POST['courseEnrolmentFee4'] = '0.00';
//		}
//		$payment->courseEnrolmentFee4 = $_POST['courseEnrolmentFee4'];
//
//		if (empty($_POST['instalmentFee4'])) {
//			$_POST['instalmentFee4'] = '0.00';
//		}
//		$payment->instalmentFee4 = $_POST['instalmentFee4'];
//
//		if (empty($_POST['instFour'])) {
//			$_POST['instFour'] = '0.00';
//		}
//		$payment->instFour = $_POST['instFour'];
//		if (empty($_POST['totalInstFour'])) {
//			$_POST['totalInstFour'] = '0.00';
//		}
//		$payment->totalInstFour = $_POST['totalInstFour'];
//		//
//		if (empty($_POST['dueDate4'])) {
//			$_POST['dueDate4'] = '0000-00-00';
//			$payment->dueDate4 = $_POST['dueDate4'];
//		} else {
//			$explodeDueDate = explode('-', $_POST['dueDate4']);
//			//
//			$day = $explodeDueDate[0];
//			$month = $explodeDueDate[1];
//			$year = $explodeDueDate[2];
//			$payment->dueDate4 = $year . '-' . $month . '-' . $day;
//		}
//		//
//		$payment->healthFund = $_POST['healthFund'];
//		$payment->healthCoverMonths = $_POST['healthCoverMonths'];
//		$payment->healthCost = $_POST['healthCost'];
//		$payment->healthCoverType = $_POST['healthCoverType'];
//		$payment->visaFees = $_POST['visaFees'];
//		$payment->medicalExams = $_POST['medicalExams'];
//		$payment->totalCost = $_POST['totalCourseCost'];
//		$payment->quoteNotes = $_POST['quoteNotes'];
//		//
//		$payment->totalStudyWeeks = $_POST['totalStudyWeeks'];
//		$payment->totalInstalmentsVal = $_POST['totalInstalmentsVal'];
//		$payment->totalCoursesFee = $_POST['totalCoursesFee'];
//		//
		$payment->createPaymentEntry($_POST['quoteType']);
	}
		//
	}