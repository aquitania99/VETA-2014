<?php require('Connections/greenNewsletter.php');?>
<?
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); // HTTP/1.0
///////////////////////////////////////////////WHAT IF????////////////////////////////////////////////////////////////////////
$content = $_GET['content'];
$fieldname = $_GET['fieldname'];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//we get 2 vars: fieldname and content. so you get: $fieldname=$content;
//and we get the vars set in the function setVarsForm(vars). These could be used 
//to identify a user with sending userID=1 
//you also can use $_COOKIE['someID'] in the file.

//THIS UPDATES A DATABASE
//create DB connection

  mysql_select_db($database_greenlight, $greenlight);
//update from table set $fieldname = $content where userID = $_COOKIE['userID']
if ($fieldname > 0)
{
$query = "UPDATE newsletter SET nl_description = '$content'  where nl_id = $fieldname";
//echo $query."<br>";
//
$Update1 = mysql_query($query, $greenlight) or die(mysql_error());
}
if ($fieldname == 0 )
$query = "UPDATE newsletter SET $fieldname = '$content'";
//echo $query."<br>";
//
$Update1 = mysql_query($query, $greenlight) or die(mysql_error());

//echo "The Query: ".$query."<br />";

//OR

//THIS STARTS A FUNCTION
//if($_GET['fieldname'] == "userName")
//  setUserName($_GET['content']);
//if($_GET['fieldname'] == "userCity")
//  setUserCity($_GET['content']);
//
//

//OR


//THIS WRITES CONTENT TO A TEXT FILE
//$handle = fopen($_GET['fieldname'].".txt", "w+");
//fwrite($handle, stripslashes($_GET['content']));
//fclose($handle);
/*$content = $_GET['content'];
$fieldname = $_GET['fieldname'];
*/
//echo "The bloddy content: ".$content."<br>";
//echo "The bloddy Field!!: ".$fieldname."<br />";
echo stripslashes(strip_tags($_GET['content'],"<br><p><img><a><br /><strong><em>"));
?> 