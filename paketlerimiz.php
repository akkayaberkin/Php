<html>
<head>
<title>Web Programlama</title>
<script type="text/javascript" src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

</head>
<body>
<?php
include 'baglan.php';
$sorgu=mysql_query("select * from paket");
?>
<table style="width: 400px; border: yellow 3px ridge;" border="0">
    <tr style="background: black; color: white;">
    <th>İd</th>
    <th>Paketler</th>
    <th>Açıklama</th>
    </tr>
 
<?
while($paketi=mysql_fetch_array($sorgu))
{
    echo '<tr>';
 
    echo '<td align="center">'.$paketi['id'].'</td>';
    echo '<td>'.$paketi['paketler'].'</td>';
    echo '<td>'.$paketi['aciklama'].'</td>';
 
    echo '</tr>';
}
 
?>
</table>

</body>
</html>

  