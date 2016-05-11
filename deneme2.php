
<?php


$username = "behramcelen@gmail.com";
$password = "@123698745";
$c = curl_init('https://gmail.google.com/gmail/feed/atom');
$headers = array(
"Host: gmail.google.com",
"Authorization: Basic ".base64_encode($username.':'.$password),
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
echo $str;
curl_close($c);
?>


