<?php
header('Content-Type: application/json; charset=utf-8');//Define que a resposta será em JSON em UTF8.
include "../src/conexao.php";//Inclui arquivo de conexão.

if (!isset($_GET['id'])) {//Verifica se o parâmetro ID foi passado via URL.
    echo json_encode(['erro' => 'ID da turma não especificado.']);//Se id não foi passado exibe um erro . encerra o script;
    exit;
}

$turma_id = $_GET['id'];//Define o ID passado via URL como valor da variavel $turma_id;


$sql = "
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
";//Seleciona os dados da tabela no BDD. Usa o lm com alias de lista_membros. Usa o c com alias de chamadas.COALESCE retorna o primeiro valor da tabela que não for Null. CASE WHEN retorna 1 se presente for igual a 1 e o SUM adiciona todos esses retornos ao total de presencas. Se presente for igual a 0 SUM adiciona esse retorno no total de faltas. Tabela principal da consulta definida como lista_mebros após o from. Inner join conecta lista_membros com turma_alunos com base no id e no membro_id, retornando somente os alunos matriculados na turma. ta alias para turma_aluno. Left Join garante que o aluno será listado memso que tenha 0 presenças e 0 faltas. Agrupa os dados por membro, para que o SUM das presenças e faltas funcione corretamente.

$stmt = $conexao->prepare($sql);//Prepara a query de maneira segura contra SQL Injection.
$stmt->bind_param("ii", $turma_id, $turma_id);//Passa os dois parametros da query com o valor de $turma_id.
$stmt->execute();//Executa a query.
$result = $stmt->get_result();//Armazena o resultado da query.

$alunos = [];//Inicia um array vazio.

while ($row = $result->fetch_assoc()) {//loop que verifica cada aluno retornado no resultado.
    $total_chamadas = $row['presencas'] + $row['faltas'];//Calcula o total de chamadas.
    $frequencia = $total_chamadas > 0 ? round(($row['presencas'] / $total_chamadas) * 100) : 0;//Calcula a frequencia em porcetagem.
    $row['frequencia'] = $frequencia;
    $alunos[] = $row;//Adiciona todos os dados do aluno no array final.
}

echo json_encode($alunos, JSON_UNESCAPED_UNICODE);//Retorna o array de alunos como um Json e evita problemas com caracteres acentuados utilizando o SON_UNESCAPED_UNICODE.