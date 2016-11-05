<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EtudiantController extends Controller {
    
     public function homeEtAction() {


        return $this->render('MyAppUlearnBundle:Etudiant:homeEt.html.twig');
    }
}
