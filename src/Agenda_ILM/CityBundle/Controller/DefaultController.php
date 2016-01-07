<?php

namespace Agenda_ILM\CityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    public function ciudadAction(){
        return $this->render('CityBundle:Default:ciudad.html.twig');
    }
}
