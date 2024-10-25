<?php

namespace App\Entities\Fees;

use App\Entities\Fee;

class StorageFee extends Fee
{
    public function calculate(): float
    {
        return 100;
    }
}
