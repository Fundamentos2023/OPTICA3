<?php include 'template/header.php' ?>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÓPTICA CTO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" href="styles/micarousel.css">

  
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
   <div class="p-3 m-0 border-0 bd-example bd-example-row">

 <!-- Example Code -->
  
 <div class="container text-center">
  <div class="row">
    <div class="mb-3">
      <h3>BIENVENIDOS CONSULTA CON NUESTROS MEJORES ESPECIALISTAS</h3>
      <br>
      <p>Confía en nosotros, te brindaremos la solución que te permitirá con claridad volver todo a ver.</p>
      <br>
      <h1><strong>AGENDA TU CITA</strong></h1>
    </div>
  </div>
 </div>

  <div class="container-card">
    <div class="card">
      <figure>
        <img class="imagen1" src="img/oftalmologia1.jpg" alt="oftalmologia1">
      </figure>
      <div class="contenido-card">
        <p>Ofrecemos un servicio de programación o agendamiento de citas en consultas médicas presenciales o virtuales, y exámenes diagnósticos.</p>
        <a class="btn btn-info btn-md" href="../OPTICA3/indexadmin.php" role="button" style="color: #000000;";>ESPECIALISTAS</a>
      </div>
    </div>
      <div class="card">
        <figure>
          <img class="imagen1" src="img/foto1.jpg" alt="oftalmologia1">
        </figure>
        <div class="contenido-card">
          <p>Óptica CTO la mejor y más completa óptica de Quito y Ecuador. Tenemos toda clase de gafas y armazones ya sea para hombre o mujer. </p>
          <a class="btn btn-info btn-md" href="../OPTICA3/indexcita.php" role="button" style="color: #000000;";>AGENDAR CITA</a>
        </div>
      </div>
    <div class="card">
      <figure>
        <img class="imagen1" src="img/fot1.jpg" alt="oftalmologia1">      
      </figure>
      <div class="contenido-card">
        <p>Los mejores oftalmólogos del Ecuador se encuentran justo aquí, consulta a nuestras mejores oftalmólogos y agenda una cita con un profesional.</p>
        <a class="btn btn-info btn-md" href="../OPTICA3/indexsup.php" role="button" style="color: #000000;"; >CLIENTES </a>
      </div>  
    </div>
  </div>
  

 </div>
</div>
</div>

<script src="script/bootstrap.bundle.min.js"></script>
<script src="script/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
</body>
</html>

<?php include 'template/footer.php' ?>