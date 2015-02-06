<?php

namespace INCES\ComedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use INCES\ComedorBundle\Entity\Usuario;
use INCES\ComedorBundle\Form\UsuarioType;
use INCES\ComedorBundle\Form\UsuarioExternoType;
use INCES\ComedorBundle\Form\CargaMasivaType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Usuario controller.
 *
 */
class UsuarioController extends Controller
{

  /**
   * Finds and displays a Usuario entity.
   *
   */
  public function showAction($id)
  {
    $em = $this->getDoctrine()->getEntityManager();

    $entity = $em->getRepository('INCESComedorBundle:Usuario')->find($id);

    if (!$entity) {
      $translated = 'Unable to find User entity';
      throw $this->createNotFoundException($translated);
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('INCESComedorBundle:Usuario:show.html.twig', array(
          'entity'      => $entity,
          'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to create a new Usuario entity.
     *
     */
    public function newAction()
    {
      $entity = new Usuario();
      $form   = $this->createForm(new UsuarioType(), $entity);

      return $this->render('INCESComedorBundle:Usuario:new.html.twig', array(
        'entity' => $entity,
        'form'   => $form->createView()
      ));
    }

    /**
     * Creates a new Usuario entity.
     *
     */
    public function createAction()
    {
      $entity  = new Usuario();
      $request = $this->getRequest();
      $form    = $this->createForm(new UsuarioType(), $entity);
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entity);
        $em->flush();

        $dir = dirname(__FILE__).'/../../../../web/img/uploaded/';

        if(!is_null($form->getData()->getImage()))
          // there is an image by user
          $form->getData()->getImage()->move($dir);

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/usuario/'.$entity->getId().'/show');
        }

        return $this->render('INCESComedorBundle:Usuario:new.html.twig', array(
          'entity' => $entity,
          'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to create a new Usuario entity.
     *
     */
    public function newExternoAction()
    {
      $entity = new Usuario();
      $form   = $this->createForm(new UsuarioExternoType(), $entity);

      return $this->render('INCESComedorBundle:Usuario:new_externo.html.twig', array(
        'entity' => $entity,
        'form'   => $form->createView()
      ));
    }

    /**
     * Creates a new Usuario entity.
     *
     */
    public function createExternoAction()
    {
      $entity  = new Usuario();
      $request = $this->getRequest();
      $form    = $this->createForm(new UsuarioExternoType(), $entity);
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entity);
        $em->flush();

        $dir = dirname(__FILE__).'/../../../../web/img/uploaded/';

        if(!is_null($form->getData()->getImage()))
          $form->getData()->getImage()->move($dir);

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/menu/facturar');
        }

        return $this->render('INCESComedorBundle:Usuario:new_externo.html.twig', array(
          'entity' => $entity,
          'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     */
    public function editAction($id)
    {
      $em = $this->getDoctrine()->getEntityManager();

      $entity = $em->getRepository('INCESComedorBundle:Usuario')->find($id);

      if (!$entity) {
        $translated = 'Unable to find User entity';
        throw $this->createNotFoundException($translated);
        }

        $editForm = $this->createForm(new UsuarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('INCESComedorBundle:Usuario:edit.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Usuario entity.
     *
     */
    public function updateAction($id)
    {
      $em = $this->getDoctrine()->getEntityManager();

      $entity = $em->getRepository('INCESComedorBundle:Usuario')->find($id);

      if (!$entity) {
        $translated = 'Unable to find User entity';
        throw $this->createNotFoundException($translated);
        }

        $editForm   = $this->createForm(new UsuarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bind($request);

        if ($editForm->isValid()) {
          $em->persist($entity);
          $em->flush();

          $dir = dirname(__FILE__).'/../../../../web/img/uploaded/';

          if(!is_null($editForm->getData()->getImage()))
            $editForm->getData()->getImage()->move($dir);

          $route = $request->getBaseUrl();
          return new Response($route.'/#!/usuario/'.$entity->getId().'/show');
        }

        return $this->render("INCESComedorBundle:Usuario:edit.html.twig", array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Usuario entity.
     *
     */
    public function deleteAction($id)
    {
      $form = $this->createDeleteForm($id);
      $request = $this->getRequest();

      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('INCESComedorBundle:Usuario')->find($id);

        if (!$entity) {
          $translated = 'Unable to find User entity';
          throw $this->createNotFoundException($translated);
            }

            $em->remove($entity);
            $em->flush();
        }

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/usuario');
    }

    private function createDeleteForm($id)
    {
      return $this->createFormBuilder(array('id' => $id))
        ->add('id', 'hidden')
        ->getForm()
        ;
    }

    /*
     * Debe ser de la forma *\/*\/* - 20/01/2002
     */
    public function setDate($val){
      $res = "";
      $params = trim($val);
      $explote = explode("/", $params);

      if(count($explote) != 3) return $res;
      if(!is_numeric($explote[0]))
        if($explote[0] != "*")
          return $res;
      if(!is_numeric($explote[1]))
        if($explote[1] != "*")
          return $res;
      if(!is_numeric($explote[2]))
        if($explote[2] != "*")
          return $res;
      if($explote[0] != '*')
        $res .= " (DAY(um.dia) = " . $explote[0] . ") AND";
      if($explote[1] != '*')
        $res .= " (MONTH(um.dia) = " . $explote[1] . ") AND";
      if($explote[2] != '*')
        $res .= " (YEAR(um.dia) = " . $explote[2] . ") AND";
      return $res;
    }

    /*
     *  Search by Cedula
     */
    public function searchAction(){

      $em = $this->getDoctrine()->getEntityManager();
      $request = $this->get('request');
      $query = $request->query->get('query');
      $query = substr_replace($query ,"",-1);

      $dql   = $em->createQueryBuilder();
      $dql->select('um')
        ->from('INCESComedorBundle:UsuarioMenu', 'um')
        ->join('um.usuario', 'u')
        ->where("u.cedula = '".$query."'");

      $qry         = $em->createQuery($dql);
      $usuariomenu = $qry->getResult();
      return $this->render('INCESComedorBundle:Usuario:_search_show.html.twig', array(
        'query'       => $query
        ,'usuariomenu' => $usuariomenu
      ));
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
        return $this->render('INCESComedorBundle:Usuario:_index.html.twig', array(
          'pagination' => $pagination
          ,'query' => $query
          ,'sort' => $sort
          ,'direction'  => $direction
        ));
        }else{
          if ('*' == $query){
            $query = '';
            $pagination = $this->_indexPagination($query, $sort, $direction);
            return $this->render('INCESComedorBundle:Usuario:_index.html.twig', array(
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
            return $this->render('INCESComedorBundle:Usuario:_list.html.twig', array(
              'pagination'  => $pagination
              ,'query'      => $query
            ));
        }
    }

    /*
     *  Search Ajax Lunch de los usuarios que han comido
     */
    public function searchAjaxLunchAction(){
      $request = $this->get('request');
      $query     = $request->query->get('query');
      $sort      = $request->query->get('sort');
      $direction = $request->query->get('direction');

      if(is_null($query))
        $query   = $request->query->get('query')."*";

      if (!$query) {
        $pagination = $this->_indexLunchPagination($query, $sort, $direction);

        // Buscando las personas que ya comieron hoy
        return $this->render('INCESComedorBundle:Usuario:_index_lunch.html.twig', array(
          'pagination'   => $pagination
          ,'query'       => $query
          ,'sort'       => $sort
          ,'direction'        => $direction
        ));
        }else{
            if ('*' == $query){
              $query = '';
              $pagination = $this->_indexLunchPagination($query, $sort, $direction);

              // Buscando las personas que ya comieron hoy
              //$userMenuTd = $this->menuToday();
              return $this->render('INCESComedorBundle:Usuario:_index_lunch.html.twig', array(
                'pagination'   => $pagination
                ,'query'       => $query
                ,'sort'       => $sort
                ,'direction'        => $direction
                //,'userMenuTd'  => $userMenuTd
              ));
                }
                $query = htmlspecialchars(urldecode($query));
                $query = substr_replace($query ,"",-1);
                $_query = $this->paramsLunch($query);
                $pagination = $this->_indexLunchPagination($_query);

                // Buscando las personas que ya comieron hoy
                //$userMenuTd = $this->menuToday();
                return $this->render('INCESComedorBundle:Usuario:_list_lunch.html.twig', array(
                  'pagination'   => $pagination
                  ,'query'       => $query
                ));
        }
    }

    /*
     *  Search Usuario by name using Ajax
     */
    public function searchUsuarioAjaxAction(){

      $em = $this->getDoctrine()->getEntityManager();
      $request = $this->get('request');
      $query = $request->query->get('query');

      $dql   = $em->createQueryBuilder();
      $dql->select('ua')
        ->from('INCESComedorBundle:UserAdmin', 'ua')
        ->where("ua.username = '".$query."'");

      $qry = $em->createQuery($dql);
      $usuario = $qry->getOneOrNullResult();
      $usuario = $usuario == null ? true : false;

      $response = new Response(json_encode($usuario));
      $response->headers->set('Content-Type', 'application/json');

      return $response;
    }

    /*
     *  Search Ajax Lunch de los usuarios que han comido
     */
    public function lunchTodayAction(){
      $em = $this->get('doctrine.orm.entity_manager');
      $dql = $em->createQueryBuilder();
      $dql->select('um')
        ->from('INCESComedorBundle:UsuarioMenu', 'um')
        ->join('um.usuario', 'u')
        ->join('u.rol', 'r');
      $qry = $em->createQuery($dql);
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $qry,
        $this->get('request')->query->get('page', 1),//page number
            $this->container->getParameter('LUNCH_PER_PAGE')//limit per page
          );

      return $this->render('INCESComedorBundle:Usuario:_lunch_today.html.twig', array(
        'pagination'   => $pagination
      ));
    }

    public function cargaMasivaAction(){

      $em      = $this->getDoctrine()->getEntityManager();
      $request = $this->getRequest();
      $cm_form = $this->createForm(new CargaMasivaType());
      //$cm_form->bind($request);

      if ($request->getMethod() == 'POST') {
        $cm_form->bind($request);
        $dir = dirname(__FILE__).'/../../../../web/uploads/';

	$errores = $this->loadFile($cm_form, $dir);

        if($errores != ""){
          return new Response("<p>".$errores."</p>");

          // Eliminar el archivo .csv
          unlink($dir . $nameFile);
            }

            // Guardando en Base de Datos
            $this->saveValues($arr);

            // Eliminar el archivo .csv
            unlink($dir . $nameFile);

            $translated = 'Users loaded succesfully';
            $messages = $translated;
            return new Response("<p>".$messages."</p>");
        }

        return $this->render('INCESComedorBundle:Usuario:carga_masiva.html.twig', array(
          'cm_form'    => $cm_form->createView()
        ));
    }

    public function editMasivoAction(){

      $em      = $this->getDoctrine()->getEntityManager();
      $request = $this->getRequest();
      $cm_form = $this->createForm(new CargaMasivaType());
      //$cm_form->bind($request);

      if ($request->getMethod() == 'POST') {
        $cm_form->bind($request);
        $dir = dirname(__FILE__).'/../../../../web/uploads/';

	/*
        // Colocando en el archivo en la carpeta web/uploads/
        $name        = $cm_form['file']->getData()->move($dir);
        $nameExplode = explode("/", $name);
        $nameFile    = end($nameExplode);

        // Comprobando que el archivo tenga los parametros adecuados
        // Llenando estructura temporal con la informacion del archivo
        $f = fopen ($dir . $nameFile, 'r');
        while (false !== $data = fgetcsv($f, 0, ';'))
          $arr[] = $data;
        fclose($f);

        // Verifico que el archivo este bien formado
        $errores = $this->validaciones($arr, true);
        */

        $errores = $this->loadFile($cm_form, $dir, true);

        if($errores != ""){
          return new Response("<p>".$errores."</p>");

          // Eliminar el archivo .csv
          unlink($dir . $nameFile);
            }

            // Guardando en Base de Datos
            $this->updateValues($arr);

            // Eliminar el archivo .csv
            unlink($dir . $nameFile);

            $translated = 'Users updated succesfully';
            $messages = $translated;
            return new Response("<p>".$messages."</p>");
        }

        return $this->render('INCESComedorBundle:Usuario:edit_masivo.html.twig', array(
          'cm_form'    => $cm_form->createView()
        ));
    }

    private function loadFile($form, $dir, $flag = false){
	// Colocando en el archivo en la carpeta web/uploads/
        $name        = $form['file']->getData()->move($dir);
        $nameExplode = explode("/", $name);
        $nameFile    = end($nameExplode);

        // Comprobando que el archivo tenga los parametros adecuados
        // Llenando estructura temporal con la informacion del archivo
        $f = fopen ($dir . $nameFile, 'r');
        while (false !== $data = fgetcsv($f, 0, ';'))
          $arr[] = $data;
        fclose($f);

        $errores = $this->validaciones($arr, $flag);
	return $errores;
    }

    private function params($params){
      $params = trim($params);
      $explote = explode(" ", $params);
      $res = "";

      foreach($explote as $value){
        $res .= " (u.cedula like '%" . $value . "%'";
        $res .= " or u.nombre like '%" . $value . "%'";
        $res .= " or u.apellido like '%" . $value . "%'";
        $res .= " or u.ncarnet like '%" . $value . "%'";
        $res .= " or u.correo like '%" . $value . "%') AND";
        }
        $res = substr_replace($res ,"",-4);
        return $res;
    }

    private function paramsLunch($params){
      $params = trim($params);
      $explote = explode(" ", $params);
      $res = "";

      foreach($explote as $value){
        $res .= $this->setDate($value);
        if($res == ""){
          $res .= " (u.cedula like '%" . $value . "%'";
          $res .= " or u.nombre like '%" . $value . "%'";
          $res .= " or u.apellido like '%" . $value . "%') AND";
            }
        }
        if(strlen($res) > 3)
          $res = substr_replace($res ,"",-4);
        return $res;
    }

    private function validaciones($arr, $edit = false){
      $i     = 0;
      $em    = $this->getDoctrine()->getEntityManager();
      $dql   = $em->createQueryBuilder();
      $dql->select('r.nombre')
        ->from('INCESComedorBundle:Rol', 'r');
      $qry = $em->createQuery($dql);
      $_roles = $qry->getResult();
      $roles  = array();
      foreach($_roles as $value)
        array_push($roles, $value['nombre']);

      $dql->select('u.cedula')
        ->from('INCESComedorBundle:Usuario', 'u');
      $qry = $em->createQuery($dql);
      $_users = $qry->getResult();
      $users  = array();
      foreach($_users as $value)
        array_push($users, $value['cedula']);

      // translations
      $translated_pll = 'For the line';
      $translated_nf = 'doesn\'t have the correct number of fields';
      $translated_rn = 'the field "Rol" doesn\'t appear in database';
      $translated_nv = 'the field "Name" cannot be empty';
      $translated_nci = 'the field "Name" contains invalid characters';
      $translated_av = 'the field "Last Name" cannot be empty';
      $translated_aci = 'the field "Last Name" contains invalid characters';
      $translated_ci = 'the field "Id" cannot be empty';
      $translated_cci = 'the field "Id" contains invalid characters';
      $translated_cndb = 'the field "Id" is not in database';
      $translated_ncci = 'the field "Card Number" cannot be empty';
      $translated_nccci = 'the field "Card Number" contains invalid characters';
      $translated_eci = 'the field "Email" is invalid';
      foreach($arr as $value){
        $i++;
        if($i == 1) continue;

        // Cantidad de valores
        $split = explode(",", $value[0]);
        if(count($split) != 6)
          return $translated_pll." ".$i." ". $translated_nf;

        // Rol
        if(!in_array($split[0], $roles))
          return $translated_pll ." ".$i." " .$translated_rn;

        // Nombre
        if($split[1] == "")
          return $translated_pll . " ".$i." " .$translated_nv;
        elseif(!ctype_alpha($split[1]))
          return $translated_pll . " ".$i." " .$translated_nci;

        // Apellido
        if($split[2] == "")
          return $translated_pll . " ".$i." ".$translated_av;
        elseif(!ctype_alpha($split[2]))
          return $translated_pll . " ".$i." ".$translated_aci;

        // Cedula
        if($split[3] == "")
          return $translated_pll . " ".$i." ".$translated_ci;
        elseif(!ctype_digit($split[3]))
          return $translated_pll . " ".$i." ".$translated_cci;

        // Cedula que exista en BD
        if($edit)
          if(!in_array($split[3], $users))
            return $translated_pll . " ".$i." ".$translated_cndb;

        // N Carnet
        if($split[4] == "")
          return $translated_pll . " ".$i." ".$translated_ncci;
        elseif(!ctype_digit($split[4]))
          return $translated_pll . " ".$i." ".$translated_nccci;

        // Correo
        if($split[5] == "") continue;
        elseif(!filter_var($split[5], FILTER_VALIDATE_EMAIL))
          return $translated_pll . " ".$i." ".$translated_eci;
        }
        return "";
    }

    private function saveValues($arr){
      $i      = 0;
      $rol_id = 0;
      $em     = $this->getDoctrine()->getEntityManager();
      $roles  = $em->getRepository('INCESComedorBundle:Rol')->findAll();
      $conn   = $this->get('database_connection');

      foreach($arr as $value){
        $i++;
        if($i == 1) continue;

        // Obteniendo valores
        $split = explode(",", $value[0]);

        // Rol
        foreach($roles as $rol)
          if($rol->getNombre() == $split[0]){
            $rol_id = $rol->getId();
            break;
                }

            $conn->insert('User',
              array('rol_id'   => $rol_id
              ,'nombre'   => $split[1]
              ,'apellido' => $split[2]
              ,'cedula'   => $split[3]
              ,'ncarnet'  => $split[4]
              ,'correo'   => $split[5]
            )
          );
        }
    }

    private function updateValues($arr){
      $i      = 0;
      $rol_id = 0;
      $em     = $this->getDoctrine()->getEntityManager();
      $roles  = $em->getRepository('INCESComedorBundle:Rol')->findAll();
      $qb     = $em->createQueryBuilder();

      foreach($arr as $value){
        $i++;
        if($i == 1) continue;

        // Obteniendo valores
        $split = explode(",", $value[0]);

        // Rol
        foreach($roles as $rol)
          if($rol->getNombre() == $split[0]){
            $rol_id = $rol->getId();
            break;
                }

            // Updating values
            $q = $qb->update('INCES\ComedorBundle\Entity\Usuario', 'u')
              ->set('u.rol', $qb->expr()->literal($rol_id))
              ->set('u.nombre', $qb->expr()->literal($split[1]))
              ->set('u.apellido', $qb->expr()->literal($split[2]))
              ->set('u.ncarnet', $qb->expr()->literal($split[4]))
              ->set('u.correo', $qb->expr()->literal($split[5]))
              ->where('u.cedula = ?1')
              ->setParameter(1, $split[3])
              ->getQuery();
            $p = $q->execute();
        }
    }

     /*
     * Do a general select for Menu
     */
    private function doSelectUsuarioMenu($sort, $query, $direction){
	$em = $this->get('doctrine.orm.entity_manager');
    	$dql = $em->createQueryBuilder();
	$dql->select('um')
      	    ->from('INCESComedorBundle:UsuarioMenu', 'um')
            ->join('um.usuario', 'u');
	if($query != "")
	  $dql->where($query);
        if($sort != "")
          $dql->orderBy($sort, $direction);

	return $dql;
    }

    /*
     * Do a general select for Usuario
     */
    private function doSelectUser($sort, $query, $direction){
	$em = $this->get('doctrine.orm.entity_manager');
    	$dql = $em->createQueryBuilder();
	$dql->select('u', 'r')
      	    ->from('INCESComedorBundle:Usuario', 'u')
            ->join('u.rol', 'r')
	    ->where('r.id = u.rol');
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
         /*
	 $dql->add('select', 'u')
          ->add('from', 'INCESComedorBundle:Usuario u')
          ->join('u.rol', 'r');
          */
          $dql = $this->doSelectUser("", "", "");
        else
          // In case i'm searching a user
          /*
          $dql->add('select', 'u')
          ->add('from', 'INCESComedorBundle:Usuario u')
          ->join('u.rol', 'r')
          ->where($query);
          */
          $dql = $this->doSelectUser("", $query, "");

      elseif ($direction == 'asc')
        if($sort != 'u.rol')
          /*
          $dql->add('select', 'u')
          ->add('from', 'INCESComedorBundle:Usuario u')
          ->join('u.rol', 'r')
          ->add('orderBy', $sort.' ASC');
          */
          $dql = $this->doSelectUser($sort, "", 'ASC');
        else
          /*
          $dql->add('select', 'u')
          ->add('from', 'INCESComedorBundle:Usuario u')
          ->join('u.rol', 'r')
          ->add('orderBy', 'r.nombre ASC');
          */
          $dql = $this->doSelectUser('r.nombre', "", 'ASC');

      else
        if($sort != 'u.rol')
          /*
          $dql->add('select', 'u')
          ->add('from', 'INCESComedorBundle:Usuario u')
          ->join('u.rol', 'r')
          ->add('orderBy', $sort.' DESC');
          */
          $dql = $this->doSelectUser($sort, "", 'DESC');
        else
          /*
          $dql->add('select', 'u')
          ->add('from', 'INCESComedorBundle:Usuario u')
          ->join('u.rol', 'r')
          ->add('orderBy', 'r.nombre DESC');
          */
          $dql = $this->doSelectUser('r.nombre', "", 'DESC');

      $qry = $em->createQuery($dql);
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $qry,
        $this->get('request')->query->get('page', 1),//page number
            $this->container->getParameter('RESULTS_PER_PAGE')//limit per page
          );
      return $pagination;
    }

    private function _indexLunchPagination($query, $sort = null, $direction = null){

      $em = $this->get('doctrine.orm.entity_manager');
      $dql = $em->createQueryBuilder();
      $isnotquery = false;
      if (is_null($sort))
        if(!$query || $query == '*')
          /*
          $dql->select('um')
          ->from('INCESComedorBundle:UsuarioMenu', 'um')
          ->join('um.usuario', 'u')
          ->orderBy('um.dia', 'DESC');
          */
          $dql = $this->doSelectUsuarioMenu('um.dia', "", 'DESC');
        else
          /*
          $dql->add('select', 'um')
          ->add('from', 'INCESComedorBundle:UsuarioMenu um')
          ->join('um.usuario', 'u')
          ->where($query);
          */
          $dql = $this->doSelectUsuarioMenu("", $query, "");

      elseif ($direction == 'asc')
        //if($sort != 'u.cedula' && $sort != 'u.nombre' && $sort != 'u.apellido')
          /*
          $dql->select('um')
          ->from('INCESComedorBundle:UsuarioMenu', 'um')
          ->join('um.usuario', 'u')
          ->orderBy($sort, 'ASC');
          */
          $dql = $this->doSelectUsuarioMenu($sort, "", 'ASC');
        //else
          /*
          $dql->select('um')
          ->from('INCESComedorBundle:UsuarioMenu', 'um')
          ->join('um.usuario', 'u')
          ->orderBy($sort, 'ASC');
          */
      else
        //if($sort != 'u.cedula' && $sort != 'u.nombre' && $sort != 'u.apellido')
          /*
          $dql->select('um')
          ->from('INCESComedorBundle:UsuarioMenu', 'um')
          ->join('um.usuario', 'u')
          ->orderBy($sort, 'DESC');
          */
          $dql = $this->doSelectUsuarioMenu($sort, "", 'DESC');
        //else
          /*
          $dql->select('um')
          ->from('INCESComedorBundle:UsuarioMenu', 'um')
          ->join('um.usuario', 'u')
          ->orderBy($sort, 'DESC');
          */
          //$dql = $this->doSelectUsuarioMenu($sort, "", 'DESC');

      $qry = $em->createQuery($dql);
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $qry,
        $this->get('request')->query->get('page', 1),//page number
            $this->container->getParameter('RESULTS_PER_PAGE')//limit per page
          );
      return $pagination;
    } 
    
}
