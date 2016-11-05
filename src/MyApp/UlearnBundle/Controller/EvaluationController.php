<?php


namespace MyApp\UlearnBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UlearnBundle\Form\EvaluationForm;
use MyApp\UlearnBundle\Entity\Evaluation;
use MyApp\UlearnBundle\Entity\Cours;
class EvaluationController extends Controller
{

    
	public function ajouterAction($id)
	{

		$user = $this->container->get('security.context')->getToken()->getUser();
                $em = $this->getDoctrine()->getEntityManager();
                $evaluation = new Evaluation();
		$form_evaluation = $this->createForm(new EvaluationForm(),$evaluation);
		$request = $this->container->get('request');
		$eval = $em->getRepository('MyAppUlearnBundle:Cours')->findByIdcours($id);

		//var_dump($adhc);exit(0);
		if($request->getMethod() == 'POST') 
		{
			$form_evaluation->bind($request);
			//Reclamateur 
			$evaluation->setNote($request->get('note'));
			$evaluation->setIdetudiant($user);
			$evaluation->setIdcours($eval);
			
			$em->persist($evaluation);
			$em->flush();
			
			
			// $note=$form_evaluation->get('note')->getData();
			// $commentaire=$form_evaluation->get('commentaire')->getData();
			// $evaluation->setNote($note);
			// $evaluation->setCommentaire($commentaire);
			//  var_dump($evaluation);exit(0);


		}

		return $this->render('MyAppUlearnBundle:Evaluation:ajouterEvaluation.html.twig', array(
			'form_evaluation'=> $form_evaluation->createView(), 'id' => $id)
		);
	}
	
	

	
    
}