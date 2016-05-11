<?
require_once("../db.php");

$uid=$_COOKIE['uid'];

$masor=mysql_query("SELECT * FROM users WHERE `user_id`='$uid'");

while($mail2 = mysql_fetch_row($masor)) { 

$mail=$mail2[1];

if(strpos($mail,"@gmail.com")){
echo $mail;

}

}


?>