<?php

if(isset($_POST['nome_usuario']) || isset($_POST['senha'])){ //Verifica se o nome de usuário e a senha froam enviados pelo método Post.

	if(strlen($_POST['nome_usuario']) == 0){ //Retorna uma mensagem de erro se o campo "nome de usuário" estiver vazio.

		echo "Por favor, preencha seu nome de usuário.";

	} else if(strlen($_POST['senha']) == 0) {//Retorna uma mensagem de erro se o comapo "senha" estiver vazio.

		echo "Por favor, preencha sua senha.";

	} else {//Se ambos os campos forem preenchidos, executa o seguinte código:

		$nome_usuario = $conexao-> real_escape_string($_POST['nome_usuario']);//Função que evita SQL injection no nome de usuário;
		$senha = $conexao-> real_escape_string($_POST['senha']);//Função que evita SQL injection na senha.;

		$seleciona_dados = "SELECT * FROM usuarios WHERE nome_usuario = '$nome_usuario' LIMIT 1";//Consulta o BDD e verifica se o nome de usuário está cadastrato. Limita a consulta a apenas um registro.
		$consulta_sql = $conexao-> query($seleciona_dados) or die("Falha na consulta SQL: " . $conexao->error);//Executa a consulta, e se não encontrar retorna uma messagem de erro.

		$dados_retornados = $consulta_sql->num_rows;//Retorna o número de linhas encontradas na consulta.

		if($dados_retornados == 1){//Se o número de linhas encontradas for igual a 1, isso significa o nome de usuário foi encontrado no BDD.

			$usuario = $consulta_sql-> fetch_assoc();//Pega o resultado da consulta e transforma em um array associativo.

			if(password_verify($senha, $usuario['senha'])){//Verifica se a senha digitada pelo usuário corresponde com a senha no BBD. Senha deve estar hashada. Se a senha for validada, inicia a sessão.

				if(!isset($_SESSION)){

					session_start();//Inicia a sessão
				}

				$_SESSION['id'] = $usuario['id'];//Armazena o ID na sessão.
				$_SESSION['nome'] = $usuario['nome']; //Armazena o Nome na sessão.

				header("Location: pagina_inicial.php");//Redireciona o usuário para a página inicial.
			} else {

				header("Location:index.php?err=1");//Se a senha estiver incorreta direciona para index.php?err=1
			}

		} else {

			header("Location:index.php?err=1");//Se nenhum usuário for encontrado direciona para index.php?err=1
		}
	}

}

?>