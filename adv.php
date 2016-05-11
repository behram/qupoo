<?php
require_once('db.php'); 

$mail=htmlspecialchars($_POST['mail']);
$tel=htmlspecialchars($_POST['tel']);
$fsah=htmlspecialchars($_POST['fsah']);
$fik_aci=htmlspecialchars($_POST['fik_aci']);

if(filter_var($mail,FILTER_VALIDATE_EMAIL)){}else{ exit("Geçerli bir mail adresi girer misin."); } 

if($tel==""){exit("Lütfen geçerli bir Telefon kullan.");}

if($fsah==""){exit("Lütfen geçerli bir Firma / Şahıs Adı kullan");}

if(strlen($fik_aci)<30){exit("Fikrini daha uzunca açıklarsan seni daha iyi anlayabiliriz.");}


$sor=mysql_query("INSERT INTO `adv` VALUES (NULL,'$mail', '$tel', '$fsah', '$fik_aci');");

if($sor){echo "İsteğin başarıyla kaydedildi. Gerekli bilgiler 24 saat içinde e-posta adresine iletilecek. Kontrol etmeyi unutma.";}


?>