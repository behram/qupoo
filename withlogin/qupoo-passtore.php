<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{ exit('<a href="http://qupoo.com"><img src="404.jpg" style="position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:0;" /></a>');}?>
<?
require_once('db.php');


$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit('<a href="http://qupoo.com"><img src="404.jpg" style="position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:0;" /></a>');} ?><html>
<head>
</head>
<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>qupoo | passTore</title>
<style>
.passtore a:link{color:rgba(0,0,0,0);}
.passtore table{border-radius:6px;border:rgba(0,200,255,0.5) 10px solid;margin-left:auto;margin-right:auto;margin-top:80px;}
.passtore td{border:rgb(0,200,255) 4px solid;border-radius:1px;text-align:center;background:#fff;}
.passtore input{width:100%;height:100%;border:none;}
.passtore input:focus{outline:none;}
.passtore input:disabled{background:rgba(0,0,0,0);}
.passtore td{height:25px;}
.passtore td img:hover{opacity:0.7;}
.passtore .sec{background:rgb(0,200,255);cursor:pointer;}
.passtore .sec:hover{opacity:0.7}
.passtore .plus:hover{opacity:0.7;}
.passtore .refresh{height:23px;}
.passtore table{margin-bottom:200px;}
.passtore .ustdiv{position:fixed;width:100%;background-color:rgba(0,200,255,1);height:80px;z-index:9;-webkit-box-shadow:0px 0px 10px 3px #000;-ms-box-shadow:0px 0px 10px 3px #000;box-shadow:0px 0px 10px 3px #000;top:0px;left:0px;}
.passtore .ustdiv .q_sonuc_yaz{text-align:center;margin-left:250px;margin-right:200px;font-family:"Lucida Grande", sans-serif;font-size:20px;color:rgb(255,225,255);width:800px;}
.passtore .nopa{position:relative;height:20px;float:right;margin-top:-20px;margin-right:2px;cursor:pointer;opacity:0.1;}
.passtore .nopa:hover{opacity:0.9;}
.passtore span{cursor:pointer;}
.passtore .cevap_1{font-size:30px;float:left;line-height:40px;margin-left:30px;font-weight:bolder;}
.passtore .cevap_1:hover{color:#F00;}
.passtore .cevap_3:hover{color:#F00;}
.passtore .cevap_2{font-size:30px;float:right;line-height:40px;margin-right:30px;font-weight:bolder;}
.passtore .cevap_2:hover{color:rgb(0,200,255);}
.passtore .question_01{position:relative;margin-left:auto;margin-right:auto;margin-top:10px; height:60px;width:300px;background:#0F0;border-radius:5px;display:none;line-height:10px;}
.passtore .question_02{position:relative;margin-left:auto;margin-right:auto;margin-top:10px; height:60px;width:300px;background:#0F0;border-radius:5px;display:none;line-height:10px;}
.passtore .reques{font-size:15px;line-height:20px;margin-left:auto;margin-right:auto;color:#000;cursor:default;margin-top:-50px;}
</style>

<img src="qupoo_logo_go/ques1.png" style="top:0px;position:absolute;z-index:99999;height:80px;width:60px;cursor:pointer;" id="quesac_qps" title="Bu bölümde neler yapılabilir?"/>
<div class="bol_nedir" id="bune_qps" style="left:60px;height:0px;">
<div style="width:100%;height:5px;margin:0px;background:rgb(0,200,255)"></div>
<img src="small_icons/x.png" style="position:absolute;right:3px;top:8px;cursor:pointer;" id="quescl_qps"/>
<h2 style="color:rgb(0,200,255);font-weight:100;text-align:center;line-height:0px;">Bu bölümde neler yapılabilir?</h2><hr style="border:rgb(0,200,255) 1px dashed;"/>
<ul style="list-style-type:none;margin:0px;margin-left:-25px;margin-right:10px;">
<li>-PASStore yani şifre ve hesap bilgisi deposu burada qupoo's bölümünde eklediğiniz kullanıcı ad ve emailleri yeniden düzenleyebilirsiniz. Ayrıca bu hesaplarınızın şifre gibi diğer hesap ayrıntılarını da 3 farklı şekilde şifrelenen qupoo şifrenizin anahtarınız olduğu bu bölümde güvenli bir şekilde saklayabilirsiniz.</li><hr/>
<li>-<span style="color:#0F0;font-weight:bolder;">Normal Mod</span> işlemlerinizi PASStore yani bu bölümde yapmanız içindir. Herhangi bir değişiklik yaptıktan sonra kaydet'e tıklayarak bilgilerinizi güncelleyebilir. Kaldır'a tıklayarak bilgilerinizi kalıcı bir şekilde silebilirsiniz. </li><hr />
<li>-<span style="color:#0F0;font-weight:bolder;">Güvenli Mod</span> a tıkladığınızda ise http://passtore.qupoo.com da işlemlerinizi yapmayı seçmiş olursunuz. Bu sitede aynı işlevi yapar tek farkı SSL sertifikası olması ve işlemlerin 15 dk içinde sonlandırılmasıdır.</li><hr />
<li>-Ayrıca sistemde olmayan websitelerdeki varsa üyelik bilgilerinizi de en altta bulunan + yani ekle bölümüne tıklayarak buraya ekleyerek bilgilenizi güvenle saklayabilirsiniz.</li>
</ul>
</div>



<div class="passtore">
<div class="ustdiv">
<div class="q_sonuc_yaz">
<div style='line-height:80px;font-size:35px;' class="ps_sonuc">
<span id="cevap_gelen"></span>
<div class="question_01 fadeout">
<span class="reques">Silmek istediğinize emin misiniz?</span>
<span class="cevap_1">EVET</span>
<span class="cevap_2">HAYIR</span>
</div>
<div class="question_02 fadeout">
<img class="row_id" style="display:none;"/>
<span class="reques">Silmek istediğinize emin misiniz?</span>
<span style="font-size:30px;float:left;line-height:40px;margin-left:30px;font-weight:bolder;" id="" class="cevap_3">EVET</span>
<span style="font-size:30px;float:right;line-height:40px;margin-right:30px;font-weight:bolder;" class="cevap_2">HAYIR</span>
</div>
</div></div></div><img src="qupoo_logo_go/qupooo_logo4(passtore).png" style="position:fixed;z-index:9;left:65px;top:0px;"/>

<table border="1" cellspacing="5" cellpadding="0" align="center" width="800">
<tr align="center">

<td width="200" style="font-weight:bold;">Site | Konu</td>
<td width="200" style="font-weight:bold;">Kullanıcıadı | email</td>
<td width="200" style="font-weight:bold;">Şifre</td>
<td width="200" style="font-weight:bold;">Not</td>
<td width="50" style="font-weight:bold;">Kaydet</td>
<td width="50" style="font-weight:bold;">Git</td>
<td width="50" style="font-weight:bold;">Kaldır</td>
</tr>


<?
$uid=$_COOKIE['uid'];
for($x=1;$x<50;$x++){
$sira = mysql_query("SELECT * FROM `users_all_memberships` WHERE `user_id`='$uid'"); 
$result_siteid = mysql_fetch_assoc($sira); 
$site_id=$result_siteid[$x];
if($site_id==0){}else{

$sites_all = mysql_query("SELECT * FROM `sites_all` WHERE `site_id`='$site_id'");
$result_sitesall = mysql_fetch_assoc($sites_all); 
$table_n=$result_sitesall['site_table_name'];
$site_url=$result_sitesall['site_url'];

$table = mysql_query("SELECT * FROM `$table_n` WHERE `user_id`='$uid'");
$result_table = mysql_fetch_assoc($table); 
$username=$result_table['user_email'];
$userpass=$result_table['user_password'];
$userinfo=$result_table['user_extra_information'];
echo '<tr >
<form class="'.$table_n.'">
<td><input type="text" value="'.$site_url.'" disabled="disabled"/></td>
<td ><input type="text" value="'.$username.'" name="mail_unameupd"/></td>

<td><input type="password" value="'.$userpass.'" name="passupd" class="gost"/><input type="text" value="" style="display:none;" class="gost2"/><img src="small_icons/eye_inv.png"  class="nopa"></td>
<td ><input type="text" value="'.$userinfo.'" name="extraupd"/></td>
<input type="hidden" name="tname" value="'.$table_n.'" >
</form> 
<td class="sec guncel"><img src="small_icons/refresh.png"  class="refresh"/></td>
<td class="sec"><a href="'.$site_url.'" target="_blank"><img src="small_icons/link.png" class="link" /></a></td>
<td class="sec remove" id="'.$table_n.'"><img src="small_icons/trash.png" id="'.$x.'"/></td>
</tr>';
}}
$sorgu = mysql_query("SELECT * FROM `users_extra_memberships` WHERE `user_id`='$uid'");
while($sonuc = mysql_fetch_row($sorgu)) {
echo '<tr >
<form class="'.$sonuc[5].'">
<td><input type="text" value="'.$sonuc[1].'" name="issue_upd"/></td>
<td ><input type="text" value="'.$sonuc[2].'" name="mail_unameupd"/></td>
<td ><input type="password" value="'.$sonuc[3].'" name="passupd" class="gost"/><input type="text" value="'.$sonuc[3].'" style="display:none;" class="gost2"/><img src="small_icons/eye_inv.png"  class="nopa"></td>
<td ><input type="text" value="'.$sonuc[4].'" name="extraupd"/></td>
<input type="hidden" value="'.$sonuc[5].'" name="rowupd_id"/>
</form>
<td class="sec yenile"><img src="small_icons/refresh.png"  class="refresh"/></td>
<td class="sec"><img src="small_icons/link.png" class="link" /></td>
<td class="sec remove_ext" id="'.$sonuc[5].'"><img src="small_icons/trash.png"/></td>
</tr>';
}

?>
<tr >
<td style="opacity:0;"></td>
<td  style="opacity:0;"></td>
<td class="plus" style="background:rgb(0,200,255);cursor:pointer;" id="ekle_sutun"><img src="small_icons/plus2.png" style="height: 20px;" /></td>
<td  style="opacity:0;"></td>
<td style="opacity:0;"></td>
<td style="opacity:0;"></td>
</tr>


<tr style="display:none;" class="acilck">
<td  style="font-weight:bold;">Site | Konu</td>
<td  style="font-weight:bold;">Kullanıcıadı | email</td>
<td  style="font-weight:bold;">Şifre</td>
<td  style="font-weight:bold;">Not</td>
<td  style="font-weight:bold;">Ekle</td>
<td  style="font-weight:bold;">İptal</td>
<td style="font-weight:bold;">Daha</td>
</tr>

<tr style='display:none;' class='acilck' id="111">
<form id="form_1">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_1"><img src='small_icons/plus_32.png'  style='height: 18px;' /></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec' id="daha_1"><img src='small_icons/insert.png' class='link' /></td>
</tr>

<tr style='display:none;' id="222">
<form id="form_2">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_2"><img src='small_icons/plus_32.png'  style='height: 18px;' /></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec' id="daha_2"><img src='small_icons/insert.png' class='link' /></td>
</tr>

<tr style='display:none;' id="333">
<form id="form_3">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_3"><img src='small_icons/plus_32.png'  style='height: 18px;' /></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec' id="daha_3"><img src='small_icons/insert.png' class='link' /></td>
</tr>

<tr style='display:none;' id="444">
<form id="form_4">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_4"><img src='small_icons/plus_32.png'  style='height: 18px;'/></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec' id="daha_4"><img src='small_icons/insert.png' class='link' /></td>
</tr>

<tr style='display:none;' id="555">
<form id="form_5">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_5"><img src='small_icons/plus_32.png'  style='height: 18px;' /></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec'></td>
</tr>
</table>
</div>


<script>
$(document).ready(function(){

$('#ekle_sutun').click(function(event){ $(".acilck").fadeIn(800); })
$('input').live('focusin',function() {$(this).parent().css("borderColor","#0f0");});
$('input').live('focusout',function() {$(this).parent().css("borderColor","rgb(0,200,255)");});
$('.iptal').live('click',function() {$(this).parent().fadeOut();});
$('.cevap_2').live('click',function() {$(".fadeout").css("display","none");});
var acilck=$("#dahada").html();

$('#daha_1').click(function(event){ $("#222").fadeIn(); });
$('#daha_2').click(function(event){ $("#333").fadeIn(); });
$('#daha_3').click(function(event){ $("#444").fadeIn(); });
$('#daha_4').click(function(event){ $("#555").fadeIn(); });
$('#ekle_1').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_1").serialize(),success: function(veri){$('#cevap_gelen').html(veri).delay(1000);$('#b4').fadeOut().load('withlogin/qupoo-passtore.php').fadeIn();}})});
$('#ekle_2').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_2").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});
$('#ekle_3').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_3").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});
$('#ekle_4').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_4").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});
$('#ekle_5').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_5").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});


$('.remove').live('click',function() {
$(".question_01").css("display","none");
$(".question_02").fadeIn();
var tname=$(this).attr("id");
var imgid=$(this).find("img").attr("id");
$(".cevap_3").attr("id",tname);
$(".row_id").attr("id",imgid);
});

$('.cevap_3').live('click',function() { 
$(".fadeout").css("display","none");
var tname_reel=$(this).attr("id");
var row_id=$(".row_id").attr("id");
$("."+tname_reel).parent().fadeOut();
$.ajax({type: 'POST',url: 'ps_mem_del.php',data:{tname:tname_reel,row_id:row_id},success: function(veri){$('#cevap_gelen').html(veri);}})
});


$('.remove_ext').live('click',function() {
var ext_reid=$(this).attr("id");
$(".question_02").css("display","none");
$(".question_01").fadeIn();
$(".cevap_1").attr("id",ext_reid)
});

$('.cevap_1').live('click',function() {
$(".fadeout").css("display","none");
var cevap_id=$(this).attr("id");
$("."+cevap_id).parent().fadeOut();
$.ajax({type: 'POST',url: 'ps_ext_mem_del.php',data:{row_id:cevap_id},success: function(veri){$('#cevap_gelen').html(veri);}}) 
});


$('.yenile').live('click',function() {var up_id=$(this).parent().find("form").attr("class");
$.ajax({type: 'POST',url: 'ps_infoupd.php',data:$('.'+up_id).serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})  });

$('.guncel').live('click',function() {
var up_qpid=$(this).parent().find("form").attr("class");
$.ajax({type: 'POST',url: 'ps_infoupdfq.php',data:$('.'+up_qpid).serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})  });

$('.gost').live('focusin',function() {$(this).parent().find("img").css("opacity","1");});
$('.gost').live('focusout',function() {$(this).parent().find("img").css("opacity","0.1");});



$('.nopa').live('mouseover',function() {

var val_asil=$(this).parent().find('.gost').attr("value");
$(this).parent().find('.gost2').attr("value",val_asil);

$(this).parent().find(".gost").css("display","none");
$(this).parent().find(".gost2").css("display","block")

});


$('.nopa').live('mouseout',function() {
$(this).parent().find(".gost2").css("display","none")
$(this).parent().find(".gost").css("display","block");
});;})

</script>



<div class="go43 goor go3" style="position:fixed;"><img src="small_icons/prev.png" class="next"/><img src="qupoo_logo_go/qupoos.png" class="kasif"/></div>
<style>
</style>
<script>$(document).ready(function(){$('.go3').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );$(this).parent().fadeOut();$("#b3").fadeIn();})});


$(document).ready(function(){$('#quesac_qps').click(function(event){$('#bune_qps').animate({height:"480px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qps').click(function(event){$('#bune_qps').animate({height:"0px"}, 500 );$("#quesac_qps").attr("src","qupoo_logo_go/ques1.png");})});


</script>

</body>
</html>