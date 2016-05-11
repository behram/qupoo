<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>

<?
require_once('db.php');


$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");} 

 
$site_id=htmlspecialchars($_POST['site_id']);
$uid=htmlspecialchars($_COOKIE['uid']);
if($uid==""){exit("Lütfen giriş yapınız veya çerez fonksiyonunu açınız...");}else{}
for($a=1;$a<12;$a++){
	$sorgu=mysql_query("SELECT * FROM memberships WHERE user_id='$uid'",$db);
	
	while($row=mysql_fetch_array($sorgu)){
	$id=$row['site'.$a.'_id'];
	if($site_id==$id){
	echo"<div style='line-height:80px;font-size:45px;'>Bu site zaten var</div>";
	die();
	
	}
	}}
		$sorgu6=mysql_query("SELECT * FROM sites_all WHERE site_id='$site_id'",$db);
		while($row3=mysql_fetch_array($sorgu6)){
			$id3=$row3['entry_say'];
			$id3=$id3+1;
			
			$sorgu7=mysql_query("UPDATE sites_all SET  entry_say='$id3' WHERE site_id='$site_id'",$db);
			if($sorgu7==1){}
			}
	
	for($x=1;$x<12;$x++){
	$sorgu1=mysql_query("SELECT * FROM memberships WHERE user_id='$uid'",$db);
	while($row1=mysql_fetch_array($sorgu1)){
	$site1=$row1['site'.$x.'_id'];
	$site_row='site'.$x.'_id';
	if($site1==0){
	$sorgu=mysql_query("UPDATE memberships SET  $site_row='$site_id' WHERE user_id='$uid'",$db);
	echo "<div style='line-height:80px;font-size:45px;'>kayit yapildi...</div>";
	die();
		
		}}}
		echo "<div style='line-height:80px;font-size:45px;'>maalesef site sayınız dolmuş :(</div>";
		?>
   
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>