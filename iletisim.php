
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="./css/css_sablonu.css" />

<?php 

if($_POST){
$diger = 'mime-version: 1.0'."\r\n";
$diger .= 'content-type: text/html; charset=utf-8'."\r\n";	
$isim = $_POST["isim"];
$konu =  $_POST["konu"];
$eposta = $_POST["eposta"];
$mesaj = $_POST["mesaj"];

if(!filter_var($eposta, FILTER_VALIDATE_EMAIL)){
	
	echo "Doğru E-posta Girilmedi";
	
}elseif(!$isim || !$mesaj || !$eposta){
	
	echo "Lütfen İsim, E-posta ve Mesajınızı boş bırakmayın";
	
	
}else{

$kime = "berkin654@gmail.com";

$icerik = "İsim :  ".$isim."<br/> ".

          "esposta:  ".$eposta. " <br/> mesajınız <br/> ".$mesaj;
		  
	$diger .= "From: ".$eposta;	  

 $gonder = mail($kime,$konu,$icerik,$diger);

if($gonder){
	
	echo "Mesajınız başarılı bir sekilde Gönderilmistir Yönlendiriliyorsunuz.. ";
	     header("refresh: 2; url=index.php");
}
}
}

else{
	
	echo '<form action="" method="post">

<h1>İletişim </h1>

<table> 
<tr> 
<td>İsminiz</td>
<td><input type="text" name="isim" id="" /></td>
</tr>

<tr> 
<td>Konusu    </td>
<td><select name="konu" id=""> 

<option >Soru</option>
<option >Site Hakkında</option>
<option >Diğer</option>

</select></td>
</tr>




<tr> 
<td>E-posta</td>
<td><input type="text" name="eposta" id="" /></td>
</tr>
<tr> 
<td>Mesaj</td>
<td><textarea name="mesaj" cols="30" rows="10"></textarea></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" value="Gönder" /></td>
</tr>
</table>


</form>';
	
	
	
}


?>






