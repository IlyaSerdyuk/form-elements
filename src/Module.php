<?php

namespace ZFbase\FormElements;

use Zend\Mvc\MvcEvent;
use Zend\Form\View\Helper\FormElement;

class Module
{
    const VERSION = '0.1.0-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(MvcEvent $event)
    {
        /* @var $formElement FormElement */
        $formElement = $event->getApplication()
              ->getServiceManager()
              ->get('ViewHelperManager')
              ->get('formelement');

        $formElement->addType(Form\Element\DatePeriod::class, 'formDatePeriod');
        $formElement->addType(Form\Element\TimePeriod::class, 'formTimePeriod');
        $formElement->addType(Form\Element\Autocomplete::class, 'formAutocomplete');
        $formElement->addType(Form\Element\MultiAutocomplete::class, 'formMultiAutocomplete');
    }
}
