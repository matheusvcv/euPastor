<?php
	 // Verifica se a sessão ainda não foi iniciada
	if(!isset($_SESSION)){
		// Inicia a sessão
		session_start();
	}
	// Verifica se a variável de sessão 'id' não está definida
	if(!isset($_SESSION['id'])){
		// Encerra a execução do script e exibe uma mensagem informando que o usuário não está logado
        // Caso a sessão id não tenha sido definida, encerra a execução, exibe uma mensagrm de erro para o usuario e fornece um link para a página de login.
		die("Você não pode acessar essa página, pois não está logado.<p><a href=\"index.php\">Logar</a></p>");
	}
?>