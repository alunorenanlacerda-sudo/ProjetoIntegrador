<?php
$host = 'localhost';
$db = 'jacare_mecanica';
$port = '3306';
$user = 'root';
$pass = ''; 


try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
    // Configura o PDO para lançar exceções em caso de erro
	//echo nl2br("conectando \n") ;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

?>