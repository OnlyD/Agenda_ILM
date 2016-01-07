<?php

namespace Agenda_ILM\ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function productoAction()
    {
		return $this->render('ProductoBundle:Default:productos.html.twig');
    }
	
	
}
