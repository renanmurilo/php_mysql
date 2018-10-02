<?php require_once("cabecalho.php");
    require_once("logica-usuario.php");
?>
    <h1>Bem vindo!</h1>
    <!-- IF CASO USUARIO LOGADO FORM DESAPARECE, SE NÃO LOGADO PERMANECE -->
    <?php if(usuarioEstaLogado()) { ?>
        <p class="text-success">Você está logado como <?= usuarioLogado(); ?>. <a href="logout.php">Deslogar</a></p>
    <?php } else { ?>

        <div class="container">
            <form action="login.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-7 col-xl-5 text-center">
                        <div class="fdb-box fdb-touch">
                            <div class="row mt-4">
                                <div class="col">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <input type="password" class="form-control mb-1" name="senha" placeholder="Password">
                                    <p class="text-right"><a href="#">Recover Password</a></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <button class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php }?>
    

<?php include("rodape.php");?>