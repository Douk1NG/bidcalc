<?php

namespace App\Entities;

class FeeCalculator
{
    private $fees;

    public function __construct(array $fees)
    {
        $this->fees = $fees;
    }

    public function calculateFees(): array
    {
        $results = [];
        foreach ($this->fees as $fee) {
            $className = (new \ReflectionClass($fee))->getShortName();
            $results[$className] = $fee->calculate();
        }
        return $results;
    }

    public function sumFees(array $fees): float
    {
        return array_sum($fees);
    }
}
