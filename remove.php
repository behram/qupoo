<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>

<?
require_once('db.php');


$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 


$site_id=htmlspecialchars($_POST['site_id']);
$site_row='site'.$site_id.'_id';
$uid=htmlspecialchars($_COOKIE['uid']);
if($uid==""){exit("Lütfen qupoo.com 'a giriş yapınız");}else{}
$sorgu=mysql_query("UPDATE memberships SET  $site_row='0' WHERE user_id='$uid'",$db);
if($sorgu==1){

echo "işlem tamam";
}else{
	echo "bir problem var";
	
	}?>
    
    <?php
	if(isset($db)){
		mysql_close($db);
	}
?>
      
