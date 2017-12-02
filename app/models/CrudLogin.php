<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/12/17
 * Time: 10:36
 */

require_once "Conexao.php";
require_once "User.php";

class CrudLogin {

    private $conexao;

    function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    public function login($nick, $senha){

        $consulta = $this->conexao->query("SELECT senha FROM tb_user WHERE nick = {$nick}");
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);



        return $produto;
    }

    public function getUsuario($nick){
        $sql = "SELECT * FROM tb_user WHERE nick = {$nick};";

        $this->conexao->exec($sql);
    }

    public function cadastrar(User $user){
        $sql = "INSERT INTO tb_user (nick, senha, tipo, email) VALUES ('{$user->nick}', {$user->senha}, '{$user->tipo}', {$user->email})";

        $this->conexao->exec($sql);
    }

    public function uparUsuarios(User $admin, User $user){

        if ($admin->tipo == 'admin'){
            $sql = "UPDATE tb_user SET tipo = 'admin' WHERE nick = {$user->nick}";

            $this->conexao->exec($sql);

            return true;
        } else {
            return false;
        }

    }
}

$crud = new CrudLogin();
print_r($crud->login('lukduk', 'asdzxc'));