<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<!--<link rel="stylesheet" type="text/css" href="../style.css">-->
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="../../img/logo_login_image.png" type="image/x-icon">
	<title>Cadastrar Usuários</title>
</head>
<body>
<div class="container">
	<h1>Cadastrar Usuários</h1>
	<div class="container">
		<form method="POST" action="../ws/ws_cadastrar_usuarios.php">
			<div class="mb-3">
				<label for="nome" class="form-label">Nome Completo:</label>
				<input type="text" class="form-control" id="nome" name="nome">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Endereço de e-mail:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="mb-3">
				<label for="nome_usuario" class="form-label">Defina um nome de usuário:</label>
				<input type="text" class="form-control" id="nome_usuario" name="nome_usuario">
			</div>
			<div class="mb-3">
				<label for="senha" class="form-label">Senha:</label>
				<input type="password" class="form-control" id="senha" name="senha">
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

