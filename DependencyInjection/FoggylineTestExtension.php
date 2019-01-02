<?php

namespace Foggyline\TestBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class FoggylineTestExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('parameters.yml');

        //foreach ($config as $key => $value) {
            //$container->setParameter('test.'.$key, $value);
        //}

        //$container->setParameter('test.'.'twitter', $config['twitter']['client_secret']);

        //$def = $container->getDefinition('foggyline_test.example');
        //$def->replaceArgument(0, $config['twitter']['client_id']);
        //$def->replaceArgument(1, $config['twitter']['client_secret']);

        $container->setParameter('param_one', $config['twitter']['client_id']);
        $container->setParameter('param_two', $config['twitter']['client_secret']);
    }
}
