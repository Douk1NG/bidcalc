<?php

namespace App\Entities;

class Fees
{

    protected function basicBuyer(float $amount, int $minimum, int $maximum): float
    {
        $fee = $amount * 0.10;

        return max(
            $minimum,
            min($fee, $maximum)
        );
    }

    protected function special(float $amount, float $percent): float
    {
        return $amount * $percent;
    }

    protected function association(float $amount): float
    {
        if ($amount < 1) {
            return $amount;
        }

        $tresholds = [
            500 => 5.0,
            1000 => 10.0,
            3000 => 15.0,
        ];

        foreach ($tresholds as $threshold => $fee) {
            if ($amount <= $threshold) {
                return $fee;
            }
        }

        return 20.0;
    }

    protected function storage(): float
    {
        return 100;
    }
}