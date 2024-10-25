<?php

namespace App\Entities;

class LuxuryVehicle extends Vehicle
{
    public function __construct(float $price)
    {
        parent::__construct($price, new LuxuryType);
    }
}
