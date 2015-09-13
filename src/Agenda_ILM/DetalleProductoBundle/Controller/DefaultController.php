<?php

namespace Agenda_ILM\DetalleProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DetalleProductoBundle:Default:index.html.twig', array('name' => $name));
    }
}
