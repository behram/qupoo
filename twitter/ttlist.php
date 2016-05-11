
<?
$ttsite= file_get_contents("http://ecktr.com/");

$ttsite=explode("</tfoot>",$ttsite);

$ttsite2=explode("</table>",$ttsite[1]);

echo $ttsite2[0];

?>