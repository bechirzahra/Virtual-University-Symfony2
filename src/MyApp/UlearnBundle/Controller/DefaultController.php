<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UlearnBundle\Entity\Cours;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppUlearnBundle:Default:index.html.twig', array('name' => $name));
    }
     public function homeAction() {


        return $this->render('MyAppUlearnBundle:Default:home.html.twig');
    }
    
    public function homestatAction() {


        return $this->render('MyAppUlearnBundle:Default:homestat.html.twig');
    }

    public function coursAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $cour = $em->getRepository("MyAppUlearnBundle:Cours");
        $cours = $cour->findAll();
        $module = $em->getRepository("MyAppUlearnBundle:Module");
        $modules = $module->findAll();
        return $this->render('MyAppUlearnBundle:Default:cours.html.twig', array('cours' => $cours,
                    'modules' => $modules));
    }

    public function UploadCoursAction() {

        $em = $this->getDoctrine()->getEntityManager();
        $module = $em->getRepository("MyAppUlearnBundle:Module");
        $modules = $module->findAll();

        return $this->render('MyAppUlearnBundle:Default:UploadCours.html.twig', array('modules' => $modules));
    }

    public function UploadAction() {

        $request = $this->get('request');

        $cours = new Cours();
        if ($request->getMethod() == "POST") {
            $image = $request->files->get('file')->getClientOriginalName();
            $directory = $this->container->getParameter('kernel.root_dir') . '/../web/uploads/cours';
            foreach ($request->files as $uploadedFile) {
                $file = $uploadedFile->move($directory, $image);
            }
            $url = 'http://localhost/sprintweb/web/uploads/cours/'.$image;
            $nomCours = $request->get('nomCours');
            $nomModule = $request->get('nomModule');

            $cours->setNomcours($nomCours);
            $cours->setIdmodule($nomModule);
            $cours->setChemincours($url);
            $em = $this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
            return $this->redirect($this->generateUrl("my_app_cours_homepage"));
        }
        return $this->render('MyAppUlearnBundle:Default:UploadCours.html.twig', array());
        // return $this->redirect($this->generateUrl('esprit_parc_affichagemodel'));
    }

    public function AjoutAction() {


        $request = $this->get('request');

        $cours = new Cours();
        if ($request->getMethod() == "POST") {

            $nomCours = $request->get('nomCours');
            $nomModule = $request->get('nomModule');

            $cours->setNomcours($nomCours);
            $cours->setIdmodule($nomModule);

            $em = $this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
            return $this->redirect($this->generateUrl("my_app_cours_homepage"));
        }
        return $this->render('MyAppUlearnBundle:Default:UploadCours.html.twig', array());
        // return $this->redirect($this->generateUrl('esprit_parc_affichagemodel'));
    }

    public function ContactUsAction() {
        

        return $this->render('MyAppUlearnBundle:Default:ContactUs.html.twig');
    }
    
    public function rechercheAction()
    {
        $em= $this->getDoctrine()->getManager();
        
        $request= $this->container->get('request');
        
        $nom=$request->get('nom');
        $cours=$em->getRepository('MyAppUlearnBundle:Cours')->findBy(array("nomCours"=>$nom,"statut"=>'1'));
        $ncours= array_merge($ndeals);
     
        
       

        return $this->render('MyAppUlearnBundle:Default:recherche.html.twig', array('cours'=>$cours));
    }
}


