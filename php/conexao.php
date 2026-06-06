<?php
// Configurações do servidor local XAMPP
$servidor = "localhost";
$usuario = "root";       // O XAMPP usa 'root' como padrão
$senha = "";             // O XAMPP não tem senha por padrão
$banco = "jacare_mecanica"; // O nome do banco que criamos no Passo 3

// Criando a conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Checando se deu erro
if ($conexao->connect_error) {
    die("A conexão falhou: " . $conexao->connect_error);
}
// Se chegou aqui, a conexão foi um sucesso!
?>