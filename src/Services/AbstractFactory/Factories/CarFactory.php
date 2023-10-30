<?php

namespace App\Services\AbstractFactory\Factories;

use App\Services\AbstractFactory\Interfaces\CarFactoryInterface;

class CarFactory
{
    const VOLKSWAGEN = 'vw';
    const LADA = 'lada';

    public function getFactory($type): CarFactoryInterface
    {
        return match ($type) {
            self::LADA => new LadaFactory(),
            self::VOLKSWAGEN => new VolkswagenFactory(),
        };
    }
}