<?php

namespace App\Models;

class App extends BaseModel
{
    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}