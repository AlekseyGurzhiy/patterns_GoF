<?php

namespace App\Services\AbstractFactory\Factories;

use App\Services\AbstractFactory\Classes\LadaCoupe;
use App\Services\AbstractFactory\Classes\LadaSedan;
use App\Services\AbstractFactory\Interfaces\CarFactoryInterface;
use App\Services\AbstractFactory\Interfaces\CoupeInterface;
use App\Services\AbstractFactory\Interfaces\SedanInterface;

class LadaFactory implements CarFactoryInterface
{
    public function createSedan(): SedanInterface
    {
        return new LadaSedan();
    }

    public function createCoupe(): CoupeInterface
    {
        return new LadaCoupe();
    }
}