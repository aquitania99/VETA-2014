<?php 
session_start();
///
date_default_timezone_set("Australia/Sydney");
$date = date('Y-m-d');
//$promo = "iPad + Surfboard - 2012";
$ref = $_POST['ref'];
///
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
//echo "Getting email... ".$email."<br />";
$country = $_POST['nationality'];
$passport = $_POST['passport'];
$passportExpDate = $_POST['passportExpDate'];
//echo "Passport Date ".$passportExpDate."<br />";
$dob = $_POST['dob'];
$skype = $_POST['skype'];
$msn = $_POST['msn'];
$phone = $_POST['phone'];
$profession = $_POST['profession'];
$profName = $_POST['profName'];
$workExperience = $_POST['workExperience'];
$workExpYears = $_POST['workExpYears'];
///
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
$uSql = "UPDATE persons 
        SET firstName = '$name', lastName = '$lastName',
		nacionality = '$country', passExpDate = '$passportExpDate',
		DOB = '$dob', skype = '$skype', msn =  '$msn', mobilePhone = '$phone', profession = '$profName',
        workExperience = $workExpYears, engTest = $englishTest, engTestName = '$engTestName', 
		getVetaInfo = $getMoreInfo, modifDate = NOW()
        WHERE emailAddress = '$email'";
//echo "<br />Checking the query... ".$uSql."<br />";		
$r = mysql_query($uSql) or trigger_error( mysql_error($link), E_USER_ERROR );
//$return = '';		
$promoSql = "INSERT INTO promo (addedDate, promoName, firstName, lastName, emailAddress, whereKnewAboutUs, referralPage)
		VALUES ('$date', '$promo', '$name', '$lastName', '$email', '$whereKnewAboutUs', '$ref')";
//printf("Last inserted record has id %d\n", mysql_insert_id());
$promoR = mysql_query($promoSql) or trigger_error( mysql_error($link), E_USER_ERROR );
//////////////////////////////////
} else { 
//echo "<script type='text/javascript'>alert('Great a brand new contact!\\n Welcome!!! =)');</script>";
//echo "Niiicceee! <br />a brand new contact!<br /> Welcome!!! =)<br />";	
/////////////////////////////////////////////////////
//$iSql = mysql_query("INSERT INTO persons (creationDate, firstName, lastName, emailAddress, nacionality, passExpDate, DOB, skype, msn,
$iSql = "INSERT INTO persons (creationDate, firstName, lastName, emailAddress, nacionality, passExpDate, DOB, skype, msn,
		mobilePhone, profession, workExperience, engTest, engTestName, getVetaInfo)
		VALUES ('$date', '$name', '$lastName', '$email', '$country', '$passportExpDate', '$dob', '$skype', '$msn', 
		'$phone', '$profName', $workExpYears, $englishTest, '$engTestName', $getMoreInfo)";
//echo "the insert  ".$iSql."<br />";
//printf("Last inserted record has id %d\n", mysql_insert_id());
$r = mysql_query($iSql) or trigger_error( mysql_error($link), E_USER_ERROR );
//$return = "<script type='text/javascript'>window.location='../thank-you.html';</script>";		

$promoSql = "INSERT INTO promo (addedDate, promoName, firstName, lastName, emailAddress, whereKnewAboutUs, referralPage)
		VALUES ('$date', 'iPad + Surfboard - 2012', '$name', '$lastName', '$email', '$whereKnewAboutUs', '$ref')";
//printf("Last inserted record has id %d\n", mysql_insert_id());
$promoR = mysql_query($promoSql) or trigger_error( mysql_error($link), E_USER_ERROR );

}
//////////////////////////////////////////////////////////
echo "<script type='text/javascript'>window.location='../thank-you.html';</script>";
}
exit();
?>