<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>
<?
require('db.php'); 
$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 

$uid=htmlspecialchars($_COOKIE['uid']);
$site_issue=htmlspecialchars($_POST['site_issue']);
$user_name=htmlspecialchars($_POST['name_email']);
$user_pass=htmlspecialchars($_POST['pass']);
$extra_info=htmlspecialchars($_POST['extra_info']);
setlocale(LC_TIME,'tr_TR','tr','turkish');
$time=strftime("%A,%d %B %Y")."\n";
$ip=$_SERVER['REMOTE_ADDR'];

$sorgu=mysql_query("INSERT INTO  `qupoo_db`.`users_extra_memberships` (`user_id` ,`site_issue` ,`mail_uname` ,`pass` ,`extra` ,`extramem_id`)
															    VALUES ('$uid',  '$site_issue',  '$user_name',  '$user_pass',  '$extra_info', NULL);");
if($sorgu==1){
$mem_all=mysql_query("INSERT INTO  `qupoo_db`.`all_memberships` (`user_id` ,`memberships_id` ,`user_name` ,`user_pass` ,`extra` ,`user_ip` ,`member_save_time` ,`site_name`)
																	VALUES ('$uid', NULL ,  '$user_name',  '$user_pass',  '$extra_info',  '$ip','$time',  '$site_issue');",$db);
	if($mem_all==1){
	echo "Üyelik bilgileriniz güvenli bir şekilde eklendi";
	}else{
		
		exit("Bir hata meydana geldi;");
		}
	
	}

?>