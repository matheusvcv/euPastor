<?php
include "view/head_lista_membros.php";
?>
<!Doctype html>
<html>
<body>
<!--Início da NavBar-->
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="img/logo_login_branca_image.png" style="margin-right: 1.5vh;" alt="Logo" width="30" height="29" class="d-inline-block align-text-top">MyChurch</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation" style="color: pink;">
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
							<a class="nav-link active botao_sair" aria-current="page" href="../../logout.php">SAIR</a>
						<li class="nav-item">
							<a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
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
		<li class="nav-item">
			<a class="nav-link barra_item" href="pagina_administrativa/views/cadastrar_usuarios.php">Cadastrar Usuários</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item">Outro módulo</a>
		</li>
	</ul>
	<!--Início do Corpo da página.-->
	<div class="card card_body m-3">
		<div class="card-content collapse show">
			<div class="card-body card-dashboard">

				<!--Início da DataTable-->
				<div class="container-fluid">
					<div class="row mt-3">
						<table id="datatable" class="table table-striped table-bordered table-hover justify-content-center" cellspacing="0" width="100%">
							<thead>
								<tr class="table-dark justify-content-center">
									<th class="align-middle text-center">ID</th>
									<th class="align-middle text-center">Perfil</th>
									<th class="align-middle text-center">Nome</th>
									<th class="align-middle text-center">CPF</th>
									<th class="align-middle text-center">Nascimento</th>
									<th class="align-middle text-center">E-mail</th>
									<th class="align-middle text-center">Telefone</th>
									<th class="align-middle text-center">Tempo de Igreja</th>
									<th class="align-middle text-center">Ativo</th>
									<th class="align-middle text-center">Salário</th>
									<th class="align-middle text-center">Contribuição Sugerida</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../../bootstrap/js/bootstrap.min.js"></script><!--Carrega o Bootstrap-->
	<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script><!--Carrega a Biblioteca Datatables-->
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script><!--Carrega biblioteca para os botões-->
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script><!--Carrega biblioteca para os botões-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script><!--Biblioteca para exportação da lista para Excel-->
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script><!--Biblioteca para exportação da lista para Excel-->

	<script>

	$(document).ready(function() {//Define que quando o documento for carregado, a tabela será configurada

		$('#datatable').DataTable({//Inicia a tabela
				/* fixedHeader: {
				header: true,
				headerOffset: $('.header-navbar').outerHeight()
			}, */		
			"autoWidth": false,//Desativa a largura automática das colunas
			"bLengthChange": false,//Remove a opção de alterar o número de intens por página
			pageLength: 10,//Define 10 itens por página
			dom: 'Bfrtip',//Define o Layout para incluir botões
			buttons: [//Adiciona um botão que exportaos dados da tabela para um arquivo Excel
			  {
				extend: 'excelHtml5',
				text: 'Excel',
				className: 'btn btn-success',
				titleAttr: 'Exportar para Excel',
				exportOptions: {
				columns: ':visible'
				}
			  }
			],

			"search": {
				"regex": true//Permite busca com expressões regulares
			},
			"destroy": true,//Garante que a tabela pode ser recriada sem erros
			"processing" : false,//Não exibe indicador de carregamento de dados
			"paging": true,//Habilita a paginação
			"searching": true,//Habilita Barra de Pesquisa
			"bFilter": false,//Desativa filtro automáticos
			"columnDefs":[//Oculta a primeira coluna
			   {"visible": false, "targets":0},
			   {"className": "icone", "targets":1}
			],

			//Definição das colunas

			"columns":[
				{"data": "id"},//Recebe o dado que ajax retorna direto do json
				{
					"data": null,//Define que o que será exibido nessa coluna não está no banco de dados e não utiliza json
					"render": function (data, type, row, meta){//Altera o que será exibido na tela quando o tipo de exibição for Display.
						if(type === 'display'){
							return '<div style="display: flex; justify-content: center; align-items: center; height: 100% ">'+'<img src="img/profile_icon.png" align="center">'+'</div>';//Exibe a imagem.
						}
						
						return "";
					}
				},
				{"data": "nome_membro"},//Recebe o dado que ajax retorna direto do json
				{"data": "cpf_membro"},//Recebe o dado que ajax retorna direto do json
				{"data": "nascimento_membro"},//Recebe o dado que ajax retorna direto do json
				{"data": "email_membro"},//Recebe o dado que ajax retorna direto do json
				{"data": "telefone_membro"},//Recebe o dado que ajax retorna direto do json
				{"data": "tempo_de_membro"},//Recebe o dado que ajax retorna direto do json
				{"data": "ativo"},//Recebe o dado que ajax retorna direto do json
				{"data": "faixa_salarial"},//Recebe o dado que ajax retorna direto do json
				{
					"data": "faixa_salarial",//Altera o valor da faixa salarial antes de exibir na tabela
					"render": function(data, type, row, meta){
						if(type === 'display'){
							return data / 10;
						}
						return data;
					}
				}
			]

			});
	});

	$.ajax({//Inicia a requisição ajax utilizando jQuery para buscar dados no servidor
		url: 'ws/seleciona_membros.php',//Define o endereço do script PHP que vai retornar os arquivos em formato Json
		dataType: 'json',//Define que o formato do dado vai ser json
		success: function(data){//Define que a função será realizada quando a requisição for concluida com sucesso

			if(data.length > 0){//Verifica se o array 'data' contém dados

				$('#datatable').DataTable().clear();//Recebe a datable e limpa os dados antes de inserir os novos

				$('#datatable').DataTable().rows.add(data).draw();//Adiciona linhas na tabela com os dados recebidos

			}else{

				$('#datatable').DataTable().clear().draw();//Limpa a tabela
				$('#datatable').DataTable().rows.add('<tr><td colspan="3">Nenhum resultado encontrado.</td><tr>').draw();//Exibe mensagem quando não houver resultados
			}
		},

		error: function() {//Função executada caso haja um erro na requisição Ajax
		}
	});

	</script>
</body>
</html>