<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>
<? require('db.php'); ?>
<?

$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 



$uid=htmlspecialchars($_COOKIE['uid']);
$row_id=htmlspecialchars($_POST['row_id']);
$sorgu=mysql_query("DELETE FROM  `users_extra_memberships` WHERE  `users_extra_memberships`.`extramem_id` =$row_id AND `users_extra_memberships`.`user_id` =$uid LIMIT 1 ;");
if($sorgu==1){
	exit("Bilgileriniz güvenli bir şekilde ile silindi");}else{exit("bir hata meydana geldi");}


?>