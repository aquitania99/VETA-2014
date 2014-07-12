<?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
require('classes/counsellors.php');
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
include_once'__insertForm/selfRegistryForm/selfRegistryForm.html';
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";