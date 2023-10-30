<?php

namespace App\Services\AbstractFactory\Classes;

use App\Services\AbstractFactory\Interfaces\CoupeInterface;

class VolkswagenCoupe implements CoupeInterface
{
    public function build(): string
    {
        return 'Volkswagen Coupe was created';
    }
}