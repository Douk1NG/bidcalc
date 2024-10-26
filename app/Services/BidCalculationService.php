<?php

namespace App\Services;

use App\Entities\FeeCalculator;
use App\Entities\Type;
use App\Entities\Vehicle;
use App\Entities\FeesTypes;

class BidCalculationService
{
    public function get(float $price, string $type): ?array
    {
        $calculator = new FeeCalculator();

        $commonVehicle = new Vehicle(
            0,
            new Type(
                'common',
                new FeesTypes(
                    minimum: 10,
                    maximum: 50,
                    percent: 0.02
                )
            )
        );

        $luxuryVehicle = new Vehicle(
            0,
            new Type(
                'luxury',
                new FeesTypes(
                    minimum: 25,
                    maximum: 200,
                    percent: 0.04

                )
            )
        );

        if ($type === $commonVehicle->getType()->getName()) {
            $commonVehicle->setPrice($price);
            $fees = $calculator->calculateFees($commonVehicle);
            $total = $calculator->sumFees($fees) + $price;

            return [
                'fees' => $fees,
                'total' => $total
            ];
        }

        if ($type === $luxuryVehicle->getType()->getName()) {
            $luxuryVehicle->setPrice($price);
            $fees = $calculator->calculateFees($luxuryVehicle);
            $total = $calculator->sumFees($fees) + $price;

            return [
                'fees' => $fees,
                'total' => $total
            ];
        }

        return null;
    }
}
