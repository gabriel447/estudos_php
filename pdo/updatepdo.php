<?php

require_once "conexaopdo.php";

$sql = "UPDATE cadastro
SET nome =?, 
nascimento =?, 
email =?, 
website =?, 
filhos =?, 
salario =?
WHERE id =?";


$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gmail.com',
    'http://',
    0,
    12000,
    1
]);

if($resultado) {
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}

?>