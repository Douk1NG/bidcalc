<?php

namespace App\Entities\Common;

use App\Entities\Vehicle;

class CommonVehicle extends Vehicle
{
    public function __construct(float $price)
    {
        parent::__construct($price, new CommonType);
    }
}
