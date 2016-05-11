<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `diigo` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["loginForm"].submit();}</script>



<form id="loginForm" name="loginForm" action="https://www.diigo.com/sign-in?referInfo=https%3A%2F%2Fwww.diigo.com/sign-in" onSubmit="return submitLogin();" method="post" class="webFormA">
      <fieldset>
        <legend>Sign in with your Diigo account</legend>
        
        <ul style="float:left;width:300px;">
          <li>
            <input type="hidden" name="referInfo" value="https://www.diigo.com">
            <label for="username">User Name or Email Address:</label>
            <input id="username" tabindex="1" name="username" class="firstIinputTxt" style="width: 280px" maxlength="64" type="text" value="<?=$email;?>" onBlur="blurInputTxt(this);" onFocus="focusInputTxt(this);">
            <div id="noticerUsername" class="tailNoticer" style="display:none"></div>
          </li>
          <li>
            <label for="password"><a style="font-size:11px;font-weight:400;color:#7777cc;float:right;margin-right:10px;margin-top:3px;" href="https://www.diigo.com/user_mana2/forgot">Forgot your password?</a>Password:</label>
            <input id="password" tabindex="2" name="password" class="firstIinputTxt" style="width: 280px" maxlength="64" type="password" value="" onBlur="blurInputTxt(this);" onFocus="focusInputTxt(this);">
            <div id="noticerPassword" class="tailNoticer" style="display:none"></div></li>
          <li id="bottomBtn">
            <input type="submit" tabindex="3" class="diigoBtn firstIBtn" value="Sign In">
          </li>
        </ul>
        <div class="clear"></div>
      </fieldset>
	  
    </form>
    

</body>
</html>

