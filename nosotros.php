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
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <!-- CAROUSEL -->
    <link rel="stylesheet" href="styles/micarousel.css">

</head>
<body>
    <br>

    <main>

<!-- MISION -->
      <section id="about" class="about section-padding" style="text-align: justify;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/mision.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                          <h2>MISIÓN</h2>
                          <p>En Óptica CTO nos sentimos comprometidos en dar plena satisfaccion a nuestros clientes ofreciéndoles una selección de los mejores y mas variados productos atravez de un servicio diferenciado, exclusivos y de alta calidad, apoyándonos en un exquisito trato personalizado, para lograr que cada cliente se sienta especial y plenamente satisfecho.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>
<!-- MISION -->
<!-- VISION -->
      <section id="about" class="about section-padding" style="text-align: justify;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">

                    <div class="about-img">
                        <h2>VISIÓN</h2>
                        <p>Consolidarnos como la mejor opcion óptica para satisfacer sus necesidades, y seguiremos siendo los líderes como la cadena de ópticas de mayor cobertura nacional bajo el amparo de la tecnología, productividad, talento humano y un profundo espíritu de servicio.</p>
                        <br>
                        <h2>HISTORIA</h2>
                        <p>Óptica CTO fue fundada en 1959 por el Dr. Juan Riquelme. Desde sus inicios ópticas matamoros siempre ha estado a la vanguardia en investigación y desarrollo de nuevas tecnologías que proporcionen una mejor visión y calidad de vida a sus clientes. Su sede es Ave Cervantes #218, Tegucigalpa, Honduras En Honduras fue la primera en introducir: en los años 80 las lentes orgánicas CR-39. A inicios de los 90 se fabricaron las primeras lentes de polycarbonato. A comienzos del siglo XXI innovamos con el proceso de lentes antireflejantes (AD, Alta Definición); y en el 2010 fuimos los primeros en Centro América en incorporar en nuestra moderna planta de producción de lentes oftálmicas de tecnología digital.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-text">
                      <img src="img/vision.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
      </section>
<!-- VISION -->
<br>
<!-- SERVICIOS -->
      <section class="services section-padding" id="services" >
        <div class="container" >
            <div class="row" >
                <div class="col-md-12">
                    <div class="section-header text-center pb-5" > 
                        <h2>Nuestros Servicios</h2>
                        <p>Calidad, Salud, Tecnología, Profesionalidad</p>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-black text-center card border-info pb-2">
                      <div class="card-body">
                          <i class="bi bi-laptop"></i>
                          <h4 class="card-title text-primary">Calidad</h4>
                          <p class="lead ">Óptica CTO tiene para usted el servicio integral que su salud visual necesita, con el mejor apoyo médico profesional y tecnología de punta en su salud. </p>
                      </div>
                  </div>
              </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-black text-center card border-info pb-2">
                        <div class="card-body">
                          <i class="bi bi-journal"></i>
                            <h4 class="card-title text-primary">Revisiones Visuales</h4>
                            <p class="lead ">Examen de la vista por computadora.
                              Examen de la vista para adultos.
                              Examen de la vista para niños mayores de 6 años.
                              Diagnósticos de alteraciones oculares.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-black text-center card border-info pb-2">
                        <div class="card-body">
                          <i class="bi bi-intersect"></i>
                            <h4 class="card-title text-primary">Reparaciones</h4>
                            <p class="lead">Adaptación de lentes de contacto blandos para la corrección de miopía, astigmatismo e hipermetropía.
                              Soluciones para lentes de contacto y gotas humectantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
<!-- SERVICIOS -->
<br>

<script src="script/bootstrap.bundle.min.js"></script>
<script src="script/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
</body>
</html>

<?php include 'template/footer.php' ?>