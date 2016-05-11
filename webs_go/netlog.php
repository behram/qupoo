<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `netlog` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["netlog"].submit();}</script>



<form method="post" action="http://tr.netlog.com/go/login" id="netlog">
 <input type="hidden" name="action" value="login">
 <input type="hidden" name="target" value="/">
 <input type="hidden" name="remember" value="YES">
 <label for="headerNicknameText">kullanıcı adı ve şifre</label>
 <input name="nickname" type="text" id="headerNicknameText" size="10" maxlength="60" value="<?=$email;?>" class="text">
 <input name="password" type="password" id="headerPasswordText" size="10" maxlength="20" class="text">
 <input name="login" type="submit" id="headerLoginButton" value="giriş yap" class="buttonFancy buttonFancySmall inline">
 </form>
 
 

</body>
</html>

