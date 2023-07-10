<?php

namespace App\Repositories;

use App\Queries\AppQuery;

final class AppRepository
{
    public function __construct(
        private AppQuery $AppQuery
    ) {
    }

    public function all()
    {
        return $this->AppQuery->all();
    }

    public function findById($id)
    {
        return $this->AppQuery->findById($id);
    }
}