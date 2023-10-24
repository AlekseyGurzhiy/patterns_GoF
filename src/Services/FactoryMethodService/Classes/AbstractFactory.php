<?php

namespace App\Services\FactoryMethodService\Classes;

use App\Services\FactoryMethodService\Interfaces\FactoryInterface;
use App\Services\FactoryMethodService\Interfaces\TechnicInterface;

abstract class AbstractFactory implements FactoryInterface
{
    public function execute()
    {
        $object = $this->createObject();
        $data[] = $object->realizationMovement();
        $data[] = $object->realizationDrive();

        return $data;
    }

    abstract public function createObject(): TechnicInterface;
}