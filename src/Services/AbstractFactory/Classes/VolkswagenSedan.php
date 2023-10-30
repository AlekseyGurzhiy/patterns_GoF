<?php

namespace App\Services\AbstractFactory\Classes;

use App\Services\AbstractFactory\Interfaces\SedanInterface;

class VolkswagenSedan implements SedanInterface
{
    public function build(): string
    {
        return 'Volkswagen Sedan was created';
    }
}