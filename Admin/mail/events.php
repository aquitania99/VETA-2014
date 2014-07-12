<?php
//require('Connections/greenNewsletter.php');
mysql_select_db($database_greenlight, $greenlight);
$events_array = array();
$query_staticInfo = "SELECT ne_title, ne_detail, ne_date FROM newsevents where ne_flag = 'e' ORDER BY id desc LIMIT 0, 30";
$staticInfo = mysql_query($query_staticInfo, $greenlight) or die(mysql_error());
//////////// Creamos El Array Mientras Hayan Datos //////////////////////////////
while ($static = mysql_fetch_array($staticInfo)) {
     $static_array[] = $static;
//print_r ($static); //Confirma los datos que traemos en el array.
}
////// First Array //////////
$ne_title = $static_array[0][0];
$ne_detail = $static_array[0][1];
$ne_date = $static_array[0][2];
////// Second Array //////////
$ne_title2 = $static_array[1][0];
$ne_detail2 = $static_array[1][1];
$ne_date2 = $static_array[1][2];
/*
////// Third Array //////////
$id3 = $static_array[2][0];
$title3 = $static_array[2][1];
$detail3 = $static_array[2][2];
$image3 = $static_array[2][3];
$link3 = $static_array[2][4];
$date3 = $static_array[2][5];
$volEdit3 = $static_array[2][6];
////// Fourth Array //////////
$id4 = $static_array[3][0];
$title4 = $static_array[3][1];
$detail4 = $static_array[3][2];
$image4 = $static_array[3][3];
$link4 = $static_array[3][4];
$date4 = $static_array[3][5];
$volEdit4 = $static_array[3][6];
////// End Arrays //////////
*/
?>
<?php
/*
////// Verificacion De Resultados //////
////// Echo Results //////////
echo $ne_title."<br>";
echo $ne_date."<br>";
echo $ne_detail."<br>";
echo "<br>////////////////////////<br>";
echo $ne_title2."<br>";
echo $ne_date2."<br>";
echo $ne_detail2."<br>";
/*
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