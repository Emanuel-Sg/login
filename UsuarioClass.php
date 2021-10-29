<?php
require "conexao.php";

class usuario
{
    public function login($logar, $password)
    {
        global $conexao;

        $sql = "SELECT * FROM login WHERE login = :login AND password = :123456";
        $sql = $conexao->prepare($sql);
        $sql->bindValue("login", $logar);
        $sql->bindValue("password", md5($password));
        $sql->execute();

        if ($sql->rowcount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['idUser'] = $dado["idusuario"];
            return true;
        } else {
            return false;
        }
    }
}
