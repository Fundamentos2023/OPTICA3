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
    $sentencia = $bd -> query("select * from especialista");
    $especialista = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($especialista);

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
            <h3>Bienvenido: <?php echo $_SESSION['usuario'] ?></h3>
            <br>
            <!--Formulario "READ" tabla lista de personas -->
            <div class="card ">
                <div class="card-header text-center bg-primary">
                    <h4 >LISTA DE ESPECIALISTAS</h4>
                </div>
                <div class="card-header text-left bg-primary">
                    <a class="btn btn-light btn-md" href="../OPTICA3/especialistas.php" role="button" style="color: #000000;";>REGISTRO ESPECIALISTAS</a>
                    <a class="btn btn-light btn-md" target="_bank" href="../OPTICA3/doc/index.php" role="button" style="color: #000000;";>REPORTE ESPECIALISTAS</a>
                </div>
                <div class="p-4">
                    <table class="table align-middle ">
                        <thead>
                            <tr class="text-center" >
                                <!--Datos a mostrar-->
                                <th scope="col">Imagén</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Especialidad</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Correo</th>
                                <th scope="col" colspan="2">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!--Mostrar en el formulario "LEER" la información de "persona"-->
                            <?php 
                                foreach($especialista as $dato){ 
                            ?>

                            <tr class="text-center">
                                <!--imprimir información de la base de datos -->
                                <td><img src='<?php echo $dato->imagen; ?>' class="img-fluid";
></td>
                                <td><?php echo $dato->nombres_es; ?></td>
                                <td><?php echo $dato->edad_es; ?></td>
                                <td><?php echo $dato->cedula_es; ?></td>
                                <td><?php echo $dato->especialidad; ?></td>
                                <td><?php echo $dato->telefono_es; ?></td>
                                <td><?php echo $dato->direccion_es; ?></td>
                                <td><?php echo $dato->correo_es; ?></td>
                                <!--BOTÓN EDITAR-->
                                <td><a class="btn btn-light btn-md" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <!--BOTÓN ELIMINAR Y MENSAJE DE ELIMINAR--> 
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="btn btn-light btn-md" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>



<!--Llamar al footer-->
<?php include 'template/footer.php' ?>