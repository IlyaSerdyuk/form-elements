<?php

namespace ZFbase\FormElements\Element;

use Zend\Form\Element;
use Zend\Form\ElementPrepareAwareInterface;
use Zend\Form\FormInterface;
use Zend\InputFilter\InputProviderInterface;

abstract class PeriodAbstract extends Element implements InputProviderInterface, ElementPrepareAwareInterface
{
    /**
     * @var Element\DateTime
     */
    protected $fromElement;

    /**
     * @var Element\DateTime
     */
    protected $tillElement;

    /**
     * @return Element\DateTime
     */
    public function getFromElement()
    {
        return $this->fromElement;
    }

    /**
     * @return Element\DateTime
     */
    public function getTillElement()
    {
        return $this->tillElement;
    }

    /**
     * @return array|Element\DateTime[]
     */
    public function getElements()
    {
        return [$this->fromElement, $this->tillElement];
    }

    /**
     * @param array $attributes
     * @return PeriodAbstract
     */
    public function setFromAttributes(array $attributes)
    {
        $this->fromElement->setAttributes($attributes);
        return $this;
    }

    /**
     * @return array
     */
    public function getFromAttributes()
    {
        return $this->fromElement->getAttributes();
    }

    /**
     * @param array $attributes
     * @return PeriodAbstract
     */
    public function setTillAttributes(array $attributes)
    {
        $this->tillElement->setAttributes($attributes);
        return $this;
    }

    /**
     * @return array
     */
    public function getTillAttributes()
    {
        return $this->tillElement->getAttributes();
    }

    /**
     * @return array|string[]
     */
    public function getValue()
    {
        return [
            'from' => $this->fromElement->getValue(),
            'till' => $this->tillElement->getValue(),
        ];
    }

    /**
     * @param FormInterface $form
     */
    public function prepareElement(FormInterface $form)
    {
        $name = $this->getName();
        $this->fromElement->setName($name . '[from]');
        $this->tillElement->setName($name . '[till]');
    }

    /**
     * @return array
     */
    public function getInputSpecification()
    {
        return [
            'name' => $this->getName(),
            'required' => false,
            'filters' => [],
            'validators' => [],
        ];
    }

    public function __clone()
    {
        $this->fromElement = clone $this->fromElement;
        $this->tillElement = clone $this->tillElement;
    }
}
