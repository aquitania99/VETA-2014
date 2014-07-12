<?php 
session_start();
$newsletterID = $_GET['ID'];
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
	$queryNewsletter = $db->dbQuery("SELECT * FROM newsletter where newsletterID = $newsletterID");
	$rowNewsletter = $db->fetch_array($queryNewsletter);
/// Newsletter Details
	$titleOne = $rowNewsletter['title1'];
	$textOne = $rowNewsletter['text1'];
	
	$titleTwo = $rowNewsletter['title2'];
	$imageTwoA = $rowNewsletter['image2A'];
	$imageTwoB = $rowNewsletter['image2B'];
	$imageTwoC = $rowNewsletter['image2C'];		
	
	$titleThree = $rowNewsletter['title3'];
	$imageThree = $rowNewsletter['image3'];
	$textThree = $rowNewsletter['text3'];	

	$titleFour = $rowNewsletter['title4'];
	$imageFour = $rowNewsletter['image4'];	
	$textFour = $rowNewsletter['text4'];	
	
	$titleFive = $rowNewsletter['title5'];
	$imageFive = $rowNewsletter['image5'];	
	$textFive = $rowNewsletter['text5'];	

	$titleSix = $rowNewsletter['title6'];
	$textSix = $rowNewsletter['text6'];

	$titleSeven = $rowNewsletter['title7'];
	$imageSeven = $rowNewsletter['image7'];	
	$textSeven = $rowNewsletter['text7'];	

	$titleEight = $rowNewsletter['title8'];
	$imageEight = $rowNewsletter['image8'];	
	$textEight = $rowNewsletter['text8'];	

	$titleNine = $rowNewsletter['title9'];
	$imageNine = $rowNewsletter['image9'];	
	$textNine = $rowNewsletter['text9'];	
	//echo "<br />El Newsletter BLABLABLA Start :".$newsletterData."<br />";
	$update = $_POST['submit'];
	if (isset($update))
	{
		$titleOne = $_POST['title1']; //Newsletter Number - Title 1
		$textOne = $_POST['text1']; //Newsletter Number - Title 1
		$titleTwo = $_POST['title2']; //Title 2
		$brImgsPath = $_POST['brImgsPath']; //Images Path
		$imagesPath = str_replace("../", "", $brImgsPath);
		$brImgs2 = $_FILES['brImgs2']['name']; //Images 2
		var_dump($brImgs2);
	if ($brImgs2[0] != '')
	{
		////		
		$imageTwoA = $imagesPath.$brImgs2[0];
		//echo "imageTwoA ".$imageTwoA."<br />";
		$imageTwoB = $imagesPath.$brImgs2[1];
		$imageTwoC = $imagesPath.$brImgs2[2];		
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
				  $brImgsPath . str_replace("", "-", $_FILES['brImgs2']['name'][$key]));
				  //echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
				  }
		}
	}
	else {
		////		
		$imageTwoA = $rowNewsletter['image2A'];
		//echo "imageTwoA ".$imageTwoA."<br />";
		$imageTwoB = $rowNewsletter['image2B'];
		$imageTwoC = $rowNewsletter['image2C'];		
	}	
	
	$titleThree = $_POST['title3']; //Title 3
	$brImgs3 = $_FILES['brImgs3']['name']; //Image 3
	if ($brImgs3[0] != '')
	{
		////		
		$imageThree = $imagesPath.$brImgs3[0];
		////
		foreach($_FILES['brImgs3']['tmp_name'] as $key => $value){
			//////
			 if ($uploaded_size > 350000) 
			 { 
			 //echo "Your file is too large.<br>"; 
			 $ok=0; 
			 } 
			 
			 //This is our limit file type condition 
			 if ($uploaded_type =="text/php") 
			 { 
			 //echo "No PHP files<br>"; 
			 $ok=0; 
			 } 
			 //////
			  if (file_exists( $brImgsPath . $_FILES['brImgs3']['name'][$key]))
				  {
				  //echo $_FILES['brImgs3']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs3']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs3']['name'][$key]);
		
				  }
		}
	}
	else {
	$imageThree = $rowNewsletter['image3'];
	}
	$textThree = $_POST['text3']; //Text 3	

	$titleFour = $_POST['title4']; //Title 4
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
	$textSix = $_POST['text6']; //Text 6

	$titleSeven = $_POST['title7']; //Title 7
	$brImgs7 = $_FILES['brImgs7']['name']; //Image 7
	if ($brImgs7[0] != '')
	{
		////		
		$imageSeven = $imagesPath.$brImgs7[0];
		////
		foreach($_FILES['brImgs7']['tmp_name'] as $key => $value){
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
			  if (file_exists( $brImgsPath . $_FILES['brImgs7']['name'][$key]))
				  {
				  echo $_FILES['brImgs7']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs7']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs7']['name'][$key]);
		
				  }
		}
	}
	else {
	$imageSeven = $rowNewsletter['image7'];
	}
	$textSeven = $_POST['text7']; //Text 7	

	$titleEight = $_POST['title8']; //Title 8
	$brImgs8 = $_FILES['brImgs8']['name']; //Image 8
	if ($brImgs8[0] != '')
	{
		////		
		$imageEight = $imagesPath.$brImgs8[0];
		////
		foreach($_FILES['brImgs8']['tmp_name'] as $key => $value){
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
			  if (file_exists( $brImgsPath . $_FILES['brImgs8']['name'][$key]))
				  {
				  echo $_FILES['brImgs8']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs8']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs8']['name'][$key]);
				  //echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
				  }
		}
	}
	else {
	$imageeight = $rowNewsletter['image8'];
	}
	$textEight = $_POST['text8']; //Text 8

	$titleNine = $_POST['title9']; //Title 9
	$brImgs9 = $_FILES['brImgs9']['name']; //Image 9
	if ($brImgs9[0] != '')
	{
		////		
		$imageNine = $imagesPath.$brImgs9[0];
		////
		foreach($_FILES['brImgs9']['tmp_name'] as $key => $value){
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
			  if (file_exists( $brImgsPath . $_FILES['brImgs9']['name'][$key]))
				  {
				  //echo $_FILES['brImgs9']['name'][$key]. " already exists. ";
				  }
				else
				  {
				  move_uploaded_file($_FILES['brImgs9']['tmp_name'][$key],
				  $brImgsPath . $_FILES['brImgs9']['name'][$key]);
				  //echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
				  }
		}
	}
	else {
	$imageNine = $rowNewsletter['image9'];
	}
	$textNine = $_POST['text9']; //Text 9	
/////////////////////////////////////////////////////	
	//echo "DOING THE UPDATE.....!<br />";
	$updateNewsletter = $db->dbQuery("
	UPDATE newsletter  SET  
	title1 = '$titleOne',
	text1  = '$textOne',
	title2 =  '$titleTwo',  
	image2A = '$imageTwoA',
	image2B =  '$imageTwoB', 
	image2C = '$imageTwoC',
	title3 =  '$titleThree', 
	image3 = '$imageThree', 
	text3 = '$textThree',
	title4 = '$titleFour',
	image4 =  '$imageFour', 
	text4 = '$textFour', 
	title5 = '$titleFive', 
	image5 = '$imageFive', 
	text5 = '$textFive',  
	title6 = '$titleSix',  
	text6 = '$textSix', 
	title7 = '$titleSeven', 
	image7 = '$imageSeven',
	text7 = '$textSeven',
	title8 = '$titleEight', 
	image8 =  '$imageEight', 
	text8 = '$textEight', 
	title9 = '$titleNine', 
	image9 = '$imageNine', 
	text9 = '$textNine',
	creationDate = NOW()
	WHERE newsletterID = $newsletterID");
//////////////////////////////////
	 echo "<script> window.location = 'previewNewsletter.php?ID=$newsletterID'; </script>"; 
	exit();
	}
?>