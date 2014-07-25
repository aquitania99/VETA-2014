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
			// print_r($sql_query);
			$mysqli->query($sql_query);
			$affected = $mysqli->affected_rows;
			// print_r($affected);die;
			//
			echo "<script type='text/javascript'>window.location='find-person.php?check=" . $this->personID . "';</script>";
			//
		}

		if ($quoteType == 'Diploma') {
			//echo "Adding a Diploma of some kind...<br>";
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
			//print_r($sql_query);die;
			$mysqli->query($sql_query);
			$affected = $mysqli->affected_rows;
			$affected = 1;
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