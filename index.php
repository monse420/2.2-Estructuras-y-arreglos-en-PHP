<html>
<head><title>Sesión</title></head>
<body>
      <form method="POST" action="cookie.php">
	      Nombre <input type="text" name="nombre">
		  <br><br>Correo electrónico <input type="text" name="mail">
		  <br><br>Contraseña <input type="password" name="cont">
		  <br><br>Fecha de nacimiento <input type="date" name="nacimiento">
		  <br><br>Elige tus colores favoritos:<br><br><select name="colores[]" multiple>
		  <option value="Azul">Azul</option>
		  <option value="Verde">Verde</option>
		  <option value="Rojo">Rojo</option>
		  <option value="Amarillo">Amarillo</option>
		  <option value="Rosa">Rosa</option>
		  <option value="Negro">Negro</option>
		  <option value="Morado">Morado</option>
		  <option value="Naranja">Naranja</option>
		  <option value="Blanco">Blanco</option>
		  </select><br>
		  <br><br><input type="submit" value="Iniciar sesión">
	  </form>
</body>
</html>