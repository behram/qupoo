<? ob_start(); ?> 
<? /* $bot=$_SERVER['HTTP_REFERER'];if(strpos($bot,"qupoo.com")){}else{ header("Location:hata.php");}*/ ?>
<?  require('db.php'); ?>
<?
$email=htmlspecialchars($_POST['log_mna']);
$pass=htmlspecialchars(md5($_POST['log_pass']));

if($email==""){ exit("Email veya kullanıcıadını unuttun");}
if($_POST['log_pass']==""){ exit("Şifreni girmeyi unuttun");}



$sorgu = mysql_query("SELECT * FROM `users` WHERE `user_email`='$email' OR `user_nick`='$email' ");
$sonuc = mysql_num_rows($sorgu);
if($sonuc){
				
				if(filter_var($email,FILTER_VALIDATE_EMAIL)){
					
					$sorgu2 = mysql_query("SELECT * FROM `users` WHERE `user_email`='$email' AND user_password='$pass'");
					$sonuc2 = mysql_num_rows($sorgu2);
					if($sonuc2){
						
									$result = mysql_fetch_assoc($sorgu2); 
									setcookie("uid",$result['user_id'],time()+432000);
									setcookie("umail",$email,time()+432000);
									setcookie("upass",$pass,time()+432000);
									setcookie("uresim",$result['user_image'],time()+432000);
												
									exit("1");
						
						
						
						
						}else{
						exit("Şifreni yanlış girdin");
						}
						}else{ 
					
					
						$sorgu3 = mysql_query("SELECT * FROM `users` WHERE `user_nick`='$email' AND user_password='$pass'");
					$sonuc3 = mysql_num_rows($sorgu3);
					if($sonuc3){
						
						
						
						
									$result3 = mysql_fetch_assoc($sorgu3); 
									setcookie("uid",$result3['user_id'],time()+432000);
									setcookie("umail",$result3['user_email'],time()+432000);
									setcookie("upass",$pass,time()+432000);
									setcookie("uresim",$result3['user_image'],time()+432000);
												
									exit("1");
						
						
						
						
						
						}else{
						exit("Şifreni yanlış girdin");
					
					} 
					} 
	
	        }else{ exit("Kullanıcıadı / Epostan hatalı");}


?>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
<? ob_end_flush(); ?>