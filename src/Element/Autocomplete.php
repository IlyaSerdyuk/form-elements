<?php

namespace ZFbase\FormElements\Element;

use Zend\Form\Element;
use Zend\InputFilter\InputProviderInterface;
use Zend\Filter;

class Autocomplete extends Element implements InputProviderInterface
{
    protected $attributes = [
        'allow-create' => true,  // Can I add new values?
        'source-url' => null,    // Url to data source
    ];

    /**
     * @param bool $allow
     * @return Autocomplete
     */
    public function setAllowCreate($allow)
    {
        $this->attributes['allow-create'] = (bool) $allow;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowCreate()
    {
        return $this->attributes['allow-create'];
    }

    /**
     * @param string $url
     * @return Autocomplete
     */
    public function setSourceUrl($url)
    {
        $this->attributes['source-url'] = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->attributes['source-url'];
    }

    /**
     * @return array
     */
    public function getInputSpecification()
    {
        return [
            'name' => $this->getName(),
            'required' => true,
            'filters' => [
                ['name' => Filter\StringTrim::class],
            ],
            'validators' => [],
        ];
    }
}
