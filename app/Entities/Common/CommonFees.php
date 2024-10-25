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
        $special = $this->special($amount, 0.02);
        $association = $this->association($amount);
        $storage = $this->storage();
        $total = $amount + $basic + $special + $association + $storage;

        return [
            'basic_buyer' => $basic,
            'special' => $special,
            'association' => $association,
            'storage' => $storage,
            'total' => $total,
        ];
    }
}
