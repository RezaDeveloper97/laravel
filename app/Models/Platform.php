<?php

namespace App\Models;

use App\Enums\PlatformsEnum;

class Platform extends BaseModel
{

    protected $casts = [
        'name' => PlatformsEnum::class
    ];
    
    public function apps()
    {
        return $this->hasMany(App::class);
    }

}