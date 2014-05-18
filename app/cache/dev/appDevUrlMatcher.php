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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // Admin_home
            if ($pathinfo === '/admin/accueil') {
                return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\AccueilController::indexAction',  '_route' => 'Admin_home',);
            }

            if (0 === strpos($pathinfo, '/admin/categorie')) {
                // Liste_categorie
                if ($pathinfo === '/admin/categorie') {
                    return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\CategorieController::indexAction',  '_route' => 'Liste_categorie',);
                }

                if (0 === strpos($pathinfo, '/admin/categorie/aj')) {
                    // Liste_categorie_ajax
                    if ($pathinfo === '/admin/categorie/ajax') {
                        return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\CategorieController::index_ajaxAction',  '_route' => 'Liste_categorie_ajax',);
                    }

                    // Ajout_categorie
                    if ($pathinfo === '/admin/categorie/ajout') {
                        return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\CategorieController::ajoutAction',  '_route' => 'Ajout_categorie',);
                    }

                }

                // Spr_categorie
                if (0 === strpos($pathinfo, '/admin/categorie/supprimer') && preg_match('#^/admin/categorie/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Spr_categorie')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\CategorieController::supprimerAction',));
                }

                // Maj_categorie
                if (0 === strpos($pathinfo, '/admin/categorie/modifier') && preg_match('#^/admin/categorie/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Maj_categorie')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\CategorieController::modifierAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/produit')) {
                // Liste_produit
                if ($pathinfo === '/admin/produit') {
                    return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\ProduitController::indexAction',  '_route' => 'Liste_produit',);
                }

                if (0 === strpos($pathinfo, '/admin/produit/aj')) {
                    // Liste_produit_ajax
                    if ($pathinfo === '/admin/produit/ajax') {
                        return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\ProduitController::index_ajaxAction',  '_route' => 'Liste_produit_ajax',);
                    }

                    // Ajout_produit
                    if ($pathinfo === '/admin/produit/ajout') {
                        return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\ProduitController::ajoutAction',  '_route' => 'Ajout_produit',);
                    }

                }

                // Spr_produit
                if (0 === strpos($pathinfo, '/admin/produit/supprimer') && preg_match('#^/admin/produit/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Spr_produit')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\ProduitController::supprimerAction',));
                }

                // Maj_produit
                if (0 === strpos($pathinfo, '/admin/produit/modifier') && preg_match('#^/admin/produit/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Maj_produit')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\ProduitController::modifierAction',));
                }

                if (0 === strpos($pathinfo, '/admin/produit/info-supp')) {
                    // Info_supp_produit
                    if (preg_match('#^/admin/produit/info\\-supp/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Info_supp_produit')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\InfoSuppProduitController::indexAction',));
                    }

                    // Ajouter_info_supp_produit
                    if (preg_match('#^/admin/produit/info\\-supp/(?P<id_prod>\\d+)/ajouter$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Ajouter_info_supp_produit')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\InfoSuppProduitController::ajouterAction',));
                    }

                    // Spr_infosupp
                    if (preg_match('#^/admin/produit/info\\-supp/(?P<id_prod>\\d+)/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Spr_infosupp')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\InfoSuppProduitController::supprimerAction',));
                    }

                    // Maj_infosupp
                    if (preg_match('#^/admin/produit/info\\-supp/(?P<id_prod>\\d+)/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Maj_infosupp')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\InfoSuppProduitController::modifierAction',));
                    }

                }

            }

            // Maj_texte
            if (0 === strpos($pathinfo, '/admin/texte/modifier') && preg_match('#^/admin/texte/modifier/(?P<texte>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Maj_texte')), array (  '_controller' => 'Projet\\AdminBundle\\Controller\\TexteController::modifierAction',));
            }

            if (0 === strpos($pathinfo, '/admin/cgv')) {
                // Liste_cgv
                if ($pathinfo === '/admin/cgv') {
                    return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\CgvController::indexAction',  '_route' => 'Liste_cgv',);
                }

                // Ajouter_cgv
                if ($pathinfo === '/admin/cgv/ajouter') {
                    return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\CgvController::ajouterAction',  '_route' => 'Ajouter_cgv',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Projet\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                    }

                    // login_check
                    if ($pathinfo === '/admin/login_check') {
                        return array('_route' => 'login_check');
                    }

                }

                // logout
                if ($pathinfo === '/admin/logout') {
                    return array('_route' => 'logout');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
