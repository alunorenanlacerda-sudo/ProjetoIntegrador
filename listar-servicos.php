<?php
// Conecta ao banco de dados
include 'php/conexao.php';

// Busca todos os serviços
$sql = "SELECT * FROM servicos";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Serviços - Jacaré Mecânica</title>
    <link rel="stylesheet" href="css/teste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f4f4;">
    
    <header class="site-header" style="padding: 15px; background: #109951; text-align: center; color: white;">
        <h2>Jacaré Mecânica - Painel de Controle</h2>
        <a href="index.html" class="btn btn-light mt-2 fw-bold">Voltar ao Site</a>
    </header>

    <div class="container mt-5">
        <h2 class="main-title">Serviços Cadastrados</h2>
        <a href="cadastro-servico.html" class="btn btn-success mb-3">+ Novo Serviço</a>

        <table class="table table-striped table-bordered shadow-sm bg-white">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Serviço</th>
                    <th>Preço Base (R$)</th>
                    <th>Tempo Estimado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultado->num_rows > 0) {
                    while($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nome_servico"] . "</td>";
                        // Formata o preço para o padrão brasileiro/português com vírgula
                        echo "<td>R$ " . number_format($row["preco_base"], 2, ',', '.') . "</td>";
                        echo "<td>" . $row["tempo_estimado"] . "</td>";
                        echo "<td>
                                <a href='editar-servico.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a>
                                <a href='php/deletar_servico.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Nenhum serviço encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>