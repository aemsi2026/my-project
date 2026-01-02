<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/dashboard', name: 'user_dashboard')]
    public function dashboard()
    {
        return $this->render('user/dashboard.html.twig');
    }

    #[Route('/profile', name: 'user_profile')]
    public function profile()
    {
        return $this->render('user/profile.html.twig');
    }

    #[Route('/user/reservations', name: 'user_reservations')]
    public function reservations()
    {
        return $this->render('user/reservations.html.twig');
    }
}

