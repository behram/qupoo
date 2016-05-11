$(document).ready(function() {
$('#go1').click(function(event){$('.nediv').animate({top:"-0%"}, 300 );$("#b3").fadeOut();$("#b1").fadeIn();})


$('#sag_ust').click(function(event){$('.nediv').animate({left:"-200%",top:"0%"},400);})
$('#sag_ust').one("click",function(){$('#b6').load('withlogin/qupoo-note.php');});


$('#sol_ust').click(function(event){$('.nediv').animate({left:"0%",top:"0%"},400);})
$('#sol_ust').one("click",function(){$("#b7").load("withlogin/qupoo-ustore.php");});

$('#sol_alt').one("click",function(){$('#b8').load('withlogin/qupoo-music2.php');});
$('#sol_alt').click(function(event){$('.nediv').animate({left:"0%",top:"-200%"},500);})

$('#go1').one("click",function(){$('#b1').load('withlogin/qupoo-profil.php');});

$('#go2,#sol_yarim').live('click', function() {$('.nediv').animate({left:"-0%"}, 350 );$("#b3").fadeOut();$("#b2").fadeIn();})
$('#go2,#sol_yarim').one("click",function(){$('#b2').load('withlogin/qupoo-kasif.php');});
$('#go5').click(function(event){$('.nediv').animate({top:"-200%"}, 350 );$("#b3").fadeOut();$("#b5").fadeIn();})
$('#go5').one("click",function(){$('#b5').load('withlogin/qupoo-help.php');});
;});

$(document).ready(function(){$('#quesac_qps').click(function(event){$('#bune_qps').animate({height:"480px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qps').click(function(event){$('#bune_qps').animate({height:"0px"}, 500 );$("#quesac_qps").attr("src","qupoo_logo_go/ques1.png");})});

$(document).ready(function(){
	$('.home_iptal').click(function(event){
		
		$('.home_y').animate({left:"-5000px"},2000);
		$('.home_n').animate({left:"5000px"},2000);
		$('.home_page').fadeOut(1500);
	
	
	})
	
	$('#sag_ust').hover(function(event){$(this).css("opacity","0.9");})
		$('#sag_ust').mouseout(function(event){$(this).css("opacity","0.5");})
		$('#sol_ust').hover(function(event){$(this).css("opacity","0.9");})
		$('#sol_ust').mouseout(function(event){$(this).css("opacity","0.5");})
		
		
		$("#sag_ust").mouseout(function(){$(".qn_logo").animate({top:"10%",right:"0%",opacity:0},200);});
	$("#sag_ust").mouseover(function(){$(".qn_logo").animate({top:"20%",right:"5%",opacity:1},200);});
	$("#sol_ust").mouseout(function(){$(".us_logo").animate({top:"10%",left:"0%",opacity:0},200);});
	$("#sol_ust").mouseover(function(){$(".us_logo").animate({top:"20%",left:"5%",opacity:1},200);});
		
	
	
	$("#sol_alt").mouseout(function(){$(".qm_logo").animate({bottom:"20%",left:"3%",opacity:0.9},200);});
	$("#sol_alt").mouseover(function(){$(".qm_logo").animate({bottom:"20%",left:"5%",opacity:1},200);});
	
	
		
	$("#sag_alt").mouseout(function(){$(".qb_logo").animate({bottom:"20%",right:"3%",opacity:0.9},200);});
	$("#sag_alt").mouseover(function(){$(".qb_logo").animate({bottom:"22%",right:"5%",opacity:1},200);});
	$('#sag_alt').one("click",function(){$('#b9').load('withlogin/qupoo-box.php');});
    $('#sag_alt').click(function(event){$('.nediv').animate({left:"-200%",top:"-200%"},500);})




	$('.add_user_close').click(function(event){$('.user_add').fadeOut(400);})
	
$('#sag_yarim').live('click', function() {$('.url_ekle').fadeIn(400);});

$('.addurl_close').click(function(event){$('.url_ekle').fadeOut(1000);$('.q_qs_ana_div').load("withlogin/logged.php")});})


$(".remove").live('click', function() {
$(this).parent().animate({width:"0%",margin:"0px"}, 1000);
$(".ortak").fadeOut(1);
var remo=$(this).parent().attr("id");
$.ajax({
url:"remove.php",
type:"POST",
data:{site_id:remo},
dataType:"html",
cache:false,});});

$('#home_sonra').click(function(event){$.ajax({url:"ana_gun.php",type:"POST",cache:false});})
$(".user").live('click', function() {
	$('.user_add').fadeIn();
	var site_tname=$(this).attr("id");
	$(".user_add_ic #site_tname").attr("value",site_tname);});
	
$(".user_add_send").live('click', function() {
	$.ajax({type: 'POST',url: 'add_user.php',data: $('#user_add_site').serialize(),success: function(veri){$('#user_add_cevap').fadeIn(400).html(veri).delay(900).fadeOut(300);}})
	});
	
	
	
	
$(".url_ekle_send").click(function(){$.ajax({type: 'POST',url: 'addurl.php',data: $('#add_url_site').serialize(),success: function(veri){$('#url_cevap').fadeIn(50).html(veri).delay(900).fadeOut(300);}});});


$(".bilgi").live('click', function() {
	var sid=$(this).attr("id");
	$.ajax({
		url:"info.php",
		type:"POST",
		data:{site_id:sid},
		dataType:"html",
		cache:false,
		success:function(cevap){$('.qupoos_info_sonuc').fadeIn().html(cevap)}
	});
	});
	
$(document).ready(function(){$('.go3').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );$(this).parent().fadeOut();$("#b3").fadeIn();})});

$("#user_add_site").live('keypress', function(e) {
if (e.which == 13) {
return false;
}
});

$(document).ready(function(){$('#quesac_qupoos').click(function(event){$('#bune_qupoos').animate({height:"400px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})});
$(document).ready(function(){$('#quescl_qupoos').click(function(event){$('#bune_qupoos').animate({height:"0px"}, 500 );$("#quesac_qupoos").attr("src","qupoo_logo_go/ques1.png");})});