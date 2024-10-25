<?php

namespace App\Entities;

class LuxuryFees extends Fees
{
    private LuxuryVehicle $vehicle;

    public function __construct(LuxuryVehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function getFees(): array
    {
        $amount = $this->vehicle->getPrice();
        $basic = $this->basicBuyer($amount, 25, 200);
        $special = $this->special($amount, 0.04);
        $association = $this->association($amount);
        $storage = $this->storage($amount);
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
