<? $bot=$_SERVER['HTTP_REFERER'];if(strpos($bot,"qupoo.com")){}else{ header("Location:hata.php");} ?>
<?

require_once('db.php');
for($x=0;$x<10;$x++){
$sorgu=mysql_query("SELECT * FROM sites_e_mail WHERE site_order_e_mail='$x'",$db);
while($row=mysql_fetch_array($sorgu)){
	$id=$row['site_id'];

$aca=mysql_query("SELECT * FROM sites_all WHERE site_id='$id'");
while($row1=mysql_fetch_array($aca)){
	$acason=$row1['site_image'];
	$yonson=$row1['site_url'];
	$ad2=$row1['site_name'];
	
	
echo'
<div class="q_kas_qupoo">

<div class="info" id="'.$id.'" title="site hakkında">i</div>

<a target="_blank" href="'.$yonson.'"><div class="info" style="left:20px;bottom:30px;background-image:url(small_icons/193-location-arrow.png);" title="siteye git"></div></a>

<div class="info"  style="background-image:url(small_icons/12-eye.png);left:77px;top:2px;" title="site adı"><div class="gor">'.$ad2.'</div></div>

<a target="_blank" href="'.$yonson.'"><img src="images/'.$acason.'" /></a>

</div>';
echo '<script>
$("#'.$id.'").click(function(){
	$.ajax({
		url:"info.php",
		type:"POST",
		data:{site_id:"'.$id.'"},
		dataType:"html",
		cache:false,
		success:function(cevap){$(".q_sonuc_yaz").html(cevap);}
	});
	});
</script>';
}}}



?>