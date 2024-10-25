<?php

namespace App\Entities;

class CommonType extends Type
{
    public function __construct()
    {
        $this->type = 'common';
    }
}
