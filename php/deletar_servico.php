<?php
include 'conexao.php';
$id = $_GET['id'];
$conexao->query("DELETE FROM servicos WHERE id = $id");
echo "<script>alert('Excluído com sucesso!'); window.location.href = '../listar-servicos.php';</script>";
?>