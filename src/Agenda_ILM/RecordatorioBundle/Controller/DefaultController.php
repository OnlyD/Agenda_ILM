<?php

namespace Agenda_ILM\RecordatorioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RecordatorioBundle:Default:index.html.twig', array('name' => $name));
    }
}
