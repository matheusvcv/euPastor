<?php

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