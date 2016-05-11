<? 
require_once("db.php");
$uid=htmlspecialchars($_COOKIE['uid']);
for($a=1;$a<12;$a++){
$sorgu=mysql_query("SELECT * FROM memberships WHERE user_id='$uid'",$db);
while($row=mysql_fetch_array($sorgu)){
$id=$row['site'.$a.'_id'];
	
$aca=mysql_query("SELECT * FROM sites_all WHERE site_id='$id'");
while($row1=mysql_fetch_array($aca)){
$acason=$row1['site_image'];
$site_tname=$row1['site_table_name'];
$yonson=$row1['site_url'];
$ad2=$row1['site_name'];
	if($id==0||$site_tname==""){}else{
	echo'
<div class="q_qupoos" id="'.$a.'">
<div class="ortak bilgi" style="right:8px;bottom:47px;background-image:url(small_icons/info_for_withlogin.png);" title="Site hakkında bilgi" id="'.$id.'"></div>
<a target="_blank" href="'.$yonson.'"><div class="ortak" style="left:6px;bottom:55px;background-image:url(small_icons/193-location-arrow.png);" title="Giriş yapmadan git"></div></a>
<div class="ortak user" style="left:30px;top:21px;background-image:url(small_icons/user.png);" title="Kullanıcı ekle" id="'.$site_tname.'"></div>
<div class="ortak" style="right:27px;top:23px;background-image:url(small_icons/12-eye.png);" title="site ismi"><div class="gor">'.$ad2.'</div></div>
<div class="ortak remove" style="left:80px;bottom:2px;background-image:url(small_icons/remove1.png);" title="qupoo\'s u kaldır"></div>
<a target="_blank" href="webs_go/'.$site_tname.'.php"><img src="images/'.$acason.'" /></a>
</div>';} 

	if($site_tname==""&&$id>0){
		echo'
<div class="q_qupoos" id="'.$a.'">
<div class="ortak bilgi" style="right:20px;bottom:30px;background-image:url(small_icons/info_for_withlogin.png);" title="Site hakkında bilgi" id="'.$id.'"></div>
<div class="ortak" style="left:77px;top:2px;background-image:url(small_icons/12-eye.png);" title="site ismi"><div class="gor">'.$ad2.'</div></div>
<div class="ortak remove" style="left:20px;bottom:30px;background-image:url(small_icons/remove1.png);" title="qupoo\'s u kaldır"></div>
<a target="_blank" href="'.$yonson.'"><img src="images/'.$acason.'" /></a>
</div>';
}else{}
}}}?>
<div class="q_qupoos out_qupoos" style="background-image:url(images/ekle2.png) !important;"><div class="yarim" id="sol_yarim">KAŞİF</div><div class="yarim" id="sag_yarim" style="right:0px;border-radius:0px 100px 100px 0px;">URL</div></div>