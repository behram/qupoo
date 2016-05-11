<?php ob_start(); ?>
<?  require('db.php'); ?>
<?
$uid=htmlspecialchars($_COOKIE['uid']);
setcookie("uid","",time()-90000);
setcookie("umail","",time()-90000);
setcookie("upass","",time()-90000);
setcookie("uresim","",time()-90000);
setcookie("biz_nerdeyiz","",time()-90000);
setcookie("quesa","",time()-90000);

session_start();
session_destroy();

$sorgu9=mysql_query("UPDATE users SET  open_close='0' WHERE user_id='$uid'",$db);
if($sorgu9==1){
header("Location:index.php");}else { header("Location:index.php");}
?>

<?php
	if(isset($db)){
		mysql_close($db);
	}
?>
<? ob_end_flush(); ?>