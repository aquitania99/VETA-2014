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
require('tcpdf/tcpdf.php');
///
date_default_timezone_set("Australia/Sydney");
$date = date('d/m/Y');
///
$today = $_POST['today'];
$fullName = $_POST['studentName'];
$profession = $_POST['profession'];
$email = $_POST['email'];
$mobilePhone = $_POST['mobilePhone'];
$visaExpDate = $_POST['expiryDate'];
$stCounsellor = $_POST['stCounsellor'];
///
//print_r($fullName);
///
//var_dump($_POST);exit;
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
$html = '';

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
