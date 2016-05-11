$(document).ready(function() {
$('#go1').click(function(event){$('.nediv').animate({top:"-0%"}, 300 );})


$('#sag_ust').click(function(event){$('.nediv').animate({left:"-200%",top:"0%"},400);});


$('#sol_ust').click(function(event){$('.nediv').animate({left:"0%",top:"0%"},400);});

$('#sol_alt').one("click",function(){$('#b8').load('withlogin/qupoo-music2.php');});
$('#sol_alt').click(function(event){$('.nediv').animate({left:"0%",top:"-200%"},500);})



$('#go2,#sol_yarim').live('click', function() {$('.nediv').animate({left:"-0%"}, 350 );})


$('#go5').click(function(event){$('.nediv').animate({top:"-200%"}, 350 );})


;});

$(document).ready(function(){$('#quesac_qps').click(function(event){$('#bune_qps').animate({height:"480px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qps').click(function(event){$('#bune_qps').animate({height:"0px"}, 500 );$("#quesac_qps").attr("src","qupoo_logo_go/ques1.png");})});


	
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
    $('#sag_alt').click(function(event){$('.nediv').animate({left:"-200%",top:"-200%"},500);})






$(".remove").live('click', function() {
$(this).parent().animate({width:"0%",margin:"0px"}, 1000);
$(".ortak").fadeOut(1);});
	
$(document).ready(function(){$('.go3').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );$("#b3").fadeIn();})});


$(document).ready(function(){$('#quesac_qupoos').click(function(event){$('#bune_qupoos').animate({height:"400px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})});
$(document).ready(function(){$('#quescl_qupoos').click(function(event){$('#bune_qupoos').animate({height:"0px"}, 500 );$("#quesac_qupoos").attr("src","qupoo_logo_go/ques1.png");})});






$('#qps_go').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );})
$('#sor_ynkap').click(function(event){$('#qnsor_yorn').fadeOut(200);})
$("#qps_go").mouseout(function(){$(".qn_gqp").animate({bottom:"0",left:"0",opacity:0},200);});
$("#qps_go").mouseover(function(){$(".qn_gqp").animate({bottom:"120px",left:"70px",opacity:1},200);});
$('#quesac_qnote').click(function(event){$('#bune_qnote').animate({height:"450px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qnote').click(function(event){$('#bune_qnote').animate({height:"0px"}, 500 );$("#quesac_qnote").attr("src","qupoo_logo_go/ques1.png");})



$(document).ready(function(){$('#quesac_qust').click(function(event){$('#bune_qust').animate({height:"280px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qust').click(function(event){$('#bune_qust').animate({height:"0px"}, 500 );$("#quesac_qust").attr("src","qupoo_logo_go/ques1.png");})});
$('#qust_goana').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 350 );})
$("#qust_goana").mouseout(function(){$("#qur_exres").animate({bottom:"0",right:"0",opacity:0},200);$(this).css("opacity","0.5")});
$("#qust_goana").mouseover(function(){$("#qur_exres").animate({bottom:"120px",right:"70px",opacity:1},200);$(this).css("opacity","1")});



$('#qb_goan').click(function(event){$('.nediv').animate({top:"-100%",left:"-100%"}, 400 );})
$("#qb_goan").mouseout(function(){$("#qb_hores").animate({top:"0",left:"0",opacity:0},200);$(this).css("opacity","0.5")});
$("#qb_goan").mouseover(function(){$("#qb_hores").animate({top:"120px",left:"15px",opacity:1},200);$(this).css("opacity","1")});



	
$("#cha_pass,#cha_ima,#cha_gen").fadeOut();
$("#epos").click(function(){
$("#cha_ema").fadeIn();$("#cha_pass,#cha_ima,#cha_gen").css("display","none");})
$("#sif").click(function(){
$("#cha_pass").fadeIn();$("#cha_ema,#cha_ima,#cha_gen").css("display","none");})
$("#res").click(function(){
$("#cha_ima").fadeIn();$("#cha_pass,#cha_ema,#cha_gen").css("display","none");})
$("#gen").click(function(){   
$("#cha_gen").fadeIn();$("#cha_pass,#cha_ema,#cha_ima").css("display","none");})





$(document).ready(function(){

$('.resim').hover(function(){$(' .slide_list').css("marginTop","0px");});
$('.resim1').hover(function(){$('.slide_list').css("marginTop","-70px");});
$('.resim2').hover(function(){$('.slide_list').css("marginTop","-140px");});
$('.resim3').hover(function(){$('.slide_list').css("marginTop","-210px");});
$('.resim4').hover(function(){$('.slide_list').css("marginTop","-280px");});
$('.resim5').hover(function(){$('.slide_list').css("marginTop","-350px");});
$('.resim6').hover(function(){$('.slide_list').css("marginTop","-420px");});
$('.resim7').hover(function(){$('.slide_list').css("marginTop","-490px");});
$('.resim8').hover(function(){$('.slide_list').css("marginTop","-560px");});
});

$(document).ready(function(){
$('.madde1').click(function(){$('.boul').css("marginTop","15px");});
$('.madde2').click(function(){$('.boul').css("marginTop","-145px");});
$('.madde3').click(function(){$('.boul').css("marginTop","-290px");});
$('.madde4').click(function(){$('.boul').css("marginTop","-450px");});
$('.madde5').click(function(){$('.boul').css("marginTop","-610px");});
$('.madde6').click(function(){$('.boul').css("marginTop","-760px");});
});

$(document).ready(function() {
$('#bizeul_but').click(function(event){
$.ajax({
type: 'POST',
url: 'askme.php',
data: $('#bizeul_f').serialize(),
error:function(){ $('#bizeul_cevap_help').html("Bir hata meydana geldi!"); },
success: function(veri){$('#bizeul_cevap_help').fadeIn().html(veri).delay(2000).fadeOut();}});
});
});


$('#quesac_qkas').click(function(event){$('#bune_qkas').animate({height:"370px"}, 500 );$(this).attr("src","qupoo_logo_go/ques2.png");})
$('#quescl_qkas').click(function(event){$('#bune_qkas').animate({height:"0px"}, 500 );$("#quesac_qkas").attr("src","qupoo_logo_go/ques1.png");})

