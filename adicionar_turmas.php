<?php
include "src/protect.php";
include "view/head.php";
include "src/conexao.php";

$membros = $conexao->query("SELECT id, nome_membro FROM lista_membros");
$turmas = $conexao->query("SELECT id, nome_turma FROM turmas");

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
    <li class="nav-item">
      <a class="nav-link barra_item">Outro módulo</a>
    </li>
  </ul>
  <!--Corpo da página-->
  <!--Inserir Nova Turma-->
  <div class="card card_body m-3">
    <div class="card-content collapse show">
      <div class="card-body card-dashboard">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h3>Inserir Nova Turma</h3>
          <a href="escola_biblica_dominical.php">
            <img src="img/voltar.png" alt="Voltar">
          </a>
        </div>
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
                  <button type="submit" class="btn btn-success form-control form_item">Cadastrar</button>
                </div>
                <div class="col-lg-1 mt-3" style="min-width: 120px;">
                  <div class="btn btn-danger form-control form_item" onclick="esconde_turmas();">Cancelar</div>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Realizar Matrícula-->
  <div class="card card_body m-3">
    <div class="card-content collapse show">
      <div class="card-body card-dashboard">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h3>Realizar Matrícula</h3>
          <a href="escola_biblica_dominical.php">
            <img src="img/voltar.png" alt="Voltar">
          </a>
        </div>
        <div class="container-fluid m-3">
          <div>
            <button id="exibe_matricular_aluno" class="btn btn-success" onclick="exibe_form_matricular_aluno();">Realizar Matrícula</button> 
          </div>
          <form  method="POST" action="ws/ws_processa_matricula.php" name="matricular_aluno" id="matricular_aluno" style="display:none;">
            <div class="row mt-3">
              <h6>Inserir Turma</h6>
            </div>
              <div class="row mb-4">
                <div class="col-lg-4">
                  <label for="telefone" class="form-label">Aluno:</label>
                  <select class="form-select form_item" name="membro_id" required>
                    <?php while($membro = $membros->fetch_assoc()): ?>
                      <option value="<?php echo $membro['id'] ?>"><?php echo $membro['nome_membro']; ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
                <div class="col-lg-4">
                  <label for="telefone" class="form-label">Turma:</label>
                  <select class="form-select form_item" name="turma_id" required>
                    <?php while($turma = $turmas->fetch_assoc()): ?>
                      <option value="<?php echo $turma['id'] ?>"><?php echo $turma['nome_turma']; ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
              </div>
              <div class="row justify-content-end mb-2">
                <div class="col-lg-1 col-sm-12 mt-3" style="min-width: 120px;">
                  <button type="submit" class="btn btn-success form-control form_item">Cadastrar</button>
                </div>
                <div class="col-lg-1 mt-3" style="min-width: 120px;">
                  <div class="btn btn-danger form-control form_item" onclick="esconde_form_matricular_aluno();">Cancelar</div>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script type="text/javascript">
  
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

  function exibe_form_matricular_aluno()
  {
    $('#matricular_aluno').css('display', 'block');
    $('#exibe_matricular_aluno').css('display', 'none');
  }

  function esconde_form_matricular_aluno()
  {
    $('#matricular_aluno').css('display', 'none');
    $('#exibe_matricular_aluno').css('display', 'block');
  }

    //Alerta de Usuário Matriculado com sucesso.
    <?php if(isset($_GET['matricula_realizada']) && $_GET['matricula_realizada'] == 1) { ?>
      var timerInterval;
      Swal.fire({
      title: "Matricula Realizada com Sucesso.",
      type: "success",
      timer: 9200,
      confirmButtonClass: "btn btn-success",
      buttonsStyling: false,
      onClose: function() {
      clearInterval(timerInterval);
      }
      })
    <?php }; ?> 

    //Alerta de Turma Inserida com Sucesso.
    <?php if(isset($_GET['turma_cadastrada']) && $_GET['turma_cadastrada'] == 1) { ?>
      var timerInterval;
      Swal.fire({
      title: "Turma Cadastrada com Sucesso.",
      type: "success",
      timer: 9200,
      confirmButtonClass: "btn btn-success",
      buttonsStyling: false,
      onClose: function() {
      clearInterval(timerInterval);
      }
      })
    <?php }; ?> 


</script>
</body>
</html>