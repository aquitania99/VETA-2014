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
	$queryNewsletter = $db->dbQuery("SELECT * FROM newsletter where newsletterID = $afterID");
	$rowNewsletter = $db->fetch_array($queryNewsletter);
/// Newsletter Details
	$titleOne = strtoupper($rowNewsletter['title1']);
	$textOne = $rowNewsletter['text1'];
	
	$titleTwo = strtoupper($rowNewsletter['title2']);
	$imageTwoA = $rowNewsletter['image2A'];
	$imageTwoB = $rowNewsletter['image2B'];
	$imageTwoC = $rowNewsletter['image2C'];		

	$titleThree = strtoupper($rowNewsletter['title3']);
	$imageThree = $rowNewsletter['image3'];	
	$textThree = $rowNewsletter['text3'];	

	$titleFour = strtoupper($rowNewsletter['title4']);
	$imageFour = $rowNewsletter['image4'];	
	$textFour = $rowNewsletter['text4'];	
	
	$titleFive = strtoupper($rowNewsletter['title5']);
	$imageFive = $rowNewsletter['image5'];	
	$textFive = $rowNewsletter['text5'];	

	$titleSix = strtoupper($rowNewsletter['title6']);
	$textSix = $rowNewsletter['text6'];

	$titleSeven = strtoupper($rowNewsletter['title7']);
	$imageSeven = $rowNewsletter['image7'];	
	$textSeven = $rowNewsletter['text7'];	

	$titleEight = strtoupper($rowNewsletter['title8']);
	$imageEight = $rowNewsletter['image8'];	
	$textEight = $rowNewsletter['text8'];	

	$titleNine = strtoupper($rowNewsletter['title9']);
	$imageNine = $rowNewsletter['image9'];	
	$tNine = str_replace("<p>", "", $rowNewsletter['text9']);
	//$textNine = $rowNewsletter['text9'];	
	$textNine = $tNine;	
	//echo "<br />El Newsletter BLABLABLA Start :".$newsletterData."<br />";
	////////////////// DIRECTORY //////////////////	
			$queryDirectory = $db->dbQuery("SELECT * FROM directory LIMIT 0,6");
			$rowDirectory = $db->fetch_array($queryDirectory);
	/// Directory Details	
	
	
?>