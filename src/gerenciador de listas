<?php
include "../../cnf/app.php";
include "../../cnf/session.php";
include "../../conn/conn.php";
include "../../inc/head.php";
include "../../inc/header_nav.php";
include "../../inc/header_nav_menu.php";
?>

<style>
input[type="file"]
{
	display:none;
}

.arquivo_label
{
	background-color: #babfc7;
	border: 1px solid #babfc7;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
	display: block;
	margin-top: 5px;
	padding: 10px 5px;
	text-align: center;
	text-transform: uppercase;
	transition: .5s;
}

.arquivo_label:hover
{
	background-color: #fff;
	color: #75787d;
}

.icones_click:hover
{
	color: #62a773;
}

.btn-custom 
{
  margin-right: -2vh !important;
  margin-top: -17px !important;
}

#form
{
	display: none;
}

#form_lote
{
	display: none;
}

#esconder_form_lote
{
	
}
.excel_btn
{
	top: -0.2em !important;
	height: 41px;
	margin-right: -1rem;
}
	
@media (max-width: 576px)
{
  .div_btns
   {
		padding-right: 0px !important;
		margin-right: 0px !important;
		margin-bottom: 4rem !important;
   }
   
   .div_btn
   {
	   padding-right: 0px !important;
		margin-right: 0px !important;
   }
}

@media (max-width: 992px)
{
	.div_btns
   {
		padding-right: 0px !important;
		margin-right: 0px !important;
		margin-bottom: 4rem !important;
   }
	.div_btn
   {
		padding-right: 0px !important;
		margin-right: 0px !important;
   }
   
   btn_sv_cac
   {
	   width: 12px !important;
   }
}
@media (min-width: 992px)
{
	.div_btns
   {
		margin-left: 47px !important;
   } 
   
   .btn_buscar
   {
		padding-left: 0px !important;
   }
}
@media (max-width: 700px)
{
	.btn_buscar
   {
		padding-left: 15px !important;
   }
}

</style>

<?php
$id_usuario_logado = $_SESSION['id_usuario']; //Recebe o ID do Usuário Logdado;
$id_op = $_GET['id']; //Recebe o ID da Operação;

//Recebe as Operações
$sql = "
	SELECT 
		* 
	FROM pb_operacoes
	
	WHERE ativo = 1
	AND nome_operacao_min NOT IN ('admin')
	AND id = $id_op
";
$data = $conn->query($sql);
$data_res = $data-> fetchAll(PDO::FETCH_ASSOC);

$nome_operacao = $data_res[0]['nome_operacao']; //Nome da operação;
$nome_operacao_min = $data_res[0]['nome_operacao_min']; //Nome da operação minificado;							
?>
<div class="app-content content">
	<div class="content-overlay "></div>
	<div class="content-wrapper">
		<div class="content-body">
			<section id="section-datatable">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-content collapse show">
								<div class="card-body card-dashboard">
									<h5 class="mb-1" id="nome_operacao" name="nome_operacao" style="font-weight: 500;"><i class="icon-folder-alt e039 mr-25"></i><?php echo $nome_operacao ?></h5>
									<div class="col-sm-12">
										<!--Formulário de Inserção Individual-->
											<form id="form" name="form" method="POST">
												<div class="container-fluid col-sm-12">
														<div class="row mb-1">
															<div class="col">
																<h6 style="font-weight: 500;">Inserir registro individual</h6>
															</div>
														</div>
													</div>
													<div class="container-fluid">
														<div class="row mb-1">
															<div class="col-lg-4 col-sm-12 mb-1 larg">
																<label for="centro_custo">Centro de Custo/Cobrança:</label>
																<input type="text" class="form-control col" name="centro_custo" id="centro_custo" placeholder="Centro de Custo/Cobrança">
															</div>
															<div class="col-lg-4 col-sm-12 bm-1">
																<label for="objeto_custo">Objeto de Custo: </label>
																<input type="text" class="form-control" name="objeto_custo" id="objeto_custo" placeholder="Objeto de Custo">
																<input type="hidden" name="nome_operacao_min" id="nome_operacao_min" class="nome_operacao_min" value="<?php echo $nome_operacao_min ?>">
															</div>
														</div>
														<div class="row justify-content-end">
															<div class="col-lg-1 col-sm-12 mb-1">
																<button type="submit" id="cadastrar" name="submit" class="btn btn-primary btn-block" style="font-size: 13.9px;" onclick="adicionar_cc();">Salvar</button>
															</div>
															<div class="col-lg-1 col-sm-12 mb-1">
																<div id="esconder_form" name="esconder_form" class="btn btn-danger btn-block" style="font-size: 13.9px;" onclick="esconder_form();">Cancelar</div>
															</div>
														</div>
													</div>
													<div class="row col-12 col-sm-12 col-lg-12 col-md-12 mx-0 mt-2 border-top">
														<div class="col-12 col-sm-12 col-lg-12 col-md-12 mt-1 mb-3"></div>
													</div>
												</form>
											</div>
											<!--Formulário de Inserção em Lote-->
											<div class="col-sm-12">
												<form method="POST" action="../../ws_admin/operacoes/ws_listas/centro_custo/ws_add_lote.php" enctype="multipart/form-data" id="form_lote" name="form_lote">
													<div class="container-fluid col-sm-12">
														<div class="row mb-1">
															<div class="col">
																<h6 style="font-weight: 500;">Inserir em Lote</h6>
															</div>
														</div>
													</div>
													<div class="container-fluid">
														<div class="row">
															<div class="col-lg-4">
																<label for="file" class="arquivo_label" id="arquivo_label"><i class="fa fa-upload mr-1"></i><span>Selecione um arquivo</span></label>
																<a class="" href="<?php echo $GLOBALS['app_url']."/mod_admin/operacoes/modelo/modelo_centro_de_custo.csv"; ?>" download><p>Download Modelo Layout</p></a>
																<input type="file" name="file" id="file">
																<input type="hidden" name="nome_operacao_min" id="nome_operacao_min" class="nome_operacao_min" value="<?php echo $nome_operacao_min ?>">
																<input type="hidden" name="id_op" id="id_op" class="id_op" value="<?php echo $id_op ?>">
																<div class="mb-1"><small id="texto">Nenhum arquivo selecionado</small></div>
															</div>
														</div>
														
															<div class="row justify-content-end">
																<div class="col-lg-1 col-sm-12 mb-1">
																	<button type="submit" id="adicionar_lote" name="adicionar_lote" class="btn btn-primary btn-block" style="font-size: 13.9px;">Salvar</button>
																</div>
																<div class="col-lg-1 col-sm-12 mb-1">
																	<div id="esconder_form_lote" name="esconder_form_lote" class="btn btn-danger btn-block btn_sv_cac" style="font-size: 13.9px;" onclick="esconder_form_lote()" >Cancelar</div>
																</div>
															</div>

													</div>
													<div class="row col-12 col-sm-12 col-lg-12 col-md-12 mx-0 mt-2 border-top">
														<div class="col-12 col-sm-12 col-lg-12 col-md-12 mt-1 mb-3"></div>
													</div>
												</form>
											</div>
										<!--Pesquisar-->
											<div class="container-fluid">
												<div class="row ml-1">
													<div class="col-lg-6 col-sm-5 mb-1 btn_buscar">
														<div class="row">
															<div class="col-lg-9">
															<div class="d-flex justify-content-between align-items-center">
																<input id="busca" name="busca" type="text" class="form-control col" placeholder="Buscar">
																<button id="filtro_datatable" class="btn btn-primary ml-1"><i class="fa fa-search"></i></button>
																<button id="atualiza" class="btn btn-primary ml-1" onclick="atualizar_pagina()"><i class="fa fa-refresh"></i></button>
															</div>
															</div>	
														</div>
													</div>
													<!--Botões Formulários e Salvar em Massa-->
														<div class="row col-12 col-md-12 col-lg-5 justify-content-end div_btns pr-2 mx-lg-n1">
															<div class="col-12 col-md-12 col-lg-4 mb-1 div_btn pl-lg-2 pr-lg-2 mx-lg-n1">
																	<button id="exibe_form_inserir_ind" class="btn btn-primary btn-block" onclick="exibe_form_inserir_ind()">Inserir Individual</button>
															</div>
															<div class="col-12 col-md-12 col-lg-4 mb-1 div_btn pl-lg-2 pr-lg-2 mx-lg-n1">
																	<button id="exibe_form_inserir_lote" class="btn btn-primary btn-block" onclick="exibe_form_inserir_lote()">Inserir em Lote</button>
															</div>	
															<div class="col-12 col-md-12 col-lg-4 mb-1 div_btn pl-lg-2 pr-lg-2 mx-lg-n1">		
																	<button id="editar_em_massa" class="btn btn-primary btn-block" name="salvar_em_massa" onclick="editar_massa()">Salvar em Massa</button>
															</div>
														</div>
												</div>
											</div>
									<!--DataTable-->
									<div class="container-fluid">
										<div class="row ml-1 mr-1">
											<table id="datatable" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
										<thead class="mt-5">
											<tr style="text-align: center;">
												<th>ID</th>
												<th style="width:10%; vertical-align: middle; text-align: left;">Ação</th>
												<th style="width:47%; vertical-align: middle; text-align: left;">Centros de Custos/Cobranças</th>
												<th style="width:47%; vertical-align: middle; text-align: left;">Objeto de Custo</th>
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
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<!-- ESSE FOOTER É NECESSÁRIO? -->
<?php 
include "../../inc/footer.php";
?>
<script>
$(document).ready(function() {

	//Alertas Adicionar
	<?php 
	if(isset($_GET['s']) && $_GET['s'] == 1)
	{ 
		?>
		let id = <?php echo (isset($_GET['id'])) ? $_GET['id'] : "''"; ?>;
		var timerInterval;
		Swal.fire({
		  title: "Item adicionado com sucesso!",
		  type: "success",
		  timer: 5000,
		  confirmButtonClass: "btn btn-primary",
		  buttonsStyling: false,
		  onClose: function() {
			clearInterval(timerInterval);
		  }
		})
		<?php
	}
	if(isset($_GET['er']) && $_GET['er'] == 1) { ?>
			var timerInterval;
			Swal.fire({
			  title: "Registro duplicado ou incorreto.",
			  type: "error",
			  timer: 2200,
			  confirmButtonClass: "btn btn-danger",
			  buttonsStyling: false,
			  onClose: function() {
				clearInterval(timerInterval);
			  }
			})
			
	//Alertas Editar
		<?php 
	}  
	if(isset($_GET['se']) && $_GET['se'] == 1)
	{ 
		?>
		let id = <?php echo (isset($_GET['id'])) ? $_GET['id'] : "''"; ?>;
		var timerInterval;
		Swal.fire({
		  title: "Item atualizado com sucesso!",
		  type: "success",
		  timer: 5000,
		  confirmButtonClass: "btn btn-primary",
		  buttonsStyling: false,
		  onClose: function() {
			clearInterval(timerInterval);
		  }
		})
		<?php 
	} 
	if(isset($_GET['ere']) && $_GET['ere'] == 1) { 
		?>
		var timerInterval;
		Swal.fire({
		  title: "Não foi possível realizar a edição.",
		  type: "error",
		  timer: 2200,
		  confirmButtonClass: "btn btn-danger",
		  buttonsStyling: false,
		  onClose: function() {
			clearInterval(timerInterval);
		  }
		})	
	//Alertas Editar em Massa
		<?php 
	} 
	if(isset($_GET['sem']) && $_GET['sem'] == 1) 
	{ 
		?>
			let id = <?php echo (isset($_GET['id'])) ? $_GET['id'] : "''"; ?>;
			var timerInterval;
			Swal.fire({
			  title: "Edição em Massa com sucesso!",
			  type: "success",
			  timer: 5000,
			  confirmButtonClass: "btn btn-primary",
			  buttonsStyling: false,
			  onClose: function() {
				clearInterval(timerInterval);
			  }
			})
		<?php 
	} 
		if(isset($_GET['erem']) && $_GET['erem'] == 1) 
		{ 
		?>
			var timerInterval;
			Swal.fire({
			  title: "Falha na Edição em Massa.",
			  type: "error",
			  timer: 2200,
			  confirmButtonClass: "btn btn-danger",
			  buttonsStyling: false,
			  onClose: function() {
				clearInterval(timerInterval);
			  }
			})
				
		//Alertas Excluir
			<?php 
		} 
			if(isset($_GET['sd']) && $_GET['sd'] == 1) 
			{
			?>
				let id = <?php echo (isset($_GET['id'])) ? $_GET['id'] : "''"; ?>;
				var timerInterval;
				Swal.fire({
				  title: "Item excluído com sucesso!",
				  type: "success",
				  timer: 5000,
				  confirmButtonClass: "btn btn-primary",
				  buttonsStyling: false,
				  onClose: function() {
					clearInterval(timerInterval);
				  }
						})
				<?php 
			}
				if(isset($_GET['erd']) && $_GET['erd'] == 1) { 
				?>
						var timerInterval;
						Swal.fire({
						  title: "Não foi possível realizar a exclusão.",
						  type: "error",
						  timer: 2200,
						  confirmButtonClass: "btn btn-danger",
						  buttonsStyling: false,
						  onClose: function() {
							clearInterval(timerInterval);
						  }
						})
				<?php 
			} 
				?>
		
		//Filtro Datatable
		$('#filtro_datatable').click(function(e) {  
			  $('#datatable').DataTable().clear().draw();
			  
				let busca = $('#busca').val();
				
				// Send Post Request
				$.ajax({
					url: '../../ws_admin/operacoes/ws_listas/centro_custo/ws_gerenciar_listas.php',
					type: 'GET',
					contentType: "application/json",
					dataSrc : '',
					data: {
						'act': 'get_listas',
						busca: busca,
						'nome_operacao_min': <?php echo "'$nome_operacao_min'"; ?>
					}
				}).done(function (data) {
					let data_json = JSON.parse(data);
					$('#datatable').DataTable().clear().draw();
					$('#datatable').DataTable().rows.add(data_json); // Add new data
					$('#datatable').DataTable().columns.adjust().draw(); // Redraw the DataTable
				})
				.fail(function () {
					console.log('Failed');
				});
			});
		
	// Datatable
	$('#datatable').DataTable( {
		/* fixedHeader: {
			header: true,
			headerOffset: $('.header-navbar').outerHeight()
		}, */		
		"autoWidth": false,
		"bLengthChange": false,
		pageLength: 10,
		dom: 'Bfrtip',
		buttons: [
		  {
			extend: 'excelHtml5',
			text: 'Excel',
			className: 'excel_btn',
			titleAttr: 'Exportar para Excel',
			exportOptions: {
			  columns: ':visible'
			}
		  }
		],

		
		"search": {
		"regex": true
		},
		destroy: true,
		"processing" : false,
		"paging": true,
		"searching": false,
		"bFilter": false,
		"columnDefs":[
		   {"visible": false, "targets":0}
		],
		aaSorting: [[0, "desc"]], 
		"ajax" : {
				"url" : "../../ws_admin/operacoes/ws_listas/centro_custo/ws_gerenciar_listas.php",
				"type": 'GET',
				"contentType": "application/json",
				dataSrc : '',
				"data": { 
					'act': 'get_listas',
					'nome_operacao_min': <?php echo "'$nome_operacao_min'"; ?>
				} 
			}
		,
		"columns" :  
		[
		
			{"mRender": function ( data, type, row )  
				{
					return '<p style="width:20em;" id="id">'+ row.id + '</p>';
				}
			},
			{"mRender": function ( data, type, row ) 
				{
					return '<div class="invoice-action" style="margin-left:1rem; margin-right:1rem;margin-top: 1.3rem; width:12%;display: flex;justify-content: space-between;"> ' +
								'<a class="col-xs-12 col-md-6 col-lg-6 col-sm-6"><i class="fa fa-trash-o icones_click" style="font-size: 1.4em;" onclick="deletar_cc('+row.id+')"></i></a>'+
								'<a class="col-xs-12 col-md-6 col-lg-6 col-sm-6"><i class="icon-check icones_click" style="font-size: 1.3em; margin-left:1rem;" onclick="editar_cc('+row.id+')"></i></a>'+
							'</div>'
				}
			},
			{"mRender": function ( data, type, row ) 
				{
					return '<input class="form-control input_form_cei input_field" style="margin-top:0.5rem; margin-bottom: 0.5rem; margin-left:1rem; margin-right:1rem; width:96%" type="text" id="centro_custo_'+ row.id +'" name="centro_custo_'+ row.id +'" value="'+ row.centro_custo + '"/><p style="display: none;">'+ row.centro_custo +'</p>';
				}
			},
			{"mRender": function ( data, type, row ) 
				{
					return '<input class="form-control input_form_cei input_field" style="margin-top:0.5rem; margin-bottom: 0.5rem; margin-left:1rem; margin-right:1rem; width:96%" type="text" data="'+ row.id +'" id="objeto_custo_'+ row.id +'"name="objeto_custo_'+ row.id +'" value="'+ row.objeto_custo + '"><p style="display: none;">'+ row.objeto_custo +'</p>';
				}
			}
		]
		/*initComplete: function() {
			<!-- Div Scroll -->
			$('#datatable').wrap("<div id='scrooll_div'></div>");
			$('#scrooll_div').doubleScroll();
		}*/
	});
});

function adicionar_cc(id_op)
{
	var id_op = <?php echo $_GET['id'] ?>;
	var centro_custo = $('#centro_custo').val();
	var objeto_custo = $('#objeto_custo').val();
	var nome_operacao_min = $('#nome_operacao_min').val();
	
	$.ajax({
		url: '../../ws_admin/operacoes/ws_listas/centro_custo/ws_add.php',
		type: 'post',
		data:{
			'centro_custo': centro_custo,
			'objeto_custo': objeto_custo,
			'nome_operacao_min': nome_operacao_min
		},

	}).done(function(response) {
        if (response === "success") 
		{            
            window.location.href = 'gerenciar_lista_pb_cad_centro_custo.php?id=' + id_op + '&s=1';
			$('#datatable').DataTable().ajax.reload();
        } 
		
		if (response === "error")
		{
            window.location.href = 'gerenciar_lista_pb_cad_centro_custo.php?id=' + id_op + '&er=1';
			$('#datatable').DataTable().ajax.reload();
        }
	});
}

function editar_cc(id)
{
	var centro_custo = $('#centro_custo_'+id+'').val();
	var objeto_custo = $('#objeto_custo_'+id+'').val();
	var nome_operacao_min = <?php echo "'$nome_operacao_min'"; ?>;
	
	$.ajax({
		url: '../../ws_admin/operacoes/ws_listas/centro_custo/ws_upd.php',
		type: 'post',
		data:{
			'id': id,
			'centro_custo': centro_custo,
			'objeto_custo': objeto_custo,
			'nome_operacao_min': nome_operacao_min
		},
	}).done(function(response) {
        if (response.trim() == "success") 
		{    
			console.log('Sucesso')
			window.location.href = 'gerenciar_lista_pb_cad_centro_custo.php?id=<?php echo $id_op; ?>&se=1';
			// $('#datatable').DataTable().ajax.reload();
        } 
		
		if (response.trim() == "error")
		{
			console.log('error')
			window.location.href = 'gerenciar_lista_pb_cad_centro_custo.php?id=<?php echo $id_op; ?>&ere=1';
        }
	}); 
}

function editar_massa()
{
	var dados = [];
	
	$('input[id^="centro_custo_"]').each(function(){
		var id = $(this).attr('id').split('_')[2];
		var centro_custo = $(this).val();
		var objeto_custo = $('#objeto_custo_'+id).val();
		dados.push({
			id: id,
			centro_custo: centro_custo,
			objeto_custo: objeto_custo
		});
	});
	$.ajax({
        url: '../../ws_admin/operacoes/ws_listas/centro_custo/ws_upd_massa.php',
        type: 'post',
        data:{
            'dados': JSON.stringify(dados),
            'nome_operacao_min': <?php echo "'$nome_operacao_min'"; ?>
        },
    }).done(function(response) {
        if (response === "success") 
		{            
            window.location.href = 'gerenciar_lista_pb_cad_centro_custo.php?id=<?php echo $id_op; ?>&sem=1';
			$('#datatable').DataTable().ajax.reload();
        } 
		
		if (response === "error")
		{
            window.location.href = 'gerenciar_lista_pb_cad_centro_custo.php?id=<?php echo $id_op; ?>&erem=1';
			$('#datatable').DataTable().ajax.reload();
        }
	});
}


function deletar_cc(id)
{
	var centro_custo = $('#centro_custo_'+id+'').val();
	
	$.ajax({
		url: '../../ws_admin/operacoes/ws_listas/centro_custo/ws_canc.php',
		type: 'post',
		data:{
			'id': id,
			'centro_custo': centro_custo,
			'nome_operacao_min': <?php echo "'$nome_operacao_min'"; ?>
		},
	}).done(function(response) {
		
		console.log(response);
        if (response === "success") 
		{            
            window.location.href = 'gerenciar_lista_pb_cad_centro_custo.php?id=<?php echo $id_op; ?>&sd=1';
			$('#datatable').DataTable().ajax.reload();
        } 
		
		if (response === "error")
		{
            window.location.href = 'gerenciar_lista_pb_cad_centro_custo.php?id=<?php echo $id_op; ?>&erd=1';
			$('#datatable').DataTable().ajax.reload();
        }
	});
}

$('#file').on('change', function(){
		var numArquivos = $(this).get(0).files.length;
		if(numArquivos > 1)
		{
			$('#texto').text(numArquivos+' arquivos selecionados.');
		}
		else
		{
			$('#texto').text($(this).val());
		}
});

function atualizar_pagina()
{
	document.location.reload(true);
}

function exibe_form_inserir_ind()
{
	$('#form').css('display', 'block');
	$('#form_lote').css('display', 'none');
	//$('#ind').css('display', 'none');
	
}

function exibe_form_inserir_lote()
{
	$('#form_lote').css('display', 'block');
	$('#form').css('display', 'none');
	//$('#lote').css('display', 'none');
}

function esconder_form()
{
  $('#form').css('display', 'none');
  //$('#ind').css('display', 'block');
}

function esconder_form_lote()
{
	$('#form_lote').css('display', 'none');
	//$('#lote').css('display', 'block');
}

</script>


