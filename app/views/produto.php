<?php

    require_once "../models/CrudProdutos.php";

    $crud = new CrudProdutos();

    //seguranca
    $codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT); //consulte os slides.

    $produto = $crud->buscarProduto($codigo);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <script src="../../assets/vendor/jquery/jquery.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="../../assets/css/ifc-style.css">

    <title>Lojão do IFC</title>


</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="../../assets/imagens/logo.png" alt="" width="70px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../app/views/admin/produtos.php">Área do admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container product-content my-5">

    <!-- Page Features -->
    <div class="row">

        <div class="col-md-5">
            <img src="http://placehold.it/600x525" alt="" class="img-fluid">
        </div>

        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <h2><?= $produto['nome']; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class="badge badge-primary"><?= $produto['categoria']; ?></span>
                    <?php if ($produto['qtd'] > 0): ?>
                        <span class="badge badge-success">
                            Disponível
                        </span>
                    <?php else: ?>
                    <span class="badge badge-danger">
                            Indisponível
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <!-- end row -->

            <div class="row description-wrapper">
                <div class="col-md-12">
                    <p class="description">Consectetur adipisicing elit. Accusantium ad, adipisci commodi delectus ea eius eligendi expedita in ipsum magnam modi mollitia nisi, obcaecati perspiciatis quae quo repellendus temporibus velit.
                    </p>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-md-12 bottom-rule">
                    <h2 class="product-price">R$<?= $produto['preco']; ?></h2>
                </div>
            </div>
            <!-- end row -->

            <div class="row add-to-cart">
                <div class="col-sm-2 product-qty">
                    <label>First</label> <!-- purely semantic -->
                    <div class="form-control input-sm center merge-bottom-input" name="first">0</div>

                    <div class="btn-group btn-block" role="group" aria-label="plus-minus">
                        <button type="button" class="btn btn-sm btn-danger minus-button merge-top-left-button" disabled="disabled"><span class="glyphicon glyphicon-minus"></span></button>
                        <button type="button" class="btn btn-sm btn-success plus-button merge-top-right-button"><span class="glyphicon glyphicon-plus"></span></button>
                    </div><!-- end button group -->
                </div>
            </div><!-- end row -->

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Instituto Federal Catarinense de Educação, Ciência e Tecnologia</p>
    </div>
    <!-- /.container -->
</footer>

<script>
    $(document).ready(function(){

        $('.minus-button').click( function(e){

        // change this to whatever minimum you'd like
        const minValue = 0;

        const currentInput = $(e.currentTarget).parent().prev()[0];

        let minusInputValue = $(currentInput).html();

            if (minusInputValue > minValue) {
                minusInputValue --;
                $($(e.currentTarget).next()).removeAttr('disabled');
                $(currentInput).html(minusInputValue);

                if (minusInputValue <= minValue) {
                    $(e.currentTarget).attr('disabled', 'disabled');
                }
            }
        }
        );

        $('.plus-button').click( function(e) {

            const maxValue = 10;

            const currentInput = $(e.currentTarget).parent().prev()[0];

            let plusInputValue = $(currentInput).html();

            if (plusInputValue < maxValue) {
                plusInputValue ++;
                $($(e.currentTarget).prev()[0]).removeAttr('disabled');
                $(currentInput).html(plusInputValue);

                if (plusInputValue >= maxValue) {
                    $(e.currentTarget).attr('disabled', 'disabled');
                }
            }
        }
        );
    };
</script>

</body>

</html>
