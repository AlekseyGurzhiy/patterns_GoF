<?php

namespace App\Service\FactoryMethodService\Classes;

use App\Service\Interfaces\TransportInterface;

class RealizationAuto extends AbstractRealization
{
    public function createObject(): TransportInterface
    {
        return new AutoFactory();
    }
}