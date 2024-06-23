<?php

require_once "conexaopdo.php";

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

print_r(get_class_methods($stmt));

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Codigo: " ; $stmt->errorCode(). "<br>";
    print_r($stmt->errorInfo());
}

?>
