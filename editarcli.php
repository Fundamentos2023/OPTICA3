<?php include 'template/header.php' ?>

<?php

    session_start();
    //Validación simple
    if(!isset($_GET['codigocli'])){
        //mostrar un mensaje de error personalizado FORMULARIO UPDATE
        header('Location: indexsup.php?mensaje=error');
        exit();
    }

    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');
    } elseif(isset($_SESSION['usuario'])){
        include_once "conexion/conexion.php";
        $codigocli = $_GET['codigocli'];

        //Consulta SQL - SELECT FROM

        $sentencia = $bd->prepare("select * from cliente where codigocli = ?;");
        $sentencia->execute([$codigocli]);
        $cliente = $sentencia->fetch(PDO::FETCH_OBJ);
        //print_r($cliente);
    }else{
        echo "Error en el sistema";
    }   
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center bg-primary">
                <h4 >Editar datos:</h4>
                </div>
                <!--Formulario "UPDATE" Modificar datos de persona -->
                <!-- action indica el formulario a donde van a ir los datos-->
                <form class="p-4" method="POST" action="editarcliProceso.php" enctype="multipart/form-data">
                    <!--Tener en cuenta el tipo de dato (text, number o date)-->
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>  
                        <input type="text" class="form-control" name="txtNombre" 
                        value="<?php echo $cliente->nombre_cli; ?>">
                    </div>
                    <!--  Validación simple: autofocus required = los campos son requeridos-->
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" 
                        value="<?php echo $cliente->edad_cli; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cédula: </label>
                        <input type="text" class="form-control" name="txtCedula" 
                        value="<?php echo $cliente->cedula_cli; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono: </label>
                        <input type="text" class="form-control" name="txtTelefono"
                        value="<?php echo $cliente->telefono_cli; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDireccion"
                        value="<?php echo $cliente->direccion_cli; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo Electrónico: </label>
                        <input type="text" class="form-control" name="txtCorreo"
                        value="<?php echo $cliente->correo_cli; ?>">
                    </div>

                    <!-- IMAGEN DEL ESPECIALISTA -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Cargar imagén: </label>
                        <input value='<?php echo $dato->imagencli; ?>' type="file" class="form-control" name="imagen" id="exampleFormControlInput1">
                    </div>

                    <!--BOTÓN EDITAR -->
                    <div class="d-grid">
                        <input type="hidden" name="codigocli" value="<?php echo $cliente->codigocli; ?>">
                        <input type="submit" class="btn btn-info" value="Editar">
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>