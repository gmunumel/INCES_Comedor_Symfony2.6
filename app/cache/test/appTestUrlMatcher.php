<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // INCESComedorBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'INCESComedorBundle_homepage');
            }

            return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'INCESComedorBundle_homepage',);
        }

        // INCESComedorBundle_error
        if ($pathinfo === '/error') {
            return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\DefaultController::errorAction',  '_route' => 'INCESComedorBundle_error',);
        }

        if (0 === strpos($pathinfo, '/menu')) {
            // menu
            if (rtrim($pathinfo, '/') === '/menu') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_menu;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'menu');
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::searchAction',  '_route' => 'menu',);
            }
            not_menu:

            // menu_show
            if (preg_match('#^/menu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_show')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::showAction',));
            }

            // menu_new
            if ($pathinfo === '/menu/new') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::newAction',  '_route' => 'menu_new',);
            }

            // menu_create
            if ($pathinfo === '/menu/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_menu_create;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::createAction',  '_route' => 'menu_create',);
            }
            not_menu_create:

            // menu_edit
            if (preg_match('#^/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_edit')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::editAction',));
            }

            // menu_update
            if (preg_match('#^/menu/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_menu_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_update')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::updateAction',));
            }
            not_menu_update:

            // menu_delete
            if (preg_match('#^/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_menu_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_delete')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::deleteAction',));
            }
            not_menu_delete:

            // menu_search
            if ($pathinfo === '/menu/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_menu_search;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::searchAction',  '_route' => 'menu_search',);
            }
            not_menu_search:

            // menu_facturar
            if ($pathinfo === '/menu/facturar') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_menu_facturar;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::searchAjaxFacturarAction',  '_route' => 'menu_facturar',);
            }
            not_menu_facturar:

            // menu_search_ajax_facturar
            if ($pathinfo === '/menu/searchafact') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_menu_search_ajax_facturar;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::searchAjaxFacturarAction',  '_route' => 'menu_search_ajax_facturar',);
            }
            not_menu_search_ajax_facturar:

            // menu_facturar_procesar
            if ($pathinfo === '/menu/facturar/procesar') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::facturarProcesarAction',  '_route' => 'menu_facturar_procesar',);
            }

            // menu_show_facturar
            if (preg_match('#^/menu/(?P<id>[^/]++)/showfacturar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_show_facturar')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::showFacturarAction',));
            }

            // menu_today
            if ($pathinfo === '/menu/today') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::todayAction',  '_route' => 'menu_today',);
            }

            // menu_today_show
            if (preg_match('#^/menu/(?P<id>[^/]++)/showtoday$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_today_show')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::showTodayAction',));
            }

            // menu_today_new
            if ($pathinfo === '/menu/newtoday') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::newTodayAction',  '_route' => 'menu_today_new',);
            }

            // menu_today_create
            if ($pathinfo === '/menu/createtoday') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_menu_today_create;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::createTodayAction',  '_route' => 'menu_today_create',);
            }
            not_menu_today_create:

            // menu_today_edit
            if (preg_match('#^/menu/(?P<id>[^/]++)/edittoday$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_today_edit')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::editTodayAction',));
            }

            // menu_today_update
            if (preg_match('#^/menu/(?P<id>[^/]++)/updatetoday$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_menu_today_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_today_update')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::updateTodayAction',));
            }
            not_menu_today_update:

            // menu_today_delete
            if (preg_match('#^/menu/(?P<id>[^/]++)/deletetoday$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_menu_today_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_today_delete')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\MenuController::deleteTodayAction',));
            }
            not_menu_today_delete:

        }

        if (0 === strpos($pathinfo, '/rol')) {
            // rol
            if (rtrim($pathinfo, '/') === '/rol') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rol');
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::indexAction',  '_route' => 'rol',);
            }

            // rol_show
            if (preg_match('#^/rol/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_show')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::showAction',));
            }

            // rol_new
            if ($pathinfo === '/rol/new') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::newAction',  '_route' => 'rol_new',);
            }

            // rol_create
            if ($pathinfo === '/rol/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_create;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::createAction',  '_route' => 'rol_create',);
            }
            not_rol_create:

            // rol_edit
            if (preg_match('#^/rol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::editAction',));
            }

            // rol_update
            if (preg_match('#^/rol/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_update')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::updateAction',));
            }
            not_rol_update:

            // rol_delete
            if (preg_match('#^/rol/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_delete')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::deleteAction',));
            }
            not_rol_delete:

            // rol_error_delete
            if ($pathinfo === '/rol/edelete') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RolController::errorDeleteAction',  '_route' => 'rol_error_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::searchAjaxAction',  '_route' => 'usuario',);
            }
            not_usuario:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

            if (0 === strpos($pathinfo, '/usuario/search')) {
                // usuario_search
                if ($pathinfo === '/usuario/search') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_usuario_search;
                    }

                    return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::searchAction',  '_route' => 'usuario_search',);
                }
                not_usuario_search:

                if (0 === strpos($pathinfo, '/usuario/searcha')) {
                    // usuario_search_ajax
                    if ($pathinfo === '/usuario/searcha') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_usuario_search_ajax;
                        }

                        return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::searchAjaxAction',  '_route' => 'usuario_search_ajax',);
                    }
                    not_usuario_search_ajax:

                    // usuario_search_ajax_lunch
                    if ($pathinfo === '/usuario/searchalnc') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_usuario_search_ajax_lunch;
                        }

                        return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::searchAjaxLunchAction',  '_route' => 'usuario_search_ajax_lunch',);
                    }
                    not_usuario_search_ajax_lunch:

                }

            }

            // usuario_carga_masiva
            if ($pathinfo === '/usuario/cargamasiva') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_carga_masiva;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::cargaMasivaAction',  '_route' => 'usuario_carga_masiva',);
            }
            not_usuario_carga_masiva:

            // usuario_edit_carga_masiva
            if ($pathinfo === '/usuario/editmasivo') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit_carga_masiva;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::editMasivoAction',  '_route' => 'usuario_edit_carga_masiva',);
            }
            not_usuario_edit_carga_masiva:

            // usuario_lunch_today
            if ($pathinfo === '/usuario/lunchtoday') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::lunchTodayAction',  '_route' => 'usuario_lunch_today',);
            }

            // usuario_new_externo
            if ($pathinfo === '/usuario/newexterno') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::newExternoAction',  '_route' => 'usuario_new_externo',);
            }

            // usuario_create_externo
            if ($pathinfo === '/usuario/createexterno') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create_externo;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioController::createExternoAction',  '_route' => 'usuario_create_externo',);
            }
            not_usuario_create_externo:

        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // ticket
            if (rtrim($pathinfo, '/') === '/ticket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ticket');
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket',);
            }

            // ticket_show
            if (preg_match('#^/ticket/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_show')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\TicketController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/usuariomenu')) {
            // usuariomenu
            if (rtrim($pathinfo, '/') === '/usuariomenu') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuariomenu;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuariomenu');
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::searchAjaxAction',  '_route' => 'usuariomenu',);
            }
            not_usuariomenu:

            // usuariomenu_show
            if (preg_match('#^/usuariomenu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariomenu_show')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::showAction',));
            }

            // usuariomenu_new
            if ($pathinfo === '/usuariomenu/new') {
                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::newAction',  '_route' => 'usuariomenu_new',);
            }

            // usuariomenu_create
            if ($pathinfo === '/usuariomenu/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuariomenu_create;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::createAction',  '_route' => 'usuariomenu_create',);
            }
            not_usuariomenu_create:

            // usuariomenu_search_ajax
            if ($pathinfo === '/usuariomenu/searcha') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuariomenu_search_ajax;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UsuarioMenuController::searchAjaxAction',  '_route' => 'usuariomenu_search_ajax',);
            }
            not_usuariomenu_search_ajax:

        }

        if (0 === strpos($pathinfo, '/contabilidad')) {
            // contabilidad
            if (rtrim($pathinfo, '/') === '/contabilidad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contabilidad');
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::indexAction',  '_route' => 'contabilidad',);
            }

            if (0 === strpos($pathinfo, '/contabilidad/reporte')) {
                if (0 === strpos($pathinfo, '/contabilidad/reporteingresos')) {
                    // contabilidad_reporte_ingresos
                    if ($pathinfo === '/contabilidad/reporteingresos') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_contabilidad_reporte_ingresos;
                        }

                        return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::reporteIngresosAction',  '_route' => 'contabilidad_reporte_ingresos',);
                    }
                    not_contabilidad_reporte_ingresos:

                    // contabilidad_reporte_ingresos_today
                    if ($pathinfo === '/contabilidad/reporteingresostoday') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_contabilidad_reporte_ingresos_today;
                        }

                        return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::reporteIngresosTodayAction',  '_route' => 'contabilidad_reporte_ingresos_today',);
                    }
                    not_contabilidad_reporte_ingresos_today:

                }

                // contabilidad_reporte_usuarios
                if ($pathinfo === '/contabilidad/reporteusuarios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contabilidad_reporte_usuarios;
                    }

                    return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::reporteUsuariosAction',  '_route' => 'contabilidad_reporte_usuarios',);
                }
                not_contabilidad_reporte_usuarios:

            }

            if (0 === strpos($pathinfo, '/contabilidad/preporte')) {
                // contabilidad_print_reporte_usuarios
                if (0 === strpos($pathinfo, '/contabilidad/preporteusuarios') && preg_match('#^/contabilidad/preporteusuarios(?:/(?P<ced>[^/]++)(?:/(?P<from>[^/]++)(?:/(?P<to>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contabilidad_print_reporte_usuarios')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::printReporteUsuariosAction',  'ced' => '',  'from' => '',  'to' => '',));
                }

                if (0 === strpos($pathinfo, '/contabilidad/preporteingresos')) {
                    // contabilidad_print_reporte_ingresos
                    if (preg_match('#^/contabilidad/preporteingresos(?:/(?P<from>[^/]++)(?:/(?P<to>[^/]++)(?:/(?P<rol>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contabilidad_print_reporte_ingresos')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::printReportIncomeAction',  'rol' => '',  'from' => '',  'to' => '',));
                    }

                    // contabilidad_print_reporte_ingresos_today
                    if ($pathinfo === '/contabilidad/preporteingresostoday') {
                        return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ContabilidadController::printReportIncomeTodayAction',  'rol' => '',  'from' => '',  'to' => '',  '_route' => 'contabilidad_print_reporte_ingresos_today',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }

                    // fos_user_security_check
                    if ($pathinfo === '/admin/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/admin/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ($pathinfo === '/admin/profile/edit') {
                    return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/re')) {
                if (0 === strpos($pathinfo, '/admin/register')) {
                    // fos_user_registration_register
                    if (rtrim($pathinfo, '/') === '/admin/register') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                        }

                        return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    }

                    if (0 === strpos($pathinfo, '/admin/register/c')) {
                        // fos_user_registration_check_email
                        if ($pathinfo === '/admin/register/check-email') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_check_email;
                            }

                            return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                        }
                        not_fos_user_registration_check_email:

                        if (0 === strpos($pathinfo, '/admin/register/confirm')) {
                            // fos_user_registration_confirm
                            if (preg_match('#^/admin/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirm;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RegistrationController::confirmAction',));
                            }
                            not_fos_user_registration_confirm:

                            // fos_user_registration_confirmed
                            if ($pathinfo === '/admin/register/confirmed') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirmed;
                                }

                                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                            }
                            not_fos_user_registration_confirmed:

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/resetting')) {
                    // fos_user_resetting_request
                    if ($pathinfo === '/admin/resetting/request') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_send_email
                    if ($pathinfo === '/admin/resetting/send-email') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ($pathinfo === '/admin/resetting/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    }
                    not_fos_user_resetting_check_email:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/admin/resetting/reset') && preg_match('#^/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_resetting_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                    }
                    not_fos_user_resetting_reset:

                }

            }

            // fos_user_change_password
            if ($pathinfo === '/admin/change-password/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // useradmin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'useradmin');
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UserAdminController::indexAction',  '_route' => 'useradmin',);
            }

            // useradmin_list
            if ($pathinfo === '/admin/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_useradmin_list;
                }

                return array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UserAdminController::listAction',  '_route' => 'useradmin_list',);
            }
            not_useradmin_list:

            // useradmin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'useradmin_show')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UserAdminController::showAction',));
            }

            // useradmin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_useradmin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'useradmin_delete')), array (  '_controller' => 'INCES\\ComedorBundle\\Controller\\UserAdminController::deleteAction',));
            }
            not_useradmin_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
