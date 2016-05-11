<? /* $bot=$_SERVER['HTTP_REFERER'];if($bot==""){header("Location:index.php");} */

header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
header( 'Cache-Control: post-check=0, pre-check=0', false ); 
header( 'Pragma: no-cache' ); 
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="image_src" href="logo_33.png" />
<?
require_once('db.php');
$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h<1){ exit("Bir hata meydana geldi");}   ?> 

<style>
.qp_note_ana{width:1020px;height:100%;background:rgba(255,255,255,0.1);overflow:auto;position:absolute;top:0px;left:50%;margin-left:-510px;}
.qp_note{width:300px;height:200px;position:relative;margin-left:30px;margin-top:30px; float:left;z-index:1;}
.note_opt{position:absolute;width:200px;height:30px;left:50%;top:2px;margin-left:-100px;background:rgb(0,200,255);border-radius:20px 20px 0 0;overflow:hidden;}
.note_opt img{margin:0px;margin-left:-5px;border-radius:20px 0 0 0;cursor:pointer;}
.note_opt img:hover{background:rgb(0,255,0);}
.note_add{border-radius:5px;opacity:0.8;cursor:pointer;}
.note_add:hover{opacity:1;}
.qp_note textarea{border:none;background:rgba(0,0,0,0);resize:none;overflow:hidden;color:#333;outline:0;width:250px;height:180px;position:absolute;z-index:99;
font-family:"Segoe UI";font-size:19px;font-weight:100;line-height:21px;0px 5px 30px rgb(0,200,255);padding-top:13px;margin-left:20px;-webkit-user-select:all;-moz-user-select:all;user-select:all;}
.qp_note:hover .note_opt{top:-28px;transition:all 0.1s ease-in;}
.qnote_so{position:absolute;width:500px;height:100px;left:50%;margin-left:-250px;top:50%;margin-top:-100px;background:url(qupoo_logo_go/paper/paper_son.png);box-shadow: 0px 5px 100px rgb(0,200,255);z-index:99;border-radius:5px;font-size:25px;text-align:center;line-height:50px;color:#333;display:none;}
.qnote_so .qnsor{background:rgba(0,200,255,0.5);padding:5px 20px;color:#fff;}
.qnote_so .qnsor:hover{background:rgba(0,200,255,1);cursor:pointer;}
.qnote_genson{position:fixed;left:0px;top:0px;width:100%;height:100%;background:rgba(0,0,0,0.1);z-index:99999;display:none;}

#qps_go{position:absolute;bottom:0px;left:0px;z-index:999;opacity:0.7;cursor:pointer;}
#qps_go:hover{opacity:1;}
.paylas{position:absolute;width:640px;height:160px;margin-left:-320px;background:rgba(255,255,255,1);box-shadow:0px 0px 100px rgb(0,200,255);left:50%;top:50%;margin-top:-80px;z-index:999;display:none;}
.paylas img{margin-top:5px;margin-left:5px;cursor:pointer;}
.paylas img:hover{opacity:0.9;}
.sha_ver{position:absolute;width:294px;height:194px;margin:2px;z-index:3;}
.qnsimg_an{position:absolute;top:210px;width:100%;height:240px;background:rgb(0,200,255);left:0px;color:#FFF;font-family:"Segoe UI";font-size:20px;font-weight:100;}
.qn_simg{height:30px;width:100%;background:#fff;margin-top:5px;font-family:"Segoe UI";font-size:25px;color:rgb(0,200,255);line-height:25px;text-align:center;}
.qnsimg_an img{vertical-align:middle;margin:5px;}
</style>


<img src="ok/bottom_left.png" id="qps_go"/>
<img src="qupoo_logo_go/qupoos.png" style="position:absolute;left:-150px;bottom:0px;opacity:0;" class="qn_gqp"/>

<img src="qupoo_logo_go/ques1.png" style="right:0px;top:0px;position:absolute;z-index:99999;height:60px;cursor:pointer;" id="quesac_qnote" title="Bu bölümde neler yapılabilir?"/>
<div class="bol_nedir" id="bune_qnote" style="right:60px;">
<div style="width:100%;height:5px;margin:0px;background:rgb(0,200,255)"></div>
<img src="small_icons/x.png" style="position:absolute;right:3px;top:8px;cursor:pointer;" id="quescl_qnote"/>
<h2 style="color:rgb(0,200,255);font-weight:100;text-align:center;line-height:0px;">Bu bölümde neler yapılabilir?</h2><hr style="border:rgb(0,200,255) 1px dashed;"/>
<ul style="list-style-type:none;margin:0px;margin-left:-25px;margin-right:10px;">
<li>-qupooNOTE yani bu bölümde yapacaklarınızı aklınıza gelen bir şeyi veya sevdiğiniz bir haberi veya yazıyı saklayabilirsiniz.</li><hr/>
<li>-İstediğiniz zaman istediğiniz yerde yeni bir not ekleyebilir düzenleyebilir veya silebilirsiniz.</li><hr />
<li>-En güzel yanı ise istediğiniz notu 5 saniye içerisinde sadece tek tıkla istediğiniz ortamda paylaşabilirsiniz.</li>
</ul>
<div class="qnsimg_an">
<div class="qn_simg">SİMGE ANLAM</div>
<img src="small_icons/note_share.png"/>Not paylaşabilirsiniz.</br>
<img src="small_icons/note_plus.png"/>Not ekleyebilirsiniz.</br>
<img src="small_icons/note_save.png"/>Notu güncelleyebilirsiniz.</br>
<img src="small_icons/note_delete.png"/>Notu silebilirsiniz.</br>
<img src="small_icons/note_cancel.png"/>İptal edebilirsiniz.</br>
</div>
 

</div>

<div class="qp_note_ana">
<div style="width:100%;height:60px;background:#FFF;"><img src="qupoo_logo_go/qupoo_note2.png" style="height:100%;margin-left:430px;left:50%;"/></div>

<? 

$uid=$_COOKIE['uid'];
$sorgu = mysql_query("SELECT * FROM `qupoonote_db` WHERE `user_id`='$uid' ORDER BY  `note_id` ASC ");
if($sorgu==0){exit("bir hata oldu");}
while($sonuc = mysql_fetch_row($sorgu)) { 

echo ' <div class="qp_note" id="'.$sonuc[0].'">
<div class="sha_ver"></div>
<img src="qupoo_logo_go/paper/paper2.png" style="z-index:2;position:absolute;"/>
<textarea id="'.$sonuc[0].'text"  spellcheck="false">'.$sonuc[2].'</textarea>
<div class="note_opt">
<img src="small_icons/note_save.png" style="margin-left:0px;" class="note_save"/>
<img src="small_icons/note_share.png" style="border-radius:0px;" class="qn_payl selamben"/>
<img src="small_icons/note_delete.png"  style="border-radius:0 20px 0px 0;margin-left:-4px;" class="note_delete"/>
</div>
</div>';

}

?>
<div class="qp_note not_ekdisp" style="display:none;" id="555">
<div class="note_opt">
<img src="small_icons/note_plus.png" style="margin-left:0px;" id="qnote_add"/>
<img src="small_icons/note_share.png" style="border-radius:0px;" class="qn_payl"/>
<img src="small_icons/note_cancel.png"  style="border-radius:0 20px 0px 0;margin-left:-4px;" id="noteadd_can"/>
</div>
<img src="qupoo_logo_go/paper/paper2.png" style="width:300px;height:200px;z-index:2;position:absolute;"/>
<textarea  id="555text" spellcheck="false"></textarea>
</div>


<div class="qp_note"><img src="qupoo_logo_go/paper/ekle.png" style="width:300px;height:200px;" class="note_add"/></div>



<div class="qnote_genson" ><div class="qnote_so" id="qnoso_yaz" style="display:block;"></div></div>


</div>



<div class="qnote_so" id="qnsor_yorn">Bu notu silmek istediğinize emin misiniz? <span class="qnsor" id="qnssor_yis">evet<input id="qn_sil" style="display:none;" value=""/></span><span class="qnsor" id="qnssor_nis">hayır</span><img src="small_icons/Xion - Kopya.png" style="position:absolute;right:2px;top:2px;cursor:pointer;" id="sor_ynkap"/></div>


<div class="paylas">
<input value="" class="sh_value" type="hidden"/>
<img src="biz_image/twitter2.png" width="150" height="150" class="sh_twit"/>
<img src="biz_image/tumblr.png" width="150" height="150" class="sh_tumb"/>
<img src="biz_image/facebook.png" width="150" height="150" class="sh_face"/>
<img src="biz_image/google2.png" width="150" height="150" class="sh_plus"/>
<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:0px;top:-3px;cursor:pointer;" class="pay_gizle"/>
</div>

<script>
$(document).ready(function(){
$('.note_add').click(function(event){$('.not_ekdisp').fadeIn(500);$(this).fadeOut(0)});//+ kaybol text göster


$("#qps_go").mouseout(function(){$(".qn_gqp").animate({bottom:"0",left:"0",opacity:0},200);});
$("#qps_go").mouseover(function(){$(".qn_gqp").animate({bottom:"120px",left:"70px",opacity:1},200);});
	
	

$('#noteadd_can').click(function(event){$('.not_ekdisp').fadeOut(0);$(".note_add").fadeIn(500)})//text cancel + goster


$('#n_clo').live('click', function() {$("#b6").load("withlogin/qupoo-note.php");})//close ve div refresh

$('.note_delete').click(function(event){$("#qnsor_yorn").fadeIn(200); var qn_valu_ata=$(this).parent().parent().attr("id");$("#qn_sil").attr("value",qn_valu_ata);})//input a value atanır

$('#qnssor_yis').click(function(event){ var qn_del={note:$("#qn_sil").attr("value")};$("#qnsor_yorn").fadeOut(0);$(".qnote_genson").fadeIn();$.post('note_delete.php',qn_del,function(veri){ $("#qnoso_yaz").html(veri+'<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:2px;top:2px;cursor:pointer;" id="n_clo"/>'); })})


$('#qnssor_nis').click(function(event){$("#qnsor_yorn").fadeOut();})

$(".note_save").live('click', function() {
$(".qnote_genson").fadeIn();
var qn_id=$(this).parent().parent().attr("id");
var qnadd_note="#"+$(this).parent().parent().attr("id")+"text";
var textval2=$(qnadd_note).attr("value");
var textval=textval2.split("'").join('`');
$.post('note_upd.php',{noteid:qn_id,note:textval},function(cik){ $("#qnoso_yaz").html(cik+'<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:2px;top:2px;cursor:pointer;" id="n_clo"/>'); })})

$('.pay_gizle').click(function(event){$('.paylas').fadeOut(200);})

$('.qn_payl').click(function(event){
	
	var text_id="#"+$(this).parent().parent().attr("id")+"text";
	
	var are_va=$(text_id).attr("value");
    var goog_val = are_va.split(' ').join('-');
	$(".paylas").fadeIn();
	$('.sh_twit').click(function(event){window.open('https://twitter.com/intent/tweet?source=webclient&text='+are_va,'sharer','width=440,height=420'); return false;})
	$('.sh_tumb').click(function(event){window.open('http://www.tumblr.com/share/quote?quote='+are_va+'&source=','sharer','width=440,height=420'); return false;})
	$('.sh_face').click(function(event){window.open('http://www.facebook.com/sharer.php?u=http://qupoo.com/share.php?me='+are_va,'sharer','toolbar=0,width=440,height=420'); return false;})
	$('.sh_plus').click(function(event){window.open('https://plus.google.com/share?url=http://qupoo.com/share.php?me='+goog_val,'sharer','toolbar=0,width=440,height=420'); return false;})
	
	
	})

$('#qps_go').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );})
$('#sor_ynkap').click(function(event){$('#qnsor_yorn').fadeOut(200);})
$('textarea').focus(function(event){$(this).parent().find(".sha_ver").css("boxShadow","0px 10px 40px rgb(0,200,255)");})
$('textarea').focusout(function(event){$(this).parent().find(".sha_ver").css("boxShadow","none");})



;})

$('#quesac_qnote').click(function(event){$('#bune_qnote').animate({height:"450px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qnote').click(function(event){$('#bune_qnote').animate({height:"0px"}, 500 );$("#quesac_qnote").attr("src","qupoo_logo_go/ques1.png");})


$('#qnote_add').click(function(event){ var qnveri={note:$("#555text").attr("value").split("'").join('`')};$.post('note_add.php',qnveri,function(cevap){$(".qnote_genson").fadeIn();$("#qnoso_yaz").html(cevap+'<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:2px;top:2px;cursor:pointer;" id="n_clo"/>');alert(qnveris) })})//veriler gonder 
</script>