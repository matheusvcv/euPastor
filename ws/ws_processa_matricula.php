<?php
include "../src/conexao.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$membro_id = $_POST['membro_id'];
	$turma_id = $_POST['turma_id'];

	$sql = "INSERT INTO turma_alunos (membro_id, turma_id) VALUES (?, ?)";
	$statement = $conexao->prepare($sql);

	if($statement){
	
		$statement->bind_param("ii", $membro_id, $turma_id);

        if($statement->execute()){
            echo "Matrícula realizada com sucesso!";
            header("Location:../adicionar_turmas.php?matricula_realizada=1");
        } else {
            echo "Erro ao realizar matrícula!";
            header("Location:../adicionar_turmas.php?matricula_realizada=2");
        }

		$statement->close();
	} else {
		echo "Erro ao realizar matrícula: " . $conexao->error;
		header("Location:../adicionar_turmas.php?matricula_realizada=2");
	}

	$conexao->close();
}

?>