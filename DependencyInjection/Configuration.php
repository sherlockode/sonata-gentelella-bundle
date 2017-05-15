<?php

namespace Sherlockode\SonataGentelellaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sherlockode_sonata_gentelella');

        $rootNode
            ->children()
                ->scalarNode('fast_click')
                    ->defaultFalse()
                ->end()
                ->scalarNode('nprogress')
                    ->defaultFalse()
                ->end()
                ->scalarNode('chart')
                    ->defaultFalse()
                ->end()
                ->scalarNode('echarts')
                    ->defaultFalse()
                ->end()
                ->scalarNode('gauge')
                    ->defaultFalse()
                ->end()
                ->scalarNode('bootstrap_progressbar')
                    ->defaultFalse()
                ->end()
                ->scalarNode('skycons')
                    ->defaultFalse()
                ->end()
                ->scalarNode('flot')
                    ->defaultFalse()
                ->end()
                ->scalarNode('datejs')
                    ->defaultFalse()
                ->end()
                ->scalarNode('jqvmap')
                    ->defaultFalse()
                ->end()
                ->scalarNode('bootstrap_daterangerpicker')
                    ->defaultFalse()
                ->end()
                ->scalarNode('calendar')
                    ->defaultFalse()
                ->end()
                ->scalarNode('select2')
                    ->defaultFalse()
                ->end()
                ->scalarNode('switchery')
                    ->defaultFalse()
                ->end()
                ->scalarNode('starrr')
                    ->defaultFalse()
                ->end()
                ->scalarNode('jquery_tag_input')
                    ->defaultFalse()
                ->end()
                ->scalarNode('bootstrap_wysiwyg')
                    ->defaultFalse()
                ->end()
                ->scalarNode('parsley')
                    ->defaultFalse()
                ->end()
                ->scalarNode('autosize')
                    ->defaultFalse()
                ->end()
                ->scalarNode('jquery_autocomplete')
                    ->defaultFalse()
                ->end()
                ->scalarNode('ion_rangeslider')
                    ->defaultFalse()
                ->end()
                ->scalarNode('bootstrap_colorpicker')
                    ->defaultFalse()
                ->end()
                ->scalarNode('cropper')
                    ->defaultFalse()
                ->end()
                ->scalarNode('jquery_inputmask')
                    ->defaultFalse()
                ->end()
                ->scalarNode('jquery_knob')
                    ->defaultFalse()
                ->end()
                ->scalarNode('dropzone')
                    ->defaultFalse()
                ->end()
                ->scalarNode('validator')
                    ->defaultFalse()
                ->end()
                ->scalarNode('jquery_smart_wizard')
                    ->defaultFalse()
                ->end()
                ->scalarNode('pnotify')
                    ->defaultFalse()
                ->end()
                ->scalarNode('jquery_sparklines')
                    ->defaultFalse()
                ->end()
                ->scalarNode('morris')
                    ->defaultFalse()
                ->end()
                ->scalarNode('animate')
                    ->defaultFalse()
                ->end()
                ->scalarNode('easy_pie_chart')
                    ->defaultFalse()
                ->end()
                ->scalarNode('echarts')
                    ->defaultFalse()
                ->end()
                ->scalarNode('datatables')
                    ->defaultFalse()
                ->end()
                ->scalarNode('demo')
                    ->defaultFalse()
                ->end()
            ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
