<?php

namespace Agenda_ILM\ProductoBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;




class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id');
        $builder->add('Codigo','textarea');
		$builder->add('Nombre');
		$builder->add('Descripcion','textarea');
		$builder->add('Costo','textarea');
		$builder->add('Status');
		$builder->add('FechaCreacion');
		$builder->add('FechaModificacion');
	
    }

    public function getName()
    {
        return 'Producto';
    }
	
	


 
	
	
	
}
