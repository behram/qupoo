<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>
<? require('db.php'); ?>
<?

$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 


$uid=htmlspecialchars($_COOKIE['uid']);
$site_row=htmlspecialchars($_POST['row_id']);
$site_tname=htmlspecialchars($_POST['tname']);

$sira = mysql_query("DELETE FROM `$site_tname` WHERE `$site_tname`.`user_id` = $uid LIMIT 1;"); 
if($sira==1){
$sorgu_upd=mysql_query("UPDATE  `qupoo_db`.`users_all_memberships` SET  `$site_row` =  '0' WHERE  `users_all_memberships`.`user_id` =$uid LIMIT 1 ;",$db);
	exit("Bilgileriniz güvenli bir şekilde silindi");
	
	} else{
		
	exit("bir hata meydana geldi");	
		
		}


?>