<?php
include "src/conexao.php"; 
include "src/protect.php";
include "view/head.php";

if(!isset($_GET['id'])){ //Se o id da turma não estiver definido, encerra o carregamento da página.
	die("Turma não especificada!");
}

$turma_id = $_GET['id'];// Define a var $turma_id com o valor que foi recebido via GET.

//Busca o nome da turma
$stm_turma = $conexao->prepare("SELECT nome_turma FROM turmas WHERE id = ?");//Consulta utilizando prepare para evitar SQL injection.
$stm_turma-> bind_param("i", $turma_id);//Associa o valor da variável ao paceholder da consulta
$stm_turma->execute();//Executa a query preparada
$resultado_turma = $stm_turma->get_result();//Recupera o resultado da execução da query como um  objeto do tipo mysqli_result

//Busca alunos matriculados
$stm_alunos = $conexao->prepare("SELECT lista_membros.id, lista_membros.nome_membro FROM lista_membros INNER JOIN turma_alunos ON lista_membros.id = turma_alunos.membro_id WHERE turma_alunos.turma_id = ?");//Consulta preparada que retorna os dados onde o id da tabela membros, e o membro_id da tabela tuma_alunos são o mesmo.
$stm_alunos-> bind_param("i", $turma_id);//Associa o valor da variável ao paceholder da consulta
$stm_alunos-> execute();//Executa a query preparada
$resultado_alunos = $stm_alunos->get_result();//Recupera o resultado da execução da query como um  objeto do tipo mysqli_result

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


	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>