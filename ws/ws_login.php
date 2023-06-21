<?php

if(isset($_POST['nome_usuario']) || isset($_POST['senha'])){

	if(strlen($_POST['nome_usuario']) == 0){

		echo "Por favor, preencha seu nome de usuário.";

	} else if(strlen($_POST['senha']) == 0) {

		echo "Por favor, preencha sua senha.";

	} else {

		$nome_usuario = $conexao-> real_escape_string($_POST['nome_usuario']);
		$senha = $conexao-> real_escape_string($_POST['senha']);

		$seleciona_dados = "SELECT * FROM usuarios WHERE nome_usuario = '$nome_usuario' LIMIT 1";
		$consulta_sql = $conexao-> query($seleciona_dados) or die("Falha na consulta SQL: " . $conexao->error);

		$dados_retornados = $consulta_sql->num_rows;

		if($dados_retornados == 1){

			$usuario = $consulta_sql-> fetch_assoc();

			if(password_verify($senha, $usuario['senha'])){

				if(!isset($_SESSION)){

					session_start();
				}

				$_SESSION['id'] = $usuario['id'];
				$_SESSION['nome'] = $usuario['nome'];

				header("Location: pagina_inicial.php");
			} else {

				header("Location:index.php?err=1");
			}

		} else {

			header("Location:index.php?err=1");
		}
	}

}

?>