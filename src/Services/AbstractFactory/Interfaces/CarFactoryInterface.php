<?php

namespace App\Services\AbstractFactory\Interfaces;

interface CarFactoryInterface
{
    public function createSedan(): SedanInterface;

    public function createCoupe(): CoupeInterface;
}