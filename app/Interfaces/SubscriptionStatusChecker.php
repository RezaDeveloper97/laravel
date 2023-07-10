<?php
namespace App\Interface;

interface SubscriptionStatusChecker
{
    public function checkStatus(\App\Models\App $app): string;
}