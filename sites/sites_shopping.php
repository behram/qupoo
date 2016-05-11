<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{ exit('<a href="http://qupoo.com"><img src="404.jpg" style="position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:0;" /></a>');}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div id="gelen"></div>
<?

require_once('db.php');
for($x=0;$x<12;$x++){
$sorgu=mysql_query("SELECT * FROM sites_shopping WHERE site_order_shopping='$x'",$db);
while($row=mysql_fetch_array($sorgu)){
	$id=$row['site_id'];
	$id2=$id+300;
	
$aca=mysql_query("SELECT * FROM sites_all WHERE site_id='$id'");
while($row1=mysql_fetch_array($aca)){
	$acason=$row1['site_image'];
	$yonson=$row1['site_url'];
	$ad2=$row1['site_name'];
	
	
echo'
<div class="q_kas_qupoo">

<div class="info" id="'.$id2.'" title="site hakkında" style="background-image:url(small_icons/info_for_withlogin.png);"></div>

<a target="_blank" href="'.$yonson.'"><div class="info" style="left:25px;bottom:25px;background-image:url(small_icons/193-location-arrow.png);" title="siteye git"></div></a>

<div class="info"  style="right:25px;top:25px;background-image:url(small_icons/12-eye.png);"  title="site adı"><div class="gor">'.$ad2.'</div></div>

<a target="_blank" href="'.$yonson.'"><img src="images/'.$acason.'" /></a>

<div class="info" style="left:25px;top:25px;background-image:url(small_icons/withlogin_plus.png);" id="'.$id.'" title="qupoo\'s a ekle "></div>
</div>';

echo '<script>
$("#'.$id2.'").click(function(){
	$.ajax({
		url:"info2.php",
		type:"POST",
		data:{site_id:"'.$id2.'"},
		dataType:"html",
		cache:false,
		success:function(cevap){$(".q_sonuc_yaz").fadeIn().html(cevap);}
	});
	});
</script>';
echo '
<script>
$("#'.$id.'").click(function(){
	$.ajax({
		url:"add.php",
		type:"POST",
		data:{site_id:"'.$id.'"},
		dataType:"html",
		cache:false,
		success:function(cevap){$(".q_sonuc_yaz").fadeIn().html(cevap).delay(1000).fadeOut();}
	});
	});
</script>';


}}}
?>

<a href="site-add.php?categori=8" target="_blank"><div class="q_qupoos out_qupoos" style="background-image:url(images/ekle2.png) !important;"><div class="yarim" style="width:180px;border-radius:200px;font-family:'opensans';font-weight:100;">Site Ekle</div></div></a>



<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
</body>
</html>