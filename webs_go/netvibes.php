<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `netvibes` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["signinForm"].submit();}</script>



<form method="post" class="signinForm" id="signinForm" action="http://www.netvibes.com/signin">
                        <p id="signinInfoMessage" class="info" style="display:none;"></p>
                        <p class="field signinEmail">
                            <label for="signinEmail" id="signinEmailLabel" class="field">E-mail:</label>
                            <input type="email" tabindex="1" maxlength="70" class="text email" name="email" id="signinEmail" value="<?=$email;?>" autocorrect="off" autocapitalize="off">
                        </p>
                        <p class="field signinPassword">
                            <label for="signinPassword" id="signinPasswordLabel" class="field">Password:</label>
                            <input type="password" tabindex="1" maxlength="50" class="text password" name="password" id="signinPassword" value="">
                            <a href="javascript:void(0)" id="signinLostPassword">Forgot your password?</a>
                        </p>
                                                <p class="signinSessionOnly">
                            <input type="checkbox" tabindex="1" value="1" class="checkbox" name="session_only" id="signinSessionOnly">
                            <label style="display: inline;" for="signinSessionOnly">Remember me</label>
                        </p>
                                                <p class="submit button">
                            <input type="submit" tabindex="1" value="Sign in" class="button-inner" id="signinButton">
                        </p>

                    </form>
</body>
</html>

