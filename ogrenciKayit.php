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
<h3>ÖĞRENCİ KAYITLARI</h3></center>
</div>
<!--- menu-wrapper div end -->
<div class="clearing"></div>
<div class="logo-wrapper">
  <div class="logo">
   &nbsp;&nbsp;&nbsp;&nbsp; <a href="ogrenciKayit.php">Kayıtları Gör</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ogrenci.php">Yeni Kayıt Ekle</a></li>
  </div>
</div>
<div class="clearing"></div>
<!--- banner wrapper div end --><!--- container div end -->
<div class="clearing"></div>

<form action="ogrenciEkle.php" method="post">
<center>
  <table width="744"  >
    <td height="95"><table width="744"  >
      
      <thead>
        <tr>
          <td width="180" height="61">
            <h3><center><u>TC Numarası</u></center></h3>
         </td>
          <td width="172"><h3>
            
              <center><u>Numarasi</u></center>
           
          </h3></td>
          <td width="137"><h3>
         
             <center> <u>Adi</u></center>
           
          </h3></td>
          <td width="235"><h3>
           
            <center>  <u>Soyadi</u></center>
            
          </h3></td>
        </tr>
      </thead>
      <tbody>
      <center>
        <?php 
					   
					   $pdo = new PDO('mysql:host=localhost;dbname=sql;charset=utf8','root','');
					   $sql='SELECT * FROM ogrenci';
					   
	 				   foreach ($pdo->query($sql) as $row) {
						   
						   		echo '<tr>';
							   	echo '<td>'.'<center>'. $row['ogrenciTC'] .'</center>'.  '</td>';
							   	echo '<td>'.'<center>'.  $row['ogrenciNo'] .'</center>'.  '</td>';
							   	echo '<td>'.'<center>'.  $row['ogrenciAd'] .'</center>'.  '</td>';
								echo '<td>'. $row['ogrenciSoyad'] . '</td>';
								echo '<td>';
							   	echo '<center>'.'<a href="ogrenciSil.php?id='.$row['ogrenciId'].'"><h3>Sil</h3></a>'.'<center>';			
							   	echo '</td>';
							   	echo '</tr>';
					   }
					  ?>
      </center>
  <td height="23">

      </table>
    </table>
</center>
</form>
 
<div class="menu-wrapper1">
<center>
@busrayegen  2013123045   Cumhuriyet Üniversitesi Bilgisayar Mühendisliği</center>
</div>

</body>
</html>