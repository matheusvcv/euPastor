<?php
header('Content-Type: application/json; charset=utf-8');//Define que a resposta será em JSON em UTF8.
include "../src/conexao.php";//Inclui arquivo de conexão.

if (!isset($_GET['id'])) {//Verifica se o parâmetro ID foi passado via URL.
    echo json_encode(['erro' => 'ID do Membro não especificado.']);//Se id não foi passado exibe um erro . encerra o script;
    exit;
}

$membro_individual_id = $_GET['id'];//Define o ID passado via URL como valor da variavel $membro_individual_id;

$sql = "SELECT
			id,
			id_membro,
			titulo,
			ocorrencia,
			data_criacao AS data_registro
		FROM ocorrencias
		WHERE id_membro = ?
		ORDER BY data_criacao DESC
		";
		
$statement = $conexao->prepare($sql);

if(!$statement){
	echo json_encode(['erro'=> 'Erro ao preparar a consulta.']);
	exit;
}

$statement->bind_param('i', $membro_individual_id);
$statement->execute();
$resultado = $statement->get_result();


$ocorrencias = [];

while($row = $resultado->fetch_assoc()){
	$ocorrencias[] = $row;
}

if(count($ocorrencias) > 0){
	echo json_encode($ocorrencias);
}else{
	echo json_encode(['erro'=> 'Nenhuma ocorrência encontrada.']);
}

?>
