<?php
include "src/protect.php";
include "view/head.php"
?>
<!Doctype html>
<html>
<body>
<!--Início da NavBar-->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="pagina_inicial.php"><img src="img/logo_login_branca_image.png" style="margin-right: 1.5vh;" alt="Logo" width="30" height="29" class="d-inline-block align-text-top">MyChurch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opções:</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active botao_sair" aria-current="page" href="logout.php">SAIR</a>
		        <li class="nav-item">
		          <a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
		        </li>
             <li class="nav-item">
              <a class="nav-link" href="configuracao_membros.php">Configuração de Membros</a>
            </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Como utilizar o sistema?</a>
		        </li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <!--Barra de Navegação entre módulos-->
  <ul class="nav mb-2 barra_nav">
    <li class="nav-item">
      <a class="nav-link barra_item" href="pagina_inicial.php">Página Inicial</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item" href="lista_membros.php">Lista de Membros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item" href="escola_biblica_dominical.php">Escola Biblica Dominical</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item" href="configuracao_membros.php">Configuração de Membros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link barra_item" href="pagina_administrativa/views/cadastrar_usuarios.php">Cadastrar Usuários</a>
    </li>
  </ul>
  <!--Corpo da página-->
  <div class="card card_body m-3">
    <div class="card-content collapse show">
      <div class="card-body card-dashboard">
        <h1 class="text-center mb-4">Guia de Uso – MyChurch WebSystem</h1>
          <h2 class="mt-4">Introdução</h2>
          <p>O <strong>MyChurch WebSystem</strong> é um sistema online criado para facilitar a administração de igrejas. Ele oferece módulos que ajudam líderes religiosos a gerenciarem atividades e membros com mais organização, segurança e praticidade.</p>

          <h2 class="mt-4">Módulos disponíveis</h2>

          <h4 class="mt-3">1. Escola Bíblica Dominical</h4>
          <p>Esse módulo organiza o ensino bíblico da igreja em departamentos e turmas. Cada professor pode acessar o sistema para:</p>
          <ul>
            <li>Visualizar e gerenciar suas turmas</li>
            <li>Adicionar aulas e temas de estudo</li>
            <li>Controlar a frequência dos alunos</li>
            <li>Atribuir e registrar notas</li>
          </ul>

          <h4 class="mt-3">2. Lista de Membros</h4>
          <p>Exibe os dados de todos os membros da igreja. É possível visualizar:</p>
          <ul>
            <li>Dados pessoais e informações de contato</li>
            <li>Status de participação (ativo, visitante, inativo, etc.)</li>
            <li>Renda declarada (opcional), usada para sugerir o valor do dízimo</li>
          </ul>
          <p>Também é possível exportar a lista para Excel.</p>

          <h4 class="mt-3">3. Configuração de Membros</h4>
          <p>Permite cadastrar novos membros, editar dados e excluir registros diretamente da lista, com resposta dinâmica e sem precisar recarregar a página.</p>

          <h4 class="mt-3">4. Cadastro de Usuários</h4>
          <p>Exclusivo para administradores, esse módulo permite criar novos usuários do sistema, definindo nome de usuário e senha para cada um.</p>

          <h4 class="mt-3">5. Sistema de Login</h4>
          <p>O sistema possui login seguro com os seguintes recursos:</p>
          <ul>
            <li>Validação de campos obrigatórios</li>
            <li>Proteção contra SQL Injection</li>
            <li>Uso da função <code>password_verify()</code> para autenticação</li>
            <li>Uso de sessões PHP para manter o usuário logado com segurança</li>
          </ul>

          <h2 class="mt-4">Tecnologias Utilizadas</h2>
          <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th>Tecnologia</th>
                <th>Função no sistema</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PHP (POO)</td>
                <td>Programação de toda a lógica do sistema (backend)</td>
              </tr>
              <tr>
                <td>JavaScript</td>
                <td>Interatividade no navegador</td>
              </tr>
              <tr>
                <td>jQuery</td>
                <td>Manipulação dinâmica da interface</td>
              </tr>
              <tr>
                <td>MySQL</td>
                <td>Banco de dados onde todas as informações são armazenadas</td>
              </tr>
              <tr>
                <td>HTML & CSS</td>
                <td>Estrutura e estilo visual das páginas</td>
              </tr>
            </tbody>
          </table>

          <div class="alert alert-success mt-4" role="alert">
            O sistema foi feito para ser simples, modular e fácil de usar por qualquer equipe administrativa da igreja.
          </div>
      </div>
    </div>
  </div>
</body>
</html>