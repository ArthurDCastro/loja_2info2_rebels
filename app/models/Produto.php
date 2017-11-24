<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $codigo;
    public $nome;
    public $preco;
    public $categoria;

    public function __construct($codigo, $nome, $preco, $categoria){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }
}