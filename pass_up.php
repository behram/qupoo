<? ob_start(); ?> 
<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>
<?
require('db.php'); 

$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 


 
$pass_a=htmlspecialchars($_POST['pass_a']);
$pass_n=htmlspecialchars($_POST['pass_n']);
$uid=htmlspecialchars($_COOKIE['uid']);

if(isset($pass_a)&&($pass_n)){}else{exit("Lütfen boş alan bırakmayınız!");}

$hanesay=strlen($pass_n);
if($hanesay<6){
	exit("Şifreniz en az 6 karakter içermeli");
	
	}
			$pass_a=md5($pass_a);
		$pass_n=md5($pass_n);
		
		$sorgu = mysql_query("SELECT * FROM users WHERE user_password='$pass_a'  AND  user_id='$uid' ");
		$sonuc = mysql_num_rows($sorgu);
		if($sonuc==1){
			
		$sor=mysql_query("UPDATE users SET  user_password='$pass_n' WHERE user_id='$uid'",$db);
if($sor==1){
setcookie("upass",$pass_n,time()+86400);
exit("Şifreniz başarıyla güncellendi...");

}else{
	exit("Bir hata meydana geldi...");
	
	}
		
			
			}else{
			
		exit("maalesef parolanız yanlış girdiniz...");	
			}
	


?>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
<? ob_end_flush(); ?>