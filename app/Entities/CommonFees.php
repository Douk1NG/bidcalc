<?php

namespace App\Entities;

class CommonFees extends Fees
{
    private CommonVehicle $vehicle;

    public function __construct(CommonVehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function getFees(): array
    {
        $amount = $this->vehicle->getPrice();
        $basic = $this->basicBuyer($amount, 10, 50);
        $special = $this->special($amount, 2);
        $association = $this->association($amount);
        $storage = $this->storage($amount);
        $total = $amount + $basic + $special + $association + $storage;

        return [
            'basic_buyer' => $basic,
            'special' => $special,
            'association' => $association,
            'storage' => $storage,
            'total' => $total
        ];
    }
}
