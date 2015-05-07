<?php
function conectar() {
    $host = "localhost";
    $usuario = "root"; // Cambiar por su nombre de usuario.
    $password = "root"; // Cambiar por su password.
    $cn = mysql_connect($host, $usuario, $password);  
    mysql_select_db('phplogin',$cn);
    return $cn;
}

function desconectar($conexion) {
    mysql_close($conexion); 
}

?>