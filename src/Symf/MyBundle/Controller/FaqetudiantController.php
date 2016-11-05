<?php


namespace Symf\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symf\MyBundle\Form\FaqForm;
use Symf\MyBundle\Entity\Faq;

class FaqetudiantController extends Controller  {
    public function listetudiantAction()
    {
        $em = $this->getDoctrine()->getManager();
		$faqs = $em->getRepository('AdminAdminBundle:Faq')->findAll();
        return $this->render('SymfMyBundle:Faq:listetudiant.html.twig' , array('faqs' => $faqs));
    }
	
}
