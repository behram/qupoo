<?php ob_start(); ?>
<? $bot=$_SERVER['HTTP_REFERER'];if(strpos($bot,"qupoo.com")){}else{ header("Location:hata.php");} ?>
<? require('db.php'); ?>
<?
$image=htmlspecialchars($_POST['resim']);
$email=htmlspecialchars($_POST['email']);
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
}else{
echo 'Geçerli bir e-posta girin';
exit;
}
if(empty($_POST['sifre'])){exit("Lütfen bir parola girin");}
$hanesay=strlen($_POST['sifre']);
if($hanesay<6){
	exit("Şifreniz en az 6 karakter içermeli");
	
	}

$pass=md5($_POST['sifre']);
$pass2=md5($_POST['sifre2']);
if($pass==$pass2){
}else{
echo 'Şifreler uyuşmuyor';
exit;
	}
	if(empty($image)){exit("Lütfen bir resim seçin");}
$sorgu=mysql_query("INSERT INTO users(user_email,user_password,user_image) VALUES('$email','$pass','$image')");
if($sorgu){
	$query = mysql_query("SELECT user_id FROM `users` WHERE `user_email`='$email'"); 
$result = mysql_fetch_assoc($query); 
$uid=$result['user_id']; 
	
$sorgu_uid=mysql_query("INSERT INTO  `qupoo_db`.`memberships` (`user_id` ,`site1_id` ,`site2_id` ,`site3_id` ,`site4_id` ,`site5_id` ,`site6_id` ,`site7_id` ,`site8_id` ,`site9_id` ,
`site10_id` ,`site11_id`
) VALUES (							'$uid',  '67',  '90',  '27',  '18',  '44',  '39',  '48',  '49',  '4',  '6',  '103');");

	if($sorgu_uid){
		
		$sorgu_uam=mysql_query("INSERT INTO  `qupoo_db`.`users_all_memberships` (`user_id`) VALUES ('$uid');");
		
	
	$query = mysql_query("SELECT user_id FROM `users` WHERE `user_email`='$email'"); 
$result = mysql_fetch_assoc($query); 
$uid=$result['user_id']; 
		setcookie("uid",$uid,time()+86400);
		setcookie("umail",$email,time()+86400);
		setcookie("upass",$pass,time()+86400);
		setcookie("uresim",$image,time()+86400);
		exit("1");
		
		
	}else{exit("bi hata meydana geldi");}
	
	
	}else{
		echo 'Bu e-posta kullanımda maalesef';
	}
	mysql_close();
?>

<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
<? ob_end_flush(); ?>