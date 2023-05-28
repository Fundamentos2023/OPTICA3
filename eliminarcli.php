<?php 
    //VALIDACIÓN DE DATOS
    if(!isset($_GET['codigocli'])){
        //mostrar un mensaje de error personalizado OPCIÓN ELIMINAR
        header('Location: indexsup.php?mensaje=error');
        exit();
    }

    include 'conexion/conexion.php';
    $codigocli = $_GET['codigocli'];

    //Sentencia SQL - DELETE FROM eliminar de datos
    $sentencia = $bd->prepare("DELETE FROM cliente where codigocli = ?;");
    $resultado = $sentencia->execute([$codigocli]);

    //si la linea 14 se ejecuta mostrar mensaje "ELIMINADO"
    if ($resultado === TRUE) {
        header('Location: indexsup.php?mensaje=eliminado');
    } else {
        //caso contrario mostrar mensaje personalizado "ERROR"
        header('Location: indexsup.php?mensaje=error');
    }
    
?>