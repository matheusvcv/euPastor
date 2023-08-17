<?php
include 'ws_libs.php';
include '../src/conexao.php';

if(isset($_POST['nome_membro']) && $_POST['nome_membro'] != ""){

	try
	{
		$id = $_POST['id'];
		$nome_membro = $_POST['nome_membro'];
		$cpf_membro = $_POST['cpf_membro'];
		$nascimento_membro = $_POST['nascimento_membro'];
		$email_membro = $_POST['email_membro'];
		$telefone_membro = $_POST['telefone_membro'];
		$faixa_salarial = $_POST['faixa_salarial'];
		$tempo_de_membro = $_POST['tempo_de_membro'];
		$ativo = $_POST['ativo'];

		$sql="
			UPDATE lista_membros SET
				nome_membro = '$nome_membro',
				cpf_membro = '$cpf_membro',
				nascimento_membro = '$nascimento_membro',
				email_membro = '$email_membro',	
				telefone_membro = '$telefone_membro',
				faixa_salarial = '$faixa_salarial',
				tempo_de_membro = '$tempo_de_membro',
				ativo = '$ativo'
			WHERE id = $id
		";

		$sql = htmlspecialchars($sql);
		$sql = str_replace(";", "", $sql);

		if ($conn->query($sql))
		{
			echo "success";
		}
		else
		{
			echo "error";
		}
	}
	catch(Exception $e)
	{
		echo "error";
	}
}	





?>