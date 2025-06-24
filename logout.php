<?php 
//Verifica se a sessão ainda não foi iniciada.
if(!isset($_SESSION)){
    //Inicia a sessão.
    session_start();
}

//Encerra a sessão do usuário).
session_destroy();

//Redireciona o usuário para a página de login.
header('Location: index.php');