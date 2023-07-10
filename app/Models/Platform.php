<?php

namespace App\Models;

use App\Enums\PlatformsEnum;

class Platform extends BaseModel
{

    public function apps()
    {
        return $this->hasMany(App::class);
    }

}