
<? require('db.php'); ?>
<?
$issu=htmlspecialchars($_POST['issu']);
$mail=htmlspecialchars($_POST['mail']);
$nasur=htmlspecialchars($_POST['nasur']);
$is_acik=htmlspecialchars($_POST['is_acik']);

if(isset($issu)&&$mail&&$nasur&&$is_acik){}else{exit("Lütfen formda boş alan bırakmayınız...");}


if(filter_var($mail,FILTER_VALIDATE_EMAIL)){}else{echo 'Lütfen geçerli bir email adresi giriniz';exit;}

if($nasur==""){exit("Lütfen geçerli bir isim kullan");}
if(ereg("[0-9]",$nasur)) {exit("Lütfen geçerli bir isim kullan");}
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $nasur)){exit("Lütfen geçerli bir isim kullan");}



if(strlen($is_acik)<30){exit("Sorununu daha uzunca açıklarsan seni daha iyi anlayabiliriz.");}



$sorgu=mysql_query("INSERT INTO askme(issue,email,expanded,nam_sur) VALUES('$issu','$mail','$is_acik','$nasur')");
if($sorgu==1){exit("Destek talebin kaydedildi.24 saat içinde bilgi gönderilecek. E-posta adresinizi kontrol etmeyi unutma.");}
?>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>