 <?php
session_start();
require 'conecta.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    // Prepared Statement
    $sql = "SELECT * FROM usuario WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($usuario && $senha == $usuario['senha']) {
        // Login com sucesso
        $_SESSION['usuario_id']   = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        
        header("Location: admin.php");
        exit;
    } else {
       echo "E-mail ou senha inválidos.";
    }

?>