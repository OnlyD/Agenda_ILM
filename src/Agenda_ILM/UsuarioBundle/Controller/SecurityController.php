<?php

namespace Agenda_ILM\UsuarioBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Agenda_ILM\UsuarioBundle\Form\Frontend\UsuarioType;

class SecurityController extends Controller
{
	
	public function registroAction()
	{
		$usuario = new Usuario(); 
		$formulario = $this->createForm(new UsuarioType(), $usuario);
		return $this->render(
		'UsuarioBundle:Default:registro.html.twig',
		array(
			'formulario' => $formulario->createView()
		)
		);

	}
	 /**
     * @Route("/login", name="login_route")
     */
    public function loginAction(Request $request)
    {
		
		$authenticationUtils = $this->get('security.authentication_utils');

		// get the login error if there is one
		$error = $authenticationUtils->getLastAuthenticationError();

		// last username entered by the user
		$lastUsername = $authenticationUtils->getLastUsername();
		
		return $this->render(
        'UsuarioBundle:Default:login.html.twig',
        array(
            // last username entered by the user
            'last_username' => $lastUsername,
            'error'         => $error,
        )
		);
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }
}
