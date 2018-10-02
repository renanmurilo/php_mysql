<?php require_once("cabecalho.php"); ?>
    <div class="row text-center justify-content-center pt-5">
        <div class="col-12 col-md-7">
            <h1>Contato</h1>
        </div>
    </div>

    <div class="row justify-content-center pt-4">
      <div class="col-12 col-md-7">
        <form action="envia-contato.php" method="post">
          <div class="row">
            <div class="col">
              <input type="text" name="nome" class="form-control">
            </div>
          </div>

          <div class="row mt-4">
            <div class="col">
              <input type="email" name="email" class="form-control">
            </div>
          </div>

          <div class="row mt-4">
            <div class="col">
              <textarea class="form-control" name="mensagem" rows="3"></textarea>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col text-center">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

<?php require_once("rodape.php"); ?>