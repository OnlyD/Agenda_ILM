<?php

namespace Agenda_ILM\ContactoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ContactoBundle:Default:index.html.twig', array('name' => $name));
    }
}
