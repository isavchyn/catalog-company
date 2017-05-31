<?php
namespace CompaniesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends Controller
{
    /**
     * @Route("/about", name="about")
     * 
     */
    public function indexAction()
    {
        $text = "about page";

        return $this->render('about/index.html.twig', array(
            'text' => $text,            
        ));
    }
}

?>