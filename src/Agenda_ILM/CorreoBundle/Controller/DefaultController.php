<?php

namespace Agenda_ILM\CorreoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CorreoBundle:Default:index.html.twig', array('name' => $name));
    }
}
