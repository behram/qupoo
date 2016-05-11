<?php ob_start(); ?>
<?
$db = mysql_connect('localhost','qupoo','Qupoo123');
if(!$db){
die('Sunucu kapalı ya da hesap bilgileri yanlış');}
mysql_select_db('qupoo_db') or die('Veritabanı yok');
mysql_query("SET NAMES 'utf8'");
$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']);
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h==1){ header('Location: logged.php');}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="-h8VembAD1ugd5FBF1jTZY3wYtw-QJvKu20YxgJbkLo" />
<meta name="keywords" content="qupoo,qupoo.com,site bul,site keşfet,şifre sakla,üye ol,bilgi sakla,qupooKaşif,passtore,password,username,membership,üyelik,websiteler,anasayfa,eniyi siteler,siteler,qupoo passtore,hız,sörf,sosyal ağ,sosyal siteler" />

<meta name="description" content="qupoo.com mükemmel bir anasayfa uygulaması.Üyelik girişlerini yapabilir.Bilgilerini güvenle saklayabilir.qupooKaşif ile siteleri keşfedebilirsin." />

<link rel="shortcut icon" href="qupoo_logo_go/icon.png">
<meta name="rating" content="All" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>qupoo-Tarayıcı Alışkanlığı</title>
<style>body{margin:0px;background:url(backgrounds/bacground.jpg) !important;}body,html,h1,h2,h3,div,span,textarea,div{font-family:"opensans";font-weight:100;}a:link{text-decoration:none;}</style>
<script src="js/jquery.min.js" type="application/javascript"></script>
<link rel="Stylesheet" type="text/css" href="css/qupoo_not_com2.css" />
</head>
<body>

<div class="an_div">

<div class="aciz"></div>
<div class="k_div k_div2" id="0"><span>Kayıt - Giriş</span></div>
<div class="k_div" id="1"><span>Kullanım</span></div>
<div class="k_div" id="2"><span>Güvenlik</span></div>
<div class="k_div" id="3"><span>Servisler</span></div>
<div class="k_div" id="4"><span>SSS</span></div>
<div class="k_div" id="5"><span>Geliştirici</span></div>
<div class="k_div" id="6"><span>Bize Ulaş</span></div>
<div class="k_div" id="7"><span>Reklam</span></div>

</div>





<div class="ice" style="overflow:hidden;margin-top:80px;">


<div style="width:190px;height:190px;margin-left:-95px;bottom:-115px;background:rgba(0,200,255,0.3);" class="kg_yuv"></div>
<div style="width:170px;height:170px;margin-left:-85px;bottom:-105px;background:rgba(0,200,255,0.4)" class="kg_yuv"></div>
<div style="width:150px;height:150px;margin-left:-75px;bottom:-95px;background:rgba(0,200,255,1)" class="kg_yuv"></div>


<div style="width:110px;height:110px;left:50%;margin-left:-55px;margin-bottom:-55px;bottom:50%;background:rgba(0,200,255,0.3)" class="kg_yuv"></div>
<div style="width:90px;height:90px;margin-left:-45px;margin-bottom:-45px;bottom:50%;background:rgba(0,200,255,0.4)" class="kg_yuv"></div>
<a href="demo.php" target="_blank"><div style="width:70px;height:70px;margin-left:-35px;margin-bottom:-35px;bottom:50%;background:rgba(0,200,255,1);color: #fff;font-weight: 400;line-height: 70px;text-align: center;cursor: pointer;font-size: 21px;z-index: 99;" class="kg_yuv">Demo</div></a>






<div class="kay_div">


 <div id="loginres" class="p_res"></div>




<div class="kaa_div" >

<div style="width:100%;text-align:center;"><span class="fh_span">Oturum Aç</span></div>

<form id="loginform" method="post">
<span >E-posta / Kullanıcı Adı:</span></br>
<input type="text"  name="log_mna" id="logma"></br>
<span>Şifre:</span></br>
<input type="password" name="log_pass"></br></br>
<input type="button" value="Oturum Aç" id="log_but"></br>

<input type="checkbox" style="height:auto;width:auto;margin-right:0%;" checked><span style="margin-left:5px;font-size:14px;">Oturum Açık Kalsın?</span>
<a href="verifyemail.php" style="text-decoration:none;color:#666;"><span style="font-size:13px;margin-left:35px;text-align:right;">Şifremi unuttum</span></a>

</form>


</div>






</div>

<img src="qupoo_logo_go/qupoo.png" style="position:absolute;left:50%;margin-left:-75px;margin-top:5px;" width="150">

<div class="o_ciz"></div>



<div class="gir_div">

 <div class="p_res" id="joinres"></div>







<div class="kaa_div">

<div style="width:100%;text-align:center;"><span class="fh_span">Bize Katıl</span></div>

<form id="joinform" method="post">


<span >E-posta:</span></br>
<input type="text" name="j_mail"></br>
<span>Kullanıcıadı:</span></br>
<input type="text" name="j_name"></br>
<span>Şifre:</span></br>
<input type="password" name="j_pass"></br>
<span>Şifre Tekrar:</span></br>
<input type="password" name="j_pass2"></br></br>
<input type="button" value="qupoo'ya Katıl" id="joinb">

</form>


</div>




</div>






</div>



<div class="ice">




<div style="position:absolute;top:0px;left:0px;height:50%;width:50%;">

<h1 style="margin-left:50px;color:#333;">Neler Yapılabilir?</h1>

<h3 style="margin-left:50px;color:#333;line-height:0px;">Tek Üyelikle;</h3>

<span class="kul_span"><img src="small_icons/check2.png">Bütün üyeliklerini tek bir tıkla açabilir,</span><br>
<span class="kul_span"><img src="small_icons/check2.png" >İnternetteki sörf hızına hız katabilir,</span><br>
<span class="kul_span"><img src="small_icons/check2.png">Qkaşif ile en iyi siteleri keşfedebilir.</span><br>
<span class="kul_span"><img src="small_icons/check2.png">Qkaşif ile en iyi siteler hakkında en iyi yorumları okuyabilir.</span><br>
<span class="kul_span"><img src="small_icons/check2.png">Bütün üyeliklerin ve website adreslerini <br>
<span style="margin-left:50px;"></span>Qupoo.com da güvenle PASStore ve URLstore da saklayabilir,</span><br>
<span class="kul_span"><img src="small_icons/check2.png">Notlarını hiç unutmaz, kaybetmez ve her zaman yanında taşıyabilirsin,</span><br>
<span class="kul_span"><img src="small_icons/check2.png">Ayrıca Qnote'tan notunu istediğin ortamda tek tıkla paylaşabilir.</span><br>

</div>

<div class="gir_div" style="overflow:hidden;">
<h1 style="margin-left:50px;color:#333">Nasıl Yapılabilir?</h1>

<h3 style="margin-left:50px;color:#333;line-height:0px;">Çok Basit;</h3>
<span class="kul_span"><img src="small_icons/check2.png">Qupoo.com'a 25 sn de üye olursun,</span><br>
<span class="kul_span"><img src="small_icons/check2.png">Qkaşif'i bi göz atarsın, favori sitelerini bulursun,</span><br>
<span class="kul_span"><img src="small_icons/check2.png">Favori ve üyeliğinin olduğu siteleri Qupoos bölümüne eklersin,</span><br>
<span class="kul_span"><img src="small_icons/check2.png">Hız için üyelik bilgilerini eklersin,</span><br>
<span class="kul_span"><img src="small_icons/check2.png">PASStore'dan bilgilerini düzenlersin,</span><br>
<span class="kul_span"><img src="small_icons/check2.png">30 kat hızlı sörfe başlarsın,</span><br>
<img src="cloud.png" style="position:absolute;bottom:0px;right:-125px;" height="175">
</div>



</div>

</div>





<div class="ice">

<div class="leto">


<h1 class="ser_h" >Qupoo'da Güvenlik</h1>
<p style="margin-left:7%;margin-right:7%;">
<span style="margin-left:15px;"></span>
Qupoo.com için kullanıcıların güvenliği hat safhadadır. Bu yüzden  qupoo yazılımcıları zamanın büyük kısmını şifreleme algoritmaları geliştirmekle geçirir. Bütün bilgileriniz bu üstün şifreleme algoritmaları ile güvenli bir şekilde veritabanında korunur. Qupoo'da bütün bilgilerin kullanıcı adın ve şifrenin anahtarın olduğu bir algoritma ile yani senden başka kimsenin hiçbir şekilde çözemeyeceği bir şekilde saklanır. Diğer bölümlerden algoritmaları açıklamalarıyla deneyebilirsin.
</p>

</div>

<div class="ribo" style="right:50%;box-shadow:none">
<h1 class="ser_h">Md5</h1>
<p style="margin-left:7%;margin-right:7%;"><span style="margin-left:15px;"></span>
Qupoo kullanıcı bilgilerini MD5 algoritması ile şifreler. Bu algoritmanın özelliği çözümlenmesi teorik olarak imkânsız çıktılar üretir. Sadece kullanıcı giriş yaptığında bilgileri aynı algoritma ile şifrelenir aynı ise giriş yapılır.<a href="http://goo.gl/E94Iv" target="_blank">Detaylı bilgi</a> <br><span style="margin-left:15px;"></span>
Aşağıdaki bölümden algoritmayı deneyebilirsin.
</p>


<div class="guv_adiv">
<input type="text" style="width:300px;float:left;" class="enc" id="md5_i" placeholder="Bir metin gir">
<div id="md5_h">Yazıyı Md5 İle Şifrele</div>
<input type="text" style="width:470px;height:35px;" class="enc" id="md5_r" placeholder="Şifrelenmiş metin">
</div>


</div>


<div class="ribo" style="bottom:50%;box-shadow:none">
<h1 class="ser_h">Qhash1</h1>
<p style="margin-left:7%;margin-right:7%;"><span style="margin-left:15px;"></span>Qhash1 Qupoo çalışanları tarafından oluşturulan güçlü bir şifreleme algoritmasıdır. En önemli özelliği ise verilen bir anahtar kelimeye göre çıktı üretir. Anahtar kelimesiz çözülmesi imkansızdır. Diğer kullanıcı bilgilerin Qupoo kullanıcıadı ve şifrenin anahtarın olduğu bu algoritma ile şifrelenir.
</p>


<div class="guv_adiv">
<input type="text" style="width:300px;float:left;" class="enc" id="Qhash1_i" placeholder="Bir metin gir">
<div id="Qhash1_h">Yazıyı Qhash1 İle Şifrele</div>
<input type="text" style="width:470px;height:35px;" class="enc" id="Qhash1_r" placeholder="Şifrelenmiş metin">
</div>


</div>




<div class="ribo">
<h1 class="ser_h">Qhash2</h1>
<p style="margin-left:7%;margin-right:7%;"><span style="margin-left:15px;"></span>Qhash2 metni  çeşitli rakamlara dönüştürerek bir anahtar ile güçlü bir şekilde şifreler. Url bilgileri note bilgileri gibi bilgilerin bu algoritma ile birlikte MD5 kullanılarak saklanır.  <br><span style="margin-left:15px;"></span>
Aşağıdaki bölümden algoritmayı deneyebilirsin.

</p>


<div class="guv_adiv">
<input type="text" style="width:300px;float:left;" class="enc" id="Qhash2_i" placeholder="Bir metin gir">
<div id="Qhash2_h">Yazıyı Qhash2 İle Şifrele</div>
<input type="text" style="width:470px;height:35px;" class="enc" id="Qhash2_r" placeholder="Şifrelenmiş metin">
</div>

</div>


</div>






<div class="ice">
<div class="kay_div">

<div class="leto" style="width:100%;">

<h1 class="ser_h">URLstore</h1>

<p class="ser_p">

<img src="small_icons/check2.png">URLstore yani bu bölümde sevdiğiniz siteleri ve sayfaları qupoo's sayfanız dolduğu takdirde bir depo olarak kullanabilirsiniz.<br>
<img src="small_icons/check2.png">İstediğiniz herhangi bir websiteyi "ornek.com" olarak "+" işaretine tıklayarak ekleyebilirsiniz.<br>
<img src="small_icons/check2.png">Not ile de url için bir hatırlatma ekleyebilirsin.<br>
<img src="small_icons/check2.png">İstediğin zaman qupoo oturumun açık olduğunda tek tıkla istediğin siteye ulaşabilirsin.

</p>

</div>

<div class="leto" style="width:100%;top:50%;box-shadow:none;">


<h1 class="ser_h">Qkaşif</h1>

<p class="ser_p">

<img src="small_icons/check2.png">Bu bölümde sizden gelen ve qupoo çalışanları tarafından seçilmiş en seçkin websiteler kategorilenmiş şekilde mevcut. Kategorilerde site sıralaması soldan sağa doğru olup en çok ziyaret edilen siteler sıralamasıdır.<br>
<img src="small_icons/check2.png">Sitenin üzerine geldiğinde üç adet seçenek var bunlardan birinci "+" işaretine tıklayarak kendi Qupoo's larınıza ekleyebilirsin. <br>
<img src="small_icons/check2.png">"i" yani info butonuna tıklayarak üst bölümden 200 'ü aşkın website hakkında en iyi yorumlarla bilgi edinebilirsin.

</p>
</div>
</div>
<div class="gir_div">



<h1 class="ser_h">PASStore</h1>

<p class="ser_p">

<img src="small_icons/check2.png">PASStore yani şifre ve hesap bilgisi deposu burada Qupoo's bölümünde eklediğin kullanıcı adı ve e-postanı yeniden düzenleyebilir. <br>
<img src="small_icons/check2.png">Ayrıca bu hesaplarının şifre gibi diğer hesap ayrıntılarını ve kullandığın bütün hesap bilgilerini güvenle saklayabilirsin. Bu bilgilerin veritabanında 3 farklı şekilde şifrelenerek güvenli bir şekilde korunur. Güvenlik ile ilgili ayrıntıları Güvenlik bölümden öğrenebilirsiniz.<br>
</p>




<div class="ribo" style="width:100%;">

<h1 class="ser_h">Qnote</h1>

<p class="ser_p">

<img src="small_icons/check2.png">Bu bölümde yapacaklarınızı, aklınıza gelen bir şeyi, sevdiğiniz bir haberi veya yazıyı saklayabilirsin.<br>
<img src="small_icons/check2.png">İstediğiniz zaman istediğin yerde yeni bir not ekleyebilir, düzenleyebilir veya silebilirsin.<br>
<img src="small_icons/check2.png">En güzel yanı ise istediğin notu tek tıkla istediğin ortamda paylaşabilirsin.

</p>

</div>

</div>


</div>





<div class="ice">




<div class="o_ciz"></div>

<div class="kay_div">
<h3 style="margin-left:50px;margin-top:75px;">Qupoo'nun tablet ve telefonlar için bir uygulaması var mı?</h3>
<p style="margin:0px 50px;"> <span style="margin-left:15px;"></span>Qupoo daha iyi hizmet verebilmek için şuan notebook,masaüstü bilgisayarlar ve akıllı telefonlar için geliştirildi ancak ilerleyen dönemlerde takip edersen tablet ve telefonlar için uygulamaları çıkacaktır.</p>



<h3 style="margin-left:50px;margin-top:20px;">Qupoo'nun servislerine nasıl ulaşabilirim?</h3>
<p style="margin:0px 50px;"> <span style="margin-left:15px;"></span>
Qupoo kullanışlı ve hızlı birçok servise sahiptir. Bu servisler için Qupoo hesabına sahip olmanız gerekmektedir. Servislere giriş yaptıktan sonra alt üst ve diğer bölümlerde bulunan ok butonlarına tıklayarak ulaşabilirsiniz. Servisler hakkında detaylı bilgiye Servisler bölümünden ulaşabilirsin.


</p>



<h3 style="margin-left:50px;margin-top:20px;">Qupoo.com'u neden anasayfam yapmalıyım?</h3>
<p style="margin:0px 50px;"> <span style="margin-left:15px;"></span>Qupoo.com'u tam olarak kullanmaya başladığın zaman zaten hiç kapatmak istemeyeceksin. Sitelere anında ulaşabilmen için tarayıcını açtığın anda Qupoo.com yazma zahmetinden de Qupoo.com'u <a href="anasayfa.php" target="_blank">buradan</a> anasayfan yaparak kurtulabilirsin.</p>



</div>

<div class="gir_div" >


<h3 style="margin-left:50px;margin-top:75px;">Qupoo'nun güvenlik önlemleri neler?</h3>
<p style="margin:0px 50px;"> <span style="margin-left:15px;"></span>Kullanıcıların güvenliği hat safhadadır. Yazılımcılar zamanının büyük bir kısmını şifreleme algoritması geliştirmekle geçirir. Qupoo.com 2 si kendine ait olmakla birlikte 5 farklı şifreleme algoritması kullanır. Her kullanıcının bilgileri Qupoo bilgilerinin anahtarı olduğu bir algoritma ile şifrelenir. Sen 2. bir şahısa bildirmediğin sürece, bilgilerinin 2. bir şahsın eline geçmesi imkansızdır.</p>



<h3 style="margin-left:50px;margin-top:20px;">Kullanıcı bilgilerimi unuttuğumda hesabıma nasıl ulaşabilirim?</h3>
<p style="margin:0px 50px;"> <span style="margin-left:15px;"></span>Kayıt - Giriş bölümünden Şifremi unuttum linkine tıklayarak E-posta hesabınıza gelecek adımları takip ederek hesabınıza ulaşabilirsin. E-posta adresini de hatırlamıyorsan destek talebi oluşturmalısın.</p>



<h3 style="margin-left:50px;margin-top:30px;">Soracağım soru burada yoksa ne yapmalıyım?</h3>
<p style="margin:0px 50px;"> <span style="margin-left:15px;"></span>Güzel soru :) Bize Ulaş bölümünden bir destek talebi oluşturursun. Biz de en kısa sürede sorunu cevaplarız.</p>





</div>


<div style="width:100%;position:absolute;text-align:center;"><h1 style="color:#666;">Sıkça Sorulan Sorular</h1></div>


</div>


<div class="ice" >


<img src="cloud2.png" class="cloud">

<div class="p_res2" id="bdres">
 </div>
<div class="kay_div">
			   

<h1 style="color:#666;margin-left:50px;line-height:70px;">Qupoo Geliştiricisi Olmak İster Misin?</h1>

<p style="margin-left:60px;margin-right:100px;font-size:18px;"><span style="margin-left:20px;"></span>Qupoo,  20.000'i aşkın ve katlanarak artan üyesi, barındırdığı  100.000'i aşkın website, 1000'i aşkın sağladığı üyelik sistemi, 50'den fazla geliştiricisi ile büyük bir aile. </p>

<p style="margin-left:60px;margin-right:100px;"><span style="margin-left:20px;font-size:17px;"></span>Qupoo, yenilenmeye son derece açık bir web uygulamasıdır. Qupoo çalışanları herzaman daha kullanışlı ve daha hızlı bir web uygulaması geliştirmeyi amaçlar. Bu yüzden en son web teknoloji ve dillerini kullanmaya özen gösterir.  </p>

<p style="margin-left:60px;margin-right:100px;font-size:18px;"><span style="margin-left:20px;"></span>Eğer ki , sen de fikirlerin ve çalışmalarınla qupoo platformunda yer almak istersen sadece bir form doldurarak bize bildirmen yeterli.</p>

</div>

<div class="gir_div">







<div class="kaa_div" id="qdb">

<div style="width:100%;text-align:center;"><span class="fh_span">Fikrini / Çalışmanı Paylaş</span></div>


<form id="bdform">
<span >E-postan:</span>
<input type="text" name="mail">
<span >Adın Soyadın:</span>
<input type="text"  name="nasur">
<span >Platformlar:</span><br>
<input type="text" name="pla" style="display:none;" id="pla">

<span class="spps" id="Javascript-" >Javascript</span>
<span class="spps" id="Android-" style="margin-left:15px;">Android</span>

 <span class="spps" id="Windows-" style="margin-left:15px;">Windows</span>
<span class="spps" id="Ruby-" >Ruby</span>

<span class="spps" id="IOS-" style="margin-left:15px;">IOS</span> 
<span class="spps" id="PHP-" style="margin-left:15px;">PHP</span>
  <span class="spps" id="Windows-" style="margin-left:15px;">Diğer</span>
 <div style="margin-top:-10px;"></div><br>
<span style="margin-top:50px;">Fikrini / Çalışmanı Açıklar Mısın?</span><br>
<textarea style="max-height:120px;height:110px;" name="fik_aci"></textarea>

<input type="button" value="Qupoo Geliştiricisi Ol" id="bdbut">


</form>


</div>






</div>



</div>
<div class="ice">

<img src="cloud2.png" class="cloud">

 <div class="p_res2" id="dtores"></div>

<div style="width:50%;position:absolute;top:0px;left:0px;height:100%;text-align:center;">

<h1 style="color:#666;">Sosyal medyada qupoo</h1>

<div class="wsos">

<a href="http://www.facebook.com/pages/Qupoo/173195622825672" target="_blank"><div class="soc_q" style="background:#3b5998;">Facebook</div></a>
<a href="https://twitter.com/qupoocom" target="_blank"><div class="soc_q" style="background:rgb(0,200,255);">Twitter</div></a>
<a href="https://plus.google.com/u/0/b/112385070456536631231/112385070456536631231/posts" target="_blank"><div class="soc_q" style="background:#ca3838;">Google+</div></a>
<a href="http://qupoo.tumblr.com/" target="_blank"><div class="soc_q" style="background:#2c4762;">Tumblr</div></a>
</div>




<div style="position:absolute;bottom:0px;left:0px;height:50%;width:100%;">

<h1 style="margin:0px;color:#666;">Diğer iletişim adresleri</h1><br>

<h2 style="margin:0px;color:#444;">E-posta: <span style="color:#555;">qupoo@qupoo.com</span></h2> 
<h2 style="margin:0px;color:#444;">Pinterest: <a href="https://pinterest.com/qupoofficial/" target="_blank"><span style="color:#555;">pinterest.com/qupoofficial/</span></a></h2> 

</div>
</div>


<div class="gir_div">







<div class="kaa_div" id="dto">

<div style="width:100%;text-align:center;"><span class="fh_span">Destek Talebi Oluştur</span></div>

<form id="dtoform">
<span >E-posta:</span>
<input type="text" name="mail">
<span >Ad Soyad:</span>
<input type="text"  name="nasur">
<span >Konu:</span>
<input type="text" name="issu">
<span >Açıklama:</span><br>
<textarea name="is_acik"></textarea>

<input type="button" value="Destek Talebini Gönder" name="button" id="dtosubm">


</form>


</div>






</div>




</div>



<div class="ice">


<img src="cloud2.png" class="cloud">


<div class="p_res2" id="rvres"></div>
<div class="kay_div">


<h1 style="color:#666;margin-left:50px;line-height:70px;">Qupoo'da reklamın yayınlansın</h1>

<p style="margin-left:60px;margin-right:100px;font-size:18px;"><span style="margin-left:20px;"></span>Qupoo,  20.000'i aşkın ve katlanarak artan üyesi, barındırdığı  100.000'i aşkın website, 1000'i aşkın sağladığı üyelik sistemi, 50'den fazla geliştiricisi ile büyük bir aile. </p>

<p style="margin-left:60px;margin-right:100px;"><span style="margin-left:20px;font-size:17px;"></span>Qupoo,  Kullanıcılarının en hızlı ve kullanışlı internet araçlarını kullanması için uygulamalar geliştirir. Reklam verenler kullanıcıların internet alışkanlıklarını inceleyerek en doğru kitleye ulaşabilir. Üstelik Qupoo da sadece reklamınız işe yaradığın da ödeme yaparsınız.  </p>


<p style="margin-left:60px;margin-right:100px;"><span style="margin-left:20px;font-size:17px;"></span>Üstelik Qupoo.com da sadece reklamınız işe yaradığın da ödeme yaparsınız.  </p>


<p style="margin-left:60px;margin-right:100px;font-size:18px;"><span style="margin-left:20px;"></span> Sen de firmanı veya markanı en doğru kitleye duyurmak istersen sadece bir form doldurarak bize bildirmen yeterli.</p>

</div>





<div class="gir_div">







<div class="kaa_div" id="qdb">

<div style="width:100%;text-align:center;"><span class="fh_span">Reklamın Yayınlansın</span></div>


<form id="rvform">

<span >E-posta:</span>
<input type="text" name="mail">

<span >Telefon:</span>
<input type="text" name="tel">

<span >Firma / Şahıs Adı:</span>
<input type="text" name="fsah">

<span style="margin-top:50px;">Reklam Fikrinizi Açıklar Mısın?</span><br>
<textarea style="max-height:120px;height:110px;" name="fik_aci"></textarea>

<input type="button" value="Formu Gönder" id="rvsubm">


</form>


</div>






</div>
 

</div>

<script src="js/qupoo_not_com2.js" type="application/javascript"></script>

</body>
</html>
<? ob_end_flush(); ?>