<?php 
class Usuario
{
	public static function Guardar($nombre, $correo, $edad, $clave)
	{
		$archivo = fopen("archivos/usuario.txt","a");	
		$renglon= "$nombre=>$correo=>$edad=>$clave\n";
		fwrite($archivo, $renglon); 		 
		fclose($archivo);
		echo "Se grabo correctamente!";
		echo "</br>";
		echo "<a href=\"index.php\">Ir a indice</a>";	
	}	


	public static function TraerListadoDeUsuarios()
	{
		$listaDeUsuarios=   array();
		$archivo=fopen("archivos/usuario.txt", "r");//escribe y mantiene la informacion existente

			
		while(!feof($archivo))
		{
			$renglon=fgets($archivo);

			$usuario=explode("=>", $renglon);

				$listaDeUsuarios[]=$usuario;
		}

		fclose($archivo);

		return $listaDeUsuarios;		
	}

	public static function CompararUsuarios($correo, $clave)
	{
		$listaDeUsuarios = Usuario::TraerListadoDeUsuarios();
		
		foreach ($listaDeUsuarios as $val) {
			//var_dump($listaDeUsuarios);
			//echo "</br>";
			//echo "</br>";
			//var_dump($val);
			//die();

					if(!empty($val[1]) && trim($val[1]) == $correo)
					{

						if(trim($val[3]) == $clave)
						{
							header("location:listado.php");
						}
					} 
				}	

		echo "Usuario y/o contraseña incorrecto. Por favor, reingrese.";
		echo "</br>";
		echo "<a href=\"index.php\">volver</a>";	
	}
public static function Sacar($correo)
	{
		$listaActual = Usuario::TraerListadoDeUsuarios();

		$esta = false;

		foreach ($listaActual as $value) {
			if(trim($value[1]) == $correo)
			{
				$esta = true;
			}
		}

		if($esta)
		{	
			$archivo = fopen("archivos/usuario.txt","r");

			$usuarios = array();
			$esta = false;

			while (!feof($archivo)) 
 			{
 				$renglon =fgets($archivo);//Retorna todo el valor de un renglon	
 				$usuarioLista = explode("=>",$renglon);
 		
 				if($usuarioLista[1] == $correo)
 				{
 					$esta = true;
 				}
 				else
 				{
 					if($auto[0] != "")
 					$listaUsuarios[] = $usuarios;	
 				}
 			}
 			fclose($archivo);

 			Usuario::GuardarListado($listaUsuarios);

		}
		
	}
	public static function GuardarListado($listado)
	{
		$archivo = fopen("archivos/usuario.txt", "w");

 		foreach ($listado as $usuario) {
 			if($usuario[0] != "")
 			{
				fwrite($archivo, $usuario[0]."=>".$usuario[1]."=>".$usuario[2]."=>".$usuario[3]); 			
 			}
 		}	
 		fclose($archivo);

	}
} 








?>