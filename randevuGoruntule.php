<?php 
	
	require 'database.php';
	
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: randevuGuncelleme.php");
	}

	if ( !empty($_POST)) {
		// keep track validation errors
		$nameError = null;
		$emailError = null;
		$mobileError = null;
		
		// keep track post values
		$aciklama = $_POST['aciklama'];
		$tarih = $_POST['tarih'];
		$saat = $_POST['saat'];
		
		// validate input
		$valid = true;
		if (empty($aciklama)) {
			$nameError = 'Lütfen Açıklama Giriniz';
			$valid = false;
		}
		
		$valid = true;
		if (empty($tarih)) {
			$emailError = 'Lütfen Tarih Giriniz';
			$valid = false;
		}
		$valid = true;
		if (empty($saat)) {
			$mobileError = 'Lütfen Saat Giriniz';
			$valid = false;
		}
		
		// update data
		if ($valid) {
		
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE randevu  set randevuAciklamasi = '$aciklama', randevuSaati = '$saat', randevuTarihi = '$tarih' WHERE randevuId = '$id' ";
			$q = $pdo->prepare($sql);
			$q->execute();
			Database::disconnect();
			header("Location: randevular.php");
			
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT randevu.randevuId,randevu.randevuAciklamasi,randevu.randevuSaati,randevu.randevuTarihi FROM randevu where randevu.randevuId = ? ";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
	//	$aciklama = $data['aciklama'];
		//$tarih = $data['tarih'];
		//$saat = $data['saat'];
		Database::disconnect();
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>TMPH00043</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div class="menu-wrapper">
<center>
<h3>Öğrenci Randevu Sistemi</h3></center>
</div>
<!--- menu-wrapper div end -->


  <div class="menu-wrapper1">
<center><h3>

  <?php 
			session_start();
            $kullaniciid=$_SESSION['kullaniciid'];
			$kullanicino=$_SESSION['kullanicino'];
			echo $kullanicino
			
			?></h3></center> 
</div>


<div class="clearing"></div>

<!--- banner wrapper div end -->
<div class="container">
  <div class="panel-wrapper">
    <div class="left-colum">
      <div class="panel">
        <div class="title">
          <h2> </h2>
        </div>
        <div class="content">
          <p>Randevu İşlemleri
          <div class="right-panel">
            <ul>
              <li><a href="randevular.php">Randevular</a></li>
              <li><a href="randevual.php">Randevu Alma</a></li>
              <li><a href="randevuGuncelleme.php">Randevu Güncelleme</a></li>
                <li><a href="randevuSil.php">Randevu İptal</a></li>
              
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="right-colum">
    <div class="title">
      

        <h1></h1>
      </div>
      
      <div class="content1">
      <form action="randevuGoruntule.php?id=<?php echo $id?>" method="post"> 
<center>
<table width="613" >
<!-- <div class="control-group <?php echo !empty($nameError)?'error':'';?>"></div>-->
 <tr>
    <td width="218" height="68"><center><h3>Randevu Açıklaması:</h3></center></td>
    <td width="383"><center>	<input name="aciklama" type="text"  placeholder="aciklama" value="<?php echo !empty($aciklama)?$aciklama:'';?>">
					      	<?php if (!empty($nameError)): ?>
					      		<span class="help-inline"><?php echo $nameError;?></span>
					      	<?php endif; ?></center></td>
  </tr>
  <div class="control-group <?php echo !empty($emailError)?'error':'';?>"></div>
  <tr>
    <td width="218" height="54"><center><h3>Randevu Saati:</h3></center></td>
    <td width="383"><center><input name="tarih" type="date" placeholder="tarih" value="<?php echo !empty($tarih)?$tarih:'';?>">
					      	<?php if (!empty($emailError)): ?>
					      		<span class="help-inline"><?php echo $emailError;?></span>
					      	<?php endif;?></center></td>
  </tr>
  <div class="control-group <?php echo !empty($mobileError)?'error':'';?>"></div>
  <tr>
    <td height="56"><center><h3>Randevu Tarihi:</h3></center></td>
    <td><center><input name="saat" type="time"  placeholder="saat" value="<?php echo !empty($saat)?$saat:'';?>">
					      	<?php if (!empty($mobileError)): ?>
					      		<span class="help-inline"><?php echo $mobileError;?></span>
					      	<?php endif;?></center></td>
  </tr>

  
</table>
<p>&nbsp;</p>
  <p>&nbsp;</p>
 <center><h3><button type="submit" id="button" class="btn">Randevu Düzenle</button></h3></center>
 </center>
</form>  
  
           </div>
      </div>
  </div>
    <div class="clearing"></div>
  </div>
  <!--- panel wrapper div end -->
</div>
<!--- container div end -->

<div class="clearing"></div>

<div class="menu-wrapper1">
<center>
@busrayegen  2013123045   Cumhuriyet Üniversitesi Bilgisayar Mühendisliği</center>
</div>


</body>
</html>
