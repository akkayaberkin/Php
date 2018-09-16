<link rel="stylesheet" href="css/atlama.css"/>
<?php
include 'baglan.php';
$yer="Doğu Karadeniz";
$link = mysqli_connect("localhost","o121620151061","X9n0lSZ6bEnsf","o121620151061");
$sorg=mysqli_query($link,"SELECT * FROM rezervasyon ORDER BY id DESC LIMIT 1");
$kul= mysqli_fetch_array($sorg);
$id=$kul['id'];
$sqlb="UPDATE rezervasyon SET yer='$yer' Where id='$id'";
mysqli_query($link, $sqlb) or die('error');

?> <div class="hah"><img src="image/h.o.jpg"></div>
  <div class="haha"><img src="image/basarili.jpg"></div>

  <center><h1>Rezervasyon Talebiniz Alındı.</h1>
    <h1>8 Saniye İçinde Anasayfamıza Yönlendirileceksiniz.</h1> <?php
   header('Refresh: 8; url=index.php');?></center>
    