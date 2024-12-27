<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalsController
{
    private $connection;
    
    public function __construct() {
        $this->connection = Connection::get_instance()->get_database_instance();
    }
    
    public function store($data) {
        $stmt = $this->connection->prepare(
            "INSERT INTO withdrawals (payment_method, type, date, amount, description)
            VALUES ( :payment_method, :type, :date, :amount, :description)");

        $stmt->binValue(":payment_method", $data["payment_method"]);
        $stmt->binValue(":type", $data["type"]);
        $stmt->binValue(":date", $data["date"]);
        $stmt->binValue(":amount", $data["amount"]);
        $stmt->binValue(":description", $data["description"]);

        $stmt->execute($data);    

    }

    public function index(){
        $amount = 0;
        $description = "";
        
        // ------- FETCH DE TODAS LAS COLUMNAS
        $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
        $stmt->execute();

        $stmt->bindColumn("amount", $amount);
        $stmt->bindColumn("description", $description);

        while($row = $stmt->fetch()){
            echo "Gastaste $amount en $description \n";
        }

        //$resuts = $stmt->fetchAll();

        /*foreach ($resuts as $result) {
            echo "Gastaste {$result['amount']} en {$result['description']} <br>";
        }*/
        // ------- FETCH DE UNA COLUMNA EN ESPECIFICO
        /*$stmt = $this->connection->prepare("
                SELECT amount, description FROM withdrawals"
            );
        $stmt->execute(); 
        $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);
        // print_r($results);
        foreach ($results as $r) {
            echo "Gastaste $r pesos \n";
        }*/

    }
    public function show($id){
        $stmt = $this->connection->prepare(
            "SELECT * FROM withdrawals WHERE id=:id"
        );

        $stmt->execute([
            ":id" => $id
        ]);

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        print_r($result);

    }
}

// public function create(){}
// public function edit(){}
// public function update(){}
// public function destroy(){}

// Los 7 métodos que suelen tener los controladores:
// index: muestra la lista de todos los recursos.
// create: muestra un formulario para ingresar un nuevo recurso. (luego manda a llamar al método store).
// store: registra dentro de la base de datos el nuevo recurso.
// show: muestra un recurso específico.
// edit: muestra un formulario para editar un recurso. (luego manda a llamar al método update).
// update: actualiza el recurso dentro de la base de datos.
// destroy: elimina un recurso.

?>