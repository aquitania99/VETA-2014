<?php

/**
 * Created by JetBrains PhpStorm.
 * User: smedi_000
 * Date: 6/06/13
 * Time: 10:43 PM
 * To change this template use File | Settings | File Templates.
 * @property mixed totalCourseFees
 * @property mixed courseInstalment
 */
class PaymentEntry
{

	//$quoteNo;
	protected $personID;
	protected $quoteType;
	protected $courseEntry;
	//
	protected $receiptNo;
	protected $paymentTitle;
	//
	protected $courseName;
	protected $college;
	//
	protected $receiptOne;
	protected $paymentFeesOne;
	//
	protected $newCourseStartDate;
	protected $newCourseEndDate;
	protected $courseDuration;
	//
	protected $instalmentsNo;
	//
	protected $courseTimeTable;
	protected $weeklyCost;
	protected $materialsCost;
	protected $courseEnrolmentFee;
	//
	protected $instOne; //Instalment One
	//
	protected $totalInstOne;
	//
	protected $dueDate;
	//
	protected $deposit;
	protected $bond;
	protected $totalAmountDue;
	protected $holidaysDuration;
	//
	protected $instalmentFee;
	//
	protected $receiptTwo;
	protected $paymentTitle2;
	protected $courseName2;
	protected $college2;
	//
	protected $newCourseStartDate2;
	protected $newCourseEndDate2;
	protected $courseDuration2;
	protected $courseTimeTable2;
	protected $weeklyCost2;
	protected $materialsCost2;
	protected $courseEnrolmentFee2;
	//
	protected $instalmentFee2;
	protected $holidaysDuration2;
	protected $instTwo; //Instalment Two
	protected $totalInstTwo;
	//
	protected $dueDate2;
	//
	protected $receiptThree;
	protected $paymentTitle3;
	protected $courseName3;
	protected $college3;
	//
	protected $newCourseStartDate3;
	protected $newCourseEndDate3;
	protected $courseDuration3;
	protected $courseTimeTable3;
	protected $weeklyCost3;
	protected $materialsCost3;
	protected $courseEnrolmentFee3;
	//
	protected $instalmentFee3;
	protected $holidaysDuration3;
	protected $instThree; //Instalment Three
	protected $totalInstThree;
	//
	protected $dueDate3;
	//
	protected $receiptFour;
	protected $paymentTitle4;
	protected $courseName4;
	protected $college4;
	//
	protected $newCourseStartDate4;
	protected $newCourseEndDate4;
	protected $courseDuration4;
	protected $courseTimeTable4;
	protected $weeklyCost4;
	protected $materialsCost4;
	protected $courseEnrolmentFee4;
	//
	protected $instalmentFee4;
	protected $holidaysDuration4;
	protected $instFour; //Instalment Four
	protected $totalInstFour;
	//
	protected $dueDate4;
	//
	protected $healthFund;
	protected $healthCoverMonths;
	protected $healthCost;
	protected $healthCoverType;
	protected $visaFees;
	protected $medicalExams;
	protected $result;
	//
	protected $totalCost;
	//
	protected $totalStudyWeeks;
	protected $totalStudyDuration;
	protected $totalInstalmentsVal;
	protected $totalCoursesFee;
	protected $quoteNotes;
	//
	public $results;

	function __construct() {
//		print "In BaseClass constructor\n";
		if (!empty($_POST['eaddress'])) {
		$this->personID  = $_POST['eaddress'];
		}
		//////////////////////////////////
		if(!empty($_POST['quoteType'])) {
		$this->quoteType  = $_POST['quoteType'];
		}
		//
		if(!empty($_POST['receiptOne'])) {
		$this->receiptOne  = $_POST['receiptOne'];
		}
		if(!empty($_POST['paymentTitle'])) {
		$this->paymentTitle  = $_POST['paymentTitle'];
		}
		//
		if(!empty($_POST['courseName'])) {
		$this->courseName  = $_POST['courseName'];
		}
		if(!empty($_POST['college'])) {
		$this->college  = $_POST['college'];
		}
		//
		if (empty($_POST['newCourseStartDate'])) {
			$this->newCourseStartDate ='0000-00-00';
		} else {
			$explodeCourseStart = explode('-', $_POST['newCourseStartDate']);
			//
			$day = $explodeCourseStart[0];
			$month = $explodeCourseStart[1];
			$year = $explodeCourseStart[2];
			$this->newCourseStartDate = $year . '-' . $month . '-' . $day; //$_POST['newCourseStartDate'];
		}

		//
		if (empty($_POST['newCourseEndDate'])) {
			$this->newCourseEndDate ='0000-00-00';
		} else {
			$explodeCourseEnd = explode('-', $_POST['newCourseEndDate']);
			//
			$day = $explodeCourseEnd[0];
			$month = $explodeCourseEnd[1];
			$year = $explodeCourseEnd[2];
			$this->newCourseEndDate =$year . '-' . $month . '-' . $day; //$_POST['newCourseEndDate'];
		}
		if(!empty($_POST['courseDuration'])) {
		$this->courseDuration = $_POST['courseDuration'];
		}
		if(!empty($_POST['courseTimeTable'])) {
		$this->courseTimeTable = $_POST['courseTimeTable'];
		}
		//
		if(!empty($_POST['holidaysDuration'])) {
		$this->holidaysDuration = $_POST['holidaysDuration'];
		}
		//
		if(!empty($_POST['weeklyCost'])){
		$this->weeklyCost = $_POST['weeklyCost'];
		}
		//
		if(!empty($_POST['instalmentsNo'])) {
		$this->instalmentsNo = $_POST['instalmentsNo'];
		}
		if(!empty($_POST['totalCourseFees'])) {
		$this->totalCourseFees = $_POST['totalCourseFees'];
		}
		//
		if (empty($_POST['materialsCost'])) {
			$this->materialsCost ='0.00';
		} else {
			$this->materialsCost = $_POST['materialsCost'];
		}
		//
		if (empty($_POST['courseEnrolmentFee'])) {
			$this->courseEnrolmentFee ='0.00';
		} else {
			$this->courseEnrolmentFee = $_POST['courseEnrolmentFee'];
		}
		//
		if (empty($_POST['courseInstalment'])) {
			$this->courseInstalment ='0.00';
		} else {
			$this->courseInstalment = $_POST['courseInstalment'];
		}
		//
		if (empty($_POST['deposit'])) {
			$this->deposit ='0';
		} else {
			$this->deposit = $_POST['deposit'];
		}
		//
		if (empty($_POST['bond'])) {
			$this->bond ='0.00';
		} else {
			$this->bond = $_POST['bond'];
		}
		//
		if (empty($_POST['instalmentFee'])) {
			$this->instalmentFee ='0.00';
		} else {
			$this->instalmentFee = $_POST['instalmentFee'];
		}
		//
		if(!empty($_POST['instOne'])) {
		$this->instOne = $_POST['instOne'];
		}
		if(!empty($_POST['totalInstOne'])) {
		$this->totalInstOne = $_POST['totalInstOne'];
		}
		//
		if (empty($_POST['totalAmountDue'])) {
			$this->totalAmountDue ='0';
		} else {
			$this->totalAmountDue = $_POST['totalAmountDue'];
		}
		//
		if (empty($_POST['dueDate1'])) {
			$_POST['dueDate1'] ='0000-00-00';
			$this->dueDate = $_POST['dueDate1'];
		} else {
			$explodeDueDate = explode('-', $_POST['dueDate1']);
			//
			$day = $explodeDueDate[0];
			$month = $explodeDueDate[1];
			$year = $explodeDueDate[2];
			$this->dueDate =$year . '-' . $month . '-' . $day;
		}
		if(!empty($_POST['instalmentsNo'])) {
		$this->instalmentsNo = $_POST['instalmentsNo'];
		}
		if(!empty($_POST['healthFund'])) {
		$this->healthFund = $_POST['healthFund'];
		}
		if(!empty($_POST['healthCoverMonths'])) {
		$this->healthCoverMonths = $_POST['healthCoverMonths'];
		}
		//
		if (empty($_POST['healthCost'])) {
			$this->healthCost ='0.00';
		} else {
			$this->healthCost = $_POST['healthCost'];
		}
		//
		if (empty($_POST['healthCoverType'])) {
			$this->healthCoverType ='0.00';
		} else {
			$this->healthCoverType = $_POST['healthCoverType'];
		}
		//
		if (empty($_POST['visaFees'])) {
			$this->visaFees ='0.00';
		} else {
			$this->visaFees = $_POST['visaFees'];
		}
		//
		if(!empty($_POST['medicalExams'])) {
		$this->medicalExams = $_POST['medicalExams'];
		}
		if(!empty($_POST['totalCourseCost'])) {
		$this->totalCost = $_POST['totalCourseCost'];
		}
		if(!empty($_POST['quoteNotes'])) {
		$this->quoteNotes = $_POST['quoteNotes'];
		}
		//
		if(!empty($_POST['totalStudyWeeks'])) {
		$this->totalStudyWeeks = $_POST['totalStudyWeeks'];
		}
		if(!empty($_POST['courseDuration'])) {
		$this->totalStudyDuration = $_POST['courseDuration'];
		}
		if (!empty($_POST['totalInstalmentsVal'])) {
		$this->totalInstalmentsVal  = $_POST['totalInstalmentsVal'];
		}
		if(!empty($_POST['totalCoursesFee'])) {
		$this->totalCoursesFee = $_POST['totalCoursesFee'];
		}
		//// ENGLISH FIELDS - BEGIN ////
		//** Instalment 1 */
		if(!empty($_POST['receiptOne'])) {
		$this->receiptOne = $_POST['receiptOne'];
		}
		//** Instalment 2 */
		if(!empty($_POST['receiptTwo'])) {
			$this->receiptTwo = $_POST['receiptTwo'];
		}
		if(!empty($_POST['courseName2'])) {
		$this->courseName2 = $_POST['courseName2'];
		}
		if(!empty($_POST['college2'])) {
		$this->college2 = $_POST['college2'];
		} else $this->college2 = 0;
		if (!empty($_POST['newCourseStartDate2'])) {
			$explodeCourseStart2 = explode('-', $_POST['newCourseStartDate2']);
			//
			$day2 = $explodeCourseStart2[0];
			$month2 = $explodeCourseStart2[1];
			$year2 = $explodeCourseStart2[2];
			$this->newCourseStartDate2 = $year2 . '-' . $month2 . '-' . $day2;
		} else $this->newCourseStartDate2 = '0000-00-00';
		//
		if (!empty($_POST['newCourseEndDate2'])) {
			$explodeCourseEnd2 = explode('-', $_POST['newCourseEndDate2']);
			//
			$day2 = $explodeCourseEnd2[0];
			$month2 = $explodeCourseEnd2[1];
			$year2 = $explodeCourseEnd2[2];
			$this->newCourseEndDate2 = $year2 . '-' . $month2 . '-' . $day2;
		} else $this->newCourseEndDate2 = '0000-00-00';
		//
		$this->courseDuration2 = $_POST['courseDuration2'];
		$this->courseTimeTable2 = $_POST['courseTimeTable2'];
		//
		$this->holidaysDuration2 = $_POST['holidaysDuration2'];
		//
		if (empty($_POST['weeklyCost2'])) {
			$_POST['weeklyCost2'] = '0.00';
		}
		$this->weeklyCost2 = $_POST['weeklyCost2'];
		if (empty($_POST['materialsCost2'])) {
			$_POST['materialsCost2'] = '0.00';
		}
		$this->materialsCost2 = $_POST['materialsCost2'];
		if (empty($_POST['courseEnrolmentFee2'])) {
			$_POST['courseEnrolmentFee2'] = '0.00';
		}
		$this->courseEnrolmentFee2 = $_POST['courseEnrolmentFee2'];
		if (empty($_POST['instalmentFee2'])) {
			$_POST['instalmentFee2'] = '0.00';
		}
		$this->instalmentFee2 = $_POST['instalmentFee2'];

		if (empty($_POST['instTwo'])) {
			$_POST['instTwo'] = '0.00';
		}
		$this->instTwo = $_POST['instTwo'];

		//
		if (empty($_POST['dueDate2'])) {
			$_POST['dueDate2'] ='0000-00-00';
			$this->dueDate2 = $_POST['dueDate2'];
		} else {
			$explodeDueDate = explode('-', $_POST['dueDate2']);
			//
			$day = $explodeDueDate[0];
			$month = $explodeDueDate[1];
			$year = $explodeDueDate[2];
			$this->dueDate2 =$year . '-' . $month . '-' . $day;
		}

		if (empty($_POST['totalInstTwo'])) {
			$_POST['totalInstTwo'] = '0.00';
		}
		$this->totalInstTwo = $_POST['totalInstTwo'];
		////
		//** Instalment 3 */
		if(!empty($_POST['receiptThree'])) {
			$this->receiptThree = $_POST['receiptThree'];
		}
		if(!empty($_POST['courseName3'])) {
			$this->courseName3 = $_POST['courseName3'];
		}
		if(!empty($_POST['college3'])) {
			$this->college3 = $_POST['college3'];
		} else $this->college3 = 0;
		if(!empty($_POST['newCourseStartDate3'])) {
			$explodeCourseStart3 = explode('-', $_POST['newCourseStartDate3']);
			//
			$day3 = $explodeCourseStart3[0];
			$month3 = $explodeCourseStart3[1];
			$year3 = $explodeCourseStart3[2];
			$this->newCourseStartDate3 = $year3 . '-' . $month3 . '-' . $day3;
		} else $this->newCourseStartDate3 = '0000-00-00';
		//
		if (!empty($_POST['newCourseEndDate3'])) {
			$explodeCourseEnd3 = explode('-', $_POST['newCourseEndDate3']);
			//
			$day3 = $explodeCourseEnd3[0];
			$month3 = $explodeCourseEnd3[1];
			$year3 = $explodeCourseEnd3[2];
			$this->newCourseEndDate3 = $year3 . '-' . $month3 . '-' . $day3;
		} else $this->newCourseEndDate3 = '0000-00-00';
		//
		$this->courseDuration3 = $_POST['courseDuration3'];
		$this->courseTimeTable3 = $_POST['courseTimeTable3'];
		//
		$this->holidaysDuration3 = $_POST['holidaysDuration3'];
		//
		if (empty($_POST['weeklyCost3'])) {
			$_POST['weeklyCost3'] = '0.00';
		}
		$this->weeklyCost3 = $_POST['weeklyCost3'];
		if (empty($_POST['materialsCost3'])) {
			$_POST['materialsCost3'] = '0.00';
		}
		$this->materialsCost3 = $_POST['materialsCost3'];
		if (empty($_POST['courseEnrolmentFee3'])) {
			$_POST['courseEnrolmentFee3'] = '0.00';
		}
		$this->courseEnrolmentFee3 = $_POST['courseEnrolmentFee3'];
		if (empty($_POST['instalmentFee3'])) {
			$_POST['instalmentFee3'] = '0.00';
		}
		$this->instalmentFee3 = $_POST['instalmentFee3'];

		if (empty($_POST['instThree'])) {
			$_POST['instThree'] = '0.00';
		}
		$this->instThree = $_POST['instThree'];

		if (empty($_POST['totalInstThree'])) {
			$_POST['totalInstThree'] = '0.00';
		}

		//
		if (empty($_POST['dueDate3'])) {
			$_POST['dueDate3'] ='0000-00-00';
			$this->dueDate3 = $_POST['dueDate3'];
		} else {
			$explodeDueDate = explode('-', $_POST['dueDate3']);
			//
			$day = $explodeDueDate[0];
			$month = $explodeDueDate[1];
			$year = $explodeDueDate[2];
			$this->dueDate3 =$year . '-' . $month . '-' . $day;
		}

		$this->totalInstThree = $_POST['totalInstThree'];
		////
		//** Instalment 4 */
		if(!empty($_POST['receiptFour'])) {
			$this->receiptFour = $_POST['receiptFour'];
		}
		if(!empty($_POST['courseName4'])) {
			$this->courseName4 = $_POST['courseName4'];
		}
		if(!empty($_POST['college4'])) {
			$this->college4 = $_POST['college4'];
		} else $this->college4 = 0;
		if (!empty($_POST['newCourseStartDate4'])) {
			$explodeCourseStart4 = explode('-', $_POST['newCourseStartDate4']);
			//
			$day4 = $explodeCourseStart4[0];
			$month4 = $explodeCourseStart4[1];
			$year4 = $explodeCourseStart4[2];
			$this->newCourseStartDate4 = $year4 . '-' . $month4 . '-' . $day4;
		} else $this->newCourseStartDate4 = '0000-00-00';
		//
		if (!empty($_POST['newCourseEndDate4'])) {
			$explodeCourseEnd4 = explode('-', $_POST['newCourseEndDate4']);
			//
			$day4 = $explodeCourseEnd4[0];
			$month4 = $explodeCourseEnd4[1];
			$year4 = $explodeCourseEnd4[2];
			$this->newCourseEndDate4 = $year4 . '-' . $month4 . '-' . $day4;
		} else $this->newCourseEndDate4 ='0000-00-00';
		//
		$this->courseDuration4 = $_POST['courseDuration4'];
		$this->courseTimeTable4 = $_POST['courseTimeTable4'];
		//
		$this->holidaysDuration4 = $_POST['holidaysDuration4'];
		//
		if (empty($_POST['weeklyCost4'])) {
			$_POST['weeklyCost4'] = '0.00';
		}
		$this->weeklyCost4 = $_POST['weeklyCost4'];
		if (empty($_POST['materialsCost4'])) {
			$_POST['materialsCost4'] = '0.00';
		}
		$this->materialsCost4 = $_POST['materialsCost4'];
		if (empty($_POST['courseEnrolmentFee4'])) {
			$_POST['courseEnrolmentFee4'] = '0.00';
		}
		$this->courseEnrolmentFee4 = $_POST['courseEnrolmentFee4'];
		if (empty($_POST['instalmentFee4'])) {
			$_POST['instalmentFee4'] = '0.00';
		}
		$this->instalmentFee4 = $_POST['instalmentFee4'];

		if (empty($_POST['instFour'])) {
			$_POST['instFour'] = '0.00';
		}
		$this->instFour = $_POST['instFour'];

		if (empty($_POST['totalInstFour'])) {
			$_POST['totalInstFour'] = '0.00';
		}

		//
		if (empty($_POST['dueDate4'])) {
			$_POST['dueDate4'] ='0000-00-00';
			$this->dueDate4 = $_POST['dueDate4'];
		} else {
			$explodeDueDate = explode('-', $_POST['dueDate4']);
			//
			$day = $explodeDueDate[0];
			$month = $explodeDueDate[1];
			$year = $explodeDueDate[2];
			$this->dueDate4 =$year . '-' . $month . '-' . $day;
		}
		$this->totalInstFour = $_POST['totalInstFour'];
		//

		//// ENGLISH FIELDS - END ////
	}

	//function searchQuote($courseEntry, $quoteType, $pID){
	/**
	 * @param $courseEntry
	 * @param $person_ID
	 * @param $pID
	 */
	function searchCourse($courseEntry, $person_ID, $pID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		//echo $quoteType."<br>".$courseEntry."<br>";
		//var_dump($this->courseEntry);
		switch ($courseEntry) {
			case '1':
				$searchAfterIns = 'SELECT * ';
				$searchAfterIns .= 'FROM payments_preview ';
				$searchAfterIns .= 'WHERE personID = \'' . $person_ID . '\' ';
				$searchAfterIns .= 'AND prevID = \'' . $pID . '\' ';
				$searchAfterIns .= 'AND receiptOne = 1 ';
				$searchAfterIns .= 'ORDER BY quoteCreated DESC LIMIT 1';

				break;

			case '2':
				$searchAfterIns = 'SELECT prevID, personID, quoteType, receiptTwo, paymentTitle2, courseName2, college2, newCourseStartDate2, newCourseEndDate2, holidaysDuration2, courseTimeTable2, weeklyCost2, courseDuration2, courseEnrolmentFee2, materialsCost2, instalmentFee2, instTwo, totalInstTwo, dueDate2 ';
				$searchAfterIns .= 'FROM payments_preview ';
				$searchAfterIns .= 'WHERE personID = \'' . $person_ID . '\' ';
				$searchAfterIns .= 'AND prevID = \'' . $pID . '\' ';
				$searchAfterIns .= 'AND receiptTwo = 2 ';
				$searchAfterIns .= 'ORDER BY quoteCreated DESC LIMIT 1';

				break;

			case '3':
				$searchAfterIns = 'SELECT prevID, personID, quoteType, receiptThree, paymentTitle3, courseName3, college3, newCourseStartDate3, newCourseEndDate3, holidaysDuration3, courseTimeTable3, weeklyCost3, courseDuration3, courseEnrolmentFee3, materialsCost3, instalmentFee3, instThree, totalInstThree, dueDate3 ';
				$searchAfterIns .= 'FROM payments_preview ';
				$searchAfterIns .= 'WHERE personID = \'' . $person_ID . '\' ';
				$searchAfterIns .= 'AND prevID = \'' . $pID . '\' ';
				$searchAfterIns .= 'AND receiptThree = 3 ';
				$searchAfterIns .= 'ORDER BY quoteCreated DESC LIMIT 1';

				break;

			case '4':
				$searchAfterIns = 'SELECT prevID, personID, quoteType, receiptFour, paymentTitle4, courseName4, college4, newCourseStartDate4, newCourseEndDate4, holidaysDuration4, courseTimeTable4, weeklyCost4, courseDuration4, courseEnrolmentFee4, materialsCost4, instalmentFee4, instFour, totalInstFour, dueDate4 ';
				$searchAfterIns .= 'FROM payments_preview ';
				$searchAfterIns .= 'WHERE personID = \'' . $person_ID . '\' ';
				$searchAfterIns .= 'AND prevID = \'' . $pID . '\' ';
				$searchAfterIns .= 'AND receiptFour= 4 ';
				$searchAfterIns .= 'ORDER BY quoteCreated DESC LIMIT 1';

				break;

			default:
				$searchAfterIns = 'SELECT * ';
				$searchAfterIns .= 'FROM payments_preview ';
				$searchAfterIns .= 'WHERE personID = \'' . $person_ID . '\' ';
				$searchAfterIns .= 'ORDER BY quoteCreated DESC LIMIT 1';

				break;
		}

		$rsSearchQry = $mysqli->query($searchAfterIns);
		//
		$result = $rsSearchQry->fetch_array();
		$this->results = json_encode($result);

		return;

	}

	//
	/**
	 * @param $email
	 * @param $instNo
	 * @param $pID
	 */
	function searchDiploma($email, $instNo, $pID)
	{

//		var_dump($email, $instNo, $pID, 'Parameters Passed...');
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		if (!empty($instNo) && $instNo == 1) {

			$searchPrevDp = 'SELECT * ';
			$searchPrevDp .= 'FROM payments_preview_dp ';
			$searchPrevDp .= 'WHERE personID = \'' . $email . '\' ';
			$searchPrevDp .= 'AND prevID = \'' . $pID . '\' ';
			$searchPrevDp .= 'AND quoteType = \'diploma\' ';
			$searchPrevDp .= 'ORDER BY quoteCreated DESC LIMIT 1';
//			var_dump($searchPrevDp);
			$rsSearchQry = $mysqli->query($searchPrevDp);
			$result = $rsSearchQry->fetch_array();

		}
		//
		if (!empty($instNo) && $instNo > 1) {

			$searchPrevDp = 'SELECT p.firstName, p.lastName, p.auvisaexpdate as visaExpDate, ppd.quoteType, ppd.paymentTitle, ppd.courseName, ppd.college, ppd.newCourseStartDate, ppd.courseTimeTable, ';
			$searchPrevDp .= 'ppd.holidaysDuration, ppd.courseDuration, ppd.newCourseEndDate, ppd.week_term_Cost, ';
			$searchPrevDp .= 'did.instal' . $instNo . ' as instalment, did.dueDate' . $instNo . ' as dueDate, did.materials' . $instNo . ' as materialsCost  ';
			$searchPrevDp .= 'FROM payments_preview_dp ppd ';
			$searchPrevDp .= 'JOIN dp_inst_details did ON ppd.prevID = did.prevID ';
			$searchPrevDp .= 'JOIN persons p ON p.emailAddress = ppd.personID ';
			$searchPrevDp .= 'WHERE ppd.personID = \'' . $email . '\' ';
			$searchPrevDp .= 'AND ppd.prevID = \'' . $pID . '\' ';
			$searchPrevDp .= 'AND ppd.quoteType = \'diploma\' ';
			$searchPrevDp .= 'ORDER BY quoteCreated DESC LIMIT 1';
			$rsSearchQry = $mysqli->query($searchPrevDp);
			$result = $rsSearchQry->fetch_array();

		}

		$this->results = json_encode($result);
//		var_dump($this->results);
		return;
	}

	/**
	 * @param $quoteType
	 */
	function createPaymentEntry($quoteType)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();

		if ($quoteType == 'english') {
			$receiptOne = 1;
			$receiptTwo = 2;
			$receiptThree = 3;
			$receiptFour = 4;
			$notes = $mysqli->real_escape_string($this->quoteNotes);
			//
			$sql_query = 'INSERT INTO 	payments_preview (personID, quoteType, receiptOne, paymentTitle, courseName, college, newCourseStartDate,
									newCourseEndDate, holidaysDuration, courseTimeTable, weeklyCost, courseDuration,
									instalmentsNo, courseEnrolmentFee, materialsCost, instalmentFee, instOne, totalInstOne, dueDate, 
									healthFund, healthCost, healthCoverMonths, healthCoverType, visaFees, deposit, bond,
									totalAmountDue, quoteNotes, receiptTwo, paymentTitle2, courseName2, college2,
									newCourseStartDate2, newCourseEndDate2, holidaysDuration2, courseTimeTable2, weeklyCost2,
									courseDuration2, courseEnrolmentFee2, materialsCost2, instalmentFee2, instTwo, totalInstTwo, dueDate2, 
									receiptThree, paymentTitle3, courseName3, college3, newCourseStartDate3, newCourseEndDate3,
									holidaysDuration3, courseTimeTable3, weeklyCost3, courseDuration3, courseEnrolmentFee3,
									materialsCost3, instalmentFee3, instThree, totalInstThree, dueDate3, receiptFour, paymentTitle4,
									courseName4, college4, newCourseStartDate4, newCourseEndDate4, holidaysDuration4,
									courseTimeTable4, weeklyCost4, courseDuration4, courseEnrolmentFee4, materialsCost4,
									instalmentFee4, instFour, totalInstFour, dueDate4, totalStudyWeeks, totalInstalmentsVal, totalCoursesFee,
									quoteCreated) ';
			$sql_query .= ' VALUES (\'' . $this->personID . '\', \'' . $this->quoteType . '\', \'' . $receiptOne . '\', \'' . $this->paymentTitle . '\', \'' . $this->courseName . '\', \'' . $this->college . '\', ';
			$sql_query .= '\'' . $this->newCourseStartDate . '\', \'' . $this->newCourseEndDate . '\', \'' . $this->holidaysDuration . '\', \'' . $this->courseTimeTable . '\', \'' . $this->weeklyCost . '\', \'' . $this->courseDuration . '\', ';
			$sql_query .= '\'' . $this->instalmentsNo . '\', \'' . $this->courseEnrolmentFee . '\', \'' . $this->materialsCost . '\', \'' . $this->instalmentFee . '\', \'' . $this->instOne . '\',  \'' . $this->totalInstOne . '\', \'' . $this->dueDate . '\',  ';
			$sql_query .= '\'' . $this->healthFund . '\', \'' . $this->healthCost . '\', \'' . $this->healthCoverMonths . '\', \'' . $this->healthCoverType . '\', \'' . $this->visaFees . '\',  \'' . $this->deposit . '\', \'' . $this->bond . '\', ';
			$sql_query .= '\'' . $this->totalAmountDue . '\', \'' . $notes . '\', \'' . $receiptTwo . '\', \'' . $this->paymentTitle2 . '\', \'' . $this->courseName2 . '\', \'' . $this->college2 . '\', ';
			$sql_query .= '\'' . $this->newCourseStartDate2 . '\', \'' . $this->newCourseEndDate2 . '\', \'' . $this->holidaysDuration2 . '\', \'' . $this->courseTimeTable2 . '\', \'' . $this->weeklyCost2 . '\', ';
			$sql_query .= '\'' . $this->courseDuration2 . '\', \'' . $this->courseEnrolmentFee2 . '\', \'' . $this->materialsCost2 . '\', \'' . $this->instalmentFee2 . '\', \'' . $this->instTwo . '\', \'' . $this->totalInstTwo . '\', \'' . $this->dueDate2 . '\',   ';
			$sql_query .= '\'' . $receiptThree . '\', \'' . $this->paymentTitle3 . '\', \'' . $this->courseName3 . '\', \'' . $this->college3 . '\', \'' . $this->newCourseStartDate3 . '\', \'' . $this->newCourseEndDate3 . '\', ';
			$sql_query .= '\'' . $this->holidaysDuration3 . '\', \'' . $this->courseTimeTable3 . '\', \'' . $this->weeklyCost3 . '\', \'' . $this->courseDuration3 . '\', \'' . $this->courseEnrolmentFee3 . '\', ';
			$sql_query .= '\'' . $this->materialsCost3 . '\', \'' . $this->instalmentFee3 . '\', \'' . $this->instThree . '\', \'' . $this->totalInstThree . '\',  \'' . $this->dueDate3 . '\',  \'' . $receiptFour . '\', \'' . $this->paymentTitle4 . '\', ';
			$sql_query .= '\'' . $this->courseName4 . '\', \'' . $this->college4 . '\', \'' . $this->newCourseStartDate4 . '\', \'' . $this->newCourseEndDate4 . '\', \'' . $this->holidaysDuration4 . '\', ';
			$sql_query .= '\'' . $this->courseTimeTable4 . '\', \'' . $this->weeklyCost4 . '\', \'' . $this->courseDuration4 . '\', \'' . $this->courseEnrolmentFee4 . '\', \'' . $this->materialsCost4 . '\', ';
			$sql_query .= '\'' . $this->instalmentFee4 . '\', \'' . $this->instFour . '\', \'' . $this->totalInstFour . '\',  \'' . $this->dueDate4 . '\',  \'' . $this->totalStudyWeeks . '\', \'' . $this->totalInstalmentsVal . '\', \'' . $this->totalCoursesFee . '\', NOW())';
			$mysqli->query($sql_query);
			$affected = $mysqli->affected_rows;
			//
			if (!empty($mysqli->affected_rows)) {
			echo "<script type='text/javascript'>window.location='find-person.php?check=" . $this->personID . "';</script>";
			}
		}

		if ($quoteType == 'Diploma') {
			$quoteType = 'diploma';
			$notes = $mysqli->real_escape_string($this->quoteNotes);
			//
			$sql_query = 'INSERT INTO payments_preview_dp (personID, quoteType, paymentTitle, courseName, college, newCourseStartDate,
                                    newCourseEndDate, holidaysDuration, courseTimeTable, week_term_Cost, courseDuration,
                                    instalmentsNo, courseEnrolmentFee, materialsCost, instalmentFee, instalment, totalInstalment, dueDate,
                                    healthFund, healthCost, healthCoverMonths, healthCoverType, visaFees, deposit, bond,
                                    totalAmountDue, quoteNotes, totalStudyDuration, totalInstalmentsVal, totalCoursesFee, quoteCreated)';
			$sql_query .= ' VALUES (\'' . $this->personID . '\', \'' . $quoteType . '\', \'' . $this->paymentTitle . '\', \'' . $this->courseName . '\', \'' . $this->college . '\', ';
			$sql_query .= '\'' . $this->newCourseStartDate . '\', \'' . $this->newCourseEndDate . '\', \'' . $this->holidaysDuration . '\', \'' . $this->courseTimeTable . '\', \'' . $this->weeklyCost . '\', \'' . $this->courseDuration . '\', ';
			$sql_query .= '\'' . $this->instalmentsNo . '\', \'' . $this->courseEnrolmentFee . '\', \'' . $this->materialsCost . '\', \'' . $this->instalmentFee . '\', \'' . $this->instOne . '\',  \'' . $this->totalInstOne . '\',  \'' . $this->dueDate . '\', ';
			$sql_query .= '\'' . $this->healthFund . '\', \'' . $this->healthCost . '\', \'' . $this->healthCoverMonths . '\', \'' . $this->healthCoverType . '\', \'' . $this->visaFees . '\',  \'' . $this->deposit . '\', \'' . $this->bond . '\', ';
			$sql_query .= '\'' . $this->totalAmountDue . '\', \'' . $notes . '\', \'' . $this->totalStudyDuration . '\', \'' . $this->totalInstalmentsVal . '\', \'' . $this->totalCoursesFee . '\', NOW())';
			$mysqli->query($sql_query);
			$affected = $mysqli->affected_rows;
			// print_r($affected,'<br>');
			if ($affected === 1) {
				$sql_query = 'SELECT max(prevID) FROM payments_preview_dp WHERE personID =\'' . $this->personID . '\'';
				$select = $mysqli->query($sql_query);
				//
				$row = $select->fetch_array();
				$prevID = $row[0];
				//

				$sql_query = 'INSERT INTO dp_inst_details (prevID, emailAddress, instal2, materials2, dueDate2, ';
				$sql_query .= 'instal3, materials3, dueDate3, instal4, materials4, dueDate4, instal5, materials5, dueDate5, instal6, materials6, dueDate6, ';
				$sql_query .= 'instal7, materials7, dueDate7, instal8, materials8, dueDate8, instal9, materials9, dueDate9, instal10, materials10, dueDate10, ';
				$sql_query .= 'instal11, materials11, dueDate11, instal12, materials12, dueDate12, addedDate)';
				$sql_query .= ' VALUES (\''.$prevID.'\',\''.$this->personID.'\', \''.$_POST['inst2'].'\', \''.$_POST['mats2'].'\', \''.$_POST['dueDate2'].'\', ';
				$sql_query .= '\''.$_POST['inst3'].'\', \''.$_POST['mats3'].'\', \''.$_POST['dueDate3'].'\', \''.$_POST['inst4'].'\', \''.$_POST['mats4'].'\', \''.$_POST['dueDate4'].'\', ';
				$sql_query .= '\''.$_POST['inst5'].'\', \''.$_POST['mats5'].'\', \''.$_POST['dueDate5'].'\', \''.$_POST['inst6'].'\', \''.$_POST['mats6'].'\', \''.$_POST['dueDate6'].'\', ';
				$sql_query .= '\''.$_POST['inst7'].'\', \''.$_POST['mats7'].'\', \''.$_POST['dueDate7'].'\', \''.$_POST['inst8'].'\', \''.$_POST['mats8'].'\', \''.$_POST['dueDate8'].'\', ';
				$sql_query .= '\''.$_POST['inst9'].'\', \''.$_POST['mats9'].'\', \''.$_POST['dueDate9'].'\', \''.$_POST['inst10'].'\', \''.$_POST['mats10'].'\', \''.$_POST['dueDate10'].'\', ';
				$sql_query .= '\''.$_POST['inst11'].'\', \''.$_POST['mats11'].'\', \''.$_POST['dueDate11'].'\', \''.$_POST['inst12'].'\', \''.$_POST['mats12'].'\', \''.$_POST['dueDate12'].'\', NOW())';
				// print_r($sql_query);die;
				$mysqli->query($sql_query);

				if (!empty($mysqli->affected_rows)) {
					//echo "<script type='text/javascript'>window.location='preview-paymentsDp.php?keyVal=" . $this->personID . "&courseNo=1&prevID=" . $prevID . "';</script>";
					//
					echo "<script type='text/javascript'>window.location='find-person.php?check=" . $this->personID . "';</script>";
					//
				}
			}
			//echo "<script type='text/javascript'>window.location='preview-paymentsDp.php?keyVal=".$this->personID."';</script>";
			//
		}
	}
}