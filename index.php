<?php
include "src/conexao.php";

	if(isset($_POST['nome_usuario']) || isset($_POST['senha'])){

		if(strlen($_POST['nome_usuario']) == 0){

			echo "Por favor, preencha seu nome de usuário.";

		} else if(strlen($_POST['senha']) == 0) {

			echo "Por favor, preencha sua senha.";
		} else {

			$nome_usuario = $conexao-> real_escape_string($_POST['nome_usuario']);
			$senha = $conexao-> real_escape_string($_POST['senha']);

			$seleciona_dados = "SELECT * FROM usuarios WHERE nome_usuario = '$nome_usuario' AND senha = '$senha'";
			$consulta_sql = $conexao-> query($seleciona_dados) or die("Falha na consulta SQL: " . $conexao->error);

			$dados_retornados = $consulta_sql->num_rows;

			if($dados_retornados == 1){

				$usuario = $consulta_sql-> fetch_assoc();

				if(!isset($_SESSION)){

					session_start();
				}

				$_SESSION['id'] = $usuario['id'];
				$_SESSION['nome'] = $usuario['nome'];

				header("Location: pagina_inicial.php");

			} else{

				echo"Falha ao logar. E-mail ou senha incorretos!";
			}
		}
	}
?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/icon_image.png" type="image/x-icon">
	<title>Login</title>
</head>
<body>
	<div class="container-fluid p-5 mt-4">
		<div class="row">
			<div class="col-lg-5 col-sm-12 col-md-8">
				<div class="container border rounded p-5 mt-4 bg_login">
					<div class="text-center">
						<img  class=""  src="img/logo_login_image.png" alt="Logo Bíblia">
					</div>
					<form method="POST" action="">
						<div class="row">
							<div class="col-12 mb-1">
						    	<label for="nome_usuario" class="form-label">Nome de Usuário:</label>
						    	<input type="text" class="form-control" name="nome_usuario" id="nome_usuario">
							</div>
						</div>
						 <div class="row">
						 	 <div class="col-12 mb-1">
								<label for="senha" class="form-label">Senha:</label>
								<input type="password" class="form-control" name="senha" id="senha">
							</div>
						</div>
						<div class="row">
							<div class="col-6 mb-2">
								<a href="auto_cadastro.php" class="card-link">Cadastre-se</a>	
							</div>
							 <div class="col-6 mb-2 float-sm-left text-center text-sm-right">
								<a href="auto_cadastro.php" class="card-link">Esqueci minha senha</a>	
							</div>
						</div>
						<div class="row">
						 	<div class="6">
						 		<button type="submit" class="btn btn-primary col-12">Entrar</button>
						 	</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
