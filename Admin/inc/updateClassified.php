<?php 
session_start();
$classifiedID = $_GET['ID'];
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
	$queryNewsletter = $db->dbQuery("SELECT * FROM classifieds where classifiedID = $classifiedID");
	$rowNewsletter = $db->fetch_array($queryNewsletter);
/// Newsletter Details

	$textOne = $rowNewsletter['text1'];	

	$imageTwo = $rowNewsletter['image2'];

	$textThree = $rowNewsletter['text3'];	

	$imageFour = $rowNewsletter['image4'];	
	$textFour = $rowNewsletter['text4'];	
	
	$titleFive = $rowNewsletter['title5'];
	$imageFive = $rowNewsletter['image5'];	
	$textFive = $rowNewsletter['text5'];	

	$titleSix = $rowNewsletter['title6'];
	$imageSix = $rowNewsletter['image6'];		
	$textSix = $rowNewsletter['text6'];

	$update = $_POST['submit'];
	if (isset($update))
	{
		$textOne = $_POST['text1']; //Newsletter Number - Title 1
		$brImgsPath = $_POST['brImgsPath']; //Images Path
		$imagesPath = str_replace("../", "", $brImgsPath);
		$brImgs2 = $_FILES['brImgs2']['name']; //Images 2
		var_dump($brImgs2);
	if ($brImgs2[0] != '')
	{
		////		
		$imageTwo = $imagesPath.$brImgs2[0];
		////
		foreach($_FILES['brImgs2']['tmp_name'] as $key => $value){
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
			  if (file_exists( $brImgsPath . $_FILES['brImgs2']['name'][$key]))
				  {
				  //echo $_FILES['brImgs2']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs2']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs2']['name'][$key]);
				  //echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
				  }
		}
	}
	else {
		////		
		$imageTwo = $rowNewsletter['image2'];
	}	

	$textThree = $_POST['text3']; //Text 3	

	$brImgs4 = $_FILES['brImgs4']['name']; //Image 4
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
				  //echo $_FILES['brImgs4']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs4']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs4']['name'][$key]);
				  //echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
				  }
		}
	}
	else {
	$imageFour = $rowNewsletter['image4'];
	}
	$textFour = $_POST['text4']; //Text 4	
	
	$titleFive = $_POST['title5']; //Title 5
	$brImgs5 = $_FILES['brImgs5']['name']; //Image 5
	if ($brImgs5[0] != '')
	{
		////		
		$imageFive = $imagesPath.$brImgs5[0];
		////
		foreach($_FILES['brImgs5']['tmp_name'] as $key => $value){
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
			  if (file_exists( $brImgsPath . $_FILES['brImgs5']['name'][$key]))
				  {
				  echo $_FILES['brImgs5']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs5']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs5']['name'][$key]);
				  }
		}
	}
	else {
	$imageFive = $rowNewsletter['image5'];
	}
	$textFive = $_POST['text5']; //Text 5	

	$titleSix = $_POST['title6']; //Title 6
	$brImgs6 = $_FILES['brImgs6']['name']; //Image 5
	if ($brImgs6[0] != '')
	{
		////		
		$imageSix = $imagesPath.$brImgs6[0];
		////
		foreach($_FILES['brImgs6']['tmp_name'] as $key => $value){
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
			  if (file_exists( $brImgsPath . $_FILES['brImgs6']['name'][$key]))
				  {
				  echo $_FILES['brImgs6']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs6']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs6']['name'][$key]);
				  }
		}
	}
	else {
	$imageSix = $rowNewsletter['image6'];
	}	
	$textSix = $_POST['text6']; //Text 6
/////////////////////////////////////////////////////	
	//echo "DOING THE UPDATE.....!<br />";
	$updateNewsletter = $db->dbQuery("
	UPDATE classifieds  SET  
	text1  = '$textOne',
	image2 = '$imageTwo',
	text3 = '$textThree',
	image4 =  '$imageFour', 
	text4 = '$textFour', 
	title5 = '$titleFive', 
	image5 = '$imageFive', 
	text5 = '$textFive',  
	title6 = '$titleSix',  
	image6 = '$imageSix', 
	text6 = '$textSix', 
	creationDate = NOW()
	WHERE classifiedID = $classifiedID");
//////////////////////////////////
	 echo "<script> window.location = 'previewClassified.php?ID=$classifiedID'; </script>"; 
	exit();
	}
?>