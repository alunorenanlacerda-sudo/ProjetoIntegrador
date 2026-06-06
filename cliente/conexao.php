<?php
$host='localhost';
$usuario='root';
$senha='';
$banco='jacare_mecanica';
$conn=new mysqli($host,$usuario,$senha,$banco);
if($conn->connect_error){ die('Erro: '.$conn->connect_error); }
?>
