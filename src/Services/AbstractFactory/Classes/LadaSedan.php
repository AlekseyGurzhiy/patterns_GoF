<?php

namespace App\Services\AbstractFactory\Classes;

use App\Services\AbstractFactory\Interfaces\SedanInterface;

class LadaSedan implements SedanInterface
{
    public function build(): string
    {
        return 'Lada Sedaaaaan Baklagan';
    }
}