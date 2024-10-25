<?php

namespace App\Entities\Fees;

use App\Entities\Fee;


class AssociationFee extends Fee
{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function calculate(): float
    {
        if ($this->amount < 1) {
            return $this->amount;
        }

        $thresholds = [
            500 => 5,
            1000 => 10,
            3000 => 15,
        ];

        foreach ($thresholds as $threshold => $fee) {
            if ($this->amount <= $threshold) {
                return $fee;
            }
        }

        return 20;
    }
}
