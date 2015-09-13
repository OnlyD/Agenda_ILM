<?php

namespace Agenda_ILM\EventoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EventoBundle:Default:index.html.twig', array('name' => $name));
    }
}
