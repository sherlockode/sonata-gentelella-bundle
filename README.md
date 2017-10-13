# Sonata Gentelella Theme

A simple integration of [Gentelella Alela!](https://colorlib.com/polygon/gentelella/index.html) theme for [SonataAdminBundle](https://github.com/sonata-project/SonataAdminBundle).

This bundle automaticaly define a default configuration for sonata admin, so the installation is as simple as :

```
composer require sherlockode/sonata-gentelella-bundle
```

and in the `app/AppKernel.php` :

```php
public function registerBundles()
{
    $bundles = [
        ...
        new Sherlockode\SonataGentelellaBundle\SherlockodeSonataGentelellaBundle(),
    ];
}
```

**Most of the templates blocks are unchanged, but for the theme, we have been forced to move somes of them. So if you've overrided the sonata themplates, there could be some glitchs**


All plugins are disable by default, to enable plugins, in the config.yml : 
 ```
 sherlockode_sonata_gentelella:
     fast_click: true
     nprogress: true
     chart: true
     echarts: true
     gauge: true
     bootstrap_progressbar: true
     skycons: true
     flot: true
     datejs: true
     jqvmap: true
     bootstrap_daterangerpicker: true
     calendar: true
     switchery: true
     starrr: true
     jquery_tag_input: true
     bootstrap_wysiwyg: true
     parsley: true
     cropper: true
     autosize: true
     jquery_autocomplete: true
     ion_rangeslider: true
     bootstrap_colorpicker: true
     jquery_inputmask: true
     jquery_knob: true
     dropzone: true
     validator: true
     jquery_smart_wizard: true
     pnotify: true
     jquery_sparklines: true
     morris: true
     animate: true
     easy_pie_chart: true
     echarts: true
     datatables: true
 ```
 
  To see the demo (need all plugins) 
  ```
  sherlockode_sonata_gentelella:
      demo: true
  ```
