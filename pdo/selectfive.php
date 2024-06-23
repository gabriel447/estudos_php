<?php

require_once "conexaopdo.php";

$conexao = novaConexao();

$stmt = $conexao->prepare("SELECT * FROM cadastro WHERE id = :id");

$stmt->bindValue(':id', 1, PDO::PARAM_INT);

if ($stmt->execute()) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: ";
    echo $stmt->errorCode(). "<br>";
    print_r($stmt->errorInfo());
}

?>
