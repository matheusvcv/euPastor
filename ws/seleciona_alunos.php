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

// Prepara a consulta para buscar alunos da turma
$stm_alunos = $conexao->prepare("SELECT lista_membros.id, lista_membros.nome_membro FROM lista_membros INNER JOIN turma_alunos ON lista_membros.id = turma_alunos.membro_id WHERE turma_alunos.turma_id = ?
");

$stm_alunos->bind_param("i", $turma_id);
$stm_alunos->execute();
$resultado_alunos = $stm_alunos->get_result();

$rows_alunos = [];

while ($row_alunos = $resultado_alunos->fetch_assoc()) {
    $rows_alunos[] = $row_alunos;
}

// Retorna os dados como JSON, mesmo que vazio
echo json_encode($rows_alunos, JSON_UNESCAPED_UNICODE);
?>
