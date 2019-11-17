<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Personnage;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/personnage/{id}", name="personnage")
     */
    public function index($id)
    {   
        $prenoms = ['Rami' , 'Cedric' , 'Dada' , 'Joris'];
        $prenom = $prenoms[array_rand($prenoms)];
        $personnage = new Personnage($id , $prenom); 
        return new JsonResponse ([
            "type" => $personnage->getType(), 
            "age" => $personnage->getAge(),
            "prenom" => $personnage->getPrenom()
        ]);
    }
}
