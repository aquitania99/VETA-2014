<?php

/**
 * Created by JetBrains PhpStorm.
 * User: smedi_000
 * Date: 6/06/13
 * Time: 10:43 PM
 * To change this template use File | Settings | File Templates.
 */
class PayReceipt
{

	//$quoteNo;
	public $personID;
	//
	public $quoteType;
	//
	public $quoteTitle;
	//
	public $results;

	function searchQuote()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		//echo "<script type='text/javascript'>alert('inside the thingy...');</script>";
		$searchQuotes = 'SELECT * ';
		$searchQuotes .= 'FROM quotations ';
		$searchQuotes .= 'WHERE personID = \'' . $this->personID . '\' AND quoteType = \'English\' AND instalmentsNo != 0 ';
		$searchQuotes .= 'ORDER BY quoteNo';
		//
		//print_r($searchQuotes); echo "<br>";
		$rsSearchQry = $mysqli->query($searchQuotes);
		//
		$resultQuote = $rsSearchQry->fetch_array();
		//
		//echo "<script type='text/javascript'>alert('inside the thingy...');</script>";
		$searchDiplomas = 'SELECT * ';
		$searchDiplomas .= 'FROM quotations ';
		$searchDiplomas .= 'WHERE personID = \'' . $this->personID . '\' AND quoteType = \'Diploma\' AND instalmentsNo = 0 ';
		$searchDiplomas .= 'ORDER BY quoteNo';
		//
		//print_r($searchDiplomas);die;
		$rsSearchDp = $mysqli->query($searchDiplomas);
		//
		$resultQuoteDp = $rsSearchDp->fetch_array();
		//
		//var_dump($result);
		//var_export($resultQuote);die;
		$res = json_encode($resultQuote);
		$res .= json_encode($resultQuoteDp);
		//var_dump($res);die;
		$this->results = $res;
		return $this->results;

	}

	//

	function recordPayment()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		echo('Inside Create a Quote....<br>');
		//
		$estimateOne = $this->estimateOne;
		$yourself = $this->yourself;
		$partner = $this->partner;
		$firstChild = $this->firstChild;
		$eachOtherChild = $this->eachOtherChild;
		$totalCourseCostInfo = $this->totalCourseCostInfo;
		$childresStudyFees = $this->childresStudyFees;
		$ticketFees = $this->ticketFees;
		$grandSum = ($yourself + $partner + $firstChild + $eachOtherChild + $totalCourseCostInfo + $childresStudyFees + $ticketFees);
		//
		$estimateTwo = $this->estimateTwo;
		$yourself2 = $this->yourself2;
		$partner2 = $this->partner2;
		$firstChild2 = $this->firstChild2;
		$eachOtherChild2 = $this->eachOtherChild2;
		$totalCourseCostInfo2 = $this->totalCourseCostInfo2;
		$childresStudyFees2 = $this->childresStudyFees2;
		$ticketFees2 = $this->ticketFees2;
		$grandSum2 = ($yourself2 + $partner2 + $firstChild2 + $eachOtherChild2 + $totalCourseCostInfo2 + $childresStudyFees2 + $ticketFees2);
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
		//echo "Email.... ".$emailAfter."<br />";
		//
		$result = $emailAfter;
		if (isset($result)) {
			echo "<script type='text/javascript'>window.location='preview-quote.php?keyVal=" . $result . "&estimateOne=" . $estimateOne . "&yourself=" . $yourself . "&partner=" . $partner . "&firstChild=" . $firstChild . "&eachOtherChild=" . $eachOtherChild . "&totalCourseCostInfo=" . $totalCourseCostInfo . "&childresStudyFees=" . $childresStudyFees . "&ticketFees=" . $ticketFees . "&grandSum=" . $grandSum . "&estimateTwo=" . $estimateTwo . "&yourself2=" . $yourself2 . "&partner2=" . $partner2 . "&firstChild2=" . $firstChild2 . "&eachOtherChild2=" . $eachOtherChild2 . "&totalCourseCostInfo2=" . $totalCourseCostInfo2 . "&childresStudyFees2=" . $childresStudyFees2 . "&ticketFees2=" . $ticketFees2 . "&grandSum2=" . $grandSum2 . "';</script>";
		}

	}
}
