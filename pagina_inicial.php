<?php
include "src/protect.php";
include "view/head.php"
?>
<!Doctype html>
<html>
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
            <a class="nav-link active botao_config" aria-current="page" href="logout.php">SAIR</a>
            <a class="nav-link active botao_config" href="instrucoes.php">Como utilizar o sistema?</a>
            <li class="nav-item">
              <a class="nav-link active botao_config" href="" disabled><h7>Módulos:</h7></a>
            </li>
		        <li class="nav-item">
		          <a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
		        </li>
            <li class="nav-item">
              <a class="nav-link" href="lista_membros.php">Lista de Membros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="escola_biblica_dominical.php">Escola Biblica Dominical</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="configuracao_membros.php">Configuração de Membros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pagina_administrativa/views/cadastrar_usuarios.php">Cadastrar Usuários</a>
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
  <div class="card card_body m-3">
    <div class="card-content collapse show">
      <div class="card-body card-dashboard">
        <p id="mensagem">Seja bem vindo, <?php echo $_SESSION['nome']; ?>!</p>
        <main id="content">
          <section id="home">
            <div class="shape"></div>
            <div id="cta">
              <h1 class="titulo_pagina_inicial">Administre sua igreja com <span>exelência</span> e <span>propósito</span>.</h1>
              <p class="descricao">Administração de igrejas feita de forma inteligente! Organize, gerencie e fortaleça sua missão com o MyChurch WebSystem.</p>
              <p>O MyChurch WebSystem é uma plataforma completa para igrejas, desenvolvida para organizar membros, turmas e atividades religiosas de forma prática e eficiente. Com módulos intuitivos, oferece mais agilidade, controle e segurança para a administração da igreja, facilitando o trabalho dos líderes e colaboradores.</p>
      
              <div id="cta_botoes">
                <a href="instrucoes.php" class="btn btn-outline-dark">
                  Saiba Mais
                </a>
              </div>
           </div>
            <div id="banner">
              <img src="img/bg_pagina_inicial.png">
            </div>
          </section>        
        </main>
      </div>
    </div>
  </div> 
  <script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
    //Alerta de Usuário Cadastrado com sucesso.
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
    //Alerta de falha ao cadastrar usuário.
    <?php if(isset($_GET['usuario_cadastrado']) && $_GET['usuario_cadastrado'] == 0) { ?>
      var timerInterval;
      Swal.fire({
      title: "Usuário não pode ser cadastrado. Dados incorretos ou duplicados.",
      type: "error",
      timer: 9200,
      confirmButtonClass: "btn btn-danger",
      buttonsStyling: false,
      onClose: function() {
      clearInterval(timerInterval);
      }
      })
    <?php } ?>
    //Alerta cancelamento de cadastro de usuário.
    <?php if(isset($_GET['usuario_cadastrado']) && $_GET['usuario_cadastrado'] == 2) { ?>
      var timerInterval;
      Swal.fire({
      title: "Você cancelou o cadastro do usuário.",
      type: "error",
      timer: 9200,
      confirmButtonClass: "btn btn-primary",
      buttonsStyling: false,
      onClose: function() {
      clearInterval(timerInterval);
      }
      })
    <?php } ?> 
  </script>
</body>
</html>