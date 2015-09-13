<?php

namespace Agenda_ILM\CityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CityBundle:Default:index.html.twig', array('name' => $name));
    }
}
