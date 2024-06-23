<?php

require_once "conexaopdo.php";

$conexao = novaConexao();

$sql = "SELECT * FROM cadastro WHERE id = :id";

$stmt = $conexao->prepare($sql);

if($stmt->execute([':id' => 1])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Codigo: " ; $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

?>