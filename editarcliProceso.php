<?php 
	//Imprimir los datos que estan viajando al formulario editar
    print_r($_POST);
    //Validacion simple
    if(!isset($_POST['codigocli'])){
        //mostrar un mensaje de error personalizado FORMULARIO UPDATE
        header('Location: indexsup.php?mensaje=error');
    }

	include 'conexion/conexion.php';
    //Guardar las variables
    $codigocli = $_POST["codigocli"];
    $nombre_cli = $_POST["txtNombre"];
    $edad_cli = $_POST["txtEdad"];
    $cedula_cli = $_POST["txtCedula"];
    $telefono_cli = $_POST["txtTelefono"];
    $direccion_cli = $_POST["txtDireccion"];
    $correo_cli = $_POST["txtCorreo"];

    $imagencli = $_FILES["imagen"]["name"];
    $ruta = $_FILES["imagen"]["tmp_name"];
    $destino = "fotos/".$imagencli;
    copy($ruta, $destino);

	$sentencia = $bd->prepare("UPDATE cliente SET nombre_cli = ?, edad_cli = ?, cedula_cli = ?, telefono_cli = ?, direccion_cli = ?, correo_cli = ?, imagencli = ? WHERE codigocli = ?;");
	$resultado = $sentencia->execute([$nombre_cli, $edad_cli, $cedula_cli, $telefono_cli, $direccion_cli, $correo_clis, $destino, $codigocli]);

	if ($resultado === TRUE) {
        header('Location: indexsup.php?mensaje=editado');
    } else {
        //caso contrario mostrar mensaje personalizado "ERROR"
        header('Location: indexsup.php?mensaje=error');
        exit();
    }
?>