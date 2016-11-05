<?php

namespace MyApp\UlearnBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UlearnBundle\Entity\Stage;
use MyApp\UlearnBundle\Form\StageType;


class StageController extends Controller {
    


    public function listStageAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') 
            {
            $domaine = $Request->get('domaine');

            $stages = $em->getRepository('MyAppUlearnBundle:Stage')->findByDomaine($domaine);
            return $this->render('MyAppUlearnBundle:Stage:listStage.html.twig', array('stages' => $stages));
        }

        $stages = $em->getRepository('MyAppUlearnBundle:Stage')->findByIdchefentreprise($user);
        return $this->render('MyAppUlearnBundle:Stage:listStage.html.twig', array('stages' => $stages));
    }    
    
       public function listStageEtAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') 
            {
            $domaine = $Request->get('domaine');

            $stages = $em->getRepository('MyAppUlearnBundle:Stage')->findByDomaine($domaine);
            return $this->render('MyAppUlearnBundle:Stage:listStage.html.twig', array('stages' => $stages));
        }

        $stages = $em->getRepository('MyAppUlearnBundle:Stage')->findAll($user);
        return $this->render('MyAppUlearnBundle:Stage:listStageEt.html.twig', array('stages' => $stages));
    }

    public function addStageAction() {

        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getEntityManager();
        $stage = new Stage();
	$form = $this->createForm(new StageType(), $stage);
        $request = $this->container->get('request');
        
        if($request->getMethod() == 'POST') 
		{
            
            $form->bind($request);
            $stage->setIdchefentreprise($user);
            $em->persist($stage);
            $em->flush();
            return $this->redirect($this->generateUrl('listStage'));
        }
   
        return $this->render('MyAppUlearnBundle:Stage:addStage.html.twig', array('Form' => $form->createView()));
    }
    
     public function updateStageAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $stage = $em->getRepository('MyAppUlearnBundle:Stage')->find($id);

        $form = $this->container->get('form.factory')->create(new StageType(), $stage);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($stage);
                $em->flush();
                return $this->redirect($this->generateUrl("listStage"));
            }
        }
        return $this->render('MyAppUlearnBundle:Stage:updateStage.html.twig', array('Form' => $form->createView()));


}


 public function deleteStageAction($id) {
        //return $this->render('EspritParcBundle:Modele:list.html.twig', array());
        $em = $this->container->get('doctrine')->getEntityManager();
        $stage = $em->getRepository('MyAppUlearnBundle:Stage')->find($id);
        $em->remove($stage);
        $em->flush();
        return $this->redirect($this->generateUrl("listStage"));
    }
    
    public function pdfAction() {

        $em = $this->getDoctrine()->getManager();
        $stage = $em->getRepository('MyAppUlearnBundle:Stage')->findAll();
        $request = $this->getRequest();

        $html = $this->renderView('MyAppUlearnBundle:Stage:listStagePdf.html.twig', array('stages' => $stage,
        ));

        return new Response(
                $this->get('knp_snappy.pdf', 'knp_snappy.image')->getOutputFromHtml($html), 300, array(
            'Content-Type' => 'application/pdf', 'Dashboard/jpg',
            'Content-Disposition' => 'filename="image.jpg"'
                )
        );
}}
    //put your code here
