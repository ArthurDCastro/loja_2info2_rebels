<!-- ## !!ADICIONE O CABECALHO E O RODAPE PARA ESTA PAGINA -->
<?php

    require_once "cabecalho.php";
    require_once __DIR__."/../../models/CrudProdutos.php";

    $crud = new CrudProdutos();
    $categorias = $crud->getCategorias();

?>

<!-- Use o controladorProduto.php para encaminhar os dados do seu cadastro -->

<h2>Cadastro de Produtos</h2>
<form action="../../controllers/controladorProduto.php?produto=cadastrar" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="nome" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input name="quantidade" type="number" class="form-control" id="quantidade" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option>...</option>
            <?php foreach ($categorias as $cat): ?>
                <option><?= $cat ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

<?php

require_once "rodape.php";

?>