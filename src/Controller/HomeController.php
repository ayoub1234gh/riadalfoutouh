<?php

namespace App\Controller;

use App\Entity\Blogs;
use App\Repository\BlogsRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class HomeController extends AbstractController
{
    #[Route('/{_locale}', name: 'app_home', requirements: ['_locale' => 'fr|ar'], defaults: ["_locale" => "fr"])]
    public function index(): Response
    {
        return $this->render('default/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/{_locale}/contact', name: 'app_contact', requirements: ['_locale' => 'fr|ar',])]
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig', []);
    }

    #[Route('/{_locale}/residence', name: 'residence', requirements: ['_locale' => 'fr|ar',])]
    public function residence(): Response
    {
        return $this->render('default/residence.html.twig', []);
    }

    #[Route('/{_locale}/locauxcommerciaux', name: 'locauxcommerciaux', requirements: ['_locale' => 'fr|ar',])]
    public function locauxcommerciaux(): Response
    {
        return $this->render('default/locauxcommerciaux.html.twig', []);
    }


    #[Route('/{_locale}/ainborja', name: 'app_ainborja', requirements: ['_locale' => 'fr|ar',])]
    public function ainborja(): Response
    {
        return $this->render('default/ainborja.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/{_locale}/salam', name: 'app_salam', requirements: ['_locale' => 'fr|ar',])]
    public function hautstanding(): Response
    {
        return $this->render('default/salam.html.twig', [
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

    #[Route('/{_locale}/jardinrocad', name: 'jardinrocad', requirements: ['_locale' => 'fr|ar',])]
    public function jardinrocad(): Response
    {
        return $this->render('default/jardinrocad.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/{_locale}/verdurelissassfa', name: 'verdurelissassfa', requirements: ['_locale' => 'fr|ar',])]
    public function verdurelissassfa(): Response
    {
        return $this->render('default/verdurelissassfa.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/{_locale}/naim', name: 'naim', requirements: ['_locale' => 'fr|ar',])]
    public function naim(): Response
    {
        return $this->render('default/naim.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/{_locale}/jardinsforet', name: 'app_jardinsforet', requirements: ['_locale' => 'fr|ar',])]
    public function jardinsforet(): Response
    {
        return $this->render('default/jardinsforet.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/{_locale}/jardinsforet1', name: 'app_jardinsforet1', requirements: ['_locale' => 'fr|ar',])]
    public function jardinsforet1(): Response
    {
        return $this->render('default/jardinsforet1.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/{_locale}/jardinsforet2', name: 'app_jardinsforet2', requirements: ['_locale' => 'fr|ar',])]
    public function jardinsforet2(): Response
    {
        return $this->render('default/jardinsforet2.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/{_locale}/blog', name: 'app_blog', requirements: ['_locale' => 'fr|ar',])]
    public function blog(BlogsRepository $blogsRepoitory): Response
    {
        $blogs = $blogsRepoitory->findAll();


        return $this->render('default/blog.html.twig', [
            'controller_name' => 'HomeController',
            'blogs' => $blogs,
        ]);
    }

    #[Route('/{_locale}/blog/{id}', name: 'local_blog', requirements: ['_locale' => 'fr|ar',])]
    public function show(BlogsRepository $blogsRepoitory, $id): Response
    {

        //  dd("hello");
        $blog = $blogsRepoitory->findOneById(["id" => $id]);

        return $this->render('default/detail_blog.html.twig', [
            'controller_name' => 'HomeController',
            'blog' => $blog,
        ]);
    }
}
