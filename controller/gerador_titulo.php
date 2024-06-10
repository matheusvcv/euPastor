<?php
	$nome_arquivo = $_SERVER['REQUEST_URI'];
	$fim_nome_arquivo = strpos($nome_arquivo, ".php");
	$titulo_da_pagina = substr($nome_arquivo, 10, $fim_nome_arquivo);

	if($titulo_da_pagina === "lista_membros.php"){
		$titulo = "Lista de Membros";
	}elseif ($titulo_da_pagina === "index.php") {
		$titulo = "login";
	}elseif ($titulo_da_pagina === "pagina_inicial.php") {
		$titulo = "Página Inicial";
	}
?>