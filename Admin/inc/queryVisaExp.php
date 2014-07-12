<?php 
session_start();
///
$from = $_POST['dateFrom'];
//var_dump($from);
$to = $_POST['dateTo'];
//exit();
//var_dump($to);
$search = $_POST['search'];
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
//////////////////////////////////
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
$queryVisaExpNote = $db->dbQuery("SELECT * FROM visaexpnote");
$rowVisaExpNote = $db->fetch_array($queryVisaExpNote);
//////////////////////////////////

/////////////////////////////////////////////////////
if (isset($search))
{
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();		
//echo "Were there a $search before the if?".$search."<br />";
//////////////////////////////////
$queryVisaExp = $db->dbQuery("SELECT firstName, lastName, mobilePhone, emailAddress, visaExpDate, personID, languageID FROM persons WHERE visaExpDate BETWEEN '$from' AND '$to' AND visaExpDate NOT LIKE '0000%' ORDER BY visaExpDate ASC");
	$rowVisaExp = $db->fetch_array($queryVisaExp);
//////////////////////////////////
	$personID = $rowVisaExp['personID'];
	$firstName = $rowVisaExp['firstName'];
	$lastName =  $rowVisaExp['firstLast'];
	$email =  $rowVisaExp['emailAddress'];
	$langID = $rowVisaExp['languageID'];
	//echo "WTF! ".$email."<br />";
	$expDate = $rowVisaExp['visaExpDate'];
}
//////////////////////////////////////////////////////////
///
$send = $_POST['sendEmail'];
///
//echo "THE BLOODY SEND-button! ".$send."<br />";
$emailSend = $_POST['sendOK'];
///
$lngID = $_POST['languageID'];
//$fullName = $_POST['fullName'];
if(empty($emailSend))
   {
     return false;
   }
if (isset($emailSend))
//echo "<br />We're inside the if on the send mail section......<br />";
{
$i=0;
$visaExpNote = $_POST['visaExpNote'];
$visaLangID = $_POST['visaLangID'];
//echo "BLABLABLA....New Note...".$visaExpNote."<br />";
//////////////////////////////////
		/// Create New DB Object
		$db = new MySQL();
		/// Open Connection
		$db->open();
		$updateVisaExpNote = $db->dbQuery("UPDATE visaexpnote SET visaExpNote = '$visaExpNote', languageID = $visaLangID, lastModDate = NOW()");
		//$rowVisaExpNote = $db->fetch_array($updateVisaExpNote);	
//////////////////////////////////
	foreach ($emailSend as $value)
	{
		$i++;
		///
		$test = $value;
		///
		$pieces = explode("+", $test);
		//echo "The Email...".$pieces[0]."<br />"; // email
		//echo "The Cat...".$pieces[1]."<br />"; // fullName
		//echo "The Expiry Date...".$pieces[2]."<br />"; // expiry date
		//echo "The Person ID....".$pieces[3]."<br />"; // Person ID in the DB
		$clientEmail = $pieces[0];
		$expDate = explode("-", $pieces[2]);
		//echo "The Expiry Date Formated...".$expDate[0]."/".$expDate[1]."/".$expDate[2]."<br />"; // expiry date	
		//$expFullDate = 	$expDate[0]." ".$expDate[1]." ".$expDate[2];
		//echo "The Expiry Date Formated...".$expFullDate."<br />";
		///
		//////////////////////////////////
		//echo $expDate."<br />";
		 $dayExp = $expDate[2];
		 $month = $expDate[1];
 //echo "The Month ".$month."<br />";
                        switch ($month) {
                        ///
                        case '01':
                        $month = 'JANUARY';
                        break;
                        case '02':
                        $month = 'FEBRUARY';
                        break;
						case '03':
                        $month = 'MARCH';
                        break;
						case '04':
                        $month = 'APRIL';
                        break;
						case '05':
                        $month = 'MAY';
                        break;
						case '06':
                        $month = 'JUNE';
                        break;
						case '07':
                        $month = 'JULY';
                        break;
						case '08':
                        $month = 'AUGUST';
                        break;
						case "09":
                        $month = "SEPTEMBER";
						//echo "<br />".$month."<br />";
                        break;
						case '10':
                        $month = 'OCTOBER';
                        break;
						case '11':
                        $month = 'NOVEMBER';
                        break;
						case '12':
                        $month = 'DECEMBER';
                        break;
                        }
//////////////////////////////////
		//echo "Email alert sent to: ".$pieces[0]."<br />";
		//echo "Language...".$visaLangID."<br />";
	if ($visaLangID == 1){	
		//echo "Spanish<br />";
		include_once('../sendEmail/visa_expiry.php');	
		}
	if ($visaLangID == 2){	
		//echo "Portuguese<br />";
		include_once('../sendEmail/visa_expiry_br.php');	
		}	
	if ($visaLangID == 0 || $visaLangID == 3 ){
		//echo "English<br />";
		include_once('../sendEmail/visa_expiry_eng.php');
		}
		
	}

//echo "<br />The Expiry Visa Email has been sent sucessfully to : ".$i." email addresses<br />";	
echo "<script type='text/javascript'>alert('Well Done!! \\n The Expiry Visa Email has been sent sucessfully to : $i email addresses.');</script>";	
}
//////////////////////////////////////////////////////////
?>
