<?php

namespace Agenda_ILM\ProveedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function provedoresAction()
    {
        return $this->render('ProveedorBundle:Default:provedores.html.twig');
    }
}
