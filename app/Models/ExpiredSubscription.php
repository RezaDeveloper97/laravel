<?php

namespace App\Models;

class ExpiredSubscription extends BaseModel
{
    public function app()
    {
        return $this->belongsTo(App::class);
    }

}