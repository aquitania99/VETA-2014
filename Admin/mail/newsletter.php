<?php
//require('Connections/greenNewsletter.php');
/*
mysql_select_db($database_greenlight, $greenlight);
$events_array = array();
$query_staticInfo = "SELECT ne_title, ne_detail, ne_date FROM newsevents where ne_flag = 'e' ORDER BY id desc LIMIT 0, 30";
$staticInfo = mysql_query($query_staticInfo, $greenlight) or die(mysql_error());
$row_staticInfo = mysql_fetch_assoc($staticInfo);
*/
///////////////////////////////////////////////////////////////////////////////////////////////////
mysql_select_db($database_greenlight, $greenlight);
$result_array = array();
$query_newsLetter = "SELECT * FROM newsletter";
$newsLetter = mysql_query($query_newsLetter, $greenlight) or die(mysql_error());
//$row_newsLetter = mysql_fetch_assoc($newsLetter);
//////////// Creamos El Array Mientras Hayan Datos //////////////////////////////
while ($row = mysql_fetch_array($newsLetter)) {
     $result_array[] = $row;
//print_r ($row); Confirma los datos que traemos en el array.
}
////// First Array //////////
$id = $result_array[0][0];
$title = $result_array[0][1];
$detail = $result_array[0][2];
$image = $result_array[0][3];
$link = $result_array[0][4];
$date = $result_array[0][5];
$volEdit = $result_array[0][6];
////// Second Array //////////
$id2 = $result_array[1][0];
$title2 = $result_array[1][1];
$detail2 = $result_array[1][2];
$image2 = $result_array[1][3];
$link2 = $result_array[1][4];
$date2 = $result_array[1][5];
$volEdit2 = $result_array[1][6];
////// Third Array //////////
$id3 = $result_array[2][0];
$title3 = $result_array[2][1];
$detail3 = $result_array[2][2];
$image3 = $result_array[2][3];
$link3 = $result_array[2][4];
$date3 = $result_array[2][5];
$volEdit3 = $result_array[2][6];
////// Fourth Array //////////
$id4 = $result_array[3][0];
$title4 = $result_array[3][1];
$detail4 = $result_array[3][2];
$image4 = $result_array[3][3];
$link4 = $result_array[3][4];
$date4 = $result_array[3][5];
$volEdit4 = $result_array[3][6];
////// End Arrays //////////
?>
<?php
////// Verificacion De Resultados //////
/*
////// Echo Results //////////
echo $id."<br>";
echo $title."<br>";
echo $detail."<br>";
echo $image."<br>";
echo $link."<br>";
echo $date."<br>";
echo $volEdit."<br>";
echo "////////////////////////<br>";
echo $id2."<br>";
echo $title2."<br>";
echo $detail2."<br>";
echo $image2."<br>";
echo $link2."<br>";
echo $date2."<br>";
echo $volEdit2."<br>";
echo "////////////////////////<br>";
echo $id3."<br>";
echo $title3."<br>";
echo $detail3."<br>";
echo $image3."<br>";
echo $link3."<br>";
echo $date3."<br>";
echo $volEdit3."<br>";
echo "////////////////////////<br>";
echo $id4."<br>";
echo $title4."<br>";
echo $detail4."<br>";
echo $image4."<br>";
echo $link4."<br>";
echo $date4."<br>";
echo $volEdit4."<br>";
*/
?>