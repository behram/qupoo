<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$_GET['me'];?></title>
<meta property="og:description" content="<?=$_GET['me'];?>">
<link rel="image_src" href="logo_33.png" />
</head>
<script src="js/jquery.min.js" type="text/javascript"></script> 
<style>
body{background:url(qupoo_logo_go/png.png);}
textarea{position:absolute;height:200px;width:360px;left:50%;margin-left:-210px;background:url(qupoo_logo_go/paper/paper1.png);padding:30px;top:50%;margin-top:-130px;
font-family:"Segoe UI";font-size:20px;font-weight:100;line-height:30px;border:none;box-shadow: 0px 0px 25px #000;resize:none;border-radius:5px;color:#333;}
textarea:focus{outline:none;}
.img:hover{opacity:0.9;}
.img{opacity:0.3;}
.payl{opacity:0.7;position:absolute;left:50%;width:300px;height:40px;margin-left:-150px;background:url(qupoo_logo_go/paper/paper1.png);top:0px;text-align:center;font-size:20px;line-height:40px;font-family:'Arial';color:#333;border-radius:0px 0px 20px 20px;cursor:pointer;}
.payl:hover{opacity:1}


.paylas{position:absolute;width:640px;height:160px;margin-left:-320px;background:rgba(255,255,255,1);box-shadow:0px 0px 100px rgb(0,200,255);left:50%;top:50%;margin-top:-80px;z-index:999;display:none;}
.paylas img{margin-top:5px;margin-left:5px;cursor:pointer;}
.paylas img:hover{opacity:0.9;}

</style>
<body>
<a href="index.php"><img src="qupoo_logo_go/qupoo.png" style="top:0px;left:0px;" class="img"/></a>


<textarea id="text_are"><?=$_GET['me'];?></textarea>
<div class="payl">Sen de Paylaş</div>

<div class="paylas">
<input value="" class="sh_value" type="hidden"/>
<img src="biz_image/twitter2.png" width="150" height="150" class="sh_twit"/>
<img src="biz_image/tumblr.png" width="150" height="150" class="sh_tumb"/>
<img src="biz_image/facebook.png" width="150" height="150" class="sh_face"/>
<img src="biz_image/google2.png" width="150" height="150" class="sh_plus"/>
<img src="small_icons/Xion - Kopya.png" style="position:absolute;right:0px;top:-3px;cursor:pointer;" class="pay_gizle"/>
</div>

<script>

var deg=$("#text_are").val();
var deg2=deg.split('-').join(' ');
$("#text_are").attr("value",deg2);

$('.payl').click(function(event){
	
	var are_va=$("#text_are").attr("value");
    var goog_val = are_va.split(' ').join('-');
	
	
	$(".paylas").fadeIn();
	$('.sh_twit').click(function(event){window.open('https://twitter.com/intent/tweet?source=webclient&text='+are_va,'sharer','width=440,height=420'); return false;})
	$('.sh_tumb').click(function(event){window.open('http://www.tumblr.com/share/quote?quote='+are_va+'&source=','sharer','width=440,height=420'); return false;})
	$('.sh_face').click(function(event){window.open('http://www.facebook.com/sharer.php?u=http://qupoo.com/share.php?me='+are_va,'sharer','toolbar=0,width=440,height=420'); return false;})
	$('.sh_plus').click(function(event){window.open('https://plus.google.com/share?url=http://qupoo.com/share.php?me='+goog_val,'sharer','toolbar=0,width=440,height=420'); return false;})
	
	
	})
	$('.pay_gizle').click(function(event){$('.paylas').fadeOut(200);})





</script>


</body>
</html>