<?php 
session_start();
//echo "<h3>INSIDE THE BLOODY SCRIPT THAT INSERTS THE DATA!!</3>";
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Get Parameters
/// ~~~ Section One
$date = $_POST['date'];
$title1 = $_POST['title1'];
$text1 = $_POST['text1'];
/// ~~~ Section Two
$text2 = $_POST['text2'];
/// ~~~ Portuguese Text
$text_br = $_POST['text_br'];
/// ~~~ Section Three
$title3 = $_POST['title3'];
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImgs3 = $_FILES['brImgs3']['name'];
////
$image3 = $imagesPath.$brImgs3[0];
$text3=$_POST['text3'];
/// ~~~ Section Four
$title4 = $_POST['title4'];
$brImgsPath = $_POST['brImgsPath'];
$imagesPath = str_replace("../", "", $brImgsPath);
$brImgs4 = $_FILES['brImgs4']['name'];
/////////////////////// UPLOAD Newsletter Images Start
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
		  //echo $_FILES['brImgs2']['name'][$key]. " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES['brImgs3']['tmp_name'][$key],
		  $brImgsPath . $_FILES['brImgs3']['name'][$key]);
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
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();	
//////////////////////////////////
	//Select MaxID Before Insert New Newsletter
	$queryClass = $db->dbQuery("SELECT MAX(seminarID) AS maxID FROM seminars");
	$rowClass = $db->fetch_array($queryClass);
	$beforeID = $rowClass['maxID'];
	echo "<br />El Seminar ID before hand:".$beforeID."<br />";
	/// Insert DB
$insertSem = $db->dbQuery("INSERT INTO seminars( seminarID , date, title1, text1, 
text2, text_br, title3, image3, text3, title4 , image4, text4, creationDate )
VALUES (NULL , '$date', '$title1', '$text1', '$text2', '$text_br', '$title3', '$image3', '$text3', 
'$title4', '$image4', '$text4', NOW())");
////////////////////////////
		//Select MaxID After Insert New Newsletter
	$queryClass = $db->dbQuery("SELECT MAX(seminarID) AS maxID FROM seminars");
	$rowClass = $db->fetch_array($queryClass);
	$afterID = $rowClass['maxID'];
	if ($beforeID == $afterID) { 	
			echo "Record not Inserted!!! Please Check the values entered.<br \><br \>";
			echo "<a href=".$_SERVER['PHP_SELF'].">Try Again => Go back to create Seminar</a><br \><br \>";
	} 
////////////////////////////
?>