<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>

<?
require('db.php'); 


$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldiiiiiiiiiii");} 


$uid=htmlspecialchars($_COOKIE['uid']);

$name=htmlspecialchars($_POST['tname']);
$mail_uname=htmlspecialchars($_POST['mail_unameupd']);
$pass=htmlspecialchars($_POST['passupd']);
$extraupd=htmlspecialchars($_POST['extraupd']);


$sorgu=mysql_query("UPDATE  `qupoo_db`.`$name` SET  
`user_email` =  '$mail_uname',
`user_password` =  '$pass',
`user_extra_information` =  '$extraupd' 
WHERE  `$name`.`user_id` =$uid LIMIT 1 ;");

if($sorgu==1){
	exit("Bilgileriniz güvenli bir şekilde güncellendi");
	
	}else{
		exit("Bir hata meydana geldi");
		
		}



?>