<?php
include 'php/conexao.php';
$id = $_GET['id'];
$resultado = $conexao->query("SELECT * FROM servicos WHERE id = $id");
$servico = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f4f4;">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="mb-4">Editar Serviço: <?php echo $servico['nome_servico']; ?></h3>
            <form action="php/atualizar_servico.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $servico['id']; ?>">
                
                <div class="mb-3">
                    <label>Nome do Serviço:</label>
                    <input type="text" class="form-control" name="nome_servico" value="<?php echo $servico['nome_servico']; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label>Descrição:</label>
                    <textarea class="form-control" name="descricao" rows="3"><?php echo $servico['descricao']; ?></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Preço Base (R$):</label>
                        <input type="number" step="0.01" class="form-control" name="preco_base" value="<?php echo $servico['preco_base']; ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Tempo Estimado:</label>
                        <input type="text" class="form-control" name="tempo_estimado" value="<?php echo $servico['tempo_estimado']; ?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="listar-servicos.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>