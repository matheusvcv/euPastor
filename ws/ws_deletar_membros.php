<?php
header('Content-Type: application/json'); // Garante que o cliente receba JSON
include '../src/conexao.php';

if (isset($_POST['id']) && !empty($_POST['id'])) {
    try {
        $id = $_POST['id'];

        $sql = "DELETE FROM lista_membros WHERE id = ?";
        $statement = $conexao->prepare($sql);

        if ($statement === false) {
            echo json_encode(['status' => 'error', 'message' => 'Erro ao preparar a consulta.']);
            exit;
        }

        $statement->bind_param('i', $id);

        if ($statement->execute()) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erro ao executar a exclusão.']);
        }

        $statement->close();
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Exceção: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'ID inválido.']);
}
