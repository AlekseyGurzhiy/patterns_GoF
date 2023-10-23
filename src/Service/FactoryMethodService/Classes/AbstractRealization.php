<?php

namespace App\Service\FactoryMethodService\Classes;

use App\Service\Interfaces\RealizationInterface;
use App\Service\Interfaces\TransportInterface;

abstract class AbstractRealization implements RealizationInterface
{
    public function execute()
    {
        $object = $this->createObject();
        $data[] = $object->realizationMovement();
        $data[] = $object->realizationDrive();

        return $data;
    }

    abstract public function createObject(): TransportInterface;
}