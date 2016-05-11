<?
require('db.php'); 



$uid=htmlspecialchars($_COOKIE['uid']);
$note_id=htmlspecialchars($_POST['noteid']);
$note=htmlspecialchars($_POST['note']);

if($note==""){exit("Lütfen bir not giriniz");}


$sorgu=mysql_query("UPDATE  `qupoo_db`.`qupoonote_db` SET  
`qupoonote_note` =  '$note'
 WHERE  `qupoonote_db`.`note_id` =$note_id LIMIT 1 ;");
if($sorgu==1){
	exit("Bilgileriniz güvenli bir şekilde güncellendi");
	
	}else{
		exit("bir hata meydana geldi");
		
		}



?>