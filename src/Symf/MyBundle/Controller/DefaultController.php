<?php

namespace Symf\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SymfMyBundle:Default:index.html.twig', array('name' => $name));
    }
    public function homeAction() {


        return $this->render('SymfMyBundle:Default:home.html.twig');
    }
}
