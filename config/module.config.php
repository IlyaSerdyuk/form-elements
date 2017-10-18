<?php

namespace ZFbase\FormElements;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'form_elements' => [
        'aliases' => [
            'dateperiod'  => Form\Element\DatePeriod::class,
            'date_period' => Form\Element\DatePeriod::class,
            'datePeriod'  => Form\Element\DatePeriod::class,
            'DatePeriod'  => Form\Element\DatePeriod::class,

            'timeperiod'  => Form\Element\TimePeriod::class,
            'time_period' => Form\Element\TimePeriod::class,
            'timePeriod'  => Form\Element\TimePeriod::class,
            'TimePeriod'  => Form\Element\TimePeriod::class,

            'autocomplete' => Form\Element\Autocomplete::class,
            'Autocomplete' => Form\Element\Autocomplete::class,

            'multi_autocomplete' => Form\Element\MultiAutocomplete::class,
            'multiautocomplete'  => Form\Element\MultiAutocomplete::class,
            'multiAutocomplete'  => Form\Element\MultiAutocomplete::class,
            'MultiAutocomplete'  => Form\Element\MultiAutocomplete::class,
        ],
        'factories' => [
            Form\Element\DatePeriod::class => InvokableFactory::class,
            Form\Element\TimePeriod::class => InvokableFactory::class,
            Form\Element\Autocomplete::class => InvokableFactory::class,
            Form\Element\MultiAutocomplete::class => InvokableFactory::class,
        ],
    ],

    'view_helpers' => [
        'aliases' => [
            'formdateperiod'   => View\FormDatePeriod::class,
            'form_date_period' => View\FormDatePeriod::class,
            'formDatePeriod'   => View\FormDatePeriod::class,
            'FormDatePeriod'   => View\FormDatePeriod::class,

            'formtimeperiod'   => View\FormTimePeriod::class,
            'form_time_period' => View\FormTimePeriod::class,
            'formTimePeriod'   => View\FormTimePeriod::class,
            'FormTimePeriod'   => View\FormTimePeriod::class,

            'formautocomplete'  => View\FormAutocomplete::class,
            'form_autocomplete' => View\FormAutocomplete::class,
            'formAutocomplete'  => View\FormAutocomplete::class,
            'FormAutocomplete'  => View\FormAutocomplete::class,

            'formmultiautocomplete'   => View\FormMultiAutocomplete::class,
            'form_multi_autocomplete' => View\FormMultiAutocomplete::class,
            'formMultiAutocomplete'   => View\FormMultiAutocomplete::class,
            'FormMultiAutocomplete'   => View\FormMultiAutocomplete::class,
        ],
        'invokables' => [
            View\FormDatePeriod::class => InvokableFactory::class,
            View\FormTimePeriod::class => InvokableFactory::class,
            View\FormAutocomplete::class => InvokableFactory::class,
            View\FormMultiAutocomplete::class => InvokableFactory::class,
        ],
    ],

];
