<?php

require_once "conexaopdo.php";

$sql = "INSERT INTO cadastro 
(nome, nascimento, email, website, filhos, salario) VALUES (
    'Gabriel Filho',
    '1995-05-15',
    'gabegol@email.com',
    'http://fullstack.dev',
    0,
    3000.00
)";

$conexao = novaConexao();

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode(). "<br>";
    print_r($conexao->errorInfo());
}

?>
