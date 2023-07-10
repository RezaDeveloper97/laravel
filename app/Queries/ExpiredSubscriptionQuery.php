<?php
namespace App\Queries;

use App\Models\ExpiredSubscription;

final class ExpiredSubscriptionQuery
{
    public function all()
    {
        return ExpiredSubscription::all();
    }

    public function findById($id)
    {
        return ExpiredSubscription::find($id);
    }

    public function getLatestRecord()
    {
        return ExpiredSubscription::latest()->first();
    }
}
