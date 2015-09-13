<?php

namespace Agenda_ILM\SeguimientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SeguimientoBundle:Default:index.html.twig', array('name' => $name));
    }
}
