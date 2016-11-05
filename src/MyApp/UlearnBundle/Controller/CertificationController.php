<?php

namespace MyApp\UlearnBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\UlearnBundle\Entity\Certification;
use MyApp\UlearnBundle\Form\CertificationType;

/**
 * Certification controller.
 *
 */
class CertificationController extends Controller
{

    /**
     * Lists all Certification entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppUlearnBundle:Certification')->findAll();

        return $this->render('MyAppUlearnBundle:Certification:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Certification entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Certification();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('CERT_show', array('id' => $entity->getIdcertification())));
        }

        return $this->render('MyAppUlearnBundle:Certification:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Certification entity.
     *
     * @param Certification $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Certification $entity)
    {
        $form = $this->createForm(new CertificationType(), $entity, array(
            'action' => $this->generateUrl('CERT_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Certification entity.
     *
     */
    public function newAction()
    {
        $entity = new Certification();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyAppUlearnBundle:Certification:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Certification entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUlearnBundle:Certification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certification entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppUlearnBundle:Certification:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Certification entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUlearnBundle:Certification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certification entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppUlearnBundle:Certification:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Certification entity.
    *
    * @param Certification $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Certification $entity)
    {
        $form = $this->createForm(new CertificationType(), $entity, array(
            'action' => $this->generateUrl('CERT_update', array('id' => $entity->getIdcertification())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Certification entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUlearnBundle:Certification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certification entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('CERT'));
        }

        return $this->render('MyAppUlearnBundle:Certification:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Certification entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppUlearnBundle:Certification')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Certification entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('CERT'));
    }

    /**
     * Creates a form to delete a Certification entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('CERT_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
