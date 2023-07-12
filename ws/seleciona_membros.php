<?php
include"../../src/conexao.php";

$sql = "SELECT * FROM usuarios";

$usuarios = $conexao->query($sql);

if($usuarios->num_rows > 0){

	$usuarios = $dados_usuarios();


	while($row_usuario = $usuarios->fetch_assoc()){

		$rows_usuario[] = $row_usuario;
	}

	$dados_jason = json_encode($rows_usuario);

	echo $dados_jason;
	
} else {

	echo "Nenhum resultado encontrado.";
}