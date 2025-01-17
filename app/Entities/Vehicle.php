<?php

namespace App\Entities;

class Vehicle
{
    private float $price;
    private Type $type;

    public function __construct(float $price, Type $type)
    {
        $this->price = $price;
        $this->type = $type;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setType(Type $type): self
    {
        $this->type = $type;
        return $this;
    }
}
