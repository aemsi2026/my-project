<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservations', name: 'app_reservation')]
    public function index()
    {
        return $this->render('/user/login/reservations.html.twig');
    }


    #[Route('/reservation/new', name: 'reservation_create')]
    public function create()
    {
        return $this->render('reservation/create.html.twig');
    }

    #[Route('/reservation/{id}', name: 'reservation_show')]
    public function show()
    {
        return $this->render('reservation/show.html.twig');
    }
}
