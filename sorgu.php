
<?php
$ad = $_POST["kullanici_adi"];
$sifre = $_POST["sifre"];

if($ad and $sifre){
    echo "merhaba ".$ad;
    if($ad == "esma" and $sifre == "1234"){
       
header("location:stok.php");



// include("stok.php"); 
        } else { echo "Kullanıcı adı veya parola yanlış.";
        header("location:index.php");
        }
         




} else {
header("location:index.php");
}


?>