<?php
	include '../library/libs.php';
	include '../src/conexao.php';

	if(isset($_POST['nome_membro']) && $_POST['nome_membro'] != ""){

		$nome_membro = $_POST['nome_membro'];
		$cpf_membro = $_POST['cpf_membro'];
		$nascimento_membro = $_POST['nascimento_membro'];
		$email_membro = $_POST['email_membro'];
		$telefone_membro = $_POST['telefone_membro'];
		$faixa_salarial = $_POST['faixa_salarial'];
		$tempo_de_membro = $_POST['tempo_de_membro'];
		$ativo = $_POST['ativo'];

		try
		{
			$sql = "

				INSERT INTO lista_membros (
					nome_membro,
					cpf_membro,
					nascimento_membro,
					email_membro,
					telefone_membro,
					faixa_salarial,
					tempo_de_membro,
					ativo
				)
				VALUES (
					'$nome_membro',
					'$cpf_membro',
					$nascimento_membro,
					'$email_membro',
					'$telefone_membro',
					$faixa_salarial,
					'$tempo_de_membro',
					'$ativo'
				)

			";
}

		}
		catch(Exception $e)
		{

		}
	}
?>