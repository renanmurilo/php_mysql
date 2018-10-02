<?php require_once("cabecalho.php");
    require_once("banco-categorias.php");
    require_once("logica-usuario.php");
   
    verificaUsuario();
    $produto = array('nome' => '', 'descricao' => '', 'preco' => '', 'categoria_id' => '1');
    $usado = '';
    $categorias = listaCategorias($conexao);
    
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6  mx-auto justify-content-center jumbotron">
                <form action="adiciona-produto.php" method="post">
                    <?php include('produto-formulario-base.php'); ?>

                    <button type="submit" class="btn btn-primary col-sm-4 float-left" style="clear: both;">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    
<?php include("rodape.php");?>