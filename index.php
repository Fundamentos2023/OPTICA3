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
  
    <main>
<!-- CAROUSEL-->
      <div id="miCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#miCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button> 
          <button type="button" data-bs-target="#miCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button> 
          <button type="button" data-bs-target="#miCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> 
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-intervale="100" style="background-image: url(../OPTICA3/img/SLIDE1.jpg);">
            <div id="slide" class="carousel-caption d-none d-sm-block" style="color: rgb(0, 0, 0);">
              <h4 >ÓPTICA CTO - NUESTRO COMPROMISO SU SALUD.</h4>
              <p >Confía en nosotros, te brindaremos la solución que te permitirá con claridad volver todo a ver.</p>
              <a class="btn btn-light btn-md" href="../OPTICA3/nosotros.php" role="button">INFORMACIÓN</a>
            </div>
          </div>
          <div class="carousel-item" data-bs-intervale="100" style="background-image: url(../OPTICA3/img/slide2.jpg);">
            <div id="slide" class="carousel-caption d-none d-sm-block" style="color: black;">
              <h4 >COMPROMETIDOS CON SU VISIÓN</h4>
              <p >Ver las cosas con claridad después de que sólo podías verlas borrosas es una sensación tan maravillosa…</p>
              <a class="btn btn-light btn-md" href="../OPTICA3/index-modulo-galeria1.php" role="button">PRODUCTOS</a>
            </div>
          </div>
          <div class="carousel-item" data-bs-intervale="100" style="background-image: url(../OPTICA3/img/slide3.jpg);">
            <div id="slide" class="carousel-caption d-none d-sm-block" style="color: black;">
              <h4 >Algunos ajustes  pueden hacer feliz a la gente.</h4>
              <p >Lo sabemos, por eso con nuestra variedad en lentes tú vista a recuperar te ayudaremos.</p>
              <a class="btn btn-light btn-md" href="../OPTICA3/Inicio.php" role="button">CONSULTAS</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#miCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#miCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button"  data-bs-target="#miCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
<!-- CAROUSEL-->

<br>

<!-- CARDS -->
       <div class="title-cards" style="color: black; font-size: 15px;">
        <h2>ÓPTICA CTO</h2>
        <p>Brindamos Soluciones Visuales para niños, jóvenes y adultos.</p>
        <p>Lentes oftálmicos: visión sencilla, bifocales, progresivos.</p>
        <p>Lentes de contacto y Asesoría Óptica personalizada.</p>
      </div>
      <div class="container-card">
        <div class="card">
          <figure>
            <img src="../OPTICA3/img/doc1.jpeg" alt="doctor1" width="50%" height="50%">
          </figure>
          <div class="contenido-card">
            <h6 class="card-tittle">Oftalmólogo</h6>
            <h5 class="card-tittle">Xavier Cabezas Martínez</h5>
            <p class="card-text">Especialista en Oftalmología, su enfoque principal es la Cirugía de Córnea, Cirugía de Cataratas, Queratocono, Cirugía Refractiva y Oftalmología General. Su consultorio está ubicado en el Centro Médico Meditrópoli en la ciudad de Quito.</p>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="../OPTICA3/img/doc2.jpeg" alt="doctor2">
          </figure>
          <div class="contenido-card">
            <h6 class="card-tittle">Oftalmólogo</h6>
            <h5 class="card-tittle">Gustavo Baqueros Ramos</h5>
            <p class="card-text">Médico oftalmólogo con 25 años de experiencia, se especializa en el tratamiento de segmento anterior, además de afecciones oculares que requieran cirugía de catarata, cirugía de terigio, cirugía de glaucoma. Sus consultorios están en la Ciudad de Quito.</p>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="../OPTICA3/img/doc3.jpeg" alt="doctor3">
          </figure>
          <div class="contenido-card">
            <h6 class="card-tittle">Oftalmólogo</h6>
            <h5 class="card-tittle">Gregorio Gabela García</h5>
            <p class="card-text">Oftalmólogo, especializado en Cirugía de Retina y Vítreo, con 30 años de experiencia. Sus áreas de interés: cirugía de catarata con laser, cirugía de desprendimiento de retina, agujeros maculares, entre otros. Actualmente, su consultorio se encuentra en Centro de La Visión (Doctores Gabela).</p>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="../OPTICA3/img/doc4.jpg" alt="doctor4" width="50%" height="50%">
          </figure>
          <div class="contenido-card">
            <h6 class="card-tittle">Oftalmólogo</h6>
            <h5 class="card-tittle">Fernando Rodríguez Morillo</h5>
            <p class="card-text">Médico Oftalmólogo, especialista en cirugía láser para astigmatismo, miopía e hipermetropía, queratocono, cirugía de pterigium, catarata y glaucoma. Cuenta con 20 años de experiencia en Chile. Su consultorio se encuentra en la Torre Médica 1.</p>
          </div>
        </div>
      </div>
<!-- CARDS -->

<br>
<!-- GRID CARDS -->
      <div class="title-cards" style="color: black; font-size: 15px;">
        <h2>NUESTROS RECUERDOS</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Martha Lizeth</h5>
                  <p class="card-text" style="text-align: justify;">Una jovencita que demostró cuidar mucho sus ojos, y fue cuidadosamente revisada.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Carmén Muñoz</h5>
                  <p class="card-text" style="text-align: justify;">Visitó nuestras instalaciones para cuidar su salud visual y poder disfrutar de los paisajes.</p>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Juan Alberto</h5>
                  <p class="card-text" style="text-align: justify;">Un viejo amigo, que nos enseño la importancia de valorar lo que observamos.</p>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Domenica Ruiz</h5>
                  <p class="card-text" style="text-align: justify;">Una mujer luchadora y valiente, en busca de cuidar su vista y poder disfrutar de los colores.</p>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Primera Máquina</h5>
                  <p class="card-text" style="text-align: justify;">Nuestra primera máquina, con la cual hemos mejorado la vida de muchos pacientes.</p>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">María Belén</h5>
                  <p class="card-text" style="text-align: justify;">Nuestra cliente más frecuente, nos visita para cambiar de estilo sus lentes por temporadas.</p>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">ÓPTICA CTO</h5>
                  <p class="card-text" style="text-align: justify;">Cuidamos tu vista, para que disfrutes de los colores que rodean tu vida y la de tu familia.</p>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Juventud</h5>
                  <p class="card-text" style="text-align: justify;">Es importante cuidarnos desde pequeños solo así, podremos crecer sanos y fuertes.</p>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../OPTICA3/img/inicio9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Vista</h5>
                  <p class="card-text" style="text-align: justify;">Nosotros brindamos la oportunidad de mejorar tu vidad y colores.</p>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- GRID CARDS -->


<script src="script/bootstrap.bundle.min.js"></script>
<script src="script/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
</body>
</html>

<?php include 'template/footer.php' ?>