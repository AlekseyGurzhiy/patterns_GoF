<?php

namespace App\Services\FactoryMethodService\Interfaces;

interface FactoryInterface
{
    public function execute();

    public function createObject(): TechnicInterface;
}