<?php

require_once "conexaopdo.php";

$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id = :id";

$stmt = $conexao->prepare($sql);

if($stmt->execute([':id' => 1])) {
    echo "Sucesso :)";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}

?>
