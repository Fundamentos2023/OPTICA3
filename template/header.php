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
    <link rel="stylesheet" href="micarousel.css">
    
</head>
<body>
<!-- NAVBAR -->
    <header>
      <nav class="navbar navbar-expand-lg" style="background-color: #c3dfea" data-bs-theme="light">
        <div class="container-fluid">
          <!-- LOGO OPTICA -->
          <a class="navbar-brand" href="../OPTICA3/index.php">
            <img src="../OPTICA3/img/logo2.png" alt="" width="190" height="50">
          </a>
          <!-- BOTON DE MENU DESPLEGABLE -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- APARTADOS DE NAVEGACION -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Verdana;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="../OPTICA3/index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../OPTICA3/nosotros.php">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../OPTICA3/Inicio.php">Consultas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../OPTICA3/index-modulo-galeria1.php">Galería de Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">    </a>
              </li>
              <li class="nav-item" style="background-color: #c3dfea" data-bs-theme="light">
                <form class="p-1" method="POST" action="cerrar.php">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-light" value="Cerrar Sesión">
                    </div>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!-- NAVBAR -->
<script src="script/bootstrap.bundle.min.js"></script>
<script src="script/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
</body>
</html>