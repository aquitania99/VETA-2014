<?
//////////////////////////////////////////////////////
//require_once("../Connections/config.inc.php");
//require_once("../Connections/mysql.class.php");
/// Create New DB Object
//$db = new MySQL();
/// Open Connection
//$db->open();
//////////////////////////////////

$id = $_POST['clientID'];
///
date_default_timezone_set("Australia/Sydney");
$date = date('Y/m/d');
//$dt = date('Y/m/d h:i:s A');
//echo "<br />THE DATE...".$date." <br />";
///
$personStatus = $_POST['personStatus'];
//$startYear = $_POST['startYear'];
//$startMonth = $_POST['startMonth'];
$stCounsellor = $_POST['stCounsellor'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mobilePhone = $_POST['mobilePhone'];
$emailAddress = $_POST['emailAddress'];
$language = $_POST['language'];
$visaExpDate = $_POST['visaExpDate'];
//echo "Fecha Exp Visa... ".$visaExpDate."<br />";
$visaType = $_POST['visaType'];
$statusID = $_POST['personStatus'];
$genComments = $_POST['genComments'];
$nationality = $_POST['nationality'];
$profession = $_POST['profession'];
$workExperience = $_POST['workExperience'];
$collegeName = $_POST['collegeName'];
$DOB = $_POST['DOB'];
$passNumber = $_POST['passNumber'];
$passExpDate = $_POST['passExpDate'];
$seminarAttendance = $_POST['seminarAttendance'];
$seminarDate = $_POST['seminarDate'];
$getVetaInfo = $_POST['getVetaInfo'];
///
//echo "<br /> GET INFO : ".$getVetaInfo."<br />";
////
$degreeDate = $_POST['degreeDate'];
$degreeUni = $_POST['degreeUni'];
$residencyCountry = $_POST['residencyCountry'];
$originCountry = $_POST['originCountry'];
$homePhone = $_POST['homePhone'];
$skype = $_POST['skype'];
$msn = $_POST['msn'];
$engTest = $_POST['engTest'];
$engTestName = $_POST['engTestName'];
$engTestType = $_POST['engTestType'];
$engTestDate = $_POST['engTestDate'];
$overallScore = $_POST['overallScore'];
$reptFormNo = $_POST['reptFormNo'];
/* ~~~ Update Quotes Details - BEGIN ~~~ */
//
$courseName = $_POST['courseName'];
$college = $_POST['college'];
$collegeLocation = $_POST['collegeLocation'];
$courseEndDate = $_POST['courseEndDate'];
////
$newCourseStartDate = $_POST['newCourseStartDate'];
$courseDuration = $_POST['courseDuration'];
$courseTimeTable = $_POST['courseTimeTable'];
$courseEnrolmentFee = $_POST['courseEnrolmentFee'];
$courseFirstTerm = $_POST['courseFirstTerm'];
$mediBankMonths = $_POST['mediBankMonths'];
$mediBankCost = $_POST['mediBankCost'];
$visaFees = $_POST['visaFees'];
$medicalExams = $_POST['medicalExams'];
$quoteID = $_POST['quoteID'];
//
$count = count($_POST['college']);
echo "Number of Quotes submitted.... [" . $count . "]<br />";
//
/* ~~~ Update Quotes - END ~~~ */
$modifBy = $_SESSION['login'];
///
$queryUpdate = $db->dbQuery("UPDATE persons SET stCounsellor = '$stCounsellor', firstName = '$firstName', 
		lastName = '$lastName', mobilePhone = '$mobilePhone', emailAddress = '$emailAddress', languageID = '$language', 
		visaExpDate = '$visaExpDate', visaType = '$visaType', statusID = '$personStatus', genComments = '$genComments', 
        nacionality = '$nationality', profession = '$profession', workExperience = '$workExperience', collegeName = '$collegeName',
        DOB = '$DOB', passNumber = '$passNumber', passExpDate = '$passExpDate', seminarAttendance = '$seminarAttendance', 
        seminarDate = '$seminarDate', getVetaInfo = '$getVetaInfo', degreeDate = '$degreeDate', degreeUni = '$degreeUni', 
        residencyCountry = '$residencyCountry', originCountry = '$originCountry', homePhone = '$homePhone', skype = '$skype', 
        msn = '$msn', engTest = '$engTest', engTestName = '$engTestName', engTestType = '$engTestType', engTestDate = '$engTestDate', 
        overallScore = '$overallScore', reportFormNo = '$reptFormNo', modifDate = NOW(), modifBy = '$modifBy'
        WHERE personID = '$id'");
//
//
for ($i = 0; $i < $count; $i++) {
	//
	if ($courseEndDate[$i] == 'yyyy/mm/dd') {
		$courseEndDate[$i] = '0000-00-00';
	}
	//
	echo "Records Inserted... " . $i . "<br />";
	echo "College ID : " . $college[$i] . "<br />College Location: " . $collegeLocation[$i] . "<br />";
	//
	$qryUpdateQoute = $db->dbQuery("UPDATE quotations SET courseName = '$courseName[$i]', collegeID = $college[$i], collegeLocation = '$collegeLocation[$i]',
    courseEndDate = '$courseEndDate[$i]', newCourseStartDate = '$newCourseStartDate[$i]', courseDuration = '$courseDuration[$i]',
    timeTable = '$courseTimeTable[$i]', enrolmentFee = '$courseEnrolmentFee[$i]', firstTerm = '$courseFirstTerm[$i]',
    mediBankMonths = '$mediBankMonths[$i]', mediBankCost = '$mediBankCost[$i]', visaFees = '$visaFees[$i]',
    medicalExams = '$medicalExams[$i]', counsellor = '$stCounsellor', dateModified = NOW()
    WHERE personID = '$id' AND quoteID = $quoteID[$i]");
	var_dump($qryUpdateQoute);
}
echo "<script type='text/javascript'>alert('Well Done!! \n The record has been updated!');</script>";
echo "<script type='text/javascript'>window.location='querySearch-form.php?me=" . $id . "'</script>";
//$exist = true;
?>