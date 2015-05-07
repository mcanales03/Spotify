<?php

include_once("modelo/modelLogin.php");
include_onde("vista/viewLogin.php");

class controllerLogin {
 public $model;
 
 public function __construct()  
    {  
        $this->model = new viewLogin();

    } 
 
 public function invoke()
 
 {
 	$reslt = false;
 	if( isset($_POST["iniciar"]) )
 	{
 	
 		$usuario = $_POST["usuario"];
 		$password = $_POST["contrasenia"];
 		$reslt = $this->model->validarUsuario($usuario,$password);     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
 	}
 
  if($reslt === true)
  {
   include 'vista/viewListas.php';
  }
  else
  {
   include 'vista/viewLogin.php';
  }
  
 }}


?>