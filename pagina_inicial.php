<?php
include "src/protect.php";
?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo_login_image.png" type="image/x-icon">
	<title>Página Inicial</title>
</head>
<body>

<!--Início da NavBar-->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="pagina_inicial.php"><img src="img/logo_login_branca_image.png" style="margin-right: 1.5vh;" alt="Logo" width="30" height="29" class="d-inline-block align-text-top">MyChurch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opções:</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active botao_sair" aria-current="page" href="logout.php">SAIR</a>
		        <li class="nav-item">
		          <a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Como utilizar o sistema?</a>
		        </li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
    <?php if(isset($_GET['usuario_cadastrado']) && $_GET['usuario_cadastrado'] == 1) { ?>
      var timerInterval;
      Swal.fire({
      title: "Usuário cadastrado com sucesso.",
      type: "error",
      timer: 9200,
      confirmButtonClass: "btn btn-success",
      buttonsStyling: false,
      onClose: function() {
      clearInterval(timerInterval);
      }
      })
    <?php } ?> 
  </script>
</body>
</html>