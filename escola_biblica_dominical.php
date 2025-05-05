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
  </ul>
  <!--Corpo da página-->
<div class="card card_body m-3">
  <div class="card-content collapse show">
    <div class="card-body card-dashboard">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Escola Bíblica Dominical</h3>
            <a href="pagina_inicial.php">
              <img src="img/voltar.png" alt="Voltar">
            </a>
          </div>
        <div class="d-flex justify-content-start">
          <a href="adicionar_turmas.php" class="btn btn-dark mt-2">Configuração de Turmas</a>
        </div>
        <!-- Cards -->
        <div class="container-fluid">
          <div class="row mt-3 mb-3">
              <h6>Departamentos:</h6>
          </div>
            <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                  <div class="card shadow-lg rounded-3 border-1 border-dark text-center transition-card">
                    <img src="img/criancas.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title card-title-style">Departamento Infantil</h5>
                    <p class="card-text card-text-style">Turmas para crianças de 3 a 7 anos, com histórias, músicas e atividades bíblicas interativas.</p>
                    <a href="exibir_turmas.php?departamento=infantil" class="btn btn-dark">Abrir Turmas</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card shadow-lg rounded-3 border-1 border-dark text-center transition-card">
                  <img src="img/juniores.png" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title card-title-style">Juniores</h5>
                  <p class="card-text card-text-style">Para crianças de 8 a 11 anos, com estudos dinâmicos, desafios e aprendizado prático da Bíblia.</p>
                  <a href="exibir_turmas.php?departamento=juniores" class="btn btn-dark">Abrir Turmas</a>
                </div>
                </div>
              </div>
               <div class="col-12 col-md-6 col-lg-3 mb-4">
                  <div class="card shadow-lg rounded-3 border-1 border-dark text-center transition-card card-style">
                    <img src="img/adolescentes.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title card-title-style">Adolescentes</h5>
                    <p class="card-text card-text-style">Jovens de 12 a 17 anos, aprendendo a aplicar princípios bíblicos aos desafios diários.</p>
                    <a href="exibir_turmas.php?departamento=adolescentes" class="btn btn-dark">Abrir Turmas</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card shadow-lg rounded-3 border-1 border-dark text-center transition-card card-style">
                  <img src="img/jovens.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title card-title-style">Jovens</h5>
                      <p class="card-text card-text-style">Destinado a jovens de 18 a 25 anos, com estudos bíblicos, debates e fortalecimento da fé.</p>
                      <a href="exibir_turmas.php?departamento=jovens" class="btn btn-dark">Abrir Turmas</a>
                    </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card shadow-lg rounded-3 border-1 border-dark text-center transition-card card-style">
                  <img src="img/adultos.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title card-title-style">Adultos</h5>
                    <p class="card-text card-text-style">Pessoas acima de 25 anos, com reflexões profundas e aplicação prática dos ensinamentos bíblicos.</p>
                    <a href="exibir_turmas.php?departamento=adultos" class="btn btn-dark">Abrir Turmas</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="bootstrap/js/bootstrap.min.js"></script><!--Carrega o Bootstrap-->
</body>
</html>