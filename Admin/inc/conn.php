<?php
$user = 'auau2012_admindb';
$pass = 'Proz@c01';
$db = 'auau2012_veta';
$table = 'persons';
$file = 'veta_clients';

$link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());
mysql_select_db($db) or die("Can not connect.");
?>