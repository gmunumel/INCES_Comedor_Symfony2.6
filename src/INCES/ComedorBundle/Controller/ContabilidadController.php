<?php

namespace INCES\ComedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use INCES\ComedorBundle\Entity\Usuario;
use INCES\ComedorBundle\Entity\Menu;
use INCES\ComedorBundle\Entity\UsuarioMenu;
use INCES\ComedorBundle\Form\ContabilidadType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contabilidad controller.
 *
 */
class ContabilidadController extends Controller
{
  public function indexAction(){
    return $this->render('INCESComedorBundle:Contabilidad:index.html.twig');
  }

  public function reporteIngresosTodayAction(){

    $from = new \DateTime('now');
    $to   = new \DateTime('now');

    $em = $this->getDoctrine()->getManager();
    $request    = $this->getRequest();
    $filterForm = $this->createForm(new ContabilidadType());

    if ($request->getMethod() == 'POST') {
      $filterForm->bind($request);

      /* TODO Hacer el calculo del dinero ganado */
      $montoTotal = 0.0;
      $cantidadTotal = 0;
      $rol   = $filterForm->get('rol')->getData();
      $_roles = $em->getRepository('INCESComedorBundle:Rol')->findAll();

      $dql = $em->createQueryBuilder();

      // First Case: fechas no vacio y rol vacio
      if($from != "" and $to != "" and $rol == "" )
        $dql = $this->doSelect(
                      $from->modify('-1 day')->format('Y-m-d'), 
                      $to->modify('+1 day')->format('Y-m-d'), 
                      "", "");
      // Second Case: fechas no vacio y rol no vacio
      else
        $dql = $this->doSelect(
                      $from->modify('-1 day')->format('Y-m-d'), 
                      $to->modify('+1 day')->format('Y-m-d'), 
                      $rol->getId(), "");

      $qry = $em->createQuery($dql);
      $pagination = $qry->getResult();

      // Get amountTotal
      $cantidadTotal = count($pagination);

      // Get monto total
      foreach($pagination as $value){
        $montoTotal += floatval($value->getUsuario()->getRol()->getMonto());
      }

      // Get total values
      $totals = $this->getTotals($_roles, $pagination);

      return $this->render('INCESComedorBundle:Contabilidad:_reporte_ingresos_today.html.twig', array(
        'pagination'     => $pagination
        ,'montoTotal'    => $montoTotal
        ,'cantidadTotal' => $cantidadTotal
        ,'from'          => $from
        ,'to'            => $to
        ,'totals'        => $totals
      ));
    }

    return $this->render('INCESComedorBundle:Contabilidad:reporte_ingresos_today.html.twig', array(
      'filter_form' => $filterForm->createView()
    ));
  }

  public function reporteIngresosAction(){

    $em = $this->getDoctrine()->getManager();
    $request    = $this->getRequest();
    $filterForm = $this->createForm(new ContabilidadType());

    if ($request->getMethod() == 'POST') {
      $filterForm->bind($request);

      /* TODO Hacer el calculo del dinero ganado */
      $montoTotal = 0.0;
      $cantidadTotal = 0;
      $from  = $filterForm->get('from')->getData();
      $to    = $filterForm->get('to')->getData();
      $rol   = $filterForm->get('rol')->getData();
      $_roles = $em->getRepository('INCESComedorBundle:Rol')->findAll();

      $dql = $em->createQueryBuilder();

      // calling dispatcher
      $dql = $this->disReporteIngresos($from, $to, $rol, "");

      $qry = $em->createQuery($dql);
      $pagination = $qry->getResult();

      // Get cantidadTotal
      $cantidadTotal = count($pagination);

      // Get monto total
      foreach($pagination as $value){
        $montoTotal += floatval($value->getUsuario()->getRol()->getMonto());
      }

      // Get total values
      $totals = $this->getTotals($_roles, $pagination);

      return $this->render('INCESComedorBundle:Contabilidad:_reporte_ingresos.html.twig', array(
        'pagination'     => $pagination
        ,'montoTotal'    => $montoTotal
        ,'cantidadTotal' => $cantidadTotal
        ,'from'          => $from
        ,'to'            => $to
        ,'totals'        => $totals
      ));
    }

    return $this->render('INCESComedorBundle:Contabilidad:reporte_ingresos.html.twig', array(
      'filter_form' => $filterForm->createView()
    ));
  }

  public function reporteUsuariosAction(){

    $em         = $this->getDoctrine()->getManager();
    $request    = $this->getRequest();
    $filterForm = $this->createForm(new ContabilidadType());

    if ($request->getMethod() == 'POST') {
      $filterForm->bind($request);

      $from  = $filterForm->get('from')->getData();
      $to    = $filterForm->get('to')->getData();
      $ced   = $filterForm->get('cedula')->getData();

      $dql = $em->createQueryBuilder();
      // First Case: Fechas vacio
      if($from == "" and $to == "")
        $dql = $this->doSelect("", "", "", $ced);
      // Second Case: fechas no vacio
      else
        $dql = $this->doSelect($from->format('Y-m-d'), $to->format('Y-m-d'), "", $ced);

      $qry = $em->createQuery($dql);
      $pagination = $qry->getResult();

      return $this->render('INCESComedorBundle:Contabilidad:_reporte_usuarios.html.twig', array(
        'pagination'     => $pagination
        ,'from'          => $from
        ,'to'            => $to
      ));
    }

    return $this->render('INCESComedorBundle:Contabilidad:reporte_usuarios.html.twig', array(
      'filter_form' => $filterForm->createView()
    ));
  }

  public function printReporteUsuariosAction($ced = "", $from = "", $to = ""){

    $em         = $this->getDoctrine()->getManager();
    $request    = $this->getRequest();

    $dql = $em->createQueryBuilder();
    // First Case: Fechas vacio
    if($from == "" and $to == "")
      $dql = $this->doSelect("", "", "", $ced);
    // Second Case: fechas no vacio
    else
      $dql = $this->doSelect($from, $to, "", $ced);
    $qry = $em->createQuery($dql);
    $pagination = $qry->getResult();

    $html = $this->renderView('INCESComedorBundle:Contabilidad:_print_reporte_usuarios.html.twig', array(
      'pagination'     => $pagination
      ,'from'          => $from
      ,'to'            => $to
    ));
    return $this->printReporte($html, "ReporteUsuarios");
  }

  public function printReportIncomeTodayAction($rol = "", $from = "", $to = ""){

    $from = new \DateTime('now');
    $to   = new \DateTime('now');

    $em = $this->getDoctrine()->getManager();
    $request    = $this->getRequest();

    /* TODO Hacer el calculo del dinero ganado */
    $montoTotal = 0.0;
    $cantidadTotal = 0;
    $_roles = $em->getRepository('INCESComedorBundle:Rol')->findAll();

    $dql = $em->createQueryBuilder();
    // First Case: fechas no vacio y rol vacio
    if($from != "" and $to != "" and $rol == "" )
      $dql = $this->doSelect(
                     $from->modify('-1 day')->format('Y-m-d'), 
                     $to->modify('+1 day')->format('Y-m-d'), "", 
                     "");
    // Second Case: fechas no vacio y rol no vacio
    else
      $dql = $this->doSelect(
                     $from->modify('-1 day')->format('Y-m-d'), 
                     $to->modify('+1 day')->format('Y-m-d'), 
                     $rol, "");
    $qry = $em->createQuery($dql);
    $pagination = $qry->getResult();

    // Get cantidadTotal
    $cantidadTotal = count($pagination);

    // Get monto total
    foreach($pagination as $value){
      $montoTotal += floatval($value->getUsuario()->getRol()->getMonto());
    }

    // Get total values
    $totals = $this->getTotals($_roles, $pagination);

    $html = $this->renderView('INCESComedorBundle:Contabilidad:_print_reporte_ingresos_today.html.twig', array(
      'pagination'     => $pagination
      ,'montoTotal'    => $montoTotal
      ,'cantidadTotal' => $cantidadTotal
      ,'from'          => $from
      ,'to'            => $to
      ,'totals'        => $totals
    ));
    return $this->printReporte($html, "ReportIncomeHoy");
  }

  public function printReportIncomeAction($rol = "", $from = "", $to = ""){

    $em = $this->getDoctrine()->getManager();
    $request    = $this->getRequest();

    /* TODO Hacer el calculo del dinero ganado */
    $montoTotal = 0.0;
    $cantidadTotal = 0;
    $_roles = $em->getRepository('INCESComedorBundle:Rol')->findAll();

    $dql = $em->createQueryBuilder();

    // calling dispatcher
    $dql = $this->disReportIncome($from, $to, $rol, "");

    $qry = $em->createQuery($dql);
    $pagination = $qry->getResult();

    // Get cantidadTotal
    $cantidadTotal = count($pagination);

    // Get monal total
    foreach($pagination as $value){
      $montoTotal += floatval($value->getUsuario()->getRol()->getMonto());
    }

    // Get total values
    $totals = $this->getTotals($_roles, $pagination);

    $html = $this->renderView('INCESComedorBundle:Contabilidad:_print_reporte_ingresos.html.twig', array(
      'pagination'     => $pagination
      ,'montoTotal'    => $montoTotal
      ,'cantidadTotal' => $cantidadTotal
      ,'from'          => $from
      ,'to'            => $to
      ,'totals'        => $totals
    ));

    $translated = 'ReportIncome';
    return $this->printReporte($html, $translated);
  }

  private function isValid($value){
    $valid = false;
    $from = $value->get('from')->getData();
    $to   = $value->get('to')->getData();
    $rol  = $value->get('rol')->getData();
  }

  private function printReporte($html, $nameFile){
    return new Response(
      $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
      200,
      array(
        'Content-Type'          => 'application/pdf',
        'Content-Disposition'   => "'attachment; filename='".$nameFile."'"
      )
    );
  }

  private function doSelect($from, $to, $rol, $ced) {
    $em = $this->getDoctrine()->getManager();
    $dql = $em->createQueryBuilder();
    $dql->select('um', 'u', 'r')
      ->from('INCESComedorBundle:UsuarioMenu', 'um')
      ->join('um.usuario', 'u')
      ->join('u.rol', 'r');
    if($rol != "")
      $dql->andWhere('r.id = '. $rol);
    if($ced != "")
      $dql->andWhere("u.cedula = '".$ced."'");
    else{
      if($from != "" or $to != ""){
        $dql->andWhere("um.dia <= '". $to . "'");
        $dql->andWhere("um.dia >= '". $from . "'");
      }
    }
    if($ced == "")
      $dql->addOrderby('r.id', 'ASC');

    return $dql;
  }

  private function getTotals($roles, $pagination) {

    $totals = array();
    $count  = 0;
    $money  = 0.0;
    foreach($roles as $rol){
      foreach($pagination as $value){
        if($rol == $value->getUsuario()->getRol()->getNombre()){
          $count++;
          $money = floatval($value->getUsuario()->getRol()->getMonto());
        }
      }
      $money = $money * $count;
      if($count == 0)
        $temp = array((string)$rol => array("0", (string)$money));
      else
        $temp = array((string)$rol => array((string)$count, (string)$money));
      $count  = 0;
      $money  = 0.0;
      $totals = array_merge((array)$totals, (array)$temp);
      }
    return $totals;
  }

  private function disReportIncome($from, $to, $rol, $ced){
    $em = $this->getDoctrine()->getManager();
    $dql = $em->createQueryBuilder();
    // First Case: Fechas vacio y rol vacio
    if($from == "" and $to == "" and $rol == "")
      $dql = $this->doSelect("", "", "", "");
    // Second Case: fechas no vacio y rol vacio
    elseif($from != "" and $to != "" and $rol == "" )
      $dql = $this->doSelect($from, $to, "", "");
    // Thrid Case: fechas vacio y rol no vacio
    elseif($from == "" and $to == "" and $rol != "" )
      $dql = $this->doSelect("", "", $rol->getId(), "");
    // Forth Case: fechas no vacio y rol no vacio
    else
      $dql = $this->doSelect($from, $to, $rol, "");

    return $dql;
  }

  private function disReporteIngresos($from, $to, $rol, $ced) {
    $em = $this->getDoctrine()->getManager();
    $dql = $em->createQueryBuilder();
    // First Case: Fechas vacio y rol vacio
    if($from == "" and $to == "" and $rol == "")
      $dql = $this->doSelect("", "", "", "");
    // Second Case: fechas no vacio y rol vacio
    elseif($from != "" and $to != "" and $rol == "" )
      $dql = $this->doSelect($from->format('Y-m-d'), $to->format('Y-m-d'), "", "");
    // Thrid Case: fechas vacio y rol no vacio
    elseif($from == "" and $to == "" and $rol != "" )
      $dql = $this->doSelect("", "", $rol->getId(), "");
    // Forth Case: fechas no vacio y rol no vacio
    else
      $dql = $this->doSelect($from->format('Y-m-d'), $to->format('Y-m-d'), $rol->getId(), "");

    return $dql;
  }
}
