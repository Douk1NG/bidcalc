<?php

namespace App\Entities;

class FeesTypes
{
    private float $minimum;
    private float $maximum;
    private float $percent;

    public function __construct(float $minimum, float $maximum, float $percent)
    {
        $this->maximum = $maximum;
        $this->minimum = $minimum;
        $this->percent = $percent;
    }

    public function getMinimum(): float
    {
        return $this->minimum;
    }

    public function getMaximum(): float
    {
        return $this->maximum;
    }

    public function getPercent(): float
    {
        return $this->percent;
    }

    public function setMinimum(float $minimum): void
    {
        $this->minimum = $minimum;
    }

    public function setMaximum(float $maximum): void
    {
        $this->maximum = $maximum;
    }

    public function setPercent(float $percent): void
    {
        $this->percent = $percent;
    }
}
