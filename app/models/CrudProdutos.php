<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 16/11/2017
 * Time: 10:56
 */

require_once "Conexao.php";
require_once "Produto.php";

class CrudProdutos {

    private $conexao;
    private $produto;

    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }

    public function salvar(Produto $produto){
        $sql = "INSERT INTO tb_produtos (nome, preco, categoria, qtd) VALUES ('{$produto->nome}', {$produto->preco}, '{$produto->categoria}', {$produto->quantidade})";

        $this->conexao->exec($sql);
    }

    public function excluir(int $id){
        $sql = "DELETE FROM tb_produtos WHERE id = {$id};";

        $this->conexao->exec($sql);
    }

    public function editar(array $lista){
        $sql = "UPDATE tb_produtos SET nome = '{$lista['nome']}', preco = {$lista['preco']}, categoria = '{$lista['categoria']}', qtd = {$lista['qtd']} WHERE id = {$lista['id']}";

        $this->conexao->exec($sql);
    }

    public function buscarProduto($codigo){
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE id = {$codigo}");
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);

        return $produto;

    }

    public function getProdutos(){
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}

