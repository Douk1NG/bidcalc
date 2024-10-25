<?php

namespace App\Entities;

use App\Entities\CommonType;

class CommonVehicle extends Vehicle
{
    public function __construct(float $price)
    {
        parent::__construct($price, new CommonType());
    }
}
