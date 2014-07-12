<?php
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
require('tcpdf/tcpdf.php');
//
$name = $_GET['name'];
$inv = $_GET['inv'];
$eduCentre = $_GET['eduCentre'];
$eduAddress = $_GET['eduAddress'];
$course = $_GET['course'];
$enrolDate = $_GET['intakeDate'];
//
$parts = explode("-", $enrolDate);
$year = $parts[0];
$month = $parts[1];
$day = $parts[2];
//
$intakeDate = $day . '/' . $month . '/' . $year;
$totalCost = $_GET['totalCost'];
$commRate = $_GET['commRate'];
$realPay = $_GET['realPay'];
$mainPay = $_GET['realPay'];
$GSTexc = $_GET['GSTexc'];
$GSTinc = $_GET['GSTinc'];
$paymentNo = $_GET['paymentNo'];
///
$incentive = $_GET['incentive'];
if ($incentive != '0.00') {
	$incent = $incentive;
	//echo "Incentive Value... ".$incent."<br />";
	$realPay = ($realPay + $incentive);
	//echo "New Real PAY... ".$realPay."<br />";
	///
	$GSTexc = $realPay * 10 / 100;
	//echo "New Value... ".$GSTexc."<br />";
	///
	$GSTinc = ($realPay + $GSTexc);
	//echo "Total New Value... ".$GSTinc."<br />";
}
///
date_default_timezone_set("Australia/Sydney");
$date = date('d/m/Y');
///
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
///
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Australia VETA');
$pdf->SetTitle('Invoice');
$pdf->SetSubject('Invoice ');
$pdf->SetKeywords('Australia VETA, Invoice System, PDF');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10, '', true);

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

$pdf->Ln(4);

// set color for background
//$pdf->SetFillColor(220, 255, 220);
$pdf->SetFillColor(255, 255, 255);
//
//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 10);

// add a page
//$pdf->AddPage();

// create some HTML content
$html = '<table width="710" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="470" align="left" valign="top">VETA Education Consultancy<br />
Viva, Estudie y Trabaje en Australia<br />
<strong>ABN: 40 124 827 425</strong><br />
Suite 102, Level 1, 22 Market St<br />
Sydney NSW 2000</td>
    <td align="right" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td bgcolor="#7030A0"><strong><span style="color:#fff">Invoice No.:</span></strong></td>
        <td align="right" bgcolor="#7030A0"><strong><span style="color:#fff">' . $inv . '</span></strong></td>
      </tr>
      <tr>
        <td bgcolor="#7030A0"><strong><span style="color:#fff">Invoice Date:</span></strong></td>
        <td align="right" bgcolor="#7030A0"><strong><span style="color:#fff">' . $date . '</span></strong></td>
      </tr>
      <tr>
        <td bgcolor="#7030A0"><strong><span style="color:#fff">Term:</span></strong></td>
        <td align="right" bgcolor="#7030A0"><strong><span style="color:#fff">Immediately</span></strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"><strong><br />
      <br />
      <br />
      Customer: <br />
' . $eduCentre . '</strong><br />
' . $eduAddress . '<br />
</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"><table width="710" border="0" cellspacing="0" cellpadding="5">
      <tr bgcolor="#1F497D">
        <td width="134" align="center" valign="middle"><strong><span style="color:#fff">Student</span></strong></td>
        <td width="120" align="center" valign="middle"><strong><span style="color:#fff">Course</span></strong></td>
        <td width="75" align="center" valign="middle"><strong><span style="color:#fff">Date Intake</span></strong></td>
        <td width="125" align="center" valign="middle"><strong><span style="color:#fff">Total Tuition Fees Payment</span></strong></td>
        <td width="90" align="center" valign="middle"><strong><span style="color:#fff">Commission Rate %</span></strong></td>
        <td width="116" align="center" valign="middle"><strong><span style="color:#fff">Total</span></strong></td>
      </tr>
      <tr>
        <td>' . $name . ' <br />
          ID:' . $studentNO . '</td>
        <td align="left">' . $course . '</td>
        <td align="center">' . $intakeDate . '</td>
        <td align="center">$' . $totalCost . '</td>
        <td align="center">' . $commRate . '%</td>
        <td align="right"><strong>$' . $mainPay . '</strong></td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
        <td align="right"><strong>Marketing Incentive</strong></td>
        <td align="right">$' . $incentive . '</td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
        <td align="right"><strong><em>Sub Total</em></strong></td>
        <td align="right"><strong>$' . $realPay . '</strong></td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
        <td align="right"><strong><em>GST Payable</em></strong></td>
        <td align="right"><strong>$' . $GSTexc . '</strong></td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
        <td align="right"><strong>Total Due</strong></td>
        <td align="right" bgcolor="#1F497D"><strong><span style="color:#fff">$' . $GSTinc . '</span></strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"><br /><br /><br />
      <b>Payment Details:</b><br />
Please make the deposit direct to our bank account<br />
<b>Bank Name: ANZ</b><br />
<b>Account Name: VETA Education Consultancy</b><br />
<b>Account Number: 205 041 076</b><br />
<b>BSB: 012 172</b><br />
OR Please make all cheques payable to <b>&quot;VETA Education Consultancy&quot;</b><br />
Suite 102, 22 Market Street, Sydney NSW 2000<br />
<br />
<span style="text-decoration: underline"><em>Please use Invoice number as reference in your EFT</em></span><br />
<br />
<b>If you have any questions and enquiries, please contact:</b><br />
Sarka Benesova<br />
<em>VETA Accounts</em><br />
Phone: 02 9299 1458<br />
Email: <a href="mailto:accounts@australiaveta.com.au" title="Australia VETA - Accounts">accounts@australiaveta.com.au</a><br /></td>
  </tr>
</table>';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('invoice-' . $inv . '-' . $date . '.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
