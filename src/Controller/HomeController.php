<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $name = 'Sabah';
        $tableau = ['fdsf', 'fdsfdsf', 'dfsdfsd', 'jghjhgj'];

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'name' => $name,
            'datas' => $tableau
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
