<?php

namespace Shapecode\Bundle\CookieConsentBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Shapecode\Bundle\CookieConsentBundle\DependencyInjection
 * @author  Nikita Loges
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('shapecode_cookie_consent');
        $rootNode
            ->children()
                ->arrayNode('layout')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('position')->defaultValue('top')->end()
                        ->booleanNode('static')->defaultFalse()->end()
                        ->scalarNode('theme')->defaultValue('edgeless')->end()
                        ->arrayNode('palette')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->arrayNode('popup')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->scalarNode('background')->defaultValue('#252e39')->end()
                                        ->scalarNode('text')->defaultValue('#ffffff')->end()
                                    ->end()
                                ->end()
                                ->arrayNode('button')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->scalarNode('background')->defaultValue('#14a7d0')->end()
                                        ->scalarNode('text')->defaultValue('#ffffff')->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
                ->scalarNode('policy_url')->defaultNull()->end()
                ->scalarNode('policy_route')->defaultNull()->end()
                ->scalarNode('template')->defaultNull()->end()
                ->scalarNode('assets_on')->defaultTrue()->end()
            ->end();

        return $treeBuilder;
    }

}
