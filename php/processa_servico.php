<?php
include 'conexao.php';

$nome_servico = $_POST['nome_servico'];
$descricao = $_POST['descricao'];
$preco_base = $_POST['preco_base'];
$tempo_estimado = $_POST['tempo_estimado'];

$sql = "INSERT INTO servicos (nome_servico, descricao, preco_base, tempo_estimado) 
        VALUES ('$nome_servico', '$descricao', '$preco_base', '$tempo_estimado')";

if ($conexao->query($sql) === TRUE) {
    echo "<script>
            alert('Serviço cadastrado com sucesso!');
            window.location.href = '../listar-servicos.php';
          </script>";
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

$conexao->close();
?>