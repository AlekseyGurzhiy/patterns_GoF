<?php

namespace App\Service\Interfaces;

interface RealizationInterface
{
    public function execute();

    public function createObject(): TransportInterface;
}