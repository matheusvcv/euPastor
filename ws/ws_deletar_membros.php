<?php
include '../library/libs.php';
include '../src/conexao.php';

if(isset($_POST['id']) && $_POST['id'] != "")
{
	try
	{
		$id = $_POST['id'];

		$sql = "DELETE FROM lista_membros WHERE id = ?";

		$statement = $conexao->prepare($sql);

		if($statement === false)
		{

			die('Error');
		}

		$statement->bind_param('i', $id);

		if($statement->execute())
		{
			echo "Success";
		}
		else
		{
			echo "Error";
		}

		$statement->close();
	}
	catch(Exception $e)
	{
		echo "Error: " . $e->getMessage();
	}
}

?>