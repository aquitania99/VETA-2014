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
require('tcpdf/config/lang/eng.php');
require('tcpdf/tcpdf-Payment.php');
///
date_default_timezone_set("Australia/Sydney");
$date = date('d/m/Y');
//
$quoteType = $_POST['quoteType'];
$stCounsellor = $_POST['stCounsellor'];
//
$totalAmount = $_POST['totalAmount'];
$amountPay = $_POST['amountPay'];
$amountOustanding = $_POST['amountOustanding'];
//
$receiptNotes = $_POST['receiptNotes'];
//
$today = $_POST['today'];
$fullName = $_POST['studentName'];
$profession = $_POST['profession'];
$email = $_POST['keyVal'];
$mobilePhone = $_POST['mobilePhone'];
$visaExpDate = $_POST['expiryDate'];
$stCounsellor = $_POST['stCounsellor'];
///
$quoteTitle = $_POST['quoteTitle'];
$college = $_POST['college'];
$courseName = $_POST['courseName'];
$newCourseStartDate = $_POST['newCourseStartDate'];
$newCourseEndDate = $_POST['newCourseEndDate'];
$holidaysDuration = $_POST['holidaysDuration'];
$courseTimeTable = $_POST['courseTimeTable'];
$weeklyCost = $_POST['weeklyCost'];
$courseDuration = $_POST['courseDuration'];
$courseInstalment = $_POST['courseInstalment'];
$courseEnrolmentFee = $_POST['courseEnrolmentFee'];
$materialsCost = $_POST['materialsCost'];
$totalCourseFees = $_POST['totalCourseFees'];
$instOne = $_POST['instOne'];
$instalmentFee = $_POST['instalmentFee'];
$deposit = $_POST['deposit'];
$bond = $_POST['bond'];
//
$healthFund = $_POST['healthFund'];
$mediBankMonths = $_POST['mediBankMonths'];
$healthCost = $_POST['healthCost'];
$visaFees = $_POST['visaFees'];
$totalAmountDue = $_POST['totalAmountDue'];
$instTwo = $_POST['instTwo'];
$instThree = $_POST['instThree'];
$instFour = $_POST['instFour'];
$quoteNotes = $_POST['quoteNotes'];
$receivedBy = $_POST['receivedBy'];
//
//var_dump($_POST);die('BUUUAAAAJAJAJAJ!!');exit;
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
	$pdf->Image('images/looooo.jpg', 150, 15) . '
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
          <td width="451">&nbsp;</td>
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
          <td><span class="tex">' . $instalmentsNo . '</span></td>
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
          <td  align="right" valign="middle" bgcolor="#FFFFFF">' . $college . ' / ' . $courseName . ' / ' . $courseDuration . ':</td>
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
          <td align="right" valign="middle" bgcolor="#FFFFFF"><strong>' . $amountOustanding . '</strong></td>
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
          <td><strong>Received By: ' . $receivedBy . '</strong></td>
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
$pdf->Output('Quotation-' . $date . '.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
