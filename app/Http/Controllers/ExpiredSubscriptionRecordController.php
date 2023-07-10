<?php

namespace App\Http\Controllers;

use App\Repositories\ExpiredSubscriptionRepository;

class ExpiredSubscriptionRecordController extends Controller
{
    private $ExpiredSubscriptionRepository;

    public function __construct(ExpiredSubscriptionRepository $ExpiredSubscriptionRepository)
    {
        $this->ExpiredSubscriptionRepository = $ExpiredSubscriptionRepository;
    }

    public function getLatestRecord()
    {

        $ss = app(\App\Services\SubscriptionSynchronizationService::class);
        $ss->synchronizeSubscriptionStatus();

        $latestRecord = $this->ExpiredSubscriptionRepository->getLatestRecord();

        return response()->json($latestRecord);
    }
}
