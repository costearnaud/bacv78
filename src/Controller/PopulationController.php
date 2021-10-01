<?php

namespace App\Controller;

use App\Repository\PopulationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PopulationController extends AbstractController
{
    /**
     * @Route("/population", name="population")
     */
    public function index(PopulationRepository $populationRep)
    {
        $populations = $populationRep->findAll();
        return $this->render('population/index.html.twig', [
            'populations' => $populations
        ]);
    }
}
