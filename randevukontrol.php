<?php


include 'database.php';
$db = Database::connect();
$db->exec("set names utf8");

if(isset($_POST['aciklama']) && isset($_POST['tarih']) && isset($_POST['saat']) && isset($_POST['ogretimGorevlisiId']))
{
	$aciklama = $_POST["aciklama"];	
	$tarih=$_POST["tarih"];
	$saat=$_POST["saat"];
	$ogretimGorevlisiId=$_POST["ogretimGorevlisiId"];

	try
	{ session_start();
$kullaniciid=$_SESSION['kullaniciid'];
		$sonuc = $db->prepare("insert into randevu(randevuAciklamasi,randevuSaati,randevuTarihi,ogretimGorevlisiId,kullaniciid) values('".$aciklama."','".$saat."','".$tarih."','".$ogretimGorevlisiId."','".$kullaniciid."')");
		$sonuc->execute();
		header("Location: randevular.php");
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
}