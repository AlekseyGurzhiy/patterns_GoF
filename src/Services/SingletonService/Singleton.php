<?php

namespace App\Services\SingletonService;

class Singleton
{
    private static $instance;

    private $testField;

    static function getInstance()
    {
        if (is_null(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        // делаем приватным конструктор, чтобы нельзя было создать через new
    }

    private function __clone(): void
    {
        // делаем приватным метод clone, чтобы нельзя было его клонировать
    }

    public function getTestField()
    {
        return $this->testField;
    }

    public function setTestField($value)
    {
        $this->testField = $value;
    }
}