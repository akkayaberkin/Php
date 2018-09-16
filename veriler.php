<link rel="stylesheet" href="css/atlama.css"/>
<?php
include 'baglan.php';

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tc=$_POST['tc'];
$tarih=$_POST['tarih'];

$sqlb="INSERT INTO `rezervasyon`(`isim`, `soyisim`, `tc`,`itarih`) VALUES ('$ad','$soyad','$tc','$tarih')";
mysqli_query($link, $sqlb) or die(mysqli_error($link));
if($sqlb)
{
    include 'atla.php';
}
?>
<!--
<div class="foto">
    <img src="img/aaaaa.png" target="_blank"  >
</div>
 -->