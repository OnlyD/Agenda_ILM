<?php

namespace Agenda_ILM\EstadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function estadoAction()
    {
        return $this->render('EstadoBundle:Default:estado.html.twig');
    }
}
