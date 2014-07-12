<?php
//////////////////////////////////////////////////////
require_once("../Connections/config.inc.php");
require_once("../Connections/mysql.class.php");
//////////////////////////////////////////////////////
///
date_default_timezone_set("Australia/Sydney");
$date = date('Y-m-d');
//$p_personStatus = $_POST['personStatus'];
$doUpdate = $_POST['toUpdate'];
//echo $doUpdate."So far...<br />";
/* *** Personal Details Section *** */
$p_personStatus = $_POST['statusID'];
//echo $p_personStatus."<br />";
$p_stCounsellor = $_POST['stCounsellor'];
//echo $p_stCounsellor."<br />";
$p_firstName = $_POST['firstName'];
//echo $p_firstName."<br />";
$p_lastName = $_POST['lastName'];
//echo $p_lastName."<br />";
$p_mobilePhone = $_POST['mobilePhone'];
//echo $p_mobilePhone."<br />";
$p_emailAddress = $_POST['emailAddress'];
//echo $p_emailAddress."<br />";
$p_passNumber = $_POST['passportNo'];
//echo $p_passNumber."<br />";
$p_visaExpDate = $_POST['visaExpDate'];
///
$p_language = $_POST['language'];
//echo $p_visaExpDate."<br />";
$vs_enrolmentDate = $_POST['enrolmentDate'];
//
if ($vs_enrolmentDate == "yyyy-mm-dd") {
	$vs_enrolmentDate = "0000-00-00";
}
//
$vs_courseLenght = $_POST['courseLenght'];
$vp_totalCourseCost = $_POST['totalCourseCost'];
$vp_totalCourseCost = str_replace(",", "", $vp_totalCourseCost);
//
$vs_eduCentre = $_POST['eduCentre'];
$vs_courseName = $_POST['courseName'];
///
$vs_courseName = stripslashes($vs_courseName);
///
$invoiceId = $_POST['invNumber'];
///
$studentID = $_POST['studentID'];
$edu_provider_ID = $_POST['edu_provider_ID'];
$paymentFee = $_POST['payments'];
$commissionRate = $_POST['commission'];
///
//print_r($commissionRate);
///
$commissionValue = $_POST['realPayment'];
$GSTexc = $_POST['GSTexc'];
$GSTinc = $_POST['GSTinc'];
$invoiceNumber = $_POST['InvoiceNumber'];
$CommDeducted = $_POST['CommDeducted'];
if (isset($CommDeducted)) {
	$CommDeducted = "Y";
} else {
	$CommDeducted = "N";
}
//print_r($CommDeducted);
$marketingIncentive = $_POST['marketingIncentive'];
if (isset($marketingIncentive)) {
	$marketingIncentive = "Y";
} else {
	$marketingIncentive = "N";
}

$mkIncentiveValue = $_POST['mkIncentiveValue'];
//print_r($mkIncentiveValue);
$payDueDate = $_POST['PaymentDateDue'];
$StudentPaidDate = $_POST['StudentPaidDate'];
$totalPaid = $_POST['TotalPaid'];
$ColPaymentDateDue = $_POST['ColPaymentDateDue'];
$colPaidDate = $_POST['CollegeDatePaid'];
$ColTotalPaid = $_POST['ColTotalPaid'];
///
$vp_FeesNumber = $_POST['instalments'];
////print_r($vp_FeesNumber);
/* *** Financial Details *** */
$vp_balance = $_POST['balance'];
if ($vp_balance == "") {
	$vp_balance = '0.00';
}

$vs_studentID = $_POST['studentID'];

$vp_numberFeesPaid = $_POST['StudentPaidDate'];
$paymentsMade = count($vp_numberFeesPaid);
////print_r($paymentsMade);
$vp_nextPaymentDueDate = $_POST['nextPaymentDueDate'];
if ($vp_nextPaymentDueDate == "yyyy/mm/dd") {
	$vp_nextPaymentDueDate = '0000-00-00';
}

$vp_totalPaidToDate = $_POST['totalPaidToDate'];
if ($vp_totalPaidToDate == "") {
	$vp_totalPaidToDate = '0.00';
}


$GC = ltrim($_POST['genComments']);
$vp_genComments = stripslashes($GC);
$vp_vetaAdminUser = $_POST['vetaAdminUser'];
$vp_insertDate = $_POST['insertDate'];

/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();

//////////////////////////////////
/*
    $queryMaxIdBefore = $db->dbQuery("SELECT max(personID) as idBefore FROM `persons`");
    $resultMaxIdBefore = $db->fetch_array($queryMaxIdBefore);
    $maxIdBefore = $resultMaxIdBefore['idBefore']; 
 * 
 */
//////////////////////////////////       
$queryUpdate = $db->dbQuery("UPDATE persons 
        SET statusID = $p_personStatus, stCounsellor = '$p_stCounsellor', 
        firstName = '$p_firstName', lastName = '$p_lastName', 
        emailAddress = '$p_emailAddress', mobilePhone = '$p_mobilePhone', 
        passNumber = '$p_passNumber', languageID = '$p_language',
        visaExpDate = '$p_visaExpDate', getVetaInfo = 1, reportFormNo = '$reptFormNo', 
        modifDate = NOW()
        WHERE emailAddress = '$p_emailAddress' 
        ");

$updateStudent = $db->dbQuery(sprintf("UPDATE veta_students SET passNumber = '$p_passNumber', 
        studentID = '$vs_studentID', edu_ProviderID = $vs_eduCentre, 
        courseName = '%s', enrolment_date = '$vs_enrolmentDate', 
        course_lenght = '$vs_courseLenght', genComments = '%s'
        WHERE emailAddress = '$p_emailAddress'",
	mysql_real_escape_string($vs_courseName),
	mysql_real_escape_string($vp_genComments)));


//////////////////////////////////

$queryPaymentUpdate = $db->dbQuery("UPDATE payments SET passNumber = '$p_passNumber',
        emailAddress = '$p_emailAddress', edu_providerID = '$vs_eduCentre', 
        studentID = '$vs_studentID', total_course_cost = '$vp_totalCourseCost',
	due_instalments =  '$vp_FeesNumber',
        paid_instalments = '$vp_numberFeesPaid'
        WHERE emailAddress = '$p_emailAddress' ");

/////////////////////////////////
$test = count($paymentFee);
//var_dump($test);
//
$queryMaxIdBefore = $db->dbQuery("SELECT max(invoice_Id) as `maxInvoices` FROM `invoices` WHERE emailAddress = '$p_emailAddress' AND courseActive != 0");
$resultMaxIdBefore = $db->fetch_array($queryMaxIdBefore);
$maxIdBefore = $resultMaxIdBefore['maxInvoices'];
////print_r($maxIdBefore);
//exit();
//
foreach ($invoiceId as $id => $where) {
	////print_r($where);
	$queryInvoiceUpdate = $db->dbQuery("UPDATE invoices SET paymentFee = '" . round($paymentFee[$id], 2) . "', commissionRate = " . $commissionRate . ",
	commissionValue	= '" . round($commissionValue[$id], 2) . "', GSTexc = '" . round($GSTexc[$id], 2) . "', GSTinc = '" . round($GSTinc[$id], 2) . "', invoiceNumber = '" . $invoiceNumber[$id] . "',
	CommDeducted = '" . $CommDeducted[$id] . "',marketingIncentive = '" . $marketingIncentive[$id] . "',mkIncentiveValue = '" . $mkIncentiveValue[$id] . "',payDueDate = '" . $payDueDate[$id] . "', StudentPaidDate = '" . $StudentPaidDate[$id] . "', totalPaid = '" . round($totalPaid[$id], 2) . "',
	ColPaymentDateDue = '" . $ColPaymentDateDue[$id] . "',  colPaidDate = '" . $colPaidDate[$id] . "', ColTotalPaid = '" . round($ColTotalPaid[$id], 2) . "'
	WHERE emailAddress = '$p_emailAddress' AND invoice_Id = $invoiceId[$id]");
	///////////////
	if ($invoiceId[$id] > $maxIdBefore) {
		//exit();
		$queryInvInsertUpdate = $db->dbQuery("INSERT INTO invoices (emailAddress, paymentFee, commissionRate, commissionValue, GSTexc, GSTinc, invoiceNumber,
	CommDeducted,marketingIncentive,mkIncentiveValue,payDueDate, StudentPaidDate, totalPaid, ColPaymentDateDue, colPaidDate, ColTotalPaid,  courseActive)
        VALUES ('$p_emailAddress','" . round($paymentFee[$id], 2) . "', $commissionRate,'" . round($commissionValue[$id], 2) . "','" . round($GSTexc[$id], 2) . "',
        '" . round($GSTinc[$id], 2) . "','" . $invoiceNumber[$id] . "','" . $CommDeducted[$id] . "','" . $marketingIncentive[$id] . "','" . $mkIncentiveValue[$id] . "','" . $payDueDate[$id] . "',
        '" . $StudentPaidDate[$id] . "','" . round($totalPaid[$id], 2) . "', '" . $ColPaymentDateDue[$id] . "', '" . $colPaidDate[$id] . "', '" . round($ColTotalPaid[$id], 2) . "', 1)");
		///
		////print_r($queryInvInsertUpdate);
		//echo "<script type='text/javascript'>alert('$invoiceId[$id]');</script>";
	} //else {echo "OOPPSS!! Something went wrong....<br />Try again later Thanks! =)";}
}
//echo "<br />".$p_passNumber."<br />";
echo "<script type='text/javascript'>window.location='accounts-1Test.php?do=" . $p_emailAddress . "'</script>";
?>