<?php

namespace Symf\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symf\MyBundle\Form\FaqForm;
use Admin\AdminBundle\Entity\Faq;
class FaqController extends Controller{
    public function listAdhAction()
    {
        $em = $this->getDoctrine()->getManager();
		$faqs = $em->getRepository('MyAppUlearnBundle:Faq')->findAll();
        return $this->render('SymfMyBundle:Faq:list_adh.html.twig' , array('faqs' => $faqs));
    }
    // retourner la liste
	public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
		$faqs = $em->getRepository('AdminAdminBundle:Faq')->findAll();
        return $this->render('SymfMyBundle:Faq:list.html.twig' , array('faqs' => $faqs));
    }
	
	// ajouter
	public function ajouterAction()
    {
        $em = $this->getDoctrine()->getManager();
		$faq = new Faq();
	
		$form = $this->createForm(new FaqForm(), $faq);
		
		$request = $this->container->get('request');
		if($request->getMethod() == 'POST') 
        {
			$form->bind($request);			
			if ($form->isValid())
			{
				$em->persist($faq);
				$em->flush();
				
				// redirection à la liste d'étudiant aprés la création
				return new RedirectResponse($this->get('router')->generate('faq_list'));
			}
		}
		return $this->render('SymfMyBundle:Faq:ajouter.html.twig', array(
			'form'	=> $form->createView(),
		));
    }
	
	// modifier un étudiant
	public function modifierAction($id)
    {
        $em = $this->getDoctrine()->getManager();
		$faq = $em->getRepository('MyAppUlearnBundle:Faq')->findOneByIdFaq($id);
	
		$form = $this->createForm(new FaqForm(), $faq);
		
		$request = $this->container->get('request');
		if($request->getMethod() == 'POST') 
        {
			$form->bind($request);			
			if ($form->isValid())
			{
				$em->persist($faq);
				$em->flush();
				
				// redirection
				return new RedirectResponse($this->get('router')->generate('faq_list'));
			}
		}
		return $this->render('SymfMyBundle:Faq:modifier.html.twig', array(
			'faq'	=> $faq,
			'form'	=> $form->createView(),
		));
    }
	
	// supprimer un étudiant
	public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
		$faq = $em->getRepository('MyAppUlearnBundle:Faq')->findOneByIdFaq($id);
		$em->remove($faq);
		$em->flush();
		
		// redirection
		return new RedirectResponse($this->get('router')->generate('faq_list'));
    }
	
	
   
}
