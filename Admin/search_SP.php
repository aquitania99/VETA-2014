<?php
//////////////////////////////////////////////////////
require_once("../Connections/config.inc.php");
require_once("../Connections/mysql.class.php");
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
//////////////////////////////////
$schoolsCheck = $db->dbQuery("SELECT * FROM `education_provider` ORDER BY entity_name ASC");
$resSchoolCheck = $db->fetch_array($schoolsCheck);
//////////////////////////////////
$searchEmail = $_POST['searchEmail'];
///
//$passport = $searchPassport;

$do = $_GET['do'];
//echo $name."<br />";
if (isset ($do)) {
	//$passport = $do;
	$emailAddress = $do;
}
//$querySearch = $db->dbQuery("CALL searchVetaStudent ('$passport')");
$querySearch = $db->dbQuery("SELECT `p`.`personID`, `p`.`stCounsellor` AS `Counsellor`,`p`.`firstName` AS `Name`, `p`.`passNumber` AS `Passport`,
`p`.`lastName` AS `Last_Name`, `p`.`emailAddress` AS `Email`, `p`.`mobilePhone` AS `Mobile`, `p`.`visaExpDate` AS `visaExpDate`,
`p`.`statusID` AS `statusID`, `vs`.`studentID` AS `Student_ID`, `vs`.`edu_providerID` AS `Edu_Provider`,`vs`.`edu_providerID` AS `eduProviderID`, `vs`.`enrolment_date` AS `Enrolment_Date`,
`vs`.`course_lenght` AS `Course_Lenght_in_Weeks`,`vp`.`total_course_cost` AS `Total_Course_Cost`, `p`.`languageID` AS `Language`,
`due_instalments` AS `instalments`, `vs`.`courseName` AS `Course_Name`, `vs`.`genComments` AS `General_Comments`
FROM `persons` `p`
LEFT JOIN `veta_students` `vs` ON  p.emailAddress = vs.`emailAddress`
LEFT JOIN `payments` `vp` ON p.emailAddress = vp.emailAddress
WHERE p.emailAddress = '$emailAddress' AND vp.emailAddress = '$emailAddress'");
$rowSearch = $db->fetch_array($querySearch);
//echo "ID... ".$rowSearch['personID']."<br />";
$name = $rowSearch['Name'];
//$pasaporte = $rowSearch['Passport'];
$sculID = $rowSearch['Edu_Provider'];
//////////////////////////////////
if ($name != '') {
	$exist = true;
	$schoolID = $rowSearch['Edu_Provider'];
	$rowSearch['Counsellor'];
	$rowSearch['Name'];
	$rowSearch['Last_Name'];
	$rowSearch['Student_ID'];
	$rowSearch['Email'];
	$rowSearch['Mobile'];
	$rowSearch['Language'];
	$rowSearch['Edu_Provider'];
	$rowSearch['eduProviderID'];
	///
	$eduProviderID = $rowSearch['eduProviderID'];
	//print_r($eduProviderID);
	$rowSearch['Course_Name'];
	$rowSearch['Enrolment_Date'];
	$rowSearch['Course_Lenght_in_Weeks'];
	$rowSearch['Total_Course_Cost'];
	$rowSearch['Fees_Number'];
	$rowSearch['balance'];
	$rowSearch['General_Comments'];

	$outstandingFees = ($rowSearch['Fees_Number'] - $rowSearch['Paid_Fees']);
//////////////////////////////////
	if ($eduProviderID >= 1) {
		$schoolsData = $db->dbQuery("SELECT * FROM `education_provider` WHERE edu_providerID = $eduProviderID ");
		$resSchoolsData = $db->fetch_array($schoolsData);
	}
///
	$schoolName = $resSchoolsData['entity_name'];
	$schoolAddress = $resSchoolsData['location']; //Added 11/22/2012
//////////////////////////////////
	$invoiceDetails = $db->dbQuery("SELECT * FROM invoices WHERE emailAddress = '$emailAddress' ");
	$invoiceRes = $db->fetch_array($invoiceDetails);
	$invoiceId = $invoiceRes['invoice_Id'];
//print_r($invoiceRes);
	$commission = $invoiceRes['commissionRate'];
//echo "WTF! ".$invoiceId."<br />";
//
	$queryMaxIdBefore = $db->dbQuery("SELECT max(invoice_Id) as `maxInvoices` FROM `invoices` WHERE emailAddress = '$emailAddress' AND courseActive != 0");
	$resultMaxIdBefore = $db->fetch_array($queryMaxIdBefore);
	$maxInvIdBefore = $resultMaxIdBefore['maxInvoices'];
//
	/*
	echo "pasaport... ".$pasaporte."<br />";
	echo "ID Colegio... ".$sculID."<br />";
	 *
	 */
} else {
	$message = "Sorry!! That user doesn't seem to be registered yet!";
}

//echo "<br /> Check ID : ".$id1."<br />";
//echo "<br /> firstName = ".$name."<br />";
//' OR firstName = '$name' OR lastName = '$lastName' OR passNumber = '$ID'
///
?>