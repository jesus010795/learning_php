<?php

namespace Database\PDO;

class Connection {

    private static $instance;
    private $connection;

    private function __construct()
    {
        $this->make_connection();
    }

    public static function get_instance($instance){
        if(! self::$instance instanceof self){
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function make_connection(){
        $server = "localhost";
        $database = "finanzas_personales";
        $username = "jesus";
        $password = "fiona";
        $dsn = "mysql:host=$server;dbname=$database";
        
        try{
            $conn = new \PDO($dsn, $username, $password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $statement = $conn->prepare("SET NAMES 'utf8'");
            $statement->execute();
        }
        catch(\PDOException $e){
            echo "La conexión ha fallado: " . $e->getMessage();
        }

        $this->connection = $conn;
    }

    public function get_database_instance(){
        return $this->connection;
    }


}

?>