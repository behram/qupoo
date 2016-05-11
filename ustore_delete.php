


<? require_once('db.php');


$uid=htmlspecialchars($_COOKIE['uid']);
$url_id=htmlspecialchars($_POST['url_id']);
$sorgu=mysql_query("DELETE FROM  `urlstore_db` WHERE  `urlstore_db`.`url_id` =$url_id AND `urlstore_db`.`user_id` =$uid LIMIT 1 ;");

if($sorgu==1){
	exit("Url adresiniz güvenle silindi");
	
	}else{

exit("Bir hata meydana geldi");
		
		}


?>