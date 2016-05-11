<? ob_start();require_once("db.php");session_start();
  header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  header("Pragma: no-cache"); //HTTP 1.0
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
echo '<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="Cache-control" content="no-store">';
?>
<script src="js/jquery.zrssfeed.min.js"></script>
<style>
@font-face {font-family: 'opensans';font-style: normal;font-weight:100;src: local('opensans'), url(opensans300.woff) format('woff');}
body, html, div, span ,h1 ,h2 ,h3 , a {font-weight:100 !important;font-family:'opensans' !important;}
.qb_adiv{width:1120px;height:100%;background:rgba(255,255,255,0.2);position:absolute;left:50%;margin-left:-560px;overflow:auto;}
.qb_serv{width:520px;height:auto;background:rgb(252,252,252);line-height:45px; font-size:19px;box-shadow:#ccc 0px 0px 3px;margin:20px;text-align:center;border-radius:2px;padding-bottom:10px;}
.qb_serv:hover{background:rgb(255,255,255);box-shadow:rgb(0,200,255) 0px 0px 15px;}
.qb_serv .serv_sec{height:auto;width:auto;font-size:16px;background:rgb(240,240,240);box-shadow:#999 0px 0px 3px inset;line-height:30px;padding:5px 12px;cursor:pointer;margin-left:4px;margin-right:4px;border:#fff 1px solid;}
.serv_sec2{background:#ff3300 !important;color:#fff;}  
.serv_sec3{background:#ca3838 !important;color:#fff;}
.serv_sec4{background:rgb(0,200,255) !important;color:#fff;}
.serv_sec5{background:rgb(100,100,100) !important;color:#fff;}
.serv_sec6{background:#3b59cc !important;color:#fff;}
.qb_serv .serv_sec:hover{box-shadow:#999 0px 0px 3px;}
.ht_sec{color:#444;margin-left:50px; }
.ht_sec:hover{text-decoration:underline;}
.qb_serv a:link{color:#444;}
.qb_serv a:visited{color:#444;}
.qb_serv a:hover{color:#333;}

.tma_rh:hover{cursor:pointer;text-decoration:underline;}

.dp_cont{height:auto;width:100%;text-align:left;overflow:auto;max-height:500px;overflow-x:hidden;box-shadow:0px 0px 0px #ccc;}

.ser_hed{background:#3b59cc;padding:3px 15px;color:#fff;border-radius:0px;}

.g_icesec{width:490px;height:auto;background:rgb(250,250,250);font-size:14px;line-height:35px;margin:0px !important;font-weight:100;color:#000;box-shadow:0px 0px 1px #ccc;padding:0px 15px;}
.g_icesec:hover{box-shadow:0px 0px 1px #999;cursor:pointer;background:rgb(245,245,245);}

#f_ice a:hover{text-decoration:underline;}

#b9 .g_confo input,#b9 textarea{width:350px;margin:5px 75px;border:none;height:35px;box-shadow:#666 0px 0px 3px inset;resize:none;font-size:17px;font-family:'opensans';font-weight:100;padding:0px 10px;}
#b9 .g_confo input:focus{outline:none;box-shadow:#666 0px 0px 3px;}
#b9 .g_confo textarea:focus{outline:none;box-shadow:#666 0px 0px 3px;}


#b9 .dm_send input,#b9 textarea{width:350px;margin-left:65px;border:none;height:35px;box-shadow:#666 0px 0px 3px inset;resize:none;font-size:17px;font-family:'opensans';font-weight:100;padding:0px 10px;}
#b9 .dm_send input:focus{outline:none;box-shadow:#666 0px 0px 3px;}
#b9 .dm_send textarea:focus{outline:none;box-shadow:#666 0px 0px 3px;}


#b9 .tw_sediv input,#b9 textarea{width:350px;margin-left:65px;border:none;height:70px;box-shadow:#666 0px 0px 3px inset;resize:none;font-size:17px;font-family:'opensans';font-weight:100;padding:5px 10px;margin-top:15px;}
#b9 .tw_sediv textarea:focus{outline:none;box-shadow:#666 0px 0px 3px;}


font a:hover{text-decoration:underline;}

input[type="button"]{ color:#fff;box-shadow:#fff 1px 1px 3px inset,#666 1px 1px 3px;border:#aaa 1px solid;background:rgb(0,200,220);cursor:pointer;width:368px;}
input[type="button"]:active{box-shadow:#fff 2px 2px 6px inset,#666 2px 2px 6px;background:rgb(0,200,220)}
input[type="button"]:hover{background:rgb(0,200,255)}


#tdm_msdi{height:auto;width:100%;text-align:center;color:#fff;margin:0px;padding:0px;background:rgb(0,200,255);line-height:30px;}
#twse_red{height:auto;width:100%;text-align:center;color:#fff;margin:0px;padding:0px;background:rgb(0,200,255);line-height:30px;}
#gaa_rd{height:auto;width:100%;text-align:center;color:#fff;margin:0px;padding:0px;background:rgb(0,200,255);line-height:30px;}
#gms_rdi{height:auto;width:100%;text-align:center;color:#fff;margin:0px;padding:0px;background:rgb(0,200,255);line-height:30px;}

.con_ser{color:#fff;box-shadow:#fff 1px 1px 3px inset,#666 1px 1px 3px; border:#aaa 1px solid;background:rgb(0,200,220);cursor:pointer;width:300px;height:40px;line-height:40px;text-align:center;margin:20px 110px;}
.con_ser:hover{background:rgba(0,150,200,0.7); text-decoration:none !important;}
.tdm_res:hover{text-decoration:underline;cursor:pointer;}

.but_hide{height:40px;background:rgba(0,0,0,0.05);width:520px;margin-top:3px;z-index:99;position:absolute;}

.gcm_res{font-size:12px;margin-left:15px;}
.gcm_res:hover{text-decoration:underline;cursor:pointer;}

.fa_hre:hover{text-decoration:none !important;}


</style>



<div class="qb_adiv">

<div style="width:100%;height:60px;background:#fff;top:0px;left:0px;"><img src="qupoo_logo_go/qupoo-box.png" style="position:absolute;left:50%;margin-left:-80px;" height="60"/></div>

<div style="height:auto;width:50%;position:absolute;top:60px;left:0px;">

<div  class="qb_serv" >



<? 
$fuid=$_COOKIE['uid'];
$fcont=mysql_query("SELECT * FROM qbox_facebook WHERE `uid`='$fuid'");
$fcont_s = mysql_num_rows($fcont);



if($fcont_s>0){

while($f_son = mysql_fetch_row($fcont)) { 

$_SESSION['face_utoken'] = $f_son[1];
$_SESSION['face_uid'] = $f_son[2];
$_SESSION['face_code'] = $f_son[3];

$futoken=$f_son[1];
$fauid=$f_son[2];

}
}
?>


<span class="ser_hed">Facebook</span> <? if($fcont_s==0){echo '<span style="font-size:12px;margin-right:-80px;"> ( Aktif Değil ) </span>';}?><br />


<div style="background:rgba(0,200,255,0.5);width:80%;height:1px;margin:2px 10%;"></div>

<? if($fcont_s==0){echo '<div class="but_hide"></div>';}?>

<span class="serv_sec" id="fa_inbox">Inbox</span>
<span class="serv_sec" id="fa_notes">Bildirimler</span>


<div  id="f_ice" class="dp_cont">

<? if($fcont_s==0){echo '<a href="Qbox/facebook/examples/facebooklogin.php" class="fa_hre"><div class="con_ser">Uygulamaya Bağlan</div></a>
<div style="height:160px;width:auto;box-shadow:rgba(0,200,255,0.4) 0px 0px 10px inset;">
<span style="margin:0px 20px;font-size:14px;">Bu uygulama ne işe yarar?</span>
<p style="margin-top:-10px;margin-left:20px;margin-right:20px;font-size:13px;line-height:18px;">-Gelen mesajlarına ve bildirimlerine hızlı bir çok hızlı bir şekilde bakmanı sağlar. Üstelik bir defalık bağlanman yeterli. En önemlisi facebook\' a giriş yapmasan dahi uygulama çalışır.<br />
Kurulum için sadece butona tıkladıktan sonra sorulara "tamam" yanıtını vermen yeterli. Dikkat! herhangi bir maddeyi kabul etmemeniz halinde uygulama tam olarak çalışmayacaktır.</p>
</div>';}?>





</div>

</div>




<div  class="qb_serv" id="news_d" >

<span style="background:#ff3300;" class="ser_hed">Haber</span><br />

<div style="background:rgba(0,200,255,0.5);width:80%;height:1px;margin:2px 10%;"></div>


<span class="serv_sec" id="http://rss.hurriyet.com.tr/rss.aspx?sectionId=2">Gündem</span>
<span class="serv_sec" id="http://rss.hurriyet.com.tr/rss.aspx?sectionId=4">Ekonomi</span>
<span class="serv_sec" id="http://rss.hurriyet.com.tr/rss.aspx?sectionId=2124">Sağlık</span>
<span class="serv_sec" id="http://rss.hurriyet.com.tr/rss.aspx?sectionId=14">Spor</span>
<span class="serv_sec" id="http://rss.hurriyet.com.tr/rss.aspx?sectionId=2158">Teknoloji</span>


<div class="dp_cont" id="new_ice" style="padding-bottom:1px;">


</div>
</div>




</div>



<div style="height:auto;width:50%;position:absolute;top:60px;right:0px;">

<div  class="qb_serv" style="margin-left:10px;">

<? 
$uid=$_COOKIE['uid'];
$tcont=mysql_query("SELECT * FROM qbox_twitter WHERE `uid`='$uid'");
$tcont_s = mysql_num_rows($tcont);


if($tcont_s>0){

while($t_son = mysql_fetch_row($tcont)) { 

$ses_t=array("oauth_token"=>$t_son[1],"oauth_token_secret"=>$t_son[2],"user_id"=>$t_son[3],"screen_name"=>$t_son[4]);
$_SESSION['access_token'] = $ses_t;
$_SESSION['status'] = $t_son[5];

}
}

?>

<span style="background:rgb(0,200,255);" class="ser_hed">Twitter</span><? if($tcont_s==0){echo '<span style="font-size:12px;margin-right:-80px;"> ( Aktif Değil ) </span>';}?><br />
<div style="background:rgba(0,200,255,0.5);width:80%;height:1px;margin:2px 10%;"></div>

<? if($tcont_s==0){echo '<div class="but_hide"></div>';}?>
<span class="serv_sec" id="t_inbox">Inbox</span>
<span class="serv_sec" id="new_dm">Yeni Mesaj</span>
<span class="serv_sec" id="t_men">Mentions</span>
<span class="serv_sec" id="tweetit">Tweetle</span>
<span class="serv_sec" id="ttlist">TT Liste</span>
<div class="dp_cont" id="twit_ice">

<? if($tcont_s==0){echo '<a href="Qbox/twitter/redirect.php"><div class="con_ser">Uygulamaya Bağlan</div></a>
<div style="height:160px;width:auto;box-shadow:rgba(0,200,255,0.4) 0px 0px 10px inset;">
<span style="margin:0px 20px;font-size:14px;">Bu uygulama ne işe yarar?</span>
<p style="margin-top:-10px;margin-left:20px;margin-right:20px;font-size:13px;line-height:18px;">-Inbox\'ına, mentions\' larına , ttlistene  hızlı bir çok şekilde bakmanı sağlar. Üstelik bir defalık bağlanman yeterli. En önemlisi twitter\' a giriş yapmasan dahi uygulama çalışır.<br />
Kurulum için sadece butona tıkladıktan sonra "Uygulamaya İzin ver" demen yeterli. Dikkat! uygulamayı kaldırman halinde yeniden kurmadığın sürece kullanamazsın.<br />Qupoo Qbox\' la çok daha güzel.</p>
</div>';}?>

</div>
</div>





<div  class="qb_serv" style="margin-left:10px;">




<span style="background:#ca3838;" class="ser_hed">Mail Gönder</span><br />

<div style="background:rgba(0,200,255,0.5);width:80%;height:1px;margin:2px 10%;"></div>

<div id='gms_rdi'></div>
<div class="g_confo" style="line-height:15px;text-align:left;" id="g_mailsend">
<span style="margin-left:75px;font-size:14px;">Gönderen <span style="font-size:12px;">( ex. johhny@gmail.com )</span> :</span>
<input type="text"  spellcheck=	"false" style="margin-bottom:15px;" name="take_m" id="g_give_m" value="<?=$_COOKIE['umail'];?>" disabled="disabled"/>
<span style="margin-left:75px;font-size:14px;">Alıcı <span style="font-size:12px;"></span>:</span>
<input type="text"  spellcheck=	"false" style="margin-bottom:15px;" name="take_m" id="g_take_m" value=""/>
<span style="margin-left:75px;font-size:14px;">Konu :</span>
<input type="text"  spellcheck=	"false" style="margin-bottom:15px;" name="m_issu" id="g_m_issu"/>
<span style="margin-left:75px;font-size:14px;">İçerik :</span>
<textarea style="margin-left:75px;margin-top:5px;" name="m_ice" id="g_m_ice"></textarea>
<input type="button" spellcheck=	"false" value="Gönder" style="margin-bottom:10px;height:40px;" id="gs_fsbut"/>
<p style="font-size:11px;margin:5px 75px;color:#666;">Uyarı ! Mail'iniz Alıcıya Qboxmail@qupoo.com mail adresinden sizin gönderdiğinize dair bir bilgi ile gönderilecektir. Qupoo inc. mailin içeriği ile ilgili herhangi bir yükümlülüğü kabul etmez.</p>
</div>





</div>
</div>



</div>

</div>


<img src="ok/top_left.png" style="top:0px;left:0px;position:absolute;cursor:pointer;z-index:9;opacity:0.5;" id="qb_goan">
<img src="qupoo_logo_go/qupoos.png" style="position:absolute;left:0px;top:0px;opacity:1;z-index:8;" id="qb_hores"/>

<div style="display:none;" id="fa_ttd"></div>

<script>

function twinbox() {
$('#t_inbox').parent().find(".serv_sec").removeClass("serv_sec4");
$('#t_inbox').addClass("serv_sec4");
$("#twit_ice").empty();
$("#twit_ice").html('<img src="small_icons/328.gif" height="40" style="margin-left:240px;margin-top:20px;"/>');
$.getJSON('Qbox/twitter/inbox.php', function(tires){$("#twit_ice").empty();
if(tires==""){$("#twit_ice").html("<div class='g_icesec'><span>Boş</span></div>");}
for(var c=0;c<10;c++){var ti_ice=$("#twit_ice").html();$("#twit_ice").html(ti_ice+"<div class='g_icesec'><span class='ti_msp'>-"+tires[c].text.substr(0,72)+"</span><font style='display:none;'><span>-"+tires[c].text+"</span><span style='font-size:10px;'> ( <span class='tdm_res' id='@"+tires[c].sender.screen_name+"'>Cevapla</span>  ) </span><br />Gönderen : <a href='https://www.twitter.com/"+tires[c].sender.screen_name+"' target='_blank'>"+tires[c].sender.name+"</a><i style='margin-left:45px'>"+tires[c].created_at.substr(0,16)+"</i></font></div>");}})
								}


function finbox(){
$('#fa_inbox').parent().find(".serv_sec").removeClass("serv_sec6");
$('#fa_inbox').addClass("serv_sec6");
$("#f_ice").empty();
$("#f_ice").html('<img src="small_icons/328.gif" height="40" style="margin-left:240px;margin-top:20px;"/>');
$.getJSON('https://graph.facebook.com/<? if($fcont_s==1){echo $fauid; }?>?fields=inbox.limit(5).fields(comments.limit(5).fields(from,message),unread)&access_token=<? if($fcont_s==1){echo $futoken; }?>', function(ires){
$("#f_ice").empty();$("#fa_inbox").html("Inbox ("+ires.inbox.summary.unread_count+")");if(ires.inbox.summary.unread_count==0){$("#f_ice").html("<div class='g_icesec' style='text-align:center;'><span>Okunmamış mesajın yok</span></div>");}
for(var y=0;y<5;y++){for(var z=0;z<ires.inbox.data[y].unread;z++){var f_iice=$("#f_ice").html();
$("#f_ice").html(f_iice+"<div class='g_icesec f_inclas'><span class='sp'>-"+ires.inbox.data[y].comments.data[4-z].message.substr(0,75)+"</span><font style='display:none;'><span>-"+ires.inbox.data[y].comments.data[4-z].message+" </span><span style='font-size:10px;'> ( <a href='https://www.facebook.com/messages/"+ires.inbox.data[y].comments.data[4-z].from.id+"' target='_blank'>mesaja git</a>  ) </span><br />Gönderen : <a href='https://www.facebook.com/"+ires.inbox.data[y].comments.data[4-z].from.id+"' target='_blank'>"+ires.inbox.data[y].comments.data[4-z].from.name+"</a><i style='margin-left:45px'>"+ires.inbox.data[y].comments.data[4-z].created_time.substr(0,19)+"</i></font></div>");}}});
}


//gmail inbox
function ginbox(){
$('#g_inbox').parent().find(".serv_sec").removeClass("serv_sec3");
$('#g_inbox').addClass("serv_sec3");
$("#g_ice").empty();
$("#g_ice").html('<img src="small_icons/328.gif" height="40" style="margin-left:240px;margin-top:20px;"/>');
$.post('Qbox/gmail/gmail.php',{},function(dat){
$("#g_ice").empty();$("#fa_ttd").html(dat);
$('#g_inbox').html("Inbox ( "+$("fullcount").html()+" )");
if($("fullcount").html()==0){$("#g_ice").html("<div class='g_icesec' style='text-align:center;cursor:default;'><span>Yeni Gelen Mail Yok</span></div>");}
$("entry").each( function(index) {var g_ice=$("#g_ice").html();
$("#g_ice").html(g_ice+"<div class='g_icesec'><span class='g_hid_m'>-"+$(this).find("title").html().substr(0,65)+"</span><font style='display:none;'>Konu | "+$(this).find("title").html()+"<p style='line-height:30px;margin-bottom:5px;'>İçerik |  "+$(this).find("summary").html()+"<span class='gcm_res' id='gm_resp'><i id='"+$(this).find("email").html()+"'></i>  ( Yanıtla )</span><a class='gcm_res' href='"+$(this).find("link").attr("href")+"' target='_blank'> ( Gmail'de Gör )</a></p>Gönderen | "+$(this).find("name").html()+" | <i style='margin-left:15px;'>"+$(this).find("modified").html()+"</i></font></div>");});})}

$('#g_inbox').live('click', function() { ginbox();});
//gmail inbox



function rssgrab(site){$('#new_ice').rssfeed(site, {limit:11});}


 $(document).ready(function () {rssgrab('http://rss.hurriyet.com.tr/rss.aspx?sectionId=1');
<? if($tcont_s==1){ print "twinbox()"; } ?> ;<? if($gson==1){echo 'ginbox();';} ?>;<? if($fcont_s==1){ echo 'finbox();'; } ?>  });

$('#news_d span').live('click', function() {   var na_id=$(this).attr("id");rssgrab(na_id);$("#news_d span").removeClass("serv_sec2");$(this).addClass("serv_sec2");})
 
$("#gm_acon").live('click', function() { $.post('Qbox/gmail/mcon.php', function(gdat) {$('#gm_fona').val(gdat);});$(this).fadeOut(0);$(".g_confo").fadeIn(0);});

$("#gac_but").live('click', function() { var gmail=$("#gm_fona").val();var gpass=$("#gm_fopa").val();if(gmail=="" || gpass==""){}else{

$('#gaa_rd').html("<i>Bağlanılıyor...</i>");$.post('Qbox/gmail/gccont.php', {mail:gmail,pass:gpass}, function(gar) {


if(gar==1){

ginbox();$("#gm_bhid,#gm_act").fadeOut();

}else{$('#gaa_rd').html(gar);}
}); 
}});

//tt listesi
$('#ttlist').live('click', function() {
$(this).parent().find(".serv_sec").removeClass("serv_sec4");
$(this).addClass("serv_sec4");
$("#twit_ice").empty();$("#twit_ice").html('<img src="small_icons/328.gif" height="40" style="margin-left:240px;margin-top:20px;"/>');
$.post('Qbox/twitter/ttlist.php',{},function(cik){
$("#twit_ice").empty();$("#fa_ttd").html(cik);$("#fa_ttd span").each( function(index) {
var tw_ice=$("#twit_ice").html();$("#twit_ice").html(tw_ice+"<div class='g_icesec' style='cursor:default;'><span>"+$(this).html()+"</span></div>");});})})
//tt listesi


//twit mentions
$('#t_men').live('click', function() {
$(this).parent().find(".serv_sec").removeClass("serv_sec4");
$(this).addClass("serv_sec4");
$("#twit_ice").empty();$("#twit_ice").html('<img src="small_icons/328.gif" height="40" style="margin-left:240px;margin-top:20px;"/>');
$.getJSON('Qbox/twitter/mentions.php', function(mres){$("#twit_ice").empty();
for(var b=0;b<10;b++){var tm_ice=$("#twit_ice").html();$("#twit_ice").html(tm_ice+"<div class='g_icesec'><span class='tm_sph'>"+mres[b].text.substr(0,72)+"</span><font style='display:none;'><span>-"+mres[b].text+"</span><span style='font-size:12px;'> ( <span class='tma_rh' id='@"+mres[b].user.screen_name+"'>Tweetle</span>  ) </span><br />Gönderen : <a href='https://www.twitter.com/"+mres[b].user.screen_name+"'  target='_blank'>"+mres[b].user.name+"</a><i style='margin-left:45px'>"+mres[b].created_at.substr(0,16)+"</i></font></div>");}})})
//twit mentions
$('#twit_ice .g_icesec').live('click', function() {$(this).find("font").css("display","block");$(this).find(".tm_sph").css("display","none");});
$('.tma_rh').live('click', function() {tweet_t($(this).attr("id"))});



//twit tweetle
function tweet_t(per){$("#new_dm").parent().find(".serv_sec").removeClass("serv_sec4");$("#tweetit").addClass("serv_sec4");
$("#twit_ice").html('<div id="twse_red"></div><div style="line-height:30px;" class="tw_sediv"><textarea spellcheck="false" id="td_textval"  maxlength="135" value="'+per+'">'+per+'</textarea><br /><input type="button" value="Tweetle" style="height:38px;margin:10px 65px;width:" id="td_sebut" /></div>');}
$('#tweetit').live('click', function() {  tweet_t("");});
$('#td_sebut').live('click', function() {
var td_statu=$("#td_textval").val();
if(td_statu==""){}else{

$("#twse_red").html("<i>Tweetin Gönderiliyor...</i>")
$.getJSON('Qbox/twitter/tweet.php?statuses='+td_statu+'', function(td_rs) { 

if(td_rs.retweeted==false){$("#twse_red").html("Tweetin Başarıyla Gönderildi");$(".tw_sediv").empty();stop();}
if(td_rs.errors["0"].code==187){$("#twse_red").html("Aynı Tweeti Bir Kez Gönderebilirsin.");stop();}



});}});
//twit tweetle




//twit dm send
function dm_op(person){$("#new_dm").parent().find(".serv_sec").removeClass("serv_sec4");$("#new_dm").addClass("serv_sec4");
$("#twit_ice").html('<div id="tdm_msdi"></div><div style="line-height:30px;" class="dm_send"><span style="margin-left:65px;">Kime ( ex. @jenny ) :</span><br/><input  spellcheck="false" type="text" id="dm_scname" value="'+person+'"/><br /><span style="margin-left:65px;margin-top:30px;">Mesaj :</span><br /><textarea style="height:50px;margin-top:0px;" spellcheck="false" id="dm_textval"></textarea><br /><input type="button" value="Direk Mesajı Gönder" style="height:38px;margin:10px 65px;" id="dm_sbut"/></div>');}
$('#new_dm').live('click', function() {dm_op("@");});
$('#dm_sbut').live('click', function() {var dm_person=$("#dm_scname").val();var dm_text=$("#dm_textval").val();
if(dm_person=="" || dm_text==""){}else{$("#tdm_msdi").html("<i>Mesajın Gönderiliyor...</i>")
$.getJSON('Qbox/twitter/send.php?person='+encodeURIComponent(dm_person)+'&text='+encodeURIComponent(dm_text)+'', function(dm_rs) { 
if(dm_rs.recipient_screen_name == dm_person.replace(/@/,'')){$("#tdm_msdi").html("Mesajın Başarıyla Gönderildi");$(".dm_send").empty();}
if(dm_rs.errors["0"].code==151){$("#tdm_msdi").html("Bu Mesajı Göndermiştin");}
if(dm_rs.errors["0"].code==150){$("#tdm_msdi").html("Seni Takip Etmeyen Kişilere Mesaj Göderemezsin");}
if(dm_rs.errors["0"].code==34){$("#tdm_msdi").html("Twitter Bir Sorunla Karşılaştı");}});}});
//twit dm send


//twit inbox

$('#t_inbox').live('click', function() {twinbox();})
//twit inbox
$('#twit_ice .g_icesec').live('click', function() {$(this).find("font").css("display","block");$(this).find(".ti_msp").css("display","none");$(this).css("cursor","default");});
$('#twit_ice .tdm_res').live('click', function() {dm_op($(this).attr("id"))});







$('#qb_goan').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 400 );})
$("#qb_goan").mouseout(function(){$("#qb_hores").animate({top:"0",left:"0",opacity:0},200);$(this).css("opacity","0.5")});
$("#qb_goan").mouseover(function(){$("#qb_hores").animate({top:"120px",left:"15px",opacity:1},200);$(this).css("opacity","1")});




$('#g_ice .g_icesec').live('click', function() {$(this).find("font").css("display","block");$(this).find(".g_hid_m").css("display","none");$(this).css("cursor","default");});
$("#gm_resp").live('click', function() {    gmail_send($(this).find("i").attr("id"))});


//Gmail msend inbox
function  gmail_send(madres){$("#g_msend").parent().find(".serv_sec").removeClass("serv_sec3");$("#g_msend").addClass("serv_sec3");$('#g_ice').load('Qbox/gmail/gform.php?mail='+madres);}

$('#g_msend').live('click', function() {gmail_send("");});

$('#gs_fsbut').live('click', function() {$.post('Qbox/gm_send.php',{ take_m:$("#g_take_m").val(), m_issu:$("#g_m_issu").val(), m_ice:$("#g_m_ice").val()},function(gsr){
if(gsr==1){$("#gms_rdi").html("Mailin Gönderildi");$("#g_mailsend").empty();}else{$("#gms_rdi").html(gsr);}});});
//Gmail msend inbox




//faceboo bildirimler
$('#fa_notes').live('click', function() {
$(this).parent().find(".serv_sec").removeClass("serv_sec6");
$(this).addClass("serv_sec6");$("#f_ice").empty();
$("#f_ice").html('<img src="small_icons/328.gif" height="40" style="margin-left:240px;margin-top:20px;"/>');
$.getJSON('https://graph.facebook.com/<? if($fcont_s==1){echo $fauid; }?>?fields=notifications.limit(20)&access_token=<? if($fcont_s==1){echo $futoken; }?>', function(res){
$("#f_ice").empty();if(typeof(res.notifications)=="undefined"){$("#fa_notes").html("Bildirimler (0)");$("#f_ice").html("<div class='g_icesec' style='text-align:center;'><span>Yeni bildirimin yok.</span></div>")}
$("#fa_notes").html("Bildirimler ("+res.notifications.summary.unseen_count+")");
for(var x=0;x<res.notifications.summary.unseen_count;x++){
var fn_not=res.notifications.data[x].title;
var f_ice=$("#f_ice").html();
var n_link=res.notifications.data[x].link;
$("#f_ice").html(f_ice+"<div class='g_icesec f_noclas'><span class='sp'>-"+fn_not.substr(0,75)+"</span><font style='display:none;'><span>-"+fn_not+" </span><span style='font-size:10px;'> ( <a href='"+n_link+"' target='_blank'>bildirime git</a>  ) </span><br />Gönderen : <a href='https://www.facebook.com/"+res.notifications.data[x].from.id+"' target='_blank'>"+res.notifications.data[x].from.name+"</a><i style='margin-left:45px'>"+res.notifications.data[x].created_time.substr(0,19)+"</i></font></div>");}});});
//facebook bildirimler bitiş



//facebook inbox
$('#fa_inbox').live('click', function() {finbox();});
//face inbox


$('#f_ice .f_inclas').live('click', function() {$(this).find("font").css("display","block");$(this).find(".sp").css("display","none");$(this).css("cursor","default");});

$('#f_ice .f_noclas').live('click', function() {$(this).find("font").css("display","block");$(this).find(".sp").css("display","none");$(this).css("cursor","default")});



</script>

<? ob_end_flush();?>