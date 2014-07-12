<?php
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
require('classes/counsellors.php');
//////////////////////////////////
	$modifBy = $_SESSION['login'];
//
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	//
	$col = new College();
	$col->getCollege();
	$colList = $col->getCollege();
//
	$counsellor = $_SESSION['login'];
	$cID = strtoupper($counsellor[0]) . '-' . ucwords(substr($counsellor, 1));
	//var_dump($cID);
	if (!empty($cID)) {
		$counsellor = new counsellors();
		$counsellor->check($cID);
	}
	if (isset($_POST['submit'])) {
//////////////////////////////////
		require("classes/person.php");
//
		$person = new Person();
		$person->_date = date('Y/m/d');
		$person->stCounsellor = $cID;
		$person->personstatus = $_POST['personStatus'];
		$person->firstName = ucwords(strtolower($_POST['firstName']));
		$person->lastName = ucwords(strtolower($_POST['lastName']));
		$person->emailAddress = strtolower($_POST['emailAddress']);
		//
		$person->mobilePhone = $_POST['mobilePhone'];
		$person->language = $_POST['language'];

		//
		if (empty($_POST['visaExpDate'])) {
			$person->visaExpDate = '0000-00-00';
		} else {
			$expDate = explode('-', $_POST['visaExpDate']);
			$person->visaExpDate = $expDate[2] . '-' . $expDate[1] . '-' . $expDate[0];
		}
		//

		$person->visaType = $_POST['visaType'];
		$person->genComments = strtolower($_POST['genComments']);
		$person->nationality = ucwords(strtolower($_POST['nationality']));
		$person->profession = ucwords(strtolower($_POST['profession']));
		//var_dump($_POST['workExperience']);
		if (empty($_POST['workExperience'])) {
			$person->workExperience = '0';
		} else $person->workExperience = $_POST['workExperience'];
		//
		$person->collegeName = $_POST['collegeName'];
		//

		if (empty($_POST['DOB'])) {
			$person->DOB = '0000-00-00';
		} else {
			$personDob = explode('-', $_POST['DOB']);
			$person->DOB = $personDob[2] . '-' . $personDob[1] . '-' . $personDob[0];
		}
		//
		$person->passNumber = $_POST['passNumber'];
		//
		if (empty($_POST['passExpDate'])) {
			$person->passExpDate = '0000-00-00';
		} else {
			$passExpDate = explode('-', $_POST['passExpDate']);
			$person->passExpDate = $passExpDate[2] . '-' . $passExpDate[1] . '-' . $passExpDate[0];
		}
		//
		if (!empty($_POST['seminarAttendance'])) {
			$person->seminarAttendance = $_POST['seminarAttendance'];
		} else $person->seminarAttendance = 'NULL';
		//
		if (empty($_POST['seminarDate'])) {
			$person->seminarDate = '0000-00-00';
		} else {
			$seminarDate = explode('-', $_POST['seminarDate']);
			$person->seminarDate = $seminarDate[2] . '-' . $seminarDate[1] . '-' . $seminarDate[0];
		}
		//
		$person->getVetaInfo = $_POST['getVetaInfo'];
		//
		if (empty($_POST['degreeDate'])) {
			$person->degreeDate = '0000-00-00';
		} else {
			$degreeDate = explode('-', $_POST['degreeDate']);
			$person->degreeDate = $degreeDate[2] . '-' . $degreeDate[1] . '-' . $degreeDate[0];
		}
		//
		$person->degreeUni = ucwords(strtolower($_POST['degreeUni']));
		$person->residencyCountry = ucwords(strtolower($_POST['residencyCountry']));
		$person->originCountry = ucwords(strtolower($_POST['originCountry']));
		$person->homePhone = $_POST['homePhone'];
		$person->skype = strtolower($_POST['skype']);

		if (!empty($_POST['engTest'])) {
			$person->engTest = $_POST['engTest'];
		} else $person->engTest = '0';

		$person->engTestName = $_POST['engTestName'];
		$person->engTestType = $_POST['engTestType'];
		//
		if (empty($_POST['engTestDate'])) {
			$person->engTestDate = '0000-00-00';
		} else {
			$testDate = explode('-', $_POST['engTestDate']);
			$person->engTestDate = $testDate[2] . '-' . $testDate[1] . '-' . $testDate[0];
		}
		//
		$person->overallScore = $_POST['overallScore'];
		$person->reptFormNo = $_POST['reptFormNo'];
		$person->modifBy = $_POST['modifBy'];
		$person->referredBy = $_POST['referredBy'];
		//
		// var_export($person,true);
		//
		$person->check($person->emailAddress);
		//
		$result = $person->results;

		//
		if (isset($result)) {
			//echo "<pre>Getting response from the class... ".$result."</pre>";
			switch ($result) {

				case 0:
					//echo "<code><pre>That email address is not on the system yet...</pre></code>";
					$person->add();
					break;

				case 1:
					//echo "<pre>This will UPDATE the user...</pre>";
					echo "<script type='text/javascript'> $('#myModal').modal('toggle'); </script>";
					//$person->update();
					break;

				default:
					# code...
					break;
			}
		}

	}