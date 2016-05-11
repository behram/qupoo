<?php ob_start(); ?>
<? 
require_once('db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$sorgu=mysql_query("UPDATE users SET  home_page='1' WHERE user_id='$uid'",$db);
	 ?>
<? $read=$_SERVER['HTTP_USER_AGENT'];$msie=strpos($read,'MSIE 8.0')? header("Location:tarayici.php"):"";$msie=strpos($read,"MSIE")? true: false;$moz=strpos($read,"Firefox")? true: false;$chrome=strpos($read,"Chrome")? true: false; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	font-weight:300;

	
	}
.ustdiv{position:absolute;width:100%;background-color:rgba(0,200,255,1);height:100px;z-index:9;-webkit-box-shadow:0px 0px 10px 3px #000;-ms-box-shadow:0px 0px 10px 3px #000;box-shadow:0px 0px 10px 3px #000;top:0px;left:0px;text-align:center;color:#fff;}
.ort_div{position:relative;width:1000px;background:rgba(240,240,240,1);margin-left:auto;margin-right:auto;margin-top:100px;height:680px;}
ul{font-weight:100px;line-height:40px;color:#333;}
li{font-size:23px;list-style-type:decimal;margin-top:20px;}
.mini:hover .max{display:block;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="qupoo,qupoo.com,site bul,site keşfet,şifre sakla,üye ol,bilgi sakla,qupooKaşif,passtore,password,username,membership,üyelik,websiteler,anasayfa,eniyi siteler,siteler,qupoo passtore,hız,sörf,sosyal ağ,sosyal siteler" />
<meta name="description" content="qupoo mükemmel bir anasayfa uygulamasıdır.Buradan üyelik girişlerinizi yapabilir.Bilgilerinizi güvenle saklayabilir.qupooKaşif ile hiç bilmediğiniz siteleri keşfedebilir.Hızlı sörfün tadını çıkarırsınız." />
<link rel="shortcut icon" href="small_icons/qupoo_meta.gif">
<meta name="rating" content="All" /> 
<meta name="robots" content="index, follow" />
<title>qupoo-Anasayfam Yap</title>
<script src="js/jquery.min.js"></script>
</head> 
<body>



<div class="ustdiv"><h1 style="font-size:50px;line-height:30px;">Anasayfa için Eniyisi</h1>
</div><img src="qupoo_logo_go/qupooo_logo4.png" style="position:fixed;z-index:9;left:0px;top:0px;"/>


<div class="ort_div">
<? if(strpos($read,"Firefox")){
	echo '<center><h1 style="color:rgb(50,50,50)">Tarayıcınız <img src="small_icons/mini_ok.png" style="margin-bottom:10px;"/><span style="font-size:46px;color:red;"> Firefox</span></h1></center>
<ul>
<li>Tarayıcı ayarlarına girin: <span style="color:#60F;">Araçlar</span> (panel gizli ise </br>
Alt tuşuna basın) <img src="small_icons/mini_ok.png" style="margin-bottom:5px;"/> <span style="color:#60F;">Seçenekler</span></li>
<li><span style="color:#60F;">Genel</span> bölümünde:</br>
Firefox açıldığında <img src="small_icons/mini_ok.png" style="margin-bottom:5px;"/> Giriş sayfamı göster</li>
<li>Giriş sayfası alanına <span style="color:#60f;">http://qupoo.com</span> yazın</li>
<li><span style="color:#60F;">Tamam</span>\'a tıklayın</li>
</ul>
<img src="images/mini_firefox.png" style="position:absolute;top:100px;right:50px;border:#30F 2px dashed;" class="mini"/>
<img src="images/secenekler_firefox.png"  class="max" style="border:#30F 2px dashed;position:absolute;top:100px;right:306px;display:none;"/>';}
if(strpos($read,"Chrome")){
	echo '<center><h1 style="color:rgb(50,50,50)">Tarayıcınız <img src="small_icons/mini_ok.png" style="margin-bottom:10px;"/><span style="font-size:46px;color:red;"> Chromium</span> bazlı</h1></center>
<ul>
<li>Tarayıcı ayarlarına girin: <img src="small_icons/setting_chrome.png" style="margin-bottom:0px;"/> <img src="small_icons/mini_ok.png" style="margin-bottom:5px;"/> <span style="color:#60F;">Ayarlar</span></li>
<li><span style="color:#60F">Başlangıç</span> <img src="small_icons/mini_ok.png" style="margin-bottom:5px;"/> <span style="color:#60F">Belirli bir sayfayı veya sayfaları aç</span></li>
<li><span style="color:#60F;">Sayfaları ayarla</span> tıklayın  <span style="color:#60F;">Yeni sayfa ekle</span></br> alanına <span style="color:#60F;">http://qupoo.com</span> yazın</li>
<li><span style="color:#60F;">Tamam</span>\'a tıklayın</li>
</ul>
<img src="images/chrome_mini.png" style="position:absolute;top:100px;right:35px;border:#30F 2px dashed;" class="mini"/>
<img src="images/chrome_max.png"  class="max" style="border:#30F 2px dashed;position:absolute;top:100px;right:250px;display:none;"/>';
}
if(strpos($read,"MSIE")){
	
	echo '<center><h1 style="color:rgb(50,50,50)">Tarayıcınız <img src="small_icons/mini_ok.png" style="margin-bottom:10px;"/><span style="font-size:46px;color:red;"> Internet Explorer</span></h1></center>
<ul>
<li>Tarayıcıdan <img src="small_icons/ie_tools.png" style="margin-bottom:-2px;"/><span style="color:#60F"><img src="small_icons/mini_ok.png" style="margin-bottom:5px;"/>Araçlar</span>(Alt+x)\'a girin </li>
<li><span style="color:#60F;">Internet Seçenekleri</span></li>
<li><span style="color:#60F;">Anasayfa</span> alanına <span style="color:#60F;">http://qupoo.com</span> yazın</li>
<li><span style="color:#60F;">Tamam</span>\'a tıklayın</li>
</ul>
<img src="images/ie_mini.png" style="position:absolute;top:100px;right:35px;border:#30F 2px dashed;" class="mini"/>
<img src="images/ie_max.png"  class="max" style="border:#30F 2px dashed;position:absolute;top:50px;right:300px;display:none;"/>';
	
	
	}
?>


</div>

<script>
$(document).ready(function() {
		$('.mini,.max').mouseover(function(event){$('.max').fadeIn(0);}); 
		$('.mini,.max').mouseout(function(event){$('.max').fadeOut(0);}); 
	
		;});



</script>
</body>
</html>