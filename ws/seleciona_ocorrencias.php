<?php
header('Content-Type: application/json; charset=utf-8');//Define que a resposta será em JSON em UTF8.
include "../src/conexao.php";//Inclui arquivo de conexão.

if (!isset($_GET['id'])) {//Verifica se o parâmetro ID foi passado via URL.
    echo json_encode(['erro' => 'ID do Membro não especificado.']);//Se id não foi passado exibe um erro . encerra o script;
    exit;
}

$membro_individual_id = $_GET['id'];//Define o ID passado via URL como valor da variavel $membro_individual_id;

$sql = "SELECT * FROM ocorrencias WHERE id = ?";

$ocorrencias = $conexao->query($sql);//Executa a consulta, e define o retorno com valor da variável $ocorrencias.

if($ocorrencias->num_rows > 0) {//Se a consulta retornar pelo menos uma linha executa o código abaixo.
    
    $rows_membro = array();//Declara um array vazio para armazenar os registros retornados do BDD.

    while ($row_membro = $ocorrencias->fetch_assoc()) {//Fetch_assoc retorna cada linha como um array associativo. Loop while percorre todas as linhas retornadas.
        $rows_membro[] = $row_membro;//Cada linha do $row_membro é adocionada ao array $rows_membro[].
    }

    $dados_json = json_encode($rows_membro);//Converte o array $rows_membro em uma string no formato json.

    echo $dados_json;//Exibe o dado jason tornando possivel que o javascrive consuma essa dados via Ajax.

}else {//Se a pesquisa não retornar nada, executa o código abaixo.

    echo "Nenhum resultado encontrado.";//Imprime uma mensagem de erro na tela.
}
