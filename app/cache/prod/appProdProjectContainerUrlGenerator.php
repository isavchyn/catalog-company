<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\CategoryController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\CategoryController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\CategoryController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\NewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'person_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\personController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/person/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'person_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\personController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/person/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'person_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\personController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/person',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'person_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\personController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/person',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'person_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\personController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/person',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'office_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\officeController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/office/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'office_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\officeController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/office/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'office_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\officeController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/office',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'office_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\officeController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/office',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'office_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\officeController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/office',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'company_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\companyController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/company/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'company_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\companyController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/company/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'company_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\companyController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/company',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'company_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\companyController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/company',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'company_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CompaniesBundle\\Controller\\companyController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/company',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
