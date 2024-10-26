<?php

namespace App\Entities;

class Type
{
    private string $name;
    private FeesTypes $feesTypes;

    public function __construct(string $name, FeesTypes $feesTypes)
    {
        $this->name = $name;
        $this->feesTypes = $feesTypes;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFeesTypes(): FeesTypes
    {
        return $this->feesTypes;
    }
}
