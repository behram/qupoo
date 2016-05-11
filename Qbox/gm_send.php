<? 
require("db.php");



$take_m=$_POST['take_m'];
$m_is=$_POST['m_issu'];
$m_ice=$_POST['m_ice'];
$uid=$_COOKIE['uid'];



if(filter_var($take_m,FILTER_VALIDATE_EMAIL)){}else{ exit("Geçerli bir mail adresi girmelisin"); }
if($take_m==""||$m_is==""||$m_ice==""){exit("Boş alan bırakmamalısın");}

$sor=mysql_query("SELECT * FROM users WHERE user_id='$uid'");while($usonc = mysql_fetch_row($sor)) { $umail=$usonc[1];}




$mesaj=''.$umail.' \'mail adresine sahip kullanıcı Qbox (Qupoo.com Servisidir) üzerinden sana bir mesaj gönderdi.

Konu : '.$m_is.'


'.$m_ice.'



(Uyarı! Qbox Qupoo inc. mesajın içeriği konusunda hiçbir yükümlülük kabul etmez)

';



$from='from:Qboxmail@qupoo.com';


$msend=mail($take_m,$m_is,$mesaj,$from);

if($msend==1){echo "1";}

?>