<?php
include 'conexao.php';

// Recebe os dados do formulário
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$ano = $_POST['ano'];
$cor = $_POST['cor'];
$placa = $_POST['placa'];
$cpf_dono = $_POST['cpf_dono']; // Aqui estava o erro!
$observacoes = $_POST['observacoes'];

// Comando SQL com as colunas corretas
$sql = "INSERT INTO carros (modelo, marca, ano, cor, placa, cpf_dono, observacoes) 
        VALUES ('$modelo', '$marca', '$ano', '$cor', '$placa', '$cpf_dono', '$observacoes')";

if ($conexao->query($sql) === TRUE) {
    echo "<script>
            alert('Carro cadastrado com sucesso!');
            window.location.href = '../listar-carros.php';
          </script>";
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

$conexao->close();
?>