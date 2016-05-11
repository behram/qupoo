<?php ob_start(); ?>
<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{ header("Location:hata.php");}?>

<?
require_once('db.php');

$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");}  


$u_email=htmlspecialchars($_POST['email']);
$u_image=htmlspecialchars($_POST['image']);
$u_id=htmlspecialchars($_COOKIE['uid']);
if($u_id==""){exit("Lütfen qupoo.com 'a giriş yapınız");}else{}

if(isset($u_email)){
	
if(filter_var($u_email,FILTER_VALIDATE_EMAIL)){
}else{
echo 'Lütfen geçerli bir email adresi giriniz...';
exit;
}
$sorgu = mysql_query("SELECT * FROM users WHERE user_email='$u_email'");
$sonuc = mysql_num_rows($sorgu);
if($sonuc==1){
	exit("Bu email zaten kullanımda...");}

$sorgu=mysql_query("UPDATE users SET  user_email='$u_email' WHERE user_id='$u_id'",$db);
if($sorgu==1){
setcookie("umail",$u_email,time()+86400);
exit("Email adresiniz <span style='color:red;'>".$u_email."</span> ile </br>güncellenmiştir...");
}else{
	
	
echo "Bir hata meydana geldi...";
	
	}
	
	
}
	


?>
<?php if(isset($db)){ mysql_close($db); }?>
<? ob_end_flush(); ?> 