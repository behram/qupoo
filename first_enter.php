<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{header("Location:hata.php");}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
body{-webkit-user-select:none;}
.fenter_fscreen{position:absolute;width:100%;height:100%;top:0px;left:0px;background:rgba(100,100,100,0.5);}
.fenter_ort{position:relative;width:700px;height:400px;background:rgb(0,200,255);margin-left:auto;margin-right:auto;margin-top:10%;border-radius:10px;
box-shadow: 0 0px 20px 5px rgba(0,0,0,0.5);
overflow:hidden;}
.ort_acik{position:absolute;bottom:0px;left:0px;height:280px;width:5600px;}
.ort_kyuv{width:100px;height:100px;background:#0F0;float:left;margin-left:-15px;border-radius:50px;margin-top:2px;font-family:Helvetica, sans-serif;text-align:center;vertical-align:middle;
color:#FFF;opacity:1;-webkit-transition:color 1s ease-out;box-shadow:3px 3px 2px rgba(0,0,0,0.5);}
.acik_kay{width:700px;height:100%;float:left;position:relative;}
.acik_kap{position:absolute;bottom:10px;right:3px;width:100px;height:30px;border-radius:1px;background:#0F0;box-shadow: 0px 1px 10px 0px #fff inset;text-align:center;
font-family:Arial, Helvetica, sans-serif;font-weight:600;line-height:30px;opacity:0;color:white;cursor:pointer;}
.acik_kap:hover{box-shadow: 0px 1px 10px 0px #fff;}
.acik_kay ul{margin-left:250px;margin-top:10px;margin-right:30px;}
.acik_kay li{font-size:25px;font-family:"Lucida Grande", sans-serif;list-style-image:url(fenter_images/check.png);line-height:32px;color:#FFF;-webkit-user-select:;}
</style>
<script>
$(document).ready(function() {
$('.acik_kap:eq(0)').click(function(event){$('.ort_kyuv:not(.ort_kyuv:eq(1))').animate({opacity:0.05}, 350 );$('.ort_kyuv').css("color","#F0F");$(this).animate({right:-697}, 350 );$('.acik_kay:eq(0)').animate({marginLeft:-700}, 350 )})
$('.acik_kap:eq(1)').click(function(event){$(".ort_kyuv:eq(2)").animate({opacity:"1"},350);$(".ort_kyuv:eq(1)").css("opacity","0.05");$(this).animate({right:-697}, 350 );$('.acik_kay:eq(1)').animate({marginLeft:-700}, 350 )})
$('.acik_kap:eq(2)').click(function(event){$(".ort_kyuv:eq(3)").animate({opacity:"1"},350);$(".ort_kyuv:eq(2)").css("opacity","0.05");$(this).animate({right:-697}, 350 );$('.acik_kay:eq(2)').animate({marginLeft:-700}, 350 )})
$('.acik_kap:eq(3)').click(function(event){$(".ort_kyuv:eq(4)").animate({opacity:"1"},350);$(".ort_kyuv:eq(3)").css("opacity","0.05");$(this).animate({right:-697}, 350 );$('.acik_kay:eq(3)').animate({marginLeft:-700}, 350 )})
$('.acik_kap:eq(4)').click(function(event){$(".ort_kyuv:eq(5)").animate({opacity:"1"},350);$(".ort_kyuv:eq(4)").css("opacity","0.05");$(this).animate({right:-697}, 350 );$('.acik_kay:eq(4)').animate({marginLeft:-700}, 350 )})
$('.acik_kap:eq(5)').click(function(event){$(".ort_kyuv:eq(6)").animate({opacity:"1"},350);$(".ort_kyuv:eq(5)").css("opacity","0.05");$(this).animate({right:-697}, 350 );$('.acik_kay:eq(5)').animate({marginLeft:-700}, 350 )})
$('.acik_kap:eq(6)').click(function(event){$(".ort_kyuv:eq(7)").animate({opacity:"1"},350);$(".ort_kyuv:eq(6)").css("opacity","0.05");$(this).animate({right:-697}, 350 );$('.acik_kay:eq(6)').animate({marginLeft:-700}, 350 )})
$('.acik_kap:eq(7)').click(function(event){$.ajax({type: 'POST',url: 'fenter_01.php',data:{site:1}});$("#fenter").fadeOut();
})
;})
</script>
<body>
<div class="fenter_fscreen">
<div class="fenter_ort">
<div class="ort_kyuv" style="margin-left:2px;opacity:1;color:#F0F;"><h2>kayıt</br>giriş</h2></div>
<div class="ort_kyuv"><h2>qupoo</br>ekleme</h2></div>
<div class="ort_kyuv"><h2>qupoo</br>kaşif</h2></div>
<div class="ort_kyuv"><h2>üyelik</br>ekle</h2></div>
<div class="ort_kyuv"><h2>siteye</br>git</h2></div>
<div class="ort_kyuv"><h2>qupoo</br>kaldır</h2></div>
<div class="ort_kyuv"><h2>profil</br>ayarlar</h2></div>
<div class="ort_kyuv"><h2>qupoo</br>yardım</h2></div>
<div class="ort_acik" >
<div class="acik_kay" id="b1">
<img src="fenter_images/fenter_1.png" style="margin:10px;float:left"/>
<ul>
<li>Güvenli bir şekilde kayıt ve giriş işlemlerini qupoo.com'un yukarı <img src="small_icons/top.png" width="40" /> butonuna tıklayarak. Üst bölümünden yapabilirsin.</li>
</ul>
<div class="acik_kap" style="opacity:1;">Devam...</div>
</div>
<div class="acik_kay" id="b2">
<img src="fenter_images/fenter_2.png" style="margin:10px;float:left"/>
<ul>
<li>İstediğiniz herhangi bir websiteyi yani qupoo yu eklemek için ekle <img src="small_icons/ekle2.png" /> butonu üzerine gelin,</li>
<li>Eğer ki URL ekleyecekseniz URL'ye,</li>
<li>qupooKaşif'ten ise KAŞİF'e tıklayın</li>
</ul>
<div class="acik_kap">Devam...</div>
</div>
<div class="acik_kay">
<img src="fenter_images/fenter_3.png" style="margin:10px;float:left"/>
<ul>
<li><img src="small_icons/prev.png" height="30"/> ikonuna tıklayarak,</li>
<li>Bulunduğunuz bölgedeki en çok kullanılan websiteler,</li>
<li>Size uygun öneriler,</li>
<li>qupooKaşif'ten qupoo'slarınıza sitelerinizi buradan da ekleyebilirsiniz</li>
</ul>
<div class="acik_kap" >Devam...</div>
</div>
<div class="acik_kay">
<img src="fenter_images/fenter_4.png" style="margin:10px;float:left"/>
<ul>
<li>Herhangi bir üyelik sistemi bulunan qupoo'ya <img src="small_icons/user.png" /> ikonuna tıklayarak,</li>
<li>Kullanıcı ekleyebilir,</li>
<li>Çok daha hızlı sörfe başlayabilirsin</li>
</ul>
<div class="acik_kap" >Devam...</div>
</div>
<div class="acik_kay">
<img src="fenter_images/fenter_5.png" style="margin:10px;float:left"/>
<ul>
<li>qupoo.com ile qupoos'larınızdaki bir qupoo ya tıklayarak,</li>
<li>Sadece şifrenizi yazarak hızlı bir şekilde giriş yapabilir,</li>
<li>Ayrıca <img src="small_icons/193-location-arrow.png" /> ikonuna tıklayarak sadece gidebilirsin</li>
</ul>
<div class="acik_kap">Devam...</div>
</div>
<div class="acik_kay" >
<img src="fenter_images/fenter_6.png" style="margin:10px;float:left"/>
<ul>
<li>Hoşunuza gitmeyen ve ya sıkıldığınız qupoo'yu <img src="small_icons/remove1.png" /> ikonuna tıklayarak,</li>
<li>Kullanıcı bilgilerinle birlikte kaldırabilirsin</li>
</ul>
<div class="acik_kap">Devam...</div>
</div>
<div class="acik_kay">
<img src="fenter_images/fenter_7.png" style="margin:10px;float:left"/>
<ul>
<li>Giriş yaptıktan sonra yukarı  <img src="small_icons/top.png" width="40" /> butonuna tıklayarak,</li>
<li>Email,şifre vb. diğer işlemlerinizi buradan yapabilirsiniz</li>
</ul>
<div class="acik_kap">Devam...</div>
</div>
<div class="acik_kay">
<img src="fenter_images/fenter_8.png" style="margin:10px;float:left"/>
<ul>
<li>Simgelerin anlamlarını çözemediğinde,</li>
<li>qupoo.com a birşeyler sormak istediğinde aşağı butonuna <img src="small_icons/bottom.png" width="40"/> tıklayarak,</li>
<li>Alt bölümden sorununa çözüm bulabilirsin</li>
</ul>
<div class="acik_kap" style="opacity:1;">Tamamdır...</div>
</div>
</div>
</div>
</div>
</body>
</html>