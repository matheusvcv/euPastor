<?php
include "../src/conexao.php";

header('Content-Type: application/json; charset=utf-8');//Informa que o conteudo retornado pela requisição http sera do tipo JSON.

if(!isset($_POST['turma_id'], $_POST['data'], $_POST['tema'], $_POST['presentes'])){
	echo json_encode(['erro' => 'Dados incompletos.']);
	exit;
}

$turma_id = $_POST['turma_id'];
$data = $_POST['data'];
$tema = $_POST['tema'];
$presentes = $_POST['presentes'];

foreach($presentes as $membro_id){
	$statement = $conexao->prepare("INSERT INTO chamadas (turma_id, membro_id, data_chamada, tema_aula, presente) VALUES (?, ?, ?, ?, 1)");
	$statement->bind_param("iiss", $tuma_id, $membro_id, $data, $tema);
	$stmt->execute();
}

echo json_encode(['sucesso' => true]);

?>