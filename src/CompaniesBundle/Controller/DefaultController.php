<?php

namespace CompaniesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CompaniesBundle:Default:index.html.twig');
    }
}
