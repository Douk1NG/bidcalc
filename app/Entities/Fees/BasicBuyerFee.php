<?php

namespace App\Entities\Fees;

use App\Entities\Fee;

class BasicBuyerFee extends Fee
{
    private float $amount;
    private float $minimum;
    private float $maximum;

    public function __construct(float $amount, float $minimum, float $maximum)
    {
        $this->amount = $amount;
        $this->minimum = $minimum;
        $this->maximum = $maximum;
    }

    public function calculate(): float
    {
        $fee = $this->amount * 0.10;

        return max(
            $this->minimum,
            min($fee, $this->maximum)
        );
    }
}