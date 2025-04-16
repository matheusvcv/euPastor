<?php
// Garante que o conteúdo seja retornado como JSON com charset UTF-8
header('Content-Type: application/json; charset=utf-8');

include "../src/conexao.php"; // Conexão com o banco de dados

// Verifica se o parâmetro "id" foi recebido
if (!isset($_GET['id'])) {
    echo json_encode(['erro' => 'ID da turma não especificado.']);
    exit;
}

$turma_id = $_GET['id'];

$stm_frequencia = $conexao->prepare("SELECT id, turma_id, membro_id, data_chamada, tema_aula, presente FROM chamadas WHERE turma_id = ?");
$stm_frequencia->bind_param("i", $turma_id);
$stm_frequencia->execute();
$resultado_frequencia = $stm_frequencia->get_result();





$turma_id = $_GET['id'];

// Prepara a consulta para buscar alunos da turma
$stm_alunos = $conexao->prepare("SELECT lista_membros.id, lista_membros.nascimento_membro, lista_membros.nome_membro, lista_membros.ativo FROM lista_membros INNER JOIN turma_alunos ON lista_membros.id = turma_alunos.membro_id WHERE turma_alunos.turma_id = ?
");

$stm_alunos->bind_param("i", $turma_id);
$stm_alunos->execute();
$resultado_alunos = $stm_alunos->get_result();


$rows_frequencia = [];

while ($row_frequencia = $resultado_frequencia->fetch_assoc()) {
    $rows_frequencia[] = $row_frequencia;
}

// Retorna os dados como JSON, mesmo que vazio
echo json_encode($rows_frequencia, JSON_UNESCAPED_UNICODE);

?>
