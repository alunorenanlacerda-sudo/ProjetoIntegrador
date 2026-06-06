<?php
include 'conexao.php';
$id = $_POST['id'];
$nome_servico = $_POST['nome_servico'];
$descricao = $_POST['descricao'];
$preco_base = $_POST['preco_base'];
$tempo_estimado = $_POST['tempo_estimado'];

$sql = "UPDATE servicos SET nome_servico='$nome_servico', descricao='$descricao', preco_base='$preco_base', tempo_estimado='$tempo_estimado' WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    echo "<script>alert('Serviço atualizado com sucesso!'); window.location.href = '../listar-servicos.php';</script>";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();
?>