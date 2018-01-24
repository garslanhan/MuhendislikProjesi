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
<h3>ÖĞRETİM GÖREVLİSİ EKLEME İŞLEMLERİ</h3></center>
</div>
<!--- menu-wrapper div end -->
<div class="clearing"></div>
<div class="logo-wrapper">
  <div class="logo">
   &nbsp;&nbsp;&nbsp;&nbsp; <a href="ogretimGorevlisiKayit.php">Kayıtları Gör</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ogretimGorevlisi.php">Yeni Kayıt Ekle</a></li>&nbsp;&nbsp;&nbsp;&nbsp;

  </div>
</div>
<div class="clearing"></div>
<!--- banner wrapper div end -->

     
 <form action="ogretimGorevlisiEkle.php" method="post">
<center>
<table width="557" border="1">
  <tr>
    <td width="234"><center><h3>TC Numarası:</h3></center></td>
    <td width="307"><center><input type="field" name="tc" id="tc" align="right" class="txt" required/></center></td>
  </tr>
  <tr>
    <td><center><h3>Numarası:</h3></center></td>
    <td><center><input type="field" name="no" id="no" align="right"  class="txt" required/></center></td>
  </tr>
  <tr>
    <td><center><h3>Adı:</h3></center></td>
    <td><center><input type="field" name="adi" id="adi" align="right"  class="txt" required/></center></td>
  </tr>
  <tr>
    <td><center><h3>Soyadı:</h3></center></td>
    <td><center><input type="field" name="soyadi" id="sayadi" align="right"  class="txt" required/></center></td>
  </tr>
  <tr>
    <td><center><h3>Şifresi:</h3></center></td>
    <td><center><input type="password" name="sifre" id="sifre" align="right"  class="txt" required/></center></td>
  </tr>
  <tr>
    <td height="42"><center><h3>Şifreyi Tekrar Giriniz:</h3></center></td>
    <td><center><input type="password" name="sifre1" id="sifre1" align="right"  class="txt" /></center></td>
  </tr>
</table>
<p>&nbsp;</p>
  <p>&nbsp;</p>
 <center><h3><button type="submit" id="button" class="btn">Öğretim Görevlisi Ekle</button></h3></center>
 </center>
</form>  
<!--- container div end -->
<div class="clearing"></div>

<div class="menu-wrapper1">
<center>
@busrayegen  2013123045   Cumhuriyet Üniversitesi Bilgisayar Mühendisliği</center>
</div>


</body>
</html>
