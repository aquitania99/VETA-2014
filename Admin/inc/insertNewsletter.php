<?php 
session_start();
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Get Parameters
/// ~~~ Section One
$title1=$_POST['title1'];
$image1= $_POST['image1'];
$text1=$_POST['text1'];
//echo "Title 1 :".$title1."<br />";
//echo "Image 1 :".$image1."<br />";
//echo "Text 1 :".$text1."<br />";
/// ~~~ Section Two
$title2=$_POST['title2'];
/// Add Images....
//$images = $_POST['images'];
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImgs2 = $_FILES['brImgs2']['name'];
////
$image2A = $imagesPath.$brImgs2[0];
$image2B = $imagesPath.(str_replace("", "-", $brImgs2[1]));
$image2C = $imagesPath.(str_replace("", "-", $brImgs2[2]));
//echo "Title 2 :".$title2."<br />";
//echo "Image A :".$image2A."<br />";
//echo "Image B :".$image2B."<br />";
//echo "Image C :".$image2C."<br />";
/// ~~~ Section Three
$title3=$_POST['title3'];
/// Add Images....
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImg3 = $_FILES['brImgs3']['name'];
$image3 = $imagesPath.str_replace(" ", "-", $brImg3[0]);
////
$text3=$_POST['text3'];
//echo "Title 3 :".$title3."<br />";
//echo "Image 3 :".$image3."<br />";
//echo "Text 3 :".$text3."<br />";
/// ~~~ Section Four
$title4=$_POST['title4'];
/// Add Images....
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImg4 = $_FILES['brImgs4']['name'];
$image4 = $imagesPath.$brImg4[0];
////

$text4=$_POST['text4'];
/// ~~~ Section Five
$title5=$_POST['title5'];
/// Add Images....
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImg5 = $_FILES['brImgs5']['name'];
$image5 = $imagesPath.$brImg5[0];
////

$text5=$_POST['text5'];
/// ~~~ Section Six
$title6=$_POST['title6'];
$text6=$_POST['text6'];
/// ~~~ Section Seven
$title7=$_POST['title7'];
/// Add Images....
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImg7 = $_FILES['brImgs7']['name'];
$image7 = $imagesPath.$brImg7[0];
////

$text7=$_POST['text7'];
/// ~~~ Section Eight
$title8=$_POST['title8'];
/// Add Images....
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImg8 = $_FILES['brImgs8']['name'];
$image8 = $imagesPath.$brImg8[0];
//echo "Image 8...!".$image8."<br />";
////

$text8=$_POST['text8'];
/// ~~~ Section Nine
$title9=$_POST['title9'];
/// Add Images....
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImg9 = $_FILES['brImgs9']['name'];
$image9 = $imagesPath.$brImg9[0];
////
//echo "Image 9...!".$image9."<br />";
$text9=$_POST['text9'];
/// ~~~ Send form!!!
$go = $_POST['submit'];
//echo "Submit Button...".$go."<br />";
/////////////////////// UPLOAD Newsletter Images Start
///Image 2
if (isset($_FILES['brImgs2']))
{
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
		  echo $_FILES['brImgs2']['name'][$key]. " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES['brImgs2']['tmp_name'][$key],
		  $brImgsPath . $_FILES['brImgs2']['name'][$key]);
		  echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
		  }
}

}
///Image 3
if (isset($_FILES['brImgs3']))
{
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
		  echo $_FILES['brImgs3']['name'][$key]. " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES['brImgs3']['tmp_name'][$key],
		  $brImgsPath . $_FILES['brImgs3']['name'][$key]);

		  }
}

}
///Image 4
if (isset($_FILES['brImgs4']))
{
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
		  //echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
		  }
}

}
///Image 5
if (isset($_FILES['brImgs5']))
{
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
///Image 7
if (isset($_FILES['brImgs7']))
{
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
///Image 8
if (isset($_FILES['brImgs8']))
{
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
///Image 9
if (isset($_FILES['brImgs9']))
{
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
		  echo $_FILES['brImgs9']['name'][$key]. " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES['brImgs9']['tmp_name'][$key],
		  $brImgsPath . $_FILES['brImgs9']['name'][$key]);
		  //echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
		  }
}

}
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();	
//////////////////////////////////
	//Select MaxID Before Insert New Newsletter
	$queryStks = $db->dbQuery("SELECT MAX(newsletterID) AS maxID FROM newsletter");
	$rowStks = $db->fetch_array($queryStks);
	$beforeID = $rowStks['maxID'];
	echo "<br />El Newsletter ID before hand:".$beforeID."<br />";
	/// Insert DB
$insertStks = $db->dbQuery("INSERT INTO newsletter ( newsletterID , title1 , text1 , title2 , image2A , image2B , image2C ,
title3 , image3 , text3 , title4 , image4 , text4 , title5 , image5 , text5 , title6 , text6 , title7 , image7 , text7 ,
title8 , image8 , text8 , title9 , image9 , text9 , migrationText , creationDate )
VALUES (NULL , '$title1', '$text1', '$title2', '$image2A', '$image2B', '$image2C', '$title3', '$image3', '$text3', 
'$title4', '$image4', '$text4', '$title5', '$image5', '$text5', '$title6', '$text6', '$title7', '$image7', '$text7', 
'$title8', '$image8', '$text8', '$title9', '$image9', '$text9', '$migrationText', NOW())");
////////////////////////////
		//Select MaxID After Insert New Newsletter
	$queryStks = $db->dbQuery("SELECT MAX(newsletterID) AS maxID FROM newsletter");
	$rowStks = $db->fetch_array($queryStks);
	$afterID = $rowStks['maxID'];
	//echo "NewsletterID After Insert: ".$afterID."<br \>";
	//if ($beforeID != $afterID){
	//echo  "New Max ID = ".$afterID."<br \>";
		//echo "VETA Newsletter Successfully Created!! <br \><br \>";
		//echo "<a href=".$_SERVER['PHP_SELF']."?task=1>Add Another Property for Lease</a><br \><br \>";
		//header('location:previewNewsletter.php?ID=$afterID');
	//}
	if ($beforeID == $afterID) { 	
			echo "Record not Inserted!!! Please Check the values entered.<br \><br \>";
			echo "<a href=".$_SERVER['PHP_SELF']."?task=1b>Try Again => Go back to create Newsletter</a><br \><br \>";
	} 
////////////////////////////
?>