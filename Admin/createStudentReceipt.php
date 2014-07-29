<?php
ob_start();
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2010-10-04
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               Manor Coach House, Church Hill
//               Aldershot, Hants, GU12 4RQ
//               UK
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */
require 'tcpdf/config/lang/eng.php';
require 'tcpdf/tcpdf-Payment.php';
//
require 'classes/database.php';
require 'classes/PaymentEntry.php';
require 'classes/person.php';
require 'classes/college.php';
//
$pID = $_GET['pID'];
$person_ID = $_GET['keyVal'];
$courseEntry = $_GET['courseEntry'];
$courseType = 'english';
$prevID = $_GET['pID'];
$receipt_number = $_GET['receiptNumber'];
//
$db = Database::getInstance();
$mysqli = $db->getConnection();
//
$personalDetails = new Person();
$choice = 5;
$personalDetails->search($choice, $person_ID);
$personalDetails->results;
$personResults = json_decode($personalDetails->results, true);
$fullName = $personResults['firstName'] . ' ' . $personResults['lastName'];
//
if (!empty($personResults['visaExpDate'])) {
	$expDate = explode('-', $personResults['visaExpDate']);
	$year = $expDate[0];
	$month = $expDate[1];
	$day = $expDate[2];
	$expiryDate = $day . "/" . $month . "/" . $year;
} else { $expiryDate = ''; }
//

$paymentDetails = new PaymentEntry();
$paymentDetails->searchCourse($courseEntry, $person_ID, $pID);
$paymentResult = json_decode($paymentDetails->results, true);
//
date_default_timezone_set("Australia/Sydney");
$date = date('d/m/Y');
$today = $_POST['today'];
//$fullName = $personalDetails->results['firstName']." ".$personalDetails->results['lastName'];
$profession = $personalDetails->results['profession'];
$email = $personResults['emailAddress'];
$mobilePhone = $personResults['mobilePhone'];
$visaExpDate = $personResults['visaExpDate'];
$stCounsellor = $personResults['stCounsellor'];
//
$sql_select = "SELECT * FROM payment_received WHERE person_ID = '$person_ID' AND courseType = 'english' AND courseEntry = $courseEntry AND prevID = $pID ORDER BY paid_on DESC ";
$rsSql_select = $mysqli->query($sql_select);
//print_r($sql_select);die;
$resultPayment = $rsSql_select->fetch_array();
//
switch ($courseEntry) {
	case '1':
		$receiptNumber = $resultPayment['receipt_number'];
		$receiptTitle = $paymentResult['paymentTitle'];
		$college = $paymentResult['college'];
		$courseName = $paymentResult['courseName'];
		$weeklyCost = $paymentResult['weeklyCost'];
		$courseDuration = $paymentResult['courseDuration'];
		$courseInstalment = $paymentResult['instOne'];
		$courseEnrolmentFee = !empty($paymentResult['courseEnrolmentFee']) ? $paymentResult['courseEnrolmentFee'] : '0';
		$materialsCost = !empty($paymentResult['materialsCost']) ? $paymentResult['materialsCost'] : '0';
		$totalCourseFees = $paymentResult['totalCourseFees'];
		$instOne = $paymentResult['instOne'];
		$instalmentFee = !empty($paymentResult['instalmentFee']) ? $paymentResult['instalmentFee'] : '0';
		//
		$deposit = !empty($paymentResult['deposit']) ? $paymentResult['deposit'] : '0';
		$bond = !empty($paymentResult['bond']) ? $paymentResult['bond'] : '0';
		//
		$healthFund = !empty($paymentResult['healthFund']) ? $paymentResult['healthFund'] : '0';
		$mediBankMonths = !empty($paymentResult['healthCoverMonths']) ? $paymentResult['healthCoverMonths'] : '0';
		$healthCost = !empty($paymentResult['healthCost']) ? $paymentResult['healthCost'] : '0';
		$visaFees = !empty($paymentResult['visaFees']) ? $paymentResult['visaFees'] : '0';
		$totalAmountDue = $resultPayment['amount_due'];
		//
		$totalAmount = $resultPayment['amount_due'];
		$amountPay = $resultPayment['amount_paid'];
		$amountOutstanding = $resultPayment['amount_outstanding'];
		$receiptNotes = $resultPayment['payment_comments'];
		$paidOn = $resultPayment['paid_on'];
		$receivedBy = $resultPayment['received_by'];
		//
//		var_dump($receiptNotes);die;
		break;

	case '2':
		$receiptNumber = $resultPayment['receipt_number'];
		$receiptTitle = $paymentResult['paymentTitle2'];
		$college = $paymentResult['college2'];
		$courseName = $paymentResult['courseName2'];
		$weeklyCost = $paymentResult['weeklyCost2'];
		$courseDuration = $paymentResult['courseDuration2'];
		$courseInstalment = $paymentResult['instTwo'];
		//
		$courseEnrolmentFee = !empty($paymentResult['courseEnrolmentFee2']) ? $paymentResult['courseEnrolmentFee2'] : '0';
		$materialsCost = !empty($paymentResult['materialsCost2']) ? $paymentResult['materialsCost2'] : '0';
		$totalCourseFees = $paymentResult['totalCourseFees2'];
		$instOne = $paymentResult['instTwo'];
		$instalmentFee = !empty($paymentResult['instalmentFee2']) ? $paymentResult['instalmentFee2'] : '0';
		//
		$deposit = '0';
		$bond = '0';
		//
		$healthFund = '0';
		$mediBankMonths = '0';
		$healthCost = '0';
		$visaFees = '0';
		$totalAmount = $resultPayment['amount_due'];
		$amountPay = $resultPayment['amount_paid'];
		$amountOutstanding = $resultPayment['amount_outstanding'];
		$receiptNotes = $resultPayment['payment_comments'];
		$paidOn = $resultPayment['paid_on'];
		$receivedBy = $resultPayment['received_by'];
		//
		break;

	case '3':
		$receiptTitle = $paymentResult['paymentTitle3'];
		$college = $paymentResult['college3'];
		$courseName = $paymentResult['courseName3'];
		$weeklyCost = $paymentResult['weeklyCost3'];
		$courseDuration = $paymentResult['courseDuration3'];
		$courseInstalment = $paymentResult['instThree'];
		//
		$courseEnrolmentFee = !empty($paymentResult['courseEnrolmentFee3']) ? $paymentResult['courseEnrolmentFee3'] : '0';
		$materialsCost = !empty($paymentResult['materialsCost3']) ? $paymentResult['materialsCost3'] : '0';
		$totalCourseFees = $paymentResult['totalCourseFees3'];
		$instOne = $paymentResult['instThree'];
		$instalmentFee = !empty($paymentResult['instalmentFee3']) ? $paymentResult['instalmentFee3'] : '0';
		//
		$deposit = '0';
		$bond = '0';
		//
		$healthFund = '0';
		$mediBankMonths = '0';
		$healthCost = '0';
		$visaFees = '0';
		$totalAmountDue = $resultPayment['amount_due'];
		//
		$totalAmount = $resultPayment['amount_due'];
		$amountPay = $resultPayment['amount_paid'];
		$amountOutstanding = $resultPayment['amount_outstanding'];
		$receiptNotes = $resultPayment['payment_comments'];
		$paidOn = $resultPayment['paid_on'];
		$receivedBy = $resultPayment['received_by'];
		//
		break;

	case '4':
		$receiptTitle = $paymentResult['paymentTitle4'];
		$college = $paymentResult['college4'];
		$courseName = $paymentResult['courseName4'];
		$weeklyCost = $paymentResult['weeklyCost4'];
		$courseDuration = $paymentResult['courseDuration4'];
		$courseInstalment = $paymentResult['instFour'];
		//
		$courseEnrolmentFee = !empty($paymentResult['courseEnrolmentFee4']) ? $paymentResult['courseEnrolmentFee4'] : '0';
		$materialsCost = !empty($paymentResult['materialsCost4']) ? $paymentResult['materialsCost4'] : '0';
		$totalCourseFees = $paymentResult['totalCourseFees4'];
		$instOne = $paymentResult['instFour'];
		$instalmentFee = !empty($paymentResult['instalmentFee4']) ? $paymentResult['instalmentFee4'] : '0';
		//
		$deposit = '0';
		$bond = '0';
		//
		$healthFund = '0';
		$mediBankMonths = '0';
		$healthCost = '0';
		$visaFees = '0';
		$totalAmountDue = $resultPayment['amount_due'];
		//
		$totalAmount = $resultPayment['amount_due'];
		$amountPay = $resultPayment['amount_paid'];
		$amountOutstanding = $resultPayment['amount_outstanding'];
		$receiptNotes = $resultPayment['payment_comments'];
		$paidOn = $resultPayment['paid_on'];
		$receivedBy = $resultPayment['received_by'];
		//
		break;
}

$collegeId = (($courseEntry == 1) ? $paymentResult['college'] : $paymentResult['college' . $courseEntry]);
//
$searchColleges = 'SELECT entity_name ';
$searchColleges .= 'FROM education_provider ';
//$searchColleges .= 'WHERE edu_providerID IN ('.$paymentResult['college'].','.$paymentResult['college2'].','.$paymentResult['college3'].','.$paymentResult['college4'].')';
$searchColleges .= 'WHERE edu_providerID IN (' . $collegeId . ')';
//
//print_r($searchColleges);die();
$rsColleges = $mysqli->query($searchColleges);
//
$paymentResultColleges = $rsColleges->fetch_array();
//
$name = $paymentResultColleges['entity_name'];
//
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Australia VETA');
$pdf->SetTitle('Quote');
$pdf->SetSubject('Courses Quotation and Financial Requeriments');
$pdf->SetKeywords('Australia VETA, Quotations System, PDF');
// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, DF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 8, '', true);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 255);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set some text for example

$txt = '...---... ';
// Multicell test
$pdf->Ln(10);

// set color for background
//$pdf->SetFillColor(220, 255, 220);
$pdf->SetFillColor(255, 255, 255);
//
//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 11);

// add a page
//$pdf->AddPage();

// create some HTML content
$html = '<table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="left" valign="top"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <table width="630" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="right" valign="top" class="tex">' .
	$pdf->image('images/looooo.jpg', 150, 15) . '
          <p>&nbsp;</p></td>
        </tr>
      <tr>
        <td align="right" valign="top"><span style="color:#666; font-size:10pt"><strong>VETA Education Consultancy<br />
          Viva, Estudie y Trabaje en Australia</strong><br />
          Suite 102, Level 1, 22 Market St, <br />
          Sydney, NSW 2000 <strong><br />
            T</strong> 02 9299 1458 - <strong>F</strong> 02 9299 9214<br />
          www.australiaveta.com.au <br />
          admissions@australiaveta.com.au</span></td>
        </tr>
      <tr>
        <td align="right" valign="top" class="tex">&nbsp;</td>
      </tr>
      </table>
      <table width="630" cellpadding="2">
        <tr style="line-height:8px;">
          <td colspan="3" align="center" valign="middle" bgcolor="#CC0000"><span style="color:#fff; font-size:14pt"  ><strong>STUDENT RECEIPT</strong></span></td>
        </tr>
        <tr>
          <td colspan="2"  align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td width="163" align="right" valign="middle" bgcolor="#FFFFFF"><strong>Receipt Number:</strong></td>
          <td width="451">' . $receiptNumber . '</td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Today\'s Date:</strong></td>
          <td><span class="tex">' . $date . '</span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Student Name:</strong></td>
          <td><span class="tex">' . $fullName . '</span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Mobile Phone:</strong></td>
          <td><span class="tex">' . $mobilePhone . '</span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Payment Fees:</strong></td>
          <td><span class="tex">' . $receiptTitle . '</span></td>
        </tr>
        <tr>
          <td colspan="2" align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      </table>
      <table width="630" cellpadding="2">
        <tr class="tex-white">
          <td width="480" align="center" valign="middle" bgcolor="#1F497D"><span style="color:#fff"><strong>CONCEPT</strong></span></td>
          <td width="134" align="center" valign="middle" bgcolor="#1F497D"><span style="color: #fff"><strong>AMOUNT</strong></span></td>
        </tr>
        <tr>
          <td  align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
        </tr>
        <tr>
          <td  align="right" valign="middle" bgcolor="#FFFFFF">' . $name . ' / ' . $courseName . ' / ' . $courseDuration . ':</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseInstalment . '</td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF">Enrolment fee:</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseEnrolmentFee . '</td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF">Material Fee:</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $materialsCost . '</td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF">Instalment Fee:</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $instalmentFee . '</td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF">Health Insurance:' . $healthFund . ' - ' . $mediBankMonths . ':</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $healthCost . '</td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF">Visa Fees:</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $visaFees . '</td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF">Deposit:</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $deposit . '</td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#FFFFFF">(-) Bono:</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $bond . '</td>
        </tr>
        <tr class="tex-white">
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Course/Term - Total Amount:</strong></td>
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>' . ($courseInstalment + $courseEnrolmentFee + $materialsCost + $instalmentFee + $healthCost + $visaFees + $deposit - $bond) . '</strong></td>
        </tr>
        <tr class="tex-white">
          <td align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr class="tex-white">
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Total Amount Payable:</strong></td>
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>' . $totalAmount . '</strong></td>
        </tr>
        <tr class="tex-white">
          <td align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
          <td align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr class="tex-white">
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Amount Paid:</strong></td>
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>' . $amountPay . '</strong></td>
        </tr>
        <tr class="tex-white">
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Amount Outstanding:</strong></td>
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>' . $amountOutstanding . '</strong></td>
        </tr>
      </table>
      <table width="630" border="0" cellpadding="2">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Comments:</strong></td>
        </tr>
        <tr>
          <td>' . $receiptNotes . '</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Received By: ' . $receivedBy . ' on ' . $paidOn . '</strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
</td>
  </tr>

  <tr>

  </tr>
<tr style="line-height:10px;">
        <td colspan="3" align="center" valign="middle" bgcolor="#1F497D"><span class="tex-white" style="color:#fff; font-size:12pt"><em>Giving you the right information at the right time to make your dreams become a reality </em></span></td>
  </tr>
  </table>


';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------
ob_end_clean();
//Close and output PDF document
$pdf->Output($receiptNumber . '-' . $date . '.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
