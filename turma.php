<?php
include "src/conexao.php"; 
include "src/protect.php";

if(!isset($_GET['id'])){ //Se o id da turma não estiver definido, encerra o carregamento da página.
	die("Turma não especificada!");
}

$turma_id = $_GET['id'];// Define a var $turma_id com o valor que foi recebido via GET.

//Busca o nome da turma
$stm_turma = $conexao->prepare("SELECT departamento, nome_turma FROM turmas WHERE id = ?");//Consulta utilizando prepare para evitar SQL injection.
$stm_turma->bind_param("i", $turma_id);//Associa o valor da variável ao paceholder da consulta
$stm_turma->execute();//Executa a query preparada
$resultado_turma = $stm_turma->get_result();//Recupera o resultado da execução da query como um  objeto do tipo mysqli_result
$turma = $resultado_turma->fetch_assoc();//Pega o mysqli_result e transforma em um array associativo e atribiu como valor da variável $turma.

?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/logo_login_image.png" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
	<title>Turmas</title>
</head>
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
	<div class="card card_body m-3">
		<div class="card-content collapse show">
			<div class="card-body card-dashboard">
				<div class="d-flex align-items-center justify-content-between mb-3">
		          <h3><?php echo htmlspecialchars($turma['nome_turma']); ?></h3>
		          <a href="exibir_turmas.php?departamento=<?php echo $turma['departamento'];?>">
		            <img src="img/voltar.png" alt="Voltar">
		          </a>
		        </div>
				<!--Início da DataTable-->
				<div class="container-fluid">
					<div class="row mt-3">
						<div class="mb-1">
							<button id="botao_chamada" class="btn btn-success">Realizar Chamada</button> 
						</div>
						<table id="datatable" class="table table-striped table-bordered table-hover justify-content-center" cellspacing="0" width="100%">
							<thead>
								<tr class="table-dark justify-content-center">
									<th class="align-middle text-center">ID</th>
									<th class="align-middle text-center">Alunos</th>
									<th class="align-middle text-center">Idade</th>
									<th class="align-middle text-center">Presenças</th>
									<th class="align-middle text-center">Faltas</th>
									<th class="align-middle text-center">Frequência</th>
									<th class="align-middle text-center">Ativo</th>
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
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script><!--Carrega a Biblioteca Datatables-->
	<script src="bootstrap/js/bootstrap.min.js"></script><!--Carrega o Bootstrap-->

	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css"> <!--CSS Responsividade Datatable-->
	<!--Scripts de Responsividade Datatable/Bootstrap-->
	<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
	<script>

	$(document).ready(function() {//Define que quando o documento for carregado, a tabela será configurada

		$('#datatable').DataTable({//Inicia a tabela
				/* fixedHeader: {
				header: true,
				headerOffset: $('.header-navbar').outerHeight()
			}, */
			"responsive": true,			
			"autoWidth": false,//Desativa a largura automática das colunas
			"bLengthChange": false,//Remove a opção de alterar o número de intens por página
			pageLength: 10,//Define 10 itens por página
			dom: '<"d-flex justify-content-between align-items-center"lfB>rtip',//Define o Layout para incluir botões

			"search": {
				"regex": true//Permite busca com expressões regulares
			},
			"destroy": true,//Garante que a tabela pode ser recriada sem erros
			"processing" : false,//Não exibe indicador de carregamento de dados
			"paging": false,//Habilita a paginação
			"searching": false,//Habilita Barra de Pesquisa
			"bFilter": false,//Desativa filtro automáticos
			"columnDefs":[//Oculta a primeira coluna
			   {"visible": false, "targets":0},
			   {"className": "icone", "targets":1}
			],

			//Definição das colunas

			"columns":[
				{"data": "id"},//Recebe o dado que ajax retorna direto do json
				{"data": "nome_membro"},//Recebe o dado que ajax retorna direto do json
				{
					"data": "nascimento_membro",
					"render": function(data, type, row){//Função que permite personalizar o conteúdo da tabela
						if(type === 'display' && data){
							const nascimento = new Date(data);//Converte uma string em um objeto Date para poder calcular.
							const hoje = new Date();//Cria um objeto date com a data e hora atuais
							let idade = hoje.getFullYear() - nascimento.getFullYear();//Calula a idade aproximada com base somente nos anos.
							const mes = hoje.getMonth() - nascimento.getMonth();//Calcula diferença entre o mes atual e o de nascimento.
							if(mes < 0 || (mes === 0 && hoje.getDate() < nascimento.getDate())){
								idade--;
							}
							return idade + " anos de idade";//Retorna a variavel idade e o texto.
						}

						return data;
					}
				},
				{"data": "presencas"},
				{"data": "faltas"},
				{
					"data": "frequencia",
					"render": function(data, type, row){
						if(type === 'display' && data != null){
							return data + "%";
						}

						return data;
					}
				},
				{"data": "ativo"},//Recebe o status de atividade
			]

			});
	

			$.ajax({//Inicia a requisição ajax utilizando jQuery para buscar dados no servidor
				url: 'ws/seleciona_alunos.php?id=<?php echo $turma_id; ?>',//Define o endereço do script PHP que vai retornar os arquivos em formato Json
				dataType: 'json',//Define que o formato do dado vai ser json
				success: function(data){//Define que a função será realizada quando a requisição for concluida com sucesso

					if(data.length > 0){//Verifica se o array 'data' contém dados

						$('#datatable').DataTable().clear();//Recebe a datable e limpa os dados antes de inserir os novos

						$('#datatable').DataTable().rows.add(data).draw();//Adiciona linhas na tabela com os dados recebidos

					}else{

						$('#datatable').DataTable().clear().draw();//Limpa a tabela
						$('#datatable tbody').html('<tr><td colspan="3" class="text-center">Nenhum resultado encontrado.</td></tr>');//Exibe mensagem quando não houver resultados
					}
				},

				error: function() {//Função executada caso haja um erro na requisição Ajax
				}
			});

		});

		$('#botao_chamada').on('click', function() {//Inicia a função quando o #botao_chamada for pressionado
			$.ajax({//Inicia a requisiçõ Ajax
				url: 'ws/seleciona_alunos.php?id=<?php echo $turma_id; ?>',//Envia uma requisição GET para o arquivo PHP passando um parâmetro pela URL.
				dataType: 'json',//Especifica que a resposta esperada é um Json
				success: function(alunos) {//Ececuta a função se a requisição. O parâmetro alunos cotém os dados retornados do servidor.
					if(alunos.length === 0){//Se o array alunos for retornado vazio, mostrar um alerta com SweetAlert encerra a execução.
						Swal.fire('Sem alunos', 'Nenhum aluno encontrado para esta turma.', 'info');
						return;
					}

					let checkboxes = '';//Inicializa uma string que vai guardar os checkboxes dos alunos.
					alunos.forEach(aluno => {//Para cada aluno, cria um checkbox e exibe o nome;
						checkboxes += `
						  <div class="form-check d-flex align-items-center justify-content-center mb-2">
						    <input class="form-check-input me-2" type="checkbox" id="aluno_${aluno.id}" name="presenca" value="${aluno.id}" style="border: solid 1px;">
						    <label class="form-check-label mb-0" for="aluno_${aluno.id}">
						      ${aluno.nome_membro}
						    </label>
						  </div>
						`;

					});

					const htmlForm = `
						<form id="form_chamada">
							<div class="mb-3">
								<label for="dataAula" class="form-label">Data da Aula</label>
								<input type="date" class="form-control" id="dataAula" name="data" value="${new Date().toISOString().split('T')[0]}" required>
							</div>
							<div class="mb-3">
								<label for="temaAula" class="form-label">Tema da Aula</label>
								<input type="text" class="form-control" id="temaAula" name="tema" required>
							</div>
							<div class="mb-3">
								<label class="form-label">Alunos Presentes:</label>
								${checkboxes}
							</div>
						</form>
					`;//Cria uma estrutura HTML com o formulário da chamada;

					Swal.fire({//Abre um modal com o formulário criado acima;
						title: 'Realizar',
						html: htmlForm,
						width: '600px',
						confirmButtonClass: "btn btn-success",
						cancelButtonClass: "btn btn-danger",
						buttonsStyling: false,
						showCancelButton: true,
						cancelButtonText: 'Cancelar',
						confirmButtonText: 'Registrar',
						customClass: {
  	  					actions: 'swal2-buttons-spacing' 
 						},
						focusConfirm: false,
						preConfirm: () => {//Executa quando o usuário clica em registrar;
							const data = $('#dataAula').val();
							const tema = $('#temaAula').val();
							const presentes = [];
							const todos = [];

							$('input[name="presenca"]').each(function() {
								todos.push($(this).val());
								if ($(this).is(':checked')) {
									presentes.push($(this).val());
								}
							});

							if (!data || !tema || presentes.length === 0) {
								Swal.showValidationMessage('Preencha todos os campos e marque pelo menos um aluno presente.');
								return false;
							}

							return {data, tema, presentes, todos};
						}
					}).then(result => {
						if (!result.isConfirmed) return;

						$.ajax({
							url: 'ws/registrar_chamada.php',
							method: 'POST',
							data: {
								turma_id: <?php echo $turma_id; ?>,
								data: result.value.data,
								tema: result.value.tema,
								presentes: result.value.presentes,
								todos: result.value.todos
							},
							success: function(res) {
								Swal.fire('Chamada registrada!', '', 'success');
							},
							error: function() {
								Swal.fire('Erro', 'Não foi possível registrar a chamada.', 'error');
							}
						});
					});
				},
				error: function() { 
					Swal.fire('Erro', 'Não foi possível carregar os alunos.', 'error');
				}
			});
		});

</script>
</body>
</html>