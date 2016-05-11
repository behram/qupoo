<?php ob_start(); ?>
<?
$db = mysql_connect('localhost','qupoo','Qupoo123');
if(!$db){
die('Sunucu kapalı ya da hesap bilgileri yanlış');}
mysql_select_db('qupoo_db') or die('Veritabanı yok');
mysql_query("SET NAMES 'utf8'");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="-h8VembAD1ugd5FBF1jTZY3wYtw-QJvKu20YxgJbkLo" />
<meta name="keywords" content="qupoo,qupoo.com,site bul,site keşfet,şifre sakla,üye ol,bilgi sakla,qupooKaşif,passtore,password,username,membership,üyelik,websiteler,anasayfa,eniyi siteler,siteler,qupoo passtore,hız,sörf,sosyal ağ,sosyal siteler" />

<meta name="description" content="qupoo.com mükemmel bir anasayfa uygulaması.Üyelik girişlerini yapabilir.Bilgilerini güvenle saklayabilir.qupooKaşif ile siteleri keşfedebilirsin." />

<link rel="shortcut icon" href="qupoo_logo_go/icon.png">
<meta name="rating" content="All" />
<meta name="robots" content="index, follow" />
<title>qupoo-Tarayıcı Alışkanlığı</title>
<style>
@font-face {font-family: 'opensans';font-style: normal;font-weight:100;src: local('opensans'), url(opensans300.woff) format('woff');}
body,html,h1,h2,h3,div,span,textarea,div,select,option,input,textarea{font-family:"opensans";font-weight:100;}
a:link{text-decoration:none;}
body{background:url(backgrounds/bacground.jpg);margin:0px;padding:0px;min-height:510px;}
.add_adiv{background:rgb(235,235,235);height:auto;width:350px;left:50%;margin-left:-175px;top:58px;position:absolute;border-radius:0px 0px 30px 30px;box-shadow:#999 0px 0px 5px inset,#fff 0px 0px 10px ;border:#bbb 1px solid;}
.add_adiv input,textarea{ width:288px;height:50px;margin-left:20px;border:#efefef 1px solid;box-shadow:#999 0px 0px 5px inset;margin-bottom:20px;font-size:19px;padding:0px 10px;}
input[type="submit"]{ color:#fff;box-shadow:#fff 1px 1px 3px inset,#666 1px 1px 3px;border:#aaa 1px solid;background:rgb(0,180,200);cursor:pointer;width:308px}
input[type="submit"]:active{box-shadow:#fff 2px 2px 6px inset,#666 2px 2px 6px;background:rgb(0,200,220)}
input[type="submit"]:hover{background:rgb(0,200,220)}
.add_adiv input:focus{outline:none;box-shadow:#999 0px 0px 5px;}
span{margin-left:20px;}
select{height:50px;width:310px;margin-left:20px;margin-bottom:20px;border:none;line-height:50px;box-shadow:#999 0px 0px 5px inset;padding-left:10px;font-size:18px;cursor:pointer;}
select:focus{outline:none;}
option{color:#333;}
textarea{max-width:288px;height:70px;max-height:100px;padding-top:5px;}
textarea:focus{outline:none;}
.ust_div{height:60px;width:100%;background:rgb(230,230,230);z-index:99;position:absolute;top:0px;left:0px;box-shadow:#999 0px 0px 10px ;text-align:center;line-height:60px;}
.ust_div span{background:rgb(235,235,235);padding: 10px 15px;border-radius:20px;box-shadow:#00ccee 0px 0px 5px;}
</style>

</head>
<body>



<div class="add_adiv" style="padding:25px 15px;">
<form method="post" enctype="multipart/form-data" action="site-add.php">
<span>Kategori</span>
<select name="w_cate">
<option value="2" <? if($_GET["categori"]==2){echo "selected='selected'";}; ?> >Sosyal</option>
<option value="3" <? if($_GET["categori"]==3){echo "selected='selected'";};?> >E-posta</option>
<option value="4" <? if($_GET["categori"]==4){echo "selected='selected'";};?> > Forum</option>
<option value="5" <? if($_GET["categori"]==5){echo "selected='selected'";};?> >Video</option>
<option value="6" <? if($_GET["categori"]==6){echo "selected='selected'";};?> >Müzik</option>
<option value="7" <? if($_GET["categori"]==7){echo "selected='selected'";};?> >Haber</option>
<option value="8" <? if($_GET["categori"]==8){echo "selected='selected'";};?> >Alışveriş</option>
<option value="9" <? if($_GET["categori"]==9){echo "selected='selected'";};?> >Spor</option>
<option value="10" <? if($_GET["categori"]==10){echo "selected='selected'";};?> >Döküman</option>
<option value="11" <? if($_GET["categori"]==11){echo "selected='selected'";};?> >Arama</option>
<option value="12" <? if($_GET["categori"]==12){echo "selected='selected'";};?> >Dosya</option>
<option value="13" <? if($_GET["categori"]==13){echo "selected='selected'";};?> >TV / Radyo</option>
<option value="14" <? if($_GET["categori"]==14){echo "selected='selected'";};?> >Diğer</option>
</select>
<span>Website Adı :</span>
<input  type="text" name="w_name"/>
<span>Website Adresi :</span>
<input  type="text" name="w_url"/>
 
<span style="margin-bottom:20px;">Site Logosu :</span>
<input type="file"  style="height:29px;padding:0px;width:119px;opacity:0.7" name="w_logo"/><br />

<span>Tanımı ve Yorumun :</span>
<textarea name="w_abo"></textarea>
<input type="submit" value="Gönder" name="ad_form"/>

</form>

</div>


<div class="ust_div"><img src="qupoo_logo_go/logo_mini_tra.png"	 height="55" style="position:absolute;left:0px;"/>


<?


if(isset($_POST["ad_form"])){

$w_cat=$_POST['w_cate'];
$w_name=$_POST['w_name'];
$w_url=$_POST['w_url'];
$w_abo=$_POST['w_abo'];
$uid=$_COOKIE["uid"];

if($w_cat=="" || $w_name=="" || $w_url=="" || $_FILES['w_logo']['name']=="" || $w_abo== ""){

exit("<span>Lütfen formda boş alan bırakmayınız.</span>");

}


$itype=strtolower($_FILES['w_logo']['type']);
$iname=strtolower($_FILES['w_logo']['name']);
$itname=strtolower($_FILES['w_logo']['tmp_name']);

	$tur=array(
	'image/jpeg',
	'image/jpg',
	'image/png',
	'image/x-png',
	'image/gif'
	
	
	);
	
	
	

if(in_array(strtolower($_FILES['w_logo']['type']),$tur)){
	
	move_uploaded_file($_FILES["w_logo"]["tmp_name"],
      "/imaget/" . $_FILES["w_logo"]["name"]);
	 
	$fi_md5=md5(rand(0, 10000));

	

	if(file_exists("/imaget/".$fi_md5.$_FILES["w_logo"]["name"] ) ) 
 {
 echo "Bu Logoyu Zaten Yüklemiştin"; }else{
 
 $logo_fol="/imaget/".$fi_md5.$_FILES["w_logo"]["name"];
 
 rename("/imaget/".$_FILES["w_logo"]["name"], $logo_fol);
 
 $kaydet=mysql_query("INSERT INTO  `qupoo_db`.`site_sug` (`web_id` ,`web_cate` ,`web_name` ,`web_url` ,`web_logo` ,`web_abo` ,`ver`,`user_id`)
VALUES (												   NULL ,  '$w_cat',  '$w_name',  '$w_url',  '$logo_fol',  '$w_abo',  '0',  '$uid');");
 
 if($kaydet==1){echo "<span> Website Öneriniz Başarıyla Kaydedildi. Teşekkürler </span>";}
 }


	}else{exit("<span>Geçersiz Logo Formatı</span>");}
	

	
	
	


}else{}


?>




</div>