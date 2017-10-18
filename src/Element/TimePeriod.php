<?php

namespace ZFbase\FormElements\Element;

use Zend\Form\Element\Time;
use DatePeriod as PhpDatePeriod;

/**
 * @method Time getFromElement()
 * @method Time getTillElement()
 * @method array|Time[] getElements()
 * @method TimePeriod setFromAttributes(array $attributes)
 * @method TimePeriod setTillAttributes(array $attributes)
 */
class TimePeriod extends PeriodAbstract
{
    /**
     * @param null|int|string $name
     * @param array           $options
     */
    public function __construct($name = null, $options = array())
    {
        $this->fromElement = new Time('from');
        $this->tillElement = new Time('till');

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
            $value['from'] = $value->getStartDate()->format('H:i:s');
            $value['till'] = $value->getEndDate()->format('H:i:s');
        } else if (! is_array($value)) {
            throw new \InvalidArgumentException;
        }

        $this->fromElement->setValue($value['from']);
        $this->tillElement->setValue($value['till']);
        return $this;
    }
}
