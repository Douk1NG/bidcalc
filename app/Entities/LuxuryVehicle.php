<?php

namespace App\Entities;

use App\Entities\LuxuryType;

class LuxuryVehicle extends Vehicle
{
    public function __construct(float $price)
    {
        parent::__construct($price, new LuxuryType());
    }
}