<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RandomController extends AbstractController
{
    #[Route('/random', name: 'app_random')]
    public function index(): Response
    {
        //$randomNumber = random_int(1, 100);

        return $this ->render('base.html.twig');
    }
}
