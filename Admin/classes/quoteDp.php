<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smedi_000
 * Date: 6/06/13
 * Time: 10:43 PM
 * To change this template use File | Settings | File Templates.
 */
require('classes/quote.php');

//
class QuoteDp extends Quote
{
	//
	public $linkedTo;
	public $diploma1;
	public $instal1;
	public $instal2;
	public $instal3;
	public $instal4;
	public $instal5;
	public $instal6;
	public $instal7;
	public $instal8;
	public $instal9;
	public $instal10;
	public $instal11;
	public $instal12;
	public $diploma2;
	public $instal13;
	public $instal14;
	public $instal15;
	public $instal16;
	public $instal17;
	public $instal18;
	public $instal19;
	public $instal20;
	public $instal21;
	public $instal22;
	public $instal23;
	public $instal24;
	//
	public $totalCourseFee;

	//
	function createQuote()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		$sql_query = 'INSERT INTO quotations (quoteNo, quoteType, quoteTitle, personID, courseName, college, collegeLocation, currentCourseEndDate, ';
		$sql_query .= 'newCourseStartDate, newCourseEndDate, courseDuration, instalmentsNo, courseTimeTable, weeklyCost, materialsCost, courseEnrolmentFee, ';
		$sql_query .= 'courseInstalment, deposit, bond, holidaysDuration, instalmentFee, totalCourseFees, instOne, courseName2, college2, collegeLocation2, newCourseStartDate2, ';
		$sql_query .= 'newCourseEndDate2, courseDuration2, courseTimeTable2, weeklyCost2, materialsCost2, courseEnrolmentFee2, courseInstalment2, ';
		$sql_query .= 'instalmentFee2, holidaysDuration2, instTwo, courseName3, college3, collegeLocation3, newCourseStartDate3, newCourseEndDate3, courseDuration3, ';
		$sql_query .= 'courseTimeTable3, weeklyCost3, materialsCost3, courseEnrolmentFee3, courseInstalment3, instalmentFee3, holidaysDuration3, instThree, ';
		$sql_query .= 'courseName4, college4, collegeLocation4, newCourseStartDate4, newCourseEndDate4, courseDuration4, courseTimeTable4, ';
		$sql_query .= 'weeklyCost4, materialsCost4, courseEnrolmentFee4, courseInstalment4, instalmentFee4, holidaysDuration4, instFour, healthFund, mediBankMonths, mediBankCost, healthCoverType, ';
		$sql_query .= 'visaFees, totalCost, quoteNotes, quoteCreated) ';
		$sql_query .= ' VALUES (\'\',\'' . $this->quoteType . '\', \'' . $this->quoteTitle . '\', \'' . $this->personID . '\', \'' . $this->courseName . '\', \'' . $this->college . '\', \'' . $this->collegeLocation . '\', \'' . $this->currentCourseEndDate . '\', ';
		$sql_query .= '\'' . $this->newCourseStartDate . '\', \'' . $this->newCourseEndDate . '\', \'' . $this->courseDuration . '\', \'' . $this->instalmentsNo . '\', \'' . $this->courseTimeTable . '\', \'' . $this->weeklyCost . '\', \'' . $this->materialsCost . '\', ';
		$sql_query .= '\'' . $this->courseEnrolmentFee . '\', \'' . $this->courseInstalment . '\', \'' . $this->deposit . '\', \'' . $this->bond . '\', \'' . $this->holidaysDuration . '\', \'' . $this->instalmentFee . '\', \'' . $this->totalCourseFees . '\', \'' . $this->instOne . '\', \'' . $this->courseName2 . '\', ';
		$sql_query .= '\'' . $this->college2 . '\', \'' . $this->collegeLocation2 . '\', \'' . $this->newCourseStartDate2 . '\', \'' . $this->newCourseEndDate2 . '\', \'' . $this->courseDuration2 . '\', ';
		$sql_query .= '\'' . $this->courseTimeTable2 . '\', \'' . $this->weeklyCost2 . '\', \'' . $this->materialsCost2 . '\', \'' . $this->courseEnrolmentFee2 . '\', \'' . $this->courseInstalment2 . '\', ';
		$sql_query .= '\'' . $this->instalmentFee2 . '\', \'' . $this->holidaysDuration2 . '\', \'' . $this->instTwo . '\', \'' . $this->courseName3 . '\', \'' . $this->college3 . '\', \'' . $this->collegeLocation3 . '\', \'' . $this->newCourseStartDate3 . '\', ';
		$sql_query .= '\'' . $this->newCourseEndDate3 . '\', \'' . $this->courseDuration3 . '\', \'' . $this->courseTimeTable3 . '\', \'' . $this->weeklyCost3 . '\', \'' . $this->materialsCost3 . '\', \'' . $this->courseEnrolmentFee3 . '\', \'' . $this->courseInstalment3 . '\', ';
		$sql_query .= '\'' . $this->instalmentFee3 . '\', \'' . $this->holidaysDuration3 . '\', \'' . $this->instThree . '\', \'' . $this->courseName4 . '\', \'' . $this->college4 . '\', \'' . $this->collegeLocation4 . '\', \'' . $this->newCourseStartDate4 . '\', \'' . $this->newCourseEndDate4 . '\', \'' . $this->courseDuration4 . '\', ';
		$sql_query .= '\'' . $this->courseTimeTable4 . '\', \'' . $this->weeklyCost4 . '\', \'' . $this->materialsCost4 . '\', \'' . $this->courseEnrolmentFee4 . '\', \'' . $this->courseInstalment4 . '\', \'' . $this->instalmentFee4 . '\', \'' . $this->holidaysDuration4 . '\', \'' . $this->instFour . '\', \'' . $this->healthFund . '\', \'' . $this->mediBankMonths . '\', ';
		$sql_query .= '\'' . $this->mediBankCost . '\', \'' . $this->healthCoverType . '\', \'' . $this->visaFees . '\', \'' . $this->totalCost . '\', \'' . $this->quoteNotes . '\', NOW())';
		//print_r($sql_query);exit;
		$insert = $mysqli->query($sql_query);
		//
		//
		$sql_AfterIns = 'SELECT MAX(quoteNo) as "MaxQuoteID"';
		$sql_AfterIns .= 'FROM quotations';
		$rsAfterIns = $mysqli->query($sql_AfterIns);
		//
		$row = $rsAfterIns->fetch_array();
		//
		//echo count($row);
		//
		$maxIDAfter = $row['MaxQuoteID'];
		//
		//$sql_AfterIns  = 'SELECT MAX(quoteNo) as "MaxQuoteID", personID as "ID" ';
		$sql_AfterIns = 'SELECT quoteNo, personID as "ID" ';
		$sql_AfterIns .= 'FROM quotations ';
		$sql_AfterIns .= ' ORDER BY quoteNo DESC LIMIT 1';
		//print_r($sql_AfterIns);exit;
		$rsAfterIns = $mysqli->query($sql_AfterIns);
		//
		$row = $rsAfterIns->fetch_assoc();
		$emailAfter = $row['ID'];
		$quoteId = $row['quoteNo'];
		//echo "Email.... ".$emailAfter."<br />";
		//
		$sql_query = 'INSERT INTO diplomaInstalments (dpInstalmentID, quoteNo, personID, linkedTo, diploma1, instal1, instal2, instal3, instal4, instal5, ';
		$sql_query .= 'instal6, instal7, instal8, instal9, instal10, instal11, instal12, diploma2, instal13, instal14, instal15, ';
		$sql_query .= 'instal16, instal17, instal18, instal19, instal20, instal21, instal22, instal23, instal24, totalCourseFee, dateAdded, addedBy) ';
		$sql_query .= ' VALUES (\'\',\'' . $quoteId . '\', \'' . $this->personID . '\', \'' . $this->linkedTo . '\', \'' . $this->diploma1 . '\', \'' . $this->instOne . '\', \'' . $this->instal2 . '\', \'' . $this->instal3 . '\', \'' . $this->instal4 . '\', ';
		$sql_query .= '\'' . $this->instal5 . '\', \'' . $this->instal6 . '\', \'' . $this->instal7 . '\', \'' . $this->instal8 . '\', \'' . $this->instal9 . '\', \'' . $this->instal10 . '\', \'' . $this->instal11 . '\', ';
		$sql_query .= '\'' . $this->instal12 . '\', \'' . $this->diploma2 . '\', \'' . $this->instal13 . '\', \'' . $this->instal14 . '\', \'' . $this->instal15 . '\', \'' . $this->instal16 . '\', \'' . $this->instal17 . '\', \'' . $this->instal18 . '\', \'' . $this->instal19 . '\', \'' . $this->instal20 . '\', \'' . $this->instal21 . '\', \'' . $this->instal22 . '\', \'' . $this->instal23 . '\', \'' . $this->instal24 . '\', \'' . $this->totalCourseFee . '\', NOW(), \'superadmin\')';
		//print_r($sql_query);die;
		$insert = $mysqli->query($sql_query);
		//
		//
		$result = $emailAfter;
		if (isset($result)) {
			echo "<script type='text/javascript'>window.location='preview-DpQuote.php?keyVal=" . $result . "&estimateOne=" . $estimateOne . "&yourself=" . $yourself . "&partner=" . $partner . "&firstChild=" . $firstChild . "&eachOtherChild=" . $eachOtherChild . "&totalCourseCostInfo=" . $totalCourseCostInfo . "&childresStudyFees=" . $childresStudyFees . "&ticketFees=" . $ticketFees . "&grandSum=" . $grandSum . "&estimateTwo=" . $estimateTwo . "&yourself2=" . $yourself2 . "&partner2=" . $partner2 . "&firstChild2=" . $firstChild2 . "&eachOtherChild2=" . $eachOtherChild2 . "&totalCourseCostInfo2=" . $totalCourseCostInfo2 . "&childresStudyFees2=" . $childresStudyFees2 . "&ticketFees2=" . $ticketFees2 . "&grandSum2=" . $grandSum2 . "';</script>";
		}

	}
}
