<?php

namespace INCES\ComedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INCES\ComedorBundle\Entity\UsuarioMenu;
use INCES\ComedorBundle\Form\UsuarioMenuType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 * UsuarioMenu controller.
 *
 */
class UsuarioMenuController extends Controller
{

  const RESULTS_PER_PAGE = 2;

  /**
   * Finds and displays a UsuarioMenu entity.
   *
   */
  public function showAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('INCESComedorBundle:UsuarioMenu')->find($id);

    if (!$entity) {
      $translated = 'Unable to find User entityMenu';
      throw $this->createNotFoundException($translated);
    }

    $deleteForm = $this->createDeleteForm($id);

    return $this->render('INCESComedorBundle:UsuarioMenu:show.html.twig', array(
        'entity'      => $entity,
        'delete_form' => $deleteForm->createView(),
    ));
  }

    /**
     * Displays a form to create a new UsuarioMenu entity.
     *
     */
    public function newAction()
    {
      $entity = new UsuarioMenu();
      $form   = $this->createForm(new UsuarioMenuType(), $entity);

      return $this->render('INCESComedorBundle:UsuarioMenu:new.html.twig', array(
        'entity' => $entity,
        'form'   => $form->createView()
      ));
    }

    /**
     * Creates a new UsuarioMenu entity.
     *
     */
    public function createAction()
    {
      $entity  = new UsuarioMenu();
      $request = $this->getRequest();
      $form    = $this->createForm(new UsuarioMenuType(), $entity);
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return $this->redirect(
          $this->generateUrl('usuariomenu_show',
                 array('id' => $entity->getId())));
      }

      return $this->render('INCESComedorBundle:UsuarioMenu:new.html.twig', array(
        'entity' => $entity,
        'form'   => $form->createView()
      ));
    }

    /**
     * Displays a form to edit an existing UsuarioMenu entity.
     *
     */
    /*
    public function editAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:UsuarioMenu')->find($id);

      if (!$entity) {
        $translated = 'Unable to find User entityMenu';
        throw $this->createNotFoundException($translated);
        }

        $editForm = $this->createForm(new UsuarioMenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('INCESComedorBundle:UsuarioMenu:edit.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    */
    /**
     * Edits an existing UsuarioMenu entity.
     *
     */
    /*
    public function updateAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:UsuarioMenu')->find($id);

      if (!$entity) {
        $translated = 'Unable to find User entityMenu';
        throw $this->createNotFoundException($translated);
        }

        $editForm   = $this->createForm(new UsuarioMenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bind($request);

        if ($editForm->isValid()) {
          $em->persist($entity);
          $em->flush();

          $route = $request->getBaseUrl();
          return new Response($route.'/#!/usuariomenu/'.$entity->getId().'/show');
        }

        return $this->render('INCESComedorBundle:UsuarioMenu:edit.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    */

    /**
     * Deletes a UsuarioMenu entity.
     *
     */
    /*
    public function deleteAction($id)
    {
      $form = $this->createDeleteForm($id);
      $request = $this->getRequest();

      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('INCESComedorBundle:UsuarioMenu')->find($id);

        if (!$entity) {
          $translated = 'Unable to find User entityMenu';
          throw $this->createNotFoundException($translated);
            }

            $em->remove($entity);
            $em->flush();
        }

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/usuariomenu');
    }
    */

    private function createDeleteForm($id)
    {
      return $this->createFormBuilder(array('id' => $id))
        ->add('id', 'hidden')
        ->getForm()
        ;
    }

    /*
     *  Search Ajax
     */
    public function searchAjaxAction(){
      $request = $this->get('request');
      $query     = $request->query->get('query');
      $sort      = $request->query->get('sort');
      $direction = $request->query->get('direction');

      if(is_null($query))
        $query   = $query.'*';

      if (!$query) {
        $pagination = $this->_indexPagination($query, $sort, $direction);
        return $this->render('INCESComedorBundle:UsuarioMenu:_index.html.twig', array(
          'pagination' => $pagination
          ,'query' => $query
          ,'sort' => $sort
          ,'direction'  => $direction
        ));
        }else{
            if ('*' == $query){
              $query = '';
              $pagination = $this->_indexPagination($query, $sort, $direction);
              return $this->render('INCESComedorBundle:UsuarioMenu:_index.html.twig', array(
                'pagination' => $pagination
                ,'query' => $query
                ,'sort' => $sort
                ,'direction'  => $direction
              ));
            }
            $query = htmlspecialchars(urldecode($query));
            $query = substr_replace($query ,"",-1);
            $_query = $this->params($query);
            $pagination = $this->_indexPagination($_query);
            return $this->render('INCESComedorBundle:UsuarioMenu:_list.html.twig', array(
                'pagination'  => $pagination
               ,'query'      => $query
            ));
        }
    }

    /*
     * Do a general select for UsuarioMenu
     */
    private function doSelectUsuarioMenu($sort, $query, $direction){
	    $em = $this->get('doctrine.orm.entity_manager');
    	$dql = $em->createQueryBuilder();
	$dql->select('um')
      	    ->from('INCESComedorBundle:UsuarioMenu', 'um')
            ->join('um.usuario', 'u')
            ->join('um.menu', 'm');
	if($query != "")
	  $dql->andWhere($query);
        if($sort != "")
          $dql->orderBy($sort, $direction);

	return $dql;
    }

    private function _indexPagination($query, $sort = null, $direction = null){

      $em = $this->get('doctrine.orm.entity_manager');

      $dql = $em->createQueryBuilder();
      if (is_null($sort))
        if(!$query || $query == '*')
          $dql = $this->doSelectUsuarioMenu("", "", "");
        else
          $dql = $this->doSelectUsuarioMenu("", $query, "");

      /* TODO arreglar para filtrar por usuario y menu */
      elseif ($direction == 'asc')
        $dql = $this->doSelectUsuarioMenu($sort, "", 'ASC');
      else
        $dql = $this->doSelectUsuarioMenu($sort, "", 'DESC');

      $qry = $em->createQuery($dql);
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $qry,
        $this->get('request')->query->get('page', 1),//page number
            UsuarioMenuController::RESULTS_PER_PAGE //limit per page
        );
      return $pagination;
    }

    private function params($params){
      $params = trim($params);
      $explote = explode(" ", $params);
      $res = "";

      foreach($explote as $value){
	if($res == ""){
          $res .= " (u.cedula like '%" . $value . "%'";
          $res .= " or u.nombre like '%" . $value . "%'";
	  $res .= " or u.apellido like '%" . $value . "%'";
          $res .= " or m.seco like '%" . $value . "%'";
          $res .= " or m.sopa like '%" . $value . "%'";
          $res .= " or m.postre like '%" . $value . "%'";
          $res .= " or um.dia = '" . $value . "' ) AND";
        }
      }
      if(strlen($res) > 3)
        $res = substr_replace($res ,"",-4);
      return $res;
    }
}
