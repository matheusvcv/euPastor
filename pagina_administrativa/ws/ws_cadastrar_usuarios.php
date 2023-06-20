<?php

include"../../src/conexao.php";

	if(isset($_POST['email'])){

		$nome = filter_input(INPUT_POST, 'nome');
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$nome_usuario = filter_input(INPUT_POST, 'nome_usuario');
		$senha = filter_input(INPUT_POST, 'senha');
		$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

		$conexao->query("INSERT INTO usuarios(nome, email, nome_usuario, senha) VALUES ('$nome','$email','$nome_usuario','$senha_crip')");

		header("Location:../views/cadastrar_usuarios.html?sucesso=1");

	} else {

		echo "Falha!";
	}

?>