<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
</head>
</html>
<?php
require "bagla.php"; 
if($_POST)
{	$kullaniciAdi=$_POST["kullaniciAdi"];
$kullanicisifre=$_POST["sifre"];
$kullanici=$_POST["kullanici"];
echo $kullanici;
echo $kullaniciAdi;
echo "<br>";
echo $kullanicisifre;

	if($kullaniciAdi!=" " && $kullanicisifre!=" ")
	{
		
		if($kullanici == "ogrenci")
		{
			$query = $db->query("SELECT * FROM ogrenci where ogrenciNo='$kullaniciAdi' && ogrenciSifre='$kullanicisifre'", PDO::FETCH_ASSOC);
if ( $query->rowCount()>0 ){
     foreach( $query as $row ){
	
  $kullaniciid= $row['ogrenciId'];
	$kullanicino= $row['ogrenciNo'];
		  session_start();
			$_SESSION['kullaniciid'] = $kullaniciid;
			$_SESSION['kullanicino'] = $kullanicino;
		
     }
	 header("Location: randevular.php");
}
			
		}
				
else if($kullanici == "ogretimGorevlisi")
		{
			$query = $db->query("SELECT * FROM ogretimgorevlisi where ogretimGorevlisiNo='$kullaniciAdi' && ogretimGorevlisiSifre='$kullanicisifre'", PDO::FETCH_ASSOC);
 if ( $query->rowCount()>0 ){
     foreach( $query as $row ){
  
	$kullaniciid= $row['ogretimGorevlisiId'];
	$kullaniciA= $row['ogretimGorevlisiAd'];
	$kullaniciS= $row['ogretimGorevlisiSoyad'];
		  session_start();
			$_SESSION['kullaniciid'] = $kullaniciid;
			$_SESSION['kullaniciA'] = $kullaniciA;
			$_SESSION['kullaniciS'] = $kullaniciS;
     }
	 header("Location: ogretimGorevlisiRandevu.php");
}
			
		}

else 
		{
			$query = $db->query("SELECT adminId FROM admin where kullaniciadi='$kullaniciAdi' && sifre='$kullanicisifre'", PDO::FETCH_ASSOC);
if ( $query->rowCount()>0 ){
     foreach( $query as $row ){
  
	$kullaniciid= $row['ogretimGorevlisiId'];

		  session_start();
			$_SESSION['kullaniciid'] = $kullaniciid;

     }

	 header("Location: ogrenci.php");
}
			
		}
		
		


	}


	
}
?>
