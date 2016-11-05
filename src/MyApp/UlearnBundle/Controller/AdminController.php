<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use University\UserBundle\Entity\User;
use Admin\AdminBundle\Form\UserType;


class AdminController extends Controller  {
    
     public function homeAdAction() {


        return $this->render('MyAppUlearnBundle:Admin:homeAd.html.twig');
    }

    public function listUserAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') 
            {
            $nom = $Request->get('nom');

            $user = $em->getRepository('AdminAdminBundle:User')->findByNom($nom);
            return $this->render('MyAppUlearnBundle:Admin:listUser.html.twig', array('user' => $user));
        }

        $user= $em->getRepository('UniversityUserBundle:User')->findByEnabled(false);

        return $this->render('MyAppUlearnBundle:Admin:listUser.html.twig', array('user' => $user));
    }
    
        


public function accepterAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $can = new user();
        $c = $em->getRepository('UniversityUserBundle:User')->find($id);

        $c->setEnabled(true);
        $em->persist($c);
        $em->flush();
        return $this->redirect($this->generateUrl("listUser"));
        
        
       
}

 public function deleteUserAction($id) {
        //return $this->render('EspritParcBundle:Modele:list.html.twig', array());
        $em = $this->container->get('doctrine')->getEntityManager();
        $user = $em->getRepository('AdminAdminBundle:User')->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirect($this->generateUrl("listUser"));
    }

    
}
