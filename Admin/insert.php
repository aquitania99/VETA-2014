<?
if (get_magic_quotes_gpc()) {
	$process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
	while (list($key, $val) = each($process)) {
		foreach ($val as $k => $v) {
			unset($process[$key][$k]);
			if (is_array($v)) {
				$process[$key][stripslashes($k)] = $v;
				$process[] = & $process[$key][stripslashes($k)];
			} else {
				$process[$key][stripslashes($k)] = stripslashes($v);
			}
		}
	}
	unset($process);
}
//
//////////////////////////////////////////////////////
//require("../Connections/config.inc.php");
//require("../Connections/mysql.class.php");
// Get Parameters
//$id=$_POST['clientID'];
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
$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);
$mobilePhone = $_POST['mobilePhone'];
$emailAddress = trim($_POST['emailAddress']);
$language = $_POST['language'];
$visaExpDate = $_POST['visaExpDate'];
$visaType = $_POST['visaType'];
$statusID = $_POST['personStatus'];
$genComments = $_POST['genComments'];
$nationality = $_POST['nationality'];
$profession = $_POST['profession'];
$workExperience = $_POST['workExperience'];
$collegeName = $_POST['collegeName'];
$DOB = $_POST['DOB'];
$passNumber = trim($_POST['passNumber']);
$passExpDate = $_POST['passExpDate'];
$seminarAttendance = $_POST['seminarAttendance'];
$seminarDate = $_POST['seminarDate'];
$getVetaInfo = $_POST['getVetaInfo'];
///
//echo "<br />Get VETA Info... ".$getVetaInfo." <br />";
///
if ($getVetaInfo == "YES") {
	$getVetaInfo == 1;
} else $getVetaInfo == 0;
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
//
$courseName = $_POST['courseName'];
$college = $_POST['college'];
$collegeLocation = $_POST['collegeLocation'];
//$courseEndDate = $_POST['courseEndDate'];
///
if ($_POST['courseEndDate'] == 'yyyy/mm/dd') {
	$courseEndDate = "0000-00-00";
} else {
	$courseEndDate = $_POST['courseEndDate'];
}
//else $courseEndDate = $_POST['courseEndDate'];
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
//
$count = count($_POST['college']);
echo "Number of Quotes submitted.... [" . $count . "]<br />";
//
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
//////////////////////////////////
$modifBy = $_SESSION['login'];
//Select MaxID Before Insert New Person
$queryClass = $db->dbQuery("SELECT MAX(personID) AS maxID FROM persons");
$rowClass = $db->fetch_array($queryClass);
$beforeID = $rowClass['maxID'];
//echo "<br />max ID ID before hand:".$beforeID."<br />";
///
$queryInsert = $db->dbQuery("INSERT INTO persons (personID, creationDate, 
        stCounsellor, firstName, lastName, mobilePhone, emailAddress, languageID, visaExpDate, visaType, statusID, 
        genComments, nacionality, profession, workExperience, collegeName, DOB, passNumber, passExpDate, 
        seminarAttendance, seminarDate, getVetaInfo, degreeDate, degreeUni, residencyCountry, originCountry, 
        homePhone, skype, msn, engTest, engTestName, engTestType, engTestDate, overallScore, reportFormNo, modifDate,
        modifBy)
        VALUES (NULL, '$date', '$stCounsellor', '$firstName', '$lastName', '$mobilePhone', 
        '$emailAddress', '$language', '$visaExpDate', '$visaType', '$statusID', '$genComments', '$nationality', '$profession', '$workExperience', 
        '$collegeName', '$DOB', '$passNumber', '$passExpDate', '$seminarAttendance', '$seminarDate', '$getVetaInfo', 
        '$degreeDate', '$degreeUni', '$residencyCountry', '$originCountry', '$homePhone', '$skype', '$msn', '$engTest', 
        '$engTestName', '$engTestType', '$engTestDate', '$overallScore', '$reptFormNo', NOW(), '$modifBy')");
//Select MaxID After Insert New Person
$queryClass = $db->dbQuery("SELECT MAX(personID) AS maxID FROM persons");
$rowClass = $db->fetch_array($queryClass);
$afterID = $rowClass['maxID'];
//
if ($beforeID == $afterID) {
	echo "<script type='text/javascript'>alert('Record not Inserted!!!\\n\\n Please Check the values entered.\\n\\n</script>";
	//echo "<a href=".$_SERVER['PHP_SELF']."?task=1b>Try Again => Go back to create Classifieds</a><br \><br \>";
	return false;
}
//
for ($i = 0; $i < $count; $i++) {
	echo "Records Inserted... " . $i . "<br />";
	$qryInsertQoute = $db->dbQuery("INSERT INTO quotations (personID, courseName, collegeID, collegeLocation, courseEndDate, newCourseStartDate,
    courseDuration, timeTable, enrolmentFee, firstTerm, mediBankMonths, mediBankCost, visaFees, medicalExams, dateAdded, counsellor,
    dateModified)
    VALUES ($afterID, '$courseName[$i]', $college[$i], '$collegeLocation[$i]', '$courseEndDate[$i]', '$newCourseStartDate[$i]', '$courseDuration[$i]',
    '$courseTimeTable[$i]', '$courseEnrolmentFee[$i]', '$courseFirstTerm[$i]', '$mediBankMonths[$i]', '$mediBankCost[$i]',
    '$visaFees[$i]', '$medicalExams[$i]', NOW(), '$stCounsellor',NOW())");
}
echo "<script type='text/javascript'>alert('AWESOME!!\\n\\nNEW Record added to the Database!');</script>";
echo "<script type='text/javascript'>window.location='update-form.php?me=" . $afterID . "'</script>";
//$exist = true;
?>