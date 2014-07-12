<?php $ref = $_SERVER['HTTP_REFERER'];$ref = substr($ref, 7);//echo "Referral?? ".$ref."<br />";
///
date_default_timezone_set("Australia/Sydney");
$date = date('Y-m-d');
//$ref = $_POST['ref'];
///
$name = ucfirst(strtolower($_POST['name']));
$name = htmlentities($name, ENT_QUOTES);
///
$lastName = ucfirst(strtolower($_POST['lastName']));
$lastName = htmlentities($lastName, ENT_QUOTES);
///
$email = strtolower($_POST['email']);
//echo "Getting email... ".$email."<br />";
//$country = $_POST['nationality'];
//$passport = $_POST['passport'];
//$passportExpDate = $_POST['passportExpDate'];
//echo "Passport Date ".$passportExpDate."<br />";
$dob = $_POST['dob'];
//echo "Date of Birth ".$dob."<br />";
//$skype = $_POST['skype'];
//$msn = $_POST['msn'];
$phone = $_POST['phone'];
$educationLevel = $_POST['educationLevel'];
$schoolName = ucwords(strtolower($_POST['schoolName']));
$schoolName = htmlentities($schoolName, ENT_QUOTES);
//
$courseName = ucwords(strtolower($_POST['courseName']));
$courseName = htmlentities($courseName, ENT_QUOTES);
//
//$profName = ucwords($_POST['profName']);
$hasWork	= $_POST['hasWork'];
$occupation	= ucwords(strtolower($_POST['occupation']));
$occupation = htmlentities($occupation, ENT_QUOTES);
//$workExperience = $_POST['workExperience'];
//$workExpYears = $_POST['workExpYears'];
$financialReq	= $_POST['financialReq'];
///
/*
if ($workExpYears == ''){
	$workExpYears = 0;
}
//echo "Work Exp... ".$workExpYears."<br />";
///
$englishTest = $_POST['engTest'];
///

//echo "English Test... ".$englishTest."<br />";
$engTestName = $_POST['engTestExam'];
///
if ($engTestName == 'Please select one'){
	$engTestName = "";
}
*/
///
$terms = $_POST['terms'];
$getMoreInfo = $_POST['getMoreInfo'];
///
$whereKnewAboutUs = $_POST['whereKnewAboutUs'];
///
if ($getMoreInfo == 'on'){
	$getMoreInfo = 1;
} else $getMoreInfo = 0;
///
$validForm = $_POST['validForm'];
//echo "Is there a sent?".$validForm."<br />";
if (isset($validForm)){
require_once('conn.php');
//////////////////////////////////////////////////////
#Sql, query to get the data from the table $table, defined in conn.php.
$sql = "SELECT count(*) FROM persons WHERE emailAddress = '$email' LIMIT 1";
/// 
$r = mysql_query($sql); 
$return = mysql_fetch_array($r);
$id = $return[0];
//echo "Anything inside the return? ".$id."<br />";
if( $id !=0){
//echo "<script type='text/javascript'> alert('Wait a minute! \\n This person already exists in the database...\\n Let's Update the records!'); </script>";	
//echo "Wait a minute! <br />This person already exists in the database...<br /><br />Let's Update the records!";	
/*
$uSql = "UPDATE persons 
        SET firstName = '$name', lastName = '$lastName',
		nacionality = '$country', passExpDate = '$passportExpDate',
		DOB = '$dob', skype = '$skype', msn =  '$msn', mobilePhone = '$phone', profession = '$profName',
        workExperience = $workExpYears, engTest = $englishTest, engTestName = '$engTestName', 
		getVetaInfo = $getMoreInfo, modifDate = NOW()
        WHERE emailAddress = '$email'";
*/
$uSql = "UPDATE persons 
        SET firstName = '$name', lastName = '$lastName',
		DOB = '$dob', mobilePhone = '$phone', profession = '$courseName',
		getVetaInfo = $getMoreInfo, modifDate = NOW()
        WHERE emailAddress = '$email'";		
//echo "<br />Checking the query... ".$uSql."<br />";		
$r = mysql_query($uSql) or trigger_error( mysql_error($link), E_USER_ERROR );
//$return = '';		
$promoSql = "INSERT INTO veta_seminars_2013 (addedDate, seminarName, firstName, lastName, emailAddress, 
			DOB, phone, educationLevel, educationCenter, degreeTitle, hasWork, occupation, financialReq,
			whereKnewAboutUs, referralPage)
		VALUES ('$date', '$promo', '$name', '$lastName', '$email', '$dob', '$phone', '$educationLevel', 
		'$schoolName', '$courseName', '$hasWork', '$occupation', '$financialReq', '$whereKnewAboutUs', '$ref')";
//printf("Last inserted record has id %d\n", mysql_insert_id());
$promoR = mysql_query($promoSql) or trigger_error( mysql_error($link), E_USER_ERROR );
//////////////////////////////////
} else { 
//echo "<script type='text/javascript'>alert('Great a brand new contact!\\n Welcome!!! =)');</script>";
//echo "Niiicceee! <br />a brand new contact!<br /> Welcome!!! =)<br />";	
/////////////////////////////////////////////////////
//$iSql = mysql_query("INSERT INTO persons (creationDate, firstName, lastName, emailAddress, nacionality, passExpDate, DOB, skype, msn,
$iSql = "INSERT INTO persons (creationDate, firstName, lastName, emailAddress, nacionality, DOB, mobilePhone, profession, getVetaInfo)
		VALUES ('$date', '$name', '$lastName', '$email', 'Colombia', '$dob', '$phone', '$courseName', $getMoreInfo)"; 
//var_dump($iSql);
//end;
//echo "the insert  ".$iSql."<br />";
//printf("Last inserted record has id %d\n", mysql_insert_id());
$r = mysql_query($iSql) or trigger_error( mysql_error($link), E_USER_ERROR );
//$return = "<script type='text/javascript'>window.location='../thank-you.html';</script>";		

$promoSql = "INSERT INTO veta_seminars_2013 (addedDate, seminarName, firstName, lastName, emailAddress, 
			DOB, phone, educationLevel, educationCenter, degreeTitle, hasWork, occupation, financialReq,
			whereKnewAboutUs, referralPage)
		VALUES ('$date', '$promo', '$name', '$lastName', '$email', '$dob', '$phone', '$educationLevel', 
		'$schoolName', '$courseName', '$hasWork', '$occupation', '$financialReq', '$whereKnewAboutUs', '$ref')";
//printf("Last inserted record has id %d\n", mysql_insert_id());
$promoR = mysql_query($promoSql) or trigger_error( mysql_error($link), E_USER_ERROR );

}
//////////////////////////////////////////////////////////
require_once('../email.php');
echo "<script type='text/javascript'>window.location='../thank-you.html';</script>";
}
exit();
?>