<?php
include 'conexao.php';

// Pega o ID enviado pela URL
$id = $_GET['id'];

// Comando para deletar
$sql = "DELETE FROM colaboradores WHERE id = $id";

if ($conexao->query($sql) === TRUE) {
    echo "<script>
            alert('Colaborador excluído com sucesso!');
            window.location.href = '../listar-colaboradores.php';
          </script>";
} else {
    echo "Erro ao excluir: " . $conexao->error;
}

$conexao->close();
?>