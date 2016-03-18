<?php
	      
namespace Agenda_ILM\ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Agenda_ILM\ProductoBundle\Entity\Producto;
use Agenda_ILM\ProductoBundle\Form\Frontend\ProductoType;


class DefaultController extends Controller
{
    public function productoAction()
    {
		$em = $this->getDoctrine() -> getManager();
		$producto = $em->getRepository('ProductoBundle:Producto')->findAll();
		return $this->render('ProductoBundle:Default:productos.html.twig', array('producto' => $producto));
    }
	
	
	public function Nuevo_ProductoAction()
    {
        $producto = new Producto();
        $formulario = $this->createForm(new ProductoType(), $producto);
        return $this->render('ProductoBundle:Default:nuevoProducto.html.twig', array(
            'formulario' => $formulario->createView()
        ));
    }
	public function guardarProductoAction()
    {
        $producto = new Producto();
        $formulario = $this->createForm(new ProductoType(), $producto);
        return $this->render('ProductoBundle:Default:nuevoProducto.html.twig', array(
            'formulario' => $formulario->createView()
        ));
    }
	

}
