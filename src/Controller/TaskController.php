<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/task/listing', name: 'app_listing_task')]
    public function listing(): Response
    {
        return $this->render('task/listing.html.twig',[]);
    }

    #[Route('/task/add', name: 'app_add')]
    public function add(): Response
    {
        return $this->render('task/add.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }

    #[Route('/task/update', name: 'app_update_task')]
    public function update(): Response
    {
        return $this->render('task/update_task.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }

    #[Route('/task/delete', name: 'app_delete_task')]
    public function delete(): Response
    {
        return $this->render('task/delete_task.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }
}
