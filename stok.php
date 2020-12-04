
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script   src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">

   
    <title>Stok</title>
</head>
<body>
<header>
<input type="btn" class="user_btn" value="user_name">


</header>

<section class="orta">

<div class="yantaraf">
<?php
$conn = mysqli_connect("localhost","root","","stok");
 
// Bağlantı Kontrolü
if (mysqli_connect_errno())
  {
  echo "MySQL sunucusuna bağlanamadı: " . mysqli_connect_error();
  }
else
echo "Bağlandı"; // bağlanıp bağlanmadığını konrol amaçlı
?>
<nav>
    <ul >
<li> <a href="#" class="ilks-btn">ürünler <span class="fas fa-caret-down"></span></a></li>

<ul class="ilks-show">
<li> <a href="#" class="aracgerec" > mutfak araç & gereçleri   </a></li>

<li> <a href="#"  onclick="gonder('et_et_urunleri')" > et & et ürünleri  </a></li>
<li> <a href="#" onclick="gonders_i()"  >  soğuk içecekler </a></li>
<li> <a href="#" onclick="gonder(sicak_icecekler)"  >  sıcak içecekler </a></li>
</ul>



<li> <a href="#"> satış   </a></li>
<li> <a href="#"> kazanç   </a></li>
<li> <a href="#">  hakkımızda  </a></li>
    </ul>
</nav>

</div>

<script>
    $('.ilks-btn').click(function() {
        $('nav ul.ilks-show').toggleClass("show");
    });
</script>



<div class="orta-bolum">
<!-- Ürün arama -->
<div style="width:auto;height:auto;float:right;"> 

<form id="urun_ara" style="margin-right:20px;margin-top:5px;margin-bottom:5px;">
<input type="text" id="aranilan_urun">
<input type="submit" name="urun" value="Ara" id="ara" onclick="ara()"/>


</form>


</div>   <!-- / ürün arama -->


<!-- yeni ürün ekleme -->
<div style="width:100%;height:auto;">
<form id="yeni_urun_ekle" action="yeni_ekle.php" method="post">
<table border="1" cellspacing="0" class="urun-ekleme" >
<tr>

<td ><select>
    <option id="urun_turu"  name="urun_turu">Araç & Gereçler</option>
    <option id="urun_turu" name="urun_turu">Soğuk İçecekler</option>
    <option id="urun_turu" name="urun_turu">option3</option>
</select></td>

<td ><input type="text" id="urun_ad" name="urun_ad"  placeholder="ürün adı" /> </td>

<td ><input type="text" id="adet" name=adet placeholder="adeti" /> </td>
<td ><input type="text" id="ucret"  name=ucret placeholder="ücreti" /></td>
<td ><input type="submit" name="ekle" value="Ekle"  /></td>
</tr></table></form>

</div>  <!-- /yeni ürün ekleme -->

<!--deneme amaçlı ürün arama da butona basıldığında arac_gerec.phpdeki $deger değişkeni ekrana yazılsın diye ama olmadı
yani veri gönderiminde bir hata var -->
<script>
function ara(){
var mesajj="gfdhfg"
$.ajax({
type='POST',
url:'arac_gerec.php',
data:{mesaj:mesaj},
success:function(cevap){
    $("sonuc").html(cevap);
}

})


}
</script>




<!-- nav ul li a 'ya göre içerik değiştirecek kısım -->
<div class="stok_inceleme">


    <?php



include "arac_gerec.php";


?>










</div>

</div>


</section>
<!--
<script>
$(document).ready(function() {
$('yeni_urun_ekle').on('submit', function(event) {
var urun_turu=$('#urun_turu').val();
var urun_ad=$('#urun_ad').val();
var adet=$('#adet').val();
var ucret=$('#ucret').val();

$.ajax({
type: 'POST',
url:'islem.php',
data: {urun_turu:urun_turu,urun_ad:urun_ad,adet:adet,ucret:ucret},

succes: function (){
    alert('succes');
}




})

})

})





</script>


-->


<footer>
Esma Yurdakul

</footer>







</body>
</html>