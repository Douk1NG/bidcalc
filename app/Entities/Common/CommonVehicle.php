<?php

namespace App\Entities;

class CommonVehicle extends Vehicle
{
    public function __construct(float $price)
    {
        parent::__construct($price, new CommonType);
    }
}
