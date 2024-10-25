<?php

namespace App\Entities\Luxury;

use App\Entities\FeeCalculator;
use App\Entities\Fees\BasicBuyerFee;
use App\Entities\Fees\SpecialFee;
use App\Entities\Fees\AssociationFee;
use App\Entities\Fees\StorageFee;

class LuxuryFees
{
    private LuxuryVehicle $vehicle;
    private float $minimum = 25;
    private float $maximum = 200;
    private float $percent = 0.04;

    public function __construct(LuxuryVehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function get(): array
    {

        $amount = $this->vehicle->getPrice();
        $fees = [
            new BasicBuyerFee(
                $amount,
                $this->minimum,
                $this->maximum
            ),
            new SpecialFee($amount, $this->percent),
            new AssociationFee($amount),
            new StorageFee()
        ];

        $calculator = new FeeCalculator($fees);

        $fees = $calculator->calculateFees();
        $total = $calculator->sumFees($fees) + $amount;

        return [
            'fees' => $fees,
            'total' => $total
        ];
    }
}
