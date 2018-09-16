<html>    <head>       <title>data</title>     
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />    </head>    <body>    <?php
    $sunucu = "localhost";
    $kullanici = "o121620151061";
    $sifre = "X9n0lSZ6bEnsf";
    $dbname="o121620151061";
    
    $link = mysqli_connect($sunucu,$kullanici,$sifre);
    mysqli_select_db($link, $dbname);
    mysqli_query($link, "SET NAMES 'utf8'");
 
    ?> </body> </html> 
