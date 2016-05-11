<? /* $bot=$_SERVER['HTTP_REFERER'];if($bot==""){header("Location:index.php");} */

header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
header( 'Cache-Control: post-check=0, pre-check=0', false ); 
header( 'Pragma: no-cache' ); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? require_once('db.php'); ?>
<style>
table{border-radius:0px 0px 6px 6px;border:rgba(0,200,255,0.5) 10px solid;margin-left:auto;margin-right:auto;background:#fff;-webkit-user-select:all;}
td{border:rgb(0,200,255) 4px solid;border-radius:1px;text-align:center;height:35px;font-family:"Segoe UI";}
input{width:100%;height:100%;border:none;font-family:"Segoe UI";font-size:20px;font-weight:100;color:#333;}
input:focus{outline:none;}
.qus_is{background:rgb(0,200,255);cursor:pointer;}
.qus_is:hover{opacity:0.8;}
.qus_disp{display:none;}
.qus_so{position:absolute;width:500px;height:100px;left:50%;margin-left:-250px;top:50%;margin-top:-100px;background:url(qupoo_logo_go/paper/paper_son.png);box-shadow: 0px 5px 100px rgb(0,200,255);z-index:99;border-radius:5px;font-size:25px;text-align:center;line-height:50px;color:#333;font-family:"Segoe UI";font-weight:100;}
#qust_adiv{position:absolute;width:1120px;height:100%;top:0px;background:rgba(255,255,255,0.1);left:50%;margin-left:-560px;overflow:auto;}
#qusto_sgen{position:absolute;width:100%;height:100%;background:rgba(255,255,255,0.2);top:0px;left:0px;z-index:999;display:none;}

.qnote_so{position:absolute;width:500px;height:100px;left:50%;margin-left:-250px;top:50%;margin-top:-100px;background:url(qupoo_logo_go/paper/paper_son.png);box-shadow: 0px 5px 100px rgb(0,200,255);z-index:99;border-radius:5px;font-size:25px;text-align:center;line-height:50px;color:#333;display:none;}
.qnote_so .qnsor{background:rgba(0,200,255,0.5);padding:5px 20px;color:#fff;}
.qnote_so .qnsor:hover{background:rgba(0,200,255,1);cursor:pointer;}
</style>



<img src="ok/bottom_right.png" style="bottom:0px;right:0px;position:absolute;cursor:pointer;z-index:9;opacity:0.5;" id="qust_goana">
<img src="qupoo_logo_go/qupoos.png" style="position:absolute;right:-150px;bottom:0px;opacity:0;z-index:8;" id="qur_exres"/>

<div class="qnote_so" id="ququ_yorn">Silmek istediğinize emin misiniz? </br><span class="qnsor" id="ququ_yis">evet<input id="qus_sil" type="hidden"/></span><span class="qnsor" id="ququ_nis">hayır</span></div>
<div id="qusto_sgen">
<div class="qus_so"></div>

</div>
<div id="qust_adiv">
<div style="width:100%;background:#FFF;height:60px;">


<img src="qupoo_logo_go/ques1.png" style="left:0px;top:0px;position:absolute;z-index:99999;height:60px;cursor:pointer;" id="quesac_qust" title="Bu bölümde neler yapılabilir?"/>
<div class="bol_nedir" id="bune_qust" style="left:60px;">
<div style="width:100%;height:5px;margin:0px;background:rgb(0,200,255)"></div>
<img src="small_icons/x.png" style="position:absolute;right:3px;top:8px;cursor:pointer;" id="quescl_qust"/>
<h2 style="color:rgb(0,200,255);font-weight:100;text-align:center;line-height:0px;">Bu bölümde neler yapılabilir?</h2><hr style="border:rgb(0,200,255) 1px dashed;"/>
<ul style="list-style-type:none;margin:0px;margin-left:-25px;margin-right:10px;">
<li>-URLstore yani bu bölümde sevdiğiniz siteleri ve sayfaları qupoo's sayfanız yetmediği takdirde bir depo olarak kullanabilirsiniz.</li><hr/>
<li>-İstediğiniz herhangi bir websiteyi http://ornek.com olarak + işaretine tıklayarak ekleyebilirsiniz.</li><hr />
<li>-Not ile de url için bir hatırlatma ekleyebilirsiniz.</li><hr />
<li>-Kaydet'e tıklayarak eklediğiniz bilgileri güncelleyebilirsiniz.</li>
</ul>
</div>


<img src="qupoo_logo_go/url_store2.png" style="margin-left:475px;margin-top:7px;">


</div>
<table border="1" cellspacing="5" cellpadding="0" align="center" width="1000px" >

<tr>
<td width="40%">Url</td>
<td width="30%">Not</td>
<td width="10%">Git</td>
<td width="10%">Kaydet</td>
<td width="10%">Sil</td>
</tr>


<? 
$uid=htmlspecialchars($_COOKIE['uid']);
$usor= mysql_query("SELECT * FROM `urlstore_db` WHERE `user_id`='$uid' ORDER BY  `urlstore_db`.`url_id` ASC ");
if($usor==0){exit("Bir hata meydana ");}
while($usonc = mysql_fetch_row($usor)) { 

echo ' <tr id="'.$usonc[1].'">
<td><input type="text" value="'.$usonc[2].'" id="'.$usonc[1].'url" spellcheck="false"></td>
<td><input type="text" value="'.$usonc[3].'" id="'.$usonc[1].'note" spellcheck="false"></td>
<td class="qus_is"><a href="'.$usonc[2].'" target="_blank"><img src="small_icons/ustore_link2.png"></a></td>
<td class="qus_is qus_updurl" ><img src="small_icons/note_save.png"></td>
<td class="qus_is qus_udel" ><img src="small_icons/note_delete.png"></td>
</tr>';

}



?>

<tr>
<td style="opacity:0;"></td>
<td class="qus_is" id="uadd_disp"><img src="small_icons/note_plus.png"></td>
<td style="opacity:0;"></td>
<td style="opacity:0;"></td>
<td style="opacity:0;"></td>
</tr>


<tr class="qus_disp">
<td >Url</td>
<td >Not</td>
<td colspan="2" >Ekle</td>
<td >İptal</td>
</tr>



<tr class="qus_disp">
<td><input type="text" id="us_urad" spellcheck="false"></td>
<td><input type="text" id="us_notad" spellcheck="false"></td>
<td class="qus_is" colspan="2" id="usto_uad"><img src="small_icons/note_plus.png"></td>
<td class="qus_is" id="qus_doff"><img src="small_icons/note_cancel.png"></td>
</tr>

</table>


 
</div>

<script>
$(document).ready(function() {
$('#uadd_disp').click(function(event){$('.qus_disp').fadeIn(500);})
$('#qus_doff').click(function(event){$('.qus_disp').fadeOut(500);})
});


$('.qus_sonkap').live('click', function() { $('#qusto_sgen').fadeOut(500);$("#b7").load("withlogin/qupoo-ustore.php")})

$('#usto_uad').click(function(event){
var us_url=$("#us_urad").attr("value");
var us_note=$("#us_notad").attr("value");
$.post('ustore_add.php',{usto_url:us_url,usto_note:us_note},function(cik){ $("#qusto_sgen").fadeIn(200);$(".qus_so").html(cik+'<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:2px;top:2px;cursor:pointer;" class="qus_sonkap"/>'); });})


$('.qus_udel').click(function(event){var us_uid=$(this).parent().attr("id");$("#qus_sil").attr("value",us_uid);$("#ququ_yorn").fadeIn(200);})

$('#ququ_nis').click(function(event){$("#ququ_yorn").fadeOut(200);})

$('#ququ_yis').click(function(event){
	
var us_uval=$(this).parent().find("input").attr("value");
$.post('ustore_delete.php',{url_id:us_uval},function(delson){ $("#qusto_sgen").fadeIn(200);$(".qus_so").html(delson+'<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:2px;top:2px;cursor:pointer;" class="qus_sonkap"/>'); });})
	
$('#qust_goana').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );})
$("#qust_goana").mouseout(function(){$("#qur_exres").animate({bottom:"0",right:"0",opacity:0},200);$(this).css("opacity","0.5")});
$("#qust_goana").mouseover(function(){$("#qur_exres").animate({bottom:"120px",right:"70px",opacity:1},200);$(this).css("opacity","1")});
	
$('.qus_updurl').click(function(event){
var us_parid=$(this).parent().attr("id");
var us_urlval=$("#"+us_parid+"url").attr("value");
var us_urlnote=$("#"+us_parid+"note").attr("value");
$.post('ustore_upd.php',{url_id:us_parid,qus_url:us_urlval,qus_note:us_urlnote},function(cik){ $("#qusto_sgen").fadeIn(200);$(".qus_so").html(cik+'<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:2px;top:2px;cursor:pointer;" class="qus_sonkap"/>'); });})


$(document).ready(function(){$('#quesac_qust').click(function(event){$('#bune_qust').animate({height:"280px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qust').click(function(event){$('#bune_qust').animate({height:"0px"}, 500 );$("#quesac_qust").attr("src","qupoo_logo_go/ques1.png");})});





</script>