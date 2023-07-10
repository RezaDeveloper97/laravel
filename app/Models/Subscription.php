<?php

namespace App\Models;

class Subscription extends BaseModel
{
    public function app()
    {
        return $this->belongsTo(App::class);
    }

}