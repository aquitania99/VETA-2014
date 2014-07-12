<?php 
session_start();
$seminarID = $_GET['ID'];
//echo "newsletterID = ".$newsletterID."<br />";
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();	
//////////////////////////////////
	$queryNewsletter = $db->dbQuery("SELECT * FROM seminars where seminarID = $seminarID");
	$rowNewsletter = $db->fetch_array($queryNewsletter);
/// Newsletter Details

	$date = $rowNewsletter['date'];	
	$titleOne = $rowNewsletter['title1'];	
	$textOne = $rowNewsletter['text1'];	
	$textTwo = $rowNewsletter['text2'];
        $text_br = $rowNewsletter['text_br'];
	$titleThree = $rowNewsletter['title3'];
	$imageThree = $rowNewsletter['image3'];	
	$textThree = $rowNewsletter['text3'];	

	$titleFour = $rowNewsletter['title4'];
	$imageFour = $rowNewsletter['image4'];		
	$textFour = $rowNewsletter['text4'];

	$update = $_POST['submit'];
	if (isset($update))
	{
		$date = $_POST['date'];
		$titleOne = $_POST['title1']; 
		$textOne = $_POST['text1']; 
                $textTwo = $_POST['text2']; 
                $text_br = $_POST['text_br']; 
		$titleThree = $_POST['title3'];
		$brImgsPath = $_POST['brImgsPath']; //Images Path
		$imagesPath = str_replace("../", "", $brImgsPath);
		$brImgs3 = $_FILES['brImgs3']['name']; //Images 3
		//var_dump($brImgs2);
	if ($brImgs3[0] != '')
	{
		////		
		$imageThree = $imagesPath.$brImgs3[0];
		////
		foreach($_FILES['brImgs3']['tmp_name'] as $key => $value){
			//////
			 if ($uploaded_size > 350000) 
			 { 
			 echo "Your file is too large.<br>"; 
			 $ok=0; 
			 } 
			 
			 //This is our limit file type condition 
			 if ($uploaded_type =="text/php") 
			 { 
			 echo "No PHP files<br>"; 
			 $ok=0; 
			 } 
			 //////
			  if (file_exists( $brImgsPath . $_FILES['brImgs3']['name'][$key]))
				  {
				  //echo $_FILES['brImgs2']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs3']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs3']['name'][$key]);
				  //echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
				  }
		}
	}
	else {
		////		
		$imageTwo = $rowNewsletter['image3'];
	}	

	$textThree = $_POST['text3']; //Text 3	

	$titleFour = $_POST['title4']; //Title 5
	$brImgs4 = $_FILES['brImgs4']['name']; //Image 5
	if ($brImgs4[0] != '')
	{
		////		
		$imageFour = $imagesPath.$brImgs4[0];
		////
		foreach($_FILES['brImgs4']['tmp_name'] as $key => $value){
			//////
			 if ($uploaded_size > 350000) 
			 { 
			 echo "Your file is too large.<br>"; 
			 $ok=0; 
			 } 
			 
			 //This is our limit file type condition 
			 if ($uploaded_type =="text/php") 
			 { 
			 echo "No PHP files<br>"; 
			 $ok=0; 
			 } 
			 //////
			  if (file_exists( $brImgsPath . $_FILES['brImgs4']['name'][$key]))
				  {
				  echo $_FILES['brImgs4']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs4']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs4']['name'][$key]);
				  }
		}
	}
	else {
	$imageFour = $rowNewsletter['image4'];
	}
	$textFour = $_POST['text4']; //Text 5	
/////////////////////////////////////////////////////	
	//echo "DOING THE UPDATE.....!<br />";
	$updateSeminar = $db->dbQuery("
	UPDATE seminars  SET  
	date  = '$date',
	title1 = '$titleOne', 
	text1 = '$textOne',
	text2 = '$textTwo',	
        text_br = '$text_br',         
	title3 = '$titleThree', 
	image3 = '$imageThree', 
	text3 = '$textThree',  
	title4 = '$titleFour',  
	image4 = '$imageFour', 
	text4 = '$textFour', 
	creationDate = NOW()
	WHERE seminarID = $seminarID");
//////////////////////////////////
	 echo "<script> window.location = 'previewSeminars.php?ID=$seminarID'; </script>"; 
	exit();
	}
?>