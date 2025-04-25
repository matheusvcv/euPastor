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
<!-- Links -->
  <section class="container-fluid" id="links" style="margin-bottom: 60px;">
    <div class="row justify-content-center">
      <article class="card card-largura p-0 m-3 col-12 col-md-3">
        <div class="barra">
          <h5 class="card-title card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Lista de Membros</h5>
        </div>
        <div class="card-body">
          <img src="img/call.png" style="padding-bottom: 10px;">
          <p class="card-text card-texto" style="padding-bottom: 5px;">Portal para abertura e consulta de chamados para colaboradores.</p>
          <a href="link_modelo.html" target="blank" class="btn botao-cor-especial" >Clique Aqui</a>
        </div>
      </article>
      <article class="card card-largura p-0 m-3 col-12 col-md-3">
        <div class="barra">
          <h5 class="card-title card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Escola Bíblica Dominical</h5>
        </div>
        <div class="card-body">
          <img src="img/bill.png" style="padding-bottom: 10px;">
          <p class="card-text card-texto" style="padding-bottom: 5px;">Portal de gestão que facilita a comunicação entre as áreas.</p>
          <a href="link_modelo.html" target="blank" class="btn botao-cor-especial">Clique Aqui</a>
        </div>
      </article>
      <article class="card card-largura p-0 m-3 col-12 col-md-3">
        <div class="barra">
          <h5 class="card-title  card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Cadastrar Usuários</h5>
        </div>
        <div class="card-body">
          <img src="img/pbot.png" style="padding-bottom: 10px;">
          <p class="card-text card-texto" style="padding-bottom: 5px;">Simplifica o registro, rastreamento e gerenciamento de documentos.</p>
          <a href="#" target="blank" class="btn botao-cor-especial">Clique Aqui</a>
        </div>
      </article>
    </div>
  </section>

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