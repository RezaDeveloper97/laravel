<?php

namespace App\Services;

use App\Models\App;

class AndroidSubscriptionStatusChecker implements \App\Interface\SubscriptionStatusChecker
{
    public function checkStatus(App $app): string
    {
        // پیاده‌سازی منطق بررسی وضعیت اشتراک برای اندروید
        return "And";
    }
}
