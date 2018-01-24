
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
          <p>Randevu İşlemleri</p>
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
      
      <div class="content">
   <table width="695"  >
    <td width="687" height="95"><table width="459"  >
      
      <thead>
        <tr>
           <td width="148"><h3>
         
             <u>Açıklaması</u>
           
          </h3></td>
          <td width="147"><h3>
            
              <u>Saati</u>
           
          </h3></td>
          <td width="148"><h3>
         
             <u>Tarihi</u>
           
          </h3></td>
           
          
        </tr>
      </thead>
      <tbody>
		              <?php 

			
				
						 $pdo = new PDO('mysql:host=localhost;dbname=sql;charset=utf8','root','');
					   //$sql = 'SELECT * FROM randevular ORDER BY id DESC';
					   $sql="SELECT randevu.randevuId,randevu.randevuAciklamasi,randevu.randevuSaati,randevu.randevuTarihi,ogretimGorevlisiAd,ogretimGorevlisiSoyad FROM randevu INNER JOIN ogrenci ON ogrenci.ogrenciId=randevu.kullaniciid  INNER JOIN ogretimgorevlisi ON ogretimgorevlisi.ogretimGorevlisiId=randevu.ogretimGorevlisiId where ogrenci.ogrenciId='".$kullaniciid."'";
					  foreach ($pdo->query($sql) as $row) {
						  $tarih1=strtotime($row['randevuTarihi']);
						   $tarih2=strtotime(date("d.m.Y"));
						  if($tarih1>$tarih2)
						  {
							 echo '<tr>';
							  	echo '<td>'. $row['randevuAciklamasi'] . '</td>';
							   	echo '<td>'. $row['randevuSaati'] . '</td>';
							   	echo '<td>'. $row['randevuTarihi'] . '</td>';
								
					   	echo '<td>';
							   	echo '<a href="randevuyusil.php?id='.$row['randevuId'].'"><h3>İptal</h3>';
							   	echo '</td>';
								echo '</tr>';
						  }
						  else if($tarih1==$tarih2)
						  {
							  $saat1=strtotime($row['randevuSaati']);
							  $saat2=strtotime(date("H:i"));
							  
							  if($saat1>$saat2)
							  {
								echo '<tr>';
							  	echo '<td>'. $row['randevuAciklamasi'] . '</td>';
							   	echo '<td>'. $row['randevuSaati'] . '</td>';
							   	echo '<td>'. $row['randevuTarihi'] . '</td>';
								
					   	echo '<td>';
							   	echo '<a href="randevuyusil.php?id='.$row['randevuId'].'"><h3>İptal</h3>';
							   	echo '</td>';
								echo '</tr>';
							  }
						  }
						   		}
					  ?>
                         
  <td height="23">

      </table>
    </table>


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
