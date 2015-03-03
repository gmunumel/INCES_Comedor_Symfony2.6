<?php

namespace INCES\ComedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INCES\ComedorBundle\Entity\Usuario;
use INCES\ComedorBundle\Entity\Menu;
use INCES\ComedorBundle\Entity\UsuarioMenu;
use INCES\ComedorBundle\Form\MenuType;
use INCES\ComedorBundle\Form\MenuTodayType;
use INCES\ComedorBundle\Form\UsuarioMenuType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Menu controller.
 *
 */
class MenuController extends Controller
{

    /*
     * Search Action dos
     */
    public function searchAction(){
      $request = $this->get('request');
      $query      = $request->query->get('query');
      $sort       = $request->query->get('sort');
      $direction  = $request->query->get('direction');

      if(is_null($query))
        $query   = $query.'*';

      if (!$query) {
        $pagination = $this->_indexPagination($query, $sort, $direction);
        return $this->render('INCESComedorBundle:Menu:_index.html.twig', array(
          'pagination' => $pagination
          ,'query' => $query
          ,'sort' => $sort
          ,'direction'  => $direction
        ));
        }else{
            if ('*' == $query){
              $query = '';
              $pagination = $this->_indexPagination($query, $sort, $direction);
              return $this->render('INCESComedorBundle:Menu:_index.html.twig', array(
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
                return $this->render('INCESComedorBundle:Menu:_list.html.twig', array(
                  'pagination'  => $pagination
                  ,'query'      => $query
                ));
        }
        // never be executed this line
        return new Response('Hello, world');
    }

    /**
     * Lists all Menu entities.
     *
     */
    public function indexAction($query = '')
    {
      $em = $this->get('doctrine.orm.entity_manager');
      $dql = $em->createQueryBuilder();
      $dql->add('select', 'a')
        ->add('from', 'INCESComedorBundle:Menu a');
      $qry = $em->createQuery($dql);

      $paginator = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $qry,
        $this->get('request')->query->get('page', 1),//page number
            $this->container->getParameter('RESULTS_PER_PAGE')//limit per page
          );
      return $this->render('INCESComedorBundle:Menu:index.html.twig', array(
        'pagination' => $pagination
        ,'query' => $query
      ));
    }

    /**
     * Finds and displays a Menu entity.
     *
     */
    public function showAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Menu')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Menu entity';
        throw $this->createNotFoundException($translated);
      }

      $deleteForm = $this->createDeleteForm($id);

      return $this->render('INCESComedorBundle:Menu:show.html.twig', array(
          'entity'      => $entity,
          'delete_form' => $deleteForm->createView(),

      ));
    }

    /**
     * Displays a form to create a new Menu entity.
     *
     */
    public function newAction()
    {
      $entity = new Menu();
      $form   = $this->createForm(new MenuType(), $entity);

      return $this->render('INCESComedorBundle:Menu:new.html.twig', array(
        'entity' => $entity,
        'form'   => $form->createView()
      ));
    }

    /**
     * Creates a new Menu entity.
     *
     */
    public function createAction()
    {
      $entity  = new Menu();
      $request = $this->getRequest();
      $form    = $this->createForm(new MenuType(), $entity);
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/menu/'.$entity->getId().'/show');
        }

        return $this->render('INCESComedorBundle:Menu:new.html.twig', array(
          'entity' => $entity,
          'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Menu entity.
     *
     */
    public function editAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Menu')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Menu entity';
        throw $this->createNotFoundException($translated);
        }

        $editForm = $this->createForm(new MenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('INCESComedorBundle:Menu:edit.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Menu entity.
     *
     */
    public function updateAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Menu')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Menu entity';
        throw $this->createNotFoundException($translated);
        }

        $editForm   = $this->createForm(new MenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bind($request);

        if ($editForm->isValid()) {
          $em->persist($entity);
          $em->flush();

          $route = $request->getBaseUrl();
          return new Response($route.'/#!/menu/'.$entity->getId().'/show');
        }

        return $this->render('INCESComedorBundle:Menu:edit.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Menu entity.
     *
     */
    public function deleteAction($id)
    {
      $form = $this->createDeleteForm($id);
      $request = $this->getRequest();

      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('INCESComedorBundle:Menu')->find($id);

        if (!$entity) {
          $translated = 'Unable to find Menu entity';
          throw $this->createNotFoundException($translated);
            }

            $em->remove($entity);
            $em->flush();
        }

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/menu');
    }

    /**
     * Finds and displays a Menu entity.
     *
     */
    public function showTodayAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Menu')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Menu entity';
        throw $this->createNotFoundException($translated);
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('INCESComedorBundle:Menu:show_today.html.twig', array(
          'entity'      => $entity,
          'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Menu entity.
     *
     */
    public function newTodayAction()
    {
      $entity = new Menu();
      $form   = $this->createForm(new MenuTodayType(), $entity);

      return $this->render('INCESComedorBundle:Menu:new_today.html.twig', array(
        'entity' => $entity,
        'form'   => $form->createView()
      ));
    }

    /**
     * Creates a new Menu entity.
     *
     */
    public function createTodayAction()
    {
      $entity  = new Menu();
      $request = $this->getRequest();
      $form    = $this->createForm(new MenuTodayType(), $entity);
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/menu/'.$entity->getId().'/showtoday');
        }

        return $this->render('INCESComedorBundle:Menu:new_today.html.twig', array(
          'entity' => $entity,
          'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Menu entity.
     *
     */
    public function editTodayAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Menu')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Menu entity';
        throw $this->createNotFoundException($translated);
        }

        $editForm = $this->createForm(new MenuTodayType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('INCESComedorBundle:Menu:edit_today.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Menu entity.
     *
     */
    public function updateTodayAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Menu')->find($id);

      if (!$entity) {
        $translated = 'Unable to find Menu entity';
        throw $this->createNotFoundException($translated);
        }

        $editForm   = $this->createForm(new MenuTodayType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bind($request);

        if ($editForm->isValid()) {
          $em->persist($entity);
          $em->flush();

          $route = $request->getBaseUrl();
          return new Response($route.'/#!/menu/'.$entity->getId().'/showtoday');
        }

        return $this->render('INCESComedorBundle:Menu:edit_today.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Menu entity.
     *
     */
    public function deleteTodayAction($id)
    {
      $form = $this->createDeleteForm($id);
      $request = $this->getRequest();

      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('INCESComedorBundle:Menu')->find($id);

        if (!$entity) {
          $translated = 'Unable to find Menu entity';
          throw $this->createNotFoundException($translated);
            }

            $em->remove($entity);
            $em->flush();
        }

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/menu/today');
    }

    /*
     * Mostrar el menu del dia
     */
    public function todayAction(){

      //$em = $this->get('doctrine.orm.entity_manager');

      $now = new \DateTime;

      $em = $this->get('doctrine.orm.entity_manager');
      $dql = $em->createQueryBuilder();
      $dql->add('select', 'a')
        ->add('from', 'INCESComedorBundle:Menu a')
        ->add('where', "a.dia = '".$now->format("Y-m-d 00:00:00")."'");

      $qry = $em->createQuery($dql);
      $dql = $qry->getResult();
      return $this->render('INCESComedorBundle:Menu:today.html.twig', array(
        'menusToday' => $dql
      ));
    }

    /**
     * Creates a new Facturar Procesar entity.
     *
     */
    public function facturarProcesarAction()
    {
      $request = $this->get('request');
      $conn    = $this->get('database_connection');

      $usuario = $_POST["usuario"];
      $dia     = new \DateTime('now');
      $dia     = $dia->format('Y-m-d H:i:s');

      if(!isset($_POST["menus"])) {
        $conn->insert('UsuarioMenu',
          array('usuario_id' => $usuario
          ,'dia'             => $dia
        )
      );
      }else{
        $menu    = $_POST["menus"];
        $conn->insert('UsuarioMenu',
          array('usuario_id' => $usuario
          ,'dia'        => $dia
          ,'menu_id'    => $menu
        )
      );
        }

        $route = $request->getBaseUrl();
        return new Response($route.'/#!/menu/facturar');
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showFacturarAction($id)
    {
      $request = $this->getRequest();

      $em = $this->getDoctrine()->getManager();
      $emConfig = $em->getConfiguration();
      $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
      $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
      $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');

      $entity = $em->getRepository('INCESComedorBundle:Usuario')->find($id);

      if (!$entity) {
        $translated = 'Unable to find User entity';
        throw $this->createNotFoundException($translated);
        }
        $deleteForm = $this->createDeleteForm($id);

        //Verificar si se encuentra dentro del horario
	/*
	$em = $this->get('doctrine.orm.entity_manager');
	$dql = $em->createQueryBuilder();
        $dql->select('u, r')
          ->from('INCESComedorBundle:Usuario', 'u')
          ->join('u.rol', 'r')
          ->where('u.id = '. $id);
        $qry    = $em->createQuery($dql);
        $entity = $qry->getResult();
        $entity = $entity[0];

        $now = new \DateTime('now');
        $hour = $now->format('H');
        $hours = $this->comparisonHours($entity->getRol()->getHoraComerStartAMPM(),
			$entity->getRol()->getHoraComerEndAMPM(),
			$entity->getRol()->getHoraComerStart(),
			$entity->getRol()->getHoraComerEnd());

	*/
	$hours = $this->validHours($id);
	$hourStart = $hours[0];
        $hourEnd = $hours[1];
	$entity = $hours[2];
	$now = new \DateTime('now');
	$hour = $now->format('H');

        if ($hour < $hourStart || $hour > $hourEnd){
          $content = $this->renderView(
            'INCESComedorBundle:Menu:error_already_eat.html.twig', array(
              'nombre' => $entity->getNombre(),
               'apellido' => $entity->getApellido(),
               'rol_name' => $entity->getRol()->getNombre(),
               'hora_start' => $entity->getRol()->getHoraComerStart(),
               'hora_startAMPM' => $entity->getRol()->getHoraComerStartAMPM(),
               'hora_end' => $entity->getRol()->getHoraComerEnd(),
               'hora_endAMPM' => $entity->getRol()->getHoraComerEndAMPM()
             ));
          return new Response($content);
        }
        //
        //Verificar si ya ha comido esa persona ese mismo dia
        $now = new \DateTime('now');
        /*
        $dql = $em->createQuery('SELECT COUNT(um.id) FROM INCES\ComedorBundle\Entity\UsuarioMenu um WHERE um.usuario = :id and YEAR(um.dia) = :year and MONTH(um.dia) = :month and DAY(um.dia) = :day');
        $dql->setParameter('id', $id);
        $dql->setParameter('year', $now->format("Y"));
        $dql->setParameter('month', $now->format("m"));
        $dql->setParameter('day', $now->format("d"));
        $count = $dql->getSingleScalarResult();
	*/

        /* TODO Optimizar estos 2 querys
         *  Arreglar URL
     */
        //if($count > 0){
	  $em = $this->get('doctrine.orm.entity_manager');
          $dql = $em->createQuery('SELECT um FROM INCES\ComedorBundle\Entity\UsuarioMenu um WHERE um.usuario = :id and YEAR(um.dia) = :year and MONTH(um.dia) = :month and DAY(um.dia) = :day');
          $dql->setParameter('id', $id);
          $dql->setParameter('year', $now->format("Y"));
          $dql->setParameter('month', $now->format("m"));
          $dql->setParameter('day', $now->format("d"));
          $_entity   = $dql->getOneOrNullResult();
	  if($_entity != null){
		  //$_entity   = $_entity[0];
		  $lncHora   = $_entity->getDia()->format("H");
		  $lncMinuto = $_entity->getDia()->format("i");
		  $ampm      = "am";
		  if($lncHora > 12){
		    $lncHora = $lncHora - 12;
		    $ampm = "pm";
		  }
		  if($lncHora == 12) $ampm = "pm";
		  if($lncHora == 24) $ampm = "am";
		  $path = $request->getBaseUrl().'/#!/usuario/searchalnc';
		  $content = $this->renderView(
		    'INCESComedorBundle:Menu:last_eat.html.twig', array(
		      'nombre' => $entity->getNombre(),
		      'apellido' => $entity->getApellido(),
		      'hora' => $lncHora,
		      'minuto' => $lncMinuto,
		      'ampm' => $ampm,
		      'path' => $path
		  ));
		  return new Response($content);
           }


        // Buscando menus del dia
        $now = new \DateTime;
        $menus = $em->createQueryBuilder();
        $menus->add('select', 'm')
          ->add('from', 'INCESComedorBundle:Menu m')
          ->add('where', "m.dia = '".$now->format("Y-m-d 00:00:00")."'");

        $qry   = $em->createQuery($menus);
        $menus = $qry->getResult();

        return $this->render('INCESComedorBundle:Menu:show_facturar.html.twig', array(
          'entity'      => $entity,
          'menus'       => $menus,
          'delete_form' => $deleteForm->createView(),
        ));
    }

    /*
     *  Search Ajax Facturar
     */
    public function searchAjaxFacturarAction(){
      $request = $this->get('request');
      $query      = $request->query->get('query');
      $sort       = $request->query->get('sort');
      $direction  = $request->query->get('direction');

      if (!$query) {
        $pagination = $this->_indexFacturarPagination($query, $sort, $direction);

        // Buscando las personas que ya comieron hoy
        $userLncTd = $this->lncToday();
        return $this->render('INCESComedorBundle:Menu:_index_facturar.html.twig', array(
          'pagination'  => $pagination
          ,'query'      => $query
          ,'sort'       => $sort
          ,'direction'  => $direction
          ,'userLncTd'  => $userLncTd
        ));

        }else{
            if ('*' == $query){
              $query = '';
              $pagination = $this->_indexFacturarPagination($query, $sort, $direction);

              // Buscando las personas que ya comieron hoy
              $userLncTd = $this->lncToday();
              return $this->render('INCESComedorBundle:Menu:_index_facturar.html.twig', array(
                'pagination'  => $pagination
                ,'query'      => $query
                ,'sort'       => $sort
                ,'direction'  => $direction
                ,'userLncTd'  => $userLncTd
              ));
                }
                $query = htmlspecialchars(urldecode($query));
                $query = substr_replace($query ,"",-1);
                $_query = $this->paramsFacturar($query);
                $pagination = $this->_indexFacturarPagination($_query);

                // Buscando las personas que ya comieron hoy
                $userLncTd = $this->lncToday();
                return $this->render('INCESComedorBundle:Menu:_list_facturar.html.twig', array(
                  'pagination'  => $pagination
                  ,'query'      => $query
                  ,'userLncTd'  => $userLncTd
                ));
        }
    }

    /*
     * Ask for a value in each field
     */
    private function paramsFacturar($params){
      $params = trim($params);
      $explote = explode(" ", $params);
      $res = "";

      foreach($explote as $value){
        $res .= " (u.cedula like '%" . $value . "%'";
        $res .= " or u.nombre like '%" . $value . "%'";
        $res .= " or u.apellido like '%" . $value . "%'";
        $res .= " or u.ncarnet like '%" . $value . "%'";
        $res .= " or u.correo like '%" . $value . "%'";
        $res .= " or r.nombre like '%" . $value . "%') AND";
        }
        $res = substr_replace($res ,"",-4);
        return $res;
    }

    /*
     * Debe ser de la forma *\/*\/* - 20/01/2002
     */
    private function setDate($val){
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
        $res .= " (DAY(a.dia) = " . $explote[0] . ") AND";
      if($explote[1] != '*')
        $res .= " (MONTH(a.dia) = " . $explote[1] . ") AND";
      if($explote[2] != '*')
        $res .= " (YEAR(a.dia) = " . $explote[2] . ") AND";
      return $res;
    }

    /*
     * Ask for a value in each field
     */
    private function params($params){
      $params = trim($params);
      $explote = explode(" ", $params);
      $res = "";
      $ret = "";

      foreach($explote as $value){
        $ret = $this->setDate($value);
        $res .= $ret;
        if($ret == ""){
          $res .= " (m.seco LIKE '%" . $value . "%'";
          $res .= " OR m.sopa LIKE '%" . $value . "%'";
          $res .= " OR m.salado LIKE '%" . $value . "%'";
          $res .= " OR m.jugo LIKE '%" . $value . "%'";
          $res .= " OR m.ensalada LIKE '%" . $value . "%'";
          $res .= " OR m.postre LIKE '%" . $value . "%' ) AND";
         }
      }
      if(strlen($res) > 3)
        $res = substr_replace($res ,"",-4);
      return $res;
    }

    /*
     * Create a delete Form
     */
    private function createDeleteForm($id)
    {
      return $this->createFormBuilder(array('id' => $id))
        ->add('id', 'hidden')
        ->getForm()
        ;
    }

    /*
     * Comparison of hours
     */
    private function comparisonHours($hourStartAMPM, $hourEndAMPM, $hourStart, $hourEnd){
	$hours = array(0, 0);
	if ($hourStartAMPM == "pm"){
          $hours[0] = $hourStart + 12;
          $hours[1] = $hourEnd + 12;
        }elseif ($hourStartAMPM == "pm" and $hourEndAMPM == "am"){
          $hours[0] = $hourStart + 12;
          $hours[1] = $hourEnd;
        }elseif ($hourStartAMPM == "am" and $hourEndAMPM == "pm"){
          $hours[0] = $hourStart;
          $hours[1] = $hourEnd + 12;
        }else{
          $hours[0] = $hourStart;
          $hours[1] = $hourEnd;
        }
	return $hours;
    }

    /*
     * Check if the hours are valid
     */
    private function validHours($id){
	$hours = array(0, 0);
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = $em->createQueryBuilder();
        $dql->select('u, r')
          ->from('INCESComedorBundle:Usuario', 'u')
          ->join('u.rol', 'r')
          ->where('u.id = '. $id);
        $qry    = $em->createQuery($dql);
        $entity = $qry->getResult();
        $entity = $entity[0];

        $now = new \DateTime('now');
        $hour = $now->format('H');
        $hours = $this->comparisonHours($entity->getRol()->getHoraComerStartAMPM(),
			$entity->getRol()->getHoraComerEndAMPM(),
			$entity->getRol()->getHoraComerStart(),
			$entity->getRol()->getHoraComerEnd());

	$array = array($hours[0], $hours[1], $entity);
	return $array;
   }

    /*
     * Search users already eat
     */
    private function lncToday(){

      $em = $this->get('doctrine.orm.entity_manager');
      $emConfig = $em->getConfiguration();
      $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
      $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
      $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');

      // Buscando las personas que ya comieron hoy
      $now = new \DateTime('now');
      $dql = $em->createQueryBuilder();
      $dql->select('um')
        ->from('INCESComedorBundle:UsuarioMenu','um')
        ->where("YEAR(um.dia) = '".$now->format("Y")."'")
        ->andWhere("MONTH(um.dia) = '".$now->format("m")."'")
        ->andWhere("DAY(um.dia) = '".$now->format("d")."'");
      $qry = $em->createQuery($dql);
      $userLncTd = $qry->getResult();

      return $userLncTd;
    }

    /*
     * Do a general select for Menu
     */
    private function doSelectMenu($sort, $query, $direction){
	$em = $this->get('doctrine.orm.entity_manager');
    	$dql = $em->createQueryBuilder();
	$dql->select('m')
      	    ->from('INCESComedorBundle:Menu', 'm');
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

    /**
     * Lists all Usuario entities.
     */
    private function _indexFacturarPagination($query, $sort = null, $direction = null){

      $em = $this->get('doctrine.orm.entity_manager');
      //$dql = $em->createQueryBuilder();
      if (is_null($sort))
        if(!$query || $query == '*')
          /*
          $dql->select('u')
          ->from('INCESComedorBundle:Usuario', 'u')
          ->join('u.rol', 'r');
 	  */
	  $dql = $this->doSelectUser("", "", "");
        else
              /*
              $dql->add('select', 'u')
              ->add('from', 'INCESComedorBundle:Usuario u')
              ->join('u.rol', 'r')
              ->where($query);
              */
              $dql = $this->doSelectUser("", $query, "");

        elseif ($direction == 'asc')
          if($sort != 'rol')
            /*
	    $dql->select('u')
            ->from('INCESComedorBundle:Usuario', 'u')
            ->join('u.rol', 'r')
            ->where('r.id = u.rol')
            ->orderBy($sort, 'ASC');
            */
            $dql = $this->doSelectUser($sort, "", 'ASC');
          else
            /*
            $dql->select('u')
            ->from('INCESComedorBundle:Usuario', 'u')
            ->join('u.rol', 'r')
            ->where('r.id = u.rol')
            ->orderBy('r.nombre', 'ASC');
            */
            $dql = $this->doSelectUser('r.nombre', "", 'ASC');
        else
          if($sort != 'rol')
            /*
            $dql->select('u')
            ->from('INCESComedorBundle:Usuario', 'u')
            ->join('u.rol', 'r')
            ->where('r.id = u.rol')
            ->orderBy($sort, 'DESC');
            */
	    $dql = $this->doSelectUser($sort, "", 'DESC');
          else
	    /*
            $dql->select('u')
            ->from('INCESComedorBundle:Usuario', 'u')
            ->join('u.rol', 'r')
            ->where('r.id = u.rol')
            ->orderBy('r.nombre', 'DESC');
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

   /*
   * Adding pagination
   */
  public function _indexPagination($query, $sort = null, $direction = null){

    $em = $this->get('doctrine.orm.entity_manager');
    //$dql = $em->createQueryBuilder();
    if (is_null($sort))
      if(!$query || $query == '*')
        /*
        $dql->add('select', 'm')
        ->add('from', 'INCESComedorBundle:Menu m');
        */
        $dql = $this->doSelectMenu("", "", "");
      else
        /*
        $dql->add('select', 'm')
        ->add('from', 'INCESComedorBundle:Menu m')
        ->where($query);
        */
        $dql = $this->doSelectMenu("", $query, "");
    elseif ($direction == 'asc')
      /*
      $dql->add('select', 'm')
      ->add('from', 'INCESComedorBundle:Menu m')
      ->add('orderBy', $sort.' ASC');
      */
      $dql = $this->doSelectMenu($sort, "", 'ASC');
    else
      /*
      $dql->add('select', 'a')
      ->add('from', 'INCESComedorBundle:Menu a')
      ->add('orderBy', $sort.' DESC');
      */
      $dql = $this->doSelectMenu($sort, "", 'DESC');

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
