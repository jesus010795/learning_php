<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodTypeEnum;
use App\Enums\WithdrawalTypeEnum;

require ("vendor/autoload.php");


// $withdrawal_controler = new WithdrawalsController();
// $withdrawal_controler->store([
//     "payment_method" => PaymentMethodTypeEnum::CreditCard->value,
//     "type" => WithdrawalTypeEnum::Purchase->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 450,
//     "description" => "Compre  para michis",
// ]);


// $incomes_controller = new IncomesController();

// $incomes_controller->store([
//     "payment_method" => PaymentMethodTypeEnum::BankAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 3426,
//     "description" => "Viaje",
// ]);


$withdrawal_controler = new WithdrawalsController();
$withdrawal_controler->index();

// $withdrawal_controler = new WithdrawalsController();
// $withdrawal_controler->show(1);

$incomes_controller = new IncomesController();
// $incomes_controller->index();

$incomes_controller->destroy(3);


?>