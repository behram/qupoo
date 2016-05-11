$(document).ready(function() {
$('#b1').load('notlogin/qupoo-kayit-giris.php');

		$('#go1,.kayitol').click(function(event){$('.nediv').animate({top:"-0%"}, 350 ); $("#b1").fadeIn();}); 
		$('#go1,.kayitol').one("click",function(){$('#b1').load('notlogin/qupoo-kayit-giris.php');});
		$('#go2').click(function(event){$('.nediv').animate({left:"-0%"}, 350 );$("#b2").fadeIn();})
		$('#go2').one("click",function(){$('#b2').load('notlogin/qupoo-kasif.php');});
		$('#go4').click(function(event){$('.nediv').animate({left:"-200%"}, 350 );$("#b4").fadeIn();})
		$('#go4').one("click",function(){$('#b4').load('notlogin/qupoo-qupoo+.php');});
		$('#go5').click(function(event){$('.nediv').animate({top:"-200%"}, 350 );$("#b5").fadeIn();})
		$('#go5').one("click",function(){$('#b5').load('notlogin/qupoo-yardim.php');});
		;});
		$(document).ready(function() {
		$('.q_ilk_go:eq(0)').css("display","block");
		
		var divs="#id1,#id2,#id3,#id4,#id5,#id6,#id7,#id8";	
		$('.q_ilk_go:eq(0)').click(function(event){
		$(divs).css("opacity","0.06");
		$('.q_ilk_go').css("display","block");
		$('#closese').css("opacity","1");})
		
		$('.q_ilk_go:eq(0)').click(function(event){$('#id2').css("opacity","1");$(this).parent().css("opacity","0.06");})
		$('.q_ilk_go:eq(1)').click(function(event){$('#id3').css("opacity","1");$(this).parent().css("opacity","0.06");})
		$('.q_ilk_go:eq(2)').click(function(event){$('#id4').css("opacity","1");$(this).parent().css("opacity","0.06");})
		$('.q_ilk_go:eq(3)').click(function(event){$('#id8').css("opacity","1");$(this).parent().css("opacity","0.06");})
		$('.q_ilk_go:eq(4)').click(function(event){$('#id5').css("opacity","1");$(this).parent().css("opacity","0.06");})
		$('.q_ilk_go:eq(5)').click(function(event){$('#id6').css("opacity","1");$(this).parent().css("opacity","0.06");})
		$('.q_ilk_go:eq(6)').click(function(event){$('#id7').css("opacity","1");$(this).parent().css("opacity","0.06");})
		
		$('#closese').click(function(event){
		$(divs).css("opacity","1");
		$('#closese').css("opacity","0");
		$('.q_ilk_go').css("display","none");
		$('.q_ilk_go:eq(0)').css("display","block");;});});