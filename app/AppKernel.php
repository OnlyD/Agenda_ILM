<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new Agenda_ILM\ContactoBundle\ContactoBundle(),
            new Agenda_ILM\ClienteBundle\ClienteBundle(),
            new Agenda_ILM\ProveedorBundle\ProveedorBundle(),
            new Agenda_ILM\CorreoBundle\CorreoBundle(),
            new Agenda_ILM\TelefonoBundle\TelefonoBundle(),
            new Agenda_ILM\DireccionBundle\DireccionBundle(),
            new Agenda_ILM\TipoDatoBundle\TipoDatoBundle(),
            new Agenda_ILM\CityDatoBundle\CityDatoBundle(),
            new Agenda_ILM\CityBundle\CityBundle(),
            new Agenda_ILM\CountryBundle\CountryBundle(),
            new Agenda_ILM\LanguageBundle\LanguageBundle(),
            new Agenda_ILM\EventoBundle\EventoBundle(),
            new Agenda_ILM\SeguimientoBundle\SeguimientoBundle(),
            new Agenda_ILM\RecordatorioBundle\RecordatorioBundle(),
            new Agenda_ILM\ProductoBundle\ProductoBundle(),
            new Agenda_ILM\DetalleProductoBundle\DetalleProductoBundle(),
            new Agenda_ILM\UsuarioBundle\UsuarioBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
