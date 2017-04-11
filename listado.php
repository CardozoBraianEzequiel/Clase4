<?php
require_once"usuario.php";

$Listado = Usuario::TraerListadoDeUsuarios();

$cadena=" <table border=1><th> Usuario </th><th> Edad </th>";

foreach ($Listado as $val) {
	if(!empty($val[0]))
	{
		$cadena = $cadena."<tr> <td> ".trim($val[0])."</td><td>".trim($val[3])."</td></tr>";
	}
}

$cadena."</table>";

echo $cadena;

echo "</br>";
		echo "<a href=\"index.php\">Volver a la pantalla principal</a>";


?>