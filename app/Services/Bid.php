<?php

namespace App\Services;

use App\Entities\CommonFees;
use App\Entities\CommonType;
use App\Entities\CommonVehicle;
use App\Entities\LuxuryFees;
use App\Entities\LuxuryType;
use App\Entities\LuxuryVehicle;

class Bid
{
    public function getFee(float $price, string $type): ?array
    {
        $commonVehicleType = new CommonType;
        $luxuryVehicleType = new LuxuryType;

        if ($type === $commonVehicleType->getType()) {
            $vehicle = new CommonVehicle($price);
            $fees = new CommonFees($vehicle);

            return $fees->getFees();
        }

        if ($type === $luxuryVehicleType->getType()) {
            $luxury = new LuxuryVehicle($price);
            $fees = new LuxuryFees($luxury);

            return $fees->getFees();
        }

        return null;
    }
}
