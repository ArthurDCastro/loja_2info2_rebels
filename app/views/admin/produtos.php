<?php

    require_once __DIR__."/../../models/CrudProdutos.php";
    $crud = new CrudProdutos();

    $listaProdutos = $crud->getProdutos();



    ## !!ADICIONE AQUI O CABECALHO DA PAGINA
    require_once "cabecalho.php";

    if ($_GET['produto'] == 'buscar'){

        $listaProdutos = $crud->buscarProdutos($_POST['busca']);

    }

?>

<!--Barra de busca-->
<div class="row">
    <div class="col-md-12">
        <form action="produtos.php?produto=buscar" method="post">
            <div class="input-group">
                <input name="busca" type="text" class="form-control" placeholder="digite o nome do produto" aria-describedby="basic-addon2">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="produtos.php" class="btn btn-danger" id="basic-addon2">Limpar</a>
                    <button class="btn btn-primary" id="basic-addon2">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Título</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listaProdutos as $produto): ?>
    <tr>
        <th scope="row"><?= $produto['id'] ?></th>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= $produto['qtd'] ?></td>
        <td><?= $produto['categoria'] ?></td>
        <td><a href="../../controllers/controladorProduto.php?produto=excluir&id=<?= $produto['id'] ?>">Excluir</a> | <a
                    href="../../controllers/controladorProduto.php?produto=editar&id=<?= $produto['id'] ?>">Editar</a></td>
    </tr>
   <?php endforeach; ?>

    </tbody>
</table>


<?php

require_once "rodape.php";

?>