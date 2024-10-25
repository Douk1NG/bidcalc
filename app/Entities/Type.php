<?php

namespace App\Entities;

abstract class Type
{
    private string $type;

    public function getType(): string
    {
        return $this->type;
    }
}