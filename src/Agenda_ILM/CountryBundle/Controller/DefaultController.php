<?php

namespace Agenda_ILM\CountryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CountryBundle:Default:index.html.twig', array('name' => $name));
    }
}
