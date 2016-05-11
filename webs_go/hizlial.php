<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `hizlial` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["ctl01"].submit();}</script>



<form method="post" action="https://www.hizlial.com/giris" id="ctl01" class="jqtransformdone">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="rmfLMUbI79pK/WODwss87Q3UgnYoG8KVB3IdbzOWfGfj1fyNVuqM5U4Z8YucFyboYEDe3tqVByygQVJLGwelsEhpELo9MMLNlLraAT8U14POB+xgI6r8APnKGapMBBNP1VKzSff2HMSaCFdpLVf7HIbu5hKIqE9kfq6wrWaQxAo5ojlFGmPaBmfVaE6bQFXapij2EKe01lFAyvQhEDuR2a/uY8geLhJ9ccsA66seC2gP4jNPzb4jER4SzCaaQNM0lYWUcGEsnfochVNLGMWKDfQhvl7stZhL+L1RRJlJjaEfanpfo01604mdW97G5EYctGJOFdD/3xzWUU0dFng8/ldiekK7HuTOOQERxEwOk3gGjQR5gsB1HuW6M4L+OrYleh0aZV80tuntpTZ/dJpGs9xpR87G6lg3Bbopg4WNfcN9iuyQc9AfsncFghOZsOSgBtW57H9CSrxTgOUguqYgKVTfK7VSQ9SvfAM3UOQTBJjbIRKwjEYbkuUolYRUiOzJ23IVJWcusCmAD9LXVCPHRVTMJOe26U+8reMfmDmjVsU4ABhPXmuGJSA/t6gTMIaq9E2ba+17sRZ6b4r+Oj9Ws9Lsajd35zgOnJtED6RcuIi9pe3aWwMJ9dO5jprOFNeQ6b+LgPfbKOmljbYjpLk4emh61/16x00DNdCnQIZcp5u8fo1g+aSMSgPs7TQD5mseHz/gbJPir3NUsVGJqXUuiHp25Rp2+PkqhfeMD6dgGK0EEWiJ2gzH1GBGG7O5ohFOEuvfuxKNU9xZhzUV">
</div>


	<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
	<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="+shn2ueGXiv/69UGKvF9La88Tf5Y5ZgNA5Vj0DuX94ltWV1cYnjntDvYmJJ+PnaijGvQy17xw7ommIOKtKt7lumvrREU2XW8YgmVk7PsYW9Nr0jb/gdlfs+7s0tW9M9d/rgQkii23U4pdNsjXXulzhjLaAkE/VRKdpFDjQpxlwVhVxo2kL8mdWFZYy4bzLTiQEVyQf5AtimNIpYDaM0zwIYwbLgN+odeyJc4TEL+SClmVy68">
</div>
        <!-- Content -->
        
<div class="uye_content">

<div class="clear bosluk15"></div>
<div class="uye_icon1"></div>
<div class="uye_baslik">ÜYE GİRİŞİ</div>

<div class="eskiuye_content" style="opacity: 1;"><!-- Eski Üye -->
        <div class="yu_Baslik"><span class="yu_BaslikText">Üye Girişi</span></div>

        <div class="clear bosluk40"></div>
            <div id="RootMainContent_pnlLogin" onKeyPress="javascript:return WebForm_FireDefaultButton(event, 'RootMainContent_btnLogin')">
	
            <div class="uye_box_content">
                <div class="yu_Text">E-posta</div>
                <div class="jqTransformInputWrapper jqTransformSafari jqTransformInputWrapper_hover" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtLoginUserName" type="text" id="RootMainContent_txtLoginUserName" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off" value="<?=$email;?>"></div></div></div>   
            </div>
            <div class="uye_box_content">
                <div class="yu_Text">Şifre</div>
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtLoginPassword" type="password" id="RootMainContent_txtLoginPassword" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off"></div></div></div>
                <div class="yu_Acklm"><a href="#" onClick="javascript:ShowHide('#dvPass'); return false;">Şifremi unuttum.</a></div>   
            </div>
            <div id="dvPass" class="uye_box_content" style="display: none;">
                 <div class="clear bosluk15"></div>
                <div class="yu_Text">E-posta</div>
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input id="txtLoginEmail" type="text" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off" value="barbaros@gmail.com"></div></div></div>
                <div><input id="btnSend" type="image" src="/d/i/1/uye/uye-gonder-btn.png" value="Devam Et" class="GonderBtn" onClick="javascript:RememberPass(); return false;"></div>
            </div>
            
            <div class="clear bosluk15"></div>
            <div class="yu_Check">
            <span class="jqTransformCheckboxWrapper"><a href="#" class="jqTransformCheckbox"></a><input id="RootMainContent_chkRemember" type="checkbox" name="ctl00$RootMainContent$chkRemember" class="jqtranformdone jqTransformHidden"></span><span class="yu_Check_Text">Beni Hatırla</span>
            </div>
            
            <div><input type="image" name="ctl00$RootMainContent$btnLogin" id="RootMainContent_btnLogin" class="GirisBtn" src="/d/i/1/uye/uye-giris-btn.png" onClick="return CheckLogin();"></div>
            
</div>
  </div>

 <div class="yeniuye_content" style="opacity: 0.4;"><!-- Yeni Üye -->
        <div class="yu_Baslik"><span class="yu_BaslikText">Üye Olmak İstiyorum</span></div>
  
        <div class="clear bosluk40"></div>

            <div class="uye_box_content">
                <div class="yu_Text">Ad</div>  
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtName" type="text" id="RootMainContent_txtName" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off"></div></div></div>
            </div>
            <div class="uye_box_content">
                <div class="yu_Text">Soyad</div>
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtSurName" type="text" id="RootMainContent_txtSurName" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off"></div></div></div>
            </div>

            <div class="uye_box_content">
                <div class="yu_Text">E-posta Adresi</div>
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtEmail" type="text" id="RootMainContent_txtEmail" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off"></div></div></div>
            </div>
            <div class="uye_box_content">
                <div class="yu_Text">Şifre</div>
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtPassword" type="password" id="RootMainContent_txtPassword" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off"></div></div></div>
            </div>
            <div class="uye_box_content">
                <div class="yu_Text">Şifre Tekrar</div>
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtPassword2" type="password" id="RootMainContent_txtPassword2" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off"></div></div></div>
            </div>

            <div class="clear bosluk15"></div>
            <div class="uye_box_content">
                <div class="yu_Text">Cep telefonu</div>
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtCellPhone" type="text" id="RootMainContent_txtCellPhone" class="yu_Box jqtranformdone jqTransformInput"></div></div></div><div class="uyeBilgi_Tel">Boşluksuz başında 0 olmadan giriniz. Örnek: 5XXAAABBCC</div>
            </div>

            <div class="clear bosluk15"></div>
            <div class="yu_guvenlik_Text">Güvenlik Kodu</div>
            <div class="uye_box_content">
                <div class="yu_guvenlik2">
                    <img id="imgCpthc" src="/Captcha.aspx" onClick="javascript:$('#imgCpthc').attr('src', '/Captcha.aspx?v=' + Math.random());" alt=""></div>
                <div class="jqTransformInputWrapper jqTransformSafari" style="width: 260px;"><div class="jqTransformInputInner"><div><input name="ctl00$RootMainContent$txtCaptcha" type="text" id="RootMainContent_txtCaptcha" class="yu_Box jqtranformdone jqTransformInput" autocomplete="off"></div></div></div>
            </div>

            <div class="clear bosluk15"></div>
            <div class="yu_Check2">
            <span class="jqTransformCheckboxWrapper"><a href="#" class="jqTransformCheckbox"></a><input id="RootMainContent_chkCmp" type="checkbox" name="ctl00$RootMainContent$chkCmp" class="jqtranformdone jqTransformHidden"></span><span class="yu_Check_Text">Kampanya duyurularının cep telefonuma gönderilmesini istiyorum.</span>
            </div>
            <div class="clear"></div>
            <div class="yu_Check2">
            <span class="jqTransformCheckboxWrapper"><a href="#" class="jqTransformCheckbox"></a><input id="RootMainContent_chkContract" type="checkbox" name="ctl00$RootMainContent$chkContract" class="jqtranformdone jqTransformHidden"></span><span class="yu_Check_Text"><a href="javascript:ShowModal('/Icerik?t=C&ID=430');">Üyelik sözleşmesini okudum ve kabul ediyorum.</a></span>
            </div>
            <div class="clear bosluk15"></div>

            <div class="yu_Check2">
            <span class="jqTransformCheckboxWrapper"><a href="#" class="jqTransformCheckbox"></a><input id="RootMainContent_chkRemember1" type="checkbox" name="ctl00$RootMainContent$chkRemember1" class="jqtranformdone jqTransformHidden"></span><span class="yu_Check_Text">Beni Hatırla</span>
            </div>

            

            <div><input type="image" name="ctl00$RootMainContent$btnCreate" id="RootMainContent_btnCreate" class="KayitBtn" src="/d/i/1/uye/kayit-ol-btn.png" onClick="return CheckCreateUser();"></div>

  </div>

<div class="clear bosluk80"></div>
    		
</div>
<input type="hidden" name="ctl00$RootMainContent$hdnNew" id="RootMainContent_hdnNew">

        <!-- Content bitti -->
        <!-- footer -->
        



    


    





</form>

</body>
</html>

