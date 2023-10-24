<?php

namespace App\Services\FactoryMethodService\Classes;

use App\Services\FactoryMethodService\Interfaces\TechnicInterface;

class Bike implements TechnicInterface
{
    public function realizationMovement(): string
    {
        return 'Реализация функционала движения МОТОЦИКЛА';
    }

    public function realizationDrive(): string
    {
        return 'Реализация функционала управлением МОТОЦИКЛА';
    }
}