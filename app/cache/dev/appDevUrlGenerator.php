<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'INCESComedorBundle_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'INCESComedorBundle_error' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\DefaultController::errorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::searchAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::searchAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_facturar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::searchAjaxFacturarAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/facturar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_search_ajax_facturar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::searchAjaxFacturarAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/searchafact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_facturar_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::facturarProcesarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/facturar/procesar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_show_facturar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::showFacturarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showfacturar',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_today' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::todayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/today',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_today_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::showTodayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showtoday',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_today_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::newTodayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/newtoday',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_today_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::createTodayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu/createtoday',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_today_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::editTodayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edittoday',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_today_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::updateTodayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/updatetoday',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_today_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::deleteTodayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deletetoday',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rol/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rol',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rol/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rol/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rol',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rol',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rol',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rol_error_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::errorDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rol/edelete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::searchAjaxAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::searchAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_search_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::searchAjaxAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/searcha',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_search_ajax_lunch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::searchAjaxLunchAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/searchalnc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_carga_masiva' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::cargaMasivaAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/cargamasiva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_edit_carga_masiva' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::editMasivoAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/editmasivo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_lunch_today' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::lunchTodayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/lunchtoday',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_new_externo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::newExternoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/newexterno',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_create_externo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::createExternoAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/createexterno',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ticket' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\TicketController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ticket_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\TicketController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ticket',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuariomenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::searchAjaxAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuariomenu/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuariomenu_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuariomenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuariomenu_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuariomenu/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuariomenu_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuariomenu/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuariomenu_search_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::searchAjaxAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuariomenu/searcha',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contabilidad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contabilidad/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contabilidad_reporte_ingresos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::reporteIngresosAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contabilidad/reporteingresos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contabilidad_reporte_ingresos_today' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::reporteIngresosTodayAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contabilidad/reporteingresostoday',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contabilidad_reporte_usuarios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::reporteUsuariosAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contabilidad/reporteusuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contabilidad_print_reporte_usuarios' => array (  0 =>   array (    0 => 'ced',    1 => 'from',    2 => 'to',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::printReporteUsuariosAction',    'ced' => '',    'from' => '',    'to' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ced',    ),    3 =>     array (      0 => 'text',      1 => '/contabilidad/preporteusuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contabilidad_print_reporte_ingresos' => array (  0 =>   array (    0 => 'from',    1 => 'to',    2 => 'rol',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::printReportIncomeAction',    'rol' => '',    'from' => '',    'to' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rol',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    3 =>     array (      0 => 'text',      1 => '/contabilidad/preporteingresos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contabilidad_print_reporte_ingresos_today' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::printReportIncomeTodayAction',    'rol' => '',    'from' => '',    'to' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contabilidad/preporteingresostoday',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/admin/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/admin/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/change-password/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'useradmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UserAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'useradmin_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UserAdminController::listAction',  ),  2 =>   array (    '_method' => 'get|post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'useradmin_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UserAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'useradmin_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'INCES\\ComedorBundle\\Controller\\UserAdminController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
