<?php

//$conexao = new mysqli("localhost", "root", "", );

$conexao = new PDO("mysql:host=localhost;dbname=eupastor", "root", "");


if($conexao->error){
	die("Falha ao conectar com o banco de dados.");
}