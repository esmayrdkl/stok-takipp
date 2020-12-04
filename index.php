<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
         
    <title>Giriş</title>
</head>
<body>


<div class="login-box"  >
<h1>Giriş</h1>
<form action="sorgu.php" method="post" >
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" name="kullanici_adi"  placeholder="kullanıcı adı"  />
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" name="sifre" placeholder="şifre"/>
</div>
<input type="submit" value="giriş" class="btn"/>
</form>
 </div>  


 



</body>
</html>