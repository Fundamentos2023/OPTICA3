<!-- Registrar capturar la información ingresada -->

<?php
    //print_r($_POST);
    //Validación de valores
    //los valores que están viajando del formulario "CREATE"
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtCedula"])||
     empty($_POST["txtEspecialidad"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtCorreo"]  ||
      empty($_POST["imagen"]))){
        //si falto ingresar un campo
        //detener la operación 
        //mostrar un mensaje de error personalizado FORMULARIO CREATE
        header('Location: indexadmin.php?mensaje=falta');
        exit();
    }

    include_once 'conexion/conexion.php';
    //Guardar las variables
    $nombres_es = $_POST["txtNombre"];
    $edad_es = $_POST["txtEdad"];
    $cedula_es = $_POST["txtCedula"];
    $especialidad = $_POST["txtEspecialidad"];
    $telefono = $_POST["txtTelefono"];
    $direccion = $_POST["txtDireccion"];
    $correo = $_POST["txtCorreo"];

    $imagen = $_FILES["imagen"]["name"];
    $ruta = $_FILES["imagen"]["tmp_name"];
    $destino = "fotos/".$imagen;
    copy($ruta, $destino); 

    
    //Sentencia SQL - INSERT INTO - Ingreso de datos
    $sentencia = $bd->prepare("INSERT INTO especialista(nombres_es,edad_es,cedula_es,especialidad,telefono_es,direccion_es,correo_es,imagen) VALUES (?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombres_es,$edad_es,$cedula_es,$especialidad,$telefono,$direccion,$correo,$destino]);

    //si la linea 25 se ejecuta mostrar mensaje "REGISTRADO"
    if ($resultado === TRUE) {
        header('Location: indexadmin.php?mensaje=registrado');
    } else {
        //caso contrario mostrar mensaje personalizado "ERROR"
        header('Location: indexadmin.php?mensaje=error');
        exit();
    }
?>