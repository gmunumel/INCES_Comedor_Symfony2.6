<?php

namespace INCES\ComedorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use INCES\ComedorBundle\Entity\Rol;
use INCES\ComedorBundle\Form\RolType;

/**
 * Rol controller.
 *
 */
class RolController extends Controller
{
  /**
   * Lists all Rol entities.
   *
   */
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();

    $entities = $em->getRepository('INCESComedorBundle:Rol')->findAll();

    //return array('entities' => $entities);
    return $this->render('INCESComedorBundle:Rol:index.html.twig', array(
      'entities' => $entities
    ));
    }

    /**
     * Finds and displays a Rol entity.
     *
     */
    public function showAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Rol')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Rol entity';
        throw $this->createNotFoundException($translated);
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('INCESComedorBundle:Rol:show.html.twig', array(
          'entity'      => $entity,
          'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to create a new Rol entity.
     *
     */
    public function newAction()
    {
      $entity = new Rol();
      $form   = $this->createForm(new RolType(), $entity);

      return $this->render('INCESComedorBundle:Rol:new.html.twig', array(
        'entity' => $entity,
        'form'   => $form->createView()
      ));
    }

    /**
     * Creates a new Rol entity.
     *
     */
    public function createAction()
    {
      $entity  = new Rol();
      $request = $this->getRequest();
      $form    = $this->createForm(new RolType(), $entity);
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/rol/'.$entity->getId().'/show');
        }

        return $this->render('INCESComedorBundle:Rol:new.html.twig', array(
          'entity' => $entity,
          'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Rol entity.
     *
     */
    public function editAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Rol')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Rol entity';
        throw $this->createNotFoundException($translated);
        }

        $editForm = $this->createForm(new RolType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('INCESComedorBundle:Rol:edit.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Rol entity.
     *
     */
    public function updateAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Rol')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Rol entity';
        throw $this->createNotFoundException($translated);
        }

        $editForm   = $this->createForm(new RolType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bind($request);

        if ($editForm->isValid()) {
          $em->persist($entity);
          $em->flush();

          $route = $request->getBaseUrl();
          return new Response($route.'/#!/rol/'.$entity->getId().'/show');
        }

        return $this->render('INCESComedorBundle:Rol:edit.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function errorDeleteAction()
    {
      return $this->render('INCESComedorBundle:Rol:_error_delete.html.twig');
    }

    /**
     * Deletes a Rol entity.
     *
     */
    public function deleteAction($id)
    {
      $form = $this->createDeleteForm($id);
      $request = $this->getRequest();

      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('INCESComedorBundle:Rol')->find($id);

        if (!$entity) {
          $translated = 'Unable to find Rol entity';
          throw $this->createNotFoundException($translated);
            }

            try{
              $em->remove($entity);
              $em->flush();
            }catch (\Exception $e) {
              $route = $request->getBaseUrl();
              return new Response($route.'/#!/rol/edelete');
            }
        }

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/rol/');
    }

    private function createDeleteForm($id)
    {
      return $this->createFormBuilder(array('id' => $id))
        ->add('id', 'hidden')
        ->getForm()
        ;
    }
}
