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

        return $result;
    }
    public function destroy($id){
        try {
            $this->connection->beginTransaction();
        $stmt = $this->connection->prepare(
            "DELETE FROM withdrawals WHERE id=:id"
        );
        $stmt->execute([":id" => $id]);

        do {
            $response = readline("Seguro que quieres eliminar el elemento $id? (s/n): ");
        } while ($response != "s" && $response != "n");

        if($response === "n"){
            $this->connection->rollBack();
            echo "Eliminacion cancelada";
        } else {
            $this->connection->commit();
            echo "Eliminacion confirmada";
        }

        } catch (\Throwable $th) {
            echo "Ocurrio un error: " . $th->getMessage();
        }
        

    }
    // mandar el id,
    //mostrar los valores de la tabla que se pueden editar (columnas)
    //El ususario escogera la columna a editar
    //el usuario colocara el nuevo valor
    //se confirma el cambio
        //si no se cancela todo
    //se hace la actualizacion
    public function update($id){
        try {
            $this->connection->beginTransaction();
            $withdrawal_to_edit = $this->show($id);

            echo "Valores a editar: \n";
            foreach ($withdrawal_to_edit as $key => $value) {
                echo "$key \n";
            }
            $resp = readline("Escribe el valor a editar:  \n");
            echo "Antiguo valor: " . $withdrawal_to_edit["$resp"] . "\n";
            $new_value = readline("Escribe la nueva $resp \n");
            
            $stmt = $this->connection->prepare(
                "UPDATE withdrawals 
                SET date = NOW(), description = :new_value 
                WHERE withdrawals.id = :id"
            );

            $stmt->execute([
                ":new_value" => $new_value,
                ":id" => $id
            ]);

            echo"------------------------\n";
            echo"Antiguo valor: {$withdrawal_to_edit["$resp"]}\n";
            echo "Nuevo valor: $new_value \n";

            do {
                $tbc = readline("Estas seguro de querer hacer estos cambios? (s/n): \n");
            } while ($tbc != "s" && $tbc != "n");

            if ($tbc === "n"){
                $this->connection->rollBack();
                echo("Atualizacion cancelada \n");
            } else {
                $this->connection->commit();
                echo "Se han actualizado los valores";
            }

        } catch (\Throwable $th) {
            $this->connection->rollBack();
            echo "Ha ocurrido un error: " . $th->getMessage() . "\n";
        }
    }
}

// public function create(){}
// public function edit(){}

// Los 7 métodos que suelen tener los controladores:
// index: muestra la lista de todos los recursos.
// create: muestra un formulario para ingresar un nuevo recurso. (luego manda a llamar al método store).
// store: registra dentro de la base de datos el nuevo recurso.
// show: muestra un recurso específico.
// edit: muestra un formulario para editar un recurso. (luego manda a llamar al método update).
// update: actualiza el recurso dentro de la base de datos.
// destroy: elimina un recurso.

?>