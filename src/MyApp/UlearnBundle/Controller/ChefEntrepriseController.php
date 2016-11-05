<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChefEntrepriseController extends Controller {
    
     public function homeChAction() {


        return $this->render('MyAppUlearnBundle:ChefEntreprise:homeCh.html.twig');
    }
}
