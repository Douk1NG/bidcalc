<?php

namespace App\Entities;

abstract class Fees
{

    protected function AssociationFee(float $amount): float
    {
        if ($amount < 1) {
            return $amount;
        }

        $thresholds = [
            500 => 5,
            1000 => 10,
            3000 => 15,
        ];

        foreach ($thresholds as $threshold => $fee) {
            if ($amount <= $threshold) {
                return round($fee, 2);
            }
        }

        return round(20, 2);
    }

    protected function BasicBuyerFee(
        float $amount,
        float $minimum,
        float $maximum
    ): float {
        $fee = $amount * 0.10;

        return round(max($minimum, min($fee, $maximum)), 2);
    }

    protected function SpecialFee(
        float $amount,
        float $percent
    ): float {
        return round($amount * $percent, 2);
    }

    protected function StorageFee(): float
    {
        return round(100, 2);
    }
}
