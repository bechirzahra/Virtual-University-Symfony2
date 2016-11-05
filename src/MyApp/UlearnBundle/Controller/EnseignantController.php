<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EnseignantController extends Controller {
    
     public function homeEnsAction() {


        return $this->render('MyAppUlearnBundle:Enseignant:homeEns.html.twig');
    }
}
