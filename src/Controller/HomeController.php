<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/products', name: 'app_products')]
    public function products(): Response
    {
        return $this->render('home/products.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('admin/dashboard.html', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/form', name: 'app_form')]
    public function form(): Response
    {
        return $this->render('admin/formulaire.html', [
            'controller_name' => 'HomeController',
        ]);
    }


}
