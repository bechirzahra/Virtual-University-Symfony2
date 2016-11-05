<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MyApp\UlearnBundle\Entity\QuizReponse;
use MyApp\UlearnBundle\Form\QuizReponseType;

/**
 * QuizReponse controller.
 *
 * @Route("/quizreponse")
 */
class QuizReponseController extends Controller
{

    /**
     * Lists all QuizReponse entities.
     *
     * @Route("/", name="quizreponse")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppUlearnBundle:QuizReponse')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new QuizReponse entity.
     *
     * @Route("/", name="quizreponse_create")
     * @Method("POST")
     * @Template("MyAppUlearnBundle:QuizReponse:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new QuizReponse();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('quizreponse_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a QuizReponse entity.
     *
     * @param QuizReponse $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(QuizReponse $entity)
    {
        $form = $this->createForm(new QuizReponseType(), $entity, array(
            'action' => $this->generateUrl('quizreponse_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new QuizReponse entity.
     *
     * @Route("/new", name="quizreponse_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new QuizReponse();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a QuizReponse entity.
     *
     * @Route("/{id}", name="quizreponse_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUlearnBundle:QuizReponse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuizReponse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing QuizReponse entity.
     *
     * @Route("/{id}/edit", name="quizreponse_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUlearnBundle:QuizReponse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuizReponse entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a QuizReponse entity.
    *
    * @param QuizReponse $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(QuizReponse $entity)
    {
        $form = $this->createForm(new QuizReponseType(), $entity, array(
            'action' => $this->generateUrl('quizreponse_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing QuizReponse entity.
     *
     * @Route("/{id}", name="quizreponse_update")
     * @Method("PUT")
     * @Template("MyAppUlearnBundle:QuizReponse:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUlearnBundle:QuizReponse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuizReponse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('quizreponse_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a QuizReponse entity.
     *
     * @Route("/{id}", name="quizreponse_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppUlearnBundle:QuizReponse')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find QuizReponse entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('quizreponse'));
    }

    /**
     * Creates a form to delete a QuizReponse entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quizreponse_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
