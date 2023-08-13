<?php
include '../library/libs.php';
include '../src/conexao.php';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$id = $_POST['id'];
		$nome_membro = $_POST['nome_membro'];
		$cpf_membro = $_POST['cpf_membro'];
		$nascimento_membro = $_POST['nascimento_membro'];
		$email_membro = $_POST['email_membro'];
		$telefone_membro = $_POST['telefone_membro'];
		$faixa_salarial = $_POST['faixa_salarial'];
		$faixa_salarial = str_replace(',', '.', $faixa_salarial );
		$tempo_de_membro = $_POST['tempo_de_membro'];
		$ativo = $_POST['ativo'];

	    $sql = "UPDATE tabela SET 
            nome_membro = '$nome_membro',
            cpf_membro = '$cpf_membro',
            nascimento_membro = '$nascimento_membro',
            email_membro = '$email_membro',
            telefone_membro = '$telefone_membro',
            tempo_de_membro = '$tempo_de_membro',
            ativo = '$ativo',
            faixa_salarial = '$faixa_salarial'
            WHERE id = $id";

        $result = mysqli_query($conexao, $sql);

	    if ($result) {
	        // Retorna uma mensagem de sucesso (ou qualquer outro dado que desejar)
	        $response = array('message' => 'Dados atualizados com sucesso');
	    } else {
	        // Retorna uma mensagem de erro em caso de falha
	        $response = array('error' => 'Erro ao atualizar dados');
	    }
		
		 header('Content-Type: application/json');

		    // Retorna a resposta como JSON
		    echo json_encode($response);
		} else {
		    // Retorna um erro se o método não for POST
		    header('HTTP/1.1 405 Method Not Allowed');
		    echo 'Method not allowed';
		}

?>