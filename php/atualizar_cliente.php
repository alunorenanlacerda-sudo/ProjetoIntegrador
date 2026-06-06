<?php
include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "UPDATE clientes SET nome='$nome', telefone='$telefone', email='$email' WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    echo "<script>alert('Cliente atualizado com sucesso!'); window.location.href = '../listar-clientes.php';</script>";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();
?>