<?php

namespace Eyewitness\Cron\Tests;

use Eyewitness\Cron\FieldFactory;
use PHPUnit\Framework\TestCase;

/**
 * @author Michael Dowling <mtdowling@gmail.com>
 */
class FieldFactoryTest extends TestCase
{
    /**
     * @covers \Cron\FieldFactory::getField
     */
    public function testRetrievesFieldInstances()
    {
        $mappings = array(
            0 => 'Eyewitness\Cron\MinutesField',
            1 => 'Eyewitness\Cron\HoursField',
            2 => 'Eyewitness\Cron\DayOfMonthField',
            3 => 'Eyewitness\Cron\MonthField',
            4 => 'Eyewitness\Cron\DayOfWeekField',
        );

        $f = new FieldFactory();

        foreach ($mappings as $position => $class) {
            $this->assertSame($class, get_class($f->getField($position)));
        }
    }

    /**
     * @covers \Cron\FieldFactory::getField
     * @expectedException InvalidArgumentException
     */
    public function testValidatesFieldPosition()
    {
        $f = new FieldFactory();
        $f->getField(-1);
    }
}
