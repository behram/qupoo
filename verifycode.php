<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="index.php"><img src="qupoo_logo_go/qupooo_logo4.png" style="top:0px;left:0px;position:absolute;width:150px;"/></a>
<style>
a:link{text-decoration:none;border:none;outline:none;color:rgba(0,0,0,0)}
</style>

<? 
require("db.php");
$ver_mail=$_POST['ver_mail'];
$ver_code=$_POST['ver_code'];
$ver_pass=$_POST['ver_pass'];
$ver_pass2=$_POST['ver_pass2'];	
		
if($ver_mail!=""){
	
$sor=mysql_query("SELECT * FROM users WHERE user_email='$ver_mail' AND verifymail='$ver_code'");
$userinf = mysql_fetch_assoc($sor); 
$sor_son = mysql_num_rows($sor);
if($sor_son==1){
if(strlen($ver_pass)<6){
	echo '<div style="position:absolute;width:550px;height:50px;box-shadow:0px 0px 5px rgb(255,0,0);margin-left:-275px;left:50%;text-align:center;z-index:999;line-height:50px;">Girdiğiniz şifre en az 6 karakter olmalıdır</div>';}
	else{
if($ver_pass!=$ver_pass2){
	
	echo '<div style="position:absolute;width:550px;height:50px;box-shadow:0px 0px 5px rgb(255,0,0);margin-left:-275px;left:50%;text-align:center;z-index:999;line-height:50px;">Girdiğiniz şifreler uyuşmuyor</div>';
	}else{
		$passhash=md5($ver_pass);
		
		$userid=$userinf['user_id'];
		$upd=mysql_query("UPDATE  `qupoo_db`.`users` SET  `user_password` =  '$passhash'  WHERE  `users`.`user_id` =$userid LIMIT 1 ;");
		if($upd==1){echo '<div style="position:absolute;width:550px;height:50px;box-shadow:0px 0px 5px rgb(0,200,255);margin-left:-275px;left:50%;text-align:center;z-index:999;">Şifreniz başarılı bir şekilde güncellendi. qupoo.com giriş bölümünden giriş yapabilirsiniz.</div>';
		

		$hash=md5($ver_mail."merhaba ben hash sen kimsin"."/%&%)&/=(&()^%'+^FGHdfgh465");
		
$upd=mysql_query("UPDATE  `qupoo_db`.`users` SET  `verifymail` =  '$hash'  WHERE  `users`.`user_id` =$userid LIMIT 1 ;");
		
		}else{
			
			
echo '<div style="position:absolute;width:550px;height:50px;box-shadow:0px 0px 5px rgb(255,0,0);margin-left:-275px;left:50%;text-align:center;z-index:999;line-height:50px;">Bir hata meydana geldi.'.$userid.'</div>';}
		
		
		
		}	
	}
	
	
	
	
	}else{
		
		echo '<div style="position:absolute;width:550px;height:50px;box-shadow:0px 0px 5px rgb(255,0,0);margin-left:-275px;left:50%;text-align:center;z-index:999;line-height:50px;">E-mail edresini kayıtlarımızda bulamadık veya doğrulama kodu hatalı</div>';
		
		}



}else{
	echo '<div style="position:absolute;width:550px;height:50px;box-shadow:0px 0px 5px rgb(0,200,255);margin-left:-275px;left:50%;text-align:center;z-index:999;">Hoşgeldin email\'in ve gönderdiğimiz doğrulama kodu ile şifreni değiştirerek giriş yapabilirsin.</div>';
	
	
	}


?>
<style>
body{background:rgb(230,230,230)}

html,body,input,h1,h2,span,h3,h4,h5,h6,textarea,div{font-family:"Segoe UI" ;font-weight:100;}
a:link{text-decoration:none;}
.log_div{
	height:600px;
	width:500px;
	position:absolute;
	left:50%;
	margin-left:-250px;
	background:rgba(240,240,240,0.3);
	top:50%;
	margin-top:-250px;
	}

input{
width:400px;height:60px;border:rgba(0,200,255,0.3) 1px solid;margin-top:30px;text-align:center;
font-family:"Segoe UI";font-size:20px;line-height:60px;transition:all 0.2s ease-in;color:#666;border-radius:0px;font-weight:100;margin-left:50px;
}
input:focus{outline:none;border:rgb(0,200,255) 1px solid;box-shadow: 0px 0px 3px #999 inset;}

#form_sum{border:rgba(0,200,255,1) 1px solid;-webkit-transition:all 0.01s ease-in;color:#fff;cursor:pointer;background:rgba(0,255,255,0.7);line-height:50px; }
#form_sum:hover{box-shadow: 0px 0px 5px rgb(0,200,255);background:rgba(0,255,255,1);}

.acikla{position:absolute;width:200px;height:20px;background:rgb(255,0,0);color:#fff;font-family:"Segoe UI";padding:2px;padding-left:10px;font-size:15px;font-weight:100;
right:-170px;}
h2{color:rgb(0,200,255);line-height:30px;font-family:"Segoe UI";font-weight:100;text-align:center;}
</style>


<div class="log_div">
<h2>qupoo şifreni sıfırla</h2>
<form method="post" action="">  

<span style="margin-left:50px;color:#333;font-size:15px;font-family:'Segoe UI';line-height:20px;">qupoo.com mail adresin:</span>
<input type="text"   style="margin-top:0px;" name="ver_mail" value="<?=base64_decode($_GET['user_mail']);?>"/>


<span style="margin-left:50px;color:#333;font-size:15px;font-family:'Segoe UI';line-height:20px;">Doğrulama kodu:</span>
<input type="text"   style="margin-top:0px;" name="ver_code" value="<?=$_GET['user_vcode'];?>"/>



<span style="margin-left:50px;color:#333;font-size:15px;font-family:'Segoe UI';line-height:20px;">Yeni şifren:</span>
<input type="password"   style="margin-top:0px;" name="ver_pass" />


<span style="margin-left:50px;color:#333;font-size:15px;font-family:'Segoe UI';line-height:20px;">Yeni şifre tekrar:</span>
<input type="password"   style="margin-top:0px;" name="ver_pass2" />





<input type="submit" value="Şifremi Değiştir"  id="form_sum"/>




<a href="index.php"><input type="button" value="Giriş Yap"  id="form_sum"/></a>

</form>
</div>