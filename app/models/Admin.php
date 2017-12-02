<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/12/17
 * Time: 10:52
 */

require_once "User.php";

class Admin extends User {

    public function uparUsuarios(){
        $sql = "UPDATE tb_ SET nome = '{$lista['nome']}', preco = {$lista['preco']}, categoria = '{$lista['categoria']}', qtd = {$lista['qtd']} WHERE id = {$lista['id']}";

        $this->conexao->exec($sql);
    }
}