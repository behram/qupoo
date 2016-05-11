<? 
require_once('db.php');

$url1=htmlspecialchars($_POST['usto_url']);
$note=htmlspecialchars($_POST['usto_note']);
$uid=htmlspecialchars($_COOKIE['uid']);

if($url1==""){exit("Lütfen geçerli bir url giriniz");}
if(strstr($url1, "http://")){$url=$url1;}else{$url="http://".$url1;}




$url_add=mysql_query("INSERT INTO  `qupoo_db`.`urlstore_db` (`user_id` ,`url_id` ,`urlstore_url`,`urlstore_note`) VALUES ( '$uid', NULL,  '$url' , '$note');");
$url_add2=mysql_query("INSERT INTO  `qupoo_db`.`urlstore_db2` (`user_id` ,`url_id` ,`urlstore_url`,`urlstore_note`) VALUES ( '$uid', NULL,  '$url' , '$note');");
if($url_add>0){ echo "Siteniz güvenli bir şekilde eklendi";}else{exit("Bir hata meydana geldi");
}
mysql_close($db);
?>