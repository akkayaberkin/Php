<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<?php 
include './baglan.php';
$link = mysqli_connect("localhost","o121620151061","X9n0lSZ6bEnsf","o121620151061");
 $oku = mysqli_query($link, "select * from paket")
?>
<table border="1">
    <?php 
    while ($kayit = mysqli_fetch_array($oku))
            {
        echo "<tr>";
        echo "<td>". $kayit["id"] ."</td>";
        echo "<td>". $kayit["paketi"] ."</td>";
        echo "<td>". $kayit["aciklama"] ."</td>";
        echo "</tr>";
    } 
    ?>
</table>