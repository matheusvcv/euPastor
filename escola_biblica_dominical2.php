<?php
include "src/protect.php";
include "view/head.php";

?>
<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css">
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
              <a class="nav-link" href="configuracao_membros.php">Configuração de Membros</a>
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
  <!--Barra de Navegação entre módulos-->
  <ul class="nav mb-2 barra_nav">
    <li class="nav-item">
      <a class="nav-link barra_item" href="pagina_inicial.php">Página Inicial</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item" href="lista_membros.php">Lista de Membros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item" href="escola_biblica_dominical.php">Escola Biblica Dominical</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item" href="configuracao_membros.php">Configuração de Membros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item" href="pagina_administrativa/views/cadastrar_usuarios.php">Cadastrar Usuários</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item">Outro módulo</a>
    </li>
  </ul>
  <!--Corpo da página-->
<div class="card card_body m-3">
  <div class="card-content collapse show">
    <div class="card-body card-dashboard">
      <h3>Escola Bíblica Dominical</h3>
      <div class="container-fluid">
        <div class="row mt-3">
          <h6>Turmas:</h6>
        </div>
        <!-- Links -->
<div class="container">
  <div class="row g-3">

    <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow-lg rounded-3 border-0 text-center transition-card">
          <img src="img/criancas.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Turma Infantil</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-dark">Abrir Turmas</a>
        </div>
      </div>
    </div>


      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow-lg rounded-3 border-0 text-center transition-card">
          <img src="img/juniores.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Turma Juniores</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-dark">Abrir Turmas</a>
        </div>
      </div>
    </div>

     <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow-lg rounded-3 border-0 text-center transition-card">
          <img src="img/adolescentes.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Turma Adolescentes</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-dark">Abrir Turmas</a>
        </div>
      </div>
    </div>
   <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow-lg rounded-3 border-0 text-center transition-card">
          <img src="img/jovens.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Turma Jovens</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-dark">Abrir Turmas</a>
        </div>
      </div>
    </div>
   <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow-lg rounded-3 border-0 text-center transition-card">
          <img src="img/adultos.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Turma Adultos</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-dark">Abrir Turmas</a>
        </div>
      </div>
    </div>


  </div>
</div>

  



    





</body>
  
  
  
  <footer class="footer footer-text">
    <a class="text-light" href="#" style="text-decoration: none;">Portal Serviços</a>
  </footer>

  <script src="bootstrap/js/bootstrap.min.js"></script><!--Carrega o Bootstrap-->
</body>
</html>