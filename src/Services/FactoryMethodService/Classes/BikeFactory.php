<?php

namespace App\Services\FactoryMethodService\Classes;

use App\Services\FactoryMethodService\Interfaces\TechnicInterface;

class BikeFactory extends AbstractFactory
{
    public function createObject(): TechnicInterface
    {
        return new Bike();
    }
}