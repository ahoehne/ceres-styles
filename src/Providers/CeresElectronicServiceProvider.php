<?php

namespace CeresElectronic\Providers;

use IO\Helper\TemplateContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class CeresElectronicServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register() {
     
    }

    public function boot (Twig $twig, Dispatcher $eventDispatcher)
    {

         // provide template to use for single items
        $eventDispatcher->listen('IO.tpl.item', function(TemplateContainer $container,  $templateData) {
            $container->setTemplate("CeresElectronic::Item.SingleItem");
            return false;
        });
        // provide template to use for homepage
        $eventDispatcher->listen('IO.tpl.home', function(TemplateContainer $container, $templateData) {
            $container->setTemplate("CeresElectronic::Homepage.Homepage");
            return false;
        });
        // provide template to use for item categories
        $eventDispatcher->listen('IO.tpl.category.item', function(TemplateContainer $container, $templateData) {
            $container->setTemplate("CeresElectronic::Category.Item.CategoryItem");
            return false;
        });
    }
}
