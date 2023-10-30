<?php

namespace App\Services\AbstractFactory\Classes;

use App\Services\AbstractFactory\Interfaces\CoupeInterface;

class LadaCoupe implements CoupeInterface
{
    public function build(): string
    {
        return 'Lada Coupe was created';
    }
}