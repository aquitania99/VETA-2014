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
require('tcpdf/tcpdf-qt.php');
///
date_default_timezone_set("Australia/Sydney");
$date = date('d/m/Y');
///
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
$healthFund = $_POST['healthFund'];
$mediBankMonths = $_POST['mediBankMonths'];
$healthCost = $_POST['healthCost'];
$visaFees = $_POST['visaFees'];
$totalAmountDue = $_POST['totalAmountDue'];
$instTwo = $_POST['instTwo'];
$instThree = $_POST['instThree'];
$instFour = $_POST['instFour'];
$quoteNotes = $_POST['quoteNotes'];
//
$estimateOne = $_POST['estimateOne'];
$yourself = $_POST['yourself'];
$partner = $_POST['partner'];
$firstChild = $_POST['firstChild'];
$eachOtherChild = $_POST['eachOtherChild'];
$totalCourseCostInfo = $_POST['totalCourseCostInfo'];
$childresStudyFees = $_POST['childresStudyFees'];
$ticketFees = $_POST['ticketFees'];
$totalFees = $_POST['grandSum'];
//
$estimateTwo = $_POST['estimateTwo'];
$yourself2 = $_POST['yourself2'];
$partner2 = $_POST['partner2'];
$firstChild2 = $_POST['firstChild2'];
$eachOtherChild2 = $_POST['eachOtherChild2'];
$totalCourseCostInfo2 = $_POST['totalCourseCostInfo2'];
$childresStudyFees2 = $_POST['childresStudyFees2'];
$ticketFees2 = $_POST['ticketFees2'];
$totalFees2 = $_POST['grandSum2'];
///
//var_dump($_POST);die('BUUUAAAAJAJAJAJ!!');
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
///
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
//$txt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
$txt = '...---... ';
// Multicell test
/*
$pdf->MultiCell(135, 3, "VETA Education Consultancy\nViva, Estudie y Trabaje en Australia\nABN: 40 124 827 425\nSuite 102, Level 1, 22 Market St\nSydney NSW 2000", 0, 'L', 1, 0, '', '', true);
$pdf->MultiCell(60, 3, "Invoice No.: ".$inv."\nInvoice Date: ".$date."\nTerm: Immediately",0, '', 0, 1, '', '', true);
$pdf->Ln(10);
$pdf->Cell(50,10,"");
$pdf->Ln(10);
$pdf->MultiCell(150, 3, "Customer:\n".$eduCentre."\n".$eduAddress, 0, 'L', 0, 2, '', '', true);
/*
$pdf->MultiCell(55, 3, '[CENTER] '.$txt, 1, 'C', 0, 0, '', '', true);
$pdf->MultiCell(55, 3, '[JUSTIFY] '.$txt."\n", 1, 'J', 1, 2, '' ,'', true);
*/

$pdf->Ln(10);

// set color for background
//$pdf->SetFillColor(220, 255, 220);
$pdf->SetFillColor(255, 255, 255);
//
//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 8);

// add a page
//$pdf->AddPage();

// create some HTML content
$html = '<table width="910"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="left" valign="top"><table width="910" border="0" cellpadding="2" cellspacing="0">
      <tr>
        <td width="207" align="left" valign="middle" class="tex"><strong>Student Name: </strong>' . $fullName . '</td>
        <td width="275" align="left" valign="middle" class="tex"><strong>Counsellor: </strong>' . $stCounsellor . '</td>
        <td width="202" rowspan="4" align="left" valign="top"><span style="color:#B1B1B1">Suite 102, Level 1, 22 Market St, <br />
          Sydney, NSW 2000<strong><br />
          T</strong> 02 9299 1458 - <strong>F</strong> 02 9299 9214<br />
          www.australiaveta.com.au<br />
          admissions@australiaveta.com.au</span></td>
        <td width="210" rowspan="4" align="center" valign="middle">' .
	$pdf->Image('images/looooo.jpg', 225, 5) . ' </td>
      </tr>
      <tr>
        <td align="left" valign="middle" class="tex"><strong>Student Email: </strong>' . $keyVal . '</td>
        <td align="left" valign="middle" class="tex"><strong>Counsellor Mobile: </strong>' . $stcMobile . '</td>
        </tr>
      <tr align="left" valign="middle">
        <td class="tex"><strong>Mobile Phone: </strong> ' . $mobilePhone . '</td>
        <td class="tex"><strong>Counsellor Email: </strong>' . $stcEmail . '</td>
        </tr>
      <tr align="left" valign="middle">
        <td class="tex"><strong>Visa Expiry Date: </strong>' . $visaExpDate . '</td>
        <td class="tex"><strong>Today\'s Date: </strong>' . $today . '</td>
        </tr>
    </table></td>
  </tr>

  <tr>
    <td colspan="2" align="left" valign="top"><table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" bgcolor="#CCCCCC"><table width="910" border="0" cellpadding="2" cellspacing="1">
          <tr style="line-height:5px;">
            <td align="center" valign="middle" bgcolor="#CC0000"><span style="color:#fff"><strong>QUOTATION</strong></span></td>
            <td colspan="4" align="left" valign="middle" bgcolor="#CC0000"><span style="color:#fff"><strong>' . $quoteTitle . '</strong></span></td>
            </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">College Name:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $college . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $college2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $college3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $college4 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Course:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseName . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseName2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseName3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseName4 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">New Course Start Date:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $newCourseStartDate . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $newCourseStartDate2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $newCourseStartDate3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $newCourseStartDate4 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Course End Date:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $newCourseEndDate . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $newCourseEndDate2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $newCourseEndDate3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $newCourseEndDate4 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Holidays in Weeks:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $holidaysDuration . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $holidaysDuration2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $holidaysDuration3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $holidaysDuration4 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Time Table:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseTimeTable . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseTimeTable2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseTimeTable3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseTimeTable4 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Cost per Week:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex"> ' . $weeklyCost . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $weeklyCost2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $weeklyCost3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $weeklyCost4 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Duration:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseDuration . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseDuration2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseDuration3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseDuration4 . '</td>
          </tr>
          <tr>
            <td align="right" valign="middle" bgcolor="#999999" class="tex-white"><strong><span style="color:#fff">Sub Total Course:</span></strong></td>
            <td align="center" valign="middle" bgcolor="#999999" class="tex"><strong><span style="color:#fff">' . $courseInstalment . '</span></strong></td>
            <td align="center" valign="middle" bgcolor="#999999" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#999999" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#999999" class="tex">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Enrolment Fee:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseEnrolmentFee . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseEnrolmentFee2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseEnrolmentFee3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $courseEnrolmentFee4 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Material Fee:</span></td>

            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $materialsCost . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $materialsCost2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $materialsCost3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $materialsCost4 . '</td>
          </tr>
          <tr class="tex-white">
            <td align="right" valign="middle" bgcolor="#999999"><strong><span style="color:#fff">Total Course fees: AU$</span></strong></td>
            <td align="center" valign="middle" bgcolor="#999999"><span style="color:#fff"><strong>' . $totalCourseFees . '</strong></span></td>
            <td align="center" valign="middle" bgcolor="#999999">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#999999">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#999999">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Instalment Fee:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $instalmentFee . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $instalmentFee2 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $instalmentFee3 . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $instalmentFee4 . '</td>
          </tr>
          <tr>
            <td align="right" valign="middle" bgcolor="#990000" class="tex-white"><span style="color:#fff"><strong>1st Instalment:</strong></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex"> <strong>' . $instOne . '</strong></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Deposit:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $deposit . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Bond:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">' . $bond . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Health Insurance: ' . $healthFund . ' ' . $mediBankMonths . ' Months</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex"> ' . $healthCost . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><span style="color:#fff">Visa Fees:</span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex"> ' . $visaFees . '</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF" class="tex">&nbsp;</td>
          </tr>
          <tr class="tex-white">
            <td align="right" valign="middle" bgcolor="#000000"><span style="color:#fff"><strong>Total Amount Due: AU$</strong></span></td>
            <td align="center" valign="middle" bgcolor="#000000"><span style="color:#fff"><strong> ' . $totalAmountDue . '</strong></span></td>
            <td align="center" valign="middle" bgcolor="#000000">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#000000">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#000000">&nbsp;</td>
          </tr>
          <tr class="tex-white">
            <td align="right" valign="middle" bgcolor="#990000"><span style="color:#fff"><strong>2st Instalment:</strong></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><strong>' . $instTwo . '</strong></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr class="tex-white">
            <td align="right" valign="middle" bgcolor="#990000"><span style="color:#fff"><strong>3st Instalment:</strong></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><strong>' . $instThree . '</strong></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr class="tex-white">
            <td align="right" valign="middle" bgcolor="#990000"><span style="color:#fff"><strong>4st Instalment:</strong></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><strong>' . $instFour . '</strong></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#CCCCCC"><table width="910" border="0" cellpadding="2" cellspacing="1">
          <tr style="line-height:5px;">
            <td colspan="4" align="center" valign="middle" bgcolor="#CC0000" class="tex-white"><span style="color:#fff"><strong>Financial requirements for your stay in Australia</strong></span></td>
            <td align="center" valign="middle" bgcolor="#CC0000" class="tex-white"><span style="color:#fff"><strong>NOTES</strong></span></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bgcolor="#CC0000" class="tex-white"><span style="color:#fff">Expenses</span></td>
            <td align="center" valign="middle" bgcolor="#CC0000" class="tex-white"><span style="color:#fff">Per Person</span></td>
            <td align="center" valign="middle" bgcolor="#CC0000" class="tex-white"><span style="color:#fff">' . $estimateOne . '</span></td>
            <td align="center" valign="middle" bgcolor="#CC0000" class="tex-white"><span style="color:#fff">' . $estimateTwo . '</span></td>
            <td rowspan="9" align="left" valign="top" bgcolor="#EBEBEB" class="tex-white">' . $quoteNotes . '</td>
          </tr>
          <tr>
            <td rowspan="4" align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><strong><span style="color:#fff">Living</span></strong></td>
            <td bgcolor="#FFFFFF" class="tex">Yourself (18.610 AUD /Year)</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $yourself . '</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $yourself2 . '</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" class="tex">Partner (6.300 AUD/Year)</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $partner . '</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $partner2 . '</td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF" class="tex">First Child (3.600 AUD/Year)</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $firstChild . '</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $firstChild2 . '</td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF" class="tex">Each Other Child (2.7000 AUD/Year)</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $eachOtherChild . '</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $eachOtherChild2 . '</td>
          </tr>
          <tr>
            <td rowspan="2" align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><strong><span style="color:#fff">Tuition</span></strong></td>
            <td bgcolor="#FFFFFF" class="tex">Study Fees </td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $totalCourseCostInfo . '</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $totalCourseCostInfo2 . '</td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF" class="tex">Children Study Fees</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $childresStudyFees . '</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $childresStudyFees2 . '</td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#1F497D" class="tex-white"><strong><span style="color:#fff">Travel Return Air fare</span></strong></td>
            <td bgcolor="#FFFFFF" class="tex">Ticket Fees</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $ticketFees . '</td>
            <td align="right" valign="middle" bgcolor="#FFFFFF" class="tex">' . $ticketFees2 . '</td>
          </tr>
          <tr>
            <td align="right" valign="middle" bgcolor="#999999" class="tex-white"><h4><strong><span style="color:#fff">Total Fees AU$</span></strong></h4></td>
            <td align="right" valign="middle" bgcolor="#999999"></td>
            <td align="right" valign="middle" bgcolor="#999999"><span style="color:#fff"><strong> ' . $totalFees . '</strong></span></td>
            <td align="right" valign="middle" bgcolor="#999999"><span style="color:#fff"><strong> ' . $totalFees2 . '</strong></span></td>
            </tr>
        </table></td>
      </tr>
      <tr style="line-height:5px;">
        <td align="center" valign="middle" bgcolor="#1F497D"><span class="tex-white" style="color:#fff"><em>Last Bank Statements immediately before the date of your visa application held by you,
          or a person supporting you,  showing  the closing balance of this amount</em></span></td>
      </tr>
    </table></td>
  </tr>
  </table>';

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
