<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/12/17
 * Time: 10:42
 */


class User{
    public $user;
    public $senha;
    public $tipo;
    public $email;

    function __construct($user, $senha, $tipo, $email){
        $this->user  = $user;
        $this->senha = $senha;
        $this->tipo  = $tipo;
        $this->email = $email;
    }

    public function verificaAdmin($tipo){

        if ($tipo == 'admin'){
            return true;
        } else {
            return false;
        }

    }
}