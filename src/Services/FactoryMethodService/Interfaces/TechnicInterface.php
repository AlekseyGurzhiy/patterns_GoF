<?php

namespace App\Services\FactoryMethodService\Interfaces;

interface TechnicInterface
{
    public function realizationMovement(): string;

    public function realizationDrive(): string;
}