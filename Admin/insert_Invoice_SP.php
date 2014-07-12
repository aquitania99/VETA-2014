<?
//////////////////////////////////////////////////////
require_once("../Connections/config.inc.php");
require_once("../Connections/mysql.class.php");
//////////////////////////////////////////////////////
///
date_default_timezone_set("Australia/Sydney");
$date = date('Y-m-d');
//$p_personStatus = $_POST['personStatus'];
/* *** Personal Details Section *** */
$p_personStatus = 1;
$p_stCounsellor = $_POST['stCounsellor'];
$p_firstName = $_POST['firstName'];
$p_lastName = $_POST['lastName'];
$p_mobilePhone = $_POST['mobilePhone'];
$p_emailAddress = $_POST['emailAddress'];
$p_passNumber = $_POST['passportNo'];
$p_visaExpDate = $_POST['visaExpDate'];
$vs_enrolmentDate = $_POST['enrolmentDate'];
$vs_courseLenght = $_POST['courseLenght'];
$vp_totalCourseCost = $_POST['totalCourseCost'];
$vs_eduCentre = $_POST['eduCentre'];
$vs_courseName = $_POST['courseName'];
$p_language = $_POST['language'];
///
$vpd_feesNumber = $_POST['feesNumber'];
///
/* *** Payment History *** */
/// 1
$vpd_firstPayment = $_POST['firstPayment'];
if ($vpd_firstPayment == "") {
	$vpd_firstPayment = '0.00';
}
$vpd_1stPaymentDate = $_POST['1stPaymentDate'];
if ($vpd_1stPaymentDate == "yyyy/mm/dd") {
	$vpd_1stPaymentDate = '0000-00-00';
}
$vpd_1stPaidDate = $_POST['1stPaidDate'];
if ($vpd_1stPaidDate == "yyyy/mm/dd") {
	$vpd_1stPaidDate = '0000-00-00';
}
/// 2
$vpd_secondPayment = $_POST['secondPayment'];
if ($vpd_secondPayment == "") {
	$vpd_secondPayment = '0.00';
}
$vpd_2ndPaymentDate = $_POST['2ndPaymentDate'];
if ($vpd_2ndPaymentDate == "yyyy/mm/dd") {
	$vpd_2ndPaymentDate = '0000-00-00';
}
$vpd_2ndPaidDate = $_POST['2ndPaidDate'];
if ($vpd_2ndPaidDate == "yyyy/mm/dd") {
	$vpd_2ndPaidDate = '0000-00-00';
}
/// 3
$vpd_thirdPayment = $_POST['thirdPayment'];
if ($vpd_thirdPayment == "") {
	$vpd_thirdPayment = '0.00';
}
$vpd_3rdPaymentDate = $_POST['3rdPaymentDate'];
if ($vpd_3rdPaymentDate == "yyyy/mm/dd") {
	$vpd_3rdPaymentDate = '0000-00-00';
}
$vpd_3rdPaidDate = $_POST['3rdPaidDate'];
if ($vpd_3rdPaidDate == "yyyy/mm/dd") {
	$vpd_3rdPaidDate = '0000-00-00';
}
/// 4
$vpd_fourthPayment = $_POST['fourthPayment'];
if ($vpd_fourthPayment == "") {
	$vpd_fourthPayment = '0.00';
}
$vpd_4thPaymentDate = $_POST['4thPaymentDate'];
if ($vpd_4thPaymentDate == "yyyy/mm/dd") {
	$vpd_4thPaymentDate = '0000-00-00';
}
$vpd_4thPaidDate = $_POST['4thPaidDate'];
if ($vpd_4thPaidDate == "yyyy/mm/dd") {
	$vpd_4thPaidDate = '0000-00-00';
}
/// 5
$vpd_fifthPayment = $_POST['fifthPayment'];
if ($vpd_fifthPayment == "") {
	$vpd_fifthPayment = '0.00';
}
$vpd_5thPaymentDate = $_POST['5thPaymentDate'];
if ($vpd_5thPaymentDate == "yyyy/mm/dd") {
	$vpd_5thPaymentDate = '0000-00-00';
}
$vpd_5thPaidDate = $_POST['5thPaidDate'];
if ($vpd_5thPaidDate == "yyyy/mm/dd") {
	$vpd_5thPaidDate = '0000-00-00';
}
/// 6
$vpd_sixthPayment = $_POST['sixthPayment'];
if ($vpd_sixthPayment == "") {
	$vpd_sixthPayment = '0.00';
}
$vpd_6thPaymentDate = $_POST['6thPaymentDate'];
if ($vpd_6thPaymentDate == "yyyy/mm/dd") {
	$vpd_6thPaymentDate = '0000-00-00';
}
$vpd_6thPaidDate = $_POST['6thPaidDate'];
if ($vpd_6thPaidDate == "yyyy/mm/dd") {
	$vpd_6thPaidDate = '0000-00-00';
}
/// 7
$vpd_seventhPayment = $_POST['seventhPayment'];
if ($vpd_seventhPayment == "") {
	$vpd_seventhPayment = '0.00';
}
$vpd_7thPaymentDate = $_POST['7thPaymentDate'];
if ($vpd_7thPaymentDate == "yyyy/mm/dd") {
	$vpd_7thPaymentDate = '0000-00-00';
}
$vpd_7thPaidDate = $_POST['7thPaidDate'];
if ($vpd_7thPaidDate == "yyyy/mm/dd") {
	$vpd_7thPaidDate = '0000-00-00';
}
/// 8
$vpd_eigthPayment = $_POST['eigthPayment'];
if ($vpd_eigthPayment == "") {
	$vpd_eigthPayment = '0.00';
}
$vpd_8thPaymentDate = $_POST['8thPaymentDate'];
if ($vpd_8thPaymentDate == "yyyy/mm/dd") {
	$vpd_8thPaymentDate = '0000-00-00';
}
$vpd_8thPaidDate = $_POST['8thPaidDate'];
if ($vpd_8thPaidDate == "yyyy/mm/dd") {
	$vpd_8thPaidDate = '0000-00-00';
}
/// 9
$vpd_ninethPayment = $_POST['ninethPayment'];
if ($vpd_ninethPayment == "") {
	$vpd_ninethPayment = '0.00';
}
$vpd_9thPaymentDate = $_POST['9thPaymentDate'];
if ($vpd_9thPaymentDate == "yyyy/mm/dd") {
	$vpd_9thPaymentDate = '0000-00-00';
}
$vpd_9thPaidDate = $_POST['9thPaidDate'];
if ($vpd_9thPaidDate == "yyyy/mm/dd") {
	$vpd_9thPaidDate = '0000-00-00';
}
/// 10
$vpd_tenthPayment = $_POST['tenthPayment'];
if ($vpd_tenthPayment == "") {
	$vpd_tenthPayment = '0.00';
}
$vpd_10thPaymentDate = $_POST['10thPaymentDate'];
if ($vpd_10thPaymentDate == "yyyy/mm/dd") {
	$vpd_10thPaymentDate = '0000-00-00';
}
$vpd_10thPaidDate = $_POST['10thPaidDate'];
if ($vpd_10thPaidDate == "yyyy/mm/dd") {
	$vpd_10thPaidDate = '0000-00-00';
}
/// 11
$vpd_eleventhPayment = $_POST['eleventhPayment'];
if ($vpd_eleventhPayment == "") {
	$vpd_eleventhPayment = '0.00';
}
$vpd_11thPaymentDate = $_POST['11thPaymentDate'];
if ($vpd_11thPaymentDate == "yyyy/mm/dd") {
	$vpd_11thPaymentDate = '0000-00-00';
}
$vpd_11thPaidDate = $_POST['11thPaidDate'];
if ($vpd_11thPaidDate == "yyyy/mm/dd") {
	$vpd_11thPaidDate = '0000-00-00';
}
/// 12
$vpd_twelfthPayment = $_POST['twelfthPayment'];
if ($vpd_twelfthPayment == "") {
	$vpd_twelfthPayment = '0.00';
}
$vpd_12thPaymentDate = $_POST['12thPaymentDate'];
if ($vpd_12thPaymentDate == "yyyy/mm/dd") {
	$vpd_12thPaymentDate = '0000-00-00';
}
$vpd_12thPaidDate = $_POST['12thPaidDate'];
if ($vpd_12thPaidDate == "yyyy/mm/dd") {
	$vpd_12thPaidDate = '0000-00-00';
}
///
/* *** Financial Details *** */
$vp_balance = $_POST['balance'];
if ($vp_balance == "") {
	$vp_balance = '0.00';
}

$vs_studentID = $_POST['studentID'];

$vp_numberFeesPaid = $_POST['numberFeesPaid'];
$vp_nextPaymentDueDate = $_POST['nextPaymentDueDate'];
if ($vp_nextPaymentDueDate == "yyyy/mm/dd") {
	$vp_nextPaymentDueDate = '0000-00-00';
}

$vp_totalPaidToDate = $_POST['totalPaidToDate'];
if ($vp_totalPaidToDate == "") {
	$vp_totalPaidToDate = '0.00';
}


$vp_genComments = $_POST['genComments'];
$vp_vetaAdminUser = $_POST['vetaAdminUser'];
//$vp_insertDate = $_POST['insertDate'];
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
/*** Prev - Check START ***/
$prevCheck = $db->dbQuery("SELECT count(1) FROM `personstest` WHERE emailAddress = '$p_emailAddress'");
$resultCheck = $db->fetch_array($prevCheck);
//echo $resultCheck[0]."<br />";

/***  Prev - Check END ***/
IF ($resultCheck != 0) {
	//////////////////////////////////
	echo '<script type="text/javascript">alert("Existing Record\\n We\'ll have to update this fella!!!");</script>';
	//echo "We'll have to update this fella!!!<br />";
	$queryUpdate = $db->dbQuery("UPDATE personstest
        SET statusID = $p_personStatus, stCounsellor = '$p_stCounsellor', 
        firstName = '$p_firstName', lastName = '$p_lastName', 
        mobilePhone = '$p_mobilePhone', passNumber = '$p_passNumber', 
        languageID = '$p_language', visaExpDate = '$p_visaExpDate', 
        getVetaInfo = 1, reportFormNo = '$reptFormNo', modifDate = NOW()
        WHERE emailAddress = '$p_emailAddress'");

	$countBefore = $db->dbQuery("SELECT count(1) as maxReg FROM veta_students");
	$resultCountBefore = $db->fetch_array($countBefore);
	$maxCountIdBefore = $resultCountBefore['maxReg'];


	$insertStudent = $db->dbQuery("INSERT INTO veta_students (passNumber,
        studentID, edu_ProviderID, courseName, enrolment_date, course_lenght, genComments)
        VALUES ('$p_passNumber', '$vs_studentID', $vs_eduCentre, '$vs_courseName', 
        '$vs_enrolmentDate', $vs_courseLenght, '$vp_genComments')");


	$countAfter = $db->dbQuery("SELECT count(1) as maxReg FROM veta_students");
	$resultCountAfter = $db->fetch_array($countAfter);
	$maxCountIdAfter = $resultCountAfter['maxReg'];

//////////////////////////////////

	if ($maxCountIdAfter > $maxCountIdBefore) {
		$queryPaymentInsert = $db->dbQuery("INSERT INTO payments (passNumber,
edu_providerID, studentID, total_course_cost, paid_instalments)
VALUES  ('$p_passNumber', '$vs_eduCentre', '$vs_studentID', 
        '$vp_totalCourseCost', '$vp_numberFeesPaid')");
/////////////////////////////////
		$queryPaymentDetailInsert = $db->dbQuery("INSERT INTO payment_details (passNumber,
        studentID, paid_instalments, due_instalments, next_payment_due, paid1, 
        paid1_date, realPaidDate, paid2, paid2_date, realPaidDate2,
        paid3, paid3_date, realPaidDate3, paid4, paid4_date, realPaidDate4,
        paid5, paid5_date, realPaidDate5, paid6, paid6_date, realPaidDate6,
        paid7, paid7_date, realPaidDate7, paid8, paid8_date, realPaidDate8,
        paid9, paid9_date, realPaidDate9, paid10, paid10_date, realPaidDate10,
        paid11, paid11_date, realPaidDate11, paid12, paid12_date, realPaidDate12,
        total_paid_to_date, balance)
        VALUES ('$p_passNumber', '$vs_studentID', '$vp_numberFeesPaid', '$vpd_feesNumber', 
                '$vp_nextPaymentDueDate','$vpd_firstPayment','$vpd_1stPaymentDate',
                '$vpd_1stPaidDate','$vpd_secondPayment','$vpd_2ndPaymentDate',
                '$vpd_2ndPaidDate','$vpd_thirdPayment','$vpd_3rdPaymentDate',
                '$vpd_3rdPaidDate','$vpd_fourthPayment','$vpd_4thPaymentDate',
                '$vpd_4thPaidDate','$vpd_fifthPayment','$vpd_5thPaymentDate',
                '$vpd_5thPaidDate','$vpd_sixthPayment','$vpd_6thPaymentDate',
                '$vpd_6thPaidDate','$vpd_seventhPayment','$vpd_7thPaymentDate',
                '$vpd_7thPaidDate','$vpd_eigthPayment','$vpd_8thPaymentDate',
                '$vpd_8thPaidDate','$vpd_ninethPayment','$vpd_9thPaymentDate',
                '$vpd_9thPaidDate','$vpd_tenthPayment','$vpd_10thPaymentDate',
                '$vpd_10thPaidDate','$vpd_eleventhPayment','$vpd_11thPaymentDate',
                '$vpd_11thPaidDate','$vpd_twelfthPayment','$vpd_12thPaymentDate',
                '$vpd_12thPaidDate','$vp_totalPaidToDate', '$vp_balance')");
	}
} ELSE
	echo '<script type="text/javascript">alert("Alright Let\'s Insert this record!!!!\\n It won\'t take long =)!!!");</script>';
//////////////////////////////////
IF ($resultCheck = 0) {


	$queryMaxIdBefore = $db->dbQuery("SELECT max(personID) as idBefore FROM `personstest`");
	$resultMaxIdBefore = $db->fetch_array($queryMaxIdBefore);
	$maxIdBefore = $resultMaxIdBefore['idBefore'];
//////////////////////////////////       
	$queryInsert = $db->dbQuery("INSERT INTO personstest (creationDate, statusID, stCounsellor,
        firstName, lastName, emailAddress, mobilePhone, passNumber, languageID,
        visaExpDate, getVetaInfo, reportFormNo)
        VALUES (NOW(), $p_personStatus, '$p_stCounsellor',
        '$p_firstName', '$p_lastName', '$p_emailAddress', '$p_mobilePhone', '$p_passNumber',
        '$p_language', '$p_visaExpDate', 1, '$reptFormNo')");

	$queryMaxIdAfter = $db->dbQuery("SELECT max(personID) as idAfter FROM `personstest`");
	$resultMaxIdAfter = $db->fetch_array($queryMaxIdAfter);
	$maxIdAfter = $resultMaxIdAfter['idAfter'];

	IF ($maxIdAfter > $maxIdBefore) {


		$countBefore = $db->dbQuery("SELECT count(1) as maxReg FROM veta_students");
		$resultCountBefore = $db->fetch_array($countBefore);
		$maxCountIdBefore = $resultCountBefore['maxReg'];


		$insertStudent = $db->dbQuery("INSERT INTO veta_students (passNumber,
        studentID, edu_ProviderID, courseName, enrolment_date, course_lenght, genComments)
        VALUES ('$p_passNumber', '$vs_studentID', $vs_eduCentre, '$vs_courseName', 
        '$vs_enrolmentDate', $vs_courseLenght, '$vp_genComments')");


		$countAfter = $db->dbQuery("SELECT count(1) as maxReg FROM veta_students");
		$resultCountAfter = $db->fetch_array($countAfter);
		$maxCountIdAfter = $resultCountAfter['maxReg'];

	} ELSE
		echo "Ooopss!!!! X( <br />";
	exit();

//////////////////////////////////

	if ($maxCountIdAfter > $maxCountIdBefore) {
		$queryPaymentInsert = $db->dbQuery("INSERT INTO payments (passNumber,
edu_providerID, studentID, total_course_cost, paid_instalments)
VALUES  ('$p_passNumber', '$vs_eduCentre', '$vs_studentID', 
        '$vp_totalCourseCost', '$vp_numberFeesPaid')");
/////////////////////////////////
		$queryPaymentDetailInsert = $db->dbQuery("INSERT INTO payment_details (passNumber,
        studentID, paid_instalments, due_instalments, next_payment_due, paid1, 
        paid1_date, realPaidDate, paid2, paid2_date, realPaidDate2,
        paid3, paid3_date, realPaidDate3, paid4, paid4_date, realPaidDate4,
        paid5, paid5_date, realPaidDate5, paid6, paid6_date, realPaidDate6,
        paid7, paid7_date, realPaidDate7, paid8, paid8_date, realPaidDate8,
        paid9, paid9_date, realPaidDate9, paid10, paid10_date, realPaidDate10,
        paid11, paid11_date, realPaidDate11, paid12, paid12_date, realPaidDate12,
        total_paid_to_date, balance)
        VALUES ('$p_passNumber', '$vs_studentID', '$vp_numberFeesPaid', '$vpd_feesNumber', 
                '$vp_nextPaymentDueDate','$vpd_firstPayment','$vpd_1stPaymentDate',
                '$vpd_1stPaidDate','$vpd_secondPayment','$vpd_2ndPaymentDate',
                '$vpd_2ndPaidDate','$vpd_thirdPayment','$vpd_3rdPaymentDate',
                '$vpd_3rdPaidDate','$vpd_fourthPayment','$vpd_4thPaymentDate',
                '$vpd_4thPaidDate','$vpd_fifthPayment','$vpd_5thPaymentDate',
                '$vpd_5thPaidDate','$vpd_sixthPayment','$vpd_6thPaymentDate',
                '$vpd_6thPaidDate','$vpd_seventhPayment','$vpd_7thPaymentDate',
                '$vpd_7thPaidDate','$vpd_eigthPayment','$vpd_8thPaymentDate',
                '$vpd_8thPaidDate','$vpd_ninethPayment','$vpd_9thPaymentDate',
                '$vpd_9thPaidDate','$vpd_tenthPayment','$vpd_10thPaymentDate',
                '$vpd_10thPaidDate','$vpd_eleventhPayment','$vpd_11thPaymentDate',
                '$vpd_11thPaidDate','$vpd_twelfthPayment','$vpd_12thPaymentDate',
                '$vpd_12thPaidDate','$vp_totalPaidToDate', '$vp_balance')");
	}
}
?>