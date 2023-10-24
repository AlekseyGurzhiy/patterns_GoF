<?php

namespace App\Services\FactoryMethodService\Classes;

use App\Services\FactoryMethodService\Interfaces\TechnicInterface;

class AutoFactory extends AbstractFactory
{
    public function createObject(): TechnicInterface
    {
        return new Auto();
    }
}