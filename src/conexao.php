<?php

//Essa parte do código estabelece uma conexão com o banco de dados informando servidor, nome de usuário, senha e nome do banco de dados.
$conexao = new mysqli("localhost", "root", "", "mychurch"); 

//Essa parte verifica se há algum erro de conexão com o banco de dados. Se houver, a função die() será chamada e encerrará o script.
if($conexao->error){
	die("Falha ao conectar com o banco de dados.");
}
