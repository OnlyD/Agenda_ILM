<?php

namespace Agenda_ILM\TelefonoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TelefonoBundle:Default:index.html.twig', array('name' => $name));
    }
}
