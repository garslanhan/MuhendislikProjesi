<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>TMPH00043</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<br><br>&nbsp
<a href="index.php">Anasayfa</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ogretimGorevlisi.php">Öğretim Görevlisi</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ogrenci.php">Öğrenci</a>&nbsp;&nbsp;&nbsp;&nbsp;

<div class="menu-wrapper">
  <center>
<h3>ÖĞRETİM GÖREVLİSİ KAYITLARI</h3></center>
</div>
<!--- menu-wrapper div end -->
<div class="clearing"></div>
<div class="logo-wrapper">
  <div class="logo">
   &nbsp;&nbsp;&nbsp;&nbsp; <a href="ogretimGorevlisiKayit.php">Kayıtları Gör</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ogretimGorevlisi.php">Yeni Kayıt Ekle</a></li>
  </div>
</div>
<div class="clearing"></div>
<!--- banner wrapper div end --><!--- container div end -->
<div class="clearing"></div>

<form action="ogretimGorevlisiEkle.php" method="post">
<center>
  <table width="744"  >
    <td height="95"><table width="752"  >
      
      <thead>
        <tr>
          <td width="180" height="61">
            <h3><center><u>TC Numarası</u></center></h3>
         </td>
          <td width="172"><h3>
            
            <center>  <u> Numarasi</u> </center>
           
          </h3></td>
          <td width="137"><h3>
         
             <center> <u>Adi</u></center>
           
          </h3></td>
          <td width="235"><h3>
           
             <center> <u> Soyadi</u></center>
            
          </h3></td>
        </tr>
      </thead>
      <tbody>
      <center>
        <?php 
					   
					   $pdo = new PDO('mysql:host=localhost;dbname=sql;charset=utf8','root','');
					   $sql='SELECT * FROM ogretimgorevlisi';
					   
	 				   foreach ($pdo->query($sql) as $row) {
						   
						   		echo '<tr>';
							   	echo '<td>'.'<center>'. $row['ogretimGorevlisiTc'] .'</center>'. '</td>';
							   	echo '<td>'. '<center>'.$row['ogretimGorevlisiNo'] .'</center>'. '</td>';
							   	echo '<td>'.'<center>'.$row['ogretimGorevlisiAd'] .'</center>'. '</td>';
								echo '<td>'.'<center>'. $row['ogretimGorevlisiSoyad'] .'</center>'. '</td>';
								echo '<td>';
							   	echo '<center>'.'<a href="ogretimGorevlisiSil.php?id='.$row['ogretimGorevlisiId'].'"><h3>Sil</h3></a>'.'<center>';			
							   	echo '</td>';
							   	echo '</tr>';
					   }
					  ?>
      </center>
    <td height="23"></table>
    </table>
</center>
</form>
 
<div class="menu-wrapper1">
<center>
@busrayegen  2013123045   Cumhuriyet Üniversitesi Bilgisayar Mühendisliği</center>
</div>

</body>
</html>