<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
a:link{text-decoration:none;border:none;outline:none;color:rgba(0,0,0,0)}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>qupoo.com Şifre Sıfırla</title>
</head>
<a href="index.php"><img src="qupoo_logo_go/qupooo_logo4.png" style="top:0px;left:0px;position:absolute;width:150px;"/></a>
<? 
require("db.php");
$ver_mail=$_POST['ver_mail'];
if(isset($ver_mail)){

$sor=mysql_query("SELECT * FROM users WHERE user_email='$ver_mail'");
$userinf = mysql_fetch_assoc($sor); 
$sor_son = mysql_num_rows($sor);

if($sor_son==0){echo '<div style="position:absolute;width:550px;height:50px;box-shadow:0px 0px 5px rgb(255,0,0);margin-left:-250px;left:50%;text-align:center;line-height:50px;">qupoo.com  '.$ver_mail.'\'a benzer bir kayıt bulamadık</div>';}
if($sor_son==1){echo '<div style="position:absolute;width:550px;height:50px;box-shadow:0px 0px 5px rgb(0,200,255);margin-left:-250px;left:50%;text-align:center;"><span style="color:#555">'.$ver_mail.'</span> adlı mail hesabına bir mail gönderdik. Maildeki adımları takip ederek hesabına tekrar kavuşabilirsin</div>';
$umailhash=base64_encode($ver_mail);
$uvercode=md5(md5($userinf['user_password']));
$mesaj='İyi günler...
 Değerli kullanıcımız iletmiş olduğunuz qupoo.com kullanıcı şifresi yenileme isteğiniz başarı ile ulaşmıştır. Kullanmış olduğunuz mail adresine ait qupoo hesabınıza aşağıdaki adımları takip ederek geri ulaşabilirsiniz.(Bu mesajla ilgili bir bilginiz ve bu yönde bir isteğiniz olmadı ise lütfen qupoo.com qupooYardım bölümüne mesaj bırakınız). 
 Bu mesajı güvenli bir yerde saklayınız ve kimse ile paylaşmayınız...
 
 Doğrulama kodu:    '.$uvercode.'
 
 Hesabınıza ulaşmak için;
 
 1-qupoo.com giriş sayfasından Şifremi unuttum butonuna tıklayın.
 2-Buradan Doğrula butonuna tıklayın.
 3-Bu bölümde qupoo.com üyelik email adresinizi.
 4-Yukarıda bulunan Doğrulama Kodunu ve yeni şifrenizi girerek hesabınıza yeniden ulaşabilirsiniz.
 5-Veya aşağıda bulunan linke tıklayarak yeni şifrenizi girerek hesabınıza ulaşabilirsiniz.
 
 
 Şifre sıfırlama linki:  http://qupoo.com/verifycode.php?user_mail='.$umailhash.'&&user_vcode='.$uvercode.'';
$from='from:qupooyardim@qupoo.com';

mail($ver_mail,'Şifre Sıfırlama İsteği',$mesaj,$from);

$uid=$userinf['user_id'];

$upd=mysql_query("UPDATE  `qupoo_db`.`users` SET  `verifymail` =  '$uvercode'  WHERE  `users`.`user_id` =$uid LIMIT 1 ;");
}

}
?>
<style>
body{background:rgb(230,230,230)}

html,body,input,h1,h2,span,h3,h4,h5,h6,textarea,div{font-family:"Segoe UI" ;font-weight:100;}
a:link{text-decoration:none;}
.log_div{
	height:350px;
	width:500px;
	position:absolute;
	left:50%;
	margin-left:-250px;
	background:rgba(240,240,240,0.3);
	top:50%;
	margin-top:-175px;
	}

input{
width:400px;height:60px;border:rgba(0,200,255,0.3) 1px solid;margin-top:30px;text-align:center;
font-family:"Segoe UI";font-size:20px;line-height:60px;transition:all 0.2s ease-in;color:#666;border-radius:0px;font-weight:100;margin-left:50px;
}
input:focus{outline:none;border:rgb(0,200,255) 1px solid;box-shadow: 0px 0px 3px #999 inset;}

#form_sum{border:rgba(0,200,255,1) 1px solid;-webkit-transition:all 0.01s ease-in;color:#fff;cursor:pointer;background:rgba(0,255,255,0.7);line-height:50px; }
#form_sum:hover{box-shadow: 0px 0px 5px rgb(0,200,255);background:rgba(0,255,255,1);}

#sing_up{border:rgba(0,200,255,1) 1px solid;-webkit-transition:all 0.01s ease-in;color:red;cursor:pointer;background:rgba(0,255,255,0.7);width:120px;height:30px;line-height:20px;font-size:18px;font-weight:600;color:#fff;opacity:0.6;margin-left:80px; }
#sing_up:hover{box-shadow: 0px 0px 5px rgb(0,200,255);background:rgba(0,255,255,1);opacity:1;}


.acikla{position:absolute;width:200px;height:20px;background:rgb(255,0,0);color:#fff;font-family:"Segoe UI";padding:2px;padding-left:10px;font-size:15px;font-weight:100;
right:-170px;}
h2{color:rgb(0,200,255);line-height:30px;font-family:"Segoe UI";font-weight:100;text-align:center;}
</style>

<body>

<div class="log_div">
<h2>qupoo şifreni sıfırla</h2>
<form method="post" action="">  

<span style="margin-left:50px;color:#333;font-size:15px;font-family:'Segoe UI';line-height:20px;">qupoo.com mail adresin:</span>
<input type="text"   style="margin-top:0px;" name="ver_mail" />





<input type="submit" value="Doğrulama kodunu al"  id="form_sum"/>

</form>

<a href="verifycode.php"><input type="submit" value="Doğrula" id="sing_up"/></a>
<a href="login.php"><input type="submit" value="Giriş yap"  id="sing_up"/></a>
</div>



</body>
</html>