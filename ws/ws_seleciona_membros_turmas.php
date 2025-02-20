<?php
include "../src/conexao.php";

$membros = $conexao->query("SELECT id, nome_membro FROM lista_membros");
$turmas = $conexao->query("SELECT id, nome_turma FROM turmas");



var_dump($membross);

?>