<?php require_once("cabecalho.php");
    require_once("banco-categorias.php");
    require_once("banco-produto.php");

    $id = $_GET['id'];
    $produto = buscaProduto($conexao, $id);
    $categorias = listaCategorias($conexao);

    /* OPERADOR TERNÁRIO PARA USAR COM BOOLEAN, PARA CHECAR SE TRUE OU FALSE! */
    $usado = $produto['usado'] ? "checked='checked'" : "";
    
?>
    <h1>Alterando Produto</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6  mx-auto justify-content-center jumbotron">
                <form action="altera-produto.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id'];?>">

                    <?php include("produto-formulario-base.php"); ?>

                    <button type="submit" class="btn btn-primary col-sm-4 float-left" style="clear: both;">Alterar</button>
                </form>
            </div>
        </div>
    </div>
    
<?php include("rodape.php");?>