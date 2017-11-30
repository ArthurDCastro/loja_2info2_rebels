<!-- ## !!ADICIONE O CABECALHO E O RODAPE PARA A PAGINA -->
<?php

    require_once "cabecalho.php";

    session_start();

    $produto = $_SESSION['produto'];



?>
<h2>Editar Produtos</h2>
<form action="../../controllers/controladorProduto.php?produto=editar&editado=1&id=<?= $produto['id'] ?>" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="nome" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="" value="<?= $produto['nome'] ?>">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="" value="<?= $produto['preco'] ?>">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input name="qtd" type="number" class="form-control" id="quantidade" placeholder="" value="<?= $produto['qtd'] ?>">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option>Fruta</option>
            <option>Legume</option>
            <option>Hortaliça</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>
<?php

require_once "rodape.php";
session_destroy();

?>