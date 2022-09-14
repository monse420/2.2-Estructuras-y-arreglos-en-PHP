<?php 
session_start();
date_default_timezone_set('America/Mexico_City');error_reporting(0);
$fechayhora= date("d-m-y h:i:s a");
setcookie("cookiedefecha", $fechayhora, time() + (86400 * 8));
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['cont'] = $_POST['cont'];
$_SESSION['nacimiento'] = $_POST['nacimiento'];
$_SESSION['colores']  = $_POST['colores'];
$_SESSION['co']= array();
$_SESSION['co']["0"] = $_SESSION['colores']['0'];
$_SESSION['co']["1"] = $_SESSION['colores']['1'];
$_SESSION['co']["2"] = $_SESSION['colores']['2'];
$_SESSION['co']["3"] = $_SESSION['colores']['3'];
$_SESSION['co']["4"] = $_SESSION['colores']['4'];
$_SESSION['co']["5"] = $_SESSION['colores']['5'];
$_SESSION['co']["6"] = $_SESSION['colores']['6'];
$_SESSION['co']["7"] = $_SESSION['colores']['7'];
$_SESSION['co']["8"] = $_SESSION['colores']['8'];
$long=count($_SESSION['colores']);
echo "Iniciaste sesión como: " . $_SESSION['nombre'] .".<br><br>" . "Tu correo electrónico es: " 
. $_SESSION['mail'] . ".<br><br>" . "Y tu fecha de nacimiento es: " . $_SESSION['nacimiento']. ".<br><br> Tus colores 
favoritos son: "; for($indice = 0; $indice < $long; $indice++){echo $_SESSION['co'][$indice] . ". ";} echo "<br><br>"
?>
<html>
<head><title>cuenta</title></head>
<body>
    <a href="tres.php"><button>Continuar</button></a>
</body>
</html>