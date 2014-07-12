<?php
//////////////////////////////////////////////////////
require_once("../Connections/config.inc.php");
require_once("../Connections/mysql.class.php");
//////////////////////////////////////////////////////
$eduCentreID = $_GET['eduCentre'];
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
//////////////////////////////////
$schoolDetail = $db->dbQuery("SELECT * FROM `education_provider` WHERE edu_providerID = $eduCentreID");
$resSchoolCheck = $db->fetch_array($schoolDetail);
$eduCentreName = $resSchoolCheck['entity_name'];
//
$eduCentreAddress = $resSchoolCheck['location'];
//////////////////////////////////

?>
