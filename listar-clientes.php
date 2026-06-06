<?php
// Conecta ao banco de dados
include 'php/conexao.php';

// Busca todos os clientes
$sql = "SELECT * FROM clientes";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes - Jacaré Mecânica</title>
    <link rel="stylesheet" href="css/teste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f4f4;">
    
    <header class="site-header" style="padding: 15px; background: #109951; text-align: center; color: white;">
        <h2>Jacaré Mecânica - Painel de Controle</h2>
        <a href="index.html" class="btn btn-light mt-2 fw-bold">Voltar ao Site</a>
    </header>

    <div class="container mt-5">
        <h2 class="main-title">Clientes Cadastrados</h2>
        <a href="cadastro-clientes.html" class="btn btn-success mb-3">+ Novo Cliente</a>

        <table class="table table-striped table-bordered shadow-sm bg-white">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultado->num_rows > 0) {
                    while($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["cpf"] . "</td>";
                        echo "<td>" . $row["telefone"] . "</td>";
                        echo "<td>
                                <a href='editar-cliente.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a>
                                <a href='php/deletar_cliente.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Nenhum cliente encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>