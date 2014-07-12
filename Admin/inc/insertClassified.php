<?php 
session_start();
//echo "<h3>INSIDE THE BLOODY SCRIPT THAT INSERTS THE DATA!!</3>";
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Get Parameters
/// ~~~ Section One
$text1=$_POST['text1'];
//echo "Text 1 :".$text1."<br />";
/// ~~~ Section Two
//$images = $_POST['images'];
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImgs2 = $_FILES['brImgs2']['name'];
////
$image2 = $imagesPath.$brImgs2[0];
//echo "Image A :".$image2."<br />";

/// ~~~ Section Three
$text3=$_POST['text3'];
//echo "Text 3 :".$text3."<br />";

/// ~~~ Section Four
$text4=$_POST['text4'];
/// Add Images....
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImg4 = $_FILES['brImgs4']['name'];
$image4 = $imagesPath.$brImg4[0];
////
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
/// Add Images....
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImg6 = $_FILES['brImgs6']['name'];
$image6 = $imagesPath.$brImg6[0];
////
$text6=$_POST['text6'];
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
		  //echo $_FILES['brImgs2']['name'][$key]. " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES['brImgs2']['tmp_name'][$key],
		  $brImgsPath . $_FILES['brImgs2']['name'][$key]);
		  echo "<br />Logo File Stored in: " . $brImgsPath . $_FILES['brImgs']['name'][$key]."<br \>";
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
		  //echo $_FILES['brImgs5']['name'][$key]. " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES['brImgs5']['tmp_name'][$key],
		  $brImgsPath . $_FILES['brImgs5']['name'][$key]);
		  }
}

}
///Image 6
if (isset($_FILES['brImgs6']))
{
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
		  //echo $_FILES['brImgs6']['name'][$key]. " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES['brImgs6']['tmp_name'][$key],
		  $brImgsPath . $_FILES['brImgs6']['name'][$key]);

		  }
}

}
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();	
//////////////////////////////////
	//Select MaxID Before Insert New Newsletter
	$queryClass = $db->dbQuery("SELECT MAX(classifiedID) AS maxID FROM classifieds");
	$rowClass = $db->fetch_array($queryClass);
	$beforeID = $rowClass['maxID'];
	echo "<br />El Classified ID before hand:".$beforeID."<br />";
	/// Insert DB
$insertClass = $db->dbQuery("INSERT INTO classifieds( classifiedID , text1 , image2, text3 , 
image4 , text4 , title5 , image5 , text5 , title6 , image6 , text6 , creationDate )
VALUES (NULL , '$text1', '$image2', '$text3', '$image4', '$text4', '$title5', '$image5', '$text5', 
'$title6', '$image6', '$text6', NOW())");
////////////////////////////
		//Select MaxID After Insert New Newsletter
	$queryClass = $db->dbQuery("SELECT MAX(classifiedID) AS maxID FROM classifieds");
	$rowClass = $db->fetch_array($queryClass);
	$afterID = $rowClass['maxID'];
	//echo "NewsletterID After Insert: ".$afterID."<br \>";
	//if ($beforeID != $afterID){
	//echo  "New Max ID = ".$afterID."<br \>";
		//echo "VETA Newsletter Successfully Created!! <br \><br \>";
		//echo "<a href=".$_SERVER['PHP_SELF']."?task=1>Add Another Property for Lease</a><br \><br \>";
		//header('location:previewNewsletter.php?ID=$afterID');
	//}
	if ($beforeID == $afterID) { 	
			echo "Record not Inserted!!! Please Check the values entered.<br \><br \>";
			echo "<a href=".$_SERVER['PHP_SELF']."?task=1b>Try Again => Go back to create Classifieds</a><br \><br \>";
	} 
////////////////////////////
?>