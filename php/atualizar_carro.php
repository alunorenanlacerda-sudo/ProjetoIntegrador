<?php
include 'conexao.php';
$id = $_POST['id'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$placa = $_POST['placa'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];

$sql = "UPDATE carros SET modelo='$modelo', marca='$marca', placa='$placa', cor='$cor', ano='$ano' WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    echo "<script>alert('Carro atualizado com sucesso!'); window.location.href = '../listar-carros.php';</script>";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();
?>