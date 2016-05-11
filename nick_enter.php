<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>
<?
require_once('db.php');

$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 


$nick_val=htmlspecialchars($_POST['nick_value']);
$u_id=htmlspecialchars($_COOKIE['uid']);
if($u_id==""){exit("Lütfen qupoo.com 'a giriş yapınız");}else{}
if($nick_val==""){exit("Lütfen bir kullanıcı adı seçiniz");}else{}

$sorgu3 = mysql_query("SELECT * FROM users WHERE user_nick='$nick_val'");
$sonuc3 = mysql_num_rows($sorgu3);
if($sonuc3==0){}else{ exit("Bu kullanıcı adı maalesef kullanımda");  }


$sorgu=mysql_query("UPDATE users SET  user_nick='$nick_val' WHERE user_id='$u_id'",$db);
if($sorgu==1){
exit("İşlem başarılı.Kullanıcı adın <span style='color:#f00'>".$nick_val."</span> ile</br>güncellendi");
}else{echo "Bir hata meydana geldi...";
	
	}
	
	

	
	



?>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>