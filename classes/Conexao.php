<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

class Conexao {

    const HOST      = "localhost";
    const NOMEBANCO = "bd_loja_2info2";
    const USUARIO   = "root";
    const SENHA     = "root";

    public function getConexao(){
        $conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);

        mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $conexao);

        //mostrar os erros laaa no banco
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexao;
    }

}

//teste conexao
//$con = new Conexao();
//$con->getConexao();