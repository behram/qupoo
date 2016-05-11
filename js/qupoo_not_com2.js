var winh=$(window).height();
$(".ice").height(winh-80+"px");
$("#logma").focus();
jQuery.easing['jswing'] = jQuery.easing['swing'];jQuery.extend( jQuery.easing,{	easeInOutSine: function (x, t, b, c, d) {return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;}});

$('.k_div').click(function(){
	var iceh=$(".ice").height();
	var tid=$(this).attr("id");
    $('html, body').animate({ scrollTop: tid*iceh}, "1000","easeInOutSine" );
});


$('.spps').live('click', function() {
		var pid=$(this).attr("id");
	var inid=$("#pla").val();
	$(this).addClass("spps2");
	$(this).removeClass("spps");
	$("#pla").val(pid+inid);
	});

$('.spps2').live('click', function() {
		var pid2=$(this).attr("id");
	var inid2=$("#pla").val();
	var inid3=inid2.replace(pid2,"");
	$(this).removeClass("spps2");
	$(this).addClass("spps");
	$("#pla").val(inid3);	
	});


$(window).scroll(function () {
	var iceh=$(".ice").height();
  var he=$(window).scrollTop();
  var yuv=Math.round(he/iceh);
if($("#"+yuv).hasClass("k_div2")){}else{
	
	$(".an_div div").removeClass("k_div2");
	$("#"+yuv).addClass("k_div2");
	
	}
  
});


$(window).resize(function() {
});




$('#bdbut').live('click', function() {$.post('bedev.php',$("#bdform").serialize(), function(data) { $('#bdres').fadeIn().html(data);});});
	
	
$('#dtosubm').live('click', function() {$.post('askme2.php',$("#dtoform").serialize(), function(data) {$('#dtores').fadeIn().html(data);});});	
	

$('#rvsubm').live('click', function() {$.post('adv.php',$("#rvform").serialize(), function(res) {$('#rvres').fadeIn().html(res);});});	



function login(){$.post('login2.php',$("#loginform").serialize(), function(gel) {if(gel==1){window.location="logged.php";}else{$('#loginres').html(gel);}});	}
$('#log_but').click(function () {login();});	
$("#loginform input").keypress(function(event) {if (event.which == 13) {login();}});	



function joinus(){$.post('usersing2.php',$("#joinform").serialize(), function(res) {if(res==1){ window.location="logged.php";}else{$('#joinres').html(res);   }});	}
$('#joinb').click(function () {joinus();});	
$("#joinform input").keypress(function(event) {if (event.which == 13) {joinus();}});	


function md5(){ $.post('hash/md5.php',{md5_hash:$("#md5_i").val()}, function(md) {$('#md5_r').val(md);})}
$('#md5_h').live('click', function() {md5();});	
$("#md5_i").keypress(function(event) {if (event.which == 13) {md5();}});	



function Qhash1(){ $.post('hash/Qhash1.php',{Qhash1:$("#Qhash1_i").val()}, function(q1) {$('#Qhash1_r').val(q1);})}
$('#Qhash1_h').live('click', function() {Qhash1();});	
$("#Qhash1_i").keypress(function(event) {if (event.which == 13) {Qhash1();}});	


function Qhash2(){ $.post('hash/Qhash2.php',{Qhash2:$("#Qhash2_i").val()}, function(q2) {$('#Qhash2_r').val(q2);})}
$('#Qhash2_h').live('click', function() {Qhash2();});	
$("#Qhash2_i").keypress(function(event) {if (event.which == 13) {Qhash2();}});