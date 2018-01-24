
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>TMPH00043</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="menu-wrapper">
<center>
<h3>ÖĞRENCİ EKLEME İŞLEMLERİ</h3></center>
</div>
<!--- menu-wrapper div end -->

  <div class="menu-wrapper1">
<center><h3>

  <?php 
			session_start();
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
         <p>Randevu İşlemleri</p>
          <div class="right-panel">
            <ul>
              <li><a href="randevular.php">Randevular</a></li>
              <li><a href="randevual.php">Randevu Alma</a></li>
             
              <li><a href="randevuGuncelleme.php">Randevu Güncelleme</a></li>
                <li><a href="randevuSil.php">Randevu Silme</a></li>
              
              
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
       <form action="randevukontrol.php" method="post">
<center>
<table width="613" >
 <tr>
    <td width="234" height="68"><center><h3>Randevu Açıklaması:</h3></center></td>
    <td width="367"><center><input type="text" name="aciklama" class="txt" required/></center></td>
  </tr>
  <tr>
    <td width="234" height="54"><center><h3>Randevu Saati:</h3></center></td>
    <td width="367"><center><input type="date" name="tarih" class="txt" required/></center></td>
  </tr>
  <tr>
    <td height="56"><center><h3>Randevu Tarihi:</h3></center></td>
    <td><center><input type="time" name="saat" class="txt" required/></center></td>
  </tr>
  <tr>
    <td height="48"><center><h3>Öğretim Görevlisi:</h3></center></td>
    <td><center><select name="ogretimGorevlisiId" id="ogretimGorevlisiId" value="Seç" class="txt" required/>
    		  <?php 
			  session_start();
			$kullaniciid=$_SESSION['kullaniciid'];
			include 'database.php';
			$pdo = Database::connect();

									$sql='SELECT ogretimgorevlisi.ogretimGorevlisiId, CONCAT(ogretimgorevlisi.ogretimGorevlisiAd," ",ogretimgorevlisi.ogretimGorevlisiSoyad) AS adsoyad from ogretimgorevlisi';
	 				   foreach ($pdo->query($sql) as $key => $value) {
                                                $id=$value['ogretimGorevlisiId'];
                                                $ogretimGorevlisi=$value['adsoyad'];
                                                echo "<option value=$id>$ogretimGorevlisi</option>";
					   }
					  ?>
			
			</center>  </select ></td>
  </tr>
  
</table>
<p>&nbsp;</p>
  <p>&nbsp;</p>
 <center><h3><button type="submit" id="button" class="btn">Randevu Al</button></h3></center>
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
