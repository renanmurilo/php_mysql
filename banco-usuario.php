<?php
    require_once("conecta.php");

function buscaUsuario($conexao, $email, $senha) {
    /* HASH MD5 PARA CRIPRITOGRAFAR A SENHA NO BANCO DE DADOS  */
    $senhaMd5 = md5($senha);
    /* MÉTODO PARA EVITAR O SQL INJECTOR, IMPEDIR USUARIO MAL INTENCIONADO DE ACESSAR SEM OS DADOS CORRETOSS */
    $email = mysqli_real_escape_string($conexao, $email);

    $query = "select * from usuarios where email='{$email}' and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}