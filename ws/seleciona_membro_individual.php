<?php
header('Content-Type: application/json; charset=utf-8');//Define que a resposta será em JSON em UTF8.
include "../src/conexao.php";//Inclui arquivo de conexão.

if (!isset($_GET['id'])) {//Verifica se o parâmetro ID foi passado via URL.
    echo json_encode(['erro' => 'ID do Membro não especificado.']);//Se id não foi passado exibe um erro . encerra o script;
    exit;
}

$membro_individual_id = $_GET['id'];//Define o ID passado via URL como valor da variavel $membro_individual_id;

$sql = "SELECT * FROM lista_membros WHERE id = ?";

$statement = $conexao->prepare($sql);
$statement-> bind_param('i', $membro_individual_id);
$statement-> execute();
$resultado = $statement-> get_result();

if($resultado->num_rows > 0){
	$membro_individual = $resultado->fetch_assoc();
	echo json_encode($membro_individual, JSON_UNESCAPED_UNICODE);
} else{
	echo json_encode(['erro' => 'Membro não encontrado.']);
}

?>