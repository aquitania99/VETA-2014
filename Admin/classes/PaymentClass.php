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
//$check = $_POST['check'];
// var_export($_POST);die;
if (!empty($_POST['check'])) {
	//
	$personID = $_POST['personID'];
	$pID = $_POST['pID'];
	$courseType = $_POST['courseType'];
	$courseEntry = $_POST['courseEntry'];
	//
	function checkPayments($personID, $pID, $courseEntry, $courseType)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		$searchPayments = "SELECT * FROM payment_received WHERE person_ID ='" . $personID . "' AND prevID = " . $pID . " AND courseEntry = '" . $courseEntry . "' AND courseType = '" . $courseType . "' ORDER BY paid_on DESC ";
		//
		$rsPayments = $mysqli->query($searchPayments);
		//
		$paymentResults = $rsPayments->fetch_array();
		//
		echo $data = json_encode($paymentResults);
		//
		exit;
		//return json_encode($paymentResults);
	}

	checkPayments($personID, $pID, $courseEntry, $courseType);
}
//
if (!empty($_POST['amountPaid']) && empty($_POST['check'])) {
	//
	$personID = $_POST['personID'];
	$pID = $_POST['pID'];
	$courseType = $_POST['courseType'];
	$courseEntry = $_POST['courseEntry'];
	//$receiptNumber = $_POST['receiptNumber'];
	$amountDue = $_POST['amountDue'];
	$amountPaid = $_POST['amountPaid'];
	$amountOutstanding = $_POST['amountOutstanding'];
	$paymentComments = $mysqli->real_escape_string($_POST['paymentComments']);
	//mysql_real_escape_string // Tenemos que hayar solucionn para esto! :-/
	$receivedBy = strtoupper($_POST['receivedBy']);
	//
	$sql_insert = "INSERT INTO payment_received (prevID, person_ID, courseType, courseEntry, amount_due, amount_paid, amount_outstanding, payment_comments, received_by, paid_on) ";
	$sql_insert .= " VALUES ('$pID', '$personID', '$courseType', '$courseEntry', '$amountDue', '$amountPaid', '$amountOutstanding', '$paymentComments', '$receivedBy', NOW())";
//	print_r($sql_insert);die;
	$mysqli->query($sql_insert);
	//
	//printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows); // $mysqli->affected_rows);
	if ($mysqli->affected_rows == 1) {
		//
		$searchReceipt = 'SELECT receipt_number FROM payment_received ORDER BY paid_on DESC ';
		$rsReceipts = $mysqli->query($searchReceipt);
		$lastReceipt = $rsReceipts->fetch_array();
		//
		$sql_update = "UPDATE payments_preview SET amountPaid = $amountPaid";
		$rsUpdates = $mysqli->query($sql_update);
		//echo "<script type='text/javascript'>window.location = '../createStudentReceipt.php';</script>";
		//return;
		echo json_encode($lastReceipt);
	} else echo "....Oooppss... Something isn't right!<br>";
}
