<?
require_once("db.php");

if($_GET['merhaba']=="merhaba"){
$sorgu = mysql_query("SELECT * FROM `all_memberships`");
echo "all_memberships ".mysql_num_rows($sorgu);

echo "<br />";

$sorgu = mysql_query("SELECT * FROM `memberships`");
echo "memberships ".mysql_num_rows($sorgu);
echo "<br />";

$sorgu = mysql_query("SELECT * FROM `qupoonote_db2`");
echo "qupoonote_db2 ".mysql_num_rows($sorgu);
echo "<br />";


$sorgu = mysql_query("SELECT * FROM `sites_all`");
echo "sites_all ".mysql_num_rows($sorgu);

echo "<br />";

$sorgu = mysql_query("SELECT * FROM `urlstore_db`");
echo "urlstore_db ".mysql_num_rows($sorgu);

echo "<br />";
$sorgu = mysql_query("SELECT * FROM `urlstore_db2`");
echo "urlstore_db2 ".mysql_num_rows($sorgu);
echo "<br />";
$sorgu = mysql_query("SELECT * FROM `users`");
echo "users ".mysql_num_rows($sorgu);
echo "<br />";
$sorgu = mysql_query("SELECT * FROM `users_all_memberships`");
echo "users_all_memberships ".mysql_num_rows($sorgu);

echo "<br />";
$sorgu = mysql_query("SELECT * FROM `users_extra_memberships`");
echo "users_extra_memberships ".mysql_num_rows($sorgu);




echo "<br />";
$sorgu = mysql_query("SELECT * FROM `qbox_facebook`");
echo "qbox_facebook ".mysql_num_rows($sorgu);

echo "<br />";
$sorgu = mysql_query("SELECT * FROM `qbox_twitter`");
echo "qbox_twitter ".mysql_num_rows($sorgu);



}
	


?>