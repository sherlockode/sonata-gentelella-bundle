<?php

namespace Sherlockode\SonataGentelellaBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class SherlockodeSonataGentelellaExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
    }

    public function prepend(ContainerBuilder $container)
    {
        $bundleConfiguration = $container->getExtensionConfig('sherlockode_sonata_gentelella')[0];

        $bundles = $container->getParameter('kernel.bundles');
        if (isset($bundles['SonataAdminBundle'])) {
            $config = [
                'templates' => [
                    'user_block'                 => 'SherlockodeSonataGentelellaBundle:Core:user_block.html.twig',
                    'add_block'                  => 'SherlockodeSonataGentelellaBundle:Core:add_block.html.twig',
                    'layout'                     => 'SherlockodeSonataGentelellaBundle::standard_layout.html.twig',
                    'ajax'                       => 'SherlockodeSonataGentelellaBundle::ajax_layout.html.twig',
                    'dashboard'                  => 'SherlockodeSonataGentelellaBundle:Core:dashboard.html.twig',
                    'search'                     => 'SherlockodeSonataGentelellaBundle:Core:search.html.twig',
                    'list'                       => 'SherlockodeSonataGentelellaBundle:CRUD:list.html.twig',
                    'filter'                     => 'SherlockodeSonataGentelellaBundle:Form:filter_admin_fields.html.twig',
                    'show'                       => 'SherlockodeSonataGentelellaBundle:CRUD:show.html.twig',
                    'show_compare'               => 'SherlockodeSonataGentelellaBundle:CRUD:show_compare.html.twig',
                    'edit'                       => 'SherlockodeSonataGentelellaBundle:CRUD:edit.html.twig',
                    'preview'                    => 'SherlockodeSonataGentelellaBundle:CRUD:preview.html.twig',
                    'history'                    => 'SherlockodeSonataGentelellaBundle:CRUD:history.html.twig',
                    'acl'                        => 'SherlockodeSonataGentelellaBundle:CRUD:acl.html.twig',
                    'history_revision_timestamp' => 'SherlockodeSonataGentelellaBundle:CRUD:history_revision_timestamp.html.twig',
                    'action'                     => 'SherlockodeSonataGentelellaBundle:CRUD:action.html.twig',
                    'select'                     => 'SherlockodeSonataGentelellaBundle:CRUD:list__select.html.twig',
                    'list_block'                 => 'SherlockodeSonataGentelellaBundle:Block:block_admin_list.html.twig',
                    'search_result_block'        => 'SherlockodeSonataGentelellaBundle:Block:block_search_result.html.twig',
                    'short_object_description'   => 'SherlockodeSonataGentelellaBundle:Helper:short-object-description.html.twig',
                    'delete'                     => 'SherlockodeSonataGentelellaBundle:CRUD:delete.html.twig',
                    'batch'                      => 'SherlockodeSonataGentelellaBundle:CRUD:list__batch.html.twig',
                    'batch_confirmation'         => 'SherlockodeSonataGentelellaBundle:CRUD:batch_confirmation.html.twig',
                    'inner_list_row'             => 'SherlockodeSonataGentelellaBundle:CRUD:list_inner_row.html.twig',
                    'outer_list_rows_mosaic'     => 'SherlockodeSonataGentelellaBundle:CRUD:list_outer_rows_mosaic.html.twig',
                    'outer_list_rows_list'       => 'SherlockodeSonataGentelellaBundle:CRUD:list_outer_rows_list.html.twig',
                    'outer_list_rows_tree'       => 'SherlockodeSonataGentelellaBundle:CRUD:list_outer_rows_tree.html.twig',
                    'base_list_field'            => 'SherlockodeSonataGentelellaBundle:CRUD:base_list_field.html.twig',
                    'pager_links'                => 'SherlockodeSonataGentelellaBundle:Pager:links.html.twig',
                    'pager_results'              => 'SherlockodeSonataGentelellaBundle:Pager:results.html.twig',
                    'tab_menu_template'          => 'SherlockodeSonataGentelellaBundle:Core:tab_menu_template.html.twig',
                    'knp_menu_template'          => 'SherlockodeSonataGentelellaBundle:Menu:sonata_menu.html.twig',
                ],
                'assets'    => [
                    'stylesheets' => [
                        'bundles/sherlockodesonatagentelella/css/bootstrap.min.css',
                        'bundles/sherlockodesonatagentelella/css/font-awesome.min.css',
                        'bundles/sherlockodesonatagentelella/css/icheck.css',
                        'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
                        'bundles/sonatacore/vendor/select2/select2.css',
                        'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css',
                        'bundles/sherlockodesonatagentelella/css/prettify.min.css',
                        'bundles/sherlockodesonatagentelella/css/custom.min.css',
                        'bundles/sherlockodesonatagentelella/css/sonata-gentelella.css',
                    ],
                    'javascripts' => [
//                        'bundles/sherlockodesonatagentelella/js/jquery.min.js',
                        /* JQuery has been moved in header. This is bad, but necessary until https://github.com/sonata-project/SonataAdminBundle/pull/3647 complete.
                         * This will be cleaned up with the version 4.0 of sonata admin */

                        'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js',
                        'bundles/sherlockodesonatagentelella/js/moment.min.js',
                        'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
                        'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js',
                        'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js',
                        'bundles/sherlockodesonatagentelella/js/bootstrap.min.js',
                        'bundles/sonataadmin/vendor/jquery-form/jquery.form.js',
                        'bundles/sonataadmin/jquery/jquery.confirmExit.js',
                        'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js',
                        'bundles/sonatacore/vendor/select2/select2.min.js',
                        'bundles/sonataadmin/vendor/iCheck/icheck.min.js',
                        'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js',
                        'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js',
                        'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js',
                        'bundles/sonataadmin/vendor/readmore-js/readmore.min.js',
                        'bundles/sonataadmin/Admin.js',
                        'bundles/sonataadmin/treeview.js',
                    ],
                ],
            ];

            if (isset($bundleConfiguration['fast_click'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/fastclick.js';
            }

            if (isset($bundleConfiguration['nprogress'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/nprogress.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/nprogress.css';
            }

            if (isset($bundleConfiguration['chart'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/Chart.min.js';
            }

            if (isset($bundleConfiguration['gauge'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/gauge.min.js';
            }

            if (isset($bundleConfiguration['bootstrap_progressbar'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/bootstrap-progressbar.min.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/bootstrap-progressbar-3.3.4.min.css';
            }

            if (isset($bundleConfiguration['skycons'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/skycons.js';
            }

            if (isset($bundleConfiguration['flot'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.flot.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.flot.pie.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.flot.time.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.flot.stack.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.flot.resize.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.flot.orderBars.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.flot.spline.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/curvedLines.js';
            }

            if (isset($bundleConfiguration['datejs'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/date.js';
            }

            if (isset($bundleConfiguration['jqvmap'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.vmap.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.vmap.world.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.vmap.sampledata.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/jqvmap.min.css';
            }

            if (isset($bundleConfiguration['bootstrap_daterangerpicker'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/daterangepicker.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/daterangepicker.css';
            }

            if (isset($bundleConfiguration['calendar'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/fullcalendar.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/fullcalendar-locale-all.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/fullcalendar.min.css';
            }

            if (isset($bundleConfiguration['echarts'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/echarts.min.js';
            }

            if (isset($bundleConfiguration['switchery'])) {
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/switchery.min.css';
            }

            if (isset($bundleConfiguration['starrr'])) {
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/starrr.css';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/starrr.js';
            }

            if (isset($bundleConfiguration['parsley'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/parsley.min.js';
            }

            if (isset($bundleConfiguration['autosize'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/autosize.min.js';
            }

            if (isset($bundleConfiguration['jquery_autocomplete'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.autocomplete.min.js';
            }

            if (isset($bundleConfiguration['jquery_tag_input'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.tagsinput.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/jquery.tagsinput.css';
            }

            if (isset($bundleConfiguration['bootstrap_wysiwyg'])) {
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/prettify.min.css';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/bootstrap-wysiwyg.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.hotkeys.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/prettify.js';
            }

            if (isset($bundleConfiguration['ion_rangeslider'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/ion.rangeSlider.min.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/normalize.css';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/ion.rangeSlider.css';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/ion.rangeSlider.skinFlat.css';
            }

            if (isset($bundleConfiguration['bootstrap_colorpicker'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/bootstrap-colorpicker.min.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/bootstrap-colorpicker.min.css';
            }

            if (isset($bundleConfiguration['cropper'])) {
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/cropper.min.css';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/cropper.min.js';
            }

            if (isset($bundleConfiguration['jquery_inputmask'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.inputmask.bundle.min.js';
            }

            if (isset($bundleConfiguration['jquery_knob'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.knob.min.js';
            }

            if (isset($bundleConfiguration['dropzone'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/dropzone.min.js';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/dropzone.min.css';
            }

            if (isset($bundleConfiguration['validator'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/validator.js';
            }

            if (isset($bundleConfiguration['jquery_smart_wizard'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.smartWizard.js';
            }

            if (isset($bundleConfiguration['pnotify'])) {
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/pnotify.custom.min.css';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/pnotify.custom.min.js';
            }

            if (isset($bundleConfiguration['jquery_sparklines'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.sparkline.min.js';
            }

            if (isset($bundleConfiguration['morris'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/raphael.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/morris.min.js';
            }

            if (isset($bundleConfiguration['animate'])) {
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/animate.min.css';
            }

            if (isset($bundleConfiguration['easy_pie_chart'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.easypiechart.min.js';
            }

            if (isset($bundleConfiguration['echarts'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/echarts.min.js';
            }

            if (isset($bundleConfiguration['datatables'])) {
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/dataTables.bootstrap.min.css';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/buttons.bootstrap.min.css';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/fixedHeader.bootstrap.min.css';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/responsive.bootstrap.min.css';
                $config['assets']['stylesheets'][] = 'bundles/sherlockodesonatagentelella/css/scroller.bootstrap.min.css';

                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jquery.dataTables.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/dataTables.bootstrap.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/dataTables.buttons.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/buttons.bootstrap.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/buttons.flash.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/buttons.html5.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/buttons.print.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/dataTables.fixedHeader.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/dataTables.keyTable.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/dataTables.responsive.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/responsive.bootstrap.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/dataTables.scroller.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/jszip.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/pdfmake.min.js';
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/vfs_fonts.js';
            }

            if (isset($bundleConfiguration['demo'])) {
                $config['assets']['javascripts'][] = 'bundles/sherlockodesonatagentelella/js/custom.js';
            }

            $container->prependExtensionConfig('sonata_admin', $config);
        }
    }
}
