<?php

namespace App\Service\FactoryMethodService\Classes;

use App\Service\Interfaces\TransportInterface;

class RealizationBike extends AbstractRealization
{
    public function createObject(): TransportInterface
    {
        return new BikeFactory();
    }
}