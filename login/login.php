<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {
    $usuarios = [
        [
        "nome" => "Aluno1",
        "email" => "aluno1@gmail.com",
        "senha" => "123456"
        ],
        [
        "nome" => "Aluno2",
        "email" => "aluno2@gmail.com",
        "senha" => "413462"
        ],
        [
        "nome" => "Aluno3",
        "email" => "aluno3@gmail.com",
        "senha" => "867342"
        ]
    ];

    foreach($usuarios as $user) {
        $emailok = $email === $user['email'];
        $senhaok = $senha === $user['senha'];

        if($emailok && $senhaok) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $user['nome'];
            $expiration = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $user['nome'], $expiration);
            header('Location: index.php');
        }
    }

}



