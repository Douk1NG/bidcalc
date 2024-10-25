<?php

namespace App\Entities;

abstract class Type
{
    public string $type;

    public function getType(): string
    {
        return $this->type;
    }
}
