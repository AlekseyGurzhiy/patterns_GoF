<?php

namespace App\Controller;

use App\Services\FactoryMethodService\Classes\AutoFactory;
use App\Services\FactoryMethodService\Classes\BikeFactory;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FactoryMethodController extends AbstractController
{
    #[Route('/factoryMethod', methods: ['GET'])]
    public function factoryMethod(): Response
    {
        $name = 'Реализация паттерна "Фабричный метод"';

        $realization = new AutoFactory();
//        $realization = new BikeFactory();
        $result = $realization->execute();

        $response = $name.'<br />'.implode('<br />', $result);
        return new Response($response);
    }
}