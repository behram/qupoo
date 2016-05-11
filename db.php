<?php
$db = mysql_connect('localhost','qupoo','Qupoo123');
if(!$db){
die('Sunucu kapalı ya da hesap bilgileri yanlış');}
mysql_select_db('qupoo_db') or die('Veritabanı yok');
mysql_query("SET NAMES 'utf8'");

$_POST=array_map('htmlspecialchars',$_POST);
$_GET=array_map('htmlspecialchars',$_GET);
$_POST=array_map('mysql_real_escape_string',$_POST);
$_GET=array_map('mysql_real_escape_string',$_GET);


?>