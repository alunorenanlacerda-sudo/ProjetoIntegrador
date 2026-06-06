<?php
include 'conexao.php';
$id = $_GET['id'];
$conexao->query("DELETE FROM clientes WHERE id = $id");
echo "<script>alert('Excluído com sucesso!'); window.location.href = '../listar-clientes.php';</script>";
?>