<? ob_start(); ?> 
<? $bot=$_SERVER['HTTP_REFERER'];if(strpos($bot,"qupoo.com")){}else{ header("Location:hata.php");} ?>
<?  require('db.php'); ?>
<?
$image=htmlspecialchars($_POST['resim']);
$email=htmlspecialchars($_POST['logmail']);
if($email==""){ echo "email veya kullanıcı adı giriniz";}


$pass=htmlspecialchars(md5($_POST['logpass']));
$sorgu = mysql_query("SELECT * FROM users WHERE user_email='$email' AND user_password='$pass' AND user_image='$image' ");
$sonuc = mysql_num_rows($sorgu);
	
	if($sonuc == 0){}else{
		$query = mysql_query("SELECT user_id FROM `users` WHERE `user_email`='$email'"); 
$result = mysql_fetch_assoc($query); 
$uid=$result['user_id']; 
		setcookie("uid",$uid,time()+432000);
		setcookie("umail",$email,time()+432000);
		setcookie("upass",$pass,time()+432000);
		setcookie("uresim",$image,time()+432000);
		$query5 = mysql_query("SELECT first_enter FROM `users` WHERE `user_id`='$uid'");
		$result5 = mysql_fetch_assoc($query5); $entry=$result5['first_enter'];
		if($entry>0){$entry=$entry+1;$sorgu7=mysql_query("UPDATE users SET  first_enter='$entry' WHERE user_id='$uid'",$db);$sorgu8=mysql_query("UPDATE users SET  open_close='1' WHERE user_id='$uid'",$db);} 
		
		exit("1");
		
	}
		$sorgu2 = mysql_query("SELECT * FROM users WHERE user_nick='$email' AND user_password='$pass' AND user_image='$image' ");
$sonuc2 = mysql_num_rows($sorgu2);
if($sonuc2==0){
		echo "email,şifre ve ya resim hatalı";	}else{
			
		$query5 = mysql_query("SELECT * FROM `users` WHERE `user_nick`='$email'"); 
$result5 = mysql_fetch_assoc($query5); 
$uid1=$result5['user_id']; 
$email_fnick=$result5['user_email']; 
		setcookie("uid",$uid1,time()+432000);
		setcookie("umail",$email_fnick,time()+432000);
		setcookie("upass",$pass,time()+432000);
		setcookie("uresim",$image,time()+432000);
		$querya = mysql_query("SELECT first_enter FROM `users` WHERE `user_id`='$uid1'");
		$resulta = mysql_fetch_assoc($querya); $entrya=$resulta['first_enter'];
		if($entrya>0){$entrya=$entrya+1;
		$sorguc=mysql_query("UPDATE users SET  first_enter='$entrya' WHERE user_id='$uid1'",$db);$sorgu9=mysql_query("UPDATE users SET  open_close='1' WHERE user_id='$uid1'",$db);}
		 
		exit("1");	
			
			}
?>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
<? ob_end_flush(); ?>