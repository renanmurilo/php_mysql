<?php require_once("cabecalho.php");
    require_once("banco-produto.php");
    require_once("logica-usuario.php");

/* SINTAXE PARA REMOVER PRODUTO  */
    $id = $_POST['id'];
    removeProduto($conexao, $id);

    $_SESSION['success'] = "Produto removido com sucesso.";

    /* SEMPRE DEPOIS QUE FIZER UM LOCATION, COLOCAR UM DIE() */
    header("location: produto-lista.php");
    die();
    ?>