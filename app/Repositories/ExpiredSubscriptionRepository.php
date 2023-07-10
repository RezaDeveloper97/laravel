<?php

namespace App\Repositories;

use App\Queries\ExpiredSubscriptionQuery;

final class ExpiredSubscriptionRepository
{

    public function __construct(
        private ExpiredSubscriptionQuery $ExpiredSubscriptionQuery
    ) {
    }

    public function all()
    {
        return $this->ExpiredSubscriptionQuery->all();
    }

    public function findById($id)
    {
        return $this->ExpiredSubscriptionQuery->findById($id);
    }

    public function getLatestRecord()
    {
        return $this->ExpiredSubscriptionQuery->getLatestRecord();
    }
}