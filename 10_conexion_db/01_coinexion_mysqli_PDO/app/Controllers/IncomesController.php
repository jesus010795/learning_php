<?php

namespace App\Controllers;

use Database\PDO\Connection;

class IncomesController
{
    public function index(){}

    public function create(){}

    public function store($data){

        $connection = Connection::get_instance()->get_database_instance();
        $stmt = $connection->prepare(
            "INSERT INTO incomes (payment_method, type, date, amount, description)
            VALUES (:payment_method, :type, :date, :amount, :description)"
            );

        $stmt->execute($data);    
        
    }
    public function show(){}

    public function edit(){}

    public function update(){}

    public function destroy(){}
}
?>