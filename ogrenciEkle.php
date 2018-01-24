<?php

include 'database.php';
$db = Database::connect();
$db->exec("set names utf8");

if(isset($_POST['tc']) && isset($_POST['no']) && isset($_POST['adi'])  && isset($_POST['soyadi'])  && isset($_POST['sifre']) && isset($_POST['sifre1'])   )
{
			$tc        =    ($_POST["tc"]);
			$no    =   ($_POST["no"]);
            $adi    =    ($_POST["adi"]);
			$soyadi    =   ($_POST["soyadi"]);
			$sifre    =    ($_POST["sifre"]);
			$sifre1    =    ($_POST["sifre1"]);
	
	
		try
	{
		$ogrenci = $db->prepare("insert into ogrenci(ogrenciTC,ogrenciNo,ogrenciAd,ogrenciSoyad,ogrenciSifre,ogrenciSifre1) values('".$tc."','".$no."','".$adi."','".$soyadi."','".$sifre."','".$sifre1."')");
		$ogrenci->execute();
		header("Location: ogrenciKayit.php");
        echo'eklendi';
		

	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
}
?>
