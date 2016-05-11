<?php 
$db = mysql_connect('localhost','qupoo','Qupoo123');
if(!$db){
die('Sunucu kapalı ya da hesap bilgileri yanlış');}
mysql_select_db('qupoo_db') or die('Veritabanı yok');
mysql_query("SET NAMES 'utf8'");


?>