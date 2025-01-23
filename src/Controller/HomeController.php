<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategoryRepository $CategoryRepository ,ProductRepository $productRepository): Response
    {
        $Categories = $CategoryRepository->findAll();
        $Products = $productRepository->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'Categories' => $Categories,
            'Products' => $Products,
        ]);
    
    }

    #[Route('/products', name: 'app_products')]
    public function products(CategoryRepository $CategoryRepository ,ProductRepository $productRepository): Response
    {
        $Categories = $CategoryRepository->findAll();
        $Products = $productRepository->findAll();

        return $this->render('home/products.html.twig', [
            'controller_name' => 'HomeController',
            'Categories' => $Categories,
            'Products' => $Products,

        ]);
    }


    #[Route('/contact', name: 'app_contact')]
    public function contact(CategoryRepository $CategoryRepository ,ProductRepository $productRepository): Response
    {
        $Categories = $CategoryRepository->findAll();
        $Products = $productRepository->findAll();

        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
            'Categories' => $Categories,
            'Products' => $Products,

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
