<?php
include "../src/conexao.php";

header('Content-Type: application/json; charset=utf-8');//Informa que o conteudo retornado pela requisição http sera do tipo JSON.

if(!isset($_POST['turma_id'], $_POST['data'], $_POST['tema'], $_POST['presentes'], $_POST['todos'])){
	echo json_encode(['erro' => 'Dados incompletos.']);
	exit;
}

$turma_id = $_POST['turma_id'];
$data = $_POST['data'];
$tema = $_POST['tema'];
$presentes = $_POST['presentes'];
$todos = $_POST['todos'];

foreach($todos as $membro_id){
	$presente = in_array($membro_id, $presentes) ? 1 : 0;
	$statement = $conexao->prepare("INSERT INTO chamadas (turma_id, membro_id, data_chamada, tema_aula, presente) VALUES (?, ?, ?, ?, ?)");
	$statement->bind_param("iissi", $turma_id, $membro_id, $data, $tema, $presente);
	$statement->execute();
}

echo json_encode(['sucesso' => true]);

?>