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
   <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<br>
<div class="container">

   <div class="row">

      <!-- Esta es la uitloma fila en donde va el carrusel -->

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
               aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
               aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
               aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="img/carrusel/img01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="img/carrusel/img02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="img/carrusel/img03.jpg" class="d-block w-100" alt="...">
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>

      <!-- Fin carrusel -->


      <!-- cambiar de pagina debajo del carrusel -->
      <div class="row-cambiar-pagina">
         <!-- cambiar de pagina -->
         <br>
         <nav aria-label="Page navigation example">
            <ul class="pagination">
               <li class="page-item">
                  <a class="page-link" href="index-modulo-galeria1.html" aria-label="Previous">
                     <span aria-hidden="true">&laquo;</span>
                  </a>
               </li>
               <li class="page-item"><a class="page-link" href="index-modulo-galeria1.php">1</a></li>
               <li class="page-item"><a class="page-link" href="index-modulo-galeria2.php">2</a></li>

               <li class="page-item">
                  <a class="page-link" href="index-modulo-galeria2.html" aria-label="Next">
                     <span aria-hidden="true">&raquo;</span>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- fin cambio página -->

      </div>
      <!-- fin del cambio de pagina  -->




      <!-- inicio galeria -->
      <section class="gallery min-vh-100">
         <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
               <div class="col">
                  <img src="img/lentes/lentes01.jpg" class="gallery-item" alt="gallery" lentes>
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones Unisex Ray Ban 5486 8177 48</b></center>
                     </p>
                     <p class="card-text">
                        <center>$44,25</center>
                     </p>
                  </div>
               </div>
               <div class="col">
                  <img src="img/lentes/lentes02.jpg" class="gallery-item" alt="gallery">
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones Unisex Route66 011 Darkblue/Gun 54</b></center>
                     </p>
                     <p class="card-text">
                        <center>$70,00</center>
                     </p>
                  </div>
               </div>
               <div class="col">
                  <img src="img/lentes/lentes03.jpg" class="gallery-item" alt="gallery">
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones Unisex Hombre Ray Ban 3637V 3094 53</b></center>
                     </p>
                     <p class="card-text">
                        <center>$58,00</center>
                     </p>
                  </div>
               </div>
               <div class="col">
                  <img src="img/lentes/lentes04.jpg" class="gallery-item" alt="gallery">
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones Unisex Carrera 254 003 54</b></center>
                     </p>
                     <p class="card-text">
                        <center>$119,25</center>
                     </p>
                  </div>
               </div>
               <div class="col">
                  <img src="img/lentes/lentes05.jpg" class="gallery-item" alt="gallery">
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones Unisex Fashion Street Tr3504 Black 52</b></center>
                     </p>
                     <p class="card-text">
                        <center>$21,75</center>
                     </p>
                  </div>
               </div>
               <div class="col">
                  <img src="img/lentes/lentes06.jpg" class="gallery-item" alt="gallery">
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones Unisex Fashion Street Js 041 Brown/Purple 52</b></center>
                     </p>
                     <p class="card-text">
                        <center>$21,75</center>
                     </p>
                  </div>
               </div>
               <div class="col">
                  <img src="img/lentes/lentes07.jpg" class="gallery-item" alt="gallery">
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones De Hombre Oakley 5115 02 53</b></center>
                     </p>
                     <p class="card-text">
                        <center>$89,75</center>
                     </p>
                  </div>
               </div>
               <div class="col">
                  <img src="img/lentes/lentes08.jpg" class="gallery-item" alt="gallery">
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones De Niño Ray Ban 1591 3807 48</b></center>
                     </p>
                     <p class="card-text">
                        <center>$89,10</center>
                     </p>
                  </div>
               </div>
               <div class="col">
                  <img src="img/lentes/lentes09.jpg" class="gallery-item" alt="gallery">
                  <div class="card-body">
                     <p class="card-text">
                        <center><b>Armazones De Mujer Ola 2 Gold/Tortoise 53</b></center>
                     </p>
                     <p class="card-text">
                        <center>$74,25</center>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- fin galeria -->



      <!-- cambiar de pagina -->
      <nav aria-label="Page navigation example">
         <ul class="pagination">
            <li class="page-item">
               <a class="page-link" href="index-modulo-galeria1.html" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
               </a>
            </li>
            <li class="page-item"><a class="page-link" href="index-modulo-galeria1.php">1</a></li>
            <li class="page-item"><a class="page-link" href="index-modulo-galeria2.php">2</a></li>

            <li class="page-item">
               <a class="page-link" href="index-modulo-galeria2.html" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
               </a>
            </li>
         </ul>
      </nav>
      <!-- fin cambio página -->



      <!-- Modal -->
      <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <img src="img/1.jpg" class="modal-img" alt="modal img">
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