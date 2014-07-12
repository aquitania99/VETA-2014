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
	$queryNewsletter = $db->dbQuery("SELECT * FROM seminars where seminarID = $afterID");
	$rowNewsletter = $db->fetch_array($queryNewsletter);
/// Newsletter Details
	//$titleOne = strtoupper($rowNewsletter['title1']);
	$date = $rowNewsletter['date'];
	$titleOne = ucwords($rowNewsletter['title1']);
	$textOne = $rowNewsletter['text1'];
	$textTwo = $rowNewsletter['text2'];
        $text_br = $rowNewsletter['text_br'];
	$titleThree = strtoupper($rowNewsletter['title3']);
	$imageThree = $rowNewsletter['image3'];	
	$textThree = $rowNewsletter['text3'];	

	$titleFour = strtoupper($rowNewsletter['title4']);
	$imageFour = $rowNewsletter['image4'];	
	$textFour = $rowNewsletter['text4'];
?>