<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["signup_form"].submit();}</script>

<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `tumblr` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>

<form class="signup_form_form" id="signup_form" method="post" action="https://www.tumblr.com/login" data-secure-action="https://www.tumblr.com/login" data-secure-ajax-action="https://www.tumblr.com/svc/account/register">

                                <div class="signup_view account login" id="signup_account">
                    <div class="form_row form_row_email">
                        <label for="signup_email">Email</label>
                        <input type="email" name="user[email]" placeholder="Email" id="signup_email" data-required="required" value="<?=$email;?>">
                    </div>
                    <div class="form_row form_row_password">
                        <label for="signup_password">Password</label>
                        <input type="password" name="user[password]" placeholder="Password" id="signup_password" data-required="required">
                                            </div>
                    <div class="form_row username">
                        <label for="signup_username">Username</label>
                        <input type="text" name="tumblelog[name]" placeholder="Username" id="signup_username" maxlength="32" autocorrect="off" autocapitalize="off">
                    </div>
                                    </div>

                                <div class="signup_view birthday" id="signup_birthday">
                    <div class="form_row">
                        <div class="form_field age">
                            <label for="signup_age" class="signup_age_label is_empty years_old"><b></b> <span class="placeholder">How old are you?</span><span class="years_old">years old</span><span class="years_young">years young</span></label>
                            <input type="text" name="user[age]" id="signup_age" value="" class="signup_age is_empty" size="3" min="1" max="125" data-required="required">
                        </div>
                    </div>
                    <div class="form_row tos">
                        <input type="checkbox" name="user[tos]" id="signup_tos" data-required="required" value="1"> <label for="signup_tos">I have read, understand, and agree to the Tumblr <a href="/policy/" class="signup_terms_link" target="_new">Terms of Service</a>.</label>
                    </div>
                </div>

                                                    <div class="signup_view captcha" id="signup_register">
    <input type="hidden" name="recaptcha_public_key" value="6Lf4osISAAAAAJHn-CxSkM9YFNbirusAOEmxqMlZ" id="recaptcha_public_key">
    <div id="recaptcha_widget">
        <div class="image_and_buttons">
            <div id="recaptcha_image"></div>
        </div>
        <div class="form_row captcha_input">
            <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" placeholder="Enter the text above" data-placeholder-audio="Enter what you hear" data-placeholder-visual="Enter the text above" data-required="required" autocorrect="off" autocapitalize="off">
            <div class="captcha_controls">
                <a class="captcha_control refresh" title="Refresh Captcha" href="javascript:Recaptcha.reload()">Refresh</a>
                <a class="captcha_control audio" title="Solve Audio Captcha" href="javascript:Recaptcha.switch_type('audio')">Audio</a>
                <a class="captcha_control visual" title="Solve Visual Captcha" href="javascript:Recaptcha.switch_type('image')">Visual</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js" defer=""></script>
    <script type="text/javascript" src="https://secure.assets.tumblr.com/javascript/recaptcha.js?2a4d5cac4ada74e7cd9c201b6c6a6f68"></script>
</div>                
                <div class="form_row_hidden">

            <input type="hidden" name="hk" id="hk" value="9222bb334b2ef91b3395814989a85414bd6fb1f0 1360224455 aa2a98dd608b429af2cdc8c3a8e2420211c52e6c">
    
    
    
    
    
            <input type="hidden" name="http_referer" value="http://www.tumblr.com/">
    
    
    <input type="hidden" name="form_key" value="!1231360224455|4oKBK5s9WGsyq2Mfe9pzy0tq8E">

</div>
                <button type="submit" class="signup_forms_submit_helper">Submit</button>

            </form>

</body>
</html>