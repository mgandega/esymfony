<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            if (0 === strpos($pathinfo, '/_console')) {
                // console
                if ('/_console' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_console;
                    }

                    return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
                }
                not_console:

                // console_exec
                if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_console_exec;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
                }
                not_console_exec:

            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/pages')) {
                    // admin_pages_index
                    if ('/admin/pages' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_pages_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'admin_pages_index');
                        }

                        return array (  '_controller' => 'PagesBundle\\Controller\\PagesController::indexAction',  '_route' => 'admin_pages_index',);
                    }
                    not_admin_pages_index:

                    // admin_pages_show
                    if (preg_match('#^/admin/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_pages_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pages_show')), array (  '_controller' => 'PagesBundle\\Controller\\PagesController::showAction',));
                    }
                    not_admin_pages_show:

                    // admin_pages_new
                    if ('/admin/pages/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_pages_new;
                        }

                        return array (  '_controller' => 'PagesBundle\\Controller\\PagesController::newAction',  '_route' => 'admin_pages_new',);
                    }
                    not_admin_pages_new:

                    // admin_pages_edit
                    if (preg_match('#^/admin/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_pages_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pages_edit')), array (  '_controller' => 'PagesBundle\\Controller\\PagesController::editAction',));
                    }
                    not_admin_pages_edit:

                    // admin_pages_delete
                    if (preg_match('#^/admin/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_pages_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pages_delete')), array (  '_controller' => 'PagesBundle\\Controller\\PagesController::deleteAction',));
                    }
                    not_admin_pages_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/produits')) {
                    // admin_produits_index
                    if ('/admin/produits' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_produits_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'admin_produits_index');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::indexAction',  '_route' => 'admin_produits_index',);
                    }
                    not_admin_produits_index:

                    // admin_produits_show
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_produits_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::showAction',));
                    }
                    not_admin_produits_show:

                    // admin_produits_new
                    if ('/admin/produits/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_produits_new;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::newAction',  '_route' => 'admin_produits_new',);
                    }
                    not_admin_produits_new:

                    // admin_produits_edit
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_produits_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::editAction',));
                    }
                    not_admin_produits_edit:

                    // admin_produits_delete
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_produits_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::deleteAction',));
                    }
                    not_admin_produits_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/commandes')) {
                    // admin_commandes_index
                    if ('/admin/commandes' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_commandes_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'admin_commandes_index');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::indexAction',  '_route' => 'admin_commandes_index',);
                    }
                    not_admin_commandes_index:

                    // admin_commandes_show
                    if (preg_match('#^/admin/commandes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_commandes_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_commandes_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::showAction',));
                    }
                    not_admin_commandes_show:

                }

                elseif (0 === strpos($pathinfo, '/admin/categories')) {
                    // admin_categories_index
                    if ('/admin/categories' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_categories_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'admin_categories_index');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::indexAction',  '_route' => 'admin_categories_index',);
                    }
                    not_admin_categories_index:

                    // admin_categories_show
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_categories_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::showAction',));
                    }
                    not_admin_categories_show:

                    // admin_categories_new
                    if ('/admin/categories/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_categories_new;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::newAction',  '_route' => 'admin_categories_new',);
                    }
                    not_admin_categories_new:

                    // admin_categories_edit
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_categories_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::editAction',));
                    }
                    not_admin_categories_edit:

                    // admin_categories_delete
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_categories_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::deleteAction',));
                    }
                    not_admin_categories_delete:

                }

            }

            // ecommerce_adresse
            if (0 === strpos($pathinfo, '/adresses') && preg_match('#^/adresses(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_adresse')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::adressesAction',  'format' => 'php',));
            }

            // ecommerce_ajouter
            if (0 === strpos($pathinfo, '/ajouter') && preg_match('#^/ajouter/(?P<id>[^/\\.]++)(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_ajouter')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::ajouterAction',  'format' => 'php',));
            }

            // validationCommande
            if (0 === strpos($pathinfo, '/api/banque') && preg_match('#^/api/banque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validationCommande')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesController::validationCommandeAction',));
            }

            if (0 === strpos($pathinfo, '/articles')) {
                // article_show
                if (preg_match('#^/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::showAction',));
                }

                // article_create
                if ('/articles' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_article_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
                }
                not_article_create:

            }

        }

        elseif (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/me')) {
                // menu
                if ('/menu' === $pathinfo) {
                    return array (  '_controller' => 'PagesBundle\\Controller\\DefaultController::menuAction',  '_route' => 'menu',);
                }

                // mescategories
                if (0 === strpos($pathinfo, '/mescategories') && preg_match('#^/mescategories/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mescategories')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::mescategoriesAction',));
                }

                if (0 === strpos($pathinfo, '/media/cache/resolve')) {
                    // liip_imagine_filter_runtime
                    if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_liip_imagine_filter_runtime;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
                    }
                    not_liip_imagine_filter_runtime:

                    // liip_imagine_filter
                    if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_liip_imagine_filter;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
                    }
                    not_liip_imagine_filter:

                }

            }

            // ecommerce_mon-compte
            if (0 === strpos($pathinfo, '/mon-compte') && preg_match('#^/mon\\-compte(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_mon-compte')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::moncompteAction',  'format' => 'php',));
            }

            // ecommerce_mot-de-passe-perdu
            if (0 === strpos($pathinfo, '/mot-de-passe-perdu') && preg_match('#^/mot\\-de\\-passe\\-perdu(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_mot-de-passe-perdu')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::motdepasseperduAction',  'format' => 'php',));
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            // page
            if (0 === strpos($pathinfo, '/pages') && preg_match('#^/pages/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'PagesBundle\\Controller\\DefaultController::pagesAction',));
            }

            // ecommerce_panier
            if ('/panier' === $pathinfo) {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::panierAction',  'format' => 'php',  '_route' => 'ecommerce_panier',);
            }

            if (0 === strpos($pathinfo, '/pr')) {
                // ecommerce_produit
                if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/\\.]++)(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_produit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::produitAction',  'format' => 'php',));
                }

                if (0 === strpos($pathinfo, '/profile')) {
                    // fos_user_profile_show
                    if ('/profile' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_profile_show;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                    }
                    not_fos_user_profile_show:

                    // fos_user_profile_edit
                    if ('/profile/edit' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_profile_edit;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                    }
                    not_fos_user_profile_edit:

                    // fos_user_change_password
                    if ('/profile/change-password' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_change_password;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                    }
                    not_fos_user_change_password:

                }

                // prepareCommande
                if ('/prepareCommande' === $pathinfo) {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesController::prepareCommandeAction',  '_route' => 'prepareCommande',);
                }

            }

        }

        // ecommerce_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'ecommerce_homepage');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::indexAction',  '_route' => 'ecommerce_homepage',);
        }

        // ecommerce_cron
        if ('/cron' === $pathinfo) {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::cronAction',  '_route' => 'ecommerce_cron',);
        }

        // ecommerce_connexion
        if (0 === strpos($pathinfo, '/connexion') && preg_match('#^/connexion(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_connexion')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::connexionAction',  'format' => 'php',));
        }

        // ecommerce_inscription
        if (0 === strpos($pathinfo, '/inscription') && preg_match('#^/inscription(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_inscription')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::inscriptionAction',  'format' => 'php',));
        }

        if (0 === strpos($pathinfo, '/facture')) {
            // ecommerce_facture
            if (preg_match('#^/facture(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_facture')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::factureAction',  'format' => 'php',));
            }

            // ecommerce_facturesPDF
            if (0 === strpos($pathinfo, '/factures/pdf') && preg_match('#^/factures/pdf/(?P<id>[^/\\.]++)(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_facturesPDF')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::facturesPDFAction',  'format' => 'php',));
            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/livraison')) {
                // ecommerce_livraison
                if (preg_match('#^/livraison(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_livraison')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::livraisonAction',  'format' => 'php',));
                }

                // livraionAdresseSuppression
                if (0 === strpos($pathinfo, '/livraison/adresse/suppression') && preg_match('#^/livraison/adresse/suppression/(?P<id>[^/\\.]++)(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraionAdresseSuppression')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::livraionAdresseSuppressionAction',  'format' => 'php',));
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // ecommerce_texte
        if (0 === strpos($pathinfo, '/texte') && preg_match('#^/texte(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_texte')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::texteAction',  'format' => 'php',));
        }

        // ecommerce_validation
        if (0 === strpos($pathinfo, '/validation') && preg_match('#^/validation(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_validation')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::validationAction',  'format' => 'php',));
        }

        // ecommerce_nouveau-mot-de-passe
        if (0 === strpos($pathinfo, '/nouveau-mot-de-passe') && preg_match('#^/nouveau\\-mot\\-de\\-passe(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_nouveau-mot-de-passe')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::nouveaumotdepasseAction',  'format' => 'php',));
        }

        if (0 === strpos($pathinfo, '/re')) {
            // ecommerce_recherchetraitement
            if ('/recherchetraitement' === $pathinfo) {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::recherchetraitementAction',  '_route' => 'ecommerce_recherchetraitement',);
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        // ecommerce_supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/\\.]++)(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_supprimer')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::supprimerAction',  'format' => 'php',));
        }

        // setLivraisonOnSession
        if ('/setLivraisonOnSession' === $pathinfo) {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\EcommerceController::setLivraisonOnSessionAction',  '_route' => 'setLivraisonOnSession',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
