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

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig', [

        ]);
    }

    #[Route('/residence', name: 'residence')]
    public function residence(): Response
    {
        return $this->render('default/residence.html.twig', [

        ]);
    }

    #[Route('/locauxcommerciaux', name: 'locauxcommerciaux')]
    public function locauxcommerciaux(): Response
    {
        return $this->render('default/locauxcommerciaux.html.twig', [

        ]);
    }

}
