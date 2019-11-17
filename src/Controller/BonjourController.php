<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class BonjourController extends AbstractController
{
    /**
     * @Route("/info/{prenom}", name="bonjour")
     */
    public function index($prenom)
    {   
        if ($prenom == 'feedtheram') 
            return new JsonResponse('Vous etes bien tombé');
    
        else  
        return new JsonResponse('Hello ' . $prenom);
        
    }
    /**
     * @Route("/info", name="defaut")
     * 
     */
    public function default()
    {
        $prenoms = ['Rami' , 'Cedric' , 'Dada' , 'Joris'];
        $prenom = $prenoms[array_rand($prenoms)];
        return new JsonResponse($prenom);

    }

}
