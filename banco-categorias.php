<?php
    require_once("conecta.php");
/* FUNÇÃO PARA LISTAR CATEGORIAS RADIUS QUE FOI IMPLEMENTADA NA TELA PARA ADICIONAR PRODUTOS */
function listaCategorias($conexao) {
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
    }
    return $categorias;
}