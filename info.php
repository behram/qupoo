<? $bot=$_SERVER['HTTP_REFERER'];if(strpos($bot,"qupoo.com")){}else{ header("Location:hata.php");} ?>

<?
require_once('db.php');

$site_id=htmlspecialchars($_POST['site_id']);
$query = mysql_query("SELECT site_summary FROM `sites_all` WHERE `site_id`='$site_id'"); 
$result = mysql_fetch_assoc($query); 
echo $result['site_summary'];  
?>
<?php
	if(isset($db)){
		mysql_close($db);
	}
?>