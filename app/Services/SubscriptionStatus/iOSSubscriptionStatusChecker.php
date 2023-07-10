<?php

namespace App\Services;

use App\Models\App;

class iOSSubscriptionStatusChecker implements \App\Interface\SubscriptionStatusChecker
{
    public function checkStatus(App $app): string
    {
        // پیاده‌سازی منطق بررسی وضعیت اشتراک برای iOS
        return "Ios";
    }
}