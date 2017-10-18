<?php

namespace ZFbase\FormElements\Element;

use Zend\Form\Element\Date;
use DatePeriod as PhpDatePeriod;

/**
 * @method Date getFromElement()
 * @method Date getTillElement()
 * @method array|Date[] getElements()
 * @method DatePeriod setFromAttributes(array $attributes)
 * @method DatePeriod setTillAttributes(array $attributes)
 */
class DatePeriod extends PeriodAbstract
{
    /**
     * @param null|int|string $name
     * @param array           $options
     */
    public function __construct($name = null, $options = array())
    {
        $this->fromElement = new Date('from');
        $this->tillElement = new Date('till');

        parent::__construct($name, $options);
    }

    /**
     * @param PhpDatePeriod|array|string[] $value
     * @return DatePeriod
     * @throws \InvalidArgumentException
     */
    public function setValue($value)
    {
        if ($value instanceof PhpDatePeriod) {
            $value['from'] = $value->getStartDate()->format('Y-m-d');
            $value['till'] = $value->getEndDate()->format('Y-m-d');
        } else if (! is_array($value)) {
            throw new \InvalidArgumentException;
        }

        $this->fromElement->setValue($value['from']);
        $this->tillElement->setValue($value['till']);
        return $this;
    }
}
