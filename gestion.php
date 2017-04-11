<?php 
require_once"usuario.php";

 if(isset($_POST['grabar']) && $_POST['grabar'] == 'Guardar' )
 {

 	if($_POST['nombre'] != "" && $_POST['correo'] != "" && $_POST['edad']!= "" && $_POST['clave']!= "")
 	{
 		Usuario::Guardar($_POST['nombre'],$_POST['correo'],$_POST['edad'],$_POST['clave']);
 	}
 	else 
 	{
		echo "Faltan datos, por favor, reingrese valores";
		echo "</br>";
		echo "<a href=\"index.php\">volver</a>";		
 	}
 }
 if(isset($_POST['entrar']) && $_POST['entrar'] == 'Entrar')
 {
 	if($_POST['correo'] != "" && $_POST['clave']!= "")
 	{

 		 Usuario::CompararUsuarios($_POST['correo'],$_POST['clave']);

	}
 	else
 	{
 		echo "por favor, complete todos los campos";
		echo "</br>";
		echo "<a href=\"ingreso.php\">Volver a intentar</a>";
 	}
	 	
 }
if(isset($_POST['eliminar']) && $_POST['eliminar'] == 'Eliminar')
 {
 	if($_POST['correo'] != "" )
 	{

 		 Usuario::Sacar($_POST['correo']);

	}
 	else
 	{
 		echo "por favor, complete todos los campos";
		echo "</br>";
		echo "<a href=\"ingreso.php\">Volver a intentar</a>";
 	}
	 	
 }
?>

