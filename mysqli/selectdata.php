<?php

require_once "conexao.php";

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
    print_r($registros);
} else {
    echo "Erro: ". $conexao->error;
}

$conexao->close();

?>
