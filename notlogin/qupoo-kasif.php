<?  $bot=$_SERVER['HTTP_REFERER'];if(strpos($bot,"qupoo.com")){}else{ header("Location:hata.php");}   ?>
<div id="go23" class="go23 goor go3"><img src="small_icons/next.png" class="next"/><img src="qupoo_logo_go/qupoo.png" class="qupoos"/></div><div class="ustdiv"><div class="q_sonuc_yaz"><div style='line-height:80px;font-size:45px;'>qupoo'neri</div></div></div><img src="qupoo_logo_go/qupooo_logo4.png" style="position:absolute;z-index:99999;left:0px;"/>
<div id="q_kas_sonuc"> 
<img class="bekle" src="small_icons/loading.gif" style="display:none;"/></div>
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
$(document).ready(function(){
$(".'.$say.'").click(function(){
	$(this).parent().find("img").fadeOut();$(this).find("img").fadeIn();
	$(".q_sonuc_yaz").html("'.$divyaz.'");
$("#q_kas_sonuc").load("notlogin_sites/'.$say.'.php");
});
}); 
</script>';
}
echo '</ul>';
?>
<script>
$(document).ready(function() {
$("#q_kas_sonuc").load("notlogin_sites/sites_qupoo_neri.php");
$('.go3').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );$(this).parent().fadeOut();$("#b3").fadeIn();});});
</script>

<style>
/*qupoo kaşif css başlangıç*/
.q_kas_ul{margin-top:75px;position:absolute;height:100%;background-color:rgba(255,255,255,0.5) !important;-webkit-box-shadow:0px 0px 10px 3px #000;-ms-box-shadow:0px 0px 10px 3px #000;box-shadow:0px 0px 10px 3px #000;left:0px;text-align:center;padding-left:0px;width:150px;top:7px;left:0px;}
.q_kas_ul li{line-height:130%;font-family:"Lucida Grande", sans-serif;font-size:150%;color:rgba(0,230,255,1);
list-style-type:none;border-bottom:#fff 1px dashed;cursor:pointer;}
.q_kas_ul li:hover{background-color:#fff;-webkit-box-shadow: 0 0 20px #fff;-moz-box-shadow: 0 0 20px #fff;box-shadow: 0 0 20px #fff;}
.q_kas_qupoo{position:relative;float:left;height:180px;width:180px;background-color:rgba(255,255,255,0.3);-webkit-border-radius:500px;-ms-border-radius:500px;border-radius:500px;margin:5px;cursor:pointer;}
.q_kas_qupoo:hover{-webkit-transition:all 0.25s ease;-ms-transition:all 0.25s ease;transition:all 0.25s ease;-webkit-box-shadow: 0 0 20px #fff;-ms-box-shadow: 0 0 20px #fff;box-shadow: 0 0 20px #fff;background:rgba(255,255,255,0.9) !important;} 
.q_kas_qupoo img{height:100%;width:100%;position:absolute;margin:0px;}
.q_kas_qupoo:hover img{width:75%;height:75%;margin:22.5px;-webkit-transition:all 0.25s ease;-ms-transition:all 0.25s ease;transition:all 0.25s ease;}
.q_kas_qupoo .info{position:absolute;width:20px;height:20px;z-index:9999;background-color:rgba(0,200,255,0.9);-webkit-border-radius:50px;-ms-border-radius:50px;border-radius:50px;display:none;right:20px;bottom:30px;cursor:pointer;text-align:center;font-size:20px;font-weight:bolder;background-repeat:no-repeat;}
.q_kas_qupoo .info:hover{-webkit-transform:scale(1.5);-ms-transform:scale(1.5);transform:scale(1.5);-webkit-transition-duration: 250ms;-ms-transition-duration: 250ms;transition-duration: 250ms;}
.q_kas_qupoo:hover .info{display:block;}
#q_kas_sonuc{position:absolute;top:80px;left:150px;width:auto;height:87%;overflow:auto;right:4%;padding-right:7%;margin-left:10%;max-width:800px;padding-right:50px;}
#q_kas_sonuc a:link{color:rgba(0,0,0,0);margin:0px;}
#q_kas_sonuc .bekle{position:absolute;top:200px;left:250px;} 
.ustdiv{position:absolute;width:100%;background-color:rgba(255,255,255,0.5);height:80px;z-index:2;-webkit-box-shadow:0px 0px 10px 3px #000;-ms-box-shadow:0px 0px 10px 3px #000;box-shadow:0px 0px 10px 3px #000;top:0px;left:0px;}
.ustdiv .q_sonuc_yaz{text-align:center;margin-left:250px;margin-right:200px;font-family:"Lucida Grande", sans-serif;font-size:20px;color:#fff;width:800px;z-index:9;}
.gor{position:absolute;width:auto;height:25px;background-color:rgba(255,255,255,0.5);top:0px;left:26px;border-radius:20px 0px 0px 20px;-ms-border-radius:20px 0px 0px 20px;-webkit-border-radius:20px 0px 0px 20px;opacity:0.0;-webkit-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out;transition:all 0.2s ease-out;display:none;color:rgb(0,255,255);font-size:100%;padding-left:15px;padding-right:15px;}
.q_kas_qupoo .info:hover .gor{opacity:1;display:block;}
/* qupoo kaşif  css bitiş*/
</style>
<? mysql_close();?>