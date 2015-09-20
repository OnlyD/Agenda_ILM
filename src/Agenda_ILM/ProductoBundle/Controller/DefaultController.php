<?php

namespace Agenda_ILM\ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProductoBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function holaAction($name)
	{
		return $this->render('ProductoBundle:Default:index.html.twig', array('name' => $name));
	}
}
