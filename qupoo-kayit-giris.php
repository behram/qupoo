<? $bot=$_SERVER['HTTP_REFERER'];if(strpos($bot,"qupoo.com")){}else{ header("Location:hata.php");} ?>
<style>
.passfor{background:rgb(0,200,255);color:#fff;font-family:'Segoe UI'; line-height:60px;padding:2px 15px;border-radius:30px;opacity:0.4;}
.passfor:hover{opacity:1;}
a:link{text-decoration:none;}
</style>
<div class="kg_ena">

<div class="sonuc"></div>


<div class="form_ana">
<div class="kayit_ol" id="kayit_div">Kayıt Ol</div>
<div class="giris_yap" id="giris_div">Giriş Yap</div>
<div class="kayit_form">
<form id="signin">
<input type="text" onblur="if(this.value.length == 0) this.value='E-mail';" onclick="if(this.value == 'E-mail') this.value='';" value="E-mail" name="email" spellcheck="false"/>
<input type="text" value="Şifre" style="position:absolute;top:84px;background:rgba(0,0,0,0)" id="gizle" spellcheck="false"/>
<input type="password"  id="goster" name="sifre"/>
<input type="text" value="Şifreyi Tekrar Girin"  style="position:absolute;top:168px;background:rgba(0,0,0,0)" id="gizle2" spellcheck="false"/>
<input type="password"  id="goster2" name="sifre2"/>
<input type="button" value="Resim Seç" id="re_sec_buton"/>
<input type="hidden" name="resim"  id="re_sec_value"/>
<input type="button" value="qupoo'ya Katıl" style="border:none;" onclick="alici();"/>
</form>
</div>
<div class="giris_form">
<form id="login">
<input type="text" style="margin-top:15%;" onblur="if(this.value.length == 0) this.value='E-mail | Kullanıcıadı';" onclick="if(this.value == 'E-mail | Kullanıcıadı') this.value='';" value="E-mail | Kullanıcıadı" name="logmail" class="name_enter" spellcheck="false"/>
<input type="text" value="Şifre"  style="position:absolute;top:173.5px;background:rgba(0,0,0,0)" id="gizle3" spellcheck="false"/>
<input type="password" style="margin-top:15%;" id="goster3" name="logpass"/>
<input type="hidden" id="re_sec_value2" name="resim" />
<input type="button" value="Giriş Yap" style="margin-top:15%;border:none;" id="login_imgopt"/>
</form>


<div style="width:100%;text-align:center"><a href="verifyemail.php"><span class="passfor">Şifremi unuttum</span></a></div>

</div>



</div>
<div class="q_silo_imgcha">
<div class="img_opt">
<div class="warn"><h3 style="font-weight:200;">Girişlerinizi bu resimle yapacağınız için lütfen resminizi unutmayınız!</h3></div>
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
<div class="q_silo_imgcha2">
<div class="img_opt2">
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
</div>
<script type="text/javascript">
$(document).ready(function() {
	
$('.go3').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );$("#b3").fadeIn();})
	
	
$('#re_sec_buton').click(function(event){$('.q_silo_imgcha').fadeIn();});
$('.img_opt img').click(function(event){
var resrc=$(this).attr("src");
$('#re_sec_value').attr("value",resrc);
$('.q_silo_imgcha').fadeOut();});});
function alici() {
$('#b1 .sonuc').css("display","block");
$.ajax({
type: 'POST',
url: 'usersing.php',
data: $('#signin').serialize(),
error:function(){ $('#b1 .sonuc').html("Bir hata meydana geldi..."); },
success: function(veri){ if(veri==1){window.location="logged.php";}else{$('.sonuc').html(veri);}}});
}
</script>
<script type="text/javascript">	
$(document).ready(function() {
$('#kayit_div').click(function(event){
	$('.kayit_form').fadeIn();
	$('.giris_form').fadeOut();
		$(this).css("color","rgb(255,255,255)").css("background","rgba(0,200,255,1)")
		$('#giris_div').css("color","rgb(0,200,255)").css("background","rgba(255,255,255,0)")
	
});

$('#giris_div').click(function(event){
	$('.giris_form').fadeIn();
	$('.kayit_form').fadeOut();
		$(this).css("color","rgb(255,255,255)").css("background","rgba(0,200,255,1)")
		$('#kayit_div').css("color","rgb(0,200,255)").css("background","rgba(255,255,255,0)")
});



$('#gizle').focus(function(event){$(this).hide();$("#goster").focus();});
$('#gizle2').focus(function(event){$(this).hide();$("#goster2").focus();});
$('#gizle3').focus(function(event){$(this).hide();$("#goster3").focus();});


$("#goster3,.name_enter").keypress(function(event) {if (event.which == 13) {event.preventDefault();$('.q_silo_imgcha2').fadeIn();}});

$('#login_imgopt').click(function(event){$('.q_silo_imgcha2').fadeIn();});
$('.img_opt2 img').click(function(event){var resrc2=$(this).attr("src");$('#re_sec_value2').attr("value",resrc2);
$('#b1 .sonuc').css("display","block");
$.ajax({
type: 'POST',
url: 'login.php',
data: $('#login').serialize(),
error:function(){ $('#b1 .sonuc').html("Bir hata meydana geldi!"); },
success: function(veri){ if(veri==1){window.location="logged.php";}else{$('.sonuc').html(veri);$('.q_silo_imgcha2').fadeOut();}}});
});
});
</script>  
<style>
/*qupoo sing and login css başlangıç*/
.kg_ena .form_ana{position:absolute;left:50%; width:450px;height:500px;border-radius:30px 0;margin-left:-225px;background:rgba(255,255,255,0.1);top:50%;margin-top:-250px;}
.kg_ena .kayit_ol{position:absolute;top:15px;left:25px;width:200px;height:50px;background:rgba(255,255,255,0);border-radius:50px 0px;font-size:30px;text-align:center;line-height:50px;font-weight:500;font-family:Verdana, Geneva, sans-serif;color:rgba(255,255,255,1);cursor:pointer;-webkit-transition:all 0.15s ease-in;transition:all 0.15s ease-in;}
.kg_ena .giris_yap{position:absolute;top:15px;right:25px;width:200px;height:50px;background:rgb(0,200,255);border-radius:50px 0px;font-size:30px;text-align:center;line-height:50px;font-weight:500;font-family:Verdana, Geneva, sans-serif;color:rgb(255,255,255);cursor:pointer;-webkit-transition:all 0.15s ease-in;transition:all 0.15s ease-in;}
.kg_ena .kayit_form{position:absolute;top:60px;left:0px;background:rgba(0,255,0,0);width:100%;height:450px;border-radius:0px 0px 15px 15px;display:none;}
.kg_ena .giris_form{position:absolute;top:60px;left:0px;background:rgba(0,255,0,0);width:100%;height:450px;border-radius:0px 0px 15px 15px;display:block;}
.kg_ena input{width:80%;height:50px;border:rgba(255,255,255,1) 5px dashed;outline:none;font-size:25px;text-align:center;color:rgba(255,255,255,0.5);border-radius:100px;margin-left:10%;margin-right:10%;margin-top:5%;background:rgba(0,200,255,0.7)}
.kg_ena input:focus{color:rgba(255,255,255,1);}
.kg_ena input[type=button]{width:82.5%;height:60px; background-color:rgba(0,200,255,0.7);color:#FFF;margin-top:5%;cursor:pointer;font-size:30px;}
.kg_ena input[type=button]:hover{background-color:rgba(0,200,255,1);}


.kg_ena .sonuc{background-color:rgba(255,255,255,0.1);height:70px;border:rgba(255,255,255,0.1) 5px dotted;border-radius:10px;-ms-border-radius:20px;line-height:70px;margin-left:auto;width:40%;margin-right:auto;
text-align:center;font-size:30px;font-family:Verdana, Geneva, sans-serif;z-index:9999;color:rgb(0,200,255);display:none;min-width:500px;}
.kg_ena .warn{width:392px;height:60px;margin-top:-80px;margin-left:-10px; background:#fff;color:rgb(0,200,255);text-align:center;}
.kg_ena .singana ::-webkit-input-placeholder { color:#000; }

.kg_ena .q_silo_imgcha{position:absolute;width:100%;height:100%;top:0px;left:0px;background:rgba(255,255,255,0.6);z-index:99999;display:none;}
.kg_ena .q_silo_imgcha .img_opt{width:372px;height:210px;margin-left:auto;margin-right:auto;margin-top:15%;background:#fff;padding:10px;}
.kg_ena .img_opt img{width:80px;border:5px #0f0 solid;cursor:pointer;}
.kg_ena .img_opt img:hover{border:5px #f00 solid;}

.kg_ena .q_silo_imgcha2{position:absolute;width:100%;height:100%;top:0px;left:0px;background:rgba(255,255,255,0.6);z-index:9999;display:none;}
.kg_ena .q_silo_imgcha2 .img_opt2{width:372px;height:210px;margin-left:auto;margin-right:auto;margin-top:15%;background:#fff;padding:10px;}
.kg_ena .img_opt2 img{width:80px;border:5px #0f0 solid;cursor:pointer;}
.kg_ena .img_opt2 img:hover{border:5px #f00 solid;}
/*qupoo sing and login css bitiş*/
</style>