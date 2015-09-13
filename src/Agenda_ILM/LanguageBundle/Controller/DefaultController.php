<?php

namespace Agenda_ILM\LanguageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LanguageBundle:Default:index.html.twig', array('name' => $name));
    }
}
