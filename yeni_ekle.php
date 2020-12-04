 <?php

$tablo_adi=$_POST["urun_turu"];
$urun_adi=$_POST["urun_ad"]; 
$adet=$_POST["adet"];
$ucret=$_POST["ucret"];
$kullanici="kullanıcı1";

date_default_timezone_set('Etc/GMT');
$tarih=date('d.m.Y H:i:s',time()); 

$conn = mysqli_connect("localhost","root","","stok");
 
// Bağlantı Kontrolü
if (mysqli_connect_errno())
  {
  echo "MySQL sunucusuna bağlanamadı: " . mysqli_connect_error();
  }
else



//tablo_adi'parametre olarak almasam bile yine de yüklenmiyor veritabanına
$sql="INSERT INTO $tablo_adi(ad,adet,ucret,updated_on,updated_by) VALUES ('$urun_adi','$adet','$ucret','$tarih','$kullanici')";
if(mysqli_query($conn,$sql)){
$mesaj= "<script>alert('Veri eklendi')</script>";	
echo $mesaj;


}
?>