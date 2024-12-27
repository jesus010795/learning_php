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

        $stmt->bindColumn("amount", $amount);
        $stmt->bindColumn("description", $description);

        while($row = $stmt->fetch()){
            echo "Ganaste: $amount en $description \n";
        }
    }

    public function create(){}

    public function store($data){

        $stmt = $this->connection->prepare(
            "INSERT INTO incomes (payment_method, type, date, amount, description)
            VALUES (:payment_method, :type, :date, :amount, :description)"
            );

        $stmt->binValue(":payment_method", $data["payment_method"]);    
        $stmt->binValue(":type", $data["type"]);    
        $stmt->binValue(":date", $data["date"]);    
        $stmt->binValue(":amount", $data["amount"]);        
        $stmt->binValue(":description", $data["description"]);        

        $stmt->execute($data);    
        
    }
    public function show(){}

    public function edit(){}

    public function update(){}

    public function destroy($id){
        $this->connection->beginTransaction();
        
        $stmt = $this->connection->prepare(
            "DELETE FROM incomes WHERE id=:id"
        );
        $stmt->execute([
            ":id" => $id
        ]);

        $response = readline("Quieres ejecutar la eliminacion?: s/n ");
        
        if ($response == "n") {
            $this->connection->rollBack();
        } else {
            $this->connection->commit();
        }
    }
}
?>