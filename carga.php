<html>
<head>
	<title>Carga</title>
</head>
<body>
	<?php echo '<h3>Cargar un nuevo usuario</h3>'; ?>
<div id="divPrincipal">
	<form action="gestion.php" method="post">
		Ingrese nombre:	
		<br/>
		<input type="text" value="Octavio" name="nombre" class="datosPrimarios" />
		<br/>
		Ingrese correo: 
		<br/>
		<input type="text" name="correo" value="octavio@hotmail.com" class="datosPrimarios" title="formato de correo: xxxx@example.com" />
		<br/>
		Ingrese edad: 
		<br/>
		<input type="text" name="edad" value="18" class="datosPrimarios" />
		<br/>
		Ingrese contraseña: 
		<br/>
		<input type="password" name="clave" value="12345" class="datosPrimarios"  /> 
		<br/>
		<br>
        <input type="submit" id="botonIngreso" value="Guardar" class="Boton" name="grabar" />
        <br/>
		
    </form>
</div>

</body>
</html>