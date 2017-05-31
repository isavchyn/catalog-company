<?php
namespace CompaniesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * @Route("/news", name="news")
     * 
     */
    public function indexAction()
    {
        $text = "News page";

        return $this->render('news/index.html.twig', array(
            'text' => $text,            
        ));
    }
}

?>