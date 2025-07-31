<?php
//Código de inclusão de arquivos.
include "src/conexao.php"; //Inclui o arquivo que faz a conexão com o banco de dados.
include "ws/ws_login.php"; //Inclui o arquivo que verifica as credenciais no BDD, e se elas forem válidas inicia uma sessão.
include "view/head.php"; //Inclui o arquivo que contém as informações do head html.
?>
<head>
    <title>Login</title>
</head>
<body class="body_index">
	<div class="container-fluid p-5 mt-4">
		<div class="row">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-sm-12 col-md-8">
				<!--Formulário de Login-->
				<div class="container p-5 mt-4 bg_login container_login">
					<div class="text-center mb-4">
						<img  class=""  src="img/logo_login_image.png" alt="Logo Bíblia">
						<h1 id="titulo_login">MyChurch</h1>
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
								<a class="esqueci_minha_senha" href="">Esqueci minha senha</a>	
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
	<script>

	//Scripts de alerta de e-mail ou senha incorretos:
	<?php if(isset($_GET['err']) && $_GET['err'] == 1) { ?>
			var timerInterval;
			Swal.fire({
			  title: "Não foi possível realizar o Login. Nome de usuário e/ou senha incorretos.",
			  type: "error",
			  timer: 9200,
			  confirmButtonClass: "btn btn-danger",
			  buttonsStyling: false,
			  onClose: function() {
				clearInterval(timerInterval);
			  }
			})

	<?php } ?>

	//Scripts de alertas por falta de preenchimento de usuário e senha:
	$("form").on("submit", function(e){
		if($("#nome_usuario").val() === ""){
		e.preventDefault();
			var timerInterval;
			Swal.fire({
			  title: "Por favor, preencha corretamente os campos 'Nome de Usuário' e 'Senha'.",
			  type: "error",
			  timer: 9200,
			  confirmButtonClass: "btn btn-danger",
			  buttonsStyling: false,
			  onClose: function() {
				clearInterval(timerInterval);
			  }
			})
		}
	});
	$("form").on("submit", function(e){
		if($("#senha").val() === ""){
		e.preventDefault();
			var timerInterval;
			Swal.fire({
			  title: "Por favor, preencha corretamente os campos 'Nome de Usuário' e 'Senha'.",
			  type: "error",
			  timer: 9200,
			  confirmButtonClass: "btn btn-danger",
			  buttonsStyling: false,
			  onClose: function() {
				clearInterval(timerInterval);
			  }
			})
		}
	});

	</script>
</body>
</html>