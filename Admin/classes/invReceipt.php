<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smedina
 * Date: 5/08/13
 * Time: 11:26 PM
 * To change this template use File | Settings | File Templates.
 */
//
require('database.php');
$db = Database::getInstance();
$mysqli = $db->getConnection();
//
//$receipt_number = $_POST['receipt_number'];
$emailAddress = $_POST['emailAddress'];
$edu_provider_ID = $_POST['edu_provider_ID'];
$courseName = $_POST['courseName'];
$paymentFee = $_POST['paymentFee'];
$commissionRate = $_POST['commissionRate'];
$commissionValue = $_POST['commissionValue'];
$GSTexc = $_POST['GSTexc'];
$GSTinc = $_POST['GSTinc'];
$InvoiceNumber = $_POST['InvoiceNumber'];
$CommDeducted = $_POST['CommDeducted'];
if ($CommDeducted == 'on') {
	$CommDeducted = 'Yes';
} else {
	$CommDeducted = 'No';
}
$incentive = $_POST['incentive'];
$incentiveValue = $_POST['incentiveValue'];
$PaymentDateDue = $_POST['PaymentDueDate'];
if ($PaymentDateDue == '') {
	$PaymentDateDue = '0000-00-00';
} else {
	$expDate = explode('-', $_POST['PaymentDueDate']);
	//
	$day = $expDate[0];
	$month = $expDate[1];
	$year = $expDate[2];
	$PaymentDateDue = $year . "-" . $month . "-" . $day;
}
$StudentPaidDate = $_POST['StudentPaidDate'];
if ($StudentPaidDate == '') {
	$StudentPaidDate = '0000-00-00';
} else {
	$expDate = explode('-', $_POST['StudentPaidDate']);
	//
	$day = $expDate[0];
	$month = $expDate[1];
	$year = $expDate[2];
	$StudentPaidDate = $year . "-" . $month . "-" . $day;
}
$TotalPaid = $_POST['TotalPaid'];
if (!empty($_POST['ColPaymentDateDue'])) {
	if ($ColPaymentDateDue == '') {
		$ColPaymentDateDue = '0000-00-00';
	} else {
		$expDate = explode('-', $_POST['ColPaymentDateDue']);
		//
		$day = $expDate[0];
		$month = $expDate[1];
		$year = $expDate[2];
		$ColPaymentDateDue = $year . "-" . $month . "-" . $day;
	}
}
if (!empty($_POST['CollegeDatePaid'])) {
	if ($CollegeDatePaid == '') {
		$CollegeDatePaid = '0000-00-00';
	} else {
		$expDate = explode('-', $_POST['CollegeDatePaid']);
		//
		$day = $expDate[0];
		$month = $expDate[1];
		$year = $expDate[2];
		$CollegeDatePaid = $year . "-" . $month . "-" . $day;
	}
}
if (!empty($_POST['ColTotalPaid'])) {
	if ($ColTotalPaid == '') {
		$ColTotalPaid = '0';
	} else $ColTotalPaid = $_POST['ColTotalPaid'];
}
//
//var_dump($_POST);die;
if (!empty($check)) {
	//echo "Begining Check....<br>";
	function checkPayments()
	{
		//
		/*
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		$searchPayments  = 'SELECT * FROM payment_received ';
		//$searchPayments .= 'WHERE edu_providerID IN ('.$paymentResult['college'].','.$paymentResult['college2'].','.$paymentResult['college3'].','.$paymentResult['college4'].')';
		//print_r($searchColleges);die();
		//
		$rsPayments = $mysqli->query($searchPayments);
		//
		$paymentResults = $rsPayments->fetch_array();
		//
		//var_dump($paymentResults);
		//
		echo json_encode($paymentResults);
		//
		*/
	}

	checkPayments();
}
//
if (!empty($GSTinc)) {
	//
	//$receipt_number = $_POST['receipt_number'];
	$emailAddress = $_POST['emailAddress'];
	$edu_provider_ID = $_POST['edu_provider_ID'];
	$courseName = $_POST['courseName'];
	$paymentFee = $_POST['paymentFee'];
	$commissionRate = $_POST['commissionRate'];
	$commissionValue = $_POST['commissionValue'];
	$GSTexc = $_POST['GSTexc'];
	$GSTinc = $_POST['GSTinc'];
	$InvoiceNumber = $_POST['InvoiceNumber'];
	$CommDeducted = $_POST['CommDeducted'];
	if ($CommDeducted == 'on') {
		$CommDeducted = 'Yes';
	} else {
		$CommDeducted = 'No';
	}
	$incentive = $_POST['incentive'];

	if (empty($_POST['incentiveValue'])) {
		$incentiveValue = '0';
	} else $incentiveValue = $_POST['incentiveValue'];

	$PaymentDateDue = $_POST['PaymentDueDate'];
	if ($PaymentDateDue == '') {
		$PaymentDateDue = '0000-00-00';
	} else {
		$expDate = explode('-', $_POST['PaymentDueDate']);
		//
		$day = $expDate[0];
		$month = $expDate[1];
		$year = $expDate[2];
		$PaymentDateDue = $year . "-" . $month . "-" . $day;
	}
	$StudentPaidDate = $_POST['StudentPaidDate'];
	if ($StudentPaidDate == '') {
		$StudentPaidDate = '0000-00-00';
	} else {
		$expDate = explode('-', $_POST['StudentPaidDate']);
		//
		$day = $expDate[0];
		$month = $expDate[1];
		$year = $expDate[2];
		$StudentPaidDate = $year . "-" . $month . "-" . $day;
	}
	$TotalPaid = $_POST['TotalPaid'];
	$ColPaymentDateDue = $_POST['ColPaymentDateDue'];
	if ($ColPaymentDateDue == '') {
		$ColPaymentDateDue = '0000-00-00';
	} else {
		$expDate = explode('-', $_POST['ColPaymentDateDue']);
		//
		$day = $expDate[0];
		$month = $expDate[1];
		$year = $expDate[2];
		$ColPaymentDateDue = $year . "-" . $month . "-" . $day;
	}

	$CollegeDatePaid = $_POST['CollegeDatePaid'];
	if ($CollegeDatePaid == '') {
		$CollegeDatePaid = '0000-00-00';
	} else {
		$expDate = explode('-', $_POST['CollegeDatePaid']);
		//
		$day = $expDate[0];
		$month = $expDate[1];
		$year = $expDate[2];
		$CollegeDatePaid = $year . "-" . $month . "-" . $day;
	}

	$ColTotalPaid = $_POST['ColTotalPaid'];
	if ($ColTotalPaid == '') {
		$ColTotalPaid = '0';
	}

	//
	$sql_insert = "INSERT INTO invoices (emailAddress, edu_provider_ID, courseName, paymentFee, commissionRate, commissionValue, GSTexc, GSTinc, invoiceNumber, commDeducted, marketingIncentive, mkIncentiveValue, payDueDate, studentPaidDate, totalPaid, colPaymentDueDate, colPaidDate, colTotalPaid,  invAdded) ";
	$sql_insert .= " VALUES ('$emailAddress', '$edu_provider_ID', '$courseName', '$paymentFee', '$commissionRate',  '$commissionValue', '$GSTexc', '$GSTinc',  '$InvoiceNumber', '$CommDeducted', '$incentive', '$incentiveValue', '$PaymentDateDue', '$StudentPaidDate', '$TotalPaid', '$ColPaymentDateDue', '$CollegeDatePaid', '$ColTotalPaid', NOW())";
	//
	//var_dump($sql_insert);die;
	$mysqli->query($sql_insert);
	//
	//printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);
	if ($mysqli->affected_rows == 1) {
		echo "<script type='text/javascript'>window.location = '../generate-invoice.php?keyVal=" . $emailAddress . "&invNumber=" . $InvoiceNumber . "</script>";
		exit;
	} else return false;
}
//
