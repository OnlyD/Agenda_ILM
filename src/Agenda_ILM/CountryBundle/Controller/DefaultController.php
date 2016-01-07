<?php

namespace Agenda_ILM\CountryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function paisAction()
    {
        return $this->render('CountryBundle:Default:pais.html.twig');
    }
}
