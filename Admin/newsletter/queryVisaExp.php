<?php 
session_start();
///
$from = $_POST['dateFrom'];
$to = $_POST['dateTo'];
$search = $_POST['search'];
//echo "Is there a $search?".$search."<br />";
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////

if (isset($search))
{
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();		
//echo "Were there a $search before the if?".$search."<br />";
//////////////////////////////////
$queryVisaExp = $db->dbQuery("SELECT firstName, lastName, emailAddress, visaExpDate FROM persons WHERE visaExpDate BETWEEN '$from' AND '$to' and personID NOT IN (0) ORDER BY visaExpDate ASC");
	$rowVisaExp = $db->fetch_array($queryVisaExp);
//////////////////////////////////
	$firstName = $rowVisaExp['firstName'];
	$lastName =  $rowVisaExp['firstLast'];
	$email =  $rowVisaExp['emailAddress'];
	//echo "WTF! ".$email."<br />";
	$expDate = $rowVisaExp['visaExpDate'];
	
}
//////////////////////////////////////////////////////////
echo "Sending to this email....".$testEmail." ".$date."<br />";
///
$send = $_POST['sendEmail'];
///
echo "THE BLOODY SEND-button! ".$send."<br />";
$emailSend = $_POST['sendOK'];
///
$fullName = $_POST['fullName'];
if(empty($emailSend))
   {
     return false;
   }
if (isset($emailSend))
echo "<br />We're inside the if on the send mail section......<br />";
{
	foreach ($emailSend as $fullName => $value)
	{
		///
		echo "<br />El gato...".$fullName."<br />";
		$test = $value;
		///
		echo "<br />Email Addresses chosen: ".$test."<br />";
		require('../sendEmail/visa_expiry.php');
	}	
}
//////////////////////////////////////////////////////////
?>