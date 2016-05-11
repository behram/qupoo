<? ob_start(); ?> 
<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>

<?
require_once('db.php');

$uid_h=$_COOKIE['uid'];$email_h=$_COOKIE['umail'];$pass_h=$_COOKIE['upass'];$image_h=$_COOKIE['uresim']; 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 

$u_image=htmlspecialchars($_POST['res_guncelle']);
$u_id=htmlspecialchars($_COOKIE['uid']);
if($u_id==""){exit("Lütfen qupoo.com 'a giriş yapınız");}else{}
if($u_image==""){exit("Lütfen bir resim giriniz");}else{}


$sorgu=mysql_query("UPDATE users SET  user_image='$u_image' WHERE user_id='$u_id'",$db);
if($sorgu==1){
setcookie("uresim",$u_image,time()+86400);
exit("Resminiz başarı ile güncellenmiştir...");
}else{
	
	
echo "Bir hata meydana geldi...";
	
	}
	
	

	
	



?>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
<? ob_end_flush(); ?> 