<?php

namespace App\Services\FactoryMethodService\Classes;

use App\Services\FactoryMethodService\Interfaces\TechnicInterface;

class Auto implements TechnicInterface
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