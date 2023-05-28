<?php 
	session_start();
	include_once 'conexion/conexion.php';
	//guardar variables usuario y contraseña
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	//CONSULTA SQL - SELECT datos de la tabla administrador 
	//si existe o no un usuario con esa contraseña
	$sentencia = $bd->prepare('select * from administrador where 
								usuario = ? and contrasena = ?;');
	//almacenar datos de login
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	print_r($datos);

	if ($datos === FALSE) {
		//si los datos son incorrectos lo envia nuevamente al login
		header('Location: login.php');
	}elseif($sentencia->rowCount() == 1){
		//si los datos son correctos lo envia al formulario CRUD
		$_SESSION['usuario'] = $datos->usuario;
		header('Location: index.php');
	}
?>
