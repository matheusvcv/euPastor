<?php

include "src/conexao.php"; 
include "src/protect.php";
include "view/head.php";

if(!isset($_GET['id'])){ //Se o id da turma não estiver definido, encerra o carregamento da página.
	die("Turma não especificada!");
}

$turma_id = $_GET['id'];// Define a var $turma_id com o valor que foi recebido via GET.

//Busca o nome da turma
$stm_turma = $conexao->prepare("SELECT * FROM turmas WHERE id = ?");//Consulta utilizando prepare para evitar SQL injection.
$stm_turma-> bind_param("i", $turma_id);//Associa o valor da variável ao paceholder da consulta
$stm_turma->execute();//Executa a query preparada
$resultado_turma = $stm_turma->get_result();//Recupera o resultado da execução da query como um  objeto do tipo mysqli_result



?>