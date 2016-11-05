<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoursController extends Controller {

    public function listCAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') 
            {
            $nomCours = $Request->get('nomCours');

            $cours = $em->getRepository('MyAppUlearnBundle:Cours')->findByNom($nomCours);
            return $this->render('MyAppUlearnBundle:Cours:listC.html.twig', array('cours' => $cours));
        }

        $cours= $em->getRepository('MyAppUlearnBundle:Cours')->findAll();

        return $this->render('MyAppUlearnBundle:Cours:ListC.html.twig', array('cours' => $cours));
    }}
