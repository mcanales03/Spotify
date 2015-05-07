<?php
	require_once("sesion.class.php");

	
	
	function validarUsuario($usuario, $password)
	{
		
		$conexion = new mysqli("localhost","root","root","phplogin");
		$consulta = "select password from usuarios where usuario = '$usuario';";
		
		$result = $conexion->query($consulta);
		
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["password"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
		}

?>