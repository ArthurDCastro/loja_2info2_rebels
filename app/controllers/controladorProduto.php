<?php

// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
// Use o método $_GET para obter informações vindas de outras páginas.

//faça um require_once para o arquivo Produto.php
require_once "../models/Produto.php";
//faça um require_once para o arquivo CrudProduto.php
require_once "../models/CrudProdutos.php";


//quando um valor da URL for igual a cadastrar faça isso
if ($_GET['produto']  == 'cadastrar'){

    $produto = new Produto($_POST['nome'],$_POST['preco'],$_POST['quantidade'], $_POST['categoria']);
    //crie um objeto $crud
    $crud = new CrudProdutos();
    $crud->salvar($produto);

    header("Location: ../views/admin/produtos.php");
}

//quando um valor da URL for igual a editar faça isso
if ( $_GET['produto'] == 'editar'){

    //algoritmo para editar
    if(!$_GET['editado']){
        session_start();

        $crud = new CrudProdutos();

        $_SESSION['produto'] = $crud->buscarProduto($_GET['id']);


        header("Location: ../views/admin/editar-produto.php");

    } elseif ($_GET['editado']){
        $crud = new CrudProdutos();

        $editado = [
            'nome'      => $_POST['nome'],
            'categoria' => $_POST['categoria'],
            'preco'     => $_POST['preco'],
            'qtd'       => $_POST['qtd'],
            'id'        => $_GET['id']
        ];


        $crud->editar($editado);

        session_destroy();
        header("Location: ../views/admin/produtos.php");
    }

    //redirecione para a página de produtos

}

//quando um valor da URL for igual a excluir faça isso
if ($_GET['produto'] == 'excluir'){

    //algoritmo para excluir
    $crud = new CrudProdutos();
    $crud->excluir($_GET['id']);

    //redirecione para a página de produtos
    header("Location: ../views/admin/produtos.php");

}

