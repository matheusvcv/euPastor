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
          <div class="container-fluid m-3">

            <div>
              <button id="exibe_form_inserir_turma" class="btn btn-success" onclick="exibe_turmas();">Inserir Turma</button> 
            </div>

            <form  method="POST" action="ws/ws_adicionar_turmas.php" name="inserir_turma" id="inserir_turma" style="display:none;">
              <div class="row mt-3">
                <h6>Inserir Turma</h6>
              </div>
              <div class="row mb-4">
                <div class="col-lg-4">
                  <label for="nome" class="form-label">Departamento:</label>
                    <select class="form-select form_item" id="departamento" name="departamento">
                      <option value="infantil">Infantil</option>
                      <option value="juniores">Juniores</option>
                      <option value="adolescentes">Adolescentes</option>
                      <option value="jovens">Jovens</option>
                      <option value="adultos">Adultos</option>
                    </select>
                </div>
                <div class="col-lg-4">
                  <label for="telefone" class="form-label">Professor:</label>
                  <input type="text" class="form-control form_item" id="professor" name="professor" placeholder="Professor">
                </div>
                <div class="col-lg-4">
                  <label for="telefone" class="form-label">Nome da turma:</label>
                  <input type="text" class="form-control form_item" id="nome_turma" name="nome_turma" placeholder="Nome da Turma">
                </div>
              </div>
              <div class="row justify-content-end mb-2">
                <div class="col-lg-1 col-sm-12 mt-3" style="min-width: 120px;">
                  <button type="submit" class="btn btn-success form-control form_item" onclick="inserir_membro();">Cadastrar</button>
                </div>
                <div class="col-lg-1 mt-3" style="min-width: 120px;">
                  <div class="btn btn-danger form-control form_item" onclick="esconde_form_cad_membro();">Cancelar</div>
                </div>
              </div>
            </form>
          </div>
<script type="text/javascript">
  
  function exibe_form_inserir_turma()
  {
    $('#inserir_turma').css('display', 'block');
    $('#exibe_form_inserir_turma').css('display', 'none');
  }

  function esconde_form_cad_membro()
  {
    $('#inserir_turma').css('display', 'none');
    $('#exibe_form_inserir_turma').css('display', 'block');
  }

  function exibe_turmas()
  {
    $('#inserir_turma').css('display', 'block');
    $('#exibe_form_inserir_turma').css('display', 'none');
  }

  function esconde_turmas()
  {
    $('#inserir_turma').css('display', 'none');
    $('#exibe_form_inserir_turma').css('display', 'block');
  }

</script>
</body>
</html>