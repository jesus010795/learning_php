<?php
namespace App\Enums;

enum PaymentMethodTypeEnum: int
{
    case CreditCard = 1;
    case BankAccount = 2;
}

?>
