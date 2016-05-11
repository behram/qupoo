<?  /*$bot=$_SERVER['HTTP_REFERER'];if($bot=="http://localhost/qupoo/index.php"){}else{ header("Location:hata.php");} */?>
<? require('db.php'); ?>
<?
$j_mail=htmlspecialchars($_POST['j_mail']);
$j_name=htmlspecialchars($_POST['j_name']);
$j_pass=htmlspecialchars($_POST['j_pass']);


if(filter_var($j_mail,FILTER_VALIDATE_EMAIL)){}else{ exit('Geçerli bir e-posta girmelisin');}
$mvar=mysql_query("SELECT * FROM `users` WHERE `user_email`='$j_mail'");
$mson = mysql_num_rows($mvar);
if($mson==1){ exit("E-posta adresi maalesef kullanımda");}




$unkon=mysql_query("SELECT * FROM `users` WHERE `user_nick`='$j_name'");
$unson = mysql_num_rows($unkon);
if($unson==1){ exit("Kullanıcı adın maalesef kullanımda");}
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $j_name)){exit("Kullanıcıadın sadece harf ve rakam içerebilir");}
if (preg_match('@\s+@', $j_name)) {exit('Kullanıcıadın boşluk içermemeli');}
if(strlen($j_name)<3){exit("Kullanıcıadın enaz 3 karakter olmalı");}



if($_POST['j_pass']==''){exit("Şifre girmeyi unuttun galiba");}else{}
if(strlen($_POST['j_pass'])<6){exit("Şifren en az 6 karakter olmalı");}
if($_POST['j_pass']!=$_POST['j_pass2']){exit("Girdiğin şifreler maalesef uyuşmuyor");}
$jphash=md5($_POST['j_pass']);

$sorgu=mysql_query("INSERT INTO users(user_email,user_password,user_nick,user_image) VALUES('$j_mail','$jphash','$j_name','images/user.png')");
if($sorgu){
$query = mysql_query("SELECT * FROM `users` WHERE `user_email`='$j_mail'"); 
$result = mysql_fetch_assoc($query); 
$uid=$result['user_id']; 
	
$sorgu_uid=mysql_query("INSERT INTO  `qupoo_db`.`memberships` (`user_id` ,`site1_id` ,`site2_id` ,`site3_id` ,`site4_id` ,`site5_id` ,`site6_id` ,`site7_id` ,`site8_id` ,`site9_id` ,
`site10_id` ,`site11_id`
) VALUES (							'$uid',  '67',  '90',  '27',  '18',  '44',  '39',  '48',  '49',  '4',  '6',  '103');");

	if($sorgu_uid){
		
	$sorgu_uam=mysql_query("INSERT INTO  `qupoo_db`.`users_all_memberships` (`user_id`) VALUES ('$uid');");
		
	

		setcookie("uid",$uid,time()+86400);
		setcookie("umail",$j_mail,time()+86400);
		setcookie("upass",md5($j_pass),time()+86400);
		setcookie("uresim","images/user.png",time()+86400);
		exit("1");
		
		
	}else{exit("Bir hata meydana geldi. Daha sonra tekrar deneyin.");}
	
	
	}else{
		exit("Bir hata meydana geldi. Daha sonra tekrar deneyin.");
	}
	mysql_close();
?>

<?php
	if(isset($db)){
		mysql_close($db);
	}
?>