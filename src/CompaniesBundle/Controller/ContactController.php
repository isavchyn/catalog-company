<?php
namespace CompaniesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     * 
     */
    public function indexAction()
    {
        $text = "contact page";

        return $this->render('contact/index.html.twig', array(
            'text' => $text,            
        ));
    }
}

?>