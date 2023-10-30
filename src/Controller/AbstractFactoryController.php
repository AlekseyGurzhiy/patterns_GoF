<?php

namespace App\Controller;

use App\Services\AbstractFactory\Factories\CarFactory;
use App\Services\AbstractFactory\Interfaces\CarFactoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AbstractFactoryController extends AbstractController
{
    private CarFactoryInterface $auto;

    public function __construct(
    ) {
        $this->auto = (new CarFactory())->getFactory('lada');
        //$this->auto = (new CarFactory())->getFactory('vw');
    }

    #[Route('/abstractFactory', methods: ['GET'])]
    public function abstractFactory(): Response
    {
        $name = 'Реализация паттерна "Абстрактная фабрика"';

        $result[] = $this->auto->createSedan()->build();
        $result[] = $this->auto->createCoupe()->build();

        $response = $name."<br />".implode('<br />', $result);
        return new Response($response);
    }
}