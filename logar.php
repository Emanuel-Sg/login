<?php

if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {

    require 'conexao.php';
    require 'UsuarioClass.php';

    $user = new Usuario;

    $logar = addslashes($_POST['login']);
    $password = addslashes($_POST['password']);

    if ($user->login($logar, $password) == true) {
        if (isset($_SESSION['idUser'])) {
            header("Location: index.php");
        }
    }
} else {
    header("Location: loginpage.php");
}
