<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    #[Route('/', methods: ['GET'])]
    public function mainMethod(): Response
    {
        $name = 'Выбери шаблон';

        return $this->render('index.html.twig', ['name' => $name]);
    }


}