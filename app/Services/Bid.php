<?php

namespace App\Services;

use App\Entities\CommonFees;
use App\Entities\LuxuryVehicle;
use App\Entities\CommonVehicle;
use App\Entities\CommonType;
use App\Entities\LuxuryFees;
use App\Entities\LuxuryType;

class Bid
{
    public function manageFee(float $price, string $type): array|null
    {
        $commonVehicleType = new CommonType();
        $luxuryVehicleType = new LuxuryType();

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

        return;
    }
}