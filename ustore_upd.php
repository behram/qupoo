<?
require('db.php'); 



$uid=htmlspecialchars($_COOKIE['uid']);
$url_id=htmlspecialchars($_POST['url_id']);
$url=htmlspecialchars($_POST['qus_url']);
$note=htmlspecialchars($_POST['qus_note']);

if(filter_var($url,FILTER_VALIDATE_URL)){}else{exit("Lütfen geçerli bir url adresi giriniz");}


$sorgu=mysql_query("UPDATE  `qupoo_db`.`urlstore_db` SET  `urlstore_url` =  '$url',


`urlstore_note` =  '$note' WHERE  `urlstore_db`.`url_id` =$url_id LIMIT 1 ;");
 
if($sorgu==1){
	exit("Bilgileriniz güvenli bir şekilde güncellendi");
	
	}else{
		exit("bir hata meydana geldi");
		
		}
		
		
?>