<?php

require_once "conexaopdo.php";

$conexao = novaConexao();

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);

if ($stmt->bindValue(':id', 1)) {
    if ($stmt->execute()) {
        $resultado = $stmt->fetch();
        print_r($resultado);
    } else {
        echo "Erro na execução: ";
        echo "Codigo: ". $stmt->errorCode(). "<br>";
        print_r($stmt->errorInfo());
    }
}

?>
