<?php

namespace App\Entities\Common;

use App\Entities\Type;

class CommonType extends Type
{
    public function __construct()
    {
        $this->type = 'common';
    }
    public function get(): string
    {
        return $this->type;
    }

}
