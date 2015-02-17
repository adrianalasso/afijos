<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/')) {
            // usuario_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'afijos\\MainBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
            }

            // usuario_login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'usuario_login_check');
            }

            // usuario_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'usuario_logout');
            }

            // usuario_index
            if ($pathinfo === '/index') {
                return array (  '_controller' => 'afijos\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usuario_index',);
            }

            // usuario_cambiar_pass
            if ($pathinfo === '/usuario/cambiar-pass') {
                return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::cambiarpassUsuariosAction',  '_route' => 'usuario_cambiar_pass',);
            }

            // usuario_editperfil
            if (0 === strpos($pathinfo, '/usuario') && preg_match('#^/usuario/(?P<id>[^/]+)/editperfil$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::editperfilAction',)), array('_route' => 'usuario_editperfil'));
            }

            // usuario_perfil
            if (0 === strpos($pathinfo, '/usuario') && preg_match('#^/usuario/(?P<id>[^/]+)/perfil$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::perfilAction',)), array('_route' => 'usuario_perfil'));
            }

            // usuario_updateperfil
            if (0 === strpos($pathinfo, '/usuario') && preg_match('#^/usuario/(?P<id>[^/]+)/updateperfil$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::updateperfilAction',)), array('_route' => 'usuario_updateperfil'));
            }

            // usuario_editpass
            if (0 === strpos($pathinfo, '/usuario') && preg_match('#^/usuario/(?P<id>[^/]+)/editpass$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::editpassAction',)), array('_route' => 'usuario_editpass'));
            }

            // usuario_updatepass
            if (0 === strpos($pathinfo, '/usuario') && preg_match('#^/usuario/(?P<id>[^/]+)/updatepass$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::updatepassAction',)), array('_route' => 'usuario_updatepass'));
            }

            if (0 === strpos($pathinfo, '/admin/usuario')) {
                // usuario
                if (rtrim($pathinfo, '/') === '/admin/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
                }

                // usuario_new
                if ($pathinfo === '/admin/usuario/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
                }

                // usuario_show
                if (preg_match('#^/admin/usuario/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::showAction',)), array('_route' => 'usuario_show'));
                }

                // usuario_create
                if ($pathinfo === '/admin/usuario/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
                }

                // usuario_edit
                if (preg_match('#^/admin/usuario/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::editAction',)), array('_route' => 'usuario_edit'));
                }

                // usuario_update
                if (preg_match('#^/admin/usuario/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::updateAction',)), array('_route' => 'usuario_update'));
                }

                // usuario_delete
                if (preg_match('#^/admin/usuario/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::deleteAction',)), array('_route' => 'usuario_delete'));
                }

                // usuario_eliminar
                if (preg_match('#^/admin/usuario/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::eliminarAction',)), array('_route' => 'usuario_eliminar'));
                }

                // buscar_usuarios
                if ($pathinfo === '/admin/usuario/buscar-usuario') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::buscarUsuariosAction',  '_route' => 'buscar_usuarios',);
                }

                // usuario_listar
                if ($pathinfo === '/admin/usuario/listar-usuarios') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UsuarioController::listarUsuariosAction',  '_route' => 'usuario_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/trabajador')) {
                // trabajador
                if (rtrim($pathinfo, '/') === '/empadmin/trabajador') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'trabajador');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::indexAction',  '_route' => 'trabajador',);
                }

                // trabajador_new
                if ($pathinfo === '/empadmin/trabajador/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::newAction',  '_route' => 'trabajador_new',);
                }

                // trabajador_show
                if (preg_match('#^/empadmin/trabajador/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::showAction',)), array('_route' => 'trabajador_show'));
                }

                // trabajador_create
                if ($pathinfo === '/empadmin/trabajador/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::createAction',  '_route' => 'trabajador_create',);
                }

                // trabajador_edit
                if (preg_match('#^/empadmin/trabajador/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::editAction',)), array('_route' => 'trabajador_edit'));
                }

                // trabajador_update
                if (preg_match('#^/empadmin/trabajador/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::updateAction',)), array('_route' => 'trabajador_update'));
                }

                // trabajador_delete
                if (preg_match('#^/empadmin/trabajador/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::deleteAction',)), array('_route' => 'trabajador_delete'));
                }

                // trabajador_eliminar
                if (preg_match('#^/empadmin/trabajador/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::eliminarAction',)), array('_route' => 'trabajador_eliminar'));
                }

                // buscar_trabajadores
                if ($pathinfo === '/empadmin/trabajador/buscar-trabajador') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::buscarTrabajadoresAction',  '_route' => 'buscar_trabajadores',);
                }

                // trabajador_listar
                if ($pathinfo === '/empadmin/trabajador/listar-trabajadores') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\TrabajadorController::listarTrabajadoresAction',  '_route' => 'trabajador_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/rol')) {
                // rol
                if (rtrim($pathinfo, '/') === '/admin/rol') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rol');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::indexAction',  '_route' => 'rol',);
                }

                // rol_new
                if ($pathinfo === '/admin/rol/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::newAction',  '_route' => 'rol_new',);
                }

                // rol_show
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::showAction',)), array('_route' => 'rol_show'));
                }

                // rol_create
                if ($pathinfo === '/admin/rol/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::createAction',  '_route' => 'rol_create',);
                }

                // rol_edit
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::editAction',)), array('_route' => 'rol_edit'));
                }

                // rol_update
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::updateAction',)), array('_route' => 'rol_update'));
                }

                // rol_delete
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::deleteAction',)), array('_route' => 'rol_delete'));
                }

                // rol_eliminar
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::eliminarAction',)), array('_route' => 'rol_eliminar'));
                }

                // buscar_roles
                if ($pathinfo === '/admin/rol/buscar-rol') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::buscarRolsAction',  '_route' => 'buscar_roles',);
                }

                // rol_listar
                if ($pathinfo === '/admin/rol/listar-rols') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::listarRolsAction',  '_route' => 'rol_listar',);
                }

                // rol_cambiar_pass
                if ($pathinfo === '/admin/rol/cambiar-pass') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::cambiarpassRolsAction',  '_route' => 'rol_cambiar_pass',);
                }

                // rol_editperfil
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/editperfil$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::editperfilAction',)), array('_route' => 'rol_editperfil'));
                }

                // rol_perfil
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/perfil$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::perfilAction',)), array('_route' => 'rol_perfil'));
                }

                // rol_updateperfil
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/updateperfil$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::updateperfilAction',)), array('_route' => 'rol_updateperfil'));
                }

                // rol_editpass
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/editpass$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::editpassAction',)), array('_route' => 'rol_editpass'));
                }

                // rol_updatepass
                if (preg_match('#^/admin/rol/(?P<id>[^/]+)/updatepass$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\RolController::updatepassAction',)), array('_route' => 'rol_updatepass'));
                }

            }

            if (0 === strpos($pathinfo, '/admin/provincia')) {
                // provincia
                if (rtrim($pathinfo, '/') === '/admin/provincia') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'provincia');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ProvinciaController::indexAction',  '_route' => 'provincia',);
                }

                // provincia_new
                if ($pathinfo === '/admin/provincia/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ProvinciaController::newAction',  '_route' => 'provincia_new',);
                }

                // provincia_show
                if (preg_match('#^/admin/provincia/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ProvinciaController::showAction',)), array('_route' => 'provincia_show'));
                }

                // provincia_create
                if ($pathinfo === '/admin/provincia/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ProvinciaController::createAction',  '_route' => 'provincia_create',);
                }

                // provincia_edit
                if (preg_match('#^/admin/provincia/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ProvinciaController::editAction',)), array('_route' => 'provincia_edit'));
                }

                // provincia_update
                if (preg_match('#^/admin/provincia/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ProvinciaController::updateAction',)), array('_route' => 'provincia_update'));
                }

                // provincia_delete
                if (preg_match('#^/admin/provincia/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ProvinciaController::deleteAction',)), array('_route' => 'provincia_delete'));
                }

                // provincia_eliminar
                if (preg_match('#^/admin/provincia/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ProvinciaController::eliminarAction',)), array('_route' => 'provincia_eliminar'));
                }

            }

            if (0 === strpos($pathinfo, '/admin/canton')) {
                // canton
                if (rtrim($pathinfo, '/') === '/admin/canton') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'canton');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::indexAction',  '_route' => 'canton',);
                }

                // canton_new
                if ($pathinfo === '/admin/canton/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::newAction',  '_route' => 'canton_new',);
                }

                // canton_show
                if (preg_match('#^/admin/canton/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::showAction',)), array('_route' => 'canton_show'));
                }

                // canton_create
                if ($pathinfo === '/admin/canton/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::createAction',  '_route' => 'canton_create',);
                }

                // canton_edit
                if (preg_match('#^/admin/canton/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::editAction',)), array('_route' => 'canton_edit'));
                }

                // canton_update
                if (preg_match('#^/admin/canton/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::updateAction',)), array('_route' => 'canton_update'));
                }

                // canton_delete
                if (preg_match('#^/admin/canton/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::deleteAction',)), array('_route' => 'canton_delete'));
                }

                // canton_eliminar
                if (preg_match('#^/admin/canton/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::eliminarAction',)), array('_route' => 'canton_eliminar'));
                }

                // buscar_cantones
                if ($pathinfo === '/admin/canton/buscar-canton') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::buscarCantonesAction',  '_route' => 'buscar_cantones',);
                }

                // canton_listar
                if ($pathinfo === '/admin/canton/listar-cantones') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CantonController::listarCantonesAction',  '_route' => 'canton_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/parroquia')) {
                // parroquia
                if (rtrim($pathinfo, '/') === '/admin/parroquia') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'parroquia');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::indexAction',  '_route' => 'parroquia',);
                }

                // parroquia_new
                if ($pathinfo === '/admin/parroquia/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::newAction',  '_route' => 'parroquia_new',);
                }

                // parroquia_show
                if (preg_match('#^/admin/parroquia/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::showAction',)), array('_route' => 'parroquia_show'));
                }

                // parroquia_create
                if ($pathinfo === '/admin/parroquia/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::createAction',  '_route' => 'parroquia_create',);
                }

                // parroquia_edit
                if (preg_match('#^/admin/parroquia/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::editAction',)), array('_route' => 'parroquia_edit'));
                }

                // parroquia_update
                if (preg_match('#^/admin/parroquia/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::updateAction',)), array('_route' => 'parroquia_update'));
                }

                // parroquia_delete
                if (preg_match('#^/admin/parroquia/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::deleteAction',)), array('_route' => 'parroquia_delete'));
                }

                // parroquia_eliminar
                if (preg_match('#^/admin/parroquia/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::eliminarAction',)), array('_route' => 'parroquia_eliminar'));
                }

                // buscar_parroquiaes
                if ($pathinfo === '/admin/parroquia/buscar-parroquia') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::buscarParroquiasAction',  '_route' => 'buscar_parroquiaes',);
                }

                // parroquia_listar
                if ($pathinfo === '/admin/parroquia/listar-parroquias') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ParroquiaController::listarParroquiasAction',  '_route' => 'parroquia_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/subsistema')) {
                // subsistema
                if (rtrim($pathinfo, '/') === '/empadmin/subsistema') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'subsistema');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::indexAction',  '_route' => 'subsistema',);
                }

                // subsistema_new
                if ($pathinfo === '/empadmin/subsistema/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::newAction',  '_route' => 'subsistema_new',);
                }

                // subsistema_show
                if (preg_match('#^/empadmin/subsistema/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::showAction',)), array('_route' => 'subsistema_show'));
                }

                // subsistema_create
                if ($pathinfo === '/empadmin/subsistema/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::createAction',  '_route' => 'subsistema_create',);
                }

                // subsistema_edit
                if (preg_match('#^/empadmin/subsistema/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::editAction',)), array('_route' => 'subsistema_edit'));
                }

                // subsistema_update
                if (preg_match('#^/empadmin/subsistema/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::updateAction',)), array('_route' => 'subsistema_update'));
                }

                // subsistema_delete
                if (preg_match('#^/empadmin/subsistema/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::deleteAction',)), array('_route' => 'subsistema_delete'));
                }

                // subsistema_eliminar
                if (preg_match('#^/empadmin/subsistema/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::eliminarAction',)), array('_route' => 'subsistema_eliminar'));
                }

                // buscar_subsistemaes
                if ($pathinfo === '/empadmin/subsistema/buscar-subsistema') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::buscarSubsistemasAction',  '_route' => 'buscar_subsistemaes',);
                }

                // subsistema_listar
                if ($pathinfo === '/empadmin/subsistema/listar-subsistemas') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubsistemaController::listarSubsistemasAction',  '_route' => 'subsistema_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/departamento')) {
                // departamento
                if (rtrim($pathinfo, '/') === '/empadmin/departamento') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'departamento');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento',);
                }

                // departamento_new
                if ($pathinfo === '/empadmin/departamento/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\DepartamentoController::newAction',  '_route' => 'departamento_new',);
                }

                // departamento_show
                if (preg_match('#^/empadmin/departamento/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DepartamentoController::showAction',)), array('_route' => 'departamento_show'));
                }

                // departamento_create
                if ($pathinfo === '/empadmin/departamento/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\DepartamentoController::createAction',  '_route' => 'departamento_create',);
                }

                // departamento_edit
                if (preg_match('#^/empadmin/departamento/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DepartamentoController::editAction',)), array('_route' => 'departamento_edit'));
                }

                // departamento_update
                if (preg_match('#^/empadmin/departamento/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DepartamentoController::updateAction',)), array('_route' => 'departamento_update'));
                }

                // departamento_delete
                if (preg_match('#^/empadmin/departamento/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DepartamentoController::deleteAction',)), array('_route' => 'departamento_delete'));
                }

                // departamento_eliminar
                if (preg_match('#^/empadmin/departamento/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DepartamentoController::eliminarAction',)), array('_route' => 'departamento_eliminar'));
                }

            }

            if (0 === strpos($pathinfo, '/admin/agencia')) {
                // agencia
                if (rtrim($pathinfo, '/') === '/admin/agencia') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'agencia');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::indexAction',  '_route' => 'agencia',);
                }

                // agencia_new
                if ($pathinfo === '/admin/agencia/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::newAction',  '_route' => 'agencia_new',);
                }

                // agencia_show
                if (preg_match('#^/admin/agencia/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::showAction',)), array('_route' => 'agencia_show'));
                }

                // agencia_create
                if ($pathinfo === '/admin/agencia/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::createAction',  '_route' => 'agencia_create',);
                }

                // agencia_edit
                if (preg_match('#^/admin/agencia/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::editAction',)), array('_route' => 'agencia_edit'));
                }

                // agencia_update
                if (preg_match('#^/admin/agencia/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::updateAction',)), array('_route' => 'agencia_update'));
                }

                // agencia_delete
                if (preg_match('#^/admin/agencia/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::deleteAction',)), array('_route' => 'agencia_delete'));
                }

                // agencia_eliminar
                if (preg_match('#^/admin/agencia/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::eliminarAction',)), array('_route' => 'agencia_eliminar'));
                }

                // buscar_agencia
                if ($pathinfo === '/admin/agencia/buscar-agencia') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::buscarAgenciaAction',  '_route' => 'buscar_agencia',);
                }

                // agencia_listar
                if ($pathinfo === '/admin/agencia/listar-agencia') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AgenciaController::listarAgenciaAction',  '_route' => 'agencia_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/areaoperativa')) {
                // areaoperativa
                if (rtrim($pathinfo, '/') === '/empadmin/areaoperativa') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'areaoperativa');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::indexAction',  '_route' => 'areaoperativa',);
                }

                // areaoperativa_new
                if ($pathinfo === '/empadmin/areaoperativa/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::newAction',  '_route' => 'areaoperativa_new',);
                }

                // areaoperativa_show
                if (preg_match('#^/empadmin/areaoperativa/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::showAction',)), array('_route' => 'areaoperativa_show'));
                }

                // areaoperativa_create
                if ($pathinfo === '/empadmin/areaoperativa/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::createAction',  '_route' => 'areaoperativa_create',);
                }

                // areaoperativa_edit
                if (preg_match('#^/empadmin/areaoperativa/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::editAction',)), array('_route' => 'areaoperativa_edit'));
                }

                // areaoperativa_update
                if (preg_match('#^/empadmin/areaoperativa/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::updateAction',)), array('_route' => 'areaoperativa_update'));
                }

                // areaoperativa_delete
                if (preg_match('#^/empadmin/areaoperativa/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::deleteAction',)), array('_route' => 'areaoperativa_delete'));
                }

                // areaoperativa_eliminar
                if (preg_match('#^/empadmin/areaoperativa/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::eliminarAction',)), array('_route' => 'areaoperativa_eliminar'));
                }

                // buscar_areaoperativa
                if ($pathinfo === '/empadmin/areaoperativa/buscar-areaoperativa') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::buscarAreaOperativaAction',  '_route' => 'buscar_areaoperativa',);
                }

                // areaoperativa_listar
                if ($pathinfo === '/empadmin/areaoperativa/listar-areaoperativa') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\AreaOperativaController::listarAreaOperativaAction',  '_route' => 'areaoperativa_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/dependencia')) {
                // dependencia
                if (rtrim($pathinfo, '/') === '/empadmin/dependencia') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dependencia');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\DependenciaController::indexAction',  '_route' => 'dependencia',);
                }

                // dependencia_new
                if ($pathinfo === '/empadmin/dependencia/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\DependenciaController::newAction',  '_route' => 'dependencia_new',);
                }

                // dependencia_show
                if (preg_match('#^/empadmin/dependencia/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DependenciaController::showAction',)), array('_route' => 'dependencia_show'));
                }

                // dependencia_create
                if ($pathinfo === '/empadmin/dependencia/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\DependenciaController::createAction',  '_route' => 'dependencia_create',);
                }

                // dependencia_edit
                if (preg_match('#^/empadmin/dependencia/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DependenciaController::editAction',)), array('_route' => 'dependencia_edit'));
                }

                // dependencia_update
                if (preg_match('#^/empadmin/dependencia/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DependenciaController::updateAction',)), array('_route' => 'dependencia_update'));
                }

                // dependencia_delete
                if (preg_match('#^/empadmin/dependencia/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DependenciaController::deleteAction',)), array('_route' => 'dependencia_delete'));
                }

                // dependencia_eliminar
                if (preg_match('#^/empadmin/dependencia/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\DependenciaController::eliminarAction',)), array('_route' => 'dependencia_eliminar'));
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/cuentacontable')) {
                // cuentacontable
                if (rtrim($pathinfo, '/') === '/empadmin/cuentacontable') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cuentacontable');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::indexAction',  '_route' => 'cuentacontable',);
                }

                // cuentacontable_new
                if ($pathinfo === '/empadmin/cuentacontable/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::newAction',  '_route' => 'cuentacontable_new',);
                }

                // cuentacontable_show
                if (preg_match('#^/empadmin/cuentacontable/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::showAction',)), array('_route' => 'cuentacontable_show'));
                }

                // cuentacontable_create
                if ($pathinfo === '/empadmin/cuentacontable/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::createAction',  '_route' => 'cuentacontable_create',);
                }

                // cuentacontable_edit
                if (preg_match('#^/empadmin/cuentacontable/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::editAction',)), array('_route' => 'cuentacontable_edit'));
                }

                // cuentacontable_update
                if (preg_match('#^/empadmin/cuentacontable/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::updateAction',)), array('_route' => 'cuentacontable_update'));
                }

                // cuentacontable_delete
                if (preg_match('#^/empadmin/cuentacontable/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::deleteAction',)), array('_route' => 'cuentacontable_delete'));
                }

                // cuentacontable_eliminar
                if (preg_match('#^/empadmin/cuentacontable/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::eliminarAction',)), array('_route' => 'cuentacontable_eliminar'));
                }

                // buscar_cuentacontable
                if ($pathinfo === '/empadmin/cuentacontable/buscar-cuentacontable') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::buscarCuentaContableAction',  '_route' => 'buscar_cuentacontable',);
                }

                // cuentacontable_listar
                if ($pathinfo === '/empadmin/cuentacontable/listar-cuentacontable') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\CuentaContableController::listarCuentaContableAction',  '_route' => 'cuentacontable_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/unidadpropiedad')) {
                // unidadpropiedad
                if (rtrim($pathinfo, '/') === '/empadmin/unidadpropiedad') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'unidadpropiedad');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::indexAction',  '_route' => 'unidadpropiedad',);
                }

                // unidadpropiedad_new
                if ($pathinfo === '/empadmin/unidadpropiedad/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::newAction',  '_route' => 'unidadpropiedad_new',);
                }

                // unidadpropiedad_show
                if (preg_match('#^/empadmin/unidadpropiedad/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::showAction',)), array('_route' => 'unidadpropiedad_show'));
                }

                // unidadpropiedad_create
                if ($pathinfo === '/empadmin/unidadpropiedad/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::createAction',  '_route' => 'unidadpropiedad_create',);
                }

                // unidadpropiedad_edit
                if (preg_match('#^/empadmin/unidadpropiedad/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::editAction',)), array('_route' => 'unidadpropiedad_edit'));
                }

                // unidadpropiedad_update
                if (preg_match('#^/empadmin/unidadpropiedad/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::updateAction',)), array('_route' => 'unidadpropiedad_update'));
                }

                // unidadpropiedad_delete
                if (preg_match('#^/empadmin/unidadpropiedad/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::deleteAction',)), array('_route' => 'unidadpropiedad_delete'));
                }

                // unidadpropiedad_eliminar
                if (preg_match('#^/empadmin/unidadpropiedad/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::eliminarAction',)), array('_route' => 'unidadpropiedad_eliminar'));
                }

                // buscar_unidadpropiedad
                if ($pathinfo === '/empadmin/unidadpropiedad/buscar-unidadpropiedad') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::buscarUnidadPropiedadAction',  '_route' => 'buscar_unidadpropiedad',);
                }

                // unidadpropiedad_listar
                if ($pathinfo === '/empadmin/unidadpropiedad/listar-unidadpropiedad') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\UnidadPropiedadController::listarUnidadPropiedadAction',  '_route' => 'unidadpropiedad_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/plan')) {
                // plan
                if (rtrim($pathinfo, '/') === '/empadmin/plan') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'plan');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::indexAction',  '_route' => 'plan',);
                }

                // plan_new
                if ($pathinfo === '/empadmin/plan/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::newAction',  '_route' => 'plan_new',);
                }

                // plan_show
                if (preg_match('#^/empadmin/plan/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::showAction',)), array('_route' => 'plan_show'));
                }

                // plan_create
                if ($pathinfo === '/empadmin/plan/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::createAction',  '_route' => 'plan_create',);
                }

                // plan_edit
                if (preg_match('#^/empadmin/plan/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::editAction',)), array('_route' => 'plan_edit'));
                }

                // plan_update
                if (preg_match('#^/empadmin/plan/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::updateAction',)), array('_route' => 'plan_update'));
                }

                // plan_delete
                if (preg_match('#^/empadmin/plan/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::deleteAction',)), array('_route' => 'plan_delete'));
                }

                // plan_eliminar
                if (preg_match('#^/empadmin/plan/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::eliminarAction',)), array('_route' => 'plan_eliminar'));
                }

                // buscar_plan
                if ($pathinfo === '/empadmin/plan/buscar-plan') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::buscarPlanAction',  '_route' => 'buscar_plan',);
                }

                // plan_listar
                if ($pathinfo === '/empadmin/plan/listar-plan') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\PlanController::listarPlanAction',  '_route' => 'plan_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/subestacion')) {
                // subestacion
                if (rtrim($pathinfo, '/') === '/empadmin/subestacion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'subestacion');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::indexAction',  '_route' => 'subestacion',);
                }

                // subestacion_new
                if ($pathinfo === '/empadmin/subestacion/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::newAction',  '_route' => 'subestacion_new',);
                }

                // subestacion_show
                if (preg_match('#^/empadmin/subestacion/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::showAction',)), array('_route' => 'subestacion_show'));
                }

                // subestacion_create
                if ($pathinfo === '/empadmin/subestacion/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::createAction',  '_route' => 'subestacion_create',);
                }

                // subestacion_edit
                if (preg_match('#^/empadmin/subestacion/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::editAction',)), array('_route' => 'subestacion_edit'));
                }

                // subestacion_update
                if (preg_match('#^/empadmin/subestacion/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::updateAction',)), array('_route' => 'subestacion_update'));
                }

                // subestacion_delete
                if (preg_match('#^/empadmin/subestacion/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::deleteAction',)), array('_route' => 'subestacion_delete'));
                }

                // subestacion_listar
                if ($pathinfo === '/empadmin/subestacion/listar') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::listarAction',  '_route' => 'subestacion_listar',);
                }

                // subestacion_eliminar
                if (preg_match('#^/empadmin/subestacion/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubestacionController::eliminarAction',)), array('_route' => 'subestacion_eliminar'));
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/subtransmision')) {
                // subtransmision
                if (rtrim($pathinfo, '/') === '/empadmin/subtransmision') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'subtransmision');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::indexAction',  '_route' => 'subtransmision',);
                }

                // subtransmision_new
                if ($pathinfo === '/empadmin/subtransmision/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::newAction',  '_route' => 'subtransmision_new',);
                }

                // subtransmision_show
                if (preg_match('#^/empadmin/subtransmision/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::showAction',)), array('_route' => 'subtransmision_show'));
                }

                // subtransmision_create
                if ($pathinfo === '/empadmin/subtransmision/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::createAction',  '_route' => 'subtransmision_create',);
                }

                // subtransmision_edit
                if (preg_match('#^/empadmin/subtransmision/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::editAction',)), array('_route' => 'subtransmision_edit'));
                }

                // subtransmision_update
                if (preg_match('#^/empadmin/subtransmision/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::updateAction',)), array('_route' => 'subtransmision_update'));
                }

                // subtransmision_delete
                if (preg_match('#^/empadmin/subtransmision/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::deleteAction',)), array('_route' => 'subtransmision_delete'));
                }

                // subtransmision_eliminar
                if (preg_match('#^/empadmin/subtransmision/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::eliminarAction',)), array('_route' => 'subtransmision_eliminar'));
                }

                // subtransmision_listar
                if ($pathinfo === '/empadmin/subtransmision/listar') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\SubtransmisionController::listarAction',  '_route' => 'subtransmision_listar',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/bienescustodio')) {
                // bienescustodio
                if (rtrim($pathinfo, '/') === '/empadmin/bienescustodio') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bienescustodio');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::indexAction',  '_route' => 'bienescustodio',);
                }

                // bienescustodio_new
                if ($pathinfo === '/empadmin/bienescustodio/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::newAction',  '_route' => 'bienescustodio_new',);
                }

                // bienescustodio_import
                if ($pathinfo === '/empadmin/bienescustodio/import') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::importAction',  '_route' => 'bienescustodio_import',);
                }

                // bienescustodio_show
                if (preg_match('#^/empadmin/bienescustodio/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::showAction',)), array('_route' => 'bienescustodio_show'));
                }

                // bienescustodio_create
                if ($pathinfo === '/empadmin/bienescustodio/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::createAction',  '_route' => 'bienescustodio_create',);
                }

                // bienescustodio_edit
                if (preg_match('#^/empadmin/bienescustodio/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::editAction',)), array('_route' => 'bienescustodio_edit'));
                }

                // bienescustodio_update
                if (preg_match('#^/empadmin/bienescustodio/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::updateAction',)), array('_route' => 'bienescustodio_update'));
                }

                // bienescustodio_delete
                if (preg_match('#^/empadmin/bienescustodio/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::deleteAction',)), array('_route' => 'bienescustodio_delete'));
                }

                // bienescustodio_eliminar
                if (preg_match('#^/empadmin/bienescustodio/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::eliminarAction',)), array('_route' => 'bienescustodio_eliminar'));
                }

                // buscar_bienescustodio
                if ($pathinfo === '/empadmin/bienescustodio/buscar-bienescustodio') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::buscarBienesCustodioAction',  '_route' => 'buscar_bienescustodio',);
                }

                // bienescustodio_listar
                if ($pathinfo === '/empadmin/bienescustodio/listar-bienescustodio') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::listarBienesCustodioAction',  '_route' => 'bienescustodio_listar',);
                }

                // bienescustodio_rformulario
                if ($pathinfo === '/empadmin/bienescustodio/rformulario') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::rformularioAction',  '_route' => 'bienescustodio_rformulario',);
                }

                // bienescustodio_reporte
                if ($pathinfo === '/empadmin/bienescustodio/reporte') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::reporteAction',  '_route' => 'bienescustodio_reporte',);
                }

                // bienescustodio_reportes
                if ($pathinfo === '/empadmin/bienescustodio/reportes') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::reportesAction',  '_route' => 'bienescustodio_reportes',);
                }

                // bienescustodio_depreciar
                if (preg_match('#^/empadmin/bienescustodio/(?P<id>[^/]+)/depreciar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::depreciarAction',)), array('_route' => 'bienescustodio_depreciar'));
                }

                // bienescustodio_edepreciar
                if (preg_match('#^/empadmin/bienescustodio/(?P<id>[^/]+)/edepreciar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BienesCustodioController::edepreciarAction',)), array('_route' => 'bienescustodio_edepreciar'));
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/lsubestacion')) {
                // lsubestacion
                if (rtrim($pathinfo, '/') === '/empadmin/lsubestacion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'lsubestacion');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::indexAction',  '_route' => 'lsubestacion',);
                }

                // lsubestacion_new
                if ($pathinfo === '/empadmin/lsubestacion/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::newAction',  '_route' => 'lsubestacion_new',);
                }

                // lsubestacion_show
                if (preg_match('#^/empadmin/lsubestacion/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::showAction',)), array('_route' => 'lsubestacion_show'));
                }

                // lsubestacion_create
                if ($pathinfo === '/empadmin/lsubestacion/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::createAction',  '_route' => 'lsubestacion_create',);
                }

                // lsubestacion_edit
                if (preg_match('#^/empadmin/lsubestacion/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::editAction',)), array('_route' => 'lsubestacion_edit'));
                }

                // lsubestacion_update
                if (preg_match('#^/empadmin/lsubestacion/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::updateAction',)), array('_route' => 'lsubestacion_update'));
                }

                // lsubestacion_delete
                if (preg_match('#^/empadmin/lsubestacion/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::deleteAction',)), array('_route' => 'lsubestacion_delete'));
                }

                // lsubestacion_eliminar
                if (preg_match('#^/empadmin/lsubestacion/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::eliminarAction',)), array('_route' => 'lsubestacion_eliminar'));
                }

                // buscar_lsubestacion
                if ($pathinfo === '/empadmin/lsubestacion/buscar-lsubestacion') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::buscarLSubestacionAction',  '_route' => 'buscar_lsubestacion',);
                }

                // lsubestacion_listar
                if ($pathinfo === '/empadmin/lsubestacion/listar-lsubestacion') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::listarLSubestacionAction',  '_route' => 'lsubestacion_listar',);
                }

                // lsubestacion_rformulario
                if ($pathinfo === '/empadmin/lsubestacion/rformulario') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::rformularioAction',  '_route' => 'lsubestacion_rformulario',);
                }

                // lsubestacion_reporte
                if ($pathinfo === '/empadmin/lsubestacion/reporte') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubestacionController::reporteAction',  '_route' => 'lsubestacion_reporte',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/lsubtransmision')) {
                // lsubtransmision
                if (rtrim($pathinfo, '/') === '/empadmin/lsubtransmision') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'lsubtransmision');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::indexAction',  '_route' => 'lsubtransmision',);
                }

                // lsubtransmision_new
                if ($pathinfo === '/empadmin/lsubtransmision/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::newAction',  '_route' => 'lsubtransmision_new',);
                }

                // lsubtransmision_show
                if (preg_match('#^/empadmin/lsubtransmision/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::showAction',)), array('_route' => 'lsubtransmision_show'));
                }

                // lsubtransmision_create
                if ($pathinfo === '/empadmin/lsubtransmision/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::createAction',  '_route' => 'lsubtransmision_create',);
                }

                // lsubtransmision_edit
                if (preg_match('#^/empadmin/lsubtransmision/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::editAction',)), array('_route' => 'lsubtransmision_edit'));
                }

                // lsubtransmision_update
                if (preg_match('#^/empadmin/lsubtransmision/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::updateAction',)), array('_route' => 'lsubtransmision_update'));
                }

                // lsubtransmision_delete
                if (preg_match('#^/empadmin/lsubtransmision/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::deleteAction',)), array('_route' => 'lsubtransmision_delete'));
                }

                // lsubtransmision_eliminar
                if (preg_match('#^/empadmin/lsubtransmision/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::eliminarAction',)), array('_route' => 'lsubtransmision_eliminar'));
                }

                // buscar_lsubtransmision
                if ($pathinfo === '/empadmin/lsubtransmision/buscar-lsubtransmision') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::buscarLSubtransmisionAction',  '_route' => 'buscar_lsubtransmision',);
                }

                // lsubtransmision_listar
                if ($pathinfo === '/empadmin/lsubtransmision/listar-lsubtransmision') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::listarLSubtransmisionAction',  '_route' => 'lsubtransmision_listar',);
                }

                // lsubtransmision_rformulario
                if ($pathinfo === '/empadmin/lsubtransmision/rformulario') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::rformularioAction',  '_route' => 'lsubtransmision_rformulario',);
                }

                // lsubtransmision_reporte
                if ($pathinfo === '/empadmin/lsubtransmision/reporte') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\LSubtransmisionController::reporteAction',  '_route' => 'lsubtransmision_reporte',);
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/bajas')) {
                // bajas
                if (rtrim($pathinfo, '/') === '/empadmin/bajas') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bajas');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::indexAction',  '_route' => 'bajas',);
                }

                // bajas_new
                if ($pathinfo === '/empadmin/bajas/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::newAction',  '_route' => 'bajas_new',);
                }

                // bajas_show
                if (preg_match('#^/empadmin/bajas/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::showAction',)), array('_route' => 'bajas_show'));
                }

                // bajas_create
                if ($pathinfo === '/empadmin/bajas/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::createAction',  '_route' => 'bajas_create',);
                }

                // bajas_imprimir
                if (preg_match('#^/empadmin/bajas/(?P<id>[^/]+)/imprimir$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::imprimirAction',)), array('_route' => 'bajas_imprimir'));
                }

            }

            if (0 === strpos($pathinfo, '/directivo/abajas')) {
                // abajas
                if (rtrim($pathinfo, '/') === '/directivo/abajas') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'abajas');
                    }

                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::solicitadasAction',  '_route' => 'abajas',);
                }

                // abajas_new
                if ($pathinfo === '/directivo/abajas/new') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::newAction',  '_route' => 'abajas_new',);
                }

                // abajas_show
                if (preg_match('#^/directivo/abajas/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::showAction',)), array('_route' => 'abajas_show'));
                }

                // abajas_create
                if ($pathinfo === '/directivo/abajas/create') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::createAction',  '_route' => 'abajas_create',);
                }

                // abajas_edit
                if (preg_match('#^/directivo/abajas/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::editAction',)), array('_route' => 'abajas_edit'));
                }

                // abajas_update
                if (preg_match('#^/directivo/abajas/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::updateAction',)), array('_route' => 'abajas_update'));
                }

                // abajas_delete
                if (preg_match('#^/directivo/abajas/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::deleteAction',)), array('_route' => 'abajas_delete'));
                }

                // abajas_eliminar
                if (preg_match('#^/directivo/abajas/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::eliminarAction',)), array('_route' => 'abajas_eliminar'));
                }

                // abajas_aprobar
                if (preg_match('#^/directivo/abajas/(?P<id>[^/]+)/aprobar$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::aprobarAction',)), array('_route' => 'abajas_aprobar'));
                }

                // abajas_imprimir
                if (preg_match('#^/directivo/abajas/(?P<id>[^/]+)/aimprimir$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\BajasController::aimprimirAction',)), array('_route' => 'abajas_imprimir'));
                }

            }

            if (0 === strpos($pathinfo, '/empadmin/reportes')) {
                // reportes_hello
                if (preg_match('#^/empadmin/reportes/(?P<name>[^/]+)/hello$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::helloAction',)), array('_route' => 'reportes_hello'));
                }

                // reportes_rform1
                if ($pathinfo === '/empadmin/reportes/rform1') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::rform1Action',  '_route' => 'reportes_rform1',);
                }

                // reportes_rform2
                if ($pathinfo === '/empadmin/reportes/rform2') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::rform2Action',  '_route' => 'reportes_rform2',);
                }

                // reportes_rform3
                if ($pathinfo === '/empadmin/reportes/rform3') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::rform3Action',  '_route' => 'reportes_rform3',);
                }

                // reportes_rform4
                if ($pathinfo === '/empadmin/reportes/rform4') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::rform4Action',  '_route' => 'reportes_rform4',);
                }

                // reportes_rform5
                if ($pathinfo === '/empadmin/reportes/rform5') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::rform5Action',  '_route' => 'reportes_rform5',);
                }

                // reportes_rform6
                if ($pathinfo === '/empadmin/reportes/rform6') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::rform6Action',  '_route' => 'reportes_rform6',);
                }

                // reportes_rform7
                if ($pathinfo === '/empadmin/reportes/rform7') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::rform7Action',  '_route' => 'reportes_rform7',);
                }

                // reportes_rform8
                if ($pathinfo === '/empadmin/reportes/rform8') {
                    return array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::rform8Action',  '_route' => 'reportes_rform8',);
                }

                // reportes_reporte1
                if (preg_match('#^/empadmin/reportes/(?P<desdestr>[^/]+)/(?P<hastastr>[^/]+)/reporte1$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::reporte1Action',)), array('_route' => 'reportes_reporte1'));
                }

                // reportes_reporte2
                if (preg_match('#^/empadmin/reportes/(?P<desdestr>[^/]+)/(?P<hastastr>[^/]+)/reporte2$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::reporte2Action',)), array('_route' => 'reportes_reporte2'));
                }

                // reportes_reporte3
                if (preg_match('#^/empadmin/reportes/(?P<dpto>[^/]+)/reporte3$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::reporte3Action',)), array('_route' => 'reportes_reporte3'));
                }

                // reportes_reporte4
                if (preg_match('#^/empadmin/reportes/(?P<lsubtrans>[^/]+)/reporte4$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::reporte4Action',)), array('_route' => 'reportes_reporte4'));
                }

                // reportes_reporte5
                if (preg_match('#^/empadmin/reportes/(?P<lsubest>[^/]+)/reporte5$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::reporte5Action',)), array('_route' => 'reportes_reporte5'));
                }

                // reportes_reporte6
                if (preg_match('#^/empadmin/reportes/(?P<emp>[^/]+)/reporte6$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::reporte6Action',)), array('_route' => 'reportes_reporte6'));
                }

                // reportes_reporte7
                if (preg_match('#^/empadmin/reportes/(?P<dpto>[^/]+)/reporte7$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::reporte7Action',)), array('_route' => 'reportes_reporte7'));
                }

                // reportes_reporte8
                if (preg_match('#^/empadmin/reportes/(?P<actv>[^/]+)/reporte8$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'afijos\\MainBundle\\Controller\\ReportesController::reporte8Action',)), array('_route' => 'reportes_reporte8'));
                }

            }

        }

        if (0 === strpos($pathinfo, '/test')) {
            // test_index
            if (rtrim($pathinfo, '/') === '/test') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'test_index');
                }

                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'test_index',);
            }

            // test_supdate
            if ($pathinfo === '/test/supdate') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::supdateAction',  '_route' => 'test_supdate',);
            }

            // test_hupdate
            if ($pathinfo === '/test/hupdate') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::hupdateAction',  '_route' => 'test_hupdate',);
            }

            // test_unit
            if ($pathinfo === '/test/unit') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::unitAction',  '_route' => 'test_unit',);
            }

            // test_bug
            if ($pathinfo === '/test/bug') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::bugAction',  '_route' => 'test_bug',);
            }

            // test_tareas
            if ($pathinfo === '/test/tareas') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::tareasAction',  '_route' => 'test_tareas',);
            }

            // test_new_comments
            if ($pathinfo === '/test/ncomments') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::ncommentsAction',  '_route' => 'test_new_comments',);
            }

            // test_signedup
            if ($pathinfo === '/test/signedup') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::signedupAction',  '_route' => 'test_signedup',);
            }

            // test_new_orders
            if ($pathinfo === '/test/norders') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::nordersAction',  '_route' => 'test_new_orders',);
            }

            // test_seguidores
            if ($pathinfo === '/test/seguidores') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::seguidoresAction',  '_route' => 'test_seguidores',);
            }

            // test_ver_notific
            if ($pathinfo === '/test/vernotific') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::vernotificAction',  '_route' => 'test_ver_notific',);
            }

            // test_tipografia
            if ($pathinfo === '/test/tipografia') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::tipografiaAction',  '_route' => 'test_tipografia',);
            }

            // test_elements
            if ($pathinfo === '/test/elements') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::elementsAction',  '_route' => 'test_elements',);
            }

            // test_buttons
            if ($pathinfo === '/test/buttons') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::buttonsAction',  '_route' => 'test_buttons',);
            }

            // test_treeview
            if ($pathinfo === '/test/treeview') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::treeviewAction',  '_route' => 'test_treeview',);
            }

            // test_tablas
            if ($pathinfo === '/test/tablas') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::tablasAction',  '_route' => 'test_tablas',);
            }

            // test_forms
            if ($pathinfo === '/test/forms') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::formsAction',  '_route' => 'test_forms',);
            }

            // test_form_wizard
            if ($pathinfo === '/test/frmwizard') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::frmwizardAction',  '_route' => 'test_form_wizard',);
            }

            // test_wysiwyg
            if ($pathinfo === '/test/wysiwyg') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::wysiwygAction',  '_route' => 'test_wysiwyg',);
            }

            // test_widgets
            if ($pathinfo === '/test/widgets') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::widgetsAction',  '_route' => 'test_widgets',);
            }

            // test_calendario
            if ($pathinfo === '/test/calendario') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::calendarioAction',  '_route' => 'test_calendario',);
            }

            // test_galeria
            if ($pathinfo === '/test/galeria') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::galeriaAction',  '_route' => 'test_galeria',);
            }

            // test_user_perfil
            if ($pathinfo === '/test/perfil') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::uperfilAction',  '_route' => 'test_user_perfil',);
            }

            // test_tabla_precio
            if ($pathinfo === '/test/tbprecio') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::tbprecioAction',  '_route' => 'test_tabla_precio',);
            }

            // test_factura
            if ($pathinfo === '/test/factura') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::facturaAction',  '_route' => 'test_factura',);
            }

            // test_user_login
            if ($pathinfo === '/test/login') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::loginAction',  '_route' => 'test_user_login',);
            }

            // test_error4
            if ($pathinfo === '/test/error4') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::error4Action',  '_route' => 'test_error4',);
            }

            // test_error5
            if ($pathinfo === '/test/error5') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::error5Action',  '_route' => 'test_error5',);
            }

            // test_grid
            if ($pathinfo === '/test/grid') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::gridAction',  '_route' => 'test_grid',);
            }

            // test_blanco
            if ($pathinfo === '/test/blanco') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::blancoAction',  '_route' => 'test_blanco',);
            }

            // test_user_logout
            if ($pathinfo === '/test/logout') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'test_user_logout',);
            }

            // test_prueba
            if ($pathinfo === '/test/pruebach') {
                return array (  '_controller' => 'AFijos\\TestBundle\\Controller\\DefaultController::pruebachAction',  '_route' => 'test_prueba',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
