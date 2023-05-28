<?php include 'template/header copy.php' ?>
<?php 
	session_start();
	if (isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!--ENCABEZADO LOGIN-->
            <div class="d-grid" >
                <div class="class-header text-center card-header bg-primary">
                    <h3 style="color: #FFFFFF;">MI CRUD</h3>
                </div>
            </div>
            <!--LOGIN -->
            <div class="mb-3">
                <!--Formulario "LOGIN" Ingresar datos de login-->
                <form class="p-4" method="POST" action="loginProceso.php">
				<div class="mb-3">
                    <label class="form-label">Usuario: </label>
                    <input type="text" class="form-control" name="txtUsu" autofocus required>
                </div>
				<div class="mb-5">
                    <label class="form-label">Contraseña: </label>
                    <input type="text" class="form-control" name="txtPass" autofocus required>
                </div>
                <!--BOTÓN LOGIN-->
				<div class="d-grid">
                    <input type="hidden" name="oculto" value="1">
                    <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
                </div>
				</form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer copy.php' ?>