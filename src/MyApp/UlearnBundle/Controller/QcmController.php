<?php

namespace MyApp\UlearnBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class QcmController extends Controller
{
 
    public function testAAction()

    {

        return $this->render('MyAppUlearnBundle:Qcm:testA.html.twig');


}
    public function testBAction()

    {

        return $this->render('MyAppUlearnBundle:Qcm:testB.html.twig');


}

    public function testCAction()

    {

        return $this->render('MyAppUlearnBundle:Qcm:testC.html.twig');

}

public function resultatAction()

    {

        return $this->render('MyAppUlearnBundle:Qcm:resultat.html.twig');
 
}
}