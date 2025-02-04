<?php

include"../../src/conexao.php";//Inclui o arquivo que faz conexão com o banco de dados.

	if(isset($_POST['email'])){//Verifica se o e-mail foi enviado via POST.
		$nome = filter_input(INPUT_POST, 'nome');//Define a variável $nome com o valor enviado via Post no campo nome. A função filter_input reduz o risco de injeção de código malicioso.
		$telefone = filter_input(INPUT_POST, 'telefone');//Define a variável $telefone com o valor enviado via Post no campo telefone. A funçao filter_input reduz o risco de injeção de código malicioso.
		$nascimento = filter_input(INPUT_POST, 'nascimento');//Define a variável $nascimento com o valor enviado via Post no campo nascimento. A função filter_input reduz o risco de injeção de código malicioso.
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);//Define a variável $email com o valor enviado via Post no campo email. A função filter_input reduz o risco de injeção de código malicioso. A função filter_validade_email verifica se o email tem um formato válido.
		$nome_usuario = filter_input(INPUT_POST, 'nome_usuario');//Define a variável $nome_usuario com o valor enviado via Post no campo nome_usuario. A função filter_input reduz o risco de injeção de código malicioso.
		$senha = filter_input(INPUT_POST, 'senha');//Define a variável $senha com o valor enviado via Post no campo senha. A função filter_input reduz o risco de injeção de código malicioso.
		$senha_crip = password_hash($senha, PASSWORD_DEFAULT);//Pitografa a senha e a deixa mais segura antes de adiciona-la no BDD.
		$igreja = filter_input(INPUT_POST, 'igreja');//Define a variável $igreja com o valor enviado via Post no campo igreja. A função filter_input reduz o risco de injeção de código malicioso.
		$cargo = filter_input(INPUT_POST, 'cargo');//Define a variável $cargo com o valor enviado via Post no campo cargo. A função filter_input reduz o risco de injeção de código malicioso.
		$perfil = filter_input(INPUT_POST, 'perfil', FILTER_VALIDATE_INT);//Define a variável $perfil com o valor enviado via Post no campo perfil. A função filter_input reduz o risco de injeção de código malicioso. A função filter_validate_int garante que o valor recebido seja um número inteiro.


        $valida_nome_usuario = $conexao->query("SELECT * FROM usuarios WHERE nome_usuario = '$nome_usuario'");//Executa uma consulta para verificar se o nome de usuário ja existe na tabela do BDD.

        if($valida_nome_usuario->num_rows > 0){//Caso o nome de usuário já exista, impede o cadastro no BDD redireciona para página inicial com uma mensgagem de erro.

           header("Location:../../pagina_inicial.php?usuario_cadastrado=0"); 
           exit();
        }

        $statement = $conexao->prepare("INSERT INTO usuarios(nome, telefone, nascimento, email, nome_usuario, senha, igreja, cargo, perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");//Prepara a consulta SQL mas sem os valores ainda.
        $statement->bind_param("ssssssssi", $nome, $telefone, $nascimento, $email, $nome_usuario, $senha_crip, $igreja, $cargo, $perfil);//Função que vincula os valores das váriaveis às interrogações.

        if($statement->execute()){
        	header("Location:../../pagina_inicial.php?usuario_cadastrado=1");
        } else {

        	echo "Erro ao cadastrar usuário: " . $statement->error;
        	header("Location:../../pagina_inicial.php?usuario_cadastrado=0"); 
        }

	} else {//Se o Post email não foi enviado exibe falha e redireiona para a página inicial com uma mensagem de erro.
		
		echo "Falha!";
        header("Location:../../pagina_inicial.php?usuario_cadastrado=0"); 
	}
?>