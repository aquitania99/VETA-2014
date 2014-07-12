<?php
session_start();
//
// set the default timezone to use.
date_default_timezone_set("Australia/Sydney");
//
require 'classes/database.php';
require 'classes/college.php';
require 'classes/counsellors.php';
require 'classes/person.php';
//////////////////////////////////
if (isset($_SESSION['login'])) {
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
	$keyVal = $_GET['keyVal'];
	$personalDetails = new Person();
	//$choice = 1;
	$choice = 6;
	$personalDetails->search($choice, $keyVal);
	$personalDetails->results;
	$personResults = json_decode($personalDetails->results, true);

	include_once'__updateForm/selfRegistryForm/selfRegistryForm.html';

} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";