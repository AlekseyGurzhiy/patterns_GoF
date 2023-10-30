<?php

namespace App\Service\FactoryMethodService\Classes;

use App\Service\FactoryMethodService\Factories\AutoFactory;
use App\Service\Interfaces\TransportInterface;

class RealizationAuto extends AbstractRealization
{
    public function createObject(): TransportInterface
    {
        return new AutoFactory();
    }
}