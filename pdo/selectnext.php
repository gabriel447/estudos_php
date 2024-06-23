<?php

require_once "conexaopdo.php";

$conexao = novaConexao();

$sql = "SELECT * FROM cadastro WHERE id =?";
$stmt = $conexao->prepare($sql);

if($stmt->execute([1])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Codigo: "; 
    $codigoErro = $stmt->errorCode();
    echo $codigoErro. "<br>";
    print_r($stmt->errorInfo());
}

?>
