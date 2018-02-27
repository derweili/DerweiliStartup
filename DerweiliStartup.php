<?php

namespace DerweiliStartup;

use Shopware\Components\Plugin;

class DerweiliStartup extends Plugin {

    public static function getSubscribedEvents()
    {
        return [
          'Enlight_Controller_Action_PreDispatch_Frontend_Detail' => 'onPreDispatch'
        ];
    }

    public function onPreDispatch(\Enlight_Event_EventArgs $args)
    {
        /** @var \Shopware_Controllers_Frontend_RoutingDemonstration $subject */
        $subject = $args->getSubject();
        $subject->View()->addTemplateDir(__DIR__ . '/Resources/views');
    }

}