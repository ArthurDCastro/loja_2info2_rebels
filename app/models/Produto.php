<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $quantidade;
    public $nome;
    public $preco;
    public $categoria;

    public function __construct($nome, $preco, $quantidade, $categoria){
        $this->quantidade = $quantidade;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }
}