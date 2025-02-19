<?php

include '../src/conexao.php';

if($_SERVER['REQUEST_METHOD'] === "POST"){

	$departamento = $_POST['departamento'];
	$nome_turma = $_POST['nome_turma'];
	$professor = $_POST['professor'];

	$sql = "INSERT INTO turmas (departamento, nome_turma, professor) VALUES (?, ?, ?)";

	$statment = $conexao->prepare($sql);

	if($statment){
		$statment ->bind_param('sss', $departamento, $nome_turma, $professor);

		if($statment->execute()){
			header("Location:../adicionar_turmas.php?turma_cadastrada=1");
		} else {
			echo "Erro ao cadastrar turma!" . $statment->error;
		}

		$statment->close();
	} else{
		echo "Erro na preparação da consulta: " . $conexao->error;
	}

	$conexao->close();
}