<?php

namespace App\Controller;

use App\Service\FactoryMethodService\Classes\RealizationAuto;
use App\Service\FactoryMethodService\Classes\RealizationBike;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FactoryMethodController extends AbstractController
{
    #[Route('/factoryMethod', methods: ['GET'])]
    public function factoryMethod(): Response
    {
        $name = 'Реализация паттерна "Фабричный метод"';

        $realization = new RealizationBike();
//        $realization = new RealizationAuto();
        $result = $realization->execute();

        $response = $name.'<br />'.implode('<br />', $result);
        return new Response($response);
    }
}