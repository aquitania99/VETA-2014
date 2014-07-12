<?php
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
$vpd_feesNumber = $_POST['instalments'];
///

/* *** Financial Details *** */
$vp_balance = $_POST['balance'];
if ($vp_balance == ""){
    $vp_balance = '0.00';
}

$vs_studentID = $_POST['studentID'];

$vp_numberFeesPaid= $_POST['numberFeesPaid'];
$vp_nextPaymentDueDate = $_POST['nextPaymentDueDate'];
if ($vp_nextPaymentDueDate == "yyyy/mm/dd"){
    $vp_nextPaymentDueDate = '0000-00-00';
}

$vp_totalPaidToDate = $_POST['totalPaidToDate'];
if ($vp_totalPaidToDate == ""){
    $vp_totalPaidToDate = '0.00';
}


$vp_genComments = mysql_real_escape_string($_POST['genComments']);
$vp_vetaAdminUser = $_POST['vetaAdminUser'];
//$vp_insertDate = $_POST['insertDate'];
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
/*** Prev - Check START ***/
$prevCheck = $db->dbQuery("SELECT count(1) as count FROM `personstest` WHERE emailAddress = '$p_emailAddress'");
$resultCheck = $db->fetch_array($prevCheck);
$res = $resultCheck['count'];
//print_r($res);
//exit();
/***  Prev - Check END ***/
IF ($res > 0){
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

    $countBefore = $db->dbQuery("SELECT count(1) as maxReg FROM veta_students WHERE emailAddress = '$p_emailAddress'");
    $resultCountBefore = $db->fetch_array($countBefore);
    $maxCountIdBefore = $resultCountBefore['maxReg'];
    
    if ($maxCountIdBefore >=1){
        $updateStudent = $db->dbQuery("UPDATE veta_students SET studentID='$vs_studentID', 
        edu_ProviderID = $vs_eduCentre, courseName = '$vs_courseName', 
        enrolment_date = '$vs_enrolmentDate', course_lenght = $vs_courseLenght, genComments = '$vp_genComments'
        WHERE emailAddress = '$p_emailAddress'");     
    }
    else {
    $countBefore = $db->dbQuery("SELECT count(1) as maxReg FROM veta_students");
    $resultCountBefore = $db->fetch_array($countBefore);
    $maxCountIdBefore = $resultCountBefore['maxReg'];
    ///
    $insertStudent = $db->dbQuery("INSERT INTO `veta_students` (passNumber, emailAddress,
        studentID, edu_ProviderID, courseName, enrolment_date, course_lenght, genComments)
        VALUES ('$p_passNumber', '$p_emailAddress', '$vs_studentID', $vs_eduCentre, '$vs_courseName', 
        '$vs_enrolmentDate',$vs_courseLenght, '$vp_genComments')");
    }
    ///    
    $countAfter = $db->dbQuery("SELECT count(1) as maxReg FROM veta_students");
    $resultCountAfter = $db->fetch_array($countAfter);
    $maxCountIdAfter = $resultCountAfter['maxReg'];
//////////////////////////////////

    if ($maxCountIdAfter > $maxCountIdBefore){
    $queryPaymentInsert = $db->dbQuery("INSERT INTO payments (passNumber, emailAddress,
    edu_providerID, studentID, total_course_cost, paid_instalments)
    VALUES  ('$p_passNumber', '$p_emailAddress', '$vs_eduCentre', '$vs_studentID', 
            '$vp_totalCourseCost', '$vp_numberFeesPaid')");
    /////////////////////////////////
    }
    /// Invoice Thing 
        ///
        unset($_POST['Insert']); // excluding the value for the submit button
        unset($_POST['startInsert']);
        //print_r($_POST);
        //$stdID = $_POST['stdID'];
        $pay = $_POST['payments'];
        $commRate = $_POST['commission'];
        $realPay = $_POST['realPayment'];
        $exc = $_POST['GSTexc'];
        $inc = $_POST['GSTinc'];
        $invNumber = $_POST['InvoiceNumber'];

        $CommDeducted = $_POST['CommDeducted'];
        if ($CommDeducted = 'on'){
                $CommDeducted = 'Y';
        }
        else $CommDeducted = 'N';
        $marketingIncentive = $_POST['marketingIncentive'];
        if ($marketingIncentive = 'on'){
                $marketingIncentive = 'Y';
        }
        else $marketingIncentive = 'N';
        $mIncentive = $_POST['mIncentive'];
        $payDateDue = $_POST['PaymentDateDue'];
        $StudentPaidDate = $_POST['StudentPaidDate'];
        $totalPaid = $_POST['TotalPaid'];

        $ColPaymentDateDue = $_POST['ColPaymentDateDue'];
        $collegePaidDate = $_POST['CollegeDatePaid'];
        $ColTotalPaid = $_POST['ColTotalPaid'];
        ///
        $column = array();
        $results = array($_POST); // The array we're working with
        foreach( $pay as $key => $n ) {
          //print_r($n);	
          /*
                print "Student Fee".round($n, 2).", Commission ".round($realPay[$key], 2).
                ", GST is ".round($exc[$key], 2).". Total to be paid: ".round($inc[$key], 2).
                ", Invoice No. ".$invNumber[$key]." To be paid on: ".$payDateDue[$key].
                "|| Paid So far $ ".round($totalPaid[$key], 2).
                        "and was Paid on ".$collegePaidDate[$key]."<br />";

          echo "INSERT INTO TABLE (invoice_Id, studentID, edu_provider_ID, paymentFee, commissionRate, commissionValue, GSTexc, GSTinc, invoiceNumber, payDueDate, totalPaid, colPaidDate)
          VALUES('','".$stdID."','', '".round($n, 2)."', '', '".round($realPay[$key], 2)."', '".round($exc[$key], 2)."', '".round($inc[$key], 2)."', ".$invNumber[$key].
          ", '".$payDateDue[$key]."', '".round($totalPaid[$key], 2)."', '".$collegePaidDate[$key]."'); ";
        }
        */
        $insertInv = $db->dbQuery("INSERT INTO invoices (invoice_Id, studentID, emailAddress, edu_provider_ID, paymentFee, commissionRate, commissionValue, GSTexc, GSTinc, invoiceNumber, CommDeducted, marketingIncentive, mkIncentiveValue,
            payDueDate, StudentPaidDate, totalPaid, ColPaymentDateDue, colPaidDate, ColTotalPaid)
          VALUES('','".$p_passNumber."','".$p_emailAddress."','".$vs_eduCentre."', '".round($n, 2)."', '".$commRate."', '".round($realPay[$key], 2)."', '".round($exc[$key], 2)."', '".round($inc[$key], 2)."', '".$invNumber[$key].
          "', '".$CommDeducted[$key]."','".$marketingIncentive."','".$mIncentive."', '".$payDateDue[$key]."', '".$StudentPaidDate[$key]."', '".round($totalPaid[$key], 2)."', '".$ColPaymentDateDue."', '".$collegePaidDate[$key]."', '".$ColTotalPaid[$key]."'); ");
        reset($results);
        }
}
//////////////////////////////////
ELSE IF ($res == 0){
    echo '<script type="text/javascript">alert("Alright Let\'s Insert this record!!!!\\n It won\'t take long =)!!!");</script>';
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
    
        
    $insertStudent = $db->dbQuery("INSERT INTO veta_students (passNumber, emailAddress, 
        studentID, edu_ProviderID, courseName, enrolment_date, course_lenght, genComments)
        VALUES ('$p_passNumber', '$p_emailAddress', '$vs_studentID', $vs_eduCentre, '$vs_courseName', 
        '$vs_enrolmentDate', $vs_courseLenght, '$vp_genComments')");

        
    $countAfter = $db->dbQuery("SELECT count(1) as maxReg FROM veta_students");
    $resultCountAfter = $db->fetch_array($countAfter);
    $maxCountIdAfter = $resultCountAfter['maxReg'];
    
    }
    ELSE
    echo "Ooopss!!!! X( <br />";
    //exit();
    
//////////////////////////////////
if ($maxCountIdAfter > $maxCountIdBefore){
    //echo "$maxCountIdAfter EFECTIVELY > $maxCountIdBefore!!";
    
$queryPaymentInsert = $db->dbQuery("INSERT INTO payments (passNumber, emailAddress,
edu_providerID, studentID, total_course_cost, due_instalments, paid_instalments)
VALUES  ('$p_passNumber', '$p_emailAddress', '$vs_eduCentre', '$vs_studentID', 
        '$vp_totalCourseCost', $vpd_feesNumber, '$vp_numberFeesPaid')");
/////////////////////////////////

}
/// Invoice Thing 
///
unset($_POST['Insert']); // excluding the value for the submit button
unset($_POST['startInsert']);
//print_r($_POST);
//$stdID = $_POST['stdID'];
$pay = $_POST['payments'];
$commRate = $_POST['commission'];
$realPay = $_POST['realPayment'];
$exc = $_POST['GSTexc'];
$inc = $_POST['GSTinc'];
$invNumber = $_POST['InvoiceNumber'];

$CommDeducted = $_POST['CommDeducted'];
if ($CommDeducted = 'on'){
	$CommDeducted = 'Y';
}
else $CommDeducted = 'N';
$marketingIncentive = $_POST['marketingIncentive'];
if ($marketingIncentive = 'on'){
	$marketingIncentive = 'Y';
}
else $marketingIncentive = 'N';
$mIncentive = $_POST['mIncentive'];
$payDateDue = $_POST['PaymentDateDue'];
$StudentPaidDate = $_POST['StudentPaidDate'];
$totalPaid = $_POST['TotalPaid'];

$ColPaymentDateDue = $_POST['ColPaymentDateDue'];
$collegePaidDate = $_POST['CollegeDatePaid'];
$ColTotalPaid = $_POST['ColTotalPaid'];
///
$column = array();
$results = array($_POST); // The array we're working with
foreach( $pay as $key => $n ) {
  //print_r($n);	
  /*
	print "Student Fee".round($n, 2).", Commission ".round($realPay[$key], 2).
        ", GST is ".round($exc[$key], 2).". Total to be paid: ".round($inc[$key], 2).
        ", Invoice No. ".$invNumber[$key]." To be paid on: ".$payDateDue[$key].
        "|| Paid So far $ ".round($totalPaid[$key], 2).
  		"and was Paid on ".$collegePaidDate[$key]."<br />";
  
  echo "INSERT INTO TABLE (invoice_Id, studentID, edu_provider_ID, paymentFee, commissionRate, commissionValue, GSTexc, GSTinc, invoiceNumber, payDueDate, totalPaid, colPaidDate)
  VALUES('','".$stdID."','', '".round($n, 2)."', '', '".round($realPay[$key], 2)."', '".round($exc[$key], 2)."', '".round($inc[$key], 2)."', ".$invNumber[$key].
  ", '".$payDateDue[$key]."', '".round($totalPaid[$key], 2)."', '".$collegePaidDate[$key]."'); ";
}
*/
$insertInv = $db->dbQuery("INSERT INTO invoices (invoice_Id, studentID, emailAddress, edu_provider_ID, paymentFee, commissionRate, commissionValue, GSTexc, GSTinc, invoiceNumber, CommDeducted, marketingIncentive, mkIncentiveValue,
    payDueDate, StudentPaidDate, totalPaid, ColPaymentDateDue, colPaidDate, ColTotalPaid)
  VALUES('','".$p_passNumber."','".$p_emailAddress."','".$vs_eduCentre."', '".round($n, 2)."', '".$commRate."', '".round($realPay[$key], 2)."', '".round($exc[$key], 2)."', '".round($inc[$key], 2)."', '".$invNumber[$key].
  "', '".$CommDeducted[$key]."','".$marketingIncentive."','".$mIncentive."', '".$payDateDue[$key]."', '".$StudentPaidDate[$key]."', '".round($totalPaid[$key], 2)."', '".$ColPaymentDateDue."', '".$collegePaidDate[$key]."', '".$ColTotalPaid[$key]."'); ");
reset($results);
}
//
///
}
?>