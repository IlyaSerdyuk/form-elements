<?php

namespace ZFbase\FormElements\View;

use Zend\Form\View\Helper\FormInput;

class FormAutocomplete extends FormInput
{
    /**
     * Attributes valid for the input tag Autocomplete
     *
     * @var array
     */
    protected $validTagAttributes = [
        'name'         => true,
        'autofocus'    => true,
        'disabled'     => true,
        'readonly'     => true,
        'required'     => true,
        'value'        => true,
        'allow-create' => true,
        'source-url'   => true,
    ];
}
