<?php
$user = 'austravn_admindb';
$pass = 'pass@word01';
$db = 'austravn_veta';
$table = 'persons';
$promo = 'Seminario-Bogota-Marzo-2013';
$link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());
mysql_select_db($db) or die("Can not connect.");
?>