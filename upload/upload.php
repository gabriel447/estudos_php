<?php

//esse codigo só funciona no htdocs pois tem html

print_r($_FILES);

if($_FILES && $_FILES['arquivo']) {
    $nome = $_FILES['arquivo']['name'];
    $arquivo = __DIR__ . '/' . $nome;
    $tmp = $_FILES['arquivo']['tmp_name'];
}

if(move_uploaded_file($tmp, $arquivo)) {
    echo "Arquivo válido e enviado com sucesso!\n";
}else {
    echo "Erro no upload do arquivo!\n";
}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>
