<?php

include"../../src/conexao.php";

	if(isset($_POST['email'])){
		$nome = filter_input(INPUT_POST, 'nome');
		$telefone = filter_input(INPUT_POST, 'telefone');
		$nascimento = filter_input(INPUT_POST, 'nascimento');
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$nome_usuario = filter_input(INPUT_POST, 'nome_usuario');
		$senha = filter_input(INPUT_POST, 'senha');
		$senha_crip = password_hash($senha, PASSWORD_DEFAULT);
		$igreja = filter_input(INPUT_POST, 'igreja');
		$cargo = filter_input(INPUT_POST, 'cargo');
		$perfil = filter_input(INPUT_POST, 'perfil', FILTER_VALIDATE_INT);


        $valida_nome_usuario = $conexao->query("SELECT * FROM usuarios WHERE nome_usuario = '$nome_usuario'");

        if($valida_nome_usuario->num_rows > 0){

           header("Location:../../pagina_inicial.php?usuario_cadastrado=0"); 
           exit();
        }


		$conexao->query("INSERT INTO usuarios(nome, telefone, nascimento, email, nome_usuario, senha, igreja, cargo, perfil) VALUES ('$nome','$telefone','$nascimento','$email','$nome_usuario','$senha_crip','$igreja','$cargo','$perfil')");

		header("Location:../../pagina_inicial.php?usuario_cadastrado=1");

	} else {
		
		echo "Falha!";
        header("Location:../../pagina_inicial.php?usuario_cadastrado=0"); 
	}
?>