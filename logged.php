<?php ob_start(); ?>
<? require_once('db.php');?>
<? $uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ header("Location:index.php");}  ?>
<? $zaman=getdate();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="ico.gif" type="image/x-icon">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="qupoo,qupoo.com,site bul,site keşfet,şifre sakla,üye ol,bilgi sakla,qupooKaşif,passtore,password,username,membership,üyelik,websiteler,anasayfa,eniyi siteler,siteler,qupoo passtore,hız,sörf,sosyal ağ,sosyal siteler" />
<meta name="description" content="qupoo.com mükemmel bir anasayfa uygulaması.Üyelik girişlerini yapabilir.Bilgilerini güvenle saklayabilir.qupooKaşif ile siteleri keşfedebilirsin." />
<link rel="image_src" href="logo_33.png" />
<link rel="shortcut icon" href="qupoo_logo_go/icon.png">
<meta name="rating" content="All" /> 
<meta name="robots" content="index, follow" />
<title>qupoo-Tarayıcı Alışkanlığı</title>
<link rel="Stylesheet" type="text/css" href="css/qupoo_with_com.css" />
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38474426-1']);
  _gaq.push(['_setDomainName', 'qupoo.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>

<style>body{background-image:url(backgrounds/p_back.png);}</style>
<div class="q_ne_asil">
<div class="nediv">
<style>.dol_img{position:absolute;top:50%;left:50%;margin-left:-35px;margin-top:-35px;}</style>
<div class="ssoa" style="left:0%;top:0px;" id="b7"><img src="small_icons/328.gif" class="dol_img"/></div>


<div class="ssoa" style="left:33.33%;top:0px;" id="b1"><img src="small_icons/328.gif" class="dol_img"/></div>


<div class="ssoa" style="left:0%;top:33.33%;" id="b2"><img src="small_icons/328.gif" class="dol_img"/></div>

<div class="ssoa" style="left:66.66%;top:0%;" id="b6"><img src="small_icons/328.gif" class="dol_img"/></div>



<div class="ssoa" style="left:33.33%;top:33.33%;" id="b3">
<img src="qupoo_logo_go/ques1.png" style="position:absolute;top:0px;left:0px;width:4%;height:6%;z-index:999;cursor:pointer;" id="quesac_qupoos"/>


<div class="bol_nedir" id="bune_qupoos" style="left:4%;">
<div style="width:100%;height:5px;margin:0px;background:rgb(0,200,255)"></div>
<img src="small_icons/x.png" style="position:absolute;right:3px;top:8px;cursor:pointer;" id="quescl_qupoos"/>
<h2 style="color:rgb(0,200,255);font-weight:100;text-align:center;line-height:0px;">Bu bölümde neler yapılabilir?</h2><hr style="border:rgb(0,200,255) 1px dashed;"/>
<ul style="list-style-type:none;margin:0px;margin-left:-25px;margin-right:10px;">
<li>-qupoo's yani bu bölümde en çok sörf yaptığınız siteleriniz bulunur. Bu bölümde üyeliğiniz bulunan sitelere üyelik bilgilerinizi kaydedebilir ve bu sitelere üyelik bilgilerinizle birlikte oturum açabilirsin.</li><hr />
<li>-Ayrıca hoşunuza giden bir websiteyi sadece url adresini ekle bölümünden ekleyerek hatırlamanıza gerek kalmadan istediğiniz zaman istediğiniz yerde ziyaret edebilirsiniz.</li><hr />
<li>-İsterseniz qupooKaşif bölümünde bulunan 200 ü aşkın en seçkin sitelerden istediğinizi ekleyebilirsiniz.</li><hr />
<li>-İsterseniz google arama barını kullanarak aklınızı takılan soruları google da arayabilirsiniz.</li><hr />
<li>-İstediğiniz veya kullanmadığınız siteleri de silebilir ve yenilerini ekleyebilirsiniz.</li>
</ul>
</div>


<div class="ara_ana">
<form action="http://www.google.com.tr/search" target="_blank">
<input type="text"  id="ara_ma" name="q" class="ara_in" onblur="if(this.value.length == 0) this.value='google arama';" onclick="if(this.value == 'google arama') this.value='';" value="google arama" spellcheck="false"/>
<input type="submit" class="ara_yol"/>
</form>
<img src="search.png" style="position:absolute;right:8px;top:-1px;z-index:1" height="40"/>
</div>


<div class="qupoos_info_sonuc" id="bizeul_cevap" ></div>
<a href="sing_out.php"><img src="small_icons/sing_out.png" title="Çıkış yap" style="position:absolute;z-index:200;right:0px;"/></a>
<div class="q_qs_ana_div">

<? 
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
</div>
<div class="user_add">
<div class="user_add_ic">
<img src="small_icons/Xion.png" style="width:30px;float:right;cursor:pointer;" class="add_user_close"/>
<form id="user_add_site" method="post" action="#">
<input type="text"  class="user_add_input" onblur="if(this.value.length == 0) this.value='username or email';" onclick="if(this.value == 'username or email') this.value='';" value="username or email" name="uname" spellcheck="false"/>
<input type="hidden"  id="site_tname" name="site_tname" spellcheck="false"/>
<div class="user_add_send">kullanıcı ekle</div>
</form>
</div>
<div class="user_add_cevap" id="user_add_cevap"></div>
</div>


<div class="url_ekle">
<div class="url_ekle_ic">
<img src="small_icons/Xion.png" style="width:30px;float:right;cursor:pointer;" class="addurl_close"/>
	<form id="add_url_site" method="post" action="#">
<input type="text"  class="url_ekle_input" onblur="if(this.value.length == 0) this.value='http://www.ornek.com/';" onclick="if(this.value == 'http://www.ornek.com/') this.value='';" value="http://www.ornek.com/" name="site_url" spellcheck="false"/>
<input type="text"  class="url_ekle_input" onblur="if(this.value.length == 0) this.value='site ismi';" onclick="if(this.value == 'site ismi') this.value='';" value="site ismi" name="site_name" spellcheck="false"/>
<div class="url_ekle_send">qupoo's larıma ekle</div>
</form>
</div>
<div class="url_cevap" id="url_cevap"></div>
</div>
<div id="go1" class="go1 goor"><img src="qupoo_logo_go/qupooo_logo42.png" style="height:100%;"/><img src="small_icons/top.png" class="top"/><img src="qupoo_logo_go/qupoo_profil.png" class="profil" /><h3 style="float:right;color:#FFF;margin-right:3%;font-family:Verdana;font-weight:100"><?=$_COOKIE['umail'];?></h3></div>

<?
$fi_enter = mysql_query("SELECT * FROM `users` WHERE `user_id`='$uid'");
$bol_ac = mysql_fetch_assoc($fi_enter); 
if($bol_ac['first_enter']<10000){echo '<img src="ok/top_left.png" style="position:absolute;top:6%;left:4%;opacity:0.5;cursor:pointer;z-index:100;" id="sol_ust"/>';}
if($bol_ac['first_enter']<10000){echo '<img src="ok/top_right5.png" style="position:absolute;top:6%;right:4%;opacity:0.5;cursor:pointer;z-index:100;" id="sag_ust"/>';}

if($bol_ac['first_enter']<1000){echo '<img src="ok/bottom_left.png" style="position:absolute;bottom:6%;left:4%;opacity:0.5;cursor:pointer;z-index:100;" id="sol_alt"/><img src="qupoo_logo_go/qupoo_music.png" style="position:absolute;bottom:20%;left:3%;z-index:99;opacity:1;" class="qm_logo"/>';}



if($bol_ac['first_enter']<1000){echo '<img src="ok/bottom_right.png" style="position:absolute;bottom:6%;right:4%;opacity:0.5;cursor:pointer;z-index:100;" id="sag_alt"/>
<img src="qupoo_logo_go/qupoo-box.png" style="position:absolute;bottom:20%;right:3%;z-index:99;opacity:1;" class="qb_logo"/>
';}


?>




<img src="qupoo_logo_go/url-store.png" style="position:absolute;top:10%;left:0%;z-index:99;opacity:0;" class="us_logo"/>
<img src="qupoo_logo_go/qupoo-note.png" style="position:absolute;top:10%;right:0%;z-index:99;opacity:0;" class="qn_logo"/>





<a href="http://passtore.qupoo.com" target="_blank"><div id="go4" class="go4 goor"><img src="small_icons/next.png" class="next"/><img src="qupoo_logo_go/qupoo+.png" class="qupoos"/></div></a>
<div id="go5" class="go5 goor"><img src="small_icons/bottom.png" class="top"/><img src="qupoo_logo_go/qupoo_help.png" class="qupoohelp"/></div>
<div id="go2" class="go2 goor"><img src="small_icons/prev.png" class="next"/><img src="qupoo_logo_go/qupoo_kasif.png" class="kasif"/></div>


<?
if($_COOKIE['biz_nerdeyiz']==1){}else{
	echo '<div class="biz_nerde">
<div class="sos_biz"><span>Sosyal medyada bizi Takip etmek ister misiniz?</span></div>
<a href="http://www.facebook.com/pages/Qupoo/173195622825672" target="_blank"><img src="biz_image/facebook.png" width="150" height="150"/></a>
<a href="https://plus.google.com/u/0/b/112385070456536631231/112385070456536631231/posts" target="_blank"><img src="biz_image/google2.png" width="150" height="150"/></a>
<a href="http://qupoo.tumblr.com" target="_blank"><img src="biz_image/tumblr.png" width="150" height="150"/></a>
<a href="http://www.twitter.com/qupoocom" target="_blank"><img src="biz_image/twitter2.png" width="150" height="150"/></a>
<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:0px;top:-3px;cursor:pointer;" class="biz_gizle"/>
</div>';}
?>

<script>$(document).ready(function() {$('.biz_gizle').click(function(event){$('.biz_nerde').fadeOut(700);$.ajax({url:"bizi_izle.php",type:"POST",cache:false,});});});</script>



</div>






<div class="ssoa" style="left:66.66%;top:33.33%;overflow:auto" id="b4">
<div class="go43 goor go3"><img src="small_icons/prev.png" class="next"/><img src="qupoo_logo_go/qupoos.png" class="kasif"/></div>


</div>





<div class="ssoa" style="left:0px;top:66.66%;" id="b8"><img src="small_icons/328.gif" class="dol_img"/></div>


<div class="ssoa" style="left:33.33%;top:66.66%;" id="b5"><img src="small_icons/328.gif" class="dol_img"/></div>




<div class="ssoa" style="left:66.66%;top:66.66%;" id="b9"><img src="small_icons/328.gif" class="dol_img"/></div>








</div>
</div>



<div style="position:absolute;width:100%;height:100%;z-index:999;display:none;" id="fenter"></div>
<? 
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT * FROM `users` WHERE `user_id`='$uid'");
$result = mysql_fetch_assoc($query); 
if($result['first_enter']==0){echo "<script>$('#fenter').css('display','block').fadeIn().load('first_enter.php');</script>";}else{
	$first_home01=$result['home_page'];
	$first_bol3=$result['first_enter']%3;
	if($first_home01==0){
	if($first_bol3==0){
if($_COOKIE['quesa']==1){}else{
		echo '<div style="width:100%;height:100%;position:absolute;top:0px;left:0px;background:rgba(255,255,255,0.2);z-index:99;" class="home_page">
<div style="position:relative;height:400px;width:400px;margin-left:auto;margin-right:auto;margin-top:10%;border-radius:500px;">
<div style="width:300px;height:120px;position:absolute;top:50px;left:50px;text-align:center;z-index:9;color:#FFF;"><h1 style="font-size:30px;">Tarayıcınız için Eniyi Anasayfayı ne zaman ayarlamak istersiniz?</h1></div>
<div class="home_yn">
<a href="anasayfa.php" target="_blank"><div class="home_y home_iptal">
<h1>ŞİMDİ</h1></div></a>
<div class="home_n">
<h1 class="home_iptal" id="home_sonra">SONRA</h1>
</div></div></div></div>';
		
		
		}
                }
		}
		} 
		
?>

<script src="js/qupoo_with_com.js" type="text/javascript"></script> 

<? if($_GET['from']=="twitter" && $_COOKIE['from_t']==""){echo "<script>$(document).ready(function() { $('#sag_alt').click();}); </script> ";setcookie("from_t", "1", time()+33600);} ?>
<? if($_GET['from']=="facebook" && $_COOKIE['from_f']==""){echo "<script>$(document).ready(function() { $('#sag_alt').click();}); </script> ";setcookie("from_f", "1", time()+33600);} ?>



</body>
</html>




<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
<? ob_end_flush(); ?>