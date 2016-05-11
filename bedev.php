<?php
require_once('db.php'); 
$mail=htmlspecialchars($_POST['mail']);
$nasur=htmlspecialchars($_POST['nasur']);
$pla=htmlspecialchars($_POST['pla']);
$fik_aci=htmlspecialchars($_POST['fik_aci']);

if(filter_var($mail,FILTER_VALIDATE_EMAIL)){}else{ exit("Geçerli bir mail adresi giriniz..."); } 



if($nasur==""){exit("Lütfen geçerli bir isim kullan");}
if(ereg("[0-9]",$nasur)) {exit("Lütfen geçerli bir isim kullan");}
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $nasur)){exit("Lütfen geçerli bir isim kullan");}


if($pla==""){exit("Lütfen geçerli bir platform seç");}


if(strlen($fik_aci)<50){exit("Fikrini daha uzunca açıklarsan seni daha iyi anlayabiliriz.");}


$sor=mysql_query("INSERT INTO `develop` VALUES ('$mail', '$nasur', '$pla', '$fik_aci', NULL);");

if($sor){echo "İsteğin başarıyla kaydedildi. Gerekli bilgiler 24 saat içinde e-posta adresine iletilecek. Kontrol etmeyi unutma.";}


?>