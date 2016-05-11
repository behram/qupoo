<?
require_once('db.php');
$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit('<a href="http://qupoo.com"><img src="404.jpg" style="position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:0;" /></a>');} ?>

<div class="ustdiv"><div class="q_sonuc_yaz"><div style='line-height:80px;font-size:45px;'>qupoo'neri</div></div></div><img src="qupoo_logo_go/qupoo_kasif_ust.png" style="position:absolute;z-index:99999;left:0px;top:0px;"/>


<img src="qupoo_logo_go/ques1.png" style="left:150px;top:0px;position:absolute;z-index:99999;height:80px;cursor:pointer;" id="quesac_qkas" title="Bu bölümde neler yapılabilir?"/>
<div class="bol_nedir" id="bune_qkas" style="left:230px;">
<div style="width:100%;height:5px;margin:0px;background:rgb(0,200,255)"></div>
<img src="small_icons/x.png" style="position:absolute;right:3px;top:8px;cursor:pointer;" id="quescl_qkas"/>
<h2 style="color:rgb(0,200,255);font-weight:100;text-align:center;line-height:0px;">Bu bölümde neler yapılabilir?</h2><hr style="border:rgb(0,200,255) 1px dashed;"/>
<ul style="list-style-type:none;margin:0px;margin-left:-25px;margin-right:10px;">
<li>-qupooKaşif yani bu bölümde sizden gelen ve qupoo çalışanları tarafından seçilmiş en seçkin websiteler kategorilenmiş şekilde mevcut. Kategorilerde site sıralaması soldan sağa doğru olup en çok ziyaret edilen siteler sıralamasıdır.</li><hr/>
<li>-Sitenin üzerine geldiğinizde üç adet seçenek var bunlardan birinci + işaretine tıklayarak kendi qupoo's larınız yani kendi websitelerinize ekleyebilirsiniz. İşlemin sonucunu ise üst bölümden takip edebilirsiniz.</li><hr />
<li>-Göz işaretinin üzerine gelerek site ismini görebilirsiniz.</li><hr />
<li>-Ayrıca i yani info butonuna tıklayarak üst bölümden 200 'ü aşkın website hakkında en iyi yorumlarla bilgi edinebilirsiniz.</li>
</ul>
</div>



<div id="q_kas_sonuc"></div>
<?
require_once('db.php');
$sorgu=mysql_query("SELECT list_name FROM explorer_list");
$dosyon=mysql_query("SELECT explorer_list_table_name FROM explorer_list");
echo '<ul class="q_kas_ul">';
for($x=0;$x<13;$x++){
$son=mysql_result($sorgu,$x);
$say=mysql_result($dosyon,$x);
echo '<li class="'.$say.'"><img src="small_icons/kasif_li_yan.png" style="position:absolute;right:-7px;display:none;" class="ka_gos">'.$son.'</li>';
$divyaz="<div style='line-height:80px;font-size:45px;'>$son</div>";

echo '
<script>
$(".'.$say.'").click(function(){
	$(this).parent().find("img").fadeOut();$(this).find("img").fadeIn();
		$(".q_sonuc_yaz").html("'.$divyaz.'");
$("#q_kas_sonuc").load("sites/'.$say.'.php");
});

</script>';
}
echo '</ul>';
?>

<div id="go23" class="go23 goor go3"><img src="small_icons/next.png" class="next"/><img src="qupoo_logo_go/qupoos.png" class="qupoos"/></div>
<style>
/*qupoo kaşif css başlangıç*/
.q_kas_ul{margin-top:75px;position:absolute;height:100%;background-color:rgba(255,255,255,0.5) !important;-webkit-box-shadow:0px 0px 10px 3px #000;-ms-box-shadow:0px 0px 10px 3px #000;box-shadow:0px 0px 10px 3px #000;left:0px;text-align:center;padding-left:0px;width:150px;top:7px;left:0px;}
.q_kas_ul li{line-height:130%;font-family:"Lucida Grande", sans-serif;font-size:150%;color:rgb(0,200,255);
list-style-type:none;border-bottom:#fff 1px dashed;cursor:pointer;}
.q_kas_ul li:hover{background-color:#fff;-webkit-box-shadow: 0 0 20px #fff;-ms-box-shadow: 0 0 20px #fff;box-shadow: 0 0 20px #fff;}
.q_kas_qupoo{position:relative;float:left;height:180px;width:180px;background-color:rgba(255,255,255,0.3);border-radius:500px;margin:5px;cursor:pointer;}
.q_kas_qupoo:hover{-webkit-transition:all 0.25s ease;-ms-transition:all 0.25s ease;transition:all 0.25s ease;-webkit-box-shadow: 0 0 20px #fff;-ms-box-shadow: 0 0 20px #fff;box-shadow: 0 0 20px #fff;background:rgba(255,255,255,0.9) !important;} 
.q_kas_qupoo img{height:100%;width:100%;position:absolute;margin:0px;}
.q_kas_qupoo:hover img{width:75%;height:75%;margin:22.5px;-webkit-transition:all 0.25s ease;-ms-transition:all 0.25s ease;transition:all 0.25s ease;}
.q_kas_qupoo .info{position:absolute;width:20px;height:20px;z-index:9999;background-color:rgba(0,200,255,0.9);-webkit-border-radius:50px;-ms-border-radius:50px;border-radius:50px;display:none;right:25px;bottom:25px;cursor:pointer;text-align:center;font-size:20px;font-weight:bolder;background-repeat:no-repeat;}
.q_kas_qupoo .info:hover{-webkit-transform:scale(1.5);-ms-transform:scale(1.5);transform:scale(1.5);-webkit-transition-duration: 250ms;-ms-transition-duration: 250ms;transition-duration: 250ms;}
.q_kas_qupoo:hover .info{display:block;} 
#q_kas_sonuc{position:absolute;top:80px;left:150px;width:auto;height:87%;overflow:auto;right:4%;margin-left:10%;max-width:800px;padding-right:120px;}
#q_kas_sonuc a:link{color:rgba(0,0,0,0)}
#q_kas_sonuc .bekle{position:absolute;top:200px;left:250px;} 
.ustdiv{position:absolute;width:100%;background-color:rgba(255,255,255,0.5);height:80px;z-index:9;-webkit-box-shadow:0px 0px 10px 3px #000;-ms-box-shadow:0px 0px 10px 3px #000;box-shadow:0px 0px 10px 3px #000;top:0px;left:0px;}
.ustdiv .q_sonuc_yaz{text-align:center;margin-left:250px;margin-right:200px;font-family:"Lucida Grande", sans-serif;font-size:20px;color:#fff;width:800px;}
.gor{position:absolute;width:auto;height:25px;background-color:rgba(255,255,255,0.5);top:0px;left:26px;border-radius:20px 0px 0px 20px;-ms-border-radius:20px 0px 0px 20px;opacity:0.0;-webkit-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out;transition:all 0.2s ease-out;display:none;color:rgb(0,255,255);font-size:100%;padding-left:15px;padding-right:15px;}
.q_kas_qupoo .info:hover .gor{opacity:1;display:block;}
/* qupoo kaşif  css bitiş*/
</style>
<script>

$(document).ready(function(){$('#quesac_qkas').click(function(event){$('#bune_qkas').animate({height:"370px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qkas').click(function(event){$('#bune_qkas').animate({height:"0px"}, 500 );$("#quesac_qkas").attr("src","qupoo_logo_go/ques1.png");})});

$("#q_kas_sonuc").load("sites/sites_qupoo_neri.php");
$('.go3').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );$(this).parent().fadeOut();$("#b3").fadeIn();$('.q_qs_ana_div').load('withlogin/logged.php');})
</script>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>