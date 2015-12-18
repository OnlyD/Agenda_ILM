<?php

namespace Agenda_ILM\UsuarioBundle\Form\Frontend;
use Symfony\Component\Form\AbstractType; 
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType 
{ 
	public function buildForm(FormBuilderInterface $builder, array $options) 
	{ 
		$builder ->add('Nombre')
				 ->add('Apellido') 
				 ->add('Password') 
				 ->add('Email') 
				 ->add('Role'); 
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver) 
	{ 
		$resolver->setDefaults(array( 'data_class' => 'Agenda_ILM\UsuarioBundle\Entity\Usuario' )); 
	}

	public function getName() 
	{ 
		return 'agenda_ilm_usuariobundle_usuariotype';
	}
}