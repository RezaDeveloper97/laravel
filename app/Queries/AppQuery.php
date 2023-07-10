<?php
namespace App\Queries;

use App\Models\App;

final class AppQuery
{
    public function all()
    {
        return App::all();
    }

    public function findById($id)
    {
        return App::find($id);
    }
}
