<?php

namespace ZFbase\FormElements\Element;

use Zend\Form\Element;
use Zend\InputFilter\InputProviderInterface;

class MultiAutocomplete extends Element implements InputProviderInterface
{
    public function getInputSpecification()
    {
        return [
            'name' => $this->getName(),
            'required' => false,
            'filters' => [],
            'validators' => [],
        ];
    }
}
