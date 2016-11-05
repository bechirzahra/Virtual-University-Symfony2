<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\UlearnBundle\Entity\Examen;
use MyApp\UlearnBundle\Form\ExamenType;



class ExamenController  extends  Controller{

     public function ListeExamensAction() {

        $em = $this->getDoctrine()->getManager();

            
            
             $examen = $em->getRepository('MyAppUlearnBundle:Examen')->findAll();

            $request = $this->get('request');
        ////recherche
        if ($request->getMethod() == "POST") {
            $search = $request->get('search');

            $examen = $em->getRepository('MyAppUlearnBundle:Examen')->
                    findBy(array("idmodule" => $search));
        }

            
            
        //    $idexamen = $Request->get('idexamen');
         

            //$examen = $em->getRepository('MyAppChaimaBundle:Examen')->findByIdexamen($idexamen);
          //  return $this->render('MyAppChaimaBundle:Examen:ListeExamens.html.twig', array('examen' => $examen));
        

       
        return $this->render('MyAppUlearnBundle:Examen:ListeExamens.html.twig', array('examen' => $examen));
}

    
    public function AjouterExamenAction() {

      $examen = new Examen();
        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') {

            $duree = $Request->get('duree');
            $examen->setDuree($duree);
            
           

            $em = $this->getDoctrine()->getManager();
            $em->persist($examen);
            $em->flush();
            return $this->redirect($this->generateUrl("ListeExamens"));
        }

        return $this->render('MyAppUlearnBundle:Examen:AjouterExamen.html.twig');
    }  

    
    public function updateExamenAction($idExamen) {
         $em = $this->container->get('doctrine')->getEntityManager();
        $examen = $em->getRepository('MyAppUlearnBundle:Examen')->find($idExamen);

        $form = $this->container->get('form.factory')->create(new ExamenType(), $examen);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($examen);
                $em->flush();
                return $this->redirect($this->generateUrl("ListeExamens"));
            }
        }
        return $this->render('MyAppUlearnBundle:Examen:updateExamen.html.twig', array('Form' => $form->createView()));


}


    

  public function deleteExamenAction($idExamen) {
        //return $this->render('EspritParcBundle:Modele:list.html.twig', array());
        $em = $this->container->get('doctrine')->getEntityManager();
        $examen = $em->getRepository('MyAppUlearnBundle:Examen')->find($idExamen);
        $em->remove($examen);
        $em->flush();
        return $this->redirect($this->generateUrl("ListeExamens"));
    }
    
    public function homeAction()
    {
        return $this->render('MyApUlearnBundle::layout.html.twig');
    }

}




