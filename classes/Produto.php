<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    private $codigo;
    private $nome;
    private $preco;
    private $categoria;
    private $estoque;

    public function __construct($codigo, $nome, $preco, $categoria, $estoque){
        $this->codigo    = $codigo;
        $this->nome      = $nome;
        $this->preco     = $preco;
        $this->categoria = $categoria;
        $this->estoque   = $estoque;
    }

    public function cadastrar(){
        $sql = "INSERT INTO tb_produtos (nome, preco, categoria, estoque) VALUES ('$this->nome', $this->preco, '$this->categoria', $this->estoque)";

        $conexao = new Conexao();
        $conexao = $conexao->getConexao();
        $conexao->exec($sql);
    }

    public function getProdutos(){
        $sql = "SELECT * FROM tb_produtos";

        $conexao = new Conexao();
        $conexao = $conexao->getConexao();

        $consulta = $conexao->query($sql);
        $listaProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $listaProdutos;
    }
}

//nao facam isso em casa
$hanSolo = new Produto(null, 'Han Solo', 357.86, 'Action Figure', 10);
$hanSolo->cadastrar();
$lista = $hanSolo->getProdutos();

print_r($lista);