<?php

namespace App\Service\FactoryMethodService\Classes;

use App\Service\Interfaces\TransportInterface;

class BikeFactory implements TransportInterface
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