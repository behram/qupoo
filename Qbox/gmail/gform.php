<?
$mail=$_GET['mail'];
?>
<div id='gms_rdi'></div>
<div class="g_confo" style="line-height:15px;" id="g_mailsend">
<span style="margin-left:75px;font-size:14px;">Alıcı <span style="font-size:12px;">( ex. qupoo@hotmail.com )</span>:</span>
<input type="text"  spellcheck=	"false" style="margin-bottom:15px;" name="take_m" id="g_take_m" value="<?=$mail;?>"/>
<span style="margin-left:75px;font-size:14px;">Konu :</span>
<input type="text"  spellcheck=	"false" style="margin-bottom:15px;" name="m_issu" id="g_m_issu"/>
<span style="margin-left:75px;font-size:14px;">İçerik :</span>
<textarea style="margin-left:75px;margin-top:5px;" name="m_ice" id="g_m_ice"></textarea>
<input type="button" spellcheck=	"false" value="Gönder" style="margin-bottom:10px;height:40px;" id="gs_fsbut"/>
<p style="font-size:11px;margin:5px 75px;">Uyarı ! Mail'iniz Alıcıya Qboxmail@qupoo.com mail adresinden sizin gönderdiğinize dair bir bilgi ile gönderilecektir. Qupoo inc. mailin içeriği ile ilgili herhangi bir yükümlülüğü kabul etmez.</p>
</div>