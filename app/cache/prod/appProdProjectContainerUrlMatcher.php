<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/category')) {
                // category
                if (rtrim($pathinfo, '/') === '/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'category');
                    }

                    return array (  '_controller' => 'CompaniesBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                }
                not_category:

                // category_new
                if ($pathinfo === '/category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_category_new;
                    }

                    return array (  '_controller' => 'CompaniesBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }
                not_category_new:

                // category_show
                if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'CompaniesBundle\\Controller\\CategoryController::showAction',));
                }
                not_category_show:

                // category_edit
                if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'CompaniesBundle\\Controller\\CategoryController::editAction',));
                }
                not_category_edit:

                // category_delete
                if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'CompaniesBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_category_delete:

            }

            // contact
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'CompaniesBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
            }

        }

        // news
        if ($pathinfo === '/news') {
            return array (  '_controller' => 'CompaniesBundle\\Controller\\NewsController::indexAction',  '_route' => 'news',);
        }

        if (0 === strpos($pathinfo, '/person')) {
            // person_index
            if (rtrim($pathinfo, '/') === '/person') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_person_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'person_index');
                }

                return array (  '_controller' => 'CompaniesBundle\\Controller\\personController::indexAction',  '_route' => 'person_index',);
            }
            not_person_index:

            // person_new
            if ($pathinfo === '/person/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_person_new;
                }

                return array (  '_controller' => 'CompaniesBundle\\Controller\\personController::newAction',  '_route' => 'person_new',);
            }
            not_person_new:

            // person_show
            if (preg_match('#^/person/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_person_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_show')), array (  '_controller' => 'CompaniesBundle\\Controller\\personController::showAction',));
            }
            not_person_show:

            // person_edit
            if (preg_match('#^/person/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_person_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_edit')), array (  '_controller' => 'CompaniesBundle\\Controller\\personController::editAction',));
            }
            not_person_edit:

            // person_delete
            if (preg_match('#^/person/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_person_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_delete')), array (  '_controller' => 'CompaniesBundle\\Controller\\personController::deleteAction',));
            }
            not_person_delete:

        }

        if (0 === strpos($pathinfo, '/office')) {
            // office_index
            if (rtrim($pathinfo, '/') === '/office') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_office_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'office_index');
                }

                return array (  '_controller' => 'CompaniesBundle\\Controller\\officeController::indexAction',  '_route' => 'office_index',);
            }
            not_office_index:

            // office_new
            if ($pathinfo === '/office/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_office_new;
                }

                return array (  '_controller' => 'CompaniesBundle\\Controller\\officeController::newAction',  '_route' => 'office_new',);
            }
            not_office_new:

            // office_show
            if (preg_match('#^/office/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_office_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'office_show')), array (  '_controller' => 'CompaniesBundle\\Controller\\officeController::showAction',));
            }
            not_office_show:

            // office_edit
            if (preg_match('#^/office/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_office_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'office_edit')), array (  '_controller' => 'CompaniesBundle\\Controller\\officeController::editAction',));
            }
            not_office_edit:

            // office_delete
            if (preg_match('#^/office/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_office_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'office_delete')), array (  '_controller' => 'CompaniesBundle\\Controller\\officeController::deleteAction',));
            }
            not_office_delete:

        }

        if (0 === strpos($pathinfo, '/company')) {
            // company_index
            if (rtrim($pathinfo, '/') === '/company') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_company_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'company_index');
                }

                return array (  '_controller' => 'CompaniesBundle\\Controller\\companyController::indexAction',  '_route' => 'company_index',);
            }
            not_company_index:

            // company_new
            if ($pathinfo === '/company/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_company_new;
                }

                return array (  '_controller' => 'CompaniesBundle\\Controller\\companyController::newAction',  '_route' => 'company_new',);
            }
            not_company_new:

            // company_show
            if (preg_match('#^/company/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_company_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_show')), array (  '_controller' => 'CompaniesBundle\\Controller\\companyController::showAction',));
            }
            not_company_show:

            // company_edit
            if (preg_match('#^/company/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_company_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_edit')), array (  '_controller' => 'CompaniesBundle\\Controller\\companyController::editAction',));
            }
            not_company_edit:

            // company_delete
            if (preg_match('#^/company/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_company_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_delete')), array (  '_controller' => 'CompaniesBundle\\Controller\\companyController::deleteAction',));
            }
            not_company_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
