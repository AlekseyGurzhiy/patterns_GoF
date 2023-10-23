<?php

namespace App\Service\Interfaces;

interface TransportInterface
{
    public function realizationMovement(): string;

    public function realizationDrive(): string;
}