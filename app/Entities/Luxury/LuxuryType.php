<?php

namespace App\Entities\Luxury;

use App\Entities\Type;

class LuxuryType extends Type
{
    public function __construct()
    {
        $this->type = 'luxury';
    }

    public function get(): string
    {
        return $this->type;
    }
}
