<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findAll();
        $findby = $categorieRepository->findBy(['cat_parent'=>null]);
        $findpc = $categorieRepository->findpcn();
        return $this->render('accueil/index.html.twig', [
            'categories' => $categories, 'findby' => $findby ,'findpc' => $findpc ,var_dump($findby ),
        // return $this->render('accueil/index.html.twig', [
        //     'controller_name' => 'AccueilController',
        ]);
    }
}
