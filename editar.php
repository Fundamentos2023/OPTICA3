<?php include 'template/header.php' ?>

<?php

    session_start();
    //Validación simple
    if(!isset($_GET['codigo'])){
        //mostrar un mensaje de error personalizado FORMULARIO UPDATE
        header('Location: indexadmin.php?mensaje=error');
        exit();
    }

    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');
    } elseif(isset($_SESSION['usuario'])){
        include_once "conexion/conexion.php";
        $codigo = $_GET['codigo'];

        //Consulta SQL - SELECT FROM

        $sentencia = $bd->prepare("select * from especialista where codigo = ?;");
        $sentencia->execute([$codigo]);
        $especialista = $sentencia->fetch(PDO::FETCH_OBJ);
        //print_r($especialista);
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
                <form class="p-4" method="POST" action="editarProceso.php" enctype="multipart/form-data">
                    <!--Tener en cuenta el tipo de dato (text, number o date)-->
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" value="<?php echo $especialista->nombres_es; ?>">
                    </div>
                    <!--  Validación simple: autofocus required = los campos son requeridos-->
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" 
                        value="<?php echo $especialista->edad_es; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cédula: </label>
                        <input type="text" class="form-control" name="txtCedula" 
                        value="<?php echo $especialista->cedula_es; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Especialidad: </label>
                        <input type="text" class="form-control" name="txtEspecialidad"
                        value="<?php echo $especialista->especialidad; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono: </label>
                        <input type="text" class="form-control" name="txtTelefono"
                        value="<?php echo $especialista->telefono_es; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDireccion"
                        value="<?php echo $especialista->direccion_es; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo Electrónico: </label>
                        <input type="text" class="form-control" name="txtCorreo"
                        value="<?php echo $especialista->correo_es; ?>">
                    </div>

                    <!-- IMAGEN DEL ESPECIALISTA -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Cargar imagén: </label>
                        <input value='<?php echo $dato->imagen; ?>' type="file" class="form-control" name="imagen" id="exampleFormControlInput1">
                    </div>

                    <!--BOTÓN EDITAR -->
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $especialista->codigo; ?>">
                        <input type="submit" class="btn btn-info" value="Editar">
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>