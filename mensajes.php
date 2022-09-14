<?php 
session_start();
setcookie("user", $_SESSION['nombre'], time() + (86400 * 80));
$texto = "Hola " . $_SESSION['nombre'] ."." . " ¿Cómo estás hoy? " . "<br><br>";
echo "$texto" . "Tu último inicio de sesión es de la fecha: " . $_COOKIE['cookiedefecha'] . ".<br>" . 
".<br> ¿Qué deseas hacer esta vez?". "<br><br>" ;
?>
<html>
<head><title>Sesion</title></head>
<body>
    <a href="volver.php"><button>Cerrar sesión</button></a>
	<a href="usuarios.php"><button>Ver usuarios</button></a>
</body>
</html>