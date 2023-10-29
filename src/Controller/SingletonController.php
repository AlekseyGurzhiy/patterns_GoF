<?php

namespace App\Controller;

use App\Services\SingletonService\Singleton;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SingletonController extends AbstractController
{
    #[Route('/singleton', methods: ['GET'])]
    public function singleton(): Response
    {
        $name = 'Реализация паттерна "Одиночка"';

        $singleton = Singleton::getInstance();
        $singleton->setTestField('Какое-то значение');

        // Тестируем. Должны быть ошибки...
//        $clone = clone $singleton;
//        $clone->setTestField('clone');

//        $new = new Singleton();
//        $new->setTestField('new');

        $response = $name. '<br />'.$singleton->getTestField();

        return new Response($response);
    }
}