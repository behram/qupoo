<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `qik` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["qik"].submit();}</script>



<form action="https://qik.com/session?native_protocol=http" class="form new-session-form" method="post" novalidate="novalidate" id="qik">
<fieldset>
<dl>
<dt>
</dt>
<dd>
<input id="_return_to" name="[return_to]" type="hidden">
</dd>
<dd class="clr"></dd>
<dt>
<label for="_login">Username</label>
</dt>
<dd>
<input class="text" id="_login" name="[login]" size="30" type="text" value="<?=$email;?>">
</dd>
<dd class="clr"></dd>
<dt>
<label for="_password">Password</label>
</dt>
<dd>
<input class="password text" id="_password" name="[password]" size="30" type="password">
</dd>
<dd class="clr"></dd>
<dt>
</dt>
<dd>
<input name="[remember_me]" type="hidden" value="0"><input checked="checked" id="_remember_me" name="[remember_me]" type="checkbox" value="1">
<label for="_remember_me">Stay signed in</label>
</dd>
<dd class="clr"></dd>
<dt>
</dt>
<dd>
<div class="button ">
<input data-submitting-value="Authorizing…" id="_submit" name="commit" type="submit" value="Sign In">
<div class="rc"></div>
</div>

</dd>
<dd class="clr"></dd>
</dl>
</fieldset>
<p class="align-right">
<a href="https://qik.com/password/new?native_protocol=http">Forgot password?</a>
</p>
      </form>
      
      
</body>
</html>

