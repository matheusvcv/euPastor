<?php

$conexao = new mysqli("localhost", "root", "", "eupastor");

if($conexao->error){
	die("Falha ao conectar com o banco de dados.");
}
