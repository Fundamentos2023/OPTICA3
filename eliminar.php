<?php 
    //VALIDACIÓN DE DATOS
    if(!isset($_GET['codigo'])){
        //mostrar un mensaje de error personalizado OPCIÓN ELIMINAR
        header('Location: indexadmin.php?mensaje=error');
        exit();
    }

    include 'conexion/conexion.php';
    $codigo = $_GET['codigo'];

    //Sentencia SQL - DELETE FROM eliminar de datos
    $sentencia = $bd->prepare("DELETE FROM especialista where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    //si la linea 14 se ejecuta mostrar mensaje "ELIMINADO"
    if ($resultado === TRUE) {
        header('Location: indexadmin.php?mensaje=eliminado');
    } else {
        //caso contrario mostrar mensaje personalizado "ERROR"
        header('Location: indexadmin.php?mensaje=error');
    }
    
?>