<?php
/*
Developer; Recep Bağıryanık
Cookie Okuma Sistemi
Github : https://github.com/RecepBagiryanik 
*/


 ?>
<?php 
setcookie("rememberMe", "sa"); //TR::Cookie Oluşturma Bölümü

$cookie = $_SERVER["HTTP_COOKIE"]; //TR::Cookieleri Çekme Bölümü

if ($cookie==strpos("$cookie", "rememberMe")) { //Cookie Kontrol Bölümü
	echo "Cookie Okundu!"; //Cookie Varsa
} else {
	echo "Cookie Okunamadı!"; //Cookie Yoksa
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookie Okuma Sistemi</title>
</head>
<body>
    <center><h1 style="margin-top: 255px;">Developer; Recep Bağıryanık</h1></center>
</body>
</html>