<?php

namespace App\Service\FactoryMethodService\Classes;

use App\Service\Interfaces\TransportInterface;

class AutoFactory implements TransportInterface
{
    public function realizationMovement(): string
    {
        return 'Реализация функционала движения АВТОМОБИЛЯ';
    }

    public function realizationDrive(): string
    {
        return 'Реализация функционала управления АВТОМОБИЛЯ';
    }
}