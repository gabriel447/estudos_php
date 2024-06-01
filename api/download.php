<?php

session_start();
//session_destroy();

$arquivos = $_SESSION['arquivos'] ?? [];

$src = __DIR__ . '/files/';
$nome = $_FILES['arquivo']['name'];
$arquivo = $src . $nome;
$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp, $arquivo)) {
    echo "Arquivo válido e enviado com sucesso!\n";
    $arquivos[] = $nome;
    $_SESSION['arquivos'] = $arquivos;
}else {
    echo "Erro no upload do arquivo!\n";
}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach ($arquivos as $arquivo): ?>
    <li>
        <a href="./files/<?php $arquivo ?>">
            <?php echo $arquivo ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>