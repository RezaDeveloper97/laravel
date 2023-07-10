<?php
namespace App\Enums;

enum SubscriptionsStatusEnum: int
{
    case Pending = 1;
    case Active = 2;
    case Expired = 3;
}