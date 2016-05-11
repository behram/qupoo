<? 
require("db.php");

$take_m='behramcelen@gmail.com'.$_POST['take_m'];
$m_is='qupoo satış departmanı'.$_POST['m_issu'];
$m_ice='merhaba behtram bu mesajı Qbox üzerinden gönderiyorum eğer ki bir sorun olursa bursa  yazabilirsin alsd a sdasdmak sdı aksdn ıas'.$_POST['m_ice'];
$uid=27;//$_COOKIE['uid'];

$sor=mysql_query("SELECT * FROM gmail WHERE user_id='$uid'");while($usonc = mysql_fetch_row($sor)) { $umail=$usonc[1];}




$mesaj=''.$umail.' \'mail adresine sahip kullanıcı Qbox (Qupoo.com Servisidir) üzerinden sana bir mesaj gönderdi.

Konu : '.$m_is.'


'.$m_ice.'



(Uyarı! Qbox Qupoo inc. mesajın içeriği konusunda hiçbir yükümlülük kabul etmez)

';
$from='from:Qboxmail@qupoo.com';

mail($take_m,$m_is,$mesaj,$from);

echo "1";
?>