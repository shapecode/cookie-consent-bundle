<?php

namespace Shapecode\Bundle\CookieConsentBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Class ShapecodeCookieConsentExtension
 *
 * @package Shapecode\Bundle\CookieConsentBundle\DependencyInjection
 * @author  Nikita Loges
 * @company tenolo GbR
 */
class ShapecodeCookieConsentExtension extends ConfigurableExtension
{
    /**
     * @inheritDoc
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        $locator = new FileLocator(__DIR__ . '/../Resources/config');
        $loader = new YamlFileLoader($container, $locator);
        $loader->load('services.yml');

        $container->setParameter('shapecode_cookie_consent.config', $mergedConfig);
    }

}
