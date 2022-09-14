<?php 
session_start();
session_unset();
session_destroy();
echo "sesion cerrada.";
?>
<html>
<head><title>Sesion</title></head>
<body>
    <br><br><a href="index.php">Volver al inicio</a>
</body>
</html>