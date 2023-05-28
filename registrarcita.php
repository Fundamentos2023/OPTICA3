<!-- Registrar capturar la información ingresada -->

<?php
    //print_r($_POST);
    //Validación de valores
    //los valores que están viajando del formulario "CREATE"
    if(empty($_POST["txtCita"]) || empty($_POST["txtFecha"]) || empty($_POST["txtDesc"])){
        //si falto ingresar un campo
        //detener la operación 
        //mostrar un mensaje de error personalizado FORMULARIO CREATE
        header('Location: indexcita.php?mensaje=falta');
        exit();
    }

    include_once 'conexion/conexion.php';
    //Guardar las variables
    $codigocita = $_POST["txtCita"];
    $fecha = $_POST["txtFecha"];
    $descripcion = $_POST["txtDesc"];

    
    //Sentencia SQL - INSERT INTO - Ingreso de datos
    $sentencia = $bd->prepare("INSERT INTO cita(codigocita, fecha, descripcion) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$codigocita,$fecha,$descripcion]);

    //si la linea 25 se ejecuta mostrar mensaje "REGISTRADO"
    if ($resultado === TRUE) {
        header('Location: indexcita.php?mensaje=registrado');
    } else {
        //caso contrario mostrar mensaje personalizado "ERROR"
        header('Location: indexcita.php?mensaje=error');
        exit();
    }
?>