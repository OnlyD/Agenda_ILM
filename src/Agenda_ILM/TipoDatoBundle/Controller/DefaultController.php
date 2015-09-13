<?php

namespace Agenda_ILM\TipoDatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TipoDatoBundle:Default:index.html.twig', array('name' => $name));
    }
}
