<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('default/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/ainborja', name: 'app_ainborja')]
    public function ainborja(): Response
    {
        return $this->render('default/ainborja.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/hautstanding', name: 'app_hautstanding')]
    public function hautstanding(): Response
    {
        return $this->render('default/hautstanding.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/logementsocial', name: 'app_logementsocial')]
    public function logementsocial(): Response
    {
        return $this->render('default/logementsocial.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('default/blog.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
