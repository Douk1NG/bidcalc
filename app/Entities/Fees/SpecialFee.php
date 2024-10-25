<?php

namespace App\Entities\Fees;

use App\Entities\Fee;

class SpecialFee extends Fee
{
    private float $amount;
    private float $percent;

    public function __construct(float $amount, float $percent)
    {
        $this->amount = $amount;
        $this->percent = $percent;
    }

    public function calculate(): float
    {
        return $this->amount * $this->percent;
    }
}
