<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Administrateur controller.
 *
 */
class QuizController extends Controller
{

    /**
     * Index action
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listQuestions = $em->getRepository('MyAppUlearnBundle:QuizQuestion')->findAll();

        $listQuestionsArray = array();

        foreach ($listQuestions as $question) {
        	$listQuestionsArray[] = $question->toArray();
        }

        $note = $this->get('session')->set('note',0);
        $note = $this->get('session')->set('countQuestion',count($listQuestions));

        return $this->render('MyAppUlearnBundle:Quiz:quiz.html.twig',
        	array(
        		'listQuestions' => json_encode($listQuestionsArray)
        	));
    }

    /**
     * Return the list of responses
     *
     */
    public function listResponsesAction($questionID)
    {

        $em = $this->getDoctrine()->getManager();

        $listResponses = $em->getRepository('MyAppUlearnBundle:QuizReponse')->findBy(array('questionid'=>$questionID));

        $listResponsesArray = array();

        foreach ($listResponses as $reponse) {
        	$listResponsesArray[] = $reponse->toArray();
        }

		$response = new Response(json_encode(array('listResponses' => $listResponsesArray)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    } 

    public function checkReponseAction($reponseID)
    {
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository('MyAppULearnBundle:QuizReponse')->find($reponseID);

        $note = $this->get('session')->get('note');

        if($reponse->getStatus() == 1)
        {
        	$note += 1;
        	$this->get('session')->set('note', $note);
        }

        $moyenne = $note."/".$this->get('session')->get('countQuestion');

		$response = new Response(json_encode(array('result' => $moyenne)));
		$response->headers->set('Content-Type', 'application/json'); 

		return $response;       
    }
}
