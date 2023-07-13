<?php
include "../src/conexao.php";

$sql = "SELECT * FROM lista_membros";

$membros = $conexao->query($sql);

if ($membros->num_rows > 0) {
    $rows_membro = array();

    while ($row_membro = $membros->fetch_assoc()) {
        $rows_membro[] = $row_membro;
    }

    $dados_json = json_encode($rows_membro);

    echo $dados_json;
} else {
    echo "Nenhum resultado encontrado.";
}
