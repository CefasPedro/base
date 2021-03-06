<?php

namespace Conecta;


class Conn extends \PDO {

    private static $instancia;

   /* public function Conn($dsn, $username = "", $password = "") {
        // O construtro abaixo é o do PDO
        parent::__construct($dsn, $username, $password);
    }*/

    public static function getInstance() {
        // Se o a instancia não existe eu faço uma
        if(!isset( self::$instancia )){
            try {
                self::$instancia = new Conn("mysql:host=localhost;dbname=contracheque", "root", "free11");
            } catch ( Exception $e ) {
                echo 'Erro ao conectar';
                exit ();
            }
        }
        // Se já existe instancia na memória eu retorno ela
        return self::$instancia;
    }
}
