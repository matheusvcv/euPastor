<?php
include "src/protect.php";
include "view/head.php"
?>
<!DOCTYPE html>
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
		          <a class="nav-link" href="instrucoes.php">Como utilizar o sistema?</a>
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
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h3>Manual do MyChurch WebSystem</h3>
              <a href="pagina_inicial.php">
                <img src="img/voltar.png" alt="Voltar">
              </a>
            </div>
            <div class="accordion accordion-dark" id="modulosAccordion">
              <!-- Introdução -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingIntro">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#moduloIntro" aria-expanded="true" aria-controls="moduloIntro">
                    Introdução
                  </button>
                </h2>
                <div id="moduloIntro" class="accordion-collapse collapse show" aria-labelledby="headingIntro" data-bs-parent="#modulosAccordion">
                  <div class="accordion-body">
                    <p>O <strong>MyChurch WebSystem</strong> é um sistema online criado para facilitar a administração de igrejas. Ele oferece módulos que ajudam líderes religiosos a gerenciarem atividades e membros com mais organização, segurança e praticidade.</p>
                  </div>
                </div>
              </div>
              <!-- Módulo Escola Bíblica Dominical -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo1" aria-expanded="false" aria-controls="modulo1">
                    1. Escola Bíblica Dominical
                  </button>
                </h2>
                <div id="modulo1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#modulosAccordion">
                  <div class="accordion-body">
                    <p><strong>Este módulo é responsável por estruturar o ensino bíblico da igreja, organizando-o em departamentos e turmas.</strong> Ele oferece aos professores uma plataforma prática e eficiente para gerenciar suas atividades pedagógicas. Por meio do sistema, é possível:</p>
                    <ul>
                      <li>Visualizar e administrar as turmas sob sua responsabilidade</li>
                      <li>Cadastrar aulas com seus respectivos temas de estudo</li>
                      <li>Registrar e acompanhar a frequência dos alunos</li>
                      <li>Atribuir notas e manter o histórico de desempenho dos participantes</li>
                    </ul>
                    <p>Com essa funcionalidade, o processo de ensino torna-se mais organizado, transparente e alinhado com os objetivos formativos da igreja.</p>
                  </div>
                </div>
              </div>
              <!-- Módulo Lista de Membros -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo2" aria-expanded="false" aria-controls="modulo2">
                    2. Lista de Membros
                  </button>
                </h2>
                <div id="modulo2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#modulosAccordion">
                  <div class="accordion-body">
                    <p>Exibe os dados de todos os membros da igreja. É possível:</p>
                    <ul>
                      <li>Visualizar dados pessoais e informações de contato</li>
                      <li>Ver o status de participação (ativo, visitante, inativo, etc.)</li>
                      <li>Consultar a renda declarada (opcional), usada para sugerir o valor do dízimo</li>
                      <li>Abrir o <strong>perfil individual</strong> de cada membro para:</li>
                      <ul>
                        <li>Visualizar informações detalhadas</li>
                        <li>Adicionar ocorrências (avisos, anotações, advertências, etc.)</li>
                        <li>Consultar o histórico de ocorrências</li>
                      </ul>
                      <li>Exportar a lista para Excel</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Módulo Configuração de Membros -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo3" aria-expanded="false" aria-controls="modulo3">
                    3. Configuração de Membros
                  </button>
                </h2>
                <div id="modulo3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#modulosAccordion">
                  <div class="accordion-body">
                    <p>Gerencie o cadastro de membros com facilidade: adicione novos registros, atualize informações existentes ou remova membros da lista, tudo de forma dinâmica, sem recarregar a página.</p>
                  </div>
                </div>
              </div>
              <!-- Módulo Cadastro de Usuários -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo4" aria-expanded="false" aria-controls="modulo4">
                    4. Cadastro de Usuários
                  </button>
                </h2>
                <div id="modulo4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#modulosAccordion">
                  <div class="accordion-body">
                    <p>Função restrita a administradores. Permite cadastrar novos usuários no sistema, atribuindo nome de usuário e senha individuais.</p>
                  </div>
                </div>
              </div>
              <!-- Módulo Sistema de Login -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo5" aria-expanded="false" aria-controls="modulo5">
                    5. Sistema de Login
                  </button>
                </h2>
                <div id="modulo5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#modulosAccordion">
                  <div class="accordion-body">
                    <p>O sistema possui login seguro com os seguintes recursos:</p>
                    <ul>
                      <li>Validação de campos obrigatórios</li>
                      <li>Proteção contra SQL Injection</li>
                      <li>Uso da função <code>password_verify()</code> para autenticação</li>
                      <li>Uso de sessões PHP para manter o usuário logado com segurança</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      </div>
    </div>
  </div>
</body>
</html>