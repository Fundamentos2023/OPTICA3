<?php 
	//Imprimir los datos que estan viajando al formulario editar
    print_r($_POST);
    //Validacion simple
    if(!isset($_POST['codigo'])){
        //mostrar un mensaje de error personalizado FORMULARIO UPDATE
        header('Location: indexadmin.php?mensaje=error');
    }

	include 'conexion/conexion.php';
    //Guardar las variables
    $codigo = $_POST["codigo"];
    $nombres_es = $_POST["txtNombre"];
    $edad_es = $_POST["txtEdad"];
    $cedula_es = $_POST["txtCedula"];
    $especialidad = $_POST["txtEspecialidad"];
    $telefono_es = $_POST["txtTelefono"];
    $direccion_es = $_POST["txtDireccion"];
    $correo_es = $_POST["txtCorreo"];

    $imagen = $_FILES["imagen"]["name"];
    $ruta = $_FILES["imagen"]["tmp_name"];
    $destino = "fotos/".$imagen;
    copy($ruta, $destino);

	$sentencia = $bd->prepare("UPDATE especialista SET nombres_es = ?, edad_es = ?, cedula_es = ?, especialidad = ?, telefono_es = ?, direccion_es = ?, correo_es = ?, imagen = ? WHERE codigo = ?;");
	$resultado = $sentencia->execute([$nombres_es, $edad_es, $cedula_es, $especialidad, $telefono_es, $direccion_es, $correo_es, $destino, $codigo]);

	if ($resultado === TRUE) {
        header('Location: indexadmin.php?mensaje=editado');
    } else {
        //caso contrario mostrar mensaje personalizado "ERROR"
        header('Location: indexadmin.php?mensaje=error');
        exit();
    }
?>