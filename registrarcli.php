<!-- Registrar capturar la información ingresada -->

<?php
    //print_r($_POST);
    //Validación de valores
    //los valores que están viajando del formulario "CREATE"
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtCedula"])||
     empty($_POST["txtTelefono"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtCorreo"]  ||
      empty($_POST["imagencli"]))){
        //si falto ingresar un campo
        //detener la operación 
        //mostrar un mensaje de error personalizado FORMULARIO CREATE
        header('Location: indexsup.php?mensaje=falta');
        exit();
    }

    include_once 'conexion/conexion.php';
    //Guardar las variables
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

    
    //Sentencia SQL - INSERT INTO - Ingreso de datos
    $sentencia = $bd->prepare("INSERT INTO cliente(nombre_cli,edad_cli,cedula_cli,telefono_cli,direccion_cli,correo_cli,imagencli) VALUES (?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre_cli,$edad_cli,$cedula_cli,$telefono_cli,$direccion_cli,$correo_cli,$destino]);

    //si la linea 25 se ejecuta mostrar mensaje "REGISTRADO"
    if ($resultado === TRUE) {
        header('Location: indexsup.php?mensaje=registrado');
    } else {
        //caso contrario mostrar mensaje personalizado "ERROR"
        header('Location: indexsup.php?mensaje=error');
        exit();
    }
?>