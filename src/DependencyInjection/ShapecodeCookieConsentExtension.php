<?php

declare(strict_types=1);

namespace Shapecode\Bundle\CookieConsentBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class ShapecodeCookieConsentExtension extends ConfigurableExtension
{
    /**
     * @inheritDoc
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        $locator = new FileLocator(__DIR__ . '/../Resources/config');
        $loader  = new YamlFileLoader($container, $locator);
        $loader->load('services.yml');

        $container->setParameter('shapecode_cookie_consent.config', $mergedConfig);
    }
}
