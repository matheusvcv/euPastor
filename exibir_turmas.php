<?php
include "src/conexao.php"; 
include "src/protect.php";
include "view/head.php";

if(!isset($_GET['departamento'])){
	die("Departamento não foi especificado.");
}

 $departamento = $_GET['departamento'];

 $sql_turmas = "SELECT id, nome_turma FROM turmas WHERE departamento = ?";
 $statement = $conexao->prepare($sql_turmas);
 $statement-> bind_param("s", $departamento);
 $statement->execute();
 $resultado_turmas = $statement->get_result();

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
    <li class="nav-item">
      <a class="nav-link barra_item">Outro módulo</a>
    </li>
  </ul>
	<!--Início do Corpo da página.-->
	<div class="card card_body m-3">
		<div class="card-content collapse show">
			<div class="card-body card-dashboard">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h3 class="mb-0">Departamento <?php echo ucfirst($departamento); ?></h3>
          <a href="escola_biblica_dominical.php">
            <img src="img/voltar.png" alt="Voltar">
          </a>
        </div>
				<div class="container-fluid">
					<div class="row mt-3">
						<h6>Turmas:</h6>
					</div>
					<div class="card" style="width: 18rem;">
					  <ul class="list-group list-group-flush">
					  	<?php while($turmas = $resultado_turmas->fetch_assoc()) { ?>
					    <li class="list-group-item lista" style=""><a class="lista" href="turma.php?id=<?php echo $turmas['id'];  ?>"><?php echo $turmas['nome_turma']; } ?></a></li>
					  </ul>
					</div>	
				</div>

               <table>
              <tr>
                <th>Titulo</th>
              </tr>
              <tr>
                <?php while($turmas = $resultado_turmas->fetch_assoc()) { ?>
              <li class="list-group-item lista" style=""><a class="lista" href="turma.php?id=<?php echo $turmas['id'];  ?>"><?php echo $turmas['nome_turma']; } ?></a></li>
              </tr>
              
            </table>

			</div>	
		</div>
	</div>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
