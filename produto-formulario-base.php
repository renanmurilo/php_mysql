<div class="form-group">
    <label for="exampleInputEmail1" class="float-left">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?=$produto['nome'];?>">
</div>
<div class="form-group">
    <label for="exampleInputPassword1" class="float-left">Preço</label>
    <input type="number" class="form-control" name="preco" value="<?=$produto['preco'];?>">
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1" class="float-left">Descrição</label>
    <textarea class="form-control" name="descricao" rows="3"><?=$produto['descricao'];?></textarea>
</div>
<div class="form-check float-left">
    <input type="checkbox" class="form-check-input" name="usado" <?=$usado;?> value="true">
    <label class="form-check-label" for="exampleCheck1">Usado</label>
</div><br>
<div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control" name="categoria_id">
        <?php foreach($categorias as $categoria) {
            $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
            $selecao = $essaEhACategoria ? "selected='selected'" : "";
        ?>
            <option value="<?=$categoria['id'];?>" <?=$selecao;?>>
                <?=$categoria['nome'];?>
            </option>
        <?php   
    }
    ?>
    </select>
</div>