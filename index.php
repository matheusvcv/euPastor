<?php
include "src/conexao.php";
include "src/logica_login.php";
?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/logo_login_image.png" type="image/x-icon">
	<title>Login</title>
</head>
<body>
	<div class="container-fluid p-5 mt-4">
		<div class="row">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-sm-12 col-md-8">
				<div class="container p-5 mt-4 bg_login container_login">
					<div class="text-center mb-4">
						<img  class=""  src="img/logo_login_image.png" alt="Logo Bíblia">
						<h1 id="titulo_login">EuPastor</h1>
					</div>
					<form method="POST" action="">
						<div class="row">
							<div class="col-12 mb-3">
						    	<label for="nome_usuario" class="form-label letra_escura">Nome de Usuário:</label>
						    	<input type="text" class="form-control" name="nome_usuario" id="nome_usuario" placeholder="Digite aqui seu nome de usuário">
							</div>
						</div>
						 <div class="row">
						 	 <div class="col-12 mb-0">
								<label for="senha" class="form-label letra_escura">Senha:</label>
								<input type="password" class="form-control" name="senha" id="senha" placeholder="Digite aqui sua senha">
							</div>
						</div>
						<div class="row">
							<div class="col-12 mb-3">
								<a href="auto_cadastro.php">Cadastre-se</a>	
							</div>
						</div>
						<div class="row">
						 	<div class="col mt-3">
						 		<button type="submit" class="btn btn-dark col-12 botao_login">Entrar</button>
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
