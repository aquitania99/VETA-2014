<?php

/**
 * Created by JetBrains PhpStorm.
 * User: smedi_000
 * Date: 7/06/13
 * Time: 6:12 PM
 * To change this template use File | Settings | File Templates.
 */
class Person
{
	///
	/**
	 * Properties for Person VETA
	 */
	protected $_date;
	//protected $cID;
	///
	protected $stCounsellor;
	protected $firstName;
	protected $lastName;
	protected $mobilePhone;
	protected $emailAddress;
	protected $language;
	protected $visaExpDate;
	protected $visaType;
	protected $personStatus;
	protected $nationality;
	protected $profession;
	protected $workExperience;
	protected $collegeName;
	protected $DOB;
	protected $passNumber;
	protected $passExpDate;
	protected $seminarAttendance;
	protected $seminarDate;
	protected $getVetaInfo;
	///
	protected $degreeDate;
	protected $degreeUni;
	protected $residencyCountry;
	protected $originCountry;
	protected $homePhone;
	protected $skype;
	protected $engTest;
	protected $engTestName;
	protected $engTestType;
	protected $engTestDate;
	protected $overallScore;
	protected $reptFormNo;
	protected $genComments;
	protected $modifBy;
	protected $referredBy;
	public $results;
	//protected $action;
//
	protected function personTest()
	{
		$output = "Test Function...<br>";
		return $output;
	}

	function check($email)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		//var_dump($email, ' Checking this email....<br>');
		//
		$sql_query = 'SELECT * ';
		$sql_query .= 'FROM persons ';
		$email = $mysqli->real_escape_string($email);
		$sql_query .= 'WHERE emailAddress = \'' . $email . '\' ';
		//
		//echo "<code><pre>".$sql_query."</pre></code><br>";
		$result = $mysqli->query($sql_query);
		$row = $result->fetch_assoc();
		//
		if (!is_null($row)) {

			//echo "All good this guy is already on the database.....<br> Let's update the record...<br>";
			//echo "<script type='text/javascript'>alert('Do you want to update the information??');</script>";
			//
			//return false;
			//$this->update();
			$this->results = 1;
			//
			return $this->results;
			//return true; //$row["personID"];

		} else {
			//echo "NOP IT DOESN'T EXIST!!<br />";
			//$this->add();
			//echo '<script type="text/javascript">alert ("It doesn\'t exists, we are going to create it...\n");</script>';
			//$this->add();
			$this->results = 0;
			//
			//var_dump($this->results);die;
			return $this->results;
			// return var_export($this->add());
		}

	}

	function search($choice, $optional)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		switch ($choice) {
			case 1:
				$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress ';
				// $sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress,  CONCAT(c.firstName, " ", c.lastName) as "Counsellor" ';
				$sql_query .= 'FROM persons p ';
				// $sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
				$email = $mysqli->real_escape_string($optional);
				$sql_query .= 'WHERE p.emailAddress = \'' . $email . '\'';
				//var_dump($sql_query);die;
				$result = $mysqli->query($sql_query);
				while ($row = $result->fetch_assoc()) {
					$test[] = $row;
				}
				$this->results = $test;
				if (empty($test)) {
					$this->error();
				}
				break;

			case 2:
				$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress ';
				// $sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress,  CONCAT(c.firstName, " ", c.lastName) as "Counsellor" ';
				$sql_query .= 'FROM persons p ';
				// $sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
				$fName = $mysqli->real_escape_string($optional);
				$sql_query .= 'WHERE p.firstName like \'' . $fName . '%\'';
				$result = $mysqli->query($sql_query);
				while ($row = $result->fetch_assoc()) {
					$test = $row;
				}
				$this->results = $test;
				if (empty($test)) {
					$this->error();
				}
				break;

			case 3:
				$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress ';
				// $sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress,  CONCAT(c.firstName, " ", c.lastName) as "Counsellor" ';
				$sql_query .= 'FROM persons p ';
				// $sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
				$lName = $mysqli->real_escape_string($optional);
				$sql_query .= 'WHERE p.lastName like \'' . $lName . '%\'';
				$result = $mysqli->query($sql_query);
				while ($row = $result->fetch_assoc()) {
					$test[] = $row;
				}
				$this->results = $test;
				if (empty($test)) {
					$this->error();
				}
				break;

			case 4:
				$fullname = explode(' ', $optional);
				$fName = $fullname[0];
				$lName = $fullname[1];
				// $sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress,  CONCAT(c.firstName, " ", c.lastName) as "Counsellor" ';
				$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress ';
				$sql_query .= 'FROM persons p ';
				// $sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
				$fName = $mysqli->real_escape_string($fName);
				$lName = $mysqli->real_escape_string($lName);
				$sql_query .= 'WHERE p.firstName = \'' . $fName . '\'';
				$sql_query .= ' AND p.lastName = \'' . $lName . '\'';
				//
				$result = $mysqli->query($sql_query);
				while ($row = $result->fetch_assoc()) {
					$test[] = $row;
				}
				$this->results = $test;
				if (empty($test)) {
					$this->error();
				}
				break;

			case 5:
				// $sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress, p.profession, p.mobilePhone, p.visaExpDate as "visaExpDate", p.DOB as "DOB", c.firstName as "cfName", c.lastName as "clName", c.mobile as "cMobile", c.email as "cEmail" ';
				$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress, p.homeedutitle as "profession", p.mobilePhone, p.auvisaexpdate as "visaExpDate", p.DOB as "DOB" ';
				$sql_query .= 'FROM persons p ';
				// $sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
				$email = $mysqli->real_escape_string($optional);
				$sql_query .= 'WHERE p.emailAddress = \'' . $email . '\'';
				//var_dump($sql_query);
				$result = $mysqli->query($sql_query);
				//$row = $result->fetch_assoc($result);
				while ($row = $result->fetch_assoc()) {
					$test = $row;
				}
				$this->results = json_encode($test);
				if (empty($this->results)) {
					$this->error();
				}
				break;

			case 6:
				//$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress, p.profession, p.mobilePhone, p.visaExpDate as "visaExpDate", p.visaType, c.lastName as "clName", c.mobile as "cMobile", c.email as "cEmail" ';
				$sql_query = 'SELECT * ';
				// $sql_query .= ' c.firstName as "cfName", c.lastName as "clName", c.mobile as "cMobile", c.email as "cEmail" ';
				$sql_query .= 'FROM persons p ';
				// $sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
				$email = $mysqli->real_escape_string($optional);
				$sql_query .= 'WHERE p.emailAddress = \'' . $email . '\'';
				$result = $mysqli->query($sql_query);
				$row = $result->fetch_assoc();
				$this->results = json_encode($row);
				if (empty($this->results)) {
					$this->error();
				}
				break;

			case 7:
				$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress';
				$sql_query .= ' FROM persons p ';
//				$sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
				$passport = $mysqli->real_escape_string($optional);
				$sql_query .= 'WHERE p.passNumber = \'' . $passport . '\'';
				//$result = $mysqli->query($sql_query);
//				$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress,  CONCAT(c.firstName, " ", c.lastName) as "Counsellor" ';
//				$sql_query .= 'FROM persons p ';
//				$sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
//				$passport = $mysqli->real_escape_string($optional);
//				$sql_query .= 'WHERE p.passNumber = \'' . $passport . '\'';
//				print_r($sql_query);die;
				$result = $mysqli->query($sql_query);
				while ($row = $result->fetch_assoc()) {
					$test[] = $row;
				}
				$this->results = $test;
				if (empty($this->results)) {
					$this->error();
				}
				break;

			default:
				//$sql_query  = 'SELECT p.firstName, p.lastName, p.emailAddress, p.profession, p.mobilePhone, p.visaExpDate as "visaExpDate", c.firstName as "cfName", c.lastName as "clName" ';
				$sql_query = 'SELECT p.firstName, p.lastName, p.emailAddress,  CONCAT(c.firstName, " ", c.lastName) as "Counsellor" ';
				$sql_query .= 'FROM persons p ';
				$sql_query .= 'JOIN counsellors c ON c.cID = p.stCounsellor ';
				$email = $mysqli->real_escape_string($optional);
				$sql_query .= 'WHERE p.emailAddress = \'' . $email . '\'';
				$result = $mysqli->query($sql_query);
				while ($row = $result->fetch_assoc()) {
					$test[] = $row;
				}

				$this->results = $test;
				if (empty($this->results)) {
					$this->error();
				}
				break;
		}

		return $this->results;
	}

	function add()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		//print_r('Inside ADD....<br>');
		//
		$sql_Before = 'SELECT MAX(personID) as "maxID"';
		$sql_Before .= 'FROM persons';
		$rsBefore = $mysqli->query($sql_Before);
		//
		$row = $rsBefore->fetch_array();
		$maxIDBefore = $row['maxID'];
		//echo "maxID Before.... ".$maxIDBefore."<br />";
		//
		$sql_query = 'INSERT INTO persons (creationDate,';
		$sql_query .= 'stCounsellor, firstName, lastName, mobilePhone, emailAddress, languageID, visaExpDate, visaType,';
		$sql_query .= 'statusID, genComments, nacionality, profession, workExperience, collegeName, DOB, passNumber,';
		$sql_query .= 'passExpDate, seminarAttendance, seminarDate, getVetaInfo, degreeDate, degreeUni, residencyCountry,';
		$sql_query .= 'originCountry, homePhone, skype, engTest, engTestName, engTestType, engTestDate, overallScore,';
		$sql_query .= 'reportFormNo, modifDate, createDate, modifBy, referredBy)';
		$sql_query .= ' VALUES ("' . $this->_date . '", "' . $this->stCounsellor . '", "' . $this->firstName . '", "' . $this->lastName . '", "' . $this->mobilePhone . '",';
		$sql_query .= '"' . $this->emailAddress . '", "' . $this->language . '", "' . $this->visaExpDate . '", "' . $this->visaType . '", "' . $this->personstatus . '", "' . $this->genComments . '",';
		$sql_query .= '"' . $this->nationality . '", "' . $this->profession . '", "' . $this->workExperience . '", "' . $this->collegeName . '", "' . $this->DOB . '", "' . $this->passNumber . '",';
		$sql_query .= '"' . $this->passExpDate . '", "' . $this->seminarAttendance . '", "' . $this->seminarDate . '", "' . $this->getVetaInfo . '",';
		$sql_query .= '"' . $this->degreeDate . '", "' . $this->degreeUni . '", "' . $this->residencyCountry . '", "' . $this->originCountry . '", "' . $this->homePhone . '", "' . $this->skype . '",';
		$sql_query .= '"' . $this->engTest . '", "' . $this->engTestName . '", "' . $this->engTestType . '", "' . $this->engTestDate . '", "' . $this->overallScore . '", "' . $this->reptFormNo . '",';
		$sql_query .= 'NOW(), NOW(), "' . $this->modifBy . '", "' . $this->referredBy . '")';
		//
		//echo "<code><pre>".$sql_query."</pre></code>";
		$insert = $mysqli->query($sql_query);
		//
		$sql_After = 'SELECT MAX(personID) as "MaxID"';
		$sql_After .= 'FROM persons';
		$rsAfter = $mysqli->query($sql_After);
		//
		$row = $rsAfter->fetch_array();
		$maxIDAfter = $row['MaxID'];
		//var_dump($maxIDAfter);
		$email = $this->emailAddress;
		//echo "<br>maxID After.... ".$maxIDAfter."<br />";
		//
		if ($maxIDBefore < $maxIDAfter) {
			//echo "<br>inside the IF...<br>";
			//return $row["personID"]."-".$row["firstName"]." ".$row["lastName"] ;
			$result = '<tt><pre>The record has been added....</pre></tt><<br />';
			//echo '<script type="text/javascript"> window.location.href = "quotes.php?eaddress='.$email.'"; </script>';
			echo '<script type="text/javascript">alert("The record has been added...."); window.location.href = "mainAdmin.php"; </script>';
			exit;
		}
	}

	function update()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		//print_r('Inside the UPDATE....');
		//
		$sql_query = 'UPDATE persons SET stCounsellor = "' . $this->stCounsellor . '",';
		$sql_query .= ' firstName = "' . $this->firstName . '", lastName = "' . $this->lastName . '", mobilePhone = "' . $this->mobilePhone . '",';
		$sql_query .= ' emailAddress = "' . $this->emailAddress . '", languageID = "' . $this->language . '", visaExpDate = "' . $this->visaExpDate . '",';
		$sql_query .= ' visaType = "' . $this->visaType . '", statusID = "' . $this->personStatus . '", genComments = "' . $this->genComments . '", nacionality = "' . $this->nationality . '",';
		$sql_query .= ' profession = "' . $this->profession . '", workExperience = "' . $this->workExperience . '", collegeName = "' . $this->collegeName . '", DOB = "' . $this->DOB . '",';
		$sql_query .= ' passNumber = "' . $this->passNumber . '", passExpDate = "' . $this->passExpDate . '", seminarAttendance = "' . $this->seminarAttendance . '",';
		$sql_query .= ' seminarDate = "' . $this->seminarDate . '", getVetaInfo = "' . $this->getVetaInfo . '", degreeDate = "' . $this->degreeDate . '", degreeUni = "' . $this->degreeUni . '",';
		$sql_query .= ' residencyCountry = "' . $this->residencyCountry . '", originCountry = "' . $this->originCountry . '", homePhone = "' . $this->homePhone . '", skype = "' . $this->skype . '",';
		$sql_query .= ' engTest = "' . $this->engTest . '", engTestName = "' . $this->engTestName . '", engTestType = "' . $this->engTestType . '", engTestDate = "' . $this->engTestDate . '",';
		$sql_query .= ' overallScore = "' . $this->overallScore . '", reportFormNo = "' . $this->reptFormNo . '", modifDate = NOW(), modifBy = "' . $this->modifBy . '", referredBy = "' . $this->referredBy . '"';
		$sql_query .= ' WHERE emailAddress = "' . $this->emailAddress . '"';
		//
		//var_export($sql_query); die;
		//
		$update = $mysqli->query($sql_query);
		//$mysqli->query($sql_query);
		//
		$affected = $mysqli->affected_rows;
		//print_r("Updated records: %d\n", $affected);
		//printf("Updated records: %d\n", $mysqli->affected_rows);
		mysql_query("COMMIT");
		//var_dump($update);
		//
		return;
		//$test = $mysqli->affected_rows($sql_query);
	}

	function cancel()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		print_r('Cancel Course....');

	}

	function error() {
		echo '<div id="alerts" class = "alert alert-error">
			<div style="padding: 1em;">
				<a class="close" data-dismiss="alert" onclick="window.location.href = window.location.href;">×</a>
					<h3>Ooops!! =(</h3>
					<p>Sorry! Not users were found by that search criteria.</p>
			</div>
	      </div>';
	}
}