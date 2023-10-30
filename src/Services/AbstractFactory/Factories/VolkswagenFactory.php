<?php

namespace App\Services\AbstractFactory\Factories;

use App\Services\AbstractFactory\Classes\VolkswagenCoupe;
use App\Services\AbstractFactory\Classes\VolkswagenSedan;
use App\Services\AbstractFactory\Interfaces\CarFactoryInterface;
use App\Services\AbstractFactory\Interfaces\CoupeInterface;
use App\Services\AbstractFactory\Interfaces\SedanInterface;

class VolkswagenFactory implements CarFactoryInterface
{
    public function createSedan(): SedanInterface
    {
        return new VolkswagenSedan();
    }

    public function createCoupe(): CoupeInterface
    {
        return new VolkswagenCoupe();
    }
}