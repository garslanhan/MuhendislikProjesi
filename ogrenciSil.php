<?php 
	require 'database.php';
	$id = 0;	
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}	
	if ( !empty($_POST)) {
		// keep track post values
		$id = $_POST['id'];	
		// delete data
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM ogrenci  WHERE ogrenciId = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		Database::disconnect();
		header("Location: ogrencikayit.php");	
	} 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>TMPH00043</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<br><br>&nbsp
<a href="index.php">Anasayfa</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ogretimGorevlisi.php">Öğretim Görevlisi</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ogrenci.php">Öğrenci</a>
<div class="menu-wrapper">
<center>
<h3>ÖĞRENCİ SİLME İŞLEMLERİ</h3></center>
</div>
<!--- menu-wrapper div end -->
<div class="clearing"></div>
<div class="logo-wrapper">
  <div class="logo">
  &nbsp;&nbsp;
<a href="ogrenciKayit.php">Kayıtları Gör</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ogrenci.php">Yeni Kayıt Ekle</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
</div>
<div class="clearing"></div>
<!--- banner wrapper div end --><!--- container div end -->
<div class="clearing"></div>

<form class="form-horizontal" action="ogrencisil.php" method="post"><center>
	    			  <input type="hidden" name="id" value=" <?php echo $id;?> "/>
					 <h3>Silmek İstediğinize Emin misiniz ?</h3>
                     <h1>&nbsp;</h1>
                     <h1>&nbsp;</h1>
					  <div class="form-actions">
						  <button type="submit" class="btn"><h3>Evet</h3></button>
                          

						</div></center>
					</form>
                    <h1>&nbsp;</h1>
  
                    <center> <button type="submit" class="btn"><a href="ogrencikayit.php"><h3>Hayır</h3></a></button></center>
 
<div class="menu-wrapper1">
<center>
@busrayegen   2013123045    Cumhuriyet Üniversitesi Bilgisayar Mühendisliği</center>
</div>

</body>
</html>