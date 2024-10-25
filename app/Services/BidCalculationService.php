<?php

namespace App\Services;

use App\Entities\Common\CommonFees;
use App\Entities\Common\CommonType;
use App\Entities\Common\CommonVehicle;
use App\Entities\Luxury\LuxuryFees;
use App\Entities\Luxury\LuxuryType;
use App\Entities\Luxury\LuxuryVehicle;

class BidCalculationService
{
    public function get(float $price, string $type): ?array
    {
        $commonVehicleType = new CommonType;
        $luxuryVehicleType = new LuxuryType;

        if ($type === $commonVehicleType->get()) {
            $vehicle = new CommonVehicle($price);
            $fees = new CommonFees($vehicle);

            return $fees->get();
        }

        if ($type === $luxuryVehicleType->get()) {
            $luxury = new LuxuryVehicle($price);
            $fees = new LuxuryFees($luxury);

            return $fees->get();
        }

        return null;
    }
}
