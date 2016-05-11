<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>
<?
require_once('db.php');


$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 


$s_uname=htmlspecialchars($_POST['uname']);
$uid=htmlspecialchars($_COOKIE['uid']);
$site_tname=htmlspecialchars($_POST['site_tname']);
if($uid==""){exit("Lütfen qupoo.com 'a giriş yapınız");}else{}

if($s_uname==""){exit("Kullanıcı adı giriniz");}



$sorguson=mysql_query("INSERT INTO  `qupoo_db`.`$site_tname` (`user_id` ,`user_email` ,`user_password` ,`user_extra_information`)VALUES ('$uid','$s_uname','','');",$db);

if($sorguson==1){
	$ip=$_SERVER['REMOTE_ADDR'];
	
	$query_siteid = mysql_query("SELECT site_id FROM `sites_all` WHERE `site_table_name`='$site_tname'"); 
			$result_siteid = mysql_fetch_assoc($query_siteid); 
			$site_id=$result_siteid['site_id'];
			
	setlocale(LC_TIME,'tr_TR','tr','turkish');$time=strftime("%A,%d %B %Y")."\n";
	
	for($a=1;$a<50;$a++){
		
		$query_all = mysql_query("SELECT `$a` FROM `users_all_memberships` WHERE `user_id`='$uid'"); 
		$result_all = mysql_fetch_assoc($query_all); 
		$sira=$result_all[$a]; 
		
		if($sira==0){$sorgu_upd=mysql_query("UPDATE  `qupoo_db`.`users_all_memberships` SET  `$a` =  '$site_id' WHERE  `users_all_memberships`.`user_id` =$uid LIMIT 1 ;",$db);
		if($sorgu_upd==1){
			$mem_all=mysql_query("INSERT INTO  `qupoo_db`.`all_memberships` (`user_id` ,`memberships_id` ,`user_name` ,`user_pass` ,`extra` ,`user_ip` ,`member_save_time` ,`site_name`)
																	VALUES ('$uid', NULL ,  '$s_uname',  '',  '',  '$ip','$time',  '$site_tname');",$db);
			if($mem_all==1){ exit("işlem başarılı");
			
			
			}else{ exit("bir hata var");}
			
			
			}else{echo "Bir hata meydanda"; } 
			}
			}
			}else{
				
				
	exit("Kaydınız zaten mevcut.");	
		
		
		
		}


?><?php
	if(isset($db)){
		mysql_close($db);
	}
?>