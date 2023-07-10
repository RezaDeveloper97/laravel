<?php
namespace App\Services;

use App\Repositories\AppRepository;
use App\Enums\PlatformsEnum;

class SubscriptionSynchronizationService
{
    public function __construct(
        protected AndroidSubscriptionStatusChecker $androidSubscriptionStatusChecker,
        protected iOSSubscriptionStatusChecker $iOSSubscriptionStatusChecker,
        private AppRepository $AppRepository
    ) {
    }

    public function synchronizeSubscriptionStatus()
    {
        $apps = $this->AppRepository->all();

        foreach ($apps as $app) {
            $platform = $app->platform;

            if ($platform->id == PlatformsEnum::Android->value) {
                $this->androidSubscriptionStatusChecker->checkStatus($app);
                dd($platform->id);
            } elseif ($platform->id == PlatformsEnum::IOS->value) {
                $this->iOSSubscriptionStatusChecker->checkStatus($app);
                dd($platform->id);
            }
        }   
    }
}