<? require('db.php'); ?>
<?
$bot=$_SERVER['HTTP_REFERER'];if(strpos($bot,"qupoo.com")){}else{ header("Location:hata.php");}
$issue=htmlspecialchars($_POST['issue']);
$email=htmlspecialchars($_POST['email']);
$exp=htmlspecialchars($_POST['exp']);
$uid=htmlspecialchars($_COOKIE['uid']);
if(isset($issue)&&$email&&$exp){}else{exit("Lütfen formda boş alan bırakmayınız...");}
if(filter_var($email,FILTER_VALIDATE_EMAIL)){}else{echo 'Lütfen geçerli bir email adresi giriniz...';exit;}
$sorgu=mysql_query("INSERT INTO askme(issue,email,expanded,uid) VALUES('$issue','$email','$exp','$uid')");
if($sorgu==1){exit("mesajınız iletilmiştir...teşekkürler");}
?>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>