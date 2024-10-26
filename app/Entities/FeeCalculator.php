<?php

namespace App\Entities;

class FeeCalculator extends Fees
{

    public function calculateFees(Vehicle $vehicle): array
    {
        $feeTypes = $vehicle->getType()->getFeesTypes();
        $maximum = $feeTypes->getMaximum();
        $minimum = $feeTypes->getMinimum();
        $percent = $feeTypes->getPercent();
        $price = $vehicle->getPrice();

        $association = $this->AssociationFee($price);
        $basic = $this->BasicBuyerFee($price, $minimum, $maximum);
        $special = $this->SpecialFee($price, $percent);
        $storage = $this->StorageFee();

        return [
            'Association' => $association,
            'Basic' => $basic,
            'Special' => $special,
            'Storage' => $storage
        ];
    }

    public function sumFees(array $fees): float
    {
        return array_sum($fees);
    }
}
