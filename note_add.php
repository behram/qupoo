<? require_once('db.php');
$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Lütfen tekrar giriş yapın");} 

$note=htmlspecialchars($_POST['note']);
$uid=htmlspecialchars($_COOKIE['uid']);

if($note==""){exit("Lütfen bir not giriniz");}

$var_mi = mysql_query("SELECT * FROM `qupoonote_db` WHERE `qupoonote_note`='$note' AND `user_id`='$uid'");
$varmi_2 = mysql_num_rows($var_mi);




$note_add=mysql_query("INSERT INTO  `qupoo_db`.`qupoonote_db` (`note_id` ,`user_id` ,`qupoonote_note`) VALUES (NULL,  '$uid' , '$note');",$db);
$note_add2=mysql_query("INSERT INTO  `qupoo_db`.`qupoonote_db2` (`note_id` ,`user_id` ,`qupoonote_note`) VALUES (NULL,  '$uid' , '$note');",$db);
if($note_add>0){ echo "Notunuz güvenli bir şekilde eklendi";}else{exit("Bir hata meydana geldi");
}
?>

<?php
	if(isset($db)){
		mysql_close($db);
	}
?>