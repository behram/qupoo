<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `yonja` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["yonja"].submit();}</script>


<form method="post" name="Form1" action="http://www5.yonja.com/Login.jsp" id="yonja">
<table border="0" width="100%" cellspacing="0" cellpadding="0">

<input id="state" type="hidden" value="2" name="state">
<input type="hidden" name="isSubmit" value="true">
<input type="hidden" name="yonjaSubmit" value="true">

						<input id="Text1" type="text" class="loginInput" name="nickname" value="<?=$email;?>">
			
						<input id="password" class="loginInput" type="password" name="password">
					
									
								
											<input id="rememberMe" type="checkbox" checked="" value="on" name="rememberMe" class="small_checkbox" style="padding:2px 0px 0px 0px">
									
			
			 <td height="38" align="right"><input type="image" src="http://images2.iyonja.com/images/tr/login.png" alt="Üye Giriş" border="0"></td>
	
    
  </form>
  

</body>
</html>

