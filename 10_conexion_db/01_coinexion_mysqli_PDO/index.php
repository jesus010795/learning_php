<?php

use App\Controllers\IncomesController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodTypeEnum;

require ("vendor/autoload.php");

$incomes_controller = new IncomesController();

$incomes_controller->store([
    "payment_method" => PaymentMethodTypeEnum::BankAccount->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 10000,
    "description" => "Pago de salario",
]);

?>