<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `posterous` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["poste"].submit();}</script>



<form action="https://posterous.com/login" class="cf" method="post" id="poste">
<input name="origin" type="hidden" value="homepage">
<input name="authenticity_token" type="hidden" value="a7JEgTS0NGSMIcJCx7EA7v/xNw7BjwK57GaLcx92ibA=">
<div class="input first">
<input autocomplete="on" name="user[mail]" placeholder="Email Address" type="text" value="<?=$email;?>">
</div>
<div class="input last">
<input autocomplete="on" name="user[password]" placeholder="Password" type="password">
</div>
<div class="input">
<input class="submit_btn" type="submit" value="Log In">
</div>
<div class="input remember_me">
<input class="checkbox_field" name="user[save_login]" type="checkbox" value="1">
<span>Remember me</span>
</div>
</form>



</body>
</html>

