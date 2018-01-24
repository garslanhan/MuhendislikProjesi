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
		$sql = "DELETE FROM randevu WHERE randevuId = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		Database::disconnect();
		header("Location: ogretimGorevlisiRandevu.php");
		
	} 
?>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>TMPH00043</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div class="menu-wrapper">
<center>
<h3> Öğrenci Randevu Sistemi</h3></center>
</div>
<!--- menu-wrapper div end -->


  <div class="menu-wrapper1">
<center><h3>

  <?php 
			session_start();
            $kullaniciid=$_SESSION['kullaniciid'];

			
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
               <li><a href="ogretimGorevlisiRandevu.php">Randevular</a></li>
              <li><a href="ogretimGorevlisiRandevuSil.php">Randevu İptal</a></li>
              
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="right-colum">
 
      
      <div class="content">
   
	    			<form class="form-horizontal" action="ogretimGorevlisiRandevuSilme.php" method="post">
	    			  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
			 <h3>Silmek İstediğinize Emin misiniz ?</h3>
                     <h1>&nbsp;</h1>
                     <h1>&nbsp;</h1>
					  <div class="form-actions">
<center>
						<button type="submit" class="btn"><h3>Evet</h3></button>
                        </center>
						</div>
					</form>
                      <h1>&nbsp;</h1>
                     <h1>&nbsp;</h1>
                    <center> <button type="submit" class="btn"><a href="ogretimGorevlisiRandevuSil.php"><h3>Hayır</h3></a></button></center>
      
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
