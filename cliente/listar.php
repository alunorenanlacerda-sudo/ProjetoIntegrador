<?php 
include 'conexao.php';
// Apenas busca os dados aqui em cima, sem usar o "echo" ainda
$r = $conn->query("SELECT * FROM servicos");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Serviços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Lista de Serviços</h2>

        <?php 
        // Verifica se existe algum registro
        if ($r->num_rows > 0) {
            // Agora sim, dentro do "card", nós imprimimos os dados
            while($l = $r->fetch_assoc()){
                echo "<div style='margin-bottom: 15px; border-bottom: 1px solid #374151; padding-bottom: 10px;'>";
                echo "  <p style='margin-bottom: 10px;'><strong>#" . $l['id'] . "</strong> - " . $l['nome'] . "</p>";
                
                // Links estilizados para combinar com o tema
                echo "  <a href='editar.php?id=" . $l['id'] . "' style='color: #3b82f6; text-decoration: none; margin-right: 15px; font-weight: bold;'>Editar</a>";
                echo "  <a href='excluir.php?id=" . $l['id'] . "' style='color: #ef4444; text-decoration: none; font-weight: bold;'>Excluir</a>";
                
                echo "</div>";
            }
        } else {
            echo "<p style='text-align: center; color: #cbd5e1;'>Nenhum serviço cadastrado.</p>";
        }
        ?>

        <br>
        <a href="index.php" style="color: #22c55e; text-decoration: none; display: block; text-align: center; font-weight: bold;">Voltar ao Menu</a>

    </div>
</div>

</body>
</html>