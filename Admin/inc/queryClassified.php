<?php 
session_start();
$afterID = $_GET['ID'];
//$afterID = 13; //Just for Debug and Test purposes....
//echo "afterID = ".$afterID."<br />";
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();	
//////////////////////////////////
	$queryNewsletter = $db->dbQuery("SELECT * FROM classifieds where classifiedID = $afterID");
	$rowNewsletter = $db->fetch_array($queryNewsletter);
/// Newsletter Details
	//$titleOne = strtoupper($rowNewsletter['title1']);
	$textOne = $rowNewsletter['text1'];
	
	//$titleTwo = strtoupper($rowNewsletter['title2']);
	$imageTwo = $rowNewsletter['image2'];
	//$imageTwoB = $rowNewsletter['image2B'];
	//$imageTwoC = $rowNewsletter['image2C'];		

	//$titleThree = strtoupper($rowNewsletter['title3']);
	//$imageThree = $rowNewsletter['image3'];	
	$textThree = $rowNewsletter['text3'];	

	//$titleFour = strtoupper($rowNewsletter['title4']);
	$imageFour = $rowNewsletter['image4'];	
	$textFour = $rowNewsletter['text4'];	
	
	$titleFive = strtoupper($rowNewsletter['title5']);
	$imageFive = $rowNewsletter['image5'];	
	$textFive = $rowNewsletter['text5'];	

	$titleSix = strtoupper($rowNewsletter['title6']);
	$imageSix = $rowNewsletter['image6'];	
	$textSix = $rowNewsletter['text6'];
?>