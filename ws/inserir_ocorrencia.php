<?php
	include '../src/conexao.php';

	if (isset($_POST['id_membro']) && $_POST['id_membro'] != "") {

		$id_membro = $_POST['id_membro'];
		$titulo = $_POST['titulo'];
		$ocorrencia = $_POST['ocorrencia'];

		$sql = "
			INSERT INTO ocorrencias (
				id_membro,
				titulo,
				ocorrencia,
				data_registro
			)
			VALUES (
				?,
				?,
				?,
				Now()
			)
		";

		$statement = $conexao->prepare($sql);

		if (!$statement) {
			echo "error: " . $conexao->error;
			exit;
		}

		$statement->bind_param('iss', $id_membro, $titulo, $ocorrencia);

		if ($statement->execute()) {
			echo "success";
		} else {
			echo "error: " . $statement->error;
		}

		$statement->close();
		$conexao->close();

	} else {
		echo "error: dados não enviados corretamente";
	}
?>
