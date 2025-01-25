<?php

namespace App\Controllers;

use Database\PDO\Connection;

class IncomesController
{
    private $connection;
    public function __construct()
    {
        $this->connection = Connection::get_instance()->get_database_instance();
    }

    public function index(){
        $amount = 0;
        $description = "";

        $stmt = $this->connection->prepare(
            "SELECT * FROM incomes"
        );
        $stmt->execute();
        $results = $stmt->fetchAll();

        // var_dump($results);

        require("../resources/views/incomes/index.php");
    }

    public function create(){
        require("../resources/views/incomes/create.php");
    }

    public function store($data){

        $stmt = $this->connection->prepare(
            "INSERT INTO incomes (payment_method, type, date, amount, description)
            VALUES (:payment_method, :type, :date, :amount, :description)"
            );

        // $stmt_data = [
        //     "payment_method", $data["payment_method"],
        //     "type", $data["type"],
        //     "date", $data["date"],
        //     "amount", $data["amount"],
        //     "description", $data["description"]
        // ];
        
        $date = $data["date"]." ".date("H:i:s");

        $stmt->bindValue(":payment_method", $data["payment_method"]);    
        $stmt->bindValue(":type", $data["type"]);    
        $stmt->bindValue(":date", $date);    
        $stmt->bindValue(":amount", $data["amount"]);        
        $stmt->bindValue(":description", $data["description"]);        

        $stmt->execute();    

        header("location: incomes");  
  
    }

    public function show($id){
        try {
            $stmt = $this->connection->prepare(
                "SELECT * FROM incomes WHERE id=:id"
            );
    
            $stmt->execute([
                ":id" => $id
            ]);
    
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            // print_r($result);
            return $result;
        } catch (\Throwable $th) {
            echo "Ha ocurrido un error: " . $th->getMessage() . "\n";
        }
    }

    public function edit(){}

    public function update($data, $id ){
        try {
            $this->connection->beginTransaction();
            $stmt = $this->connection->prepare(
                "UPDATE incomes 
                SET 
                payment_method = :payment_method,
                type = :type,
                date = NOW(), 
                amount = :amount,
                description = :description
                WHERE incomes.id = :id"
            );
            
            $stmt->execute([
                ":id" => $id,
                ":payment_method" => $data["payment_method"],
                ":type" => $data["type"],
                ":amount" => $data["amount"],
                ":description" => $data["description"],
            ]);

            // do {
            //     $tbc = readline("Estas seguro de querer hacer estos cambios? (s/n): \n");
            // } while ($tbc != "s" && $tbc != "n");

            // if ($tbc === "n"){
            //     $this->connection->rollBack();
            //     echo("Atualizacion cancelada \n");
            // } else {
            //     $this->connection->commit();
            //     echo "Se han actualizado los valores";
            // }

        } catch (\Throwable $th) {
            $this->connection->rollBack();
            echo "Ha ocurrido un error: " . $th->getMessage() . "\n";
        }
    }

    public function destroy($id){
        try {
            $this->connection->beginTransaction();
        
            $stmt = $this->connection->prepare(
                "DELETE FROM incomes WHERE id=:id"
            );
            $stmt->execute([
                ":id" => $id
            ]);

            do {
                $response = readline("Quieres ejecutar la eliminacion? (s/n): ");
            } while ($response != "s" && $response != "n");
            
            if ($response === "n") {
                $this->connection->rollBack();
                echo "Sql no ejecutado \n";
            } else {
                $this->connection->commit();
                echo "Eliminacion confirmada \n";

            }
        } catch (\Throwable $th) {
            $this->connection->rollBack();
            echo "Ha ocurrido un error: " . $th->getMessage() . "\n";
        }
        
    }
}
?>