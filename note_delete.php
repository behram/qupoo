<? $bot=$_SERVER['HTTP_REFERER'];if($bot==""){header("Location:index.php");}?>
<? require_once('db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$not_id=htmlspecialchars($_POST['note']);
$sorgu=mysql_query("DELETE FROM  `qupoonote_db` WHERE  `qupoonote_db`.`note_id` =$not_id AND `qupoonote_db`.`user_id` =$uid LIMIT 1 ;");
if($sorgu==1){
	exit("Notunuz güvenle silindi");
	
	}else{
		exit("Bir hata meydana geldi");
		
		}


?>