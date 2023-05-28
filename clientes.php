<link rel="stylesheet" href="styles/listar.css">


<?php  
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['usuario'])){
		include 'conexion/conexion.php';
		$sentencia = $bd->query("SELECT * FROM administrador;");
		$administrador = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($administrador);
	}else{
		echo "Error en el sistema";
	}
?>


<?php include 'template/header.php' ?>

<?php
    include_once "conexion/conexion.php";
    $sentencia = $bd -> query("select * from cliente");
    $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($cliente);

?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <!--LISTA DE MENSAJES DE ALERTA-->

            <!--MENSAJES DE ALERTA #1-->
            <!--mostrar un mensaje de error personalizado FORMULARIO CREATE-->
            <?php 
                //validar alerta
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <!--código de alerta-->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--código de alerta-->
            <?php   
                }
            ?>
            <!--MENSAJES DE ALERTA #1-->


            <!--MENSAJES DE ALERTA #2-->
            <!--Mensaje personalizado de formulario registrar exitoso-->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <!--código de alerta-->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--código de alerta-->
            <?php 
                }
            ?>   
            <!--MENSAJES DE ALERTA #2-->


            <!--MENSAJES DE ALERTA #3-->
            <!--mostrar un mensaje de error personalizado FORMULARIO UPDATE-->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <!--código de alerta-->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--código de alerta-->
            <?php 
                }
            ?>   
            <!--MENSAJES DE ALERTA #3-->


            <!--MENSAJES DE ALERTA #4-->
            <!--Mensaje personalizado de formulario EDITAR exitoso-->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <!--código de alerta-->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--código de alerta-->
            <?php 
                }
            ?> 
            <!--MENSAJES DE ALERTA #4-->


            <!--MENSAJES DE ALERTA #5-->
            <!--Mensaje personalizado de formulario ELIMINAR exitoso-->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <!--código de alerta-->
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--código de alerta-->
            <?php 
                }
            ?> 
            <!--MENSAJES DE ALERTA #5-->


            <!-- FIN MENSAJES DE ALERTA -->
            <!--Formulario "READ" tabla lista de personas -->
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center bg-info">
                <h4>Ingresar datos:</h4>
                </div>
                <!--Formulario "CREATE" Ingresar datos de persona -->

                <form class="p-4" method="POST" action="registrarcli.php" enctype="multipart/form-data">
                    <!--Tener en cuenta el tipo de dato (text, number o date)-->
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>
                    <!--  Validación simple: autofocus required = los campos son requeridos-->
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cédula: </label>
                        <input type="text" class="form-control" name="txtCedula" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono: </label>
                        <input type="text" class="form-control" name="txtTelefono" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo Electrónico: </label>
                        <input type="text" class="form-control" name="txtCorreo" autofocus required>
                    </div>

                    <!-- IMAGEN DEL ESPECIALISTA -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Cargar imagén: </label>
                        <input type="file" class="form-control" name="imagen" id="exampleFormControlInput1" autofocus required>
                    </div>

                    <!--BOTÓN REGISTRAR-->
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Llamar al footer-->
<?php include 'template/footer.php' ?>