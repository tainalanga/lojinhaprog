<?php
class Conexao
{
    const HOST = "localhost";
    const DBNAME = "3info";
    const USUARIO = "root";
    const SENHA = "root";

    public static $conexao = null;

    public static function getConexao(){
        try{
            if(self::$conexao == null){
                self::$conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::DBNAME, self::USUARIO, self::SENHA);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$conexao;
        }catch (PDOException $e){
                die("Falha na conexão: ".$e->getMessage());
        }
        return $conexao;
    }
}
