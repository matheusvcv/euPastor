<?php
include "../src/conexao.php";//Inclui o arquivo de conexão com o BDD.

$sql = "SELECT * FROM lista_membros";//Define uma consulta que seleciona todos os dados da tabela lista_membros do BDD, e adiciona essa consulta como o valor de uma variável.

$membros = $conexao->query($sql);//Executa a consulta, e define o retorno com valor da variável $membros.

if ($membros->num_rows > 0) {//Se a consulta retornar pelo menos uma linha executa o código abaixo.
    
    $rows_membro = array();//Declara um array vazio para armazenar os registros retornados do BDD.

    while ($row_membro = $membros->fetch_assoc()) {//Fetch_assoc retorna cada linha como um array associativo. Loop while percorre todas as linhas retornadas.
        $rows_membro[] = $row_membro;//Cada linha do $row_membro é adocionada ao array $rows_membro[].
    }

    $dados_json = json_encode($rows_membro);//Converte o array $rows_membro em uma string no formato json.

    echo $dados_json;//Exibe o dado jason tornando possivel que o javascrive consuma essa dados via Ajax.

} else {//Se a pesquisa não retornar nada, executa o código abaixo.

    echo "Nenhum resultado encontrado.";//Imprime uma mensagem de erro na tela.
}
