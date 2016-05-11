<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT useremail FROM `readernaut` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["login"].submit();}</script>


<form action="http://readernaut.com/registration/login/." method="post" id="login"><input type="hidden" name="csrfmiddlewaretoken" value="H1M49L2ApsNlcDU9lTSVIPReEbhSXev5">
    <fieldset>
      <p>
        <label for="id_username" style="display: none;">Username</label>
        <input id="id_username" type="text" name="username" maxlength="254" placeholder="Username" value="<?=$email;?>">
        
      </p>
      <p>
        <label for="id_password" style="display: none;">Password</label>
        <input type="password" name="password" id="id_password" placeholder="Password">
        
      </p>
    </fieldset>

    <input type="hidden" name="next" value="/">
    <button type="submit" style="visibility:hidden;">Login</button>
  </form>

</body>
</html>

