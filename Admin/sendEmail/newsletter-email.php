<?
session_start();
if(!session_is_registered('login')){
header("location:index.php");
}
require_once('class.phpmailer.php');
/////
//Thursday 12th of May 2011
//$date = date('l dS \of F Y');
//May, 12 / 2011
$date = date('F \,d \/ Y');
//echo "<br /><span style='color:red; font-size:14px;'>And Again...The category is..".$category."</span><br />";
if ($sendEmail == 'yes' || $testEmail !='')
{
//////////////////////////////////
	if ($sendEmail == 'yes'){
	$queryNLEmails = $db->dbQuery("SELECT personID, firstName, lastName, emailAddress FROM persons WHERE personID <> 0 AND getVetaInfo = 1");
	$rowNLEmails = $db->fetch_array($queryNLEmails);
	////
	$row_Count = mysql_num_rows($queryNLEmails);
	$total = $row_Count;	//$countPersons = count($rowNLEmails);	
        //
        /// Create File
    $fp = fopen('official-NewsletterSent-file.csv', 'w+');
        ///
/// Send The Emails
        do
	{
	///
	$sendEmails = $rowNLEmails['emailAddress'];
	$name = $rowNLEmails['firstName'];
	$lastName = $rowNLEmails['lastName'];
	$usr = $rowNLEmails['personID']; 
        ////
            require_once('class.phpmailer.php');
            require('newNewsletterEmailPHP.php');    
            ///
        echo "sending Newsletter email to: ".$sendEmails."<br />";
        ///
            fwrite($fp,$sendEmails." \t");
        ///
        //$value = $sendEmails;        
        ///
        //require_once('confirmEmailPHP.php');
        ///
/////
} while($rowNLEmails = $db->fetch_array($queryNLEmails));
/*
/// Newsletter Details
	$sendEmails = $rowNLEmails['emailAddress'];
	$Name = $rowNLEmails['firstName'];
	$LastName = $rowNLEmails['lastName'];
	$usr = $rowNLEmails['personID'];
	}
 * */
        }
///////////////////////	
	if ($testEmail !='')
	{
        ///
        $array=explode(',',$testEmail);
        ///
        $total=count($array);
        ///
        $name = "Veta";
        $lastName = "Testing User";
        $usr = "1010";
        ///
        $fp = fopen('newsletter-file-test.csv', 'w+');
        ///
        echo "<span style='color:#FFF; font-weight:bold; font-size:14px;'>".$total." testing email(s) have been entered!</span><br />";
        foreach ($array as $value) {
            $sendEmails = $value;
            ////
            require_once('class.phpmailer.php');
            require('newNewsletterEmailPHP.php');    
            ///
            fwrite($fp,$value.", \t");
            echo "sending test email to: ".$sendEmails."<br />";
        }
        require_once('confirmEmailPHP.php');
        ///
        unset($value); // break the reference with the last element
	//echo "NOW WE ARE DEEP INSIDE THE BELLY OF THE BEAST!! ".$testEmail."<br />";
        //
        }
        /////
        if ($testEmail !='') {
        echo "<br /><span style='color:#FF0; font-size:14px;'>The Contact Form has been Sent to: ".$total." Email Address(es)!!</span><br />";	
        }
        /////
        if 	($sendEmail == 'yes'){
        echo "<br /><span style='color:#FF0; font-size:14px;'>Send to a total number of ".$total." Email Addresses from the DB!</span><br />";	
        }
        //////////////////////////////////////////////////////////
        }	
//////////////////////////////////////////////////////////
?>
