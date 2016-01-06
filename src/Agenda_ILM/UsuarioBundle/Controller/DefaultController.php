<?php

namespace Agenda_ILM\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Agenda_ILM\UsuarioBundle\Entity\Usuario;
use Agenda_ILM\UsuarioBundle\Form\Frontend\UsuarioPerfilType;
use Agenda_ILM\UsuarioBundle\Form\Frontend\UsuarioRegistroType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    /**
     * Muestra el formulario de login
     */
    public function loginAction(Request $peticion)
    {
        $sesion = $peticion->getSession();

        $error = $peticion->attributes->get(
            SecurityContext::AUTHENTICATION_ERROR,
            $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
        );

        return $this->render('UsuarioBundle:Default:login.html.twig', array(
            'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
            'error'         => $error
        ));
    }

    /**
     * Muestra la caja de login que se incluye en el lateral de la mayoría de páginas del sitio web.
     * Esta caja se transforma en información y enlaces cuando el usuario se loguea en la aplicación.
     * La respuesta se marca como privada para que no se añada a la cache pública. El trozo de plantilla
     * que llama a esta función se sirve a través de ESI
     *
     * @param string $id El valor del bloque `id` de la plantilla,
     *                   que coincide con el valor del atributo `id` del elemento <body>
     */
    public function cajaLoginAction($id = '')
    {
        $usuario = $this->get('security.context')->getToken()->getUser();

        $respuesta = $this->render('UsuarioBundle:Default:cajaLogin.html.twig', array(
            'id'      => $id,
            'usuario' => $usuario
        ));

        $respuesta->setMaxAge(30);

        return $respuesta;
    }

    /**
     * Muestra el formulario para que se registren los nuevos usuarios. Además
     * se encarga de procesar la información y de guardar la información en la base de datos
     */
    public function registroAction(Request $peticion)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario = new Usuario();
        $usuario->setPermiteEmail(true);

        $formulario = $this->createForm(new UsuarioRegistroType(), $usuario);

        $formulario->handleRequest($peticion);

        if ($formulario->isValid()) {
            // Completar las propiedades que el usuario no rellena en el formulario
            $usuario->setSalt(md5(time()));

            $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
            $passwordCodificado = $encoder->encodePassword(
                $usuario->getPassword(),
                $usuario->getSalt()
            );
            $usuario->setPassword($passwordCodificado);

            // Guardar el nuevo usuario en la base de datos
            $em->persist($usuario);
            $em->flush();

            // Crear un mensaje flash para notificar al usuario que se ha registrado correctamente
            $this->get('session')->getFlashBag()->add('info',
                '¡Enhorabuena! Te has registrado correctamente'
            );

            // Loguear al usuario automáticamente
            $token = new UsernamePasswordToken($usuario, null, 'frontend', $usuario->getRoles());
            $this->container->get('security.context')->setToken($token);

            return $this->redirect($this->generateUrl('_welcomeBase'));
        }

        return $this->render('UsuarioBundle:Default:registro.html.twig', array(
            'formulario' => $formulario->createView()
        ));
    }

    /**
     * Muestra el formulario con toda la información del perfil del usuario logueado.
     * También permite modificar la información y guarda los cambios en la base de datos
     */
    public function perfilAction(Request $peticion)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario = $this->get('security.context')->getToken()->getUser();
        $formulario = $this->createForm(new UsuarioPerfilType(), $usuario);
        $formulario
            ->remove('registrarme')
            ->add('guardar', 'submit', array(
                'label' => 'Guardar cambios',
                'attr'  => array('class' => 'boton')
            ))
        ;

        $passwordOriginal = $formulario->getData()->getPassword();

        $formulario->handleRequest($peticion);

        if ($formulario->isValid()) {
            // Si el usuario no ha cambiado el password, su valor es null después
            // de hacer el ->bindRequest(), por lo que hay que recuperar el valor original

            if (null == $usuario->getPassword()) {
                $usuario->setPassword($passwordOriginal);
            }
            // Si el usuario ha cambiado su password, hay que codificarlo antes de guardarlo
            else {
                $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
                $passwordCodificado = $encoder->encodePassword(
                    $usuario->getPassword(),
                    $usuario->getSalt()
                );
                $usuario->setPassword($passwordCodificado);
            }

            $em->persist($usuario);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info',
                'Los datos de tu perfil se han actualizado correctamente'
            );

            return $this->redirect($this->generateUrl('usuario_perfil'));
        }

        return $this->render('UsuarioBundle:Default:perfil.html.twig', array(
            'usuario'    => $usuario,
            'formulario' => $formulario->createView()
        ));
    }

}
