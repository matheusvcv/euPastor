<?php
header('Content-Type: application/json; charset=utf-8');
include "../src/conexao.php";

if (!isset($_GET['id'])) {
    echo json_encode(['erro' => 'ID da turma não especificado.']);
    exit;
}

$turma_id = $_GET['id'];

// Consulta os alunos com total de presenças e faltas
$query = "
    SELECT 
        lm.id,
        lm.nome_membro,
        lm.nascimento_membro,
        lm.ativo,
        COALESCE(SUM(CASE WHEN c.presente = 1 THEN 1 ELSE 0 END), 0) AS presencas,
        COALESCE(SUM(CASE WHEN c.presente = 0 THEN 1 ELSE 0 END), 0) AS faltas
    FROM lista_membros lm
    INNER JOIN turma_alunos ta ON lm.id = ta.membro_id
    LEFT JOIN chamadas c ON c.membro_id = lm.id AND c.turma_id = ?
    WHERE ta.turma_id = ?
    GROUP BY lm.id, lm.nome_membro, lm.nascimento_membro, lm.ativo
";

$stmt = $conexao->prepare($query);
$stmt->bind_param("ii", $turma_id, $turma_id);
$stmt->execute();
$result = $stmt->get_result();

$alunos = [];

while ($row = $result->fetch_assoc()) {
    $total_chamadas = $row['presencas'] + $row['faltas'];
    $frequencia = $total_chamadas > 0 ? round(($row['presencas'] / $total_chamadas) * 100) : 0;
    $row['frequencia'] = $frequencia;
    $alunos[] = $row;
}

echo json_encode($alunos, JSON_UNESCAPED_UNICODE);