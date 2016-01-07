<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function homeAction()
    {
        return $this->render('default/home.html.twig');
    }
	public function alertAction()
    {
        return $this->render('default/alert.html.twig');
    }
	public function nameuserAction()
    {
		
        return $this->render('default/datosusuario.html.twig');
    }
	public function productosAction()
    {
		
        return $this->render('default/datosusuario.html.twig');
    }
	
}
