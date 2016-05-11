<? $bot=$_SERVER['HTTP_REFERER'];if($bot=="http://qupoo.com/logged.php"){}else{ exit('<a href="http://qupoo.com"><img src="404.jpg" style="position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:0;" /></a>');}?>
<?
require_once('db.php');


$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit('<a href="http://qupoo.com"><img src="404.jpg" style="position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:0;" /></a>');} ?>


<img src="qupoo_logo_go/ques1.png" style="top:0px;right:0px;position:absolute;z-index:99999;cursor:pointer;height:50px;width:50px;" id="quesac_qpro" title="Bu bölümde neler yapılabilir?"/>
<div class="bol_nedir" id="bune_qpro" style="right:50px; height:175px;">
<div style="width:100%;height:5px;margin:0px;background:rgb(0,200,255)"></div>
<img src="small_icons/x.png" style="position:absolute;right:3px;top:8px;cursor:pointer;" id="quescl_qpro"/>
<h2 style="color:rgb(0,200,255);font-weight:100;text-align:center;line-height:0px;">Bu bölümde neler yapılabilir?</h2><hr style="border:rgb(0,200,255) 1px dashed;"/>
<ul style="list-style-type:none;margin:0px;margin-left:-25px;margin-right:10px;">
<li>-qupooProfil yani bu bölümde qupoo'ya üye olduğunuz bilgileri güvenli bir şekilde güncelleyebilirsiniz.</li><hr/>
<li>-Ayrıca <span style="color:#0F0;font-weight:bolder;">hız</span> bölümünden bir kullanıcı adı belirleyerek kullanıcı adınız ve şifrenizle giriş yaparak hızınıza hız katabilirsiniz. </li>
</ul>
</div>




<div class="q_pro">
<div class="q_pro_men" id="epos">e-posta</div>
<div class="q_pro_men" id="sif">şifre</div>
<div class="q_pro_men" id="res">resim</div>
<div class="q_pro_men" id="gen">hız</div>
</div>
<div class="q_pro_change">

<div class="q_pro_change_div" id="cha_ema">
<form><input type="text" onblur="if(this.value.length == 0) this.value='yeni email';" onclick="if(this.value == 'yeni email') this.value='';" class="email_ad" value="<?=$_COOKIE['umail'];?>" spellcheck="false"/><input type="button" class="button em_up" value="güncelle" spellcheck="false"/></form><h2></h2></div>


<div class="q_pro_change_div" id="cha_pass" style="display:none;"><form><input type="password" name="pass_a" id="pass_e" style="background:url(qupoo_logo_go/eski_sifre.png) no-repeat;"/><input type="password" style="margin-top:5%;background:url(qupoo_logo_go/yeni_sifre.png) no-repeat;" name="pass_n" id="pass_y"/><input type="button" id="pass_up" class="button" value="güncelle" style="margin-top:5% !important;"/></form><h2></h2></div>

<div class="q_pro_change_div" id="cha_ima" style="display:none;"><form id="res_gunc_form"><img src="<?=$_COOKIE['uresim'];?>" style="position:absolute;left:47.5%;top:100px;border:#0F0 10px solid;" id="res_exe"/><input type="button" class="button" value="Resim seç" style="margin-top:32.5% !important;" id="re_sec" /><input type="hidden"  name="res_guncelle" id="res_sec_val"/><input type="button" class="button" value="güncelle" id="re_gun" onclick="alici()"/></form><h2></h2></div>
<div class="q_silo_imgcha">
<div class="img_opt">
<img src="images_for_login/1.jpg" />
<img src="images_for_login/3.jpg" />
<img src="images_for_login/4.jpg" />
<img src="images_for_login/5.jpg" />
<img src="images_for_login/6.jpg" />
<img src="images_for_login/7.jpg" />
<img src="images_for_login/8.jpg" />
<img src="images_for_login/9.jpg" />
<img src="images_for_login/10.jpg" />
<img src="images_for_login/11.jpg" />
<img src="images_for_login/12.jpg" />
<img src="images_for_login/13.jpg" />
</div>
</div>


<div class="q_pro_change_div" id="cha_gen" style="display:none;"><form id="nick_upt"><input type="text" onblur="if(this.value.length == 0) this.value='Kullanıcı adı';" onclick="if(this.value == 'Kullanıcı adı') this.value='';" value="Kullanıcı adı" class="email_ad" name="nick_value" spellcheck="false"/><input type="button" class="button" value="Gönder" id="nick_enter"/></form><h2>Bir kullanıcı adı belirleyerek daha hızlı kullanıcı girişi yapabilirsiniz</h2></div>

</div>
<div id="go13" class="go13 goor go3"><img src="small_icons/bottom.png" class="top"/><img src="qupoo_logo_go/qupoos.png" class="qupoohelp"/></div>
<script>
$(document).ready(function(){
	
$('#pass_e').focus(function(event){$(this).css("background","none");})
$('#pass_y').focus(function(event){$(this).css("background","none");})
	
	
$("#cha_pass,#cha_ima,#cha_gen").fadeOut();
$("#epos").click(function(){
$("#cha_ema").fadeIn();$("#cha_pass,#cha_ima,#cha_gen").css("display","none");})
$("#sif").click(function(){
$("#cha_pass").fadeIn();$("#cha_ema,#cha_ima,#cha_gen").css("display","none");})
$("#res").click(function(){
$("#cha_ima").fadeIn();$("#cha_pass,#cha_ema,#cha_gen").css("display","none");})
$("#gen").click(function(){   
$("#cha_gen").fadeIn();$("#cha_pass,#cha_ema,#cha_ima").css("display","none");});});

$('.go3').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );$("#b3").fadeIn();})
$(".em_up").click(function(){
var email_ad=$(".email_ad").attr("value");
var ust=$(this).parent().parent();
$.ajax({
url:"update.php",
type:"POST",
data:{email:email_ad},
dataType:"html",
cache:false,
success:function(cevap){$(ust).find("h2").fadeIn().html(cevap).delay(2000).fadeOut();}
});});
</script>

<script>
$("#pass_up").click(function(){
var pass_e=$("#pass_e").attr("value");
var pass_y=$("#pass_y").attr("value");
var ustust=$(this).parent().parent();
$.ajax({
url:"pass_up.php",
type:"POST",
data:{pass_a:pass_e,pass_n:pass_y},
dataType:"html",
cache:false,
success:function(cevap){$(ustust).find("h2").fadeIn().html(cevap).delay(2000).fadeOut();}
});});


$("#nick_enter").click(function(){
	var ustust1=$(this).parent().parent();
$.ajax({
url:"nick_enter.php",
type:"POST",
data: $('#nick_upt').serialize(),
dataType:"html",
cache:false,
success:function(cevap){$(ustust1).find("h2").fadeIn().html(cevap).delay(5000).fadeOut();}
});});


$(document).ready(function() {
$('#re_sec').click(function(event){$('.q_silo_imgcha').fadeIn();});
$('.img_opt img').click(function(event){
$('#res_exe').css("display","block");	
var resrc=$(this).attr("src");
$('#res_sec_val').attr("value",resrc);
$('#res_exe').attr("src",resrc);
$('.q_silo_imgcha').fadeOut();});});
function alici() {
$.ajax({
type: 'POST',
url: 'res_upt.php',
data: $('#res_gunc_form').serialize(),
error:function(){ $('#cha_ima h2').html("Bir hata meydana geldi..."); },
success: function(veri){ $('#cha_ima h2').html(veri);}});
}


$(document).ready(function(){$('#quesac_qpro').click(function(event){$('#bune_qpro').animate({height:"175px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qpro').click(function(event){$('#bune_qpro').animate({height:"0px"}, 500 );$("#quesac_qpro").attr("src","qupoo_logo_go/ques1.png");})});


</script>
<style>
/*qupoo profil css başlangıç*/
.q_pro{position:absolute;height:100%;width:150px;left:-75px;background-color:rgba(255,255,255,0.5);top:0px;-webkit-transition:all 0.15s ease-in;-ms-transition:all 0.15s ease-in;transition:all 0.15s ease-in;border-radius:0 10px 0;z-index:99;}
.q_pro:hover{left:-5px;background-color:rgb(255,255,255);}
.q_pro_men{position:relative;width:100px;height:100px;border:20px rgba(0,200,255,0.5) solid;background-color:rgba(255,255,255,1);border-radius:200px;-ms-border-radius:200px;top:0px;left:0px;margin:7px;
text-align:center;font-weight:bolder;line-height:100px;font-size:25px;font-family:"Lucida Grande", sans-serif; -webkit-transition:all 0.1s ease-in;-ms-transition:all 0.1s ease-in;transition:all 0.1s ease-in; color:rgba(0,200,255,0.5);cursor:pointer;}
.q_pro_men:hover{opacity:1;color:rgba(255,255,255,1);background-color:rgba(0,200,255,0.5);border:20px rgba(0,200,255,0.0) solid;}
.q_pro_change{position:absolute;width:100%;height:100%;left:0;top:0px;background-color:rgba(255,255,255,0.5);z-index:9;}
.q_pro_change_div{margin-left:auto;margin-right:auto;margin-top:2%; width:600px;height:600px;background-color:rgba(255,255,255,1);border-radius:1000px;-ms-border-radius:1000px;-webkit-box-shadow: 0 0px 20px 0px rgba(0,0,0,0.5);-ms-box-shadow: 0 0px 20px 0px rgba(0,0,0,0.5);box-shadow: 0 0px 20px 0px rgba(0,0,0,0.5);}
.q_pro_change_div h2{color:rgba(0,200,255,1);margin:30px;text-align:center;}
.q_pro_change_div input{width:360px;height:50px;border:rgba(0,200,255,0.5) 10px solid;outline:none;font-size:200%;text-align:center;color:rgba(0,200,255,1);border-radius:100px;margin-left:20%;margin-right:20%;margin-top:30%;position:relative;}
.q_pro_change_div input:focus{outline:none;border-color:rgba(0,200,255,0.8);}
.q_pro_change_div input:hover{border:# 10px solid;border-color:rgba(0,200,255,0.8);}
.q_pro_change_div .button{width:63%;height:70px;background-color:rgba(0,200,255,0.5);color:#FFF;border:none;margin-top:15% !important;cursor:pointer;}
.q_pro_change_div .button:hover{background-color:rgba(0,200,255,0.8);}

.q_silo_imgcha{position:absolute;width:100%;height:100%;top:0px;left:0px;background:rgba(255,255,255,0.6);z-index:99999;display:none;}
.q_silo_imgcha .img_opt{width:372px;height:210px;margin-left:auto;margin-right:auto;margin-top:15%;background:#fff;padding:10px;}
.img_opt img{width:80px;border:5px #0f0 solid;cursor:pointer;}
.img_opt img:hover{border:5px #f00 solid;}
/*qupoo profil css bitiş */
</style>