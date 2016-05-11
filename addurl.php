<?
require_once('db.php');

$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 

$url1=htmlspecialchars($_POST['site_url']);
$siteadi=htmlspecialchars($_POST['site_name']);
$uid=htmlspecialchars($_COOKIE['uid']);
if($uid==""){exit("Lütfen giriş yapınız");}else{}
if($url1==""||$siteadi==""){echo '<h1 style="line-height:300px;">Boş yer kalamaz..</h1>';die();}

if(strstr($url1, "http")){$url=$url1;}else{$url="http://".$url1;}


$sorguson=mysql_query("INSERT INTO  `qupoo_db`.`sites_all` (`site_id` ,`site_url` ,`site_image` ,`site_table_name`  ,`site_name`)VALUES (NULL ,'$url','your_website.png','','$siteadi');",$db);
if($sorguson==0){ echo "<h1>bir problemle karşılaşıldı</h1>";die();}
	
		

$query=mysql_query("SELECT site_id FROM `sites_all` WHERE `site_name`='$siteadi' ORDER BY  `site_id` DESC "); 
$result = mysql_fetch_assoc($query); 




$site_id=$result['site_id'];
for($a=1;$a<12;$a++){
	$sorgu=mysql_query("SELECT * FROM memberships WHERE user_id='$uid'",$db);
	
	while($row=mysql_fetch_array($sorgu)){
	$id=$row['site'.$a.'_id'];
	if($site_id==$id){
	echo"Bu site zaten var";
	die();
	
	}
	}}
	
	for($x=1;$x<12;$x++){
	$sorgu1=mysql_query("SELECT * FROM memberships WHERE user_id='$uid'",$db);
	while($row1=mysql_fetch_array($sorgu1)){
	$site1=$row1['site'.$x.'_id'];
	$site_row='site'.$x.'_id';
	if($site1==0){
	$sorgu=mysql_query("UPDATE memberships SET  $site_row='$site_id' WHERE user_id='$uid'",$db);
	echo "<h1 style='line-height:300px;'>kayıt yapıldı...</h1>";
	die();
		
		}}}
		echo "<h1 style='line-height:150px;font-size:35px;'>Bir adet qupoo'nuzu kaldırmalısınız</h1>";



?>

<?php
	if(isset($db)){
		mysql_close($db);
	}
?>