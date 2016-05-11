<?
require_once("../db.php");
$mail=$_POST['mail'];
$pass=$_POST['pass'];

if(filter_var($mail,FILTER_VALIDATE_EMAIL)){}else{ exit("Geçerli bir mail girer misin"); }


$c = curl_init('https://gmail.google.com/gmail/feed/atom');
$headers = array(
"Host: gmail.google.com",
"Authorization: Basic ".base64_encode($mail.':'.$pass),
"User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; tr-TR; rv:9.2.0.4) Gecko/20060508 Firefox/3.2.0.4",
"Accept: text/xml,application/xml,application/xhtml+xml,text/html; q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5",
"Accept-Language: tr-TR,en;q=0.5",
"Accept-Encoding: text",
"Accept-Charset: ISO-8859-9,utf-8;q=0.7,*;q=0.7",
"Date: ".date(DATE_RFC822)
);
curl_setopt($c, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($c, CURLOPT_COOKIESESSION, TRUE);
curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 1);
curl_setopt($c, CURLOPT_UNRESTRICTED_AUTH, 1);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 1);
$str = curl_exec($c);
curl_close($c);

if(strpos($str,"<TITLE>Unauthorized</TITLE>")){



echo "Şifren ve Mail adresini bir daha kontrol etmelisin";


}else{

 $uid=$_COOKIE['uid'];

$gcont=mysql_query("SELECT * FROM gmail WHERE `user_id`='$uid'");
$gson = mysql_num_rows($gcont);
if($gson==0){

$ins=mysql_query("INSERT INTO  `qupoo_db`.`gmail` (`user_id` ,`user_email` ,`user_password` ,`user_extra_information`)
VALUES (																					'$uid',  '$mail',  '$pass',  ''																		);");

if($ins){echo "1";}else{echo "Bir hata oluştu";}

}else{


$upt=mysql_query("UPDATE  `qupoo_db`.`gmail` SET  `user_email` =  '$mail',
`user_password` =  '$pass' WHERE  `gmail`.`user_id` =$uid LIMIT 1 ;");

if($upt){echo "1";}else{echo "Bir hata oluştu";}




}
}




?>