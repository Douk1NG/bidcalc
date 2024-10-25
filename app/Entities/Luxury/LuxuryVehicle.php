<?php

namespace App\Entities\Luxury;

use App\Entities\Vehicle;

class LuxuryVehicle extends Vehicle
{
    public function __construct(float $price)
    {
        parent::__construct($price, new LuxuryType);
    }
}
