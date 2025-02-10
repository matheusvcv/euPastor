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
        <section class="container-fluid" id="links" style="margin-bottom: 60px;">
          <div class="row justify-content-center">
            <article class="card card-largura p-0 m-3 col-12 col-md-3">
              <div class="barra">
                <h5 class="card-title card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Turma Infantil</h5>
              </div>
              <div class="card-body">
                <img src="img/call.png" style="padding-bottom: 10px;">
                <p class="card-text card-texto" style="padding-bottom: 5px;">Portal para abertura e consulta de chamados para colaboradores.</p>
                <a href="link_modelo.html" target="blank" class="btn botao-cor-especial" >Clique Aqui</a>
              </div>
            </article>
            <article class="card card-largura p-0 m-3 col-12 col-md-3">
              <div class="barra">
                <h5 class="card-title card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Turma Dos Juniores</h5>
              </div>
              <div class="card-body">
                <img src="img/boleto.png" style="padding-bottom: 10px;">
                <p class="card-text card-texto" style="padding-bottom: 5px;">Retire aqui seus boletos e faturas para a realizaçao do pagamento.</p>
                <a href="link_modelo.html" target="blank" class="btn botao-cor-especial">Clique Aqui</a>
              </div>
            </article>
            <article class="card card-largura p-0 m-3 col-12 col-md-3">
              <div class="barra">
                <h5 class="card-title card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Turma dos Adolescentes</h5>
              </div>
              <div class="card-body">
                <img src="img/bill.png" style="padding-bottom: 10px;">
                <p class="card-text card-texto" style="padding-bottom: 5px;">Sistema de gestão de demandas que facilita a comunicação entre as áreas.</p>
                <a href="link_modelo.html" target="blank" class="btn botao-cor-especial">Clique Aqui</a>
              </div>
            </article>
            <article class="card card-largura p-0 m-3 col-12 col-md-3">
              <div class="barra">
                <h5 class="card-title card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Turma dos Jovens</h5>
              </div>
              <div class="card-body">
                <img src="img/cac.png" style="padding-bottom: 10px;">
                <p class="card-text card-texto" style="padding-bottom: 5px;">Portal para abertura de chamados e consultas para equipamentos.</p>
                <a href="link_modelo.html" target="blank" class="btn botao-cor-especial">Clique Aqui</a>
              </div>
            </article>
            <article class="card card-largura p-0 m-3 col-12 col-md-3">
              <div class="barra">
                <h5 class="card-title card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Turma dos Adultos</h5>
              </div>
              <div class="card-body">
                <img src="img/store.png" style="padding-bottom: 10px;">
                <p class="card-text card-texto" style="padding-bottom: 5px;">Conheça a nossa loja, e todos os suprimentos que fornecemos.</p>
                <a href="link_modelo.html" target="blank" class="btn botao-cor-especial">Clique Aqui</a>
              </div>
            </article>  
            <article class="card card-largura p-0 m-3 col-12 col-md-3">
              <div class="barra">
                <h5 class="card-title card-titulo" style="padding: 5px 15px; padding-bottom: 0px">Turma Extra</h5>
              </div>
              <div class="card-body">
                <img src="img/mail.png" style="padding-bottom: 10px;">
                <p class="card-text card-texto" style="padding-bottom: 5px;">A nossa empresa fornece sistemas de correspondência e entrega de pacotes.</p>
                <a href="link_modelo.html" target="blank" class="btn botao-cor-especial">Clique Aqui</a>
              </div>
            </article>
          </div>
        </section>
      </div>  
    </div>
  </div>
</div>
  <!--Script Bootstrap-->
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
  
  
  
  <footer class="footer footer-text">
    <a class="text-light" href="#" style="text-decoration: none;">Portal Serviços</a>
  </footer>

  <script src="bootstrap/js/bootstrap.min.js"></script><!--Carrega o Bootstrap-->
</body>
</html>