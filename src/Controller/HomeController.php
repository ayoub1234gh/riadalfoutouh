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

    #[Route('/jardinrocad', name: 'jardinrocad')]
    public function jardinrocad(): Response
    {
        return $this->render('default/jardinrocad.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/verdurelissassfa', name: 'verdurelissassfa')]
    public function verdurelissassfa(): Response
    {
        return $this->render('default/verdurelissassfa.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/naim', name: 'naim')]
    public function naim(): Response
    {
        return $this->render('default/naim.html.twig', [
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
